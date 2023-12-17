<?php
include 'config.php';  // Include your database connection configuration

session_start();
$user_id = $_SESSION['user_id'];

if (isset($_POST['delete_account'])) {
    // Perform deletion
    $delete_query = "DELETE FROM `user_form` WHERE id = '$user_id'";
    $result = mysqli_query($conn, $delete_query);

    if ($result) {
        // Deletion successful, redirect to a confirmation page or log the user out
        header('location: login.php');
        exit();
    } else { 
        // Deletion failed
        echo "Error: " . mysqli_error($conn);
    }
}
?>
