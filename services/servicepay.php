<?php

$conn = mysqli_connect('localhost', 'arbros', 'ayush', 'manager');

if (!$conn) {
    echo 'Connection Error' . mysqli_connect_errno();
}

if (isset($_POST['submit'])) {

    $gym = $_POST['gym'];
    $ldry = $_POST['ldry'];
    $msg = $_POST['msg'];
    $prk = $_POST['prk'];
    $tota = "<script> document.write(cost) </script>";
    $total_food = (int)$tota;
    printf("%d RS.\n", $tota);
    echo $tota;
    echo $total_food;
    $total = ($gym * 200) + ($ldry * 150) + ($msg * 300) + ($prk * 0) + $total_food;

    $query  = "SELECT id FROM guests LIMIT 110 ";

    if ($result = mysqli_query($conn, $query)) {
        $n = mysqli_num_rows($result);
        printf("Result set has %d rows.\n", $n);

        while ($row = mysqli_fetch_row($result)) {
            printf("%s", $row[0]);
            $room_id = $row[0];
        }
    } else {
        echo "lolo";
    }

    if (mysqli_query($conn, "INSERT INTO services(room_id, gym, ldry, msg, prk, price)
    VALUES ('$room_id', '$gym', '$ldry', '$msg', '$prk', '$total')")) {
        header("Location: ../payment/payment.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
