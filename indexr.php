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
<th>mov_id</th>
<th>rev_stars</th>
<th>action</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "moviedb");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT mov_id,rev_stars FROM rating";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["mov_id"] . "</td><td>"
. $row["rev_stars"]. "</td> <td><a href=deletemr.php?mov_id=".$row['mov_id'].">Delete</a></td></tr>" ;
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