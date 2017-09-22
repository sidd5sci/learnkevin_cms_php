<?php
session_start();

include('config/config.php');
if($_POST)
{
$q = "SELECT * FROM user WHERE email ='$_POST[email]' AND pass =SHA1('$_POST[password]')";
$r = mysqli_query($conn,$q);


  if(mysqli_num_rows($r) == 1)
  { $data = mysqli_fetch_assoc($r);
    $_SESSION['username'] = $_POST['email'];
    $_SESSION['id'] = $data['id'];
    $_SESSION['userType'] = $data['user_type'];
    header('Location:index.php');
  }
}
 ?>
<script>
  function redirect(){
    if(<?php echo $_SESSION['username'];?>)
      {
        window.open("index.php", "_self"); // will
      }
  }
</script>

<html>
<head>
    <title> Admin Panel </title>
    <?php include('css/css.php'); ?>  <!--default stylesheet -->
    <?php include('js/js.php'); ?><!--default js -->
</head>
<body class="login">
<br/><br/><br/><br/><br/><br/>
<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-info">
      <div class="panel-heading">
        <strong>  Login Panel</strong>
      </div>
      <div class="panel-body">
            <form method="post" action="login.php" role="">
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              </div>
              <!--
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Check me out
                </label>
              </div>
              -->
              <button type="submit" class="btn btn-default">Submit</button>
              <button type="submit" class="btn btn-primary">Forgate</button>
            </form>
            Register a new account <a href="http://localhost/websites/newpix/user_panel/signup.php"><span style="color:#44cc22">Sign up<span></a>
      </div>
    </div>
  </div>
</div>

</body>
</html>
