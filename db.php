<?php
$db = mysqli_connect('127.0.0.1', 'me', 'passwd', 'me_pamoka');
#mysqli_set_charset($db, 'utf8');
// $sql = "SELECT * from Darbuotojai where salary > $salary";
// $query = mysqli_query($db, $sql);
// $Darbuotojai = [];
// while ($row = mysqli_fetch_assoc($query)) {
// 	#echo "name: " . $row['name'] . " salary: " . $row['salary'] . "eur<br>";
// 	$Darbuotojai[] = $row;
// }

#mysqli_close($db);