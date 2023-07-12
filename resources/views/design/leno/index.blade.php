@extends('design.leno.layout.parent')

@section('title','Home')

@section('content')

    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1 class="h1-large">MOBILE APP <br>FOR <span class="replace-me">DESIGNERS, MARKETERS, DEVELOPERS</span></h1>
                        <p class="p-large">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lectus id erat hendrerit ullamcorper</p>
                        <a class="btn-solid-lg" href="#your-link"><i class="fab fa-apple"></i>For Apple</a>
                        <a class="btn-solid-lg" href="#your-link"><i class="fab fa-google-play"></i>For Android</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <img class="img-fluid" src="{{asset('design/leno/images/header-smartphones.png')}}" alt="alternative">
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Testimonials -->
    <div class="slider-1 bg-dark-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{asset('design/leno//images/testimonial-1.jpg')}}" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Mauris facilisis urna urna, non volutpat tortor rhoncus nec. Vivamus consectetur dui quis libero tempus ut eleifend</p>
                                            <p class="testimonial-author">Jude Thorn - Designer</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{asset('design/leno//images/testimonial-2.jpg')}}" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Mauris facilisis urna urna, non volutpat tortor rhoncus nec. Vivamus consectetur dui quis libero tempus ut eleifend</p>
                                            <p class="testimonial-author">Roy Smith - Developer</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{asset('design/leno//images/testimonial-3.jpg')}}" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Mauris facilisis urna urna, non volutpat tortor rhoncus nec. Vivamus consectetur dui quis libero tempus ut eleifend</p>
                                            <p class="testimonial-author">Marsha Singer - Marketer</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{asset('design/leno//images/testimonial-4.jpg')}}" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Mauris facilisis urna urna, non volutpat tortor rhoncus nec. Vivamus consectetur dui quis libero tempus ut eleifend</p>
                                            <p class="testimonial-author">Tim Shaw - Designer</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{asset('design/leno//images/testimonial-5.jpg')}}" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Mauris facilisis urna urna, non volutpat tortor rhoncus nec. Vivamus consectetur dui quis libero tempus ut eleifend</p>
                                            <p class="testimonial-author">Lindsay Spice - Designer</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{asset('design/leno//images/testimonial-6.jpg')}}" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Mauris facilisis urna urna, non volutpat tortor rhoncus nec. Vivamus consectetur dui quis libero tempus ut eleifend</p>
                                            <p class="testimonial-author">Ann Black - Developer</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of testimonials -->


    <!-- Features -->
    <div class="tabs-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">FEATURES</h2>
                    <div class="p-heading">Morbi varius ante quis libero blandit auctor phasellus rhoncus varius nulla nec tristique. Vivamus quis placerat nisi. Duis suscipit feugiat neque eget bus</div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">

                <!-- Tabs Links -->
                <ul class="nav nav-tabs" id="navTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="nav-tab-1" data-bs-toggle="tab" data-bs-target="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><i class="fas fa-cog"></i>CONFIGURING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-tab-2" data-bs-toggle="tab" data-bs-target="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><i class="fas fa-binoculars"></i>TRACKING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-tab-3" data-bs-toggle="tab" data-bs-target="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false"><i class="fas fa-search"></i>MONITORING</a>
                    </li>
                </ul>
                <!-- end of tabs links -->


                <!-- Tabs Content-->
                <div class="tab-content" id="navTabsContent">

                    <!-- Tab -->
                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="nav-tab-1">
                        <div class="container">
                            <div class="row">

                                <!-- Icon Cards Pane -->
                                <div class="col-lg-4">
                                    <ul class="list-unstyled li-space-lg first">
                                        <li class="d-flex">
                                            <div class="icon">
                                                    <span class="fa-stack">
                                                        <i class="fas fa-circle fa-stack-2x"></i>
                                                        <i class="far fa-compass fa-stack-1x"></i>
                                                    </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5>Goal Setting</h5>
                                                <p>Nullam non tincidunt dui, vitae aliquet magna. Aenean ut porttit urna suspendisse luctus sena</p>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="icon">
                                                    <span class="fa-stack">
                                                        <i class="fas fa-circle fa-stack-2x"></i>
                                                        <i class="fas fa-code fa-stack-1x"></i>
                                                    </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5>Visual Editor</h5>
                                                <p>Nullam non tincidunt dui, vitae aliquet magna. Aenean ut porttit urna suspendisse luctus sena</p>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="icon">
                                                    <span class="fa-stack">
                                                        <i class="fas fa-circle fa-stack-2x"></i>
                                                        <i class="far fa-gem fa-stack-1x"></i>
                                                    </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5>Refined Options</h5>
                                                <p>Nullam non tincidunt dui, vitae aliquet magna. Aenean ut porttit urna suspendisse luctus sena</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div> <!-- end of col -->
                                <!-- end of icon cards pane -->

                                <!-- Image Pane -->
                                <div class="col-lg-4">
                                    <img class="img-fluid" src="{{asset('design/leno//images/features-smartphone-1.png')}}" alt="alternative">
                                </div> <!-- end of col -->
                                <!-- end of image pane -->

                                <!-- Icon Cards Pane -->
                                <div class="col-lg-4">
                                    <ul class="list-unstyled li-space-lg last">
                                        <li class="d-flex">
                                            <div class="icon">
                                                    <span class="fa-stack">
                                                        <i class="fas fa-circle fa-stack-2x"></i>
                                                        <i class="fas fa-calendar-alt fa-stack-1x"></i>
                                                    </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5>Calendar Input</h5>
                                                <p>Nullam non tincidunt dui, vitae aliquet magna. Aenean ut porttit urna suspendisse luctus sena</p>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="icon">
                                                    <span class="fa-stack">
                                                        <i class="fas fa-circle fa-stack-2x"></i>
                                                        <i class="fas fa-book fa-stack-1x"></i>
                                                    </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5>Easy Reading</h5>
                                                <p>Nullam non tincidunt dui, vitae aliquet magna. Aenean ut porttit urna suspendisse luctus sena</p>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="icon">
                                                    <span class="fa-stack">
                                                        <i class="fas fa-circle fa-stack-2x"></i>
                                                        <i class="fas fa-cube fa-stack-1x"></i>
                                                    </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5>Good Foundation</h5>
                                                <p>Nullam non tincidunt dui, vitae aliquet magna. Aenean ut porttit urna suspendisse luctus sena</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div> <!-- end of col -->
                                <!-- end of icon cards pane -->

                            </div> <!-- end of row -->
                        </div> <!-- end of container -->
                    </div> <!-- end of tab-pane -->
                    <!-- end of tab -->

                    <!-- Tab -->
                    <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="nav-tab-2">
                        <div class="container">
                            <div class="row">

                                <!-- Image Pane -->
                                <div class="col-lg-4">
                                    <img class="img-fluid" src="{{asset('design/leno//images/features-smartphone-2.png')}}" alt="alternative">
                                </div> <!-- end of col -->
                                <!-- end of image pane -->

                                <!-- Text And Icon Cards Area -->
                                <div class="col-lg-8">
                                    <h3>Track Result Based On Your</h3>
                                    <p class="sub-heading">Nullam non tincidunt dui, vitae aliquet magna. Aenean ut porttitor urna. Suspendisse luctus eu libero ac vulputate. Ut sollicitudin leo a nisi ornare, sit amet bibendum mi tristique.</p>
                                    <ul class="list-unstyled li-space-lg first">
                                        <li class="d-flex">
                                            <div class="icon">
                                                    <span class="fa-stack">
                                                        <i class="fas fa-circle fa-stack-2x"></i>
                                                        <i class="fas fa-cube fa-stack-1x"></i>
                                                    </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5>Good Foundation</h5>
                                                <p>Nullam non tincidunt dui, vitae aliquet magna. Aenean ut portt urna suspendisse luctus</p>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="icon">
                                                    <span class="fa-stack">
                                                        <i class="fas fa-circle fa-stack-2x"></i>
                                                        <i class="fas fa-book fa-stack-1x"></i>
                                                    </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5>Easy Reading</h5>
                                                <p>Nullam non tincidunt dui, vitae aliquet magna. Aenean ut portt urna suspendisse luctus</p>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="icon">
                                                    <span class="fa-stack">
                                                        <i class="fas fa-circle fa-stack-2x"></i>
                                                        <i class="far fa-compass fa-stack-1x"></i>
                                                    </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5>Goal Setting</h5>
                                                <p>Nullam non tincidunt dui, vitae aliquet magna. Aenean ut portt urna suspendisse luctus</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled li-space-lg">
                                        <li class="d-flex">
                                            <div class="icon">
                                                    <span class="fa-stack">
                                                        <i class="fas fa-circle fa-stack-2x"></i>
                                                        <i class="fas fa-calendar-alt fa-stack-1x"></i>
                                                    </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5>Calendar Input</h5>
                                                <p>Nullam non tincidunt dui, vitae aliquet magna. Aenean ut portt urna suspendisse luctus</p>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="icon">
                                                    <span class="fa-stack">
                                                        <i class="fas fa-circle fa-stack-2x"></i>
                                                        <i class="fas fa-code fa-stack-1x"></i>
                                                    </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5>Visual Editor</h5>
                                                <p>Nullam non tincidunt dui, vitae aliquet magna. Aenean ut portt urna suspendisse luctus</p>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="icon">
                                                    <span class="fa-stack">
                                                        <i class="fas fa-circle fa-stack-2x"></i>
                                                        <i class="far fa-gem fa-stack-1x"></i>
                                                    </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5>Refined Options</h5>
                                                <p>Nullam non tincidunt dui, vitae aliquet magna. Aenean ut portt urna suspendisse luctus</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div> <!-- end of col -->
                                <!-- end of text and icon cards area -->

                            </div> <!-- end of row -->
                        </div> <!-- end of container -->
                    </div> <!-- end of tab-pane -->
                    <!-- end of tab -->

                    <!-- Tab -->
                    <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="nav-tab-3">
                        <div class="container">
                            <div class="row">

                                <!-- Text And Icon Cards Area -->
                                <div class="col-lg-8">
                                    <ul class="list-unstyled li-space-lg first">
                                        <li class="d-flex">
                                            <div class="icon">
                                                    <span class="fa-stack">
                                                        <i class="fas fa-circle fa-stack-2x"></i>
                                                        <i class="fas fa-cube fa-stack-1x"></i>
                                                    </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5>Good Foundation</h5>
                                                <p>Nullam non tincidunt dui, vitae aliquet magna. Aenean ut portt urna suspendisse luctus</p>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="icon">
                                                    <span class="fa-stack">
                                                        <i class="fas fa-circle fa-stack-2x"></i>
                                                        <i class="fas fa-book fa-stack-1x"></i>
                                                    </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5>Easy Reading</h5>
                                                <p>Nullam non tincidunt dui, vitae aliquet magna. Aenean ut portt urna suspendisse luctus</p>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="icon">
                                                    <span class="fa-stack">
                                                        <i class="fas fa-circle fa-stack-2x"></i>
                                                        <i class="far fa-compass fa-stack-1x"></i>
                                                    </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5>Goal Setting</h5>
                                                <p>Nullam non tincidunt dui, vitae aliquet magna. Aenean ut portt urna suspendisse luctus</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled li-space-lg">
                                        <li class="d-flex">
                                            <div class="icon">
                                                    <span class="fa-stack">
                                                        <i class="fas fa-circle fa-stack-2x"></i>
                                                        <i class="fas fa-calendar-alt fa-stack-1x"></i>
                                                    </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5>Calendar Input</h5>
                                                <p>Nullam non tincidunt dui, vitae aliquet magna. Aenean ut portt urna suspendisse luctus</p>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="icon">
                                                    <span class="fa-stack">
                                                        <i class="fas fa-circle fa-stack-2x"></i>
                                                        <i class="fas fa-code fa-stack-1x"></i>
                                                    </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5>Visual Editor</h5>
                                                <p>Nullam non tincidunt dui, vitae aliquet magna. Aenean ut portt urna suspendisse luctus</p>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="icon">
                                                    <span class="fa-stack">
                                                        <i class="fas fa-circle fa-stack-2x"></i>
                                                        <i class="far fa-gem fa-stack-1x"></i>
                                                    </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5>Refined Options</h5>
                                                <p>Nullam non tincidunt dui, vitae aliquet magna. Aenean ut portt urna suspendisse luctus</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3>Monitoring Tools Evaluation</h3>
                                    <p class="sub-heading">Nullam non tincidunt dui, vitae aliquet magna. Aenean ut porttitor urna. Suspendisse luctus eu libero ac vulputate. Ut sollicitudin leo a nisi ornare, sit amet bibendu.</p>
                                </div> <!-- end of col -->
                                <!-- end of text and icon cards area -->

                                <!-- Image Pane -->
                                <div class="col-lg-4">
                                    <img class="img-fluid" src="{{asset('design/leno//images/features-smartphone-3.png')}}" alt="alternative">
                                </div> <!-- end of col -->
                                <!-- end of image pane -->

                            </div> <!-- end of row -->
                        </div> <!-- end of container -->
                    </div> <!-- end of tab-pane -->
                    <!-- end of tab -->

                </div> <!-- end of tab-content -->
                <!-- end of tabs content -->

            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of tabs-1 -->
    <!-- end of features -->


    <!-- Video -->
    <div class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">PREVIEW</h2>
                    <div class="p-heading">Donec ullamcorper at eros vestibulum porttitor. Aenean luctus nibh nec dapibus tempus ligula justo pretium ante at elementum mi massa at arcu interdum</div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <img class="img-fluid" src="{{asset('design/leno//images/video-frame.jpg')}}" alt="alternative">
                            <a class="video-btn" data-bs-toggle="modal" data-bs-target="#videoModal" data-bs-src="https://www.youtube.com/embed/fLCjQJCekTs">
                                    <span class="video-play-button">
                                        <span></span>
                                    </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of video -->


    <!-- Video Modal -->
    <div class="video-modal">
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" id="video" allow="autoplay"></iframe>
                    </div>
                </div> <!-- end of modal-content -->
            </div> <!-- end of modal-dialog -->
        </div> <!-- end of modal -->
    </div> <!-- end of video-modal -->
    <!-- end of video modal -->


    <!-- Details 1 -->
    <div class="basic-2 bg-dark-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="{{asset('design/leno//images/details-1.png')}}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Start using Leno today and set your long term goals</h2>
                        <p>Ac ante ipsum primis in faucibus. Nam et porttitor ipsum. Morbi eros augue, blandit in varius gravida tempor a massa. Curabitur ante dolor euismod a arcu nec pellentque</p>
                        <a class="btn-solid-reg" data-bs-toggle="modal" data-bs-target="#detailsModal1">Modal</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 1 -->


    <!-- Details Modal -->
    <div class="details-modal">
        <div id="detailsModal1" class="modal fade" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="row">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="col-lg-8">
                            <div class="image-container">
                                <img class="img-fluid" src="{{asset('design/leno/images/details-modal.jpg')}}" alt="alternative">
                            </div> <!-- end of image-container -->
                        </div> <!-- end of col -->
                        <div class="col-lg-4">
                            <h3>Goals Setting</h3>
                            <hr>
                            <p>In gravida at nunc sodales pretium. Vivamus semper, odio vitae mattis auctor, elit elit semper magna ac tum nico vela spider</p>
                            <h4>User Feedback</h4>
                            <p>Sapien vitae eros. Praesent ut erat a tellus posuere nisi more thico cursus pharetra finibus posuere nisi. Vivamus feugiat</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Tincidunt sem vel brita bet mala</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Sapien condimentum sacoz sil necr</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Fusce interdum nec ravon fro urna</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Integer pulvinar biolot bat tortor</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Id ultricies fringilla fangor raq trinit</div>
                                </li>
                            </ul>
                            <a id="modalCtaBtn" class="btn-solid-reg" href="#your-link">Details</a>
                            <button type="button" class="btn-outline-reg" data-bs-dismiss="modal">Close</button>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                </div> <!-- end of modal-content -->
            </div> <!-- end of modal-dialog -->
        </div> <!-- end of modal -->
    </div> <!-- end of details-modal -->
    <!-- end of details modal -->


    <!-- Details 2 -->
    <div class="basic-3 bg-dark-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>The calendar feature helps you schedule tasks</h2>
                        <p>Morbi blandit felis at pharetra facilisis. Nullam nec felis eget lectus consequat rutrum. Suspendisse felis elit, interdum at eros eget facilisis tempor vestibulum sit amet mattis</p>
                        <a class="btn-solid-reg" href="#your-link">Details</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container"{{asset('design/leno//')}}>
                        <img class="img-fluid" src="{{asset('design/leno//images/details-2.png')}}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of details 2 -->


    <!-- Statistics -->
    <div class="counter bg-dark-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Counter -->
                    <div class="counter-container">
                        <div class="counter-cell">
                            <i class="fas fa-users"></i>
                            <div data-purecounter-start="0" data-purecounter-end="231" data-purecounter-duration="3" class="purecounter">1</div>
                            <div class="counter-info">Happy Customers</div>
                        </div> <!-- end of counter-cell -->
                        <div class="counter-cell">
                            <i class="fas fa-code"></i>
                            <div data-purecounter-start="0" data-purecounter-end="385" data-purecounter-duration="1.5" class="purecounter">1</div>
                            <div class="counter-info">Issues Solved</div>
                        </div> <!-- end of counter-cell -->
                        <div class="counter-cell">
                            <i class="fas fa-cog"></i>
                            <div data-purecounter-start="0" data-purecounter-end="159" data-purecounter-duration="3" class="purecounter">1</div>
                            <div class="counter-info">Good Reviews</div>
                        </div> <!-- end of counter-cell -->
                        <div class="counter-cell">
                            <i class="fas fa-rocket"></i>
                            <div data-purecounter-start="0" data-purecounter-end="128" data-purecounter-duration="3" class="purecounter">1</div>
                            <div class="counter-info">Case Studies</div>
                        </div> <!-- end of counter-cell -->
                        <div class="counter-cell">
                            <i class="fas fa-comments"></i>
                            <div data-purecounter-start="0" data-purecounter-end="216" data-purecounter-duration="3" class="purecounter">1</div>
                            <div class="counter-info">Press Articles</div>
                        </div> <!-- end of counter-cell -->
                    </div> <!-- end of counter-container -->
                    <!-- end of counter -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of statistics -->


    <!-- Screenshots -->
    <div class="slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">SCREENSHOTS</h2>
                    <hr class="hr-heading">
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{asset('design/leno//images/screenshot-1.png')}}" alt="alternative">
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{asset('design/leno//images/screenshot-2.png')}}" alt="alternative">
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{asset('design/leno//images/screenshot-3.png')}}" alt="alternative">
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{asset('design/leno//images/screenshot-4.png')}}" alt="alternative">
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{asset('design/leno//images/screenshot-5.png')}}" alt="alternative">
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{asset('design/leno//images/screenshot-6.png')}}" alt="alternative">
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{asset('design/leno//images/screenshot-7.png')}}" alt="alternative">
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{asset('design/leno//images/screenshot-8.png')}}" alt="alternative">
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{asset('design/leno//images/screenshot-9.png')}}" alt="alternative">
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{asset('design/leno//images/screenshot-10.png')}}" alt="alternative">
                                </div>
                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of screenshots -->


    <!-- Download -->
    <div class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h4>Download Leno today to see the benefits and enjoy the results faster than any other app out there</h4>
                        <a class="btn-solid-lg" href="#your-link"><i class="fab fa-apple"></i>For iOS</a>
                        <a class="btn-solid-lg" href="#your-link"><i class="fab fa-google-play"></i>For Android</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="{{asset('design/leno//images/download.png')}}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of download -->


@endsection
