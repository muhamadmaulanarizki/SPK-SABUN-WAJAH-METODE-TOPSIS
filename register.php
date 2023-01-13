<html>
 
<head>
<title>Sistem Pendukung Keputusan Pemilihan Sabun Wajah</title>
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
 
      <h5 class="indigo-text">Form Registrasi</h5>
      <div class="section"></div>
 
      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
 
          <form class="col s12" method="post" action="prosesreg.php">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s12'>
                
                <label for='username'>Name</label>
                <input class='validate' type='text' name='nama' id='name' placeholder="" />
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                
                <label for='username'>Username</label>
                <input class='validate' type='text' name='username' id='username' placeholder=""/>
              </div>
            </div>
 
            <div class='row'>
              <div class='input-field col s12'>
               
                <label for='password'>Password</label>
                <input class='validate' type='password' name='password' id='password' placeholder="" />
              </div>

              
                <input class='input-filed' type='hidden' name='role' id='role' placeholder="user" />
            
             
            </div>
 
            <br />
            <center>
              <div class='row'>
                <button type='submit' name='submit'  class='col s12 btn btn-large waves-effect indigo'>Create</button>
              </div>
            </center>
          </form>
        </div>
      </div>
      <a href="login.php">already have account? Login.</a>
    </center>
 
    <div class="section"></div>
    <div class="section"></div>
  </main>
 
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>
 
</html>