<!-- Mian Content -->

<main id="main-content" class="main-coontent">

    <!-- Welcome Section -->
    <section class="tc-padding" style="padding-bottom: 20px;">
        <div class="container">
    
                <div class="login">
                    <div class="row">

                        <!-- Detail -->
                        
                                <h3>Login Form</h3>
                                <div id="infoMessage"><?php echo $message;?></div>
                                <div class="login-form">
                                    <?php
                                    $attributes = array('role' => 'form', 'id' => 'contactForm-2');
                                    echo form_open(base_url()."login", $attributes);
                                    ?>
                                        <div class="form-group">
                                            <label>Email ID</label>
                                            <?php echo form_input($identity);?>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <?php echo form_input($password);?>
                                        </div>
                                        <input type="submit" class="btn" value="Login Now">
                                    </form>

                                    <p>Don't have any account <a href="<?=base_url('registration')?>" >Register Now</a></p>
                                </div>

                        <!-- Detail -->
                       

                    </div>
                </div>

        </div>
    </section>
    <!-- Welcome Section -->

</main>
<!-- Mian Content