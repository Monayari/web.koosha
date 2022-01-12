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
            @component('componnent.slidr')

            @slot('title')
            Elements
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

        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Elements Area Start ##### -->
    <section class="elements-area mt-50 section-padding-100-0">
        <div class="container">
            <div class="row">

                <!-- ========== Buttons ========== -->
                <div class="col-12">
                    <div class="elements-title mb-50">
                        @component('componnent.slidr')

                        @slot('title')
                        Buttons
                        @endslot

                        @slot('text')

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
                    <!-- Selene Button -->
                    <div class="academy-buttons-area mb-100">
                        <a href="#" class="btn academy-btn m-2">Contact Us</a>
                        <a href="#" class="btn academy-btn btn-2 m-2">Contact Us</a>
                        <a href="#" class="btn academy-btn btn-3 m-2">Contact Us</a>
                        <a href="#" class="btn academy-btn btn-4 m-2">Contact Us</a>
                    </div>
                </div>

                <!-- ========== Progress Bars & Accordions ========== -->
                <div class="col-12">
                    <div class="elements-title mb-50">
                        @component('componnent.slidr')

                        @slot('title')
                        Accordians &amp; Tabs
                        @endslot

                        @slot('text')

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

                <!-- ##### Accordians ##### -->
                <div class="col-12 col-lg-6">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')

                            @endslot



                            @slot('description')



                            @endslot

                            @slot('txt')

                            @endslot
                            @slot('hed')

                            @endslot

                            @slot('head')
                            <a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Donec ipsum metus, pharetr a quis nunc sit amet, maximus

                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a>

                            @endslot
                            @endcomponent

                            <div id="collapseOne" class="accordion-content collapse show">
                                @component('componnent.slidr')

                                @slot('title')

                                @endslot

                                @slot('text')

                                @endslot

                                @slot('txt')

                                @endslot

                                @slot('description')

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.


                                @endslot

                                @slot('hed')

                                @endslot

                                @slot('head')

                                @endslot
                                @endcomponent
                                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p> --}}
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')

                            @endslot



                            @slot('description')



                            @endslot

                            @slot('txt')

                            @endslot
                            @slot('hed')

                            @endslot

                            @slot('head')
                            <a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Donec ipsum metus, pharetr a quis nunc sit amet, maximus

                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a>

                            @endslot
                            @endcomponent

                            <div id="collapseTwo" class="accordion-content collapse">
                                @component('componnent.slidr')

                                @slot('title')

                                @endslot

                                @slot('text')

                                @endslot

                                @slot('txt')

                                @endslot

                                @slot('description')

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.


                                @endslot

                                @slot('hed')

                                @endslot

                                @slot('head')

                                @endslot
                                @endcomponent
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            @component('componnent.slidr')

                            @slot('title')

                            @endslot

                            @slot('text')

                            @endslot



                            @slot('description')



                            @endslot

                            @slot('txt')

                            @endslot
                            @slot('hed')

                            @endslot

                            @slot('head')
                            <a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Donec ipsum metus, pharetr a quis nunc sit amet, maximus

                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a>

                            @endslot
                            @endcomponent

                            <div id="collapseThree" class="accordion-content collapse">
                                @component('componnent.slidr')

                                @slot('title')

                                @endslot

                                @slot('text')

                                @endslot

                                @slot('txt')

                                @endslot

                                @slot('description')

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.


                                @endslot

                                @slot('hed')

                                @endslot

                                @slot('head')

                                @endslot
                                @endcomponent
                            </div>
                        </div>
                    </div>
                </div>


                <!-- ##### Tabs ##### -->
                <div class="col-12 col-lg-6">
                    <div class="academy-tabs-content">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Morbi vel arcu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Sed faucibus</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab--3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="true">Sed faucibus mau</a>
                            </li>
                        </ul>

                        <div class="tab-content mb-100" id="myTabContent">
                            <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                <div class="academy-tab-content">
                                    <!-- Tab Text -->
                                    <div class="academy-tab-text">
                                        @component('componnent.slidr')

                                        @slot('title')

                                        @endslot

                                        @slot('text')

                                        @endslot

                                        @slot('txt')

                                        @endslot

                                        @slot('description')

                                        Integer nec bibendum lacus. Praesent malesuada congue, Suspendisse dictum enim sit amet libero malesu ada feugiat. Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Praesent malesuada congue.


                                        @endslot

                                        @slot('hed')

                                        @endslot

                                        @slot('head')

                                        @endslot
                                        @endcomponent
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                <div class="academy-tab-content">
                                    <!-- Tab Text -->
                                    <div class="academy-tab-text">
                                        @component('componnent.slidr')

                                        @slot('title')

                                        @endslot

                                        @slot('text')

                                        @endslot

                                        @slot('txt')

                                        @endslot

                                        @slot('description')

                                        Integer nec bibendum lacus. Praesent malesuada congue, Suspendisse dictum enim sit amet libero malesu ada feugiat. Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Praesent malesuada congue.


                                        @endslot

                                        @slot('hed')

                                        @endslot

                                        @slot('head')

                                        @endslot
                                        @endcomponent
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                                <div class="academy-tab-content">
                                    <!-- Tab Text -->
                                    <div class="academy-tab-text">
                                        @component('componnent.slidr')

                                        @slot('title')

                                        @endslot

                                        @slot('text')

                                        @endslot

                                        @slot('txt')

                                        @endslot

                                        @slot('description')

                                        Integer nec bibendum lacus. Praesent malesuada congue, Suspendisse dictum enim sit amet libero malesu ada feugiat. Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Praesent malesuada congue.


                                        @endslot

                                        @slot('hed')

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

                <!-- ========== Milestones ========== -->
                <div class="col-12">
                    <div class="elements-title mb-50">
                        @component('componnent.slidr')

                        @slot('title')
Milestone
                        @endslot

                        @slot('text')

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

                <div class="col-12">
                    <div class="academy-cool-facts-area mb-50">
                        <div class="row">

                            <!-- Single Cool Fact-->
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-cool-fact text-center">
                                    <i class="icon-agenda-1"></i>
                                    @component('componnent.slidr')

                                    @slot('title')

                                    @endslot

                                    @slot('text')
                                    <span class="counter">130</span>
                                    @endslot

                                    @slot('txt')

                                    @endslot

                                    @slot('description')

                                    Courses Available

                                    @endslot

                                    @slot('hed')

                                    @endslot

                                    @slot('head')

                                    @endslot
                                    @endcomponent


                                </div>
                            </div>

                            <!-- Single Cool Fact-->
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-cool-fact text-center">
                                    <i class="icon-assistance"></i>
                                    @component('componnent.slidr')

                                    @slot('title')

                                    @endslot

                                    @slot('text')
                                    <span class="counter">54</span>
                                    @endslot

                                    @slot('txt')

                                    @endslot

                                    @slot('description')

                                    Amazing Teachers

                                    @endslot

                                    @slot('hed')

                                    @endslot

                                    @slot('head')

                                    @endslot
                                    @endcomponent

                                </div>
                            </div>

                            <!-- Single Cool Fact-->
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-cool-fact text-center">
                                    <i class="icon-id-card"></i>
                                    @component('componnent.slidr')

                                    @slot('title')

                                    @endslot

                                    @slot('text')
                                    <span class="counter">67</span>K
                                    @endslot

                                    @slot('txt')

                                    @endslot

                                    @slot('description')

                                    online Students

                                    @endslot

                                    @slot('hed')

                                    @endslot

                                    @slot('head')

                                    @endslot
                                    @endcomponent

                                </div>
                            </div>

                            <!-- Single Cool Fact-->
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-cool-fact text-center">
                                    <i class="icon-message"></i>
                                    @component('componnent.slidr')

                                    @slot('title')

                                    @endslot

                                    @slot('text')
                                    <span class="counter">12</span>
                                    @endslot

                                    @slot('txt')

                                    @endslot

                                    @slot('description')

                                    Awards Won

                                    @endslot

                                    @slot('hed')

                                    @endslot

                                    @slot('head')

                                    @endslot
                                    @endcomponent

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========== Loaders ========== -->
                <div class="col-12">
                    <div class="elements-title mb-50">
                        @component('componnent.slidr')

                        @slot('title')
Loardes
                        @endslot

                        @slot('text')

                        @endslot

                        @slot('txt')
The Best
                        @endslot

                        @slot('description')

                        Courses Available

                        @endslot

                        @slot('hed')

                        @endslot

                        @slot('head')

                        @endslot
                        @endcomponent

                    </div>
                </div>

                <div class="col-12">
                    <!-- Loaders Area Start -->
                    <div class="our-skills-area text-center mb-100">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-pie-bar mb-30" data-percent="75">
                                    <canvas class="bar-circle" width="70" height="70"></canvas>
                                    @component('componnent.slidr')

                                    @slot('title')

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
Hard work
                                    @endslot
                                    @endcomponent

                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-pie-bar mb-30" data-percent="65">
                                    <canvas class="bar-circle" width="70" height="70"></canvas>
                                    @component('componnent.slidr')

                                    @slot('title')

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
                                    Investment
                                    @endslot
                                    @endcomponent

                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-pie-bar mb-30" data-percent="43">
                                    <canvas class="bar-circle" width="70" height="70"></canvas>
                                    @component('componnent.slidr')

                                    @slot('title')

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
                                    Creativity

                                    @endslot
                                    @endcomponent

                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-pie-bar mb-30" data-percent="100">
                                    <canvas class="bar-circle" width="70" height="70"></canvas>
                                    @component('componnent.slidr')

                                    @slot('title')

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

commitment
                                    @endslot
                                    @endcomponent
                                    <h6>Commitment</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========== Icon Boxes ========== -->
                <div class="col-12">
                    <div class="elements-title mb-50">
                        @component('componnent.slidr')

                        @slot('title')
                        Icon Boxes
                        @endslot

                        @slot('text')

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

                <div class="col-12">
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


                                    Lacinia, lacinia la cus non, fermen tum nisi

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
        </div>
    </section>
  @endsection

</body>

</html>
