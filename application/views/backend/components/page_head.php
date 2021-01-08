<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $page_title. ' | '.$admin_meta_title;?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('awedget/plugins/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('awedget/plugins/metisMenu/dist/metisMenu.min.css');?>" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url('awedget/plugins/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css');?>" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url('awedget/plugins/datatables-responsive/css/dataTables.responsive.css');?>" rel="stylesheet">

    <!-- Loading common css-->   

    <!-- Custom CSS -->
    <link href="<?php echo base_url('awedget/css/bdquery-cms.css');?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('awedget/plugins/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url($this->AdminControllerName.'/dashboard'); ?>"><?php echo $site_name; ?></a>
            </div> <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li> <a target="_blank" href="<?php echo base_url(); ?>" class="text-success"><strong>Visit Website</strong></a> </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                       <?php echo '<strong>'.$this->session->userdata('first_name').'</strong>  '.$this->session->userdata('last_name'); ?> <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <!-- <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a> </li> -->
                        <li><?php echo anchor($this->AdminControllerName."/change_password", '<i class="fa fa-key fa-fw"></i> Change Password');?></li>
                        <li class="divider"></li>
                        <li><?php echo anchor($this->AdminControllerName."/logout", '<i class="fa fa-sign-out fa-fw"></i> Logout');?></li>
                    </ul> <!-- /.dropdown-user -->
                </li> <!-- /.dropdown -->
            </ul> <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li> <?php echo anchor($this->AdminControllerName."/dashboard", '<i class="fa fa-dashboard fa-fw"></i> Dashboard');?> </li>
                        <?php if($this->ion_auth->is_admin()): ?>
                        <li> <?php echo anchor($this->AdminControllerName."/dashboard/users", '<i class="fa fa-users fa-fw"></i> All User List');?> </li>
                        <li> <?php echo anchor($this->AdminControllerName."/dashboard/product", '<i class="fa fa-users fa-fw"></i> Product List');?> </li>
                        <?php endif; ?>
                        
                    </ul>
                </div> <!-- /.sidebar-collapse -->
            </div> <!-- /.navbar-static-side -->
        </nav>