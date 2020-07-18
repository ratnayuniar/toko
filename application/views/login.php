<?php 
    if(empty($this->session->userdata('username'))){
?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TOKO KELONTONG</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url()?>admin/index2.html"><b>TOKO</b>KELONTONG</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
   
    <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" name="passPengguna" class="form-control" placeholder="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()?>admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url()?>admin/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>





<!--
<!DOCTYPE html>
<html>-->
    
<!-- Mirrored from coderthemes.com/ubold_2.1/dark_leftbar/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Oct 2016 02:53:01 GMT -->
<!--
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="<?php echo base_url(); ?>ubold/assets/images/favicon_1.ico">

        <title>YES MOTOR</title>

        <link href="<?php echo base_url(); ?>ubold/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>ubold/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>ubold/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>ubold/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>ubold/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>ubold/assets/css/responsive.css" rel="stylesheet" type="text/css" />-->

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
<!--
        <script src="<?php echo base_url(); ?>ubold/assets/js/modernizr.min.js"></script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','<?php echo base_url()?>admin/../www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-69506598-1', 'auto');
          ga('send', 'pageview');
        </script>
        
    </head>
    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class=" card-box">
            <div class="panel-heading"> 
                <h3 class="text-center"> Login <strong class="text-custom"></strong> </h3>
            </div> 


            <div class="form-horizontal m-t-20">
            <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
                
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input type="password" name="passPengguna" class="form-control" placeholder="password">
                    </div>
                </div>
                
                

                       
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-inverse btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>
            </form> 
            </div>   
            </div>                              
    
        </div>
        
        

        
        <script>
            var resizefunc = [];
        </script>-->

        <!-- jQuery  -->
        <!--
        <script src="<?php echo base_url(); ?>ubold/assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>ubold/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>ubold/assets/js/detect.js"></script>
        <script src="<?php echo base_url(); ?>ubold/assets/js/fastclick.js"></script>
        <script src="<?php echo base_url(); ?>ubold/assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>ubold/assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url(); ?>ubold/assets/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>ubold/assets/js/wow.min.js"></script>
        <script src="<?php echo base_url(); ?>ubold/assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url(); ?>ubold/assets/js/jquery.scrollTo.min.js"></script>


        <script src="<?php echo base_url(); ?>ubold/assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url(); ?>ubold/assets/js/jquery.app.js"></script>
    
    </body>-->

<!-- Mirrored from coderthemes.com/ubold_2.1/dark_leftbar/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Oct 2016 02:53:01 GMT -->
<!--</html>-->

<?php
    }
    else redirect(base_url('beranda'));
?>
