<?php
session_start();
include "conn.php";

if(isset($_POST['email'])){

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE email='$email'";
$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

if($row && password_verify($password, $row['password'])){

    $_SESSION['user'] = $row['email'];
    header("Location: dashboard.php");
    exit();

}else{
    echo "Invalid Email or Password";
}

}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>

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
}

h2{
    text-align:center;
}

input{
    width:100%;
    padding:10px;
    margin-top:5px;
    margin-bottom:15px;
    border:1px solid #ccc;
    border-radius:4px;
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

p{
    text-align:center;
}

</style>

</head>
<body>

<div class="container">

<h2>User Login</h2>

<form method="POST">

<label>Email</label>
<input type="email" name="email" required>

<label>Password</label>
<input type="password" name="password" required>

<button type="submit">Login</button>

<p>Don't have an account? <a href="register.php">Register</a></p>

</form>

</div>

</body>
</html>