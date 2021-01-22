<?php

$conn = mysqli_connect('localhost', 'arbros', 'ayush', 'manager');

if (!$conn) {
    echo 'Connection Error' . mysqli_connect_errno();
}

$sql = 'SELECT * FROM guests';

$result = mysqli_query($conn, $sql);

// $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <div class="container">

        <?php
        if (isset($_POST['submitDeleteBtn'])) {
            $key = $_POST['keyToDelete'];

            $check = mysqli_query($conn, "SELECT * FROM GUESTS WHERE ID = '$key'");
            // $check = mysqli_query($conn,("SELECT * from guests where id = '$key' ") or die("not found".mysqli_error()));
            $num_rows = mysqli_num_rows($check);
            if (mysqli_num_rows($check) > 0) {
                // $queryDelete = mysqli_query($conn,("DELETE from GUESTS where ID = '$key' ") or die("not deleted".mysql_error()));
                $queryDelete = mysqli_query($conn, "DELETE from GUESTS where ID = '$key'");
        ?>
                <div class="alert alert-warning">
                    <p>Record deleted</p>
                </div>

            <?php
                header("Location: adminpage.php");
            } else {
            ?>
                <div class="alert alert-warning">
                    <p>Record does not exist</p>
                </div>
        <?php }
        }
        ?>
        <table>
            <tr>
                <th>Room_no</th>
                <th>Name</th>
                <th>Email</th>
                <th>Select</th>
                <th>Delete</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($result)) {  ?>
                <tr>
                    <form action="" method="post" role="form">
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td>
                            <input type="checkbox" name="keyToDelete" value="<?php echo $row['id']; ?>" required>
                        </td>
                        <td>
                            <input type="submit" name="submitDeleteBtn" class="btn btn-info">
                        </td>
                    </form>
                </tr>
            <?php  } ?>
            </form>
            </tr>
    </div>
</body>

</html>