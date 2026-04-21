<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}

$username = $_SESSION['user'];
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>

<style>

body{
    font-family: Arial, sans-serif;
    background:#f2f2f2;
}

.container{
    width:350px;
    margin:120px auto;
    background:white;
    padding:30px;
    border-radius:8px;
    box-shadow:0px 0px 10px rgba(0,0,0,0.1);
    text-align:center;
}

h2{
    margin-bottom:20px;
}

.info{
    margin-bottom:15px;
    font-size:16px;
}

button{
    width:100%;
    padding:10px;
    background:#007BFF;
    color:white;
    border:none;
    border-radius:4px;
    cursor:pointer;
}

button:hover{
    background:#0056b3;
}

</style>

</head>
<body>

<div class="container">

<h2>Welcome</h2>

<div class="info">
<strong>Username:</strong> <?php echo $username; ?>
</div>

<div class="info">
<strong>Email:</strong> <?php echo $email; ?>
</div>

<br>

<a href="logout.php">
<button>Logout</button>
</a>

</div>

</body>
</html>