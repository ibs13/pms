<!-- Mian Content -->
<main id="main-content" class="main-coontent">

    <!-- Section Start -->
    <section class="tc-padding" style="padding-bottom: 20px;">
        <div class="container">
            
            
                <div class="login">
                    <div class="row">

                        <!-- Detail -->
                        
                                <h3>Registration Now</h3>
                                
                                    <div class="login-form">
                                    <?php
                                    $attributes = array('role' => 'form');
                                    echo form_open(base_url()."registration", $attributes);
                                    ?>
                                    <div class="err">
                                        <?php echo validation_errors(); ?>
                                    </div>
                                        
                                        <div class="form-group">
                                            <label>Name</label>
                                            <?php echo form_input($name);?>
                                        </div>

                                        <div class="form-group">
                                                <label>Email Address</label>
                                                <?php echo form_input($email);?>
                                        </div>
                                            
                                        <div class="form-group">
                                            <label>Password</label>
                                            <?php echo form_input($password);?>
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <?php echo form_input($password_confirm);?>
                                        </div>

                                        <input type="submit" class="btn full-width mb-30" value="Create Account" style="color: black;">

                                    </form>

                                    <p>Already registered? <a href="<?=base_url('login')?>">Login Now</a></p>
                                </div>
                                        
                            </div>
                                
                            
                        <!-- Detail -->
                        
                    </div>
                </div>

        </div>
    </section>
    <!-- Section End -->

</main>
<!-- Mian Content