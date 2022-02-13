<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>error</title>
</head>
<body>
    <?php
    $conn = new mysqli("localhost","nhwwnhww","123Wjnhwwnhww","website");

    $username = $_POST['username'];
    $realname = $_POST['realname'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `user`(`username`, `realname`, `password`)
    VALUES ('$username','$realname','$password')";
    $result = $conn->query($sql);

    if (!$conn){
        echo "link database error";
    }

    if (!$result){
        echo "<h1>register error</h1>";
        echo "<h1>Please try again</h1>";
    }
    else {
        header("Location:../test.html");
    }
    ?>

<br>
<button href='../test.html'>back</button>
</body>
</html>
