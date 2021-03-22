<?php
include 'config/database.php';

$sql = "SELECT * FROM bk_problem WHERE id = '$_GET[id]'";
$res = mysqli_query($link, $sql);
$num = mysqli_num_rows($res);
$pegawai = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aplikasi Lembur</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
	<ul class="navigation">
		<li><a href="index.php" class="active">Daftar Problem</a></li>
	</ul>
		<h2 class="text-center">Selamat Datang di Aplikasi Buku Log Problem IT Operational</h2>
		<hr>
		<form action="actions/update.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $pegawai['id']; ?>">
		<table class="table-lembur">
			<tbody>
				<tr>
					<td>Tanggal Problem</td>
					<td><input type="date" name="tgl_problem" style="background-color: #D8D8D8;" value="<?php echo $pegawai['tgl_problem']; ?>" readonly ></td>
				</tr>
				<tr>
					<td>Problem</td>
					<td><textarea name="problem" style="background-color: #D8D8D8;" readonly><?php echo $pegawai['problem']; ?></textarea></td>
				</tr>
				<tr>
					<td>Tanggal Solusi</td>
					<td><input type="date" name="tgl_solusi" style="background-color: #D8D8D8;" value="<?php echo $pegawai['tgl_solusi']; ?>" readonly></td>
				</tr>
				<tr>
					<td>Solusi</td>
					<td><textarea name="solusi" style="background-color: #D8D8D8;" readonly><?php echo $pegawai['solusi']; ?></textarea></td>
				</tr>
				<tr>
					<td>Status</td>
					<td><input type="text" name="status" style="background-color: #D8D8D8;" value="<?php echo $pegawai['status']; ?>" readonly>
					</td>
				</tr>
				<tr>
					<td>User</td>
					<td><input type="text" name="user" style="background-color: #D8D8D8;" value="<?php echo $pegawai['user']; ?>" readonly>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><a href="index.php" class="btn btn-red">Cancel</a><button class="btn btn-blue" name="submit" type="submit">Simpan</button></td></tr>
			</tbody>
		</table>
		</form>
	</div>
</body>
</html>