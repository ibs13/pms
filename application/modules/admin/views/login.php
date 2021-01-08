<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ibrahim Hossain">

    <title><?php echo $page_title. ' | '.$admin_meta_title;?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('awedget/plugins/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('awedget/plugins/metisMenu/dist/metisMenu.min.css');?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('awedget/css/bdquery-cms.css');?>" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url('awedget/plugins/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                    <div id="infoMessage"><?php echo $message;?></div>
                        <?php
                        $attributes = array('role' => 'form');
                        echo form_open($this->AdminControllerName."/login", $attributes);
                        ?>
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <?php echo form_input($identity);?>
                                </div>
                                <div class="form-group">
                                    <?php echo form_input($password);?>
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <?php echo form_submit('submit', 'Log In', "class='btn btn-lg btn-success btn-block'"); ?>
                            </fieldset>
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('awedget/plugins/jquery/dist/jquery.min.js');?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('awedget/plugins/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('awedget/plugins/metisMenu/dist/metisMenu.min.js');?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('awedget/js/bdquery-cms.js');?>"></script>

</body>

</html>
