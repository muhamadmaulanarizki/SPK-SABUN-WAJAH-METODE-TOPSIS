<?php
include 'koneksilog1.php';



function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}
function edituser($data) {
    global $conn;
    // ambil data
    $id = strip_tags($data["id"]);
    $nama = strip_tags($data["nama"]);
    $username = strip_tags($data["username"]);
    $password = strip_tags($data["password"]);
    $role = strip_tags($data["role"]);






     // query insert data
     $query = "update tb_user set nama='$nama', username='$username', password='$password', role='$role' where id_user='$id'";

     mysqli_query($conn, $query);

     return mysqli_affected_rows($conn);
}
