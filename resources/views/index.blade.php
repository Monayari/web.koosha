<!DOCTYPE html>
<html lang="en">

{{-- @extends('layouts.masteri') --}}
{{-- @extends('layouts.Ma') --}}
<body>
@include('layouts.h')
    <!-- ##### Preloader ##### -->
    @include('layouts.hr')
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    {{-- @section('text') --}}
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img container" style="background-image: url(img/bg-img/bg-1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content stl" style=" margin-left: 80px;">

                                <h4 data-animation="fadeInUp" data-delay="100ms">All the courses you need</h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms">Wellcome to our <br>Online University</h2>

                                <div class="row">
                                    <a href="#" class="btn academy-btn" class="logbtn col-sm-5" data-animation="fadeInUp" data-delay="700ms"> REGISTER NOW</a>
                                    <div style="margin-left: 20px;"></div>
                                    <a href="# " class="btn academy-btn" class="logbtn col-sm-5" data-animation="fadeInUp " data-delay="700ms"> LOGIN </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content" style="margin-left: 80px;">
                                <h4 data-animation="fadeInUp" data-delay="100ms">All the courses you need</h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms">Wellcome to our <br>Online University</h2>
                                <a href="#" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Top Feature Area Start ##### -->
    <div class="top-features-area wow fadeInUp" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <div class="col-12 row-12">
                    <div class="features-content container countd">
                        <ul class="row no-gutters ">

                            <!-- Single Top Features -->
                            <li class="col-12 col-md-3 col-sm-3 day licount text-center">
                                <span class="single-top-features d-flex align-items-center justify-content-center spcount" id="days"></span>days
                            </li>
                            <!-- Single Top Features -->
                            <li class="col-12 col-md-3 col-sm-3 hour licount text-center">
                                <span class="single-top-features d-flex align-items-center justify-content-center spcount" id="hours"></span>Hours
                            </li>
                            <!-- Single Top Features -->
                            <li class="col-12 col-md-3 col-sm-3 minute licount text-center">
                                <span class="single-top-features d-flex align-items-center justify-content-center spcount" id="minutes"></span>Minutes
                            </li>
                            <!-- Single Top Features -->
                            <li class="col-12 col-md-3 col-sm-3 second licount text-center">
                                <span class="single-top-features d-flex align-items-center justify-content-center spcount" id="seconds"></span>Seconds
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Top Feature Area End ##### -->

    <!-- ##### Course Area Start ##### -->
    <div class="academy-courses-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <div class="course-icon">
                            <i class="icon-id-card"></i>
                        </div>
                        <div class="course-content">
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')

                            @endslot

                            @slot('txt')


                            @endslot

                            @slot('description')


                            Cras vitae turpis lacinia, lacinia la cus non, fermentum nisi.

                            @endslot

                            @slot('hed')
                            Business School
                            @endslot

                            @slot('head')

                            @endslot
                            @endcomponent

                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                        <div class="course-icon">
                            <i class="icon-worldwide"></i>
                        </div>
                        <div class="course-content">
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')

                            @endslot

                            @slot('txt')


                            @endslot

                            @slot('description')


                            Lacinia, lacinia la cus non, fermen tum nisi.

                            @endslot

                            @slot('hed')
                    Marketing
                            @endslot

                            @slot('head')

                            @endslot
                            @endcomponent

                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="course-icon">
                            <i class="icon-map"></i>
                        </div>
                        <div class="course-content">
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')

                            @endslot

                            @slot('txt')


                            @endslot

                            @slot('description')


                            Cras vitae turpis lacinia, lacinia la cus non, fermentum nisi.

                            @endslot

                            @slot('hed')
                            Photography
                            @endslot

                            @slot('head')

                            @endslot
                            @endcomponent

                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="600ms">
                        <div class="course-icon">
                            <i class="icon-like"></i>
                        </div>
                        <div class="course-content">
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')

                            @endslot

                            @slot('txt')


                            @endslot

                            @slot('description')


                            Cras vitae turpis lacinia, lacinia la cus non, fermentum nisi.

                            @endslot

                            @slot('hed')
                            Social Media
                            @endslot

                            @slot('head')

                            @endslot
                            @endcomponent

                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div class="course-icon">
                            <i class="icon-responsive"></i>
                        </div>
                        <div class="course-content">
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')

                            @endslot

                            @slot('txt')


                            @endslot

                            @slot('description')


                            Lacinia, lacinia la cus non, fermen tum nisi.

                            @endslot

                            @slot('hed')
                            Development
                            @endslot

                            @slot('head')

                            @endslot
                            @endcomponent

                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="800ms">
                        <div class="course-icon">
                            <i class="icon-message"></i>
                        </div>
                        <div class="course-content">
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')

                            @endslot

                            @slot('txt')


                            @endslot

                            @slot('description')


                            Cras vitae turpis lacinia, lacinia la cus non, fermentum nisi.

                            @endslot

                            @slot('hed')
                          Design
                            @endslot

                            @slot('head')

                            @endslot
                            @endcomponent

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Course Area End ##### -->


    <!-- ##### CTA Area Start ##### -->
    <div class="call-to-action-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content d-flex align-items-center justify-content-between flex-wrap">
                        @component('componnent.slidr')

                        @slot('title')

                        @endslot

                        @slot('text')
                        Do you want to enrole at our Academy? Get in touch!

                        @endslot

                        @slot('txt')


                        @endslot

                        @slot('description')



                        @endslot

                        @slot('hed')

                        @endslot

                        @slot('head')

                        @endslot
                        @endcomponent
                        <a href="#" class="btn academy-btn">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ##### Partner Area Start ##### -->
    <div class=" bigdiv">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
                    <div class="partners-logo d-flex align-items-center justify-content-between flex-wrap owl-carousel feedback-slider">


                        <!-- slider item -->
                        <div class="feedback-slider-item">
                            <img class="Myimage" src="//c2.staticflickr.com/8/7310/buddyicons/24846422@N06_r.jpg" class="center-block img-circle" alt="Customer Feedback">
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')
                            <a class="customer-name">Lisa Redfern</a>

                            @endslot

                            @slot('txt')


                            @endslot

                            @slot('description')

                             Ipsum is simply dummy text of the printing and typesetting industry. It is a long established fact that a reader will be distracted by the readable its layout.


                            @endslot

                            @slot('hed')

                            @endslot

                            @slot('head')

                            @endslot
                            @endcomponent

                            <span class="light-bg customer-rating" data-rating="5">
								5
								<i class="fa fa-star"></i>
							</span>
                        </div>
                        <!-- /slider item -->

                        <!-- slider item -->
                        <div class="feedback-slider-item">
                            <img class="Myimage" src="https://res.cloudinary.com/hnmqik4yn/image/upload/c_fill,fl_force_strip,h_128,q_100,w_128/v1493982718/ah57hnfnwxkmsciwivve.jpg" class="center-block img-circle" alt="Customer Feedback">
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')
                            <a class="customer-name">Cassi</a>

                            @endslot

                            @slot('txt')


                            @endslot

                            @slot('description')

                             Ipsum is simply dummy text of the printing and typesetting industry. It is a long established fact that a reader will be distracted by the readable its layout.


                            @endslot

                            @slot('hed')

                            @endslot

                            @slot('head')

                            @endslot
                            @endcomponent


                            <span class="light-bg customer-rating" data-rating="4">
								4
								<i class="fa fa-star"></i>
							</span>
                        </div>
                        <!-- /slider item -->



                        <!-- slider item -->
                        <div class="feedback-slider-item">
                           
                            <img class="Myimage" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/451270/profile/profile-80.jpg" class="center-block img-circle" alt="Customer Feedback">
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')
                            <a class="customer-name">Md Nahidul</a>

                            @endslot

                            @slot('txt')


                            @endslot

                            @slot('description')

                             Ipsum is simply dummy text of the printing and typesetting industry. It is a long established fact that a reader will be distracted by the readable its layout.


                            @endslot

                            @slot('hed')

                            @endslot

                            @slot('head')

                            @endslot
                            @endcomponent

                    
                            <span class="light-bg customer-rating" data-rating="5">
								5
								<i class="fa fa-star"></i>
							</span>
                        </div>
                        <!-- /slider item -->

                    </div>
                    <!-- /End feedback-slider -->

                    <!-- side thumbnail -->
                    <div class="feedback-slider-thumb hidden-xs">
                        <div class="thumb-prev">
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')
                      

                            @endslot

                            @slot('txt')
                            <img class="Myimage" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/451270/profile/profile-80.jpg" alt="Customer Feedback">


                            @endslot

                            @slot('description')

                   


                            @endslot

                            @slot('hed')

                            @endslot

                            @slot('head')

                            @endslot
                            @endcomponent

                         
                            <span class="light-bg customer-rating">
								5
								<i class="fa fa-star"></i>
							</span>
                        </div>

                        <div class="thumb-next">
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')
                      

                            @endslot

                            @slot('txt')
                            <img class="Myimage" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/451270/profile/profile-80.jpg" alt="Customer Feedback">


                            @endslot

                            @slot('description')

                   


                            @endslot

                            @slot('hed')

                            @endslot

                            @slot('head')

                            @endslot
                            @endcomponent
                            <span class="light-bg customer-rating">
								4
								<i class="fa fa-star"></i>
							</span>
                        </div>
                    </div>
                    <!-- /side thumbnail -->
                </div>
                <!-- /End col -->
            </div>
            <!-- /End row -->
        </div>
        <!-- /End container -->
    </div>
    <!-- /End customer-feedback -->





    <!-- ##### Partner Area End ##### -->
    <!-- ##### Testimonials Area Start ##### -->
    <div class="testimonials-area section-padding-100 bg-img bg-overlay" style="background-image: url(img/bg-img/bg-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto white wow fadeInUp" data-wow-delay="300ms">
                        @component('componnent.slidr')

                        @slot('title')

                        @endslot

                        @slot('text')
                  
                        See what our satisfied customers are saying about us

                        @endslot

                        @slot('txt')

                        our testimonials
                        @endslot

                        @slot('description')

               


                        @endslot

                        @slot('hed')

                        @endslot

                        @slot('head')

                        @endslot
                        @endcomponent
                    
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="400ms">
                        <div class="testimonial-thumb">
                            <img src="img/bg-img/t1.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            @component('componnent.slidr')

                            @slot('title')
    
                            @endslot
    
                            @slot('text')
                      
    
                            @endslot
    
    
                            @slot('description')
    
                             nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec
                                odio vestibulum est mat tis effic iturut magna.
    
    
                            @endslot
    
                            @slot('hed')
                            Great teachers
                            @endslot
    
                            @slot('head')
    
                            @slot('txt')
                            Maria Smith,
                    
                            @endslot
                            Student
                            @endslot
                            @endcomponent
                          
                  
                         
                        </div>
                    </div>
                </div>
                <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="500ms">
                        <div class="testimonial-thumb">
                            <img src="img/bg-img/t2.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            @component('componnent.slidr')

                            @slot('title')
    
                            @endslot
    
                            @slot('text')
                      
    
                            @endslot
    
    
                            @slot('description')
    
                            Retiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.

    
    
                            @endslot
    
                            @slot('hed')
                            Great teachers
                            @endslot
    
                            @slot('head')
                            Shawn Gaines,
                            @slot('txt')
                          
                            Student
                            @endslot
                         
                            @endslot
                            @endcomponent
                           
                         
                        </div>
                    </div>
                </div>
                <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="600ms">
                        <div class="testimonial-thumb">
                            <img src="img/bg-img/t3.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            @component('componnent.slidr')

                            @slot('title')
    
                            @endslot
    
                            @slot('text')
                      
    
                            @endslot
    
    
                            @slot('description')
    
                            Nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio
                                ves tibul.
    
    
                            @endslot
    
                            @slot('hed')
                            Great teachers
                            @endslot
    
                            @slot('head')
                          
                            @slot('txt')
                            Ross Cooper,
                    
                            @endslot
                          
                            @endslot
                            @endcomponent
                      
      
                     
                        </div>
                    </div>
                </div>
                <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="700ms">
                        <div class="testimonial-thumb">
                            <img src="img/bg-img/t4.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h5>One good academy</h5>
                            <p>Vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibu lum est mat tis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio ves tibul.
                                Etiam nec odio vestibulum est mat tis effic iturut magnaNec odio vestibulum est mattis effic iturut magna.</p>
                            <h6><span>James Williams,</span> Student</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="800ms">
                        <a href="#" class="btn academy-btn">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Testimonials Area End ##### -->

    <!-- ##### Top Popular Courses Area Start ##### -->
    <div class="top-popular-courses-area section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <span>The Best</span>
                        <h3>Top Popular Courses</h3>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms">
                        <div class="popular-course-content">
                            <h5>Business for begginers</h5>
                            <span>By Simon Smith   |  March 18, 2018</span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod.</p>
                            <a href="#" class="btn academy-btn btn-sm">See More</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pc-1.jpg);"></div>
                    </div>
                </div>

                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="500ms">
                        <div class="popular-course-content">
                            <h5>Advanced HTML5</h5>
                            <span>By Simon Smith   |  March 18, 2018</span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod.</p>
                            <a href="#" class="btn academy-btn btn-sm">See More</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pc-2.jpg);"></div>
                    </div>
                </div>

                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="600ms">
                        <div class="popular-course-content">
                            <h5>Marketing 101</h5>
                            <span>By Simon Smith   |  March 18, 2018</span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod.</p>
                            <a href="#" class="btn academy-btn btn-sm">See More</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pc-3.jpg);"></div>
                    </div>
                </div>

                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
                        <div class="popular-course-content">
                            <h5>Business for begginers</h5>
                            <span>By Simon Smith   |  March 18, 2018</span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod.</p>
                            <a href="#" class="btn academy-btn btn-sm">See More</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pc-4.jpg);"></div>
                    </div>
                </div>
            </div>
        </div>
@include('layouts.f')
{{-- /@endsection --}}
 </div>
  @include('layouts.jquery')
</body>

</html>
