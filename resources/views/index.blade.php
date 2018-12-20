@extends('layouts/default')

{{-- Page title --}}
@section('title')
Home
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css starts-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/tabbular.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/animate/animate.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/jquery.circliful.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl_carousel/css/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl_carousel/css/owl.theme.css') }}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<style>
    .box{
        margin-top:53px !important;
    }

</style>

<!--end of page level css-->
@stop

{{-- slider --}}
@section('top')
<!--Carousel Start -->
<div id="owl-demo" class="owl-carousel owl-theme">
    <div class="item img-fluid"><img src="{{ asset('assets/images/slide_1.jpg') }}" alt="slider-image"/>
    </div>
    <div class="item img-fluid"><img src="{{ asset('assets/images/slide_2.jpg') }}" alt="slider-image">
    </div>
    <div class="item img-fluid"><img src="{{ asset('assets/images/slide_3.jpg') }}" alt="slider-image">
    </div>
</div>
<!-- //Carousel End -->
@stop

{{-- content --}}
@section('content')
<div class="container">
<!--    <section class="purchas-main">
        <div class="container bg-border wow pulse" data-wow-duration="2.5s">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-12 col-lg-8">
                    <h1 class="purchae-hed mt-3">Excellent admin template for laravel</h1></div>
                <div class="col-md-5 col-sm-5 col-12 col-lg-4"><a href="#" class="btn purchase-styl float-lg-right">Purchase
                    now</a></div>
            </div>
        </div>
    </section>-->
    <!-- Service Section Start-->
    <div class="row">
        <!-- Responsive Section Start -->
        <div class="col-12 text-center my-3">
            <h3 class="border-primary"><span class="heading_border bg-primary mx-auto">Our Services</span></h3></div>
        <div class="col-sm-6 col-md-6 col-lg-3 wow bounceInLeft" data-wow-duration="3.5s">
            <div class="box">
                <div class="box-icon">
                    <i class="livicon icon" data-name="desktop" data-size="55" data-loop="true" data-c="#01bc8c"
                       data-hc="#01bc8c"></i>
                </div>
                <div class="info">
                    <h3 class="success text-center">Responsive</h3>
                    <p>We will provide you our best & unique design’s on all platforms, because here we design it in CSS-3. It is the latest evolution of the Cascading Style Sheets language and aims at extending CSS2. which make’s it Responsive.</p>
                    <div class="text-right primary"><!--<a href="#">Read more</a>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- //Responsive Section End -->
        <!-- Easy to Use Section Start -->
        <div class="col-sm-6 col-md-6  col-lg-3 col-12 wow bounceInDown" data-wow-duration="3s" data-wow-delay="0.4s">
            <!-- Box Start -->
            <div class="box">
                <div class="box-icon box-icon1">
                    <i class="livicon icon1" data-name="gears" data-size="55" data-loop="true" data-c="#418bca"
                       data-hc="#418bca"></i>
                </div>
                <div class="info">
                    <h3 class="primary text-center">Easy to Use</h3>
                    <p>We focused on the cutting edge solution & simplicity of the product which is easy to use and capable to hold any other feature module in future with 100% accuracy which makes it easy to use & maintain by version control systems.</p>
                    <div class="text-right primary"><!--<a href="#">Read more</a>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- //Easy to Use Section End -->
        <!-- Clean Design Section Start -->
        <div class="col-sm-6 col-md-6  col-lg-3 col-12 wow bounceInUp" data-wow-duration="3s" data-wow-delay="0.8s">
            <div class="box">
                <div class="box-icon box-icon2">
                    <i class="livicon icon1" data-name="doc-portrait" data-size="55" data-loop="true" data-c="#f89a14"
                       data-hc="#f89a14"></i>
                </div>
                <div class="info">
                    <h3 class="warning text-center">Clean Design</h3>
                    <p>Crystal clear design of the product is one of the major need of any project. which is one of the strength of our team. We use latest technologies to develop a efficient & long running product which will help to grow our client.</p>
                    <div class="text-right primary"><!--<a href="#">Read more</a>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- //Clean Design Section End -->
        <!-- 20+ Page Section Start -->
        <div class="col-sm-6 col-md-6 col-lg-3 col-12  wow bounceInRight" data-wow-duration="5s" data-wow-delay="1.2s">
            <div class="box">
                <div class="box-icon box-icon3">
                    <i class="livicon icon1" data-name="folder-open" data-size="55" data-loop="true" data-c="#FFD43C"
                       data-hc="#FFD43C"></i>
                </div>
                <div class="info">
                    <h3 class="yellow text-center">20+ Pages</h3>
                    <p>We are one of the most affordably priced markup services with a track record of on time deliveries and long term relationship with our customers. We extend support by offering a comprehensive 180 day  maintenance.</p>
                    <div class="text-right primary"><!--<a href="#">Read more</a>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- //20+ Page Section End -->
    </div>
    <!-- //Services Section End -->
</div>
<!-- Layout Section Start -->
<!--<section class="feature-main">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-12 col-lg-9 wow zoomIn" data-wow-duration="2s">
                <div class="layout-image">
                    <img src="{{ asset('assets/images/layout.png') }}" alt="layout" class="img-fluid"/>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-4 col-12 wow lightSpeedIn" data-wow-duration="2s">
                <ul class="list-unstyled  text-right layout-styl">
                    <li>
                        <i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c"
                           data-hc="#01bc8c"></i> Responsive clean design
                    </li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c"
                           data-hc="#01bc8c"></i> User friendly
                    </li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c"
                           data-hc="#01bc8c"></i> HTML5
                    </li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c"
                           data-hc="#01bc8c"></i> CSS3
                    </li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c"
                           data-hc="#01bc8c"></i> Bootstrap 4.0.0
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>-->
<!-- //Layout Section Start -->
<!-- Accordions Section End -->
<div class="container">
    <div class="row">
        <!-- Accordions Start -->
        <div class="text-center col-12 wow flash my-3" data-wow-duration="3s">
            <h3 class="border-success"><span class="heading_border bg-success">Accordions</span></h3>
<!--            <label class=" text-center"> Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.</label>-->
        </div>
        <!-- Accordions End -->
        <div class="col-md-6 col-sm-12  col-lg-6 col-12 wow slideInLeft" data-wow-duration="1.5s">
            <!-- Tabbable-Panel Start -->
            <div class="tabbable-panel1 index">
                <!-- Tabbablw-line Start -->
                <div class="tabbable-line">
                    <!-- Nav Nav-tabs Start -->
                    <ul class="nav nav-tabs ">
                        <li class="nav-item ">
                            <a href="#tab_default_1" data-toggle="tab" class="nav-link active">
                                Non-Disclosure Agreement (NDA)</a>
                        </li>
                        <li class="nav-item">
                            <a href="#tab_default_2" data-toggle="tab" class="nav-link">
                                Loyalty Discount </a>
                        </li>
                        <li class="clear_both nav-item">
                            <a href="#tab_default_3" data-toggle="tab" class="nav-link">
                                Affordable Pricing </a>
                        </li>
                        <li class="nav-item">
                            <a href="#tab_default_4" data-toggle="tab" class="nav-link">
                                100% Money Back Guarantee </a>
                        </li>
                    </ul>
                    <hr class="horizontalline">
                    <!-- //Nav Nav-tabs End -->
                    <!-- Tab-content Start -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_default_1">
                            <div class="media">
                                <div class="media-left tab col-sm-12">
                                    <!--<a href="#">-->
                                        <img class="media-object img-fluid"
                                             src="{{ asset('assets/images/authors/img1.jpg') }}" alt="image">
                                    <!--</a>-->
                                </div>
                            </div>
                            <p>
                                By default, all our projects are NDA bound and we never showcase your project in our portfolio without your explicit permission.
                            </p>
                        </div>
                        <div class="tab-pane" id="tab_default_2">
                            <div class="media">
                                <div class="media-left media-middle tab col-sm-12">
                                    <!--<a href="#">-->
                                        <img class="media-object img-fluid"
                                             src="{{ asset('assets/images/authors/img2.jpg') }}" alt="image">
                                    <!--</a>-->
                                </div>
                            </div>
                            <p>
                                We offer 10% loyalty discounts for each repeat order. So, please make sure to ask or use your coupon code and reference while making your repeat order.
                            </p>
                        </div>
                        <div class="tab-pane" id="tab_default_3">
                            <div class="media">
                                <div class="media-left media-middle tab col-sm-12">
                                    <!--<a href="#">-->
                                        <img class="media-object img-fluid"
                                             src="{{ asset('assets/images/authors/img3.jpg') }}" alt="image">
                                    <!--</a>-->
                                </div>
                            </div>
                            <p>
                                We are one of the most affordably priced markup services with a track record of on time deliveries fostering trust and long term relationship with our customers.
                            </p>
                        </div>
                        <div class="tab-pane" id="tab_default_4">
                            <div class="media">
                                <div class="media-left media-middle tab col-sm-12">
                                    <!--<a href="#">-->
                                        <img class="media-object img-fluid"
                                             src="{{ asset('assets/images/authors/img4.jpg') }}" alt="image">
                                    <!--</a>-->
                                </div>
                            </div>
                            <p>
                                All our projects are covered by 100% Money Back Guarantee giving complete peace of mind to our customers.
                            </p>
                        </div>
                    </div>
                    <!-- Tab-content End -->
                </div>
                <!-- //Tabbablw-line End -->
            </div>
            <!-- Tabbable_panel End -->
        </div>
        <div class="col-md-6 col-sm-12 col-12 col-lg-6 wow slideInRight" data-wow-duration="3s">
            <div id="accordion">
                <div class="card card_collapse">
                    <div class="card-header header_card" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                <i class="fa fa-minus success"></i>
                                <span class="success">Our Company Ideology</span>
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <p><i class="fab fa-canadian-maple-leaf"></i> Coming together was the beginning, working together is our motto and succeeding together is our GOAL!</p>
                        </div>
                    </div>
                </div>
                <div class="card card_collapse">
                    <div class="card-header header_card" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fa fa-plus success"></i>
                                <span class="success">Our Company Vision</span>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            
                            <p><i class="fab fa-canadian-maple-leaf"></i> Our vision is straightforward – to be a leading business with the highest ethical standards, that delivers exceptional value for our customers, our employees, our communities and our shareholders.</p><br/>
                            <p><i class="fab fa-canadian-maple-leaf"></i> CloudyZx Want to make its IT solution Affordable, Consistent &amp; Reliable, CloudyZx Cares its customers to serve them Right Product, Right Quality with right time.</p><br/>
                            <p><i class="fab fa-canadian-maple-leaf"></i> Aims to be the best-performing IT Company in the world and, as such, recognizes the need to integrate sound principles governing safety, business conduct, social, environmental and economic activities into business practices and decision-making. We aim to create solutions for our customers’ success, delivering exceptional value in a sustainable way.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="card card_collapse">
                    <div class="card-header header_card" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                <i class="fa fa-plus success"></i>
                                <span class="success">Our Company Mission</span>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <p><i class="fab fa-canadian-maple-leaf"></i> To Provide Innovations and Strategic Alliances into Information Technology.</p><br/>
                            <p><i class="fab fa-canadian-maple-leaf"></i> We have a challenging and inspiring mission to improve the quality of IT Life by creating innovations, to provide better feel.</p><br/>
                            <p><i class="fab fa-canadian-maple-leaf"></i> We are people, who make it our business to be like a good neighbor; who built a premier company by selling and keeping promises through our marketing partnership; who bring diverse talents and experiences to our work of serving the Promotion Paradise clients.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--Panel-group Start -->
            <!--<div class="panel-group" id="accordion">-->
            <!--&lt;!&ndash; Panel Panel-default Start &ndash;&gt;-->
            <!--<div class="panel panel-default">-->
            <!--&lt;!&ndash; Panel-heading Start &ndash;&gt;-->
            <!--<div class="panel-heading text_bg">-->
            <!--<h4 class="panel-title">-->
            <!--<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">-->
            <!--&lt;!&ndash;<span class=" glyphicon glyphicon-minus success"></span>&ndash;&gt;-->
            <!--<i class="fa fa-plus success"></i>-->
            <!--<span class="success">Why Choose Us</span></a>-->
            <!--</h4>-->
            <!--</div>-->
            <!--&lt;!&ndash; //Panel-heading End &ndash;&gt;-->
            <!--&lt;!&ndash; Collapseone Start &ndash;&gt;-->
            <!--<div id="collapseOne" class="panel-collapse collapse in">-->
            <!--<div class="panel-body">-->
            <!--<p>In 1972 a crack commando unit was sent to prison by a military court for a crime they didn't commit. These men promptly escaped from a maximum security stockade to the Los Angeles underground. Believe it or not I'm walking on air. I never thought I could feel so free. Flying away on a wing and a prayer. Who could it be? Believe it or not its just me. Come and knock on our door. We've been waiting for you. Where the kisses are hers and hers and his. Three's company too. Flying away on a wing and a prayer. Who could it be? Believe it or not its just me. Here's the story of a man named Brady who was busy with three boys of his own. One two three four five six seven eight Sclemeel schlemazel hasenfeffer incorporated? Till the one day when the lady met this fellow and they knew it was much more than a hunch. Baby if you've ever wondered.-->
            <!--</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--&lt;!&ndash; Collapseone End &ndash;&gt;-->
            <!--</div>-->
            <!--&lt;!&ndash; //Panel Panel-default End &ndash;&gt;-->
            <!--<div class="panel panel-default">-->
            <!--<div class="panel-heading text_bg">-->
            <!--<h4 class="panel-title">-->
            <!--<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">-->
            <!--<i class="fa fa-plus success"></i>-->
            <!--<span class="success">Why Choose Us</span>-->
            <!--</a>-->
            <!--</h4>-->
            <!--</div>-->
            <!--<div id="collapseTwo" class="panel-collapse collapse">-->
            <!--<div class="panel-body">-->
            <!--<p>-->
            <!--In 1972 a crack commando unit was sent to prison by a military court for a crime they didn't commit. These men promptly escaped from a maximum security stockade to the Los Angeles underground. Believe it or not I'm walking on air. I never thought I could feel so free. Flying away on a wing and a prayer. Who could it be? Believe it or not its just me. Come and knock on our door. We've been waiting for you. Where the kisses are hers and hers and his. Three's company too. Flying away on a wing and a prayer. Who could it be? Believe it or not its just me. Here's the story of a man named Brady who was busy with three boys of his own. One two three four five six seven eight Sclemeel schlemazel hasenfeffer incorporated? Till the one day when the lady met this fellow and they knew it was much more than a hunch. Baby if you've ever wondered.-->
            <!--</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="panel panel-default">-->
            <!--<div class="panel-heading text_bg">-->
            <!--<h4 class="panel-title">-->
            <!--<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">-->
            <!--<i class="fa fa-plus success"></i>-->
            <!--<span class="success">Why Choose Us</span></a>-->
            <!--</h4>-->
            <!--</div>-->
            <!--<div id="collapseThree" class="panel-collapse collapse">-->
            <!--<div class="panel-body">-->
            <!--<p>-->
            <!--In 1972 a crack commando unit was sent to prison by a military court for a crime they didn't commit. These men promptly escaped from a maximum security stockade to the Los Angeles underground. Believe it or not I'm walking on air. I never thought I could feel so free. Flying away on a wing and a prayer. Who could it be? Believe it or not its just me. Come and knock on our door. We've been waiting for you. Where the kisses are hers and hers and his. Three's company too. Flying away on a wing and a prayer. Who could it be? Believe it or not its just me. Here's the story of a man named Brady who was busy with three boys of his own. One two three four five six seven eight Sclemeel schlemazel hasenfeffer incorporated? Till the one day when the lady met this fellow and they knew it was much more than a hunch. Baby if you've ever wondered.-->
            <!--</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--&lt;!&ndash; //Panle-group End &ndash;&gt;-->
            <!--</div>-->
        </div>
    </div>
</div>
<!-- //Accordions Section End -->
<!-- Our Team Start -->
<div class="container">
    <div class="row text-center">
        <div class="col-12 my-3">
            <h3 class=" border-danger"><span class="heading_border bg-danger">Our Team</span></h3></div>
    </div>
    <div class="row text-center">
        <div class="col-md-6 col-sm-6 col-12 col-lg-3 profile wow fadeInLeft" data-wow-duration="3s"
             data-wow-delay="0.5s">
            <div class="thumbnail bg-white">
                <img src="{{ asset('assets/images/priti.jpeg') }}" alt="team-image" class="img-fluid">
                <div class="caption">
                    <b>Priti Rani</b>
                    <p class="text-center"> Founder & Partner</p>
                    <div class="divide">
                        <a href="#" class="divider">
                            <i class="livicon" data-name="facebook" data-size="22" data-loop="true" data-c="#3a5795"
                               data-hc="#3a5795"></i>
                        </a>
                        <a href="#">
                            <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee"
                               data-hc="#55acee"></i>
                        </a>
                        <a href="#">
                            <i class="livicon" data-name="google-plus" data-size="22" data-loop="true" data-c="#d73d32"
                               data-hc="#d73d32"></i>
                        </a>
                        <a href="#">
                            <i class="livicon" data-name="linkedin" data-size="22" data-loop="true" data-c="#1b86bd"
                               data-hc="#1b86bd"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3 col-12 profile wow fadeInUp" data-wow-duration="3s"
             data-wow-delay="0.5s">
            <div class="thumbnail bg-white">
                <img src="{{ asset('assets/images/deepak.jpeg') }}" alt="team-image">
                <div class="caption">
                    <b>Deepak Rajpoot</b>
                    <p class="text-center"> CEO </p>
                    <div class="divide">
                        <a href="http://www.facebook.com/deepk.kumar.1800" class="divider">
                            <i class="livicon" data-name="facebook" data-size="22" data-loop="true" data-c="#3a5795"
                               data-hc="#3a5795"></i>
                        </a>
                        <a href="https://twitter.com/rkdeepakumar">
                            <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee"
                               data-hc="#55acee"></i>
                        </a>
                        <a href="https://plus.google.com/u/0/113768040060915741295">
                            <i class="livicon" data-name="google-plus" data-size="22" data-loop="true" data-c="#d73d32"
                               data-hc="#d73d32"></i>
                        </a>
                        <a href="#">
                            <i class="livicon" data-name="linkedin" data-size="22" data-loop="true" data-c="#1b86bd"
                               data-hc="#1b86bd"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3 col-12 profile wow fadeInDown" data-wow-duration="3s"
             data-wow-delay="0.5s">
            <div class="thumbnail bg-white">
                <img src="{{ asset('assets/images/varun.jpg') }}" alt="team-image" class="img-fluid">
                <div class="caption">
                    <b>Varun Rajpoot</b>
                    <p class="text-center"> Executive Manager </p>
                    <div class="divide">
                        <a href="https://www.facebook.com/varun.rajput.5815" class="divider">
                            <i class="livicon" data-name="facebook" data-size="22" data-loop="true" data-c="#3a5795"
                               data-hc="#3a5795"></i>
                        </a>
                        <a href="#">
                            <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee"
                               data-hc="#55acee"></i>
                        </a>
                        <a href="#">
                            <i class="livicon" data-name="google-plus" data-size="22" data-loop="true" data-c="#d73d32"
                               data-hc="#d73d32"></i>
                        </a>
                        <a href="#">
                            <i class="livicon" data-name="linkedin" data-size="22" data-loop="true" data-c="#1b86bd"
                               data-hc="#1b86bd"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3 col-12 profile wow fadeInRight" data-wow-duration="3s"
             data-wow-delay="0.5s">
            <div class="thumbnail bg-white">
                <img src="{{ asset('assets/images/anil.jpeg') }}" alt="team-image">
                <div class="caption">
                    <b>Anil Kumar</b>
                    <p class="text-center"> Manager </p>
                    <div class="divide">
                        <a href="#" class="divider">
                            <i class="livicon" data-name="facebook" data-size="22" data-loop="true" data-c="#3a5795"
                               data-hc="#3a5795"></i>
                        </a>
                        <a href="#">
                            <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee"
                               data-hc="#55acee"></i>
                        </a>
                        <a href="#">
                            <i class="livicon" data-name="google-plus" data-size="22" data-loop="true" data-c="#d73d32"
                               data-hc="#d73d32"></i>
                        </a>
                        <a href="#">
                            <i class="livicon" data-name="linkedin" data-size="22" data-loop="true" data-c="#1b86bd"
                               data-hc="#1b86bd"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- //Our Team End -->
    <!-- What we are section Start -->
    <div class="row">
        <!-- What we are Start -->
        <div class="col-md-6 col-sm-6 col-lg-6 col-12 wow zoomInLeft" data-wow-duration="3s">
            <div class="text-left">
                <div class="mt-2">
                    <h4 class="border-warning"><span class="heading_border bg-warning">What We Are</span></h4>
                </div>
            </div>
            <img src="{{ asset('assets/images/image_12.jpg') }}" alt="image_12" class="img-fluid">
            <p>
                The 21st-century marketplace is highly competitive. Clients have a greater breadth of alternatives in terms of where they address their business, and that makes it all the most significant that you differentiate with your products and services.
            </p>
                <p><i class="fab fa-canadian-maple-leaf"></i> Tailored to your needs</p>
                <p><i class="fab fa-canadian-maple-leaf"></i> Fairly Priced</p>
                <p><i class="fab fa-canadian-maple-leaf"></i> Active Management</p>
                <p><i class="fab fa-canadian-maple-leaf"></i> Genuinely Friendly, helpful Staff</p>
                <p><i class="fab fa-canadian-maple-leaf"></i> Honest Delivery</p>
            
            <!--<p class="text-right primary my-2"><a href="#">Read more</a>-->
            <!--</p>-->
        </div>
        <!-- //What we are End -->
        <!-- About Us Start -->
        <div class="col-md-6 col-sm-6 col-lg-6 col-12 wow zoomInRight" data-wow-duration="3s">
            <div class="text-left">
                <div class="mt-2">
                    <h4 class="border-success"><span class="heading_border bg-success">What makes us different from other companies?</span></h4>
                </div>
            </div>
            <img src="{{ asset('assets/images/image_11.jpg') }}" alt="image_11" class="img-fluid">
            <p>
                Our quality and the way we organize the process and Everything is as simple as it sounds: if you are not satisfied, you can keep looking for other proposals! You won’t lose anything!
            </p>
            <p><i class="fab fa-canadian-maple-leaf"></i> Highly dedicated towards our client’s requirements</p>
            <p><i class="fab fa-canadian-maple-leaf"></i> Belief in lucidity, honesty and integrity</p>
            <p><i class="fab fa-canadian-maple-leaf"></i> Fast delivery of robust software meeting our client’s target audience</p>
            <p><i class="fab fa-canadian-maple-leaf"></i> Experienced and professional team providing quality & efficient outcome</p>
            <p><i class="fab fa-canadian-maple-leaf"></i> If you already have a project but want a team for it, we will give you a free week so you can make your choice based on real experience.</p>
            <!--<p class="text-right primary my-2"><a href="#">Read more</a>-->
        </div>
        <!-- //About Us End -->
    </div>
    <!-- //What we are section End -->
    <!-- Testimonial Start -->
    <div class="row">
        <!-- Testimonial Section -->
        <div class=" col-12 text-center mt-3">
            <h3 class="border-primary"><span class="heading_border bg-primary">Testimonials</span></h3>
        </div>
        <div class="col-md-4  col-lg-4 col-12 wow bounceInLeft" data-wow-duration="3s">
            <div class="author">
                <img src="{{ asset('assets/images/authors/manoj_chaudhary.jpg') }}" alt="avatar3"
                     class="img-fluid rounded-circle pull-left">
                <p class="text-right">
                    Manoj Chaudhary
                    <br>
                    <small class="text-right">corefitness.org.in</small>
                </p>
                <p>
                    <label>"Great company – super quick turn-around and superb work. Very responsive and very reasonably priced. I’m very happy with the final product and I would definitely recommend them.  I'm really satisfied with them and will look forward to working with them again!"</label>
                </p>
            </div>
        </div>
        <div class="col-md-4  col-12 col-lg-4 wow bounceIn" data-wow-duration="3s">
            <div class="author">
                <img src="{{ asset('assets/images/authors/avatar3.jpg') }}" alt="avatar2"
                     class="img-fluid rounded-circle pull-left">
                <p class="text-right">
                    Edorium Techsoft
                    <br>
                    <small class="text-right">edoriumtechsoft.com</small>
                </p>
                <p>
                    <label>"I am very satisfied with the work they delivered. If I wasn’t satisfied, I wouldn’t continue to work with them for so long. They always provide all of the support that I need. When there are bugs and mistakes, they fix it quickly and correctly. I am really happy with their performance so far."</label>
                </p>
            </div>
        </div>
        <div class="col-md-4  col-lg-4 col-12 wow bounceInRight" data-wow-duration="3s">
            <div class="author">
                <img src="{{ asset('assets/images/authors/vle.png') }}" alt="avatar4"
                     class="img-fluid rounded-circle pull-left">
                <p class="text-right">
                    Veracity Leading Edge
                    <br>
                    <small class="text-right">vleconsultants.com</small>
                </p>
                <p>
                    <label>"I just want to say from the bottom of my heart thank you to the whole grouped who has helped me.They are just wonderful, wonderful group of people we worked with. Again a personal thank you for professionalism, a personal thank you for the time and extra time."</label>
                </p>
            </div>
        </div>
        <!-- Testimonial Section End -->
    </div>
    <!-- Testimonial End -->
    <!-- Features Start -->
    <div class="row features">
        <!--<div class="text-center">-->
        <div class=" col-12 text-center my-3">
            <h3 class=" border-warning"><span class="heading_border bg-warning">Features</span></h3>
        </div>
        <!--</div>-->
        <div class="col-md-4 col-sm-4 col-lg-4 col-12 wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s">
            <div>
                <a href="#"><i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#25a3d8"
                               data-hc="#25a3d8"></i></a>
                <h4>Responsive Design</h4>
            </div>
            <div>
                <p>
                    <label>"Responsive Web design is the approach that suggests that design and development 
                            should respond to the user's behavior and environment based on screen size, platform 
                            and orientation. Our practice consists of a mix of flexible grids and layouts, images 
                            and an intelligent use of CSS media queries.In general, our website must work on a broad 
                            spectrum of devices and browsers."</label>
                </p>
            </div>
            <div>
                <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#ef8424 "
                                data-hc="#ef8424 "></i>
                </a>
                <h4>Search engine optimization</h4>
                <p>
                    <label>"The majority of visitors to a website come via search engines (mostly Google). 
                            With search engine optimization you get free search engine visibility and perhaps 
                            don’t need to buy ads. The headings and texts should describe the company using the 
                            most common terms, so that when somebody enters these terms in a search engine, the 
                            website has a chance of being in the results."
                    </label>
                </p>
            </div>
        </div>
        <div class="col-md-4 col-sm-4  col-lg-4  col-12 wow fadeInDown" data-wow-duration="3s" data-wow-delay="0.5s">
            <div>
                <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#01bc8c"
                                data-hc="#01bc8c"></i>
                </a>
                <h4>Fast loading</h4>
                <p>
                    <label>"The amount of mobile users (who in general have slow connections) has increased, 
                            and the speed of wired connections hasn’t significantly increased either. Having a 
                            website that loads fast is still very relevant. This is particularly demanding as 
                            websites should be ever more impressive, but the file size of big images should not grow.
                    </label>
                </p>
            </div>
            <div>
                <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#1360b3 "
                                data-hc="#1360b3 "></i>
                </a>
                <h4>Social media integration</h4>
                <p>
                    <label>"A website needs to share content where people already are, so that the content gets visibility. 
                            Push out your contents to Facebook, Twitter, Google+ and other similar services. Visibility sparks 
                            interest to visit the website. While users visit your website, promote sharing to social networks. 
                            Two-way integration leads to a positive loop!"</label>
                </p>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4 col-12 wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s">
            <div>
                <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#FFD43C"
                                data-hc="#FFD43C"></i>
                </a>
                <h4>Visitor analytics</h4>
                <p>
                    <label>"For most businesses the point of a website is to increase visibility among potential customers. 
                            Well, how many potential customers has there been then? Do you have statistics and analytics?
                            All investments into a website should be guided by the expected results (ROI). Results should be 
                            evaluated from visitor statistics. A weekly PDF report is easy to automate!"</label>
                </p>
            </div>
            <div>
                <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#91d659 "
                                data-hc="#91d659 "></i>
                </a>
                <h4>Easy to update</h4>
                <p>
                    <label>"Stylishness is an important part of the visitor impression, but content in most important. 
                            At minimum the content should be correct and current. Wrong information (e.g. price, address, 
                            opening hours) on a website will make people angry and spur mistrust.
                            Management must always remember the website and value it as the most 
                            important communication channel."</label>
                </p>
            </div>
        </div>
    </div>
    <!-- //Features End -->
    <!-- Our Skills Start -->

    <div class=" col-12 text-center my-3 marbtm10">
        <h3 class="border-danger"><span class="heading_border bg-danger">Our Proven Process Produces Results</span></h3>
    </div>
</div>
    <!--</div>-->
    <div class="sliders">
        <!-- Our skill Section start -->
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-lg-3 col-12 text-center wow zoomIn" data-wow-duration="3.5s">
                    <div class="mx-auto">
                        <div id="myStat3" class="mx-auto" data-startdegree="0" data-dimension="150" data-text="25%"
                             data-width="4" data-fontsize="28" data-percent="25" data-fgcolor="#3abec0"
                             data-bgcolor="#eee"></div>
                        <h4 class="success"><strong>PLANNING</strong></h4>
                    </div>
                    <p class="my-3">We draw our strategies based on exact requirements and our rigorous research in order to build wire-frames or prototypes that reflect our approach of execution as well as functionalities of the product through self intuitive UI.</p>
                </div>
                <div class="col-md-3 col-sm-6 col-lg-3 col-12 text-center wow zoomIn" data-wow-duration="3s"
                     data-wow-delay="0.8s">
                    <div class="mx-auto">
                        <div id="myStat4" class="mx-auto" data-startdegree="0" data-dimension="150" data-text="50%"
                             data-width="4" data-fontsize="28" data-percent="50" data-fgcolor="#3abec0"
                             data-bgcolor="#eee"></div>
                        <h4 class="success"><strong>EXECUTE</strong></h4>
                    </div>
                    <p class="my-3">Agility and smooth functioning of a final product or application rely on skilled development team and well-knitted code structure. We at Promotion Paradise houses pool of experts under excellent development environment.</p>
                </div>
                <div class="col-md-3 col-sm-6 col-lg-3 col-12 text-center wow zoomIn" data-wow-duration="3s"
                     data-wow-delay="1.2s">
                    <div class="mx-auto">
                        <div id="myStat5" class="mx-auto" data-startdegree="0" data-dimension="150" data-text="75%"
                             data-width="4" data-fontsize="28" data-percent="75" data-fgcolor="#3abec0"
                             data-bgcolor="#eee"></div>
                        <h4 class="success"><strong>TESTING</strong></h4>
                    </div>
                    <p class="my-3">Our post development phase goes under series of quality check programs to assure everything is perfectly placed before the launch of final product in the market.</p>
                </div>
                <div class="col-md-3 col-sm-6 col-lg-3 col-12 text-center wow zoomIn" data-wow-duration="3s"
                     data-wow-delay="1.8s">
                    <div class="mx-auto">
                        <div id="myStat6" class="mx-auto" data-startdegree="0" data-dimension="150" data-text="100%"
                             data-width="4" data-fontsize="28" data-percent="100" data-fgcolor="#3abec0"
                             data-bgcolor="#eee"></div>
                        <h4 class="success"><strong>DELIVERY</strong></h4>
                    </div>
                    <p class="my-3">After testing, we deliver the final product in the market. We believe that the customer’s satisfaction is our success so after delivery or launch our support & maintenance team fine-tune the efficiency of product.</p>
                </div>
            </div>
            <!-- Our skills Section End -->
        </div>
        <!-- //Our Skills End -->
    </div>

<!-- //Container End -->
@stop
{{-- footer scripts --}}
@section('footer_scripts')
<!-- page level js starts-->
<script type="text/javascript" src="{{ asset('assets/js/frontend/jquery.circliful.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendors/wow/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/frontend/index.js') }}"></script>
<!--page level js ends-->
@stop


