


<!-- connections-->
<?php
include('config/config.php');

if($_POST)
{

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$user_type = $_POST['user-type'];
$pass = SHA1($_POST['password']);

$q = "INSERT INTO user(first_name,last_name,email,phone,user_type,pass) VALUES('$first','$last','$email','$phone','$user_type','$pass')";
$r = mysqli_query($conn,$q);


//header('Location: index.php');

}


 ?>


<html>
<head>
    <title> Sign Up </title>
    <?php include('css/css.php'); ?>  <!--default stylesheet -->
    <?php include('js/js.php'); ?><!--default js -->
</head>
<body class="sign-up">
<br/><br/><br/><br/><br/><br/>
<?php if($_POST){ echo '<div class="row">
                          <div class="col-md-6 col-md-offset-3">

                                 <p class="bg-primary">Your account has be successfully created <br> Please Login to your account
                                </p>
                          </div>
                        </div><br>';}?>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="panel panel-info">
      <div class="panel-heading">
      <strong> Sign Up </strong>
      </div>
      <div class="panel-body">

            <form method="post" action="signup.php" role="">
              <table class="table table-responsive">
                <tr>

                  <td><div class="form-group">
                    <label for="email">First name</label>
                    <input type="text" class="form-control" id="email" name="first" placeholder="First name">
                  </div></td>

                  <td><div class="form-group">
                    <label for="email">Last name</label>
                    <input type="text" class="form-control" id="email" name="last" placeholder="Last name">
                  </div></td>
                </tr>
                <tr>

                  <td><div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                  </div></td>

                  <td><div class="form-group">
                    <label for="user">User type</label>
                    <select class="form-control" name="user-type" id="user-type">
                      <option value="">Select ...</option>
                      <option value="Freelancer">Freelancer</option>
                      <option value="Vender">Equipments provider</option>
                      <option value="emp">Employee</option>
                    </select>

                  </div></td>
                </tr>
                <tr>

                  <td><div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="number" class="form-control" id="email" name="phone" placeholder="+91">
                  </div></td>
                  <td><div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  </div></td>
                </tr>
              </table>






              <!--
              <div class="checkbox">
                <label>
                  <input type="checkbox">male
                </label>
              </div>
              -->
              <button type="submit" class="btn btn-default">Submit</button>
              <button type="submit" class="btn btn-primary">Forgate</button>
            </form>
            Already have an account <a href="http://localhost/websites/newpix/user_panel/login.php"><span style="color:#44cc22">Login<span></a>
      </div>
    </div>
  </div>
</div>

</body>
</html>
