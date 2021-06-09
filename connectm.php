<?php
$mov_id = filter_input(INPUT_POST, 'mov_id');
$mov_title = filter_input(INPUT_POST, 'mov_title');
$mov_year = filter_input(INPUT_POST, 'mov_year');
$mov_lang = filter_input(INPUT_POST, 'mov_lang');
$dir_id = filter_input(INPUT_POST, 'dir_id');
if (!empty($mov_id)){
if (!empty($mov_title)){
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
$sql = "INSERT INTO mov (mov_id,mov_title,mov_year,mov_lang,dir_id)
values ('$mov_id','$mov_title','$mov_year','$mov_lang','$dir_id')";
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
echo "mov title should not be empty";
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