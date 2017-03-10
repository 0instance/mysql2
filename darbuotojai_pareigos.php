<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Baltic Talents</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
td {
	vertical-align: middle !important;
}
</style>

</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
					aria-expanded="false">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Baltic Talents</a>
			</div>

			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="statistika.php">Įmonės statistika</a></li>
				</ul>


			</div>
		</div>
	</nav>

	<?php
require_once 'db.php';
$sql = "SELECT * from Pareigos where id = {$_GET['id']}";
$query = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($query);

?>

	<div class="container" id="content" tabindex="-1">
		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
					<h1>Darbuotojai pagal pareigas: <strong><?=ucfirst($row['name'])?></strong> </h1>
				</div>




			</div>
			<div class="col-md-12">
				<div class="panel panel-primary">
					<!-- Default panel contents -->
					<div class="panel-heading">Darbuotojų sąrašas</div>


					<!-- Table -->
					<table class="table">
						<tr>
							<th></th>
							<th>Vardas</th>
							<th>Pavardė</th>
							<th>Tel. nr.</th>
							<th>Išsilavinimas</th>
							<th>Alga</th>
							<th></th>
						</tr>
			<?php

require_once 'db.php';
$sql = "SELECT * from Darbuotojai where education = '" . ucfirst($row['name']) . "'";
$query = mysqli_query($db, $sql);
$count = 0;
while ($row = mysqli_fetch_assoc($query)) {
	$count++;
	?>

						<tr>
							<td><strong><?=$count?></strong></td>
							<td><?=$row['name']?></td>
							<td><?=$row['surname']?></td>
							<td><?=$row['phone']?></td>
							<td><?=$row['education']?></td>
							<td><?=$row['salary']?></td>
							<td><a href="darbuotojas.php?id=<?=$row['id']?>" class="btn btn-primary">Plačiau</a></td>
						</tr>
	<?php
}

?>

					</table>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary">
					<!-- Default panel contents -->
					<div class="panel-heading">Baziniai darbo užmokesčiai:</div>

					<!-- Table -->
					<table class="table">
						<tr>
							<th>Pareigos</th>
							<th>Bazinis darbo užmokesti</th>
							<th></th>
						</tr>
<?php

$sql = "SELECT * from Pareigos";
$query = mysqli_query($db, $sql);
$count = 0;
while ($row = mysqli_fetch_assoc($query)) {
	?>
<tr>
							<td><?=$row['name']?></td>
							<td><?=$row['base_salary']?> EUR</td>
							<td><a href="darbuotojai_pareigos.php?id=<?=$row['id']?>" class="btn btn-primary">Rodyti darbuotojus</a></td>
						</tr>


<?php

}
?>
					</table>
				</div>
			</div>

		</div>


	</div>
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>