<?php 

$con = mysqli_connect("localhost","root","tuhanyesus1","toko_online");

//Check connection 
if(mysqli_connect_errno()){
  echo "Koneksi gagal : " . mysqli_connect_error();
  exit();
}

?> 