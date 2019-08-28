<?php

session_start();
include "../koneksi.php";
include "auth_user.php";
?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>IDS Akademik</title>
	<!-- Icon -->
	<link rel="shortcut icon" type="image/icon" href="../diniyah.ico">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../aset/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../aset/fa/css/font-awesome.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../aset/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../aset/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../aset/dist/css/skins/_all-skins.min.css">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php include 'view/header.php';?>
      <?php include 'view/left-menu.php';?>
            <?php 
                error_reporting(0);
                if($_GET['page']=='santri'){
                   include ('santri.php'); 
                }
                else if($_GET['form-santri']=='add'){
                   include ('form/f_santri.php'); 
                }
                else if($_GET['form-santri']=='edit'){
                   include ('form/f_santri.php'); 
                }
                else if($_GET['form-santri']=='info'){
                   include ('form/f_santri.php'); 
                }
                else if($_GET['form-santri']=='delete'){
                   include ('form/f_santri.php'); 
                }
                else if($_GET['page']=='dashboard'){
                  include ('view/content.php'); 
                }
                else {
                  include ('view/content-menu.php'); 
                }
                   //include ('content-menu.php'); 
                   //include ('loguser.php')
            ?>  
      <?php include 'view/content.php';?> 
      <?php include "view/footer.php"; ?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../aset/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../aset/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../aset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../aset/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../aset/dist/js/app.min.js"></script>
  </body>
</html>
