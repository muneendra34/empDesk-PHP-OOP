<?php 
session_start();
include "actions.php";
$actions= new Actions();

if(!$actions->get_session())
{
    header('location: ../login.php');
}
?>

<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LWS Users Hub | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
     <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
     <script type="text/javascript" src="../scripts/js/changepassword.js"></script>
   
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- Sparkline -->
    <script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="../plugins/chartjs/Chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard2.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <script src="../bootstrap/js/bootstrapValidator.min.js" type="text/javascript"></script>
     <link rel="stylesheet" href="../bootstrap/css/bootstrapValidator.min.css">
     
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
             <header class="main-header">
                <!-- Logo -->
            <a href="#" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>LWS</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>LWS</b>&nbsp;Users Hub</span>
            </a>
        
                <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                </a>
          
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <!-- inner menu: contains the actual data -->
           
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="../dist/img/profile.jpg" class="user-image" alt="User Image">
                    <span class="hidden-xs"><?php echo ucfirst($_SESSION['fname']);?></span>
                </a>
                
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                  <img src="../dist/img/profile.jpg" class="img-circle" alt="User Image">
                    <p>
                      <?php echo ucfirst($_SESSION['fname']);?> - Web Developer
                      <small>in LWS since Nov. 2012</small>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                        <a href="userprofile.php" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                        <a href="logout.php" class="btn btn-default btn-flat">Log out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
                <img src="../dist/img/profile.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo ucfirst($_SESSION['fname']);?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        
            </div>
          </div>
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
              <li class="header"><center><h4>User Panel Controls</h4></center></li>
          <li><a href="../index.php"><i class="fa fa-angle-left"></i></i>Home</a></li>
          <li><a href="usermylogs.php"><i class="fa fa-angle-left"></i>My Log Details</a></li>
         <li><a href="changepassword.php">
             <?php if(!isset($_SESSION['lc'])){$_SESSION['lc']='';} if($_SESSION['lc']==0) {unset($_SESSION['st']);unset($_SESSION['ut']);unset($_SESSION['sp']);}else{$_SESSION['lc']=0;}?><i class="fa fa-angle-left"></i>Change Password</a></li>
          <li><a href="logout.php"><i class="fa fa-angle-left"></i>Logout</a></li> </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
           <div class="container">
               <br><div class="col-md-8"><div class="mess3"><h4><?php if(isset($_SESSION['sp'])){ echo "<span class='glyphicon glyphicon-ok'></span>"." ".$_SESSION['sp'];}?></h4></div></div>
               <br><div class="col-md-8"><div class="mess2"><h4><?php if(isset($_SESSION['st']) && isset($_SESSION['ut'])){ echo "<span class='glyphicon glyphicon-remove'></span>"." ".$_SESSION['st']." ".$_SESSION['ut'];}?></h4></div></div>
               <br><div class="col-sm-12"><h3>Change your Password:</h3></div><br>
  
     <form class="form-horizontal" role="form"  action="cp.php" method="post" id="contactForm">
        
        <div class="form-group">
        <label class="control-label col-sm-2" for="date">Current Password:</label>
        <div class="col-sm-6">          
            <input type="password" class="form-control" name="password1" placeholder="Enter Current Password">
        
        </div>
        </div>
      
        <div class="form-group">
        <label class="control-label col-sm-2" for="login">New Password:</label>
        <div class="col-sm-6">          
            <input type="password" class="form-control" name="password2" placeholder="Enter New Password">
       
        </div>
        </div>
      
        <div class="form-group">
        <label class="control-label col-sm-2" for="logout">Confirm Password:</label>
        <div class="col-sm-6">          
            <input type="password" class="form-control" name="password3" placeholder="Re-Enter New Password ">
       </div>
        </div>   
                    <!-- #messages is where the messages are placed inside -->
    <div class="form-group">
        <div class="col-md-2"><div></div></div>
        <div class="col-md-6">
            <div id="messages" class="mess"></div><br>
        </div>
    </div>
        <br>
    
        <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" id="click" name="submit">Submit</button>
        </div>
        </div>
    </form>
</div>
    </div>
     
  </body>
</html>