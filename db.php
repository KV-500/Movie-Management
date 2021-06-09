<?php 
/*if (!session_id()) {
	# code...
	session_start();
}*/

$host="localhost";
$username="root";
$password="";
$db_name="mov";
// Create connection
$conn = new mysqli($host, $username, $password,$db_name);


if (isset($_POST['submit'] )&& !empty($_POST['submit']))

{
	$ACT_ID=$_POST['ACT_ID'];
	$ACT_NAME=$_POST['ACT_NAME'];
	$ACT_GENDER=$_POST['ACT_GENDER'];

	
		$sql="insert into ACTOR(ACT_ID,ACT_NAME,ACT_GENDER) values('',?,?,?);";

		if(($stmt=$conn->prepare($sql))) {
			$stmt->bind_param("iss",$ACT_ID,$ACT_NAME,$ACT_GENDER);

		}else
		{
			var_dump($conn->error);
		}


		$ACT_ID=$_POST['ACT_ID'];
		$ACT_NAME=$_POST['ACT_NAME'];
		$ACT_GENDER=$_POST['ACT_GENDER'];	
		



		$stmt->close();
                $conn->close();
		$_SESSION['msg']="ACTOR Successfully Added";
		header ("Location: menu.php" );

	}



?>
   

