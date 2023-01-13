<?php
include 'koneksilog.php';
$nama =$_POST['nama'];
$username =$_POST['username'];
$password =$_POST['password'];
$role =$_POST['role'];








     // query insert data


     $cek = mysqli_query($conn, "insert into tb_user values ('','$nama' ,'$username','$password','user')");
     if($cek) {
        echo "<script>alert('Data berhasil ditambahkan'); window.location.href = 'index.php'</script>";
    }




?>
