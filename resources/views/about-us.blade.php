<!DOCTYPE html>
<html lang="en">

@extends('layouts.master')

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
  @section('content')
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            @component('componnent.slidr')

            @slot('title')
            About Us
            @endslot

            @slot('text')

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
            {{-- <h2>About Us</h2> --}}
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        @component('componnent.slidr')

                        @slot('title')

                        @endslot

                        @slot('text')
                        We are the Academy
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
                        {{-- <span>The Best</span> --}}
                        {{-- <h3>We are the Academy</h3> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="400ms">
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
                    {{-- <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod. Morbi vel arcu gravida, iaculis lacus vel, posuere ipsum. Sed faucibus mauris vitae urna consectetur, sit amet maximus nisl sagittis. Ut in iaculis enim, et pulvinar mauris. Etiam tristique magna eget velit consectetur, a tincidunt velit dictum. Cras vulputate metus id felis ornare hendrerit. Maecenas sodales suscipit ipsum.</p> --}}
                </div>
                <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    @component('componnent.slidr')

                    @slot('title')

                    @endslot

                    @slot('text')

                    @endslot

                    @slot('txt')

                    @endslot

                    @slot('description')
                    Vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod. Morbi vel arcu gravida, iaculis lacus vel, posuere ipsum. Sed faucibus mauris vitae urna consectetur, sit amet maximus nisl sagittis. Ut in iaculis enim, et pulvinar mauris. Etiam tristique magna eget velit consectetur, a tincidunt velit dictum. Cras vulputate metus id felis ornare hendrerit. Maecenas sodales suscipit ipsum

                    @endslot

                    @slot('hed')

                    @endslot

                    @slot('head')

                    @endslot
                    @endcomponent
                    {{-- <p>Vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod. Morbi vel arcu gravida, iaculis lacus vel, posuere ipsum. Sed faucibus mauris vitae urna consectetur, sit amet maximus nisl sagittis. Ut in iaculis enim, et pulvinar mauris. Etiam tristique magna eget velit consectetur, a tincidunt velit dictum. Cras vulputate metus id felis ornare hendrerit. Maecenas sodales suscipit ipsum.</p> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="about-slides owl-carousel mt-100 wow fadeInUp" data-wow-delay="600ms">
                        <img src="img/bg-img/bg-3.jpg" alt="">
                        <img src="img/bg-img/bg-2.jpg" alt="">
                        <img src="img/bg-img/bg-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Team Area Start ##### -->
    <section class="teachers-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        @component('componnent.slidr')

                        @slot('title')

                        @endslot

                        @slot('text')
                        Meet the teachers
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
                <!-- Single Teachers -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                        <!-- Thumbnail -->
                        <div class="teachers-thumbnail">
                            <img src="img/bg-img/tea1.jpg" alt="">
                        </div>
                        <!-- Meta Info -->
                        <div class="teachers-info mt-30">
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')

                            @endslot

                            @slot('txt')
                            Marketing Proffesor
                            @endslot

                            @slot('description')

                            @endslot

                            @slot('hed')
                            Maria D. Smith
                            @endslot

                            @slot('head')

                            @endslot
                            @endcomponent

                        </div>
                    </div>
                </div>
                <!-- Single Teachers -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Thumbnail -->
                        <div class="teachers-thumbnail">
                            <img src="img/bg-img/tea2.jpg" alt="">
                        </div>
                        <!-- Meta Info -->
                        <div class="teachers-info mt-30">

                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')

                            @endslot

                            @slot('txt')
                            Digital Proffesor
                            @endslot

                            @slot('description')

                            @endslot

                            @slot('hed')
                            Simon Duval
                            @endslot

                            @slot('head')

                            @endslot
                            @endcomponent

                        </div>
                    </div>
                </div>
                <!-- Single Teachers -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="600ms">
                        <!-- Thumbnail -->
                        <div class="teachers-thumbnail">
                            <img src="img/bg-img/tea3.jpg" alt="">
                        </div>
                        <!-- Meta Info -->
                        <div class="teachers-info mt-30">
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')

                            @endslot

                            @slot('txt')
                            HTML Proffesor
                            @endslot

                            @slot('description')

                            @endslot

                            @slot('hed')
                            James Hogan
                            @endslot

                            @slot('head')

                            @endslot
                            @endcomponent

                        </div>
                    </div>
                </div>
                <!-- Single Teachers -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <!-- Thumbnail -->
                        <div class="teachers-thumbnail">
                            <img src="img/bg-img/tea4.jpg" alt="">
                        </div>
                        <!-- Meta Info -->
                        <div class="teachers-info mt-30">
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')

                            @endslot

                            @slot('txt')
                            Marketing Proffesor
                            @endslot

                            @slot('description')

                            @endslot

                            @slot('hed')
                            Claudia Williams
                            @endslot

                            @slot('head')

                            @endslot
                            @endcomponent

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="view-all text-center wow fadeInUp" data-wow-delay="800ms">
                        <a href="#" class="btn academy-btn">All Teachers</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection


</body>

</html>
