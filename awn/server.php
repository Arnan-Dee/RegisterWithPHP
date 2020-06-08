<?php
$err = array() ;
$servername = 'localhost';
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$conn = new mysqli($servername, 'root', '');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        exit();
    }
    if(!isset($_SESSION['username'])){
        session_destroy();
        header("location: login.php");
    }

    

$_SESSION['error'] = $err
?>