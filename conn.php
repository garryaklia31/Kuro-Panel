<?php

$servername = "localhost";
$dbname = "nquukdtt_Garry";
$username = "nquukdtt_Garry";
$password = "djd2EHqfz3AqTbEX7Q3g";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn) {

die(" PROBLEM WITH CONNECTION : " . mysqli_connect_error());

}
  
?>
