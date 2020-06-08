<?php
$servername = 'localhost';
$err = array() ;

$conn = new mysqli($servername, 'root', '','registration');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        exit();
    }
    if(!isset($_SESSION['username'])){
        array_push($err,"Fill username");
    }
    if(!isset($_SESSION['password'])){
        array_push($err,"Fill password");
    }

    if(isset($_POST['username'])&&isset($_POST['password'])){
        $en = md5($password);
        $user_check_query = "SELECT * FROM users WHERE username='$username'AND password='$en";
        $result = $mysqli->query($user_check_query);
        $user = $result -> fetch_assoc();
        if($user){
            header("location: first.php");
        }else{
            echo 'wrong password';
        }
        
    }
$_SESSION['error']=$err
?>