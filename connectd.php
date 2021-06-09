 <?php
$dir_id = filter_input(INPUT_POST, 'dir_id');
$dir_name = filter_input(INPUT_POST, 'dir_name');
$dir_phone = filter_input(INPUT_POST, 'dir_phone');
if (!empty($dir_id)){
if (!empty($dir_name)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "moviedb";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO dir (dir_id,dir_name,dir_phone)
values ('$dir_id','$dir_name','$dir_phone')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully\n";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "dir name should not be empty";
die();
}
}
else{
echo "dir id should not be empty";
die();
}
?>
<a> </a>
<a href="ins.php"> back</a>