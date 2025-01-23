<!-- Navbar -->
<nav class="navbar bootsnav navbar-sticky">

    <div class="contain">
        <!-- Atribute Navigation -->
        <!-- Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle btn" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#home"><img class="logo" style="width: 60%;" src="<?= base_url("assets/images/logo3.png") ?>" alt=""></a>
        </div>
        <!-- Navigation -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact_form">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav><!-- Navbar end -->
</header><!-- Header end -->



<section id="home" class="home">
    <!-- Carousel -->
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel-inner -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <!-- <img src="images/12.jpg" style="width: 100vw; object-fit: cover;" alt="Construction"> -->
                <video src="<?= base_url("assets/images/background.mp4") ?>" style="width: 100vw; object-fit: cover;" alt="Construction" loop muted autoplay></video>
                <div class="overlay">
                    <div class="carousel-caption">
                        <h3>We Have The Best</h3>
                        <!-- <h1>Construction Services</h1> -->
                        <h1 class="second_heading">Trust & Quality</h1>
                        <p>Get the best machinery and equipment for your project</p>
                        <a href="#about" class="btn know_btn">know more</a>
                        <!-- <a  class="btn know_btn">view project</a> -->
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?= base_url("assets/images/10.jpg") ?>" style="width: 100vw; object-fit: cover;" alt="Construction">
                <div class="overlay">
                    <div class="carousel-caption">
                        <h3>We Accomodate</h3>
                        <h1 class="second_heading">Adjustable</h1>
                        <p>Want to buy or rent. We have a plan for you</p>
                        <a href="#about" class="btn know_btn">know more</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?= base_url("assets/images/14.jpg") ?>" style="width: 100vw; object-fit: cover;" alt="Construction">
                <div class="overlay">
                    <div class="carousel-caption">
                        <h3>Our Record Speaks</h3>
                        <h1 class="second_heading">History</h1>
                        <p>We have provided for businesses of all kinds needing our services, let's make your business happy</p>
                        <a href="#about" class="btn know_btn">know more</a>
                    </div>
                </div>
            </div>
        </div><!-- Carousel-inner end -->



        <!-- Controls -->
        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div><!-- Carousel end-->

</section>

<!-- About -->

<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5">
                <div class="about_content">
                    <h2>Who are we?</h2>
                    <h4>KING JARI GLOBAL RESOURCES LIMITED</h4>
                    <p>
                        King Jari Global Resources Limited is a 100% subsidiary of XCMG Heavy Industry China.
                    </p>
                    <p>
                        We have the following equipments available in Nigeria for sale:
                        <li>
                            <h6>Earthmoving Equipment's</h6>
                            Excavator: 21T, 33T<br>
                            Mining Excavator: 50T<br>
                            Wheel Loader/Payloader: 5T, 6T, 7T
                        </li>

                        <li>
                            <h6>Concrete Equipment's</h6>
                            Transit Mixer: 10CBM<br>
                            Concrete Pump: HBT60, HBT80<br>
                            Truck Pump: 38Mtr & 50Mtr
                        </li>
                        <li>
                            <h6>Mobile Crane</h6>
                            Truck Crane: 25T, 30T, 80T
                        </li>
                        <li>
                            <h6>Agriculture Equipment</h6>
                            Tractor: 70HP, 90HP<br>
                            Combined HArvester
                        </li>
                    </p>
                    <p>Feel Free to call me if you need any of the equipments mentioned above</p>
                    <p>Regards <br> Idiku AR Joseph</p>
                    <a href="<?= base_url("about") ?>" class="btn know_btn">know more</a>
                </div>
            </div>


            <div class="col-lg-7 col-md-7">
                <div class="about_banner">
                    <img src="<?= base_url("assets/images/logo.jpeg") ?>" alt="" />
                </div>
            </div>
        </div>
    </div>
</section><!-- About end -->

<!-- Why us -->
<section id="why_us">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="head_title">
                    <h2>WHY CHOOSE US?</h2>
                    <!-- <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p> -->

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="why_us_item">
                    <span class="fa fa-leaf"></span>
                    <h4>We deliver quality</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="why_us_item">
                    <span class="fa fa-futbol-o"></span>
                    <h4>Always on time</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="why_us_item">
                    <span class="fa fa-group"></span>
                    <h4>We are pasionate</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="why_us_item">
                    <span class="fa fa-line-chart"></span>
                    <h4>Professional Services</h4>
                </div>
            </div>
        </div>
    </div>
</section><!-- Why us end -->

<!-- Services -->
<section id="services">
    <div class="container">
        <h2>OUR SERVICES</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="service_item">
                    <img src="<?= base_url("assets/images/s2.jpg") ?>" style="height: 19rem; object-fit: cover;" alt="Our Services" />
                    <h3>Equipment Sales/Renting</h3>
                    <p>Get the best mahines and tools over here</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service_item">
                    <img src="<?= base_url("assets/images/11.jpg") ?>" style="height: 19rem; object-fit: cover;" alt="Our Services" />
                    <h3>Maintenance</h3>
                    <p>We can take a look at your current equipment and get it back to good working</p>
                </div>
            </div>
        </div>
    </div>
</section><!-- Services end -->

<!-- Portfolio -->
<section id="portfolio">
    <div class="container portfolio_area text-center">
        <h2>Our Products</h2>

        <!-- Portfolio grid -->
        <div class="grid">
            <div class="grid-sizer"></div>
            <?php foreach ($media as $row) : ?>
                <div class="grid-item tractors interior isolation">
                    <img alt="" src="<?= base_url($row->thumbnail) ?>">
                    <div class="portfolio_hover_area">
                        <a href="<?= base_url($row->media) ?>" data-fancybox="main" data-caption="<?= $row->description ?>">
                            <?php if (strpos($row->type, "video")) : ?>
                                <span class="fa fa-play"></span>
                            <?php else : ?>
                                <span class="fa fa-search"></span>
                            <?php endif; ?>
                        </a>

                    </div>
                </div>
            <?php endforeach ?>
        </div><!-- Portfolio grid end -->
    </div>
</section><!-- Portfolio end -->

<!-- Contact form -->
<section id="contact_form">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Do you have any questions?</h2>
                <h2 class="second_heading">Feel free to contact us!</h2>
            </div>
            <form method="post" action="<?= base_url("sendmail") ?>" role="form" class="text-right col-md-6">
                <?= csrf_field() ?>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="subject" class="form-control" id="subject" name="subject" placeholder="Subject">
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="5" id="msg" name="msg" placeholder="Message"></textarea>
                </div>
                <button type="submit" class="btn submit_btn">Submit</button>
            </form>
        </div>
    </div>
</section><!-- Contact form end -->