<?php 
session_start();
$_SESSION['user'] = 'admin';
$_SESSION['password'] = 'tajne123';
if(isset($_SESSION["user"])){
    header("location: panel.php");
    exit();
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input id="login">
        <input id="password">
        <button></button>
    </form>
    
</body>
</html>