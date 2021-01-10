<?php

$conn = mysqli_connect('localhost', 'arbros', 'ayush', 'manager');

if (!$conn) {
    echo 'Connection Error' . mysqli_connect_errno();
}

if (isset($_POST['submit'])) {
    $si_bed = $_POST['si_bed'];
    $do_bed = $_POST['do_bed'];
    $si_ac = $_POST['si_ac'];
    $do_ac = $_POST['do_ac'];

    $total = ($si_bed * 200) + ($do_bed * 400) + ($si_ac * 750) + ($do_ac * 1000);

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

    // $pizza = mysqli_free_result($result, MYSQLI_ASSOC);


    // mysqli_free_result($result);


    // print_r($pizza);


    // "INSERT INTO rooms(room_id) SELECT id FROM guests ORDER BY id DESC LIMIT 1 ";


    // if (mysqli_query($conn, "INSERT INTO rooms(room_id) VALUES('$room_id')")) {
    //     echo "dona";
    // } else {
    //     echo "Error: " . mysqli_error($conn);
    // };

    if (mysqli_query($conn, "INSERT INTO rooms(room_id, single_bed, double_bed, single_ac, double_ac, room_price)
    VALUES ('$room_id', '$si_bed','$do_bed', '$si_ac', '$do_ac', '$total')")) {
        header("Location: ../payment/payment.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
