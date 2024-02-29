<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'phptestDB';


$conn = mysqli_connect($hostname,$username,$password,$dbname );  

if(!$conn){
echo die(mysqli_connect_error());
}

$sql ="INSERT INTO student(firstname,lastname,email)
 VALUES('Proxey','villa','proxey@gmail.com')";

try {
  if( mysqli_query($conn,$sql)){
    echo "Insert Successfully.";
  } 
} catch (\Throwable $th) {

echo $sql.' '."<br> <br>"."Insert not Successfully.";
  }



mysqli_close($conn);

?>