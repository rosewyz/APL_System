<?php
    include_once 'Helper.php';

    $first = $_POST['first_name'];
    $last = $_POST['last_name'];
    $age = $_POST['age'];
//    $date = $_POST['date'];
//    $branch = $_POST['branch'];
//    $comment = $_POST['comment'];


    $sql = "INSERT INTO Client(first_name, last_name, age) VALUES ('$first', '$last', '$age')";
    mysqli_query($conn, $sql);

//    header("Location: ../index.php?insert=success");

