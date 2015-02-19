<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>GEORGE WINGETY</title>
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Libs CSS -->
    {{ HTML::style("css/bootstrap.css") }}
    {{ HTML::style("css/font-awesome.min.css") }}
    {{ HTML::style("css/prettyPhoto.css") }}
    {{ HTML::style("font-awesome/css/font-awesome.min.css") }}

    <!-- Template CSS -->
    {{ HTML::style("css/style.css") }}

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,800&amp;subsetting=all' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    {{ HTML::script("js/html5shiv.js") }}
    {{ HTML::script("js/respond.js") }}
    <![endif]-->

</head>

<body data-spy="scroll" data-target=".navigation">

<!-- Start Header -->
<header id="header">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Start Logo / Text -->
                <a class="navbar-brand text-logo" href="index-slider.html#"><i class="icon-signout"></i>GEORGE WINGETY</a>
                <!-- End Logo / Text -->
            </div>
            <!-- Start Navigation -->
            <div class="navigation navbar-collapse collapse">
                <ul class="nav navbar-nav menu-right">
                    <li class="active"><a href="index-slider.html#header">Home</a></li>
                    <li><a href="index-slider.html#intro">Intro</a></li>
                    <li><a href="index-slider.html#portfolio">Portfolio</a></li>
                    <li><a href="index-slider.html#features">Features</a></li>
                    <li><a href="index-slider.html#snippets">Who We Are</a></li>
                    <li><a href="index-slider.html#pricing">Price</a></li>
                </ul>
            </div>
            <!-- End Navigation  -->
        </div>
    </nav>
</header>
<!-- End Header -->

<!-- Start Banner -->
<div id="banner">
    <div class="banner-inner">
        <div class="container">
            <div class="row">
                <!-- Carousel -->
                <div id="banner-carousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#banner-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#banner-carousel" data-slide-to="1"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item header-text active">
                            <div class="col-xs-5 text-center">
                                <img alt="" title="" class="img-responsive" src="{{asset('img/13.png')}}" style="width:500px; height:400px">
                            </div>
                            <div class="col-xs-7">
                                <h2>GEORGE WINGETY For You.</h2>
                                <p> Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                <p class="hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s, when an unknown printer took a galley of type and scrambled it to make a
                                    type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. </p>
                                <a href="website#" class="btn btn-primary btn-lg btn-bluebg">Get started</a>
                            </div>
                        </div>
                        <div class="item header-text">
                            <div class="col-xs-7">
                                <h1><strong>Increase</strong> Conversion Rates</h1>
                                <p class="hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s, when an unknown printer took a galley of type and scrambled it to make a
                                    type specimen book.</p>
                                <p class="hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s, when an unknown printer took a galley of type and scrambled it to make a
                                    type specimen book.</p>
                                <a href="website#" class="btn btn-primary btn-lg btn-bluebg">Get started</a>
                            </div>
                            <div class="col-xs-5 text-center">
                                <img alt="" title="" class="img-responsive" src="{{asset('img/1.png')}}"style="width: 500px; height: 400px">
                            </div>
                        </div>
                    </div>
                </div><!-- /carousel -->
            </div>
            <div class="divider50"></div>
            <!-- Start Banner Optin Form-->
            <form id="banner-form" method="post" action="">

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-process"></div><!-- Displays status when submitting form -->
                    </div>
                </div>
            </form>
            <!-- End Banner Optin Form -->
        </div>
    </div>
</div>
<!-- End Banner -->

<!-- Start Intro -->
<section id="intro" class="section">
    <div class="container">
        <div class="row">
            <!-- Main Points -->
            <div class="col-lg-6 col-md-6">
                <div class="main-point">
                    <i class="fa fa-cubes"></i>
                    <h4>Client Oriented</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
                <div class="main-point">
                    <i class="fa fa-male"></i>
                    <h4>Affordable Devices</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
                <div class="main-point main-point-last">
                    <i class="fa fa-codepen"></i>
                    <h4>Easy Adaptable</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
            <!-- End Main Points -->
            <!-- Side Image -->
            <div class="col-lg-6 col-md-6">
                <img src="{{asset('img/6.png')}}" class="img-responsive" alt="" title="" />
            </div>
            <!-- End Side Image -->
        </div>

        <hr/>

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <img src="{{asset('img/4.png')}}" class="img-responsive" alt="" title="" />
            </div>
            <div class="col-lg-6 col-md-6">
                <h2>Plate Compactor</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
                <ul class="normal-list">
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                    <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut,</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
            </div>
        </div>
        <!-- End Content Row -->

        <div class="divider50"></div>

        <div class="row">
            <div class="col-lg-4 col-md-4 hidden-xs">
                <!-- Left Column : Assistance -->
                <div class="side-text text-center">
                    <i class="fa fa-cogs fa-4x"></i>
                    <h4>Need  Assistance</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <!-- End Left Column -->
            </div>
            <div class="col-lg-8 col-md-8">
                <div class="row col-md-6">
                   <div class="img-responsive "><img src="{{asset('img/8.png')}}" style="width: 300px; height: 300px"></div>
                </div>
                <div class="row col-md-6">
                    <div class="img-responsive "><img src="{{asset('img/2.png')}}" style="width: 300px; height: 250px"> </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Intro -->

<!-- Portfolio -->
<section id="portfolio" class="bg-grey section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="headline">
                    <h1>Our Work</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam aliquando posse.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-3">
                <!-- Start Portfolio Item -->
                <div class="hover-details">
                    <img class="img-responsive img-thumbnail img-rounded" src="{{asset('img/16.png')}}" style="width: 300px; height: 250px" alt="" title="" /><!-- Image Thumbnail  -->
                    <div class="img-cover">
                        <a href="img/16.png')}}" class="img-zoom" data-gal="prettyPhoto"><i class="fa fa-search fa-fw"></i></a><!-- Large Image  -->
                        <h3>Item Description</h3><!-- Image Description  -->
                    </div>
                </div>
                <!-- End Portfolio Item  -->
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
                <!-- Start Portfolio Item -->
                <div class="hover-details">
                    <img class="img-responsive img-thumbnail img-rounded" src="{{asset('img/6.png')}}" style="width: 300px; height: 250px" alt="" title="" /><!-- Image Thumbnail  -->
                    <div class="img-cover">
                        <a href="img/6.png')}}" class="img-zoom" data-gal="prettyPhoto"><i class="fa fa-search fa-fw"></i></a><!-- Large Image  -->
                        <h3>Item Description</h3><!-- Image Description  -->
                    </div>
                </div>
                <!-- End Portfolio Item  -->
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
                <!-- Start Portfolio Item -->
                <div class="hover-details">
                    <img class="img-responsive img-thumbnail img-rounded" src="{{asset('img/13.png')}}" style="width: 300px; height: 250px" alt="" title="" /><!-- Image Thumbnail  -->
                    <div class="img-cover">
                        <a href="img/13.png')}}" class="img-zoom" data-gal="prettyPhoto"><i class="fa fa-search fa-fw"></i></a><!-- Large Image  -->
                        <h3>Item Description</h3><!-- Image Description  -->
                    </div>
                </div>
                <!-- End Portfolio Item  -->
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
                <!-- Start Portfolio Item -->
                <div class="hover-details">
                    <img class="img-rounded img-responsive img-thumbnail" src="{{asset('img/4.png')}}" style="width: 300px; height: 250px" alt="" title="" /><!-- Image Thumbnail  -->
                    <div class="img-cover">
                        <a href="img/4.png')}}" class="img-zoom" data-gal="prettyPhoto"><i class="fa fa-search fa-fw"></i></a><!-- Large Image  -->
                        <h3>Item Description</h3><!-- Image Description  -->
                    </div>
                </div>
                <!-- End Portfolio Item  -->
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-3">
                <!-- Start Portfolio Item -->
                <div class="hover-details">
                    <img class="img-responsive img-thumbnail" src="{{asset('img/10.png')}}" style="width: 300px; height: 250px" alt="" title="" /><!-- Image Thumbnail  -->
                    <div class="img-cover">
                        <a href="img/10.png')}}" class="img-zoom" data-gal="prettyPhoto"><i class="fa fa-search fa-fw"></i></a><!-- Large Image  -->
                        <h3>Item Description</h3><!-- Image Description  -->
                    </div>
                </div>
                <!-- End Portfolio Item  -->
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
                <!-- Start Portfolio Item -->
                <div class="hover-details">
                    <img class="img-responsive img-thumbnail" src="{{asset('img/11.jpg')}}" style="width: 300px; height: 250px" alt="" title="" /><!-- Image Thumbnail  -->
                    <div class="img-cover">
                        <a href="img/11.jpg')}}" class="img-zoom" data-gal="prettyPhoto"><i class="fa fa-search fa-fw"></i></a><!-- Large Image  -->
                        <h3>Item Description</h3><!-- Image Description  -->
                    </div>
                </div>
                <!-- End Portfolio Item  -->
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
                <!-- Start Portfolio Item -->
                <div class="hover-details">
                    <img class="img-responsive img-thumbnail" src="{{asset('img/12.png')}}" style="width: 300px; height: 250px" alt="" title="" /><!-- Image Thumbnail  -->
                    <div class="img-cover">
                        <a href="img/12.png')}}" class="img-zoom" data-gal="prettyPhoto"><i class="fa fa-search fa-fw"></i></a><!-- Large Image  -->
                        <h3>Item Description</h3><!-- Image Description  -->
                    </div>
                </div>
                <!-- End Portfolio Item  -->
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
                <!-- Start Portfolio Item -->
                <div class="hover-details">
                    <img class="img-responsive img-thumbnail" src="{{asset('img/14.png')}}" style="width: 300px; height: 250px" alt="" title="" /><!-- Image Thumbnail  -->
                    <div class="img-cover">
                        <a href="img/14.png')}}" class="img-zoom" data-gal="prettyPhoto"><i class="fa fa-search fa-fw"></i></a><!-- Large Image  -->
                        <h3>Item Description</h3><!-- Image Description  -->
                    </div>
                </div>
                <!-- End Portfolio Item  -->
            </div>
        </div>
    </div>
</section>
<!-- End Portfolio -->

<!-- Start Features -->
<section id="features" class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="headline">
                    <h1><strong>Best Top</strong> Machines</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam aliquando posse.</p>
                </div>
            </div>
        </div>
        <div class="divider35"></div>
        <div class="row">
            <!-- Features Listing -->
            <div class="col-lg-8 col-md-8">
                <div class="row">
                    <!-- Features List -->
                    <div class="col-lg-6 col-md-6">
                        <div class="features-list">
                            <i class="fa fa-cogs fa-5x"></i><!-- Features Icon -->
                            <h4>Concrete Mixer</h4><!-- Features Title -->
                            <p>Lorem Ipsum has been the industry's standard dummy text since the 1500s.</p><!-- Features Details -->
                        </div>
                    </div>
                    <!-- End Features List -->
                    <!-- Features List -->
                    <div class="col-lg-6 col-md-6">
                        <div class="features-list">
                            <i class="fa fa-compress fa-5x"></i><!-- Features Icon -->
                            <h4>Air compressor</h4><!-- Features Title -->
                            <p>Lorem Ipsum has been the industry's standard dummy text since the 1500s.</p><!-- Features Details -->
                        </div>
                    </div>
                    <!-- End Features List -->
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <!-- Features List -->
                        <div class="features-list">
                            <i class="fa fa-sliders fa-5x"></i><!-- Features Icon -->
                            <h4>Plate Compactor</h4><!-- Features Title -->
                            <p>Lorem Ipsum has been the industry's standard dummy text since the 1500s.</p><!-- Features Details -->
                        </div>
                    </div>
                    <!-- End Features List -->
                    <!-- Features List -->
                    <div class="col-lg-6 col-md-6">
                        <div class="features-list">
                            <i class="fa fa-file fa-5x"></i><!-- Features Icon -->
                            <h4>Hydraulic Hammer</h4><!-- Features Title -->
                            <p>Lorem Ipsum has been the industry's standard dummy text since the 1500s.</p><!-- Features Details -->
                        </div>
                    </div>
                    <!-- End Features List -->
                </div>
                <div class="row last-row">
                    <!-- Features List -->
                    <div class="col-lg-6 col-md-6">
                        <div class="features-list">
                            <i class="fa fa-database fa-5x"></i><!-- Features Icon -->
                            <h4>Mining Winch</h4><!-- Features Title -->
                            <p>Lorem Ipsum has been the industry's standard dummy text since the 1500s.</p><!-- Features Details -->
                        </div>
                    </div>
                    <!-- End Features List -->
                    <!-- Features List -->
                    <div class="col-lg-6 col-md-6">
                        <div class="features-list">
                            <i class="fa fa-cog fa-5x"></i><!-- Features Icon -->
                            <h4>Air drill/digger</h4><!-- Features Title -->
                            <p>Lorem Ipsum has been the industry's standard dummy text since the 1500s.</p><!-- Features Details -->
                        </div>
                    </div>
                    <!-- End Features List -->
                </div>
            </div>
            <!-- End Features Listing -->
            <!-- Side Features Image -->
            <div class="col-lg-4 col-md-4">
                <img class="img-responsive" src="{{asset('img/3.png')}}" style="width: 100%; height: 100%" alt="" title="" />
            </div>
            <!-- End Side Features Image -->
        </div>

<!--        <div class="row">-->
<!--            <div class="col-lg-12">-->
<!--                <div class="alert alert-info">-->
<!--                    <a href="website#" class="close" data-dismiss="alert">&times;</a>-->
<!--                    <strong>Note!</strong> You can change the layout into 3 columns with all services icons instead of only 2 columns.-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

    </div>
</section>
<!-- End Features -->



<!-- Start Snippets -->
<section id="snippets" class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="headline">
                    <h1> <strong>Who We Are</strong><br>Meet The Team</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam aliquando posse.</p>
                </div>
            </div>
        </div>
        <!-- Start Tabs -->
        <div class="row">
            <ul class="nav nav-tabs">
                <li class="active"><a href="website#first-tab" data-toggle="tab"><i class="fa fa-video-camera"></i> Introductory Video</a></li><!--Tab #1 -->
                <li><a href="website#second-tab" data-toggle="tab"><i class="fa fa-cube"></i> Introductory Text</a></li><!--Tab #2 -->
                <li><a href="website#third-tab" data-toggle="tab"><i class="fa fa-group"></i> The Team</a></li><!--Tab #3 -->
            </ul>
            <div class="tab-content">
                <!-- Introductory Video -->
                <div class="tab-pane active" id="first-tab">
                    <div class="row">
                        <div class="video-container">
<!--                            <iframe src="http://player.vimeo.com/video/75188030"></iframe>-->
                        </div>
                    </div>
                </div>
                <!-- End Introductory Video -->
                <!-- Random Text -->
                <div class="tab-pane" id="second-tab">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <img src="{{asset('img/20.jpg')}}" class="img-responsive" alt="" title="" />
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h2>Introductory Text</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
                            <ul class="normal-list">
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                <li>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut,</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
                        </div>
                    </div>
                </div>
                <!-- End Random Text -->
                <!-- Members Listing -->
                <div class="tab-pane" id="third-tab">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 members-holder">
                            <!-- Start Member Details  -->
                            <div class="members-detail">
                                <img src="{{asset('img/24.png')}}" alt="" class="img-responsive" title=""><!-- Member Image  -->
                                <h4>CASMIR, George</h4><!-- Member Name  -->
                                <p>Founder &amp; Money Maker</p><!-- Member Title  -->
                                <ul class="members-social"><!-- Member Social Media Links  -->
                                    <li><a href="mailto:mail@example.com"><i class="fa fa-envelope fa-fw"></i></a></li>
                                    <li><a href="website#"><i class="fa fa-twitter fa-fw"></i></a></li>
                                    <li><a href="website#"><i class="fa fa-facebook fa-fw"></i></a></li>
                                    <li><a href="website#"><i class="fa fa-linkedin fa-fw"></i></a></li>
                                </ul>
                            </div>
                            <!-- End Member Details  -->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 members-holder">
                            <div class="members-detail">
                                <img src="{{asset('img/24.png')}}" alt="" class="img-responsive" title="">
                                <h4>YUNGE, Amani</h4>
                                <p>Graphic Designer &amp; IT Expert</p>
                                <ul class="members-social">
                                    <li><a href="mailto:mail@example.com"><i class="fa fa-envelope fa-fw"></i></a></li>
                                    <li><a href="website#"><i class="fa fa-twitter fa-fw"></i></a></li>
                                    <li><a href="website#"><i class="fa fa-facebook fa-fw"></i></a></li>
                                    <li><a href="website#"><i class="fa fa-linkedin fa-fw"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 members-holder">
                            <div class="members-detail">
                                <img src="{{asset('img/24.png')}}" alt="" class="img-responsive" title="">
                                <h4>YUNGE, Amani </h4>
                                <p>Lead Web Designer</p>
                                <ul class="members-social">
                                    <li><a href="mailto:mail@example.com"><i class="fa fa-envelope fa-fw"></i></a></li>
                                    <li><a href="website#"><i class="fa fa-twitter fa-fw"></i></a></li>
                                    <li><a href="website#"><i class="fa fa-facebook fa-fw"></i></a></li>
                                    <li><a href="website#"><i class="fa fa-linkedin fa-fw"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Members Listing -->
            </div>
        </div>
        <!-- End Tabs -->
    </div>
</section>
<!-- End Snippets -->

<!--Subscribe -->
<section class="section bg-blue">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="headline">
                    <h1><strong>George</strong> Casmir</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

            </div>
        </div>
    </div>
</section>
<!--End Subscribe -->

<!--Testimonials -->
<section id="testimonials" class="section testimonial-bg cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="headline">
                    <h1>Awesome <strong>Testimonials</strong></h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam aliquando posse.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-md-12'>
                <!-- Start Testimonial Slider -->
                <div class="carousel slide carousel-mod" data-ride="carousel" id="testimonial">
                    <div class="carousel-inner">
                        <!-- Testimonial #1  -->
                        <div class="item active">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="testimonial-inner">
                                        <img src="{{asset('img/24.png')}}" style="height: 150px;width: 150px"  alt="" title="" /><!-- Testimonial Image  -->
                                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p><!-- Tesimonial  -->
                                        <small>Amani Yunge</small><!-- Testimonial Author  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Testimonial #1  -->
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="testimonial-inner">
                                        <img src="{{asset('img/24.png')}}"  style="height: 150px;width: 150px" alt="" title="" /><!-- Testimonial Image  -->
                                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p><!-- Tesimonial  -->
                                        <small>Amani Yunge</small><!-- Testimonial Author  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="testimonial-inner">
                                        <img src="{{asset('img/24.png')}}" style="height: 150px;width: 150px" alt="" title="" /><!-- Testimonial Image  -->
                                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p><!-- Tesimonial  -->
                                        <small>Amani Yunge</small><!-- Testimonial Author  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Navigation  -->
                    <ol class="carousel-indicators">
                        <li data-target="#testimonial" data-slide-to="0" class="active"></li>
                        <li data-target="#testimonial" data-slide-to="1"></li>
                        <li data-target="#testimonial" data-slide-to="2"></li>
                    </ol>
                    <!-- End Testimonial Navigation  -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonials -->

<!-- Start Partners -->
<section id="partners" class="section20 bg-dark hidden-xs">
    <div class="container">
        <div class="row">
            <ul class="partners-logo">
                <li class="col-md-2 col-sm-2"><a href="website#"><img src="{{asset('img/logo1.png')}}" alt="" title="" /></a></li><!-- Logo Image -->
                <li class="col-md-2 col-sm-2"><a href="website#"><img src="{{asset('img/logo2.png')}}" alt="" title="" /></a></li>
                <li class="col-md-2 col-sm-2"><a href="website#"><img src="{{asset('img/logo3.png')}}" alt="" title="" /></a></li>
                <li class="col-md-2 col-sm-2"><a href="website#"><img src="{{asset('img/logo4.png')}}" alt="" title="" /></a></li>
                <li class="col-md-2 col-sm-2"><a href="website#"><img src="{{asset('img/logo1.png')}}" alt="" title="" /></a></li>
                <li class="col-md-2 col-sm-2"><a href="website#"><img src="{{asset('img/logo2.png')}}" alt="" title="" /></a></li>
            </ul>
        </div>
    </div>
</section>
<!-- End Partners -->


<!-- Start Pricing -->
<section id="pricing" class="bg-grey section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="headline">
                    <h1>Pricing</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam aliquando posse.</p>
                </div>
            </div>
        </div>

        <div class="divider50"></div>

        <div class="row">
            <!-- Price Column #1 -->
            <div class="col-sm-4 pricing-container">
                <div class="price-column">
                    <h2>Title</h2><!-- Package Title -->
                    <h3>Price<sup></sup> <span>/ device</span></h3><!-- Price -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p><!-- Description -->
                    <!-- Package Features -->
                    <ul>
                        <li>Lorem ipsum dolor <i class="fa fa-check"></i></li>
                        <li><del>Sit amet, consectetur nam</del> <i class="fa fa-times red-color"></i></li>
                        <li><del>Magna adipiscing elit nam dui</del> <i class="fa fa-times red-color"></i></li>
                        <li><del>Lacus ut accumsan sed</del> <i class="fa fa-times red-color"></i></li>
                    </ul>
                    <!-- End Package Features -->
                    <div class="price-bottom">
                        <a href="website#" class="btn btn-default price-btn">Get Started</a><!-- Buy Button -->
                    </div>
                </div>
            </div>
            <!-- End Price Column #1 -->
            <!-- Price Column #2 -->
            <div class="col-sm-4 pricing-container featured-price">
                <div class="price-column large">
                    <h2>Title</h2><!-- Package Title -->
                    <h3>Price<sup></sup> <span>/ device</span></h3><!-- Price -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p><!-- Description -->
                    <!-- Package Features -->
                    <ul>
                        <li>Lorem ipsum dolor <i class="fa fa-check"></i></li>
                        <li>Lacus ut accumsan sed <i class="fa fa-check"></i></li>
                        <li>Sit amet, consectetur nam <i class="fa fa-check"></i></li>
                        <li>Magna adipiscing elit nam dui<i class="fa fa-check"></i></li>
                        <li>Lacus ut accumsan sed <i class="fa fa-check"></i></li>
                    </ul>
                    <!-- End Package Features -->
                    <div class="price-bottom">
                        <a href="website#" class="btn btn-default price-btn">Get Started</a><!-- Buy Button -->
                    </div>
                </div>
            </div>
            <!-- End Price Column #2 -->
            <!-- Price Column #4 -->
            <div class="col-sm-4 pricing-container">
                <div class="price-column">
                    <h2>Title</h2><!-- Package Title -->
                    <h3>Price<sup></sup> <span>/ device</span></h3><!-- Price -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p><!-- Description -->
                    <!-- Package Features -->
                    <ul>
                        <li>Lorem ipsum dolor <i class="fa fa-check"></i></li>
                        <li><del>Sit amet, consectetur nam</del> <i class="fa fa-times red-color"></i></li>
                        <li>Magna adipiscing elit nam dui<i class="fa fa-check"></i></li>
                        <li><del>Lacus ut accumsan sed</del> <i class="fa fa-times red-color"></i></li>
                    </ul>
                    <!-- End Package Features -->
                    <div class="price-bottom">
                        <a href="website#" class="btn btn-default price-btn">Get Started</a><!-- Buy Button -->
                    </div>
                </div>
            </div>
            <!-- End Price Column #1 -->
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <p class="lead">Need a <strong>customized</strong> plan ? Get in Touch, we will tailor you one.</p>
            </div>
        </div>
    </div>
</section>
<!-- End Pricing -->

<!-- Start Subscribe -->
<!--<section id="subscribe" class="section">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12">-->
<!--                <div class="headline">-->
<!--                    <h1>Get <strong>Started</strong></h1>-->
<!--                    <p>Sign up and get our latest updates and product release</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12 text-center">-->
<!--                <a href="website#" class="btn btn-primary btn-lg btn-bluebg">Get started</a>-->
<!--                <a href="website#" class="btn btn-default btn-lg btn-bluenobg">Take tour</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!-- End Subscribe -->

<footer id="footer" class="section nopadding-bottom">
    <div class="container">
        <div class="row">
            <!--Footer About Description -->
            <div class="col-md-3 col-sm-6">
                <h4>About GEORGE WINGETY</h4>
                <p>Default text creates the illusion of real text. If it is not real text, they will focus on the design.</p>
                <hr/>
                <h4>Quick Links</h4>
                <ul class="quick-links">
                    <li><a href="website#">Contact</a></li>
                    <li><a href="website#">Disclaimer</a></li>
                    <li><a href="website#">Terms &amp; Conditions</a></li>
                    <li><a href="website#">Privacy Policy</a></li>
                    <li><a href="website#">Support</a></li>
                </ul>
            </div>
            <!-- End Footer About Description -->

            <!-- Start Contact Details  -->
            <div class="col-md-4 col-sm-6">
                <div class="contact-info">
                    <h4>Where to find us</h4>
                    <p>Nam leo lorem, tincidunt id risus ut, ornare tincidunt naqunc.</p>
                    <ul class="contact-list">
                        <li><i class="fa fa-map-marker"></i>Opp. University Corner, Ubungo.<br>&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dar es  Salaam</li>
                        <li><i class="fa fa-phone"></i>+255 784 771 675</li>
                        <li><i class="fa fa-envelope-o"></i><a href="">gmgcasmir772@gmail.com</a></li>
                    </ul>
                </div>
                <!-- End Contact Details  -->
                <hr/>

                <div class="social">
                    <h4>Follow us</h4>
                    <!-- Start  Social Links -->
                    <ul class="social">
                        <li class="facebook"> <a href="website#"> <i class="fa fa-facebook"></i> </a> </li>
                        <li class="google-plus"> <a href="website#"> <i class="fa fa-google-plus"></i> </a> </li>
                        <li class="linkedin"> <a href="website#"> <i class="fa fa-linkedin"></i> </a> </li>
                    </ul>
                    <!-- End Social Links  -->
                </div>
            </div>
            <div class="col-md-5 bottom-contact">
                <h4>Get in Touch</h4>
                <p>Nam leo lorem, tincidunt id risus ut, ornare tincidunt naqunc.</p>
                <!-- Start Contact Form  -->
                <form id="contact-form" class="contact-form" method="post" action="http://websites.simplesphere.net/sales/version1/contact-form.php">
                    <div class="form-group">
                        <input name="contact-name" id="contact-name" type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input name="contact-email" id="contact-email" type="text" class="form-control" placeholder="Your e-mail">
                    </div>
                    <div class="form-group">
                        <input name="contact-phone" id="contact-phone" type="text" class="form-control" placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <textarea name="contact-message" id="contact-message" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default btn-submit">Submit</button>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-process-contact"></div>
                        </div>
                    </div>
                </form>
                <!-- End Contact Form  -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row footer-bottom">
            <div class="col-lg-6 col-sm-6">
                <p>&copy; GEORGE WINGETY. All Right Reserved</p>
            </div>
            <div class="col-lg-6 col-sm-6">
                <p class="copyright">Made with <i class="fa fa-heart"></i> by <a href="http://">dotphics</a></p>
            </div>
        </div>
    </div>
</footer>

<!-- Start Scroll To Top  -->
<a href="website#" class="scroll-up"><i class="fa fa-arrow-up"></i></a>
<!-- End Scroll To Top  -->

<!-- Start Js Files -->
{{ HTML::script("js/jquery-2.1.0.min.js") }}

<!--<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script>-->
<script type="text/javascript">window.jQuery || document.write('{{ HTML::script("js/jquery-2.1.0.min.j") }}')</script>
{{ HTML::script("http://code.jquery.com/jquery-2.1.0.min.js") }}
{{ HTML::script("js/bootstrap.min.js") }}
{{ HTML::script("js/modernizr.min.js") }}
{{ HTML::script("js/jquery.prettyPhoto.js") }}
{{ HTML::script("js/custom.js") }}
<!-- End Js Files  -->

</body>
</html>