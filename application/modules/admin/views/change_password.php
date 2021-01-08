<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $page_title; ?></h1>
        </div> <!-- /.col-lg-12 -->
    </div> <!-- /.row -->

    <div class="row">
        <div class="col-lg-4">
            <div id="infoMessage"><?php echo $message;?></div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php echo lang('change_password_heading');?>
                </div> <!-- /.panel-heading -->

                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                            $attributes = array('role' => 'form');
                            echo form_open($this->AdminControllerName."/change_password/", $attributes);
                            ?>
                                <div class="form-group">
                                    <label><?php echo lang('change_password_old_password_label', 'old_password'); ?></label>
                                    <?php echo form_input($old_password);?> <br>
                                
                                    <label><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label>
                                    <?php echo form_input($new_password);?> <br>

                                    <label><?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?></label>
                                    <?php echo form_input($new_password_confirm);?>
                                 </div> 

                                 <?php echo form_input($user_id);?>

                                <div class="form-group col-md-12">
                                    <?php echo form_submit('submit', lang('change_password_submit_btn'), "class='btn btn-success'");?>
                                </div>
                            <?php echo form_close();?>
                        </div>
                    </div>
                </div> <!-- /.panel-body -->

            </div> <!-- /.panel -->
        </div> <!-- /.col-lg-8 -->
    </div> <!-- /.row -->
</div> <!-- /#page-wrapper -->

    
