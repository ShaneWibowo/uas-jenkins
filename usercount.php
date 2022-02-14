<?php
$connection = mysqli_connect('172.19.0.2', 'root', 'uas123', 'trucorp');
$query = "SELECT COUNT(*) FROM users";
$result = $connection->query($query);
$count = $result->fetchColumn();
print $count;
?>
