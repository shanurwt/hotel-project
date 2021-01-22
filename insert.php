<?php

$conn = mysqli_connect('localhost', 'arbros', 'ayush', 'manager');

if (!$conn) {
    echo 'Connection Error' . mysqli_connect_errno();
}

if (isset($_POST['submit'])) {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $people = $_POST['people'];

    // $sql = "INSERT INTO guests(name,email,contact,gender,people)
    //  VALUES ('$name','$email','$contact','$gender','$people')";


    if (mysqli_query($conn, "INSERT INTO guests(name,email,contact,gender,people)
    VALUES ('$name','$email','$contact','$gender','$people')")) {
        header("Location: ./rooms/rooms.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

