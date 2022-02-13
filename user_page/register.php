<?php
$conn = new mysqli("localhost","nhwwnhww","123Wjnhwwnhww","website");

$username = $_POST['username'];
$realname = $_POST['realname'];
$password = $_POST['password'];

$sql = "INSERT INTO `user`(`username`, `realname`, `password`)
 VALUES ('$username','$realname','$password')";
$result = $conn->query($sql);

if (!$conn){
    echo "error";
}

if (!$result){
    echo "register error";
}
else {
    header("Location:../test.html");
}
