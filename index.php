<?php
include 'config/database.php';
$sql = "SELECT * FROM bk_problem GROUP by id DESC";
$res = mysqli_query($link, $sql);
$num = mysqli_num_rows($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log Problem</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container" style="width: 98%;">
	<ul class="navigation">
		<li><a href="index.php" class="active">Daftar Problem</a></li>
	</ul>
		<h2 class="text-center">Aplikasi Log Problem IT Operational</h2>
		<hr>
		<a href="tambah-problem.php" class="btn btn-blue">Tambah Problem</a>
		<a href="actions\export_excel.php" class="btn btn-blue">Export Data ke Excel</a> <br>
		<hr>
		<table class="table-lembur">
			<thead>
				<tr>
					<th>No</th>
					<th>Tanggal Problem</th>
					<th>PIC / User</th>
					<th>Jam Lapor</th>
					<th>Problem</th>
					<th>Jam Pengecekan</th>
					<th>Jam Selesai</th>
					<th>Tanggal Solusi</th>
					<th>Solusi</th>
					<th>Status</th>
					<th>User</th>
					<th colspan="3">Action</th>
				</tr>
			</thead>
			<tbody>

			<?php 
			include 'config/database.php';
			$halaman = 25;
			$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
			$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
			//$query = mysqli_query("SELECT * FROM bk_problem LIMIT $mulai, $halaman");

			$sql1 = "SELECT * FROM bk_problem group by id desc";
			$result = mysqli_query($link, $sql1);
			$total = mysqli_num_rows($result);

			$pages = ceil($total/$halaman);       

			$sql2 = "select * from bk_problem group by id desc LIMIT $mulai, $halaman";
			$query = mysqli_query($link, $sql2);
			$no =$mulai+1;


			while ($mas = mysqli_fetch_array($query)) {
			?>
				<tr>
					<td><?php echo $no++ ?></td><td>
						<?php 
							$tgl = $mas ['tgl_problem'];
							echo date ("d/M/yy", strtotime($tgl))
							//$pegawai['tgl_problem'] ?></td><td>
						<?php echo $mas['pic'] ?></td><td>
						<?php echo $mas['jam_lapor'] ?></td><td>
						<?php echo $mas['problem'] ?></td><td>
						<?php echo $mas['jam_pengecekan'] ?></td><td>
						<?php echo $mas['jam_selesai'] ?></td><td>
						<?php 
							$tgl_sls = $mas ['tgl_solusi'];
							echo date ("d/M/yy", strtotime($tgl_sls)) ?>
						</td><td>
						<?php echo $mas['solusi'] ?></td><td>
						<?php echo $mas['status'] ?></td><td>
						<?php echo $mas['user'] ?></td><td>
							<!--<a href="actions/delete.php?id=<?php echo $pegawai['id'] ?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-red" style="padding: 1px 4px;">Delete</a>-->
							<a href="edit.php?id=<?php echo $mas['id'] ?>" class="btn btn-blue" style="padding: 1px 4px;">Edit</a>
							<!--<a href="view.php?id=<?php echo $pegawai['id'] ?>" class="btn btn-blue" style="padding: 1px 4px;">View</a>-->
						</td>
						<td>
							<a href="actions/delete.php?id=<?php echo $mas['id'] ?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-red" style="padding: 1px 4px;">Delete</a>
							<!--<a href="edit.php?id=<?php echo $pegawai['id'] ?>" class="btn btn-blue" style="padding: 1px 4px;">Edit</a>-->
							<!--<a href="view.php?id=<?php echo $pegawai['id'] ?>" class="btn btn-blue" style="padding: 1px 4px;">View</a>-->
						</td>
						<td>
							<!--<a href="actions/delete.php?id=<?php echo $pegawai['id'] ?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-red" style="padding: 1px 4px;">Delete</a>-->
							<!--<a href="edit.php?id=<?php echo $pegawai['id'] ?>" class="btn btn-blue" style="padding: 1px 4px;">Edit</a>-->
							<a href="view.php?id=<?php echo $mas['id'] ?>" class="btn btn-blue" style="padding: 1px 4px;">View</a>
						</td>
				</tr>
			  <?php               
  } 
  ?>
			</tbody>
		</table>

</body>
</html>
<hr>
<div class="">
  			<?php for ($i=1; $i<=$pages ; $i++){ ?>
  			<a href="index.php?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
  		<?php } ?>
		</div>