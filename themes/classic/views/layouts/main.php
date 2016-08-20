<?php $var = User::model()->findByPk(Yii::app()->user->getState('id')); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIARP</title>
    <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->
    
    <script type="text/javascript" src="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/dist/js/defiantjs/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/dist/js/defiantjs/loader.js"></script>
    <script type="text/javascript" src="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/dist/js/defiantjs/defiant.js"></script>
    <script type="text/javascript" src="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/dist/js/defiantjs/string.js"></script>
    <script type="text/javascript" src="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/dist/js/defiantjs/ie.polyfill.js"></script>
    <script type="text/javascript" src="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/dist/js/defiantjs/json.js"></script>
    <script type="text/javascript" src="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/dist/js/defiantjs/jquery.smartWizard-2.0.min.js"></script>
    <script type="text/javascript" src="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/dist/js/defiantjs/json.search.js"></script>
    <script type="text/javascript" src="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/dist/js/defiantjs/json.toXML.js"></script>
    <script type="text/javascript" src="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/dist/js/defiantjs/node.toJSON.js"></script>
    <script type="text/javascript" src="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/dist/js/defiantjs/node.select.js"></script>
    <script type="text/javascript" src="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/dist/js/defiantjs/node.serialize.js"></script>
    
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/dist/js/defiantjs/smart_wizard.css"> 
    <!-- <link rel="stylesheet" href="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/dist/js/defiantjs/smart_wizard_vertical.css.css"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">SIARP</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>S</b>Infromasi Monitoring Jaringan</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
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
              <img src="<?php echo './data/user/'.$var->iduser.$var->nmuser.'.jpg'; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $var->nmuser." ".$var->lsuser ;?></a><br>
              <?php echo CHtml::link('<i class="fa fa-user-secret"></i>Profile</li>',array('/site/profile','id'=>$var->iduser)); ?>
              <?php echo CHtml::link('<i class="fa fa-sign-out"></i>Sign out</li>',array('/site/logout')); ?>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i>
                <span>DashBoard</span>
              </a>
              <ul class="treeview-menu">
                <li><?php echo CHtml::link('<i class="fa fa-home"></i>home</li>',array('/site/index')); ?></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>User</span>
              </a>
              <ul class="treeview-menu">
                <li><?php echo CHtml::link('<i class="fa fa-users"></i>view</li>',array('/site/vuser')); ?></li>
                <li><?php echo CHtml::link('<i class="fa fa-user-plus"></i>add</li>',array('/site/auser')); ?></li>
              </ul>
            </li>  
            <li class="treeview">
              <a href="#">
                <i class="fa fa-th"></i>
                <span>Tools</span>
              </a>
              <ul class="treeview-menu">
                <li><?php echo CHtml::link('<i class="fa fa-legal"></i>Hak Akses</li>',array('/site/vhk')); ?></li>
                <li><?php echo CHtml::link('<i class="fa fa-venus-mars"></i>Jenis Kelamin</li>',array('/site/vjk')); ?></li>
                <li><?php echo CHtml::link('<i class="fa fa-wrench"></i>Agama</li>',array('/site/vag')); ?></li>
              </ul>
            </li>        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <ol class="breadcrumb">
            <li><?php echo CHtml::link('<i class="fa fa-home"></i>home</li>',array('/site/index')); ?></li>
            <li class="active">Dashboard</li>
          </ol>
          <?php echo $content; ?>
        </section>

        <!-- Main content -->
        <section class="content">
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2015-2016 <a href="#">Brian</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">

          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>/dist/js/demo.js"></script>
  </body>
</html>
