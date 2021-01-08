<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $page_title; ?></h1>
        </div> <!-- /.col-lg-12 -->
    </div> <!-- /.row -->

<?php $sl=0; // initiate the serial value ?>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List of the users
                </div> <!-- /.panel-heading -->

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Product Count</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($users as $user):
                                $sl++;
                            ?>
                                <tr>
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $user->first_name;?></td>
                                    <td><?php echo $user->num; ?></td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div> <!-- /.table-responsive -->
                </div> <!-- /.panel-body -->

            </div> <!-- /.panel -->
        </div> <!-- /.col-lg-8 -->
    </div> <!-- /.row -->
</div> <!-- /#page-wrapper -->

    
