<!-- Footer -->
        <footer id="footer" class="footer">
            <!-- Footer Inner -->
            <div class="container">
            <div class="seprater-line" style="width: 100%"></div>
                
                <div class="sub-footer">
                    <p><span>Copyrights</span> © 2021 | All Rights Reserved</p>
                </div>

            </div>
            <!-- Footer Inner -->
        </footer>
        <!-- Footer -->

    </div>
    <!-- Wrapper -->

    
    <!-- Java Script -->
    <!-- <script src="<?php echo base_url();?>fwedget/2021/assets/scripts/jquery.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>fwedget/2021/assets/scripts/bootstrap.js"></script>
    
    <script src="<?php echo base_url();?>fwedget/2021/assets/scripts/menu.js"></script>
    

    <script>
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable #troew").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });

          $(function () {
                $(".loading").slice(0, 8).show();
                $("#loadMore").on('click', function (e) {
                    e.preventDefault();
                    $(".loading:hidden").slice(0, 8).slideDown();
                    if ($(".loading:hidden").length == 0) {
                        $("#load").fadeOut('slow');
                    }
                    $('html,body').animate({
                        scrollTop: $(this).offset().top
                    }, 1500);
                });
            });

            

            

            $('form')[0].reset();

        });
    </script>
    
    </body>
</html>