<?php
$conn = mysqli_connect("localhost", "root", "", "moviedb");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "DELETE FROM movcast WHERE act_id='$_GET[act_id]'";

if(mysqli_query($conn,$sql))
   header("refresh:1;url = indexmc.php");
else
   echo "Not deleted";

?>