<?php
 include('config/config.php');
# start the sessions
session_start();
if(!isset($_SESSION['username']))// error ->1
{
  header('Location:login.php');
}
else
  {//echo $_SESSION['username'],$_SESSION['id'];

  $sql  = "UPDATE user SET online_status = '1' WHERE user.id = '$_SESSION[id]' ";
  mysqli_query($conn,$sql);

  $data = readById($conn,'user',$_SESSION['id']);
}

// pass 'admin'
?>


<html>
<head>
    <title> Dashboard</title>
    <?php include('css/css.php'); ?>  <!--default stylesheet -->
    <?php include('js/js.php'); ?><!--default js -->
</head>
<body class="lk-zero">
<?php //include('widgets/header.php'); ?>

<div class="row">
  <!--- left navigation -->
  <div class="col-md-2 lk-sidebar-left">
   <div class="row">
     <div class="col-md-12 lk-zero">
    <div class="user-profile ">
      <a href="#" ><img src="images/<?php echo $data['photo'];?>" class="img-responsive img-circle <?php //thumbnail ?>user-profile-img"/></a>
          <p class="user-profile-name">&nbsp;&nbsp;<?php $u = user($conn,$data['id']);echo $u['fullname'];?></p>
    </div>
    <?php include('widgets/left-navbar.php');?>

      <?php if($admin_pageid == 8){logout();}?>
    </div>
  </div>
  </div>
  <div class="col-md-10 ">
    <?php include('widgets/header.php'); ?>

    <div class="row">
      <div class="col-md-8 lk-body">
         <!--- main container -->


          <?php
            switch($admin_pageid)
            {
              case 1: include('pages/dashboard.php');
                      break;
              case 2: include('pages/Notification.php');
                      break;
              case 3: include('pages/campagins.php');
                      break;
              case 4: include('pages/status.php');
                      break;
              case 5: include('pages/layout.php');
                      break;
              case 6: include('pages/template.php');
                      break;
              case 7: include('pages/settings.php');
                      break;

            }

          ?>

      </div>
      <div class="col-md-4 lk-notifications">

          <h2>Notifications</h2>

          <a href="?#" class="list-group-item">
            <div class="list-group-item-heading">
                Update your profile
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    60%
                  </div>
                </div>
            </div>
          </a>

          <a href="?#" class="list-group-item">
            <div class="list-group-item-heading">
              Upgrade to primeum now
            </div>
          </a>
      </div>
    </div>

  </div>
</div>
<!-- footer-->
<div class="row lk-footer">
  <div class="container">
      <div class="col-md-4">
        <h2>About LearnKevin</h2><br>

        <p>loeram ipusm doream anduoui jlallou loeram ipusm doream anduoui jlallou loeram ipusm doream anduoui jlallou loeram ipusm doream anduoui jlallou</p>
      </div>
      <div class="col-md-4">

      </div>
      <div class="col-md-4">
      </div>
  </div>
</div>




</body>
</html>
