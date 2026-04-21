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

}else{
    echo "Invalid Email or Password";
}

}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>

<h2>User Login</h2>

<form method="POST">

<label>Email:</label><br>
<input type="email" name="email" required><br><br>

<label>Password:</label><br>
<input type="password" name="password" required><br><br>

<button type="submit">Login</button>

</form>

</body>
</html>