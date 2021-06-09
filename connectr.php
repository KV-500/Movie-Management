<?php
$mov_id = filter_input(INPUT_POST, 'mov_id');
$rev_stars = filter_input(INPUT_POST, 'rev_stars');

if (!empty($mov_id)){
if (!empty($rev_stars)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mov";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO rating (mov_id,rev_stars)
values ('$mov_id','$rev_stars')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";

}

else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "  should not be empty";
die();
}
}
else{
echo "mov id should not be empty";
die();
}
?>
<a> </a>
<a href="ins.php"> back</a>