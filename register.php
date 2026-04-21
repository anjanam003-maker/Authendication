<?php

include "conn.php";

if(isset($_POST['email'])){

$user_id = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$date = $_POST['date'];

$sql = "INSERT INTO user (user_id, email, password)
        VALUES ('$user_id', '$email', '$password', 'date')";

if(mysqli_query($conn,$sql)){
    echo "Registration Successful";
}else{
    echo "Error: " . mysqli_error($conn);
}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
</head>
<body>

<h2>User Registration</h2>

<form method="POST">
    
<label>Name:</label><br>
<input type="text" name="name" required><br><br>

<label>Email:</label><br>
<input type="email" name="email" required><br><br>

<label>Password:</label><br>
<input type="password" name="password" required><br><br>

<label>Created at</label><br>
<input type="datetime" name="date" required><br><br>

<button type="submit">Register</button>

</form>

</body>
</html>