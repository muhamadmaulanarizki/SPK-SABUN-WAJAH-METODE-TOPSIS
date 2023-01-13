<?php
session_start();
include('koneksi.php');
?>

<?php


if (isset($_POST["hapus_user"])) {
	$id_hapus_user = $_POST['id_hapus_user'];
	$sql_delete = "DELETE FROM `tb_user` WHERE `id_user` = :id_hapus_user";
	$stmt_delete = $db->prepare($sql_delete);
	$stmt_delete->bindValue(':id_hapus_user', $id_hapus_user);
	$stmt_delete->execute();
	$query_reorder_id = mysqli_query($selectdb, "ALTER TABLE tb_user AUTO_INCREMENT = 1");
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Sistem Pendukung Keputusan Pemilihan Smartphone</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css" media="screen,projection" />
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Data Table -->
	<link rel="stylesheet" type="text/css" href="assets/dataTable/jquery.dataTables.min.css">
	<script type="text/javascript" charset="utf8" src="assets/dataTable/jquery.dataTables.min.js"></script>

</head>

<body>
	<nav>
		<div class="nav-wrapper">
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="haladmin.php">HOME</a></li>
				<li>
					<a class="btn dropdown-button" data-activates="dropdown2">Rekomendasi<i class="material-icons right">arrow_drop_down</i></a>
					<ul id="dropdown2" class="dropdown-content">
						<li><a href="rekomendasi_sbnb.php">Kulit Berminyak</a></li>
						<li><a href="rekomendasi_sbns.php">Kulit Sensitif</a></li>
					</ul>
				</li>
				<li><a href="daftar_user.php">DAFTAR USER</a></li>
				<li>
					<a class="btn dropdown-button" data-activates="dropdown3">DAFTAR SABUN WAJAH<i class="material-icons right">arrow_drop_down</i></a>
					<ul id="dropdown3" class="dropdown-content">
						<li><a href="daftar_sabunb.php">Kulit Berminyak</a></li>
						<li><a href="daftar_sabuns.php">Kulit Sensitif</a></li>
					</ul>
				</li>
				<li><a href="#about">TENTANG</a></li>
				<li><a class="waves-effect waves-light btn" href="logout.php">LOGOUT</a></li>
			</ul>
			<ul class="side-nav" id="mobile-demo">
				<li><a href="haladmin.php">HOME</a></li>
				<li>
					<a class="btn dropdown-button" data-activates="dropdown2">Rekomendasi<i class="material-icons right">arrow_drop_down</i></a>
					<ul id="dropdown2" class="dropdown-content">
						<li><a href="rekomendasi_sbnb.php">Kulit Berminyak</a></li>
						<li><a href="rekomendasi_sbns.php">Kulit Sensitif</a></li>
					</ul>
				</li>
				<li><a href="daftar_user.php">DAFTAR USER</a></li>
				<li>
					<a class="btn dropdown-button" data-activates="dropdown3">DAFTAR SABUN WAJAH<i class="material-icons right">arrow_drop_down</i></a>
					<ul id="dropdown3" class="dropdown-content">
						<li><a href="daftar_sabunb.php">Kulit Berminyak</a></li>
						<li><a href="daftar_sabuns.php">Kulit Sensitif</a></li>
					</ul>
				</li>
				<li><a href="#about">TENTANG</a></li>
				<li><a class="waves-effect waves-light btn" href="logout.php">LOGOUT</a></li>
			</ul>
		</div>
	</nav>
	<!-- Body Start -->

	<!-- Daftar user -->
	<div style="background-color: #efefef">
		<div class="container">
			<div class="section-card" style="padding: 40px 0px 20px 0px;">
				<ul>
					<li>
						<div class="row">
							<div class="card">
								<div class="card-content">
									<center>
										<h4 style="margin-bottom: 0px; margin-top: -8px;">Daftar User</h4>
									</center>
									<table id="table_id" class="hover dataTablesCustom" style="width:100%">
										<thead style="border-top: 1px solid #d0d0d0;">
											<tr>
												<th>
													<center>No </center>
												</th>
												<th>
													<center>Nama </center>
												</th>
												<th>
													<center>Username</center>
												</th>
												<th>
													<center>Password</center>
												</th>
												<th>
													<center>Role</center>
												</th>
												<th>
													<center>Hapus</center>
												</th>
												<th>
													<center>Edit</center>
												</th>

											</tr>
										</thead>
										<tbody>
											<?php
											$query = mysqli_query($selectdb, "SELECT * FROM tb_user");
											$no = 1;
											while ($data = mysqli_fetch_array($query)) {
											?>
												<tr>
													<td>
														<center><?php echo $no; ?></center>
													</td>
													<td>
														<center><?php echo $data['nama'] ?></center>
													</td>
													<td>
														<center><?php echo $data['username'] ?></center>
													</td>
													<td>
														<center><?php echo $data['password'] ?></center>
													</td>
													<td>
														<center><?php echo $data['role'] ?></center>
													</td>

													<td>
														<center>
															<form method="POST">
																<input type="hidden" name="id_hapus_user" value="<?php echo $data['id_user'] ?>">
																<button type="submit" name="hapus_user" style="height: 32px; width: 32px;" class="btn-floating btn-small waves-effect waves-light red"><i style="line-height: 32px;" class="material-icons">remove</i></button>
															</form>
														</center>
													</td>
													<td>
														<center>

															<a href="edituser.php?id=<?php echo $data['id_user']; ?>"><button type="submit" style="height: 32px; width: 32px;" class="btn-floating btn-small waves-effect waves-light green"><i style="line-height: 32px;" class="material-icons">edit</i></button></a>



														</center>
													</td>
												</tr>
											<?php
												$no++;
											}
											?>
										</tbody>
									</table>
								</div>

							</div>
							<a href="#tambah" class="btn-floating btn-large waves-effect waves-light teal btn-float-custom"><i class="material-icons">add</i></a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Daftar user End -->


	<!-- Modal Start -->
	<div id="tambah" class="modal" style="width: 40%; height: 100%;">
		<div class="modal-content">
			<div class="col s6">
				<div class="card-content">
					<div class="row">
						<center>
							<h5 style="margin-top:-8px;">Masukan Data</h5>
						</center>
						<form method="POST" action="prosesadd.php">
							<div class="row">
								<div class="col s12">

									<div class="col s6" style="margin-top: 10px;">
										<b>Nama</b>
									</div>
									<div class="col s6">
										<input style="height: 2rem;" name="nama" type="text" required>
									</div>

									<div class="col s6" style="margin-top: 10px;">
										<b>Username</b>
									</div>
									<div class="col s6">
										<input style="height: 2rem;" name="username" type="text" required>
									</div>
									<div class="col s6" style="margin-top: 10px;">
										<b>Password</b>
									</div>
									<div class="col s6">
										<input style="height: 2rem;" name="password" type="password" required>
									</div>


									<div class="col s6" style="margin-top: 10px;">
										<b>Role</b>
									</div>
									<div class="col s6">
										<select style="display: block; margin-bottom: 4px;" required name="role">
											<!-- <option value = "" disabled selected>Kriteria Kamera</option> -->
											<option>admin</option>
											<option>user</option>
										</select>
									</div>

								</div>
							</div>
							<center><button name="submit" type="submit" class="waves-effect waves-light btn teal" style="margin-top: 0px;">Tambah</button></center>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div style="height: 0px; " class="modal-footer">
			<a style="margin-top: -30px;" class="modal-action modal-close waves-effect waves-green btn-flat">Tutup</a>
		</div>
	</div>
	<!-- Modal End -->



	<!-- Modal Start -->
	<div id="about" class="modal">
		<div class="modal-content">
			<h4>Tentang</h4>
			<p>Sistem Pendukung Keputusan Pemilihan Sabun Wajah Pria berdasarkan jenis kulit ini menggunakan metode TOPSIS yang dibangun menggunakan bahasa PHP.
				Sistem ini dibuat sebagai Pendukung Tugas Akhir<br>

			</p>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Tutup</a>
		</div>
	</div>
	<!-- Modal End -->
	<!-- Body End -->

	<!-- Footer Start -->
	<div class="footer-copyright" style="padding: 0px 0px; background-color: white">
		<div class="container">
			<p align="center" style="color: #999">&copy; Sistem Pendukung Keputusan Pemilihan Sabun Wajah Pria 2022.</p>
		</div>
	</div>
	<!-- Footer End -->
	<script type="text/javascript">
		$(document).ready(function() {
			$('.parallax').parallax();
			$('.modal').modal();
			$('#table_id').DataTable({
				"paging": false
			});
		});

		$(".button-collapse").sideNav();

		document.addEventListener('DOMContentLoaded', function() {
			var elems = document.querySelectorAll('.sidenav');
			var instances = M.Sidenav.init(elems, options);
		});

		// Or with jQuery

		$(document).ready(function() {
			$('.sidenav').sidenav();
		});
	</script>
</body>

</html>