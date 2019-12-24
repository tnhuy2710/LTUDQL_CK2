<?php
	include 'connect.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KẾ HOẠCH CHI PHÍ</title>

    <link rel="icon" type="image/png" sizes="96x96" href="https://kienlongbank.com/Data/Sites/1/skins/default/favicon/favicon-96x96.png"/>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css?v=1.14">
    <!-- Select2 -->
    <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

    <!-- css klb -->
    <!-- <link rel='stylesheet' type='text/css' href='css/header-thanhphi.css?v=1.1201' /> -->
    <link rel='stylesheet' type='text/css' href='css/main.css?v=1.1.7' />
    <link rel='stylesheet' type='text/css' href='css/custom.css' />
    <link rel='stylesheet' type='text/css' href='css/custom.huy.css' />
    <link rel='stylesheet' type='text/css' href='css/custom.sang.css' />
    <link rel='stylesheet' type='text/css' href='css/custom.long.css' />

    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- jQuery 3 -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>


  <body class="hold-transition skin-blue layout-top-nav">

    <div class="wrapper">

      
        <?php require('modules/header.php') ?>

        <?php 
            if(isset($_GET["view"])){
              $tam = $_GET["view"];              
              }
              else
              {
                  $tam = "";
              }
              if($tam == "create_planning")
              {
                  include("modules/content.php");
              }
              else if($tam == "category")
              {
                  include("modules/category.php");
              }
              else if($tam == "report")
              {
                  include("modules/report.php");
              }
              else if(isset($_GET["pageno"]))
              {
                  include("modules/user.php");
              }
              else if($tam == "user_groups")
              {
                  include("modules/user_groups.php");
              }
              else if($tam == "permissions_group")
              {
                  include("modules/permissions_group.php");
              }
              // else if(isset($_GET["pageno"]))
              // {
              //     include("modules/test.php");
              // }
              else
              {
                  include('modules/home.php');
              }              
          ?>


        <?php require('modules/footer.php') ?>


    </div>


    <!-- DataTables -->
    <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>


    <!-- Bootstrap 3.3.7 -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>


    <script>
      $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
          'paging'      : true,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false
        })
      })
    </script>


  </body>

</html>
