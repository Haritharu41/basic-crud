<?php
include '../config/dbConn.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM `MyGuests` WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        //echo "Data deleted successfully";
        header('location:../index.php');
    } else {
        die(mysqli_error($conn));
    }
}