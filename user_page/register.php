<?php
$conn = new mysqli("localhost","nhwwnhww","123Wjnhwwnhww","website");

$sql = "INSERT INTO `user`(`username`, `real name`, `password`) VALUES ('". $_POST["username"]. "','". $_POST["realname"] ."','".$_POST["password"]."')";
$result = $conn->query($sql);

echo "Record Inserted";
header("Location:../test.html");