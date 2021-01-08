<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$meta_title ?></title>
    <meta name="tittle" content="<?=$meta_title?>">
    <meta name="keywords" content="<?=$meta_keywords?>">  
    <meta name="description" content="<?=$meta_description?>">
    <meta name="author" content="Multimedial Depaertment, BPL">

    <link rel="icon" href="<?php echo base_url();?>fwedget/2021/assets/images/BIT-2021.png" type="image/png" sizes="16x16">

    <!-- StyleSheets -->
    <link href="<?php echo base_url();?>fwedget/2021/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>fwedget/2021/assets/css/icomoon.css" rel="stylesheet">
    <link href="<?php echo base_url();?>fwedget/2021/assets/css/aileron-font.css" rel="stylesheet">
    <link href="<?php echo base_url();?>fwedget/2021/assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>fwedget/2021/assets/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url();?>fwedget/2021/assets/css/color.css" rel="stylesheet">
    <link href="<?php echo base_url();?>fwedget/2021/assets/css/responsive.css" rel="stylesheet">
    <link href="<?php echo base_url();?>fwedget/2021/assets/css/transition.css" rel="stylesheet">
    <!-- FontsOnline -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="<?php echo base_url();?>fwedget/2021/assets/css/style.css" rel="stylesheet">
    <!-- JavaScripts -->
    <script src="<?php echo base_url();?>fwedget/2021/assets/scripts/modernizr.js"></script>



</head>
<body>
    
    <!-- Wrapper -->
    <div class="wrapper">
        <!-- Header Start -->
        <header id="header" class="header">
            <!-- Nav Holder -->
            <div class="nav-holder style-2 after-clear">
                
                <div class="top-bar after-clear">
                    <div class="container">

                        <div class="top-right">
                            <ul class="login-options">

                                <?php if ($this->ion_auth->logged_in()){ ?>
                                    <li><a style="display: inline;" href="<?=base_url('product-owner-panel')?>"><i class="icon-th"></i> Product Owner Panel</span></li>

                                    <li><a style="display: inline;" href="<?=base_url('logout')?>"><i class="icon-sign-out"></i> Logout</span></li>

                                <?php }else{ ?>

                                    <li><a style="display: inline;" href="<?=base_url('login')?>"><i class="icon-sign-in"></i> Login</span></li>

                                    <li><a style="display: inline;" href="<?=base_url('registration')?>"><i class="icon-user"></i> Register Now</a></li>

                                <?php } ?>
                            </ul>
                        </div> 
                    </div>
                </div> 

            </div>
        </header>
<!-- Header End -->

