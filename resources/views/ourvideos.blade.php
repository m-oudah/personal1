<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')

<section class="hero d-flex justify-content-center align-items-center" id="section_1"
    style="padding-top:120px; padding-bottom:120px;">
    <div class="container">
        <div class="row">

            <div class="col-lg-7 col-12">
                <div class="hero-text">
                    <h2 class="mb-4"><a href="{{route ('index',$lang)}}">{{__('trans.home')}}</a></h2>
                    <h2 class="mb-4"> / </h2>
                    <h2 class="mb-4">{{__('trans.Our Video Library')}}</h2>
                </div>
            </div>

            <div class="col-lg-5 col-12 position-relative">

            </div>

        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#535da1" fill-opacity="1"
            d="M0,160L24,160C48,160,96,160,144,138.7C192,117,240,75,288,64C336,53,384,75,432,106.7C480,139,528,181,576,208C624,235,672,245,720,240C768,235,816,213,864,186.7C912,160,960,128,1008,133.3C1056,139,1104,181,1152,202.7C1200,224,1248,224,1296,197.3C1344,171,1392,117,1416,90.7L1440,64L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z">
        </path>
    </svg>
</section>



<!-- About Start -->
<div class="container-fluid py-3">
    <div class="container pt-5 pb-3">
        <h2 class="display-5 text-uppercase text-center mb-5">{{__('trans.Explore Our Library of Videos')}}</h2>

        <div class="row">

        <div class="col-lg-4 col-12">
                            <div class="services-thumb text-center">
                                <div class="align-items-center  border-bottom mb-2 pb-2">
                                    <h5 class="text-uppercase mt-2 mb-3 text-center">{{__('trans.article title')}}</h5>
                                </div>

                                <iframe src="https://www.youtube.com/embed/4Z9mUjtFJYY"
                                    title="The USA 4K - Scenic Relaxation Film With Calming Music" frameborder="0"
                                    width="100%"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            
                                <p>{{__('trans.subtitle')}}</p>

                                <!-- <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a> -->

                                <!-- <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                    <i class="services-icon bi-globe"></i>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="services-thumb text-center">
                                <div class="align-items-center  border-bottom mb-2 pb-2">
                                    <h5 class="text-uppercase mt-2 mb-3 text-center">{{__('trans.article title')}}</h5>
                                </div>

                                <iframe src="https://www.youtube.com/embed/4Z9mUjtFJYY"
                                    title="The USA 4K - Scenic Relaxation Film With Calming Music" frameborder="0"
                                    width="100%"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            
                                <p>{{__('trans.subtitle')}}</p>

                                <!-- <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a> -->

                                <!-- <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                    <i class="services-icon bi-globe"></i>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="services-thumb text-center">
                                <div class="align-items-center  border-bottom mb-2 pb-2">
                                    <h5 class="text-uppercase mt-2 mb-3 text-center">{{__('trans.article title')}}</h5>
                                </div>

                                <iframe src="https://www.youtube.com/embed/4Z9mUjtFJYY"
                                    title="The USA 4K - Scenic Relaxation Film With Calming Music" frameborder="0"
                                    width="100%"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            
                                <p>{{__('trans.subtitle')}}</p>

                                <!-- <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a> -->

                                <!-- <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                    <i class="services-icon bi-globe"></i>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="services-thumb text-center">
                                <div class="align-items-center  border-bottom mb-2 pb-2">
                                    <h5 class="text-uppercase mt-2 mb-3 text-center">{{__('trans.article title')}}</h5>
                                </div>

                                <iframe src="https://www.youtube.com/embed/4Z9mUjtFJYY"
                                    title="The USA 4K - Scenic Relaxation Film With Calming Music" frameborder="0"
                                    width="100%"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            
                                <p>{{__('trans.subtitle')}}</p>

                                <!-- <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a> -->

                                <!-- <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                    <i class="services-icon bi-globe"></i>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="services-thumb text-center">
                                <div class="align-items-center  border-bottom mb-2 pb-2">
                                    <h5 class="text-uppercase mt-2 mb-3 text-center">{{__('trans.article title')}}</h5>
                                </div>

                                <iframe src="https://www.youtube.com/embed/4Z9mUjtFJYY"
                                    title="The USA 4K - Scenic Relaxation Film With Calming Music" frameborder="0"
                                    width="100%"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            
                                <p>{{__('trans.subtitle')}}</p>

                                <!-- <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a> -->

                                <!-- <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                    <i class="services-icon bi-globe"></i>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="services-thumb text-center">
                                <div class="align-items-center  border-bottom mb-2 pb-2">
                                    <h5 class="text-uppercase mt-2 mb-3 text-center">{{__('trans.article title')}}</h5>
                                </div>

                                <iframe src="https://www.youtube.com/embed/4Z9mUjtFJYY"
                                    title="The USA 4K - Scenic Relaxation Film With Calming Music" frameborder="0"
                                    width="100%"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            
                                <p>{{__('trans.subtitle')}}</p>

                                <!-- <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a> -->

                                <!-- <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                    <i class="services-icon bi-globe"></i>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="services-thumb text-center">
                                <div class="align-items-center  border-bottom mb-2 pb-2">
                                    <h5 class="text-uppercase mt-2 mb-3 text-center">{{__('trans.article title')}}</h5>
                                </div>

                                <iframe src="https://www.youtube.com/embed/4Z9mUjtFJYY"
                                    title="The USA 4K - Scenic Relaxation Film With Calming Music" frameborder="0"
                                    width="100%"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            
                                <p>{{__('trans.subtitle')}}</p>

                                <!-- <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a> -->

                                <!-- <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                    <i class="services-icon bi-globe"></i>
                                </div> -->
                            </div>
                        </div>
        </div>

    </div>
</div>
<!-- About End -->






@endsection