    <!-- Footer -->
    <footer>
        <!-- Footer top -->
        <div class="container footer_top">
            <div class="row">
                <div class="col-lg-3 col-sm-5">
                    <div class="footer_item">
                        <img class="logo" src="<?= base_url("assets/images/logo2.png") ?>" style="margin-left: -3rem;" alt="Construction" />

                        <ul class="list-inline footer_social_icon">
                            <li><a href=""><span class="fa fa-facebook"></span></a></li>
                            <li><a href=""><span class="fa fa-youtube"></span></a></li>
                            <li><a href=""><span class="fa fa-linkedin"></span></a></li>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Bootsnav js -->
    <script src="<?= base_url("assets/js/bootsnav.js") ?>"></script>

    <!-- JS Implementing Plugins -->
    <script src="<?= base_url("assets/js/isotope.js") ?>"></script>
    <script src="<?= base_url("assets/js/isotope-active.js") ?>"></script>
    <!-- <script src="js/jquery.fancybox.js?v=2.1.5"></script> -->

    <script src="<?= base_url("assets/js/jquery.scrollUp.min.js") ?>"></script>

    <script src="<?= base_url("assets/js/main.js") ?>"></script>


    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>

    <script>
        Fancybox.bind("[data-fancybox]", {
            // Your custom options
        });

        $(document).ready(function() {
            $('#myTable').DataTable()
            $('.close').click(function() {
                $('.alert').hide();
            })
            $("#alert-success").ready(function() {
                setTimeout(function() {
                    $("#alert-success").hide();
                }, 10000)
            });


            $("#alert-danger").ready(function() {
                setTimeout(function() {
                    $("#alert-danger").hide();
                }, 10000)
            })

            $("#alert-message").ready(function() {
                setTimeout(function() {
                    $("#alert-message").hide();
                }, 10000)
            })
        })
    </script>
    </body>

    </html>