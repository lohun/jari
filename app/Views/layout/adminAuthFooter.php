    <!-- JavaScript -->
    <script src="<?= base_url("assets/js/jquery-1.12.1.min.js") ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="<?= base_url("assets/js/jquery.scrollUp.min.js") ?>"></script>

    <script src="<?= base_url("assets/js/main.js") ?>"></script>

    <script>
        $(document).ready(function() {
            $('.close').click(function() {
                $('.alert').hide();
            })
            $("#alert-success").ready(function() {
                setTimeout(function() {
                    $("#alert-success").hide();
                }, 10000);
            });


            $("#alert-danger").ready(function() {
                setTimeout(function() {
                    $("#alert-danger").hide();
                }, 10000);
            })

            $("#alert-message").ready(function() {
                setTimeout(function() {
                    $("#alert-message").hide();
                }, 10000);
            })
        })
    </script>
</body>

</html>