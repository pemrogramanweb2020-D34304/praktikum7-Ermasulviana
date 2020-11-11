<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Kependudukan - Create</title>
</head>
<body>
	<h1>Create Data</h1>
	<form action="datapenduduk.php" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Nik</td>
			<td>:</td>
			<td><input type="text" name="nik"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><textarea name="nama"></textarea></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input type="date" name="tanggal_lahir"></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td>:</td>
			<td><textarea name="tempat_lahir"></textarea></td>
		</tr>
		<tr>
			<td>Foto</td>
			<td>:</td>
			<td><input type="file" name="foto"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button>Save</button></td>
		</tr>
	</table>
</form>
<?php
	if(isset($_SESSION["message"])){
		echo $_SESSION["message"];
		unset($_SESSION["message"]);
}
?>

</body>
</html>