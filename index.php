<?php

$c = mysqli_connect('127.0.0.1', 'me', 'passwd', 'me_pamoka');
mysqli_set_charset($c, 'utf8');
$sql = "SELECT * from Darbuotojai";
$query = mysqli_query($c, $sql);
while ($row = mysqli_fetch_assoc($query)) {
	echo $row['name'] . "<br>";
}
mysqli_close($c);
