<?php
include '../config/dbConn.php';

if (isset($_GET['updateid']) && is_numeric($_GET['updateid'])) {
    $id = $_GET['updateid'];


  


    // Fetch student record for the given ID
    $sql = "SELECT * FROM MyGuests WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $email = $row['email'];
    } else {
        echo "<script>alert('No record found for the given ID.'); window.location.href='index.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('Invalid or missing ID.'); window.location.href='index.php';</script>";
    exit();
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uFirstname = $_POST['firstname'];
    $uLastname = $_POST['lastname'];
    $uEmail = $_POST['email'];
    $id = $_POST['id'];

    
    $sql = "UPDATE MyGuests SET firstname='$uFirstname', lastname='$uLastname', email='$uEmail' WHERE id=$id;";
    print_r($sql);

    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

require_once "../views/form.php";
?>


