<?php
$host = "db";
$user = "root";
$pass = "1234";
$db = "db_test";
$port = 3306;
mysqli_connect($host,$user,$pass,$db,$port);

try {
    $link = mysqli_connect($host,$user,$pass,$db);
    mysqli_query($link,"SET NAME utf8");
} catch (Exception $e) {
    echo $e . " :: " . mysqli_errno($link);
}
?>