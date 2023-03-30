<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname="dbname";

$conn =mysqli_connect($servername, $username, $password,$dbname);




if ($conn->connect_error) {

 die("Connection failed: " . $conn->connect_error);

}

 $sql ="INSERT INTO bca ( username, Email)VALUES ('shakibur','shakibur571@gmail.com')";

 mysqli_query($conn,$sql);





if ($_SERVER["REQUEST_METHOD"] == "GET") {

 if (empty($_GET['name'])) {

 echo "Empty";

 } else {

 echo"ok";

 }

}

?>

<!DOCTYPE html>

<html lang="en">

<head>

 <meta charset="UTF-8">

 <meta http-equiv="X-UA-Compatible" content="IE=edge">

 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <title>Document</title>

</head>

<body>

<form method="GET" action="index.php">

 <h1><b>Register</b></h1>

 <label for="name">Name*</label><br>

 <input type="text" name="name" id="name"> <input type="text" name="name" id="name"><br>

First&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last <br>

<label for="username">Username*</label><br>  

<input type="text" name="username" id="username"> <br>

<label for="email">Email*</label><br>

<input type="email" name="email" id="email"><br>

<label for="password">Password*</label> <br>

<input type="password" name="password" id="password"><br>Short Bio <br>

<textarea name="message" id="" cols="30" rows="10"></textarea><br>

Share a little informatiion about yourself <br><br>

<button>Submit</button><br>

</form>




</body>

</html>