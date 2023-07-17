<?php
$host="localhost";
$u='root';
$p="";

// mysqli OOP
$conOOP=new mysqli($host,$u,$p,"db_peserta");
if($conOOP->connect_error){
    die(" Koneksi gagal".$conOOP->connect_error);
}
echo("koneksi OOP berhasil");

