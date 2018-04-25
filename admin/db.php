<?php
$connect = new mysqli('localhost','root','','hospital');
if($connect->connect_error){
    echo 'connectionn failed';
    die();
}


?>