<?php

// video link :https://youtu.be/gcKkpP-48F4?si=HdJQDG0BwTU61es0


$hostname = 'localhost';
$username = 'root';
$password = '';

// ay jayga phpmyadmin sate php connected kora hoyasa.
$conn = mysqli_connect($hostname,$username,$password);  

if(!$conn){
echo die(mysqli_connect_error());
}

// ay khani php database name create kora hoyasa.

$sql ="CREATE DATABASE phptestDB";

if(mysqli_query($conn,
$sql)){
echo "DB Create successfully.";
}else{
echo mysqli_error($conn);
}

mysqli_close($conn); 
?>