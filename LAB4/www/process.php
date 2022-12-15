<?php
$user = $_GET['user'];
echo "Pass:" . $_GET['pass'];

if($user == 1){
    echo "Hello";
} else
    echo $user;

echo $user == 1?"Hello":$user;
?>