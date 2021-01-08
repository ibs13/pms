<!-- Mian Content -->
<main id="main-content" class="main-coontent">

    <!-- Welcome Section -->
    <section class="tc-padding" style="padding-bottom: 20px;">
        <div class="container">
            
            <!-- First Row -->
            <div class="product-list">
                <div class="row">
                    <!-- Welcome Text -->
                    <div class="col-md-6">
                                
                        <a class="btn" href="<?php echo base_url('add-product'); ?>">Add Product</a>                                    
                    </div>
                    <div class="col-md-6">                                
                        <p><?php echo $this->session->userdata('name'); ?></p>
                    </div>

                    
                    <div class="col-md-12">

                        <div style="color: green;"> 
                            <?php if($this->session->flashdata('success')):?>
                                <div class="alert alert-success"> <i class="fa fa-check-circle"></i>
                                <?php echo $this->session->flashdata('success');?>
                                </div>
                            <?php endif;?>                        
                        </div>

                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-4 caption"><p>Product List Data Table</p></div>
                            <div class="col-md-4"><input id="myInput" type="text" placeholder="Search.."></div>
                            <div class="col-md-2"></div>
                        </div>

                        <div class="row">

                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <table class="tg" id="myTable">
                                  <tr>
                                    <th class="tg-01q5">Product Name</th>
                                    <th class="tg-01q5">Price</th>
                                    <th class="tg-01q5">Color</th>
                                    <th class="tg-01q5">Status</th>
                                    <th class="tg-01q5">Action</th>
                                  </tr>
                                <?php if ($product_info) { ?>
                                    <?php foreach ($product_info as $productRow) { ?>
                                    <tr id="troew">
                                        <td class="tg-gweg" style="color: black;"><?php echo $productRow->product_name ?></td>
                                        <td class="tg-gweg" style="color: black;"><?php echo $productRow->price ?></td>
                                        <td class="tg-gweg" style="color: black;"><?php echo $productRow->color ?></td>
                                        <td class="tg-gweg" style="color: black;"><?php if($productRow->status==1){ echo "Publish"; }else{ echo "Inactive"; } ?></td>
                                       <td class="tg-gweg"><a href="<?php echo base_url('update-product/'.$productRow->product_id);?>">Edit</a></td> 
                                    </tr>
                                    <?php } ?>
                                <?php }else{ ?>                                        
                                <tr>
                                    <td colspan="5">No data found.</td>
                                </tr>
                                <?php } ?>
                                </table>
                            </div>
                            <div class="col-md-2"></div>
                        </div>

                    </div>
                </div>
                                
            </div>
            <!-- First Row -->
        </div>
    </section>
    <!-- Welcome Section -->

</main>
<!-- Mian Content -->