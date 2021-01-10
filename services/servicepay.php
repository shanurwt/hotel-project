<?php

$conn = mysqli_connect('localhost', 'arbros', 'ayush', 'manager');

if (!$conn) {
    echo 'Connection Error' . mysqli_connect_errno();
}

if (isset($_POST['submit'])) {
    $bf = $_POST['bf'];
    $lun = $_POST['lun'];
    $din = $_POST['din'];
    $gym = $_POST['gym'];
    $ldry = $_POST['ldry'];
    $msg = $_POST['msg'];
    $prk = $_POST['prk'];

    $total = ($bf * 200) + ($lun * 400) + ($din * 750) + ($gym * 1000) + ($ldry * 1000) + ($msg * 1000) + ($prk * 1000);

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

    if (mysqli_query($conn, "INSERT INTO rooms(room_id, single_bed, double_bed, single_ac, double_ac, room_price)
    VALUES ('$room_id', '$si_bed','$do_bed', '$si_ac', '$do_ac', '$total')")) {
        header("Location: ../payment/payment.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
