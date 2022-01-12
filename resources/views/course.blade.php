<!DOCTYPE html>
<html lang="en">

@extends('layouts.master')

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

   @section('content')


    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Our Courses</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Top Popular Courses Area Start ##### -->
    <div class="top-popular-courses-area mt-50 section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        @component('componnent.slidr')

                        @slot('title')

                        @endslot

                        @slot('text')
                        Top Popular Courses
                        @endslot

                        @slot('txt')
The Best
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

                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms">
                        <div class="popular-course-content">
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')

                            @endslot

                            @slot('txt')
                            By Simon Smith   |  March 18, 2018
                            @endslot

                            @slot('description')


                            @endslot

                            @slot('hed')
                            Business for begginers
                            @endslot

                            @slot('head')

                            @endslot
                            @endcomponent


                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')

                            @endslot

                            @slot('txt')

                            @endslot

                            @slot('description')

                            Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod.

                            @endslot

                            @slot('hed')

                            @endslot

                            @slot('head')

                            @endslot
                            @endcomponent
                            {{-- <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod.</p> --}}
                            <a href="#" class="btn academy-btn btn-sm">See More</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pc-1.jpg);"></div>
                    </div>
                </div>

                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="500ms">
                        <div class="popular-course-content">
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')

                            @endslot

                            @slot('txt')
                            By Simon Smith   |  March 18, 2018
                            @endslot

                            @slot('description')


                            @endslot

                            @slot('hed')
                            Advanced HTML5
                            @endslot

                            @slot('head')

                            @endslot
                            @endcomponent

                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')

                            @endslot

                            @slot('txt')

                            @endslot

                            @slot('description')
                            Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod.


                            @endslot

                            @slot('hed')

                            @endslot

                            @slot('head')

                            @endslot
                            @endcomponent
                            <a href="#" class="btn academy-btn btn-sm">See More</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pc-2.jpg);"></div>
                    </div>
                </div>

                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="600ms">
                        <div class="popular-course-content">
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')

                            @endslot

                            @slot('txt')
                            By Simon Smith   |  March 18, 2018
                            @endslot

                            @slot('description')


                            @endslot

                            @slot('hed')
                            Marketing 101
                            @endslot

                            @slot('head')

                            @endslot
                            @endcomponent


                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')

                            @endslot

                            @slot('txt')

                            @endslot

                            @slot('description')
                            Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod.


                            @endslot

                            @slot('hed')

                            @endslot

                            @slot('head')

                            @endslot
                            @endcomponent
                            <a href="#" class="btn academy-btn btn-sm">See More</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pc-3.jpg);"></div>
                    </div>
                </div>

                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
                        <div class="popular-course-content">
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')

                            @endslot

                            @slot('txt')
                            By Simon Smith   |  March 18, 2018
                            @endslot

                            @slot('description')


                            @endslot

                            @slot('hed')
                            Business for begginers
                            @endslot

                            @slot('head')

                            @endslot
                            @endcomponent


                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')

                            @endslot

                            @slot('txt')

                            @endslot

                            @slot('description')
                            Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod.


                            @endslot

                            @slot('hed')

                            @endslot

                            @slot('head')

                            @endslot
                            @endcomponent
                            <a href="#" class="btn academy-btn btn-sm">See More</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pc-4.jpg);"></div>
                    </div>
                </div>

                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="800ms">
                        <div class="popular-course-content">
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')

                            @endslot

                            @slot('txt')
                            By Simon Smith   |  March 18, 2018
                            @endslot

                            @slot('description')


                            @endslot

                            @slot('hed')
                            Marketing 101
                            @endslot

                            @slot('head')

                            @endslot
                            @endcomponent

                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')

                            @endslot

                            @slot('txt')

                            @endslot

                            @slot('description')
                            Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod.


                            @endslot

                            @slot('hed')

                            @endslot

                            @slot('head')

                            @endslot
                            @endcomponent
                            <a href="#" class="btn academy-btn btn-sm">See More</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pc-5.jpg);"></div>
                    </div>
                </div>

                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="900ms">
                        <div class="popular-course-content">
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')

                            @endslot

                            @slot('txt')
                            By Simon Smith   |  March 18, 2018
                            @endslot

                            @slot('description')


                            @endslot

                            @slot('hed')
                            Business for begginers
                            @endslot

                            @slot('head')

                            @endslot
                            @endcomponent

                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')

                            @endslot

                            @slot('txt')

                            @endslot

                            @slot('description')
                            Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod.


                            @endslot

                            @slot('hed')

                            @endslot

                            @slot('head')

                            @endslot
                            @endcomponent
                            <a href="#" class="btn academy-btn btn-sm">See More</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pc-6.jpg);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Top Popular Courses Area End ##### -->

    <!-- ##### Top Popular Courses Details Area Start ##### -->
    <div class="popular-course-details-area wow fadeInUp" data-wow-delay="300ms">
        <div class="single-top-popular-course d-flex align-items-center flex-wrap">
            <div class="popular-course-content">
                @component('componnent.slidr')

                @slot('title')

                @endslot

                @slot('text')

                @endslot

                @slot('txt')
                By Simon Smith   |  March 18, 2018
                @endslot

                @slot('description')


                @endslot

                @slot('hed')
                Business for begginers
                @endslot

                @slot('head')

                @endslot
                @endcomponent

                <div class="course-ratings">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                @component('componnent.slidr')

                @slot('title')

                @endslot

                @slot('text')

                @endslot

                @slot('txt')

                @endslot

                @slot('description')
                Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod. Morbi vel arcu gravida, iaculis lacus vel, posuere ipsum. Sed faucibus mauris vitae urna consectetur, sit amet maximus nisl sagittis. Ut in iaculis enim, et pulvinar mauris. Etiam tristique magna eget velit consectetur, a tincidunt velit dictum. Cras vulputate metus id felis ornare hendrerit. Maecenas sodales suscipit ipsum.


                @endslot

                @slot('hed')

                @endslot

                @slot('head')

                @endslot
                @endcomponent
                <a href="#" class="btn academy-btn btn-sm mt-15">See More</a>
            </div>
            <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/bg-4.jpg);"></div>
        </div>
    </div>
    <!-- ##### Top Popular Courses Details Area End ##### -->

    <!-- ##### Course Area Start ##### -->
    <div class="academy-courses-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Single Course Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100">
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
                            Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod. Morbi vel arcu gravida, iaculis lacus vel, posuere ipsum. Sed faucibus mauris vitae urna consectetur, sit amet maximus nisl sagittis. Ut in iaculis enim, et pulvinar mauris. Etiam tristique magna eget velit consectetur, a tincidunt velit dictum. Cras vulputate metus id felis ornare hendrerit. Maecenas sodales suscipit ipsum.


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
                <div class="col-12 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100">
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
                <div class="col-12 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100">
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
   @endsection

</body>

</html>
