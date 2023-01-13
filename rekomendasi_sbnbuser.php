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

    <link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon.png">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Import jQuery before materialize.js-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
<nav>
        <div class="nav-wrapper">
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="haluser.php">HOME</a></li>
                <li>
                    <a class="btn dropdown-button" data-activates="dropdown1">Rekomendasi<i class="material-icons right">arrow_drop_down</i></a>
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a  class="active" href="rekomendasi_sbnbuser.php">Kulit Berminyak</a></li>
                        <li><a  href="rekomendasi_sbnsuser.php">Kulit Sensitif</a></li>
                    </ul>
                </li>
                
                <li>
                    <a class="btn dropdown-button" data-activates="dropdown4">DAFTAR SABUN WAJAH<i class="material-icons right">arrow_drop_down</i></a>
                    <ul id="dropdown4" class="dropdown-content">
                        <li><a  href="daftar_sabunbuser.php">Kulit Berminyak</a></li>
                        <li><a  href="daftar_sabunsuser.php">Kulit Sensitif</a></li>
                    </ul>
                </li>
                <li><a href="#about">TENTANG</a></li>
                <li><a class="waves-effect waves-light btn" href="logout.php">LOGOUT</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a  href="haluser.php">HOME</a></li>
                <li>
                    <a class="btn dropdown-button" data-activates="dropdown2">Rekomendasi<i class="material-icons right">arrow_drop_down</i></a>
                    <ul id="dropdown2" class="dropdown-content">
                        <li><a  class="active" href="rekomendasi_sbnbuser.php">Kulit Berminyak</a></li>
                        <li><a  href="rekomendasi_sbnsuser.php">Kulit Sensitif</a></li>
                    </ul>
                </li>
                
                <li>
                    <a class="btn dropdown-button" data-activates="dropdown3">DAFTAR SABUN WAJAH<i class="material-icons right">arrow_drop_down</i></a>
                    <ul id="dropdown3" class="dropdown-content">
                        <li><a  href="daftar_sabunbuser.php">Kulit Berminyak</a></li>
                        <li><a  href="daftar_sabunsuser.php">Kulit Sensitif</a></li>
                    </ul>
                </li>
                <li><a href="#about">TENTANG</a></li>
                <li><a class="waves-effect waves-light btn" href="logout.php">LOGOUT</a></li>
            </ul>
        </div>
    </nav>
    <!-- Body Start -->

    <!-- Daftar Laptop Start -->
    <div style="background-color: #efefef">
        <div class="container">
            <div class="section-card" style="padding: 32px 0px 20px 0px">
                <ul>
                    <li>
                        <div class="row">
                            <div class="col s12">
                                <div class="row">
                                    <center>
                                        <h4>Masukan Bobot</h4>
                                    </center>
                                    <br>
                                    <form class="col s12" method="POST" action="hasilsbnbuser.php">
                                        <div class="row">
                                            <div class="col s12">


                                                <div class="col s6" style="margin-top: 10px;">
                                                    <b>Kriteria Merek (Benefit)</b>
                                                </div>
                                                <div class="col s6">
                                                    <select required name="merek">
                                                        <option value="" disabled selected style="color: #eceff1;"><i>Pilih</i></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>

                                                <div class="col s6" style="">
                                                    <b>Kriteria Kesesuaian (Benefit)</b>
                                                </div>
                                                <div class="col s6">
                                                    <select required name="kesesuaian">
                                                        <option value="" disabled selected>Pilih</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>

                                                <div class="col s6" style="margin-top: 10px;">
                                                    <b>Kriteria Harga (Cost)</b>
                                                </div>
                                                <div class="col s6">
                                                    <select required name="harga">
                                                        <option value="" disabled selected>Pilih</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>

                                                <div class="col s6" style="margin-top: 10px;">
                                                    <b>Kriteria Kualitas (Benefit)</b>
                                                </div>
                                                <div class="col s6">
                                                    <select required name="kualitas">
                                                        <option value="" disabled selected>Pilih</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>

                                                <div class="col s6" style="margin-top: 10px;">
                                                    <b>Kriteria Usia (Benefit)</b>
                                                </div>
                                                <div class="col s6">
                                                    <select required name="umur">
                                                        <option value="" disabled selected>Pilih</option>
                                                        <option value="1">1 </option>
                                                        <option value="2">2 </option>
                                                        <option value="3">3</option>
                                                        <option value="4">4 </option>
                                                        <option value="5">5 </option>
                                                    </select>
                                                </div>

                                            </div>
                                            <center><button type="submit" class="waves-effect waves-light btn" style="margin-bottom:-46px;">Hitung</button></center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Rekomendasi Laptop End -->

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
            $('select').material_select();
            $('.modal').modal();
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