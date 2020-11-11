<!DOCTYPE html>
<html>
<head>
	<title>Data Kependudukan</title>
</head>
<body>
	<h1>View Data Kependudukan</h1>
	<?php
		include 'connect.php';
		$gettb_data = $connection->query("SELECT * FROM tb_data");
		while($fetchtb_data = $gettb_data->fetch_assoc()){
	?>

	<table style="display:inline-table;width:200px">
		<tr>
			<td><img style="width:100%" src="<?=$fetchtb_data["foto"]?>"></td>
		</tr>
		<tr>
			<td>
				<strong><?=$fetchtb_data["foto"]?>
				</strong>
				<br />Nik: <?=$fetchtb_data["nik"]?>
				<br />Nama: <?=$fetchtb_data["nama"]?>
				<br />Tanggal Lahir: <?=$fetchtb_data["tanggal_lahir"]?>
				<br />Tempat Lahir: <?=$fetchtb_data["tempat_lahir"]?><br />
			</td>
	</table>

	<?php
		}
	?>

</body>
</html>
