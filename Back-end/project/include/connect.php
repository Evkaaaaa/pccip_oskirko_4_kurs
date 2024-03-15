<?php
$connect = mysqli_connect('localhost', 'root','','itog');
if (!$connect){
    die('Error connect to DataBase');
}