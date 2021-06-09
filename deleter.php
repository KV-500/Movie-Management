<?php
$conn = mysqli_connect("localhost", "root", "", "moviedb");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "DELETE FROM rating WHERE mov_id='$_GET[mov_id]'";

if(mysqli_query($conn,$sql))
   header("refresh:1;url = indexr.php");
else
   echo "Not deleted";