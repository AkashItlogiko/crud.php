<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'phptestDB';


$conn = mysqli_connect($hostname,$username,$password,$dbname );  

if(!$conn){
echo die(mysqli_connect_error());
}

//Ay khani update ar kaj kora hiyasa.
$sql ="UPDATE student SET firstname = 'Noyon',lastname='Roy', email='Noyon@gmail.com' WHERE id=3";

try {
 if(mysqli_query($conn,$sql)){
  echo "Update successfully";
 }
} catch (\Throwable $th) {
echo "Undate not successfully";
}



mysqli_close($conn);
?>