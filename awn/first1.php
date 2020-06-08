<?php
    if(!isset($_SESSION['username'])){
        session_destroy()
        header("location: login1.php")
    }
    if(isset($_GET['logout'])){
        session_destroy()
        header("location: login1.php")
    }
    //new banch
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome</h1>
    <p><?php echo $_SESSION['username'] ?></p>
    <a href="first1?logout=1" style='color=red'>LOG OUT</a>
    
</body>
<style>
* {
    margin = 0;
    padding = 0;
    text-align = center;
}
</style>
</html>