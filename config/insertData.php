<?php

include 'dbConn.php';
echo isset($_POST['submit']);
// exit;

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];





    $sql = "INSERT INTO `MyGuests`(`firstname`, `lastname`, `email`) VALUES ('$firstname', '$lastname','$email')";
    echo $sql;
    // exit;
    if ($conn->query($sql) === TRUE) {
        // echo "Data inserted successfully";
        header("Location: ../index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

require_once "../views/form.php";

?>

