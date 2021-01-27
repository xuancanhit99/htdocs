<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','hrms_db');
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }

mysqli_select_db($con,"");
$sql="SELECT * FROM user WHERE employee_id = '".$q."'";

$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['username'] . "</td>";

  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>