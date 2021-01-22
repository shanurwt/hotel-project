<?php

$conn = mysqli_connect('localhost', 'arbros', 'ayush', 'manager');

if (!$conn) {
    echo 'Connection Error' . mysqli_connect_errno();
}

if (isset($_POST['submit'])) {
    
    $username = $_POST['username'];
    $credit = $_POST['credit'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $cvv = $_POST['cvv'];

    $query  = "SELECT room_price FROM rooms LIMIT 110 ";

    if ($result = mysqli_query($conn, $query)) {
        $n = mysqli_num_rows($result);
        printf("Result set has %d rows.\n", $n);

        while ($row = mysqli_fetch_row($result)) {

            printf("%s", $row[0]);
            $amount = $row[0];
        }
    } else {
        echo "lolo";
    }

    if (mysqli_query($conn, "INSERT INTO payment(username, credit, month, year, cvv, amount)
    VALUES ('$username', '$credit', '$month', '$year', '$cvv', '$amount')")) {
        header("Location: ../thanks/thanks.html");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
