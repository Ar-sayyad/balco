<?php include('includes/header-top.php'); ?>
<link href="<?php echo base_url(); ?>piadmin/css/login.css" rel="stylesheet" type="text/css"/>
<body>
   <?php include('includes/preloader.php'); ?>
   <div id="main-wrapper">
        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-right">
                    <div class="col-lg-8">                       
                    </div>
                    <div class="col-lg-3">
                        <div class="login-content card">
                            <div style="text-align:center" class="login-form"><br>
                                <img  src="<?php echo base_url(); ?>piadmin/images/logo-text.png" width="180px"><br>
                                <small id="res" class="display-block"></small>
                                <br><br>
                                <form action="<?php echo base_url(); ?>Balco/Home" method="post">
                                    <div class="form-group">
                                        <input type="text" id="username" name="username" autocomplete="off" placeholder="Username" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" id="password" name="Password" autocomplete="off" placeholder="Password"  class="form-control">
                                    </div>
                                    <button type="button" name="save" id="loginbtn" class="btn btn-primary btn-flat m-b-30 m-t-30"><i class="ti-unlock"></i> Sign in</button>                               
                                </form>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>            
    </div><!-- End PAge Content 
        <!-- All Jquery -->
    <?php include('includes/footer-min.php');?>
     <script> var baseurl = "<?php echo base_url(); ?>"; </script>
     <script src="<?php echo base_url(); ?>piadmin/js/login.js" type="text/javascript"></script>
</body>
</html>