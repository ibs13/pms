<!-- Mian Content -->
<main id="main-content" class="main-coontent">

    <!-- Welcome Section -->
    <section class="tc-padding" style="padding-bottom: 20px;">
        <div class="container">
            
                <div class="row" style="margin-top: 30px;">

                <?php $counter = 0;
                 if ($product) { ?>
                <?php foreach ($product as $productRow): ?>

                    <div class="col-md-3 loading">
                        <div class="image-holder" onclick="document.getElementById('id<?php echo ++$counter; ?>').style.display='block'">
                            <img class="" src="<?php echo base_url();?>documents/<?php echo $productRow->file_name ?>" width="100%" height="200">
                            <p class="price"><?php echo $productRow->price ?> BDT</p>
                            <p class="name"><?php echo $productRow->product_name ?></p>
                        </div>
                    </div>
                    
                    <div id="id<?php echo $counter; ?>" class="modal">
                  
                        <div class="modal-content animate">

                            <div class="imgcontainer">
                              <span onclick="document.getElementById('id<?php echo $counter; ?>').style.display='none'" class="close" title="Close Modal">&times;</span>
                            </div>


                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <img class="img-responsive" src="<?php echo base_url();?>documents/<?php echo $productRow->file_name ?>" >
                                </div>
                                <div class="col-md-8">
                                    <p class="name"><?php echo $productRow->price ?> BDT</p>
                                    <p class="price"><?php echo $productRow->product_name ?></p>
                                    <p class="price"><?php echo $productRow->color ?></p>
                                    <p class="price">Product Owner: <?php echo $productRow->first_name ?></p>
                                </div>
                            </div>
                        </div>

                      </div>
                    </div>

                    <script>
                        

                        var modal<?php echo $counter; ?> = document.getElementById('id<?php echo $counter; ?>');


                    </script>
                <?php endforeach;?>
                <?php } ?>
                    
                </div>
            </div>
            <!-- First Row -->

            <a href="#" id="loadMore">Load More</a>              

        </div>
    </section>
    <!-- Welcome Section -->


    
</main>
<!-- Mian Content