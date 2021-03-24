<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title>School System</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
</head>
<body>


<div class="container">
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"> School System</a>
    </div>

  </div>
</nav>
</div>

<br>

<div class="container">
  
  <div class="jumbotron"> 
    <div class="row">

      <div class="col" style="text-align: center;">
        <h3>Register</h3>
        <p class="alert alert-<?php
        if (isset($_GET['registered'])) {
            # code...
            echo $_SESSION ['classTypeSuccess'];
            session_unset();
            session_destroy();
          } elseif (isset($_GET['notReg'])) {
            # code...
            echo $_SESSION ['classTypeError'];
            session_unset();
            session_destroy();
          }

        ?>">
          
          <?php
          if (isset($_GET['registered'])) {
            # code...
            echo $_SESSION ['userRegistered'];
            session_unset();
            session_destroy();
          } elseif (isset($_GET['notReg'])) {
            # code...
            echo $_SESSION ['notRegistered'];
            session_unset();
            session_destroy();
          }



          ?>




        </p>
        <hr margin-right = 20px margin-left = 20px>

        <form action="authentication/register.php" method="post">
          <div class="form-group">
              <input type="text" name="username" id="username" class="form-control" placeholder="Enter username"  " required="" >
                    
            </div>
              <div class="form-group">
              <input type="email" name="email" id="email" class="form-control" placeholder="Enter email address" required="">

            </div>
              <div class="form-group">
              <input type="password" onkeyup = "check();" name="password" id="password" class="form-control" placeholder="Enter Password"  required="">

            </div>
             
              <div class="form-group">
              <input type="password" onkeyup = "check();" name="conpass" id="conpass" class="form-control" placeholder="Confirm password"  required="">
                    
            <span id="message"></span>
            </div>

            <div class="row">
              <div class="col" style="text-align: center;">
                <input type="submit" name="save" id="save" class="btn btn-success btn-block" value="Create Account">
              </div>
              <div class="col" style="text-align: center;">
                <input type="reset" name="reset" id="reset" class="btn btn-danger btn-block">
              </div>

            </div>
        </form>

      </div>

       <div class="col" style="text-align: center;">
        <h3>Login</h3>
        <hr margin-right = 20px margin-left = 20px>
          <form action="login.php" method="post">
            <div class="form-group">
              <input type="text" name="username" id="username" class="form-control" placeholder="Enter username" required="" >

            </div> 
               <div class="form-group">
              <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password"  required="">

            </div>
            <div class="row">
              <div class="col" style="text-align: center;">
                <input type="submit" name="save" id="save" class="btn btn-success " value="Login">
              </div>
            </div>

          </form>
      </div>
    </div>
  </div>

</div>

<script type="text/javascript">
  function check() {
    // body...
    if (document.getElementById('password').value === document.getElementById('conpass').value) {

          document.getElementById('message').style.color = "green";
          document.getElementById('message').innerHTML = "passwords match";
          document.getElementById('save').disabled = false;
    } else {
       document.getElementById('message').style.color = "red";
          document.getElementById('message').innerHTML = "passwords do not match";
          document.getElementById('save').disabled = true;
    }
  }


</script>


<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap/js/script.js"></script>
</body>
</html>