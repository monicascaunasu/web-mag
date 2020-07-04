<?php

$dbc = new mysqli("localhost", "root", "toor", "demo");
$sql1="Select * from timages where title='cat1_1'";
$result1=mysqli_query($dbc,$sql1) or die("error");
$row1=mysqli_fetch_assoc($result1);
echo $row1['title'];
?>