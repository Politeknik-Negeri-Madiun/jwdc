<?php
$servername = "localhost";
$database = "db_peserta";
$username = "root";
$password = "";
 
// Create prosedural mysqli connection
$conn = mysqli_connect($servername, $username, $password, $database);
 
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>