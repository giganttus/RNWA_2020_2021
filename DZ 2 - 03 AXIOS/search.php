<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  border:solid 2px gray;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body>

<?php
if(isset($_REQUEST['s'])){
      $s = $_REQUEST['s']; 
 }else{
      $s = "Name not set in GET Method";
}


// Konekcija baze
$connection = mysqli_connect('localhost','root','','birt');

if (!$connection) {
    error_log("Failed to connect to MySQL: " . mysqli_error($connection));
    die('Internal server error');
}

// Odabir baze
$db_select = mysqli_select_db($connection, 'birt');
if (!$db_select) {
    error_log("Database selection failed: " . mysqli_error($connection));
    die('Internal server error');
}else
{
$sql="SELECT * FROM `employees` WHERE `firstName` LIKE  '%$s%' OR `lastName` LIKE  '%$s%'";

$response = $connection->query($sql)or die("Querry failed");

if(mysqli_num_rows($response) > 0)
{
echo "<table>
<tr>
<th>Name</th>
<th>Last name</th>
</tr>";
while ($myrow=mysqli_fetch_row($response)){
			echo "<tr>";
			  echo "<td>" . $myrow[2] . "</td>";
			  echo "<td>" . $myrow[1] . "</td>";
			  echo "</tr>";
		}

echo "</table>";
}
}

?>
</body>
</html>