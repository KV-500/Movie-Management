<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 50%;
color: #588c7e;
font-family: monospace;
font-size: 20px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>act_id</th>
<th>mov_id</th>
<th>role</th>
<th>action</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "moviedb");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT  act_id,mov_id,role FROM movcast";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["act_id"] . "</td><td>"
. $row["mov_id"]. "</td><td>" . $row["role"] ."</td><td><a href=deletemc.php?act_id=".$row['act_id'].">Delete</a></td></tr>" ;

}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
<a> </a>
<a href="del.php"> back</a>
</body>
</html>