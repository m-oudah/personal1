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
                    <h2 class="mb-4">{{__('trans.Article Details')}}</h2>
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
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="row">

            <div class="col-lg-8 col-12">
                <div>
                    <div class="text-center">
                        <img src="{{asset('assets/images/handshake-man-woman-after-signing-business-contract-closeup.jpg')}}"
                            class="img-fluid mb-2 mt-2" alt="">
                    </div>
                    <div class="text-justify mb-4 mt-2">{{__('trans.aboutdetails1')}}</div>

                </div>
            </div>
            <div class="col-lg-4 col-12">
                <h4 class="text-uppercase text-center mb-4">{{__('trans.other articles')}}</h4>
                <!-- 
                <div class="row">
                    <div class="col-sm-4 col-12  ">
                        <img src="{{asset('assets/images/handshake-man-woman-after-signing-business-contract-closeup.jpg')}}"
                            class="img-fluid mb-2 mt-2" alt="">
                    </div>
                    <div class="col-sm-8 col-12 align-middle">
                        <p class="text-uppercase"><a href="">{{__('trans.article title')}} </a></p>
                    </div>
                </div>
                <div class="rent-item mb-4">
                    <a class="btn btn-primary px-3" href="">{{__('trans.View')}} > </a>
                </div> -->



                <div class="articles-thumb text-center">
                    <div class="row">
                        <div class="col-sm-4 col-12  ">
                            <img src="{{asset('assets/images/handshake-man-woman-after-signing-business-contract-closeup.jpg')}}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-sm-8 col-12 align-middle">
                            <p class="text-uppercase"><a href="">{{__('trans.article title')}} </a></p>
                        </div>
                    </div>
                </div>
                <div class="articles-thumb text-center">
                    <div class="row">
                        <div class="col-sm-4 col-12  ">
                            <img src="{{asset('assets/images/handshake-man-woman-after-signing-business-contract-closeup.jpg')}}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-sm-8 col-12 align-middle">
                            <p class="text-uppercase"><a href="">{{__('trans.article title')}} </a></p>
                        </div>
                    </div>
                </div>
                <div class="articles-thumb text-center">
                    <div class="row">
                        <div class="col-sm-4 col-12  ">
                            <img src="{{asset('assets/images/handshake-man-woman-after-signing-business-contract-closeup.jpg')}}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-sm-8 col-12 align-middle">
                            <p class="text-uppercase"><a href="">{{__('trans.article title')}} </a></p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
<!-- About End -->





@endsection