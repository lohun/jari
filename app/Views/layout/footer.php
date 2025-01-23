    <!-- Footer -->
    <footer>
        <!-- Footer top -->
        <div class="container footer_top">
            <div class="row">
                <div class="col-lg-3 col-sm-5">
                    <div class="footer_item">
                        <img class="logo" src="<?= base_url("assets/images/logo2.png") ?>" style="margin-left: -3rem;" alt="Construction" />

                        <ul class="list-inline footer_social_icon">
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-7">
                    <div class="footer_item">
                        <h4>Contact us</h4>
                        <ul class="list-unstyled footer_contact">
                            <li><a href="#"><span class="fa fa-map-marker"></span> Lagos/Ibadan Expressway, between New Makun-City and Danco filling Station, the sprawling Sinoma Industrial Area in Sagamu (approximately 5 kilometers from the Redemption Camp).</a></li>
                            <li><a href="#"><span class="fa fa-phone"></span> +2348068175653</a></li>
                            <li><a href="#"><span class="fa fa-phone"></span> +2348026911981</a></li>
                            <li><a href="#"><span class="fa fa-phone"></span> +2347032194796</a></li>
                            <li><a href="#"><span class="fa fa-envelope"></span> Kingjariglobalresourceslimited@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- Footer top end -->

        <!-- Footer bottom -->
        <div class="footer_bottom text-center">
            <p class="wow fadeInRight">
                Copyright
                <i class="fa fa-at"></i>
                KING JIRA 2024. All Rights Reserved
            </p>
        </div><!-- Footer bottom end -->
    </footer><!-- Footer end -->

    <!-- JavaScript -->
    <script src="<?= base_url("assets/js/jquery-1.12.1.min.js") ?>"></script>
    <script src="<?= base_url("assets/js/bootstrap.min.js") ?>"></script>

    <!-- Bootsnav js -->
    <script src="<?= base_url("assets/js/bootsnav.js") ?>"></script>

    <!-- JS Implementing Plugins -->
    <script src="<?= base_url("assets/js/isotope.js") ?>"></script>
    <script src="<?= base_url("assets/js/isotope-active.js") ?>"></script>
    <!-- <script src="js/jquery.fancybox.js?v=2.1.5"></script> -->

    <script src="<?= base_url("assets/js/jquery.scrollUp.min.js") ?>"></script>

    <script src="<?= base_url("assets/js/main.js") ?>"></script>

    <script>
        Fancybox.bind("[data-fancybox]", {
            // Your custom options
        });

        Fancybox.bind('[data-fancybox="gallery"]', {
            // Custom options for the first gallery
        });

        Fancybox.bind('[data-fancybox="main"]', {
            // Custom options for the second gallery
        });

        $(document).ready(function() {
            $("#alert-success").ready(function() {
                setTimeout(function() {
                    $("#alert-success").addClass("hide");
                }, 5000)
            });


            $("#alert-danger").ready(function() {
                setTimeout(function() {
                    $("#alert-danger").addClass("hide");
                }, 5000)
            })
        })
    </script>
    </body>

    </html>