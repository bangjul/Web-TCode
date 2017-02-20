<?php

//This script is designed by Android-Examples.com
//Define your host here.
$hostname = "localhost";
//Define your database username here.
$username = "root";
//Define your database password here.
$password = "";
//Define your database name here.
$dbname = "qrcode";
 
 $con = mysqli_connect($hostname,$username,$password,$dbname);
 
 $code = $_POST['code'];
 $id_petugas = $_POST['id_petugas'];
 $nama_petugas = $_POST['nama_petugas'];
 //$email = $_POST['email'];
 //$password = $_POST['password'];
 //  $name = "lio";
 // $email = "qqqq";
 // $password = "123";
 
 
 $Sql_Query = "insert into inventori (code, id_petugas, nama_petugas) values ('$code', '$id_petugas', '$nama_petugas')";
 
 if(mysqli_query($con,$Sql_Query)){
 
 echo 'Data Inserted Successfully';
 
 }
 else{
 
 echo 'Try Again';
 
 }
 mysqli_close($con);
?>