<?php
$act_id = filter_input(INPUT_POST, 'act_id');
$act_name = filter_input(INPUT_POST, 'act_name');
$act_gender = filter_input(INPUT_POST, 'act_gender');
if (!empty($act_id)){
if (!empty($act_name)){
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
$sql = "INSERT INTO account (act_id,act_name,act_gender)
values ('$act_id','$act_name','$act_gender')";
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
echo "actor name should not be empty";
die();
}
}
else{
echo "actor id should not be empty";
die();
}
?>

    <link href='style.css' rel=' stylesheet' > 
<a> </a>
<a href="ins.php"> back</a>