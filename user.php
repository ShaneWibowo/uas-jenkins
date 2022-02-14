<!DOCTYPE html>
<html>
<head>
<title>trucorp</title>
</head>

<?php
$connection = mysqli_connect('172.19.0.2', 'root', 'uas123', 'trucorp');

$query = "SELECT * FROM users";
$result = mysqli_query($query);
?>

<table>

<tr>
<th>ID</th>
<th>Nama</th>
<th>Alamat</th>
<th>Jabatan</th>
</tr>

<?php 
while($row = mysqli_fetch_assoc($result)){
echo "<tr><td>" . htmlspecialchars($row['ID']) . "</td><td>" . htmlspecialchars($row['Nama']) . "</td><td>" . htmlspecialchars($row['Alamat']) . "</td><td>" . htmlspecialchars($row['Jabatan']). "</td></tr>";
}
?>

</table>
</body>
</html>

