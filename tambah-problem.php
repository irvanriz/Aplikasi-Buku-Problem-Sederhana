<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log Problem</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
	<ul class="navigation">
		<li><a href="index.php" class="active">Daftar Problem</a></li>
	</ul>
		<h2 class="text-center">Aplikasi Log Problem IT Operational</h2>
		<hr>
		<form action="actions/create.php" method="POST">
		<table class="table-lembur">
			<tbody>
				<tr>
					<td>Tanggal Problem</td>
					<td><input type="date" name="tgl_problem" required></td>
				</tr>
				<tr>
					<td>PIC / User</td>
					<td><input type="text" name="pic"></td>
				</tr>
				<tr>
					<td>Jam Lapor</td>
					<td><input type="time" name="jam_lapor"></td>
				</tr>
				<tr>
					<td>Problem</td>
					<td><input type="text" name="problem"></td>
				</tr>
				<tr>
					<td>Jam Pengecekan</td>
					<td><input type="time" name="jam_pengecekan"></td>
				</tr>
				<tr>
					<td>Jam Selesai</td>
					<td><input type="time" name="jam_selesai" style="background-color: #D8D8D8;" readonly></td>
				</tr>					
				<tr>
					<td>Tanggal Solusi</td>
					<td><input type="date" name="tgl_solusi" style="background-color: #D8D8D8;" readonly></td>
				</tr>
				<tr>
					<td>Solusi</td>
					<td><textarea name="solusi" style="background-color: #D8D8D8;" readonly></textarea></td>
				</tr>
				<tr>
					<td>Status</td>
					<td><input type="text" name="status" style="background-color: #D8D8D8;" value="Proses" readonly>
					</td>
				</tr>
				<tr>
					<td>User</td>
					<td><input type="text" name="user" id="user" value="Irvan" style="background-color: #D8D8D8;" readonly></td>
					<!--<td>
						<select name="user" id="user" required>
							<option value="">---- Pilih User ----</option>
							<option value="Ahmed">Ahmed</option>
							<option value="Ella">Ella</option>
							<option value="Irvan">Irvan</option>
						</select>
					</td>-->
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