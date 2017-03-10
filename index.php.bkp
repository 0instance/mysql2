<?php
$salary = isset($_GET['salary']) ? $_GET['salary'] : 0;

$c = mysqli_connect('127.0.0.1', 'me', 'passwd', 'me_pamoka');
mysqli_set_charset($c, 'utf8');
$sql = "SELECT * from Darbuotojai where salary > $salary";
$query = mysqli_query($c, $sql);
$Darbuotojai = [];
while ($row = mysqli_fetch_assoc($query)) {
	#echo "name: " . $row['name'] . " salary: " . $row['salary'] . "eur<br>";
	$Darbuotojai[] = $row;
}

mysqli_close($c);

?>

<table border="1">
<thead>
	<td>Name</td>
	<td>Salary</td>
</thead>
	<?php

foreach ($Darbuotojai as $darbuotojas) {
	?>
		<tr>
			<td><?=$darbuotojas['name']?></td>
			<td><?=$darbuotojas['salary']?></td>
		</tr>

		<?php
}
?>

</table>