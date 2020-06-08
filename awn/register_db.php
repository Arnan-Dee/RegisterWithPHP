<?php 
    session_start();
    include('server.php');
    $errors = array();
    if (isset($_POST['reg_user'])){
        $username = mysqli_real_escape_string($conn,$_POST['username']);
    }

    //create a new banch


?>