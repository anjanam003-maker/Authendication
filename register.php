<?php

include "conn.php";

if(isset($_POST['email'])){

$user_id = $_POST['user_id'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$date = $_POST['date'];

$sql = "INSERT INTO user (user_id, email, password, created_at)
        VALUES ('$user_id', '$email', '$password', '$date')";

if(mysqli_query($conn,$sql)){
    header("Location: login.php");
}else{
    echo "Error: " . mysqli_error($conn);
}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>

<style>

body{
    font-family: Arial;
    background:#f2f2f2;
}

.container{
    width:350px;
    margin:80px auto;
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
    padding:8px;
    margin-top:5px;
    margin-bottom:15px;
}

button{
    width:100%;
    padding:10px;
    background:#4CAF50;
    color:white;
    border:none;
    cursor:pointer;
}

button:hover{
    background:#45a049;
}

p{
    text-align:center;
}

</style>

</head>
<body>

<div class="container">

<h2>User Registration</h2>

<form method="POST">
    
<label>Name</label>
<input type="text" name="user_id" required>

<label>Email</label>
<input type="email" name="email" required>

<label>Password</label>
<input type="password" name="password" required>

<label>Created At</label>
<input type="datetime-local" name="date" required>

<button type="submit">Register</button>

<p>Already have an account? <a href="login.php">Login</a></p>

</form>

</div>

</body>
</html>