<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        #image {
            display: flex;
            flex-direction: row;
        }

        .yellow {
            width: 25%;
        }
    </style>
</head>
<body>
<?php
    // post information
    $search = $_POST['search'];
    $r18 = $_POST['r18'];
    $num = $_POST['num'];

    $url = "https://api.lolicon.app/setu/v2";
    
    // edit on url
    if (empty($search)){
        $url = $url . "?r18=" . $r18 . "&num=" . $num;
    }
    else {
        $url = $url . "?tag=" . $search . "&r18=" . $r18. "&num=" . $num;
    }
    
    // send api request
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT, 4);
    $json = curl_exec($ch);
    if(!$json) {
        echo curl_error($ch);
    }
    curl_close($ch);

    // decode data
    $arr = json_decode($json,true);
    
?>

<div id="image">
    <?php 
        for ($i = 0; $i < $num; $i++){
            echo "<div class='yellow'>";
            echo "<img src='" . $arr['data'][$i]['urls']['original'] . "' alt='error'>";
            echo "</div>";
        }
    ?>
</div>

</body>
</html>