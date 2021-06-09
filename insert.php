<?php 

if(isset($_POST['submit'])) {
$ACT_ID = $_POST['ACT_ID'];
$ACT_NAME = $_POST['ACT_NAME'];
$ACT_GENDER = $_POST['ACT_GENDER'];

$host="localhost";
$username="root";
$password="";
$dbname="moviedb";

// Create connection
$conn = new mysqli($host, $username, $password,$dbname);
if(!$conn)
{
die('could not connect:'.mysql_error());
}


 $query="insert into ACTOR(ACT_ID,ACT_NAME,ACT_GENDER) values($ACT_ID,'$ACT_NAME','$ACT_GENDER')";
if(!mysql_query($query,$conn))
{
die('Error in inserted'.mysql_error);
}else
{
echo "data inserted";
}
}
?>