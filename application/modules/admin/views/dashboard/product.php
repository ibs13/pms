<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $page_title; ?></h1>
        </div> <!-- /.col-lg-12 -->
    </div> <!-- /.row -->

<?php $sl=0; ?>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List of Product
                </div> <!-- /.panel-heading -->

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product Owner</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Status</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php if ($product) { ?>
                                <?php foreach ($product as $productRow): $sl++;?>
                                <tr>
                                    <td width="50"><?php echo $sl; ?></td>

                                    <td style="text-align: left;"><?php echo $productRow->first_name ?></td>
                                    <td style="text-align: left;"><?php echo $productRow->product_name ?></td>
                                    <td style="text-align: left;"><?php echo $productRow->price ?></td>
                                    <td style="text-align: left;"><?php if($productRow->status==1) echo "Publish"; else echo "Inactive"; ?></td>
                                    
                                </tr>
                            <?php endforeach;?>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div> <!-- /.table-responsive -->
                </div> <!-- /.panel-body -->

            </div> <!-- /.panel -->
        </div> <!-- /.col-lg-8 -->
    </div> <!-- /.row -->
</div> <!-- /#page-wrapper -->

    
