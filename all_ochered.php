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
<h1 style="text-align:center" >Статистика очереди по рабочему месту</h1>
<table  class="table table-striped">
	<tr>
	
    <th>Организация</th>
<th>Специалист</th>
<th>Клиент</th>
<th>Время приема</th>

	</tr>
	<?php
    require '../conn.php';
	
    $result = mysqli_query($conn,"select   org.org as org, otdel.otdel,sp.imya  as sp , kl.imya as kl , ochered.vremya_priema as vr from ochered 
    join kl on kl.id_kl=ochered.kl_id_kl
    join sp on  sp.id_sp=ochered.sp_id_sp
    join  otdel on  otdel.id_otdel=sp.otdel_id_otdel
    join org on org.id_org=otdel.org_id_org
    ");
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["org"]; ?></td>
	<td><?php echo $row["sp"]; ?></td>
	<td><?php echo $row["kl"]; ?></td>
    <td><?php echo $row["vr"]; ?></td>

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