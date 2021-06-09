<?php
$act_id = filter_input(INPUT_POST, 'act_id');
$mov_id = filter_input(INPUT_POST, 'mov_id');
$role = filter_input(INPUT_POST, 'role');
if (!empty($act_id)){
if (!empty($mov_id)){
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
$sql = "INSERT INTO movcast (act_id,mov_id,role)
values ('$act_id','$mov_id','$role')";
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
echo "mov id title should not be empty";
die();
}
}
else{
echo "act id should not be empty";
die();
}
?>
<a> </a>
<a href="ins.php"> back</a>