<!--Mian Content -->
<main id="main-content" class="main-coontent">

    <!-- Welcome Section -->
    <section class="tc-padding" style="padding-bottom: 20px;">
        <div class="container">
            
            <!-- First Row -->
            <div class="product-list">
                <div class="row">
                    <!-- Welcome Text -->
                    <div class="col-md-6">
                                
                        <a class="btn" href="<?php echo base_url('product-owner-panel'); ?>">Product Owner Panel</a>                                    
                    </div>
                    <div class="col-md-6">                                
                        <p><?php echo $this->session->userdata('name'); ?></p>
                    </div>

                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <h3>Update Product Information</h3>

                        <?php
                        $attributes = array('role' => 'form');
                        echo form_open_multipart("update-product/".$info->product_id); 
                        echo validation_errors();
                        ?>
                        <div> 
                            <?php if($this->session->flashdata('upload_errors')):?>
                                <?php echo $this->session->flashdata('upload_errors');?>
                            <?php endif;?>
                        </div>

                            <div class="col-md-12 form-group" id="fname-field">
                                <label>Product Name</label>
                                <input type="text" name="product_name" class="form-control" value="<?php echo $info->product_name; ?>" required >
                            </div>
                            
                            <div class="col-md-6 form-group">
                                <label>Price</label>
                                <input type="text" name="price" class="form-control" value="<?php echo $info->price; ?>" required >
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Color</label>
                                <input type="text" name="color" class="form-control" value="<?php echo $info->color; ?>" required >
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Upload Image</label>
                                <input type="file" name="userfile" value="<?php echo $info->file_name; ?>" /> <br>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Status</label>
                                <select name="status" class="form-control" style="border:1px solid #ccc;">
                                    <?php if($info->status==1){ ?>
                                        <option value="1">Publish</option>
                                        <option value="0">Inactive</option>
                                    <?php }else{ ?>
                                        <option value="0">Inactive</option>
                                        <option value="1">Publish</option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="reset" name="reset" value="Reset" class="btn pull-left">
                                <input type="submit" name="submit" value="Update" class="btn pull-right">
                            </div>
                        </form>

                    </div>
                    <div class="col-md-2"></div>
                </div>
                                
            </div>
            <!-- First Row -->
        </div>
    </section>
    <!-- Welcome Section -->

</main>
<!-- Mian Content