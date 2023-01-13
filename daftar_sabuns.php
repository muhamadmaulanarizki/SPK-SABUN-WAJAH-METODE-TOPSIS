<?php
session_start();
include('koneksi.php');
?>

<?php
if (isset($_POST["tambah_sabun"])) {
	$nama      = $_POST["nama"];
	$merek     = $_POST["merek"];
	$kesesuaian = $_POST["kesesuaian"];
	$harga    = $_POST["harga"];
	$kualitas = $_POST["kualitas"];
	$umur    = $_POST["umur"];

	$merek_angka = $kesesuaian_angka = $harga_angka = $kualitas_angka = $umur_angka = 0;

	if ($merek == "Sangat Ternama") {
		$merek_angka = 5;
	} elseif ($merek == "Ternama") {
		$merek_angka = 4;
	} elseif ($merek == "Cukup Ternama") {
		$merek_angka = 3;
	} elseif ($merek == "Kurang Ternama") {
		$merek_angka = 2;
	} elseif ($merek == "Tidak Ternama") {
		$merek_angka = 1;
	}

	if ($kesesuaian == "Sangat Cocok") {
		$kesesuaian_angka = 5;
	} elseif ($kesesuaian == "Cocok") {
		$kesesuaian_angka = 4;
	} elseif ($kesesuaian == "Cukup Cocok") {
		$kesesuaian_angka = 3;
	} elseif ($kesesuaian == "Kurang Cocok") {
		$kesesuaian_angka = 2;
	} elseif ($kesesuaian == "Tidak Cocok") {
		$kesesuaian_angka = 1;
	}

	if ($harga <= 24999) {
		$harga_angka = 5;
	} elseif ($harga >= 25000 && $harga <= 29999) {
		$harga_angka = 4;
	} elseif ($harga >= 30000 && $harga <= 49999) {
		$harga_angka = 3;
	} elseif ($harga >= 50000 && $harga <= 99999) {
		$harga_angka = 2;
	} elseif ($harga >= 100000) {
		$harga_angka = 1;
	}

	if ($kualitas == "Sangat Berkualitas") {
		$kualitas_angka = 5;
	} elseif ($kualitas == "Berkualitas") {
		$kualitas_angka = 4;
	} elseif ($kualitas == "Cukup Berkualitas") {
		$kualitas_angka = 3;
	} elseif ($kualitas == "Kurang Berkualitas") {
		$kualitas_angka = 2;
	} elseif ($kualitas == "Tidak Berkualiatas") {
		$kualitas_angka = 1;
	}

	if ($umur == ">= 25") {
		$umur_angka = 5;
	} elseif ($umur == "22 - 24") {
		$umur_angka = 4;
	} elseif ($umur == "20 - 21") {
		$umur_angka = 3;
	} elseif ($umur == "17 - 19") {
		$umur_angka = 2;
	} elseif ($umur == "15 - 16") {
		$umur_angka = 1;
	}

	$sql = "INSERT INTO `tb_sensitif` (`id_sbns`, `merek_sabun`, `merek`, `kesesuaian_kulit`, `harga_sabun`, `kualitas_sabun`, `rata_umur_pengguna`, `merek_angka`, `kesesuaian_angka`, `harga_angka`, `kualitas_angka`, `umur_angka`) 
		VALUES (NULL, '$nama', '$merek', '$kesesuaian', '$harga', '$kualitas', '$umur', '$merek_angka', '$kesesuaian_angka', '$harga_angka', '$kualitas_angka', '$umur_angka')";
	$stmt = $db->prepare($sql);
	$stmt->bindValue(':merek_sabun', $nama);
	$stmt->bindValue(':merek', $merek);
	$stmt->bindValue(':kesesuaian_kulit', $kesesuaian);
	$stmt->bindValue(':harga_sabun', $harga);
	$stmt->bindValue(':kualitas_sabun', $kualitas);
	$stmt->bindValue(':rata_umur_pengguna', $umur);
	$stmt->bindValue(':merek_angka', $merek_angka);
	$stmt->bindValue(':kesesuaian_angka', $kesesuaian_angka);
	$stmt->bindValue(':harga_angka', $harga_angka);
	$stmt->bindValue(':kualitas_angka', $kualitas_angka);
	$stmt->bindValue(':umur_angka', $umur_angka);
	$stmt->execute();
}

if (isset($_POST["hapus_sabun"])) {
	$id_hapus_sabun = $_POST['id_hapus_sabun'];
	$sql_delete = "DELETE FROM `tb_sensitif` WHERE `id_sbns` = :id_hapus_sabun";
	$stmt_delete = $db->prepare($sql_delete);
	$stmt_delete->bindValue(':id_hapus_sabun', $id_hapus_sabun);
	$stmt_delete->execute();
	$query_reorder_id = mysqli_query($selectdb, "ALTER TABLE tb_sensitif AUTO_INCREMENT = 1");
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Sistem Pendukung Keputusan Pemilihan Sabun Wajah</title>
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

	<!-- Daftar sabun Start -->
	<div style="background-color: #efefef">
		<div class="container">
			<div class="section-card" style="padding: 40px 0px 20px 0px;">
				<ul>
					<li>
						<div class="row">
							<div class="card">
								<div class="card-content">
									<center>
										<h4 style="margin-bottom: 0px; margin-top: -8px;">Daftar Sabun Wajah Kulit Sensitif</h4>
									</center>
									<table id="table_id" class="hover dataTablesCustom" style="width:100%">
										<thead style="border-top: 1px solid #d0d0d0;">
											<tr>
												<th>
													<center>No </center>
												</th>
												<th>
													<center>Nama Sabun</center>
												</th>
												<th>
													<center>Popularitas</center>
												</th>
												<th>
													<center>Kecocokan dengan kulit</center>
												</th>
												<th>
													<center>Harga Sabun</center>
												</th>
												<th>
													<center>Kualitas Sabun</center>
												</th>
												<th>
													<center>Rata-Rata Umur Pengguna</center>
												</th>
												<th>
													<center>Hapus</center>
												</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$query = mysqli_query($selectdb, "SELECT * FROM tb_sensitif");
											$no = 1;
											while ($data = mysqli_fetch_array($query)) {
											?>
												<tr>
													<td>
														<center><?php echo $no; ?></center>
													</td>
													<td>
														<center><?php echo $data['merek_sabun'] ?></center>
													</td>
													<td>
														<center><?php echo $data['merek'] ?></center>
													</td>
													<td>
														<center><?php echo $data['kesesuaian_kulit'] ?></center>
													</td>
													<td>
														<center><?php echo "Rp.", $data['harga_sabun'] ?></center>
													</td>
													<td>
														<center><?php echo $data['kualitas_sabun'] ?></center>
													</td>
													<td>
														<center><?php echo $data['rata_umur_pengguna'], " Tahun" ?></center>
													</td>
													<td>
														<center>
															<form method="POST">
																<input type="hidden" name="id_hapus_sabun" value="<?php echo $data['id_sbns'] ?>">
																<button type="submit" name="hapus_sabun" style="height: 32px; width: 32px;" class="btn-floating btn-small waves-effect waves-light red"><i style="line-height: 32px;" class="material-icons">remove</i></button>
															</form>
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
	<!-- Daftar sabun End -->

	<!-- Daftar hp Start -->
	<div style="background-color: #efefef">
		<div class="container">
			<div class="section-card" style="padding: 1px 20% 24px 20%;">
				<ul>
					<li>
						<div class="row">
							<div class="card">
								<div class="card-content" style="padding-top: 10px;">
									<center>
										<h5 style="margin-bottom: 10px;">Analisa Sabun Wajah</h5>
									</center>
									<table class="responsive-table">

										<thead style="border-top: 1px solid #d0d0d0;">
											<tr>
												<th>
													<center>Alternatif</center>
												</th>
												<th>
													<center>C1 (Benefit)</center>
												</th>
												<th>
													<center>C2 (Benefit)</center>
												</th>
												<th>
													<center>C3 (Cost)</center>
												</th>
												<th>
													<center>C4 (Benefit)</center>
												</th>
												<th>
													<center>C5 (Benefit)</center>
												</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$query = mysqli_query($selectdb, "SELECT * FROM tb_sensitif");
											$no = 1;
											while ($data = mysqli_fetch_array($query)) {
											?>
												<tr>
													<td>
														<center><?php echo "A", $no ?></center>
													</td>
													<td>
														<center><?php echo $data['merek_angka'] ?></center>
													</td>
													<td>
														<center><?php echo $data['kesesuaian_angka'] ?></center>
													</td>
													<td>
														<center><?php echo $data['harga_angka'] ?></center>
													</td>
													<td>
														<center><?php echo $data['kualitas_angka'] ?></center>
													</td>
													<td>
														<center><?php echo $data['umur_angka'] ?></center>
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
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Daftar hp End -->

	<!-- Modal Start -->
	<div id="tambah" class="modal" style="width: 40%; height: 100%;">
		<div class="modal-content">
			<div class="col s6">
				<div class="card-content">
					<div class="row">
						<center>
							<h5 style="margin-top:-8px;">Masukkan Sabun Wajah</h5>
						</center>
						<form method="POST" action="">
							<div class="row">
								<div class="col s12">

									<div class="col s6" style="margin-top: 10px;">
										<b>Nama Sabun</b>
									</div>
									<div class="col s6">
										<input style="height: 2rem;" name="nama" type="text" required>
									</div>

									<div class="col s6" style="margin-top: 10px;">
										<b>Popularitas</b>
									</div>
									<div class="col s6">
										<select style="display: block; margin-bottom: 4px;" required name="merek">
											<!-- <option value = "" disabled selected>Kriteria RAM</option>  -->
											<option value="Tidak Ternama">Tidak Ternama</option>
											<option value="Kurang Ternama">Kurang Ternama</option>
											<option value="Cukup Ternama">Cukup Ternama</option>
											<option value="Ternama">Ternama</option>
											<option value="Sangat Ternama">Sangat Ternama</option>
										</select>
									</div>

									<div class="col s6" style="margin-top: 10px;">
										<b>Kecocokan Dengan Kulit</b>
									</div>
									<div class="col s6">
										<select style="display: block; margin-bottom: 4px;" required name="kesesuaian">
											<!-- <option value = "" disabled selected>Kriteria Penyimpanan</option> -->
											<option value="Tidak Cocok">Tidak Cocok</option>
											<option value="Kurang Cocok">Kurang Cocok</option>
											<option value="Cukup Cocok">Cukup Cocok</option>
											<option value="Cocok">Cocok</option>
											<option value="Sangat Cocok">Sangat Cocok</option>
										</select>
									</div>


									<div class="col s6" style="margin-top: 10px;">
										<b>Harga Sabun</b>
									</div>
									<div class="col s6">
										<input style="height: 2rem;" name="harga" type="number" required>
									</div>

									<div class="col s6" style="margin-top: 10px;">
										<b>Kualitas Sabun</b>
									</div>
									<div class="col s6">
										<select style="display: block; margin-bottom: 4px;" required name="kualitas">
											<!-- <option value = "" disabled selected>Kriteria Penyimpanan</option> -->
											<option value="Tidak Berkualitas">Tidak Berkualitas</option>
											<option value="Kurang Berkualitas">Kurang Berkualitas</option>
											<option value="Cukup Berkualitas">Cukup Berkualitas</option>
											<option value="Berkualitas">Berkualitas</option>
											<option value="Sangat Berkualitas">Sangat Berkualitas</option>
										</select>
									</div>

									<div class="col s6" style="margin-top: 10px;">
										<b>Rata - Rata Umur Pengguna</b>
									</div>
									<div class="col s6">
										<select style="display: block; margin-bottom: 4px;" required name="umur">
											<!-- <option value = "" disabled selected>Kriteria Penyimpanan</option> -->
											<option value="15 - 16">15 - 16</option>
											<option value="17 - 19">17 - 19</option>
											<option value="20 - 21">20 - 21</option>
											<option value="22 - 24">22 - 24</option>
											<option value=">= 25">>= 25</option>
										</select>
									</div>
								</div>
							</div>
							<center><button name="tambah_sabun" type="submit" class="waves-effect waves-light btn teal" style="margin-top: 0px;">Tambah</button></center>
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