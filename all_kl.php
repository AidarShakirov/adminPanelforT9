<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Специалист</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-lg-12">
<h1 style="text-align:center" >Таблица клиент</h1>
<table  class="table table-striped">
	<tr>
	<th>№</th>
<th>Фамиля</th>
<th>Имя</th>
<th>Отчество</th>

<th>Логин </th>
<th>Пароль</th>

	</tr>
	<?php
    reqire '../conn.php';
	
	$result = mysqli_query($conn,"SELECT * FROM kl");
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["id_kl"]; ?></td>
	<td><?php echo $row["fam"]; ?></td>
	<td><?php echo $row["imya"]; ?></td>
	<td><?php echo $row["otch"]; ?></td>
	<td><?php echo $row["login_"]; ?></td>
	<td><?php echo $row["psw"]; ?></td>

	</tr>
	<?php
	$i++;
	}
	?>
</table>
</div>
</div>
</div>
</body>
</html>
