<?php
$conn = mysqli_connect("localhost", "root", "", "moviedb");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "DELETE FROM dir WHERE dir_id='$_GET[dir_id]'";

if(mysqli_query($conn,$sql))
   header("refresh:1;url = indexd.php");
else
   echo "Not deleted";

?>