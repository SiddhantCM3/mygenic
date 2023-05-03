<?php

$conn = new mysqli('localhost','root','yes','mygenic');

if(!$conn){
    die(mysqli_error($conn));
}
?>
