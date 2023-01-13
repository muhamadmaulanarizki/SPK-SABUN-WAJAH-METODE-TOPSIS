<?php
require 'updateuser.php';
$id = $_GET ['id'];
$datauser = query("select * from tb_user where id_user='$id'")[0];
?>
<html>
 
<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
  <style>
    
  </style>
</head>
 
<body>
  <div class="section"></div>
  <main>
    <center>
      
      <div class="section"></div>
 
      <h5 class="indigo-text">Edit Data</h5>
      <div class="section"></div>
 
      <div class="container">
      <?php
  // cek tombol submit
  if( isset($_POST["submit"]) ) {
    // cek insert
    if( edituser($_POST) > 0 ) {
      echo "
          <script>
              
              document.location.href='daftar_user.php';
          </script>
      ";
    } else {
    echo mysqli_error($conn);
    echo "<br>";
    echo var_dump(mysqli_affected_rows($conn));

      // echo "
      // <script>
      //     alert('data gagal ditambahkan!');
      //     document.location.href='kelola_wisata.php';
      // </script>
      // ";
    }
}
?>
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
 
          <form class="col s12" method="post" action="">
          <input type="hidden" name="id" value="<?= $datauser['id_user'];?>"> 
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s12'>
                
                <label for='username'>Name</label>
                <input class='form-control' type='text' name='nama' id='name' placeholder="" value="<?= $datauser['nama'];?>"/>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                
                <label for='username'>Username</label>
                <input class='validate' type='text' name='username' id='username' placeholder="" value="<?= $datauser['username'];?>"/>
              </div>
            </div>
 
            <div class='row'>
              <div class='input-field col s12'>
               
                <label for='password'>Password</label>
                <input class='validate' type='password' name='password' id='password' placeholder="" value="<?= $datauser['password'];?>"/>
              </div>

              
              <div class="input-field col s12">
              <label for='role'>Role</label>
              <input class='validate' type='text' name='role' id='username' placeholder="" value="<?= $datauser['role'];?>"/>
  </div>
            
             
            </div>
 
            <br />
            <center>
              <div class='row'>
                <button type='submit' name='submit'  class='col s12 btn btn-large waves-effect indigo'>Edit</button>
              </div>
            </center>
          </form>
        </div>
      </div>
      <a href="daftar_user.php">Back</a>
    </center>
 
    <div class="section"></div>
    <div class="section"></div>
  </main>
 
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>
 
</html>