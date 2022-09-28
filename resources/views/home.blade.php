<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')

<section class="hero d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
        <div class="row">

            <div class="col-lg-7 col-12">
                <div class="hero-text">
                    <div class="hero-title-wrap d-flex align-items-center mb-4">
                        <img src="{{asset('assets/images/happy-bearded-young-man.jpg')}}"
                            class="avatar-image avatar-image-large img-fluid" alt="">

                        <h1 class="hero-title ms-3 mb-0">{{__('trans.Hello Im')}}</h1>
                    </div>

                    <h2 class="mb-4">{{__('trans.Welcome to My Personal Page')}}</h2>
                    <p class="mb-4"><a class="custom-btn btn custom-link" href="#section_2">{{__('trans.About Me')}}</a>
                    </p>
                </div>
            </div>

            <div class="col-lg-5 col-12 position-relative">
                <div class="hero-image-wrap"></div>
                <img src="{{asset('assets/images/portrait-happy-excited-man-holding-laptop-computer.png')}}"
                    class="hero-image img-fluid" alt="">
            </div>

        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#535da1" fill-opacity="1"
            d="M0,160L24,160C48,160,96,160,144,138.7C192,117,240,75,288,64C336,53,384,75,432,106.7C480,139,528,181,576,208C624,235,672,245,720,240C768,235,816,213,864,186.7C912,160,960,128,1008,133.3C1056,139,1104,181,1152,202.7C1200,224,1248,224,1296,197.3C1344,171,1392,117,1416,90.7L1440,64L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z">
        </path>
    </svg>
</section>


<main>

    <section class="about section-padding" id="section_2">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                    <img src="{{asset('assets/images/couple-working-from-home-together-sofa.jpg')}}"
                        class="about-image img-fluid" alt="">
                </div>

                <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                    <div class="about-thumb ">

                        <div class="section-title-wrap d-flex justify-content-end align-items-center mb-4">
                            <h2 class="text-white me-4 mb-0">{{__('trans.My Story')}}</h2>

                            <img src="{{asset('assets/images/happy-bearded-young-man.jpg')}}"
                                class="avatar-image img-fluid" alt="">
                        </div>

                        <h3 class="pt-2 mt-4 mb-3">{{__('trans.little about me')}}</h3>

                        <div class="text-justify">
                            {!! __('trans.aboutdetails1') !!}
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- <section class="clients section-padding">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-12 col-12">
                <h3 class="text-center mb-5">Companies I've had worked</h3>
            </div>

            <div class="col-lg-2 col-4 ms-auto clients-item-height">
                <img src="{{asset('assets/images/clients/cachet.svg')}}" class="clients-image img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-4 clients-item-height">
                <img src="{{asset('assets/images/clients/guitar-center.svg')}}" class="clients-image img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-4 clients-item-height">
                <img src="{{asset('assets/images/clients/tokico.svg')}}" class="clients-image img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-4 clients-item-height">
                <img src="{{asset('assets/images/clients/shopify.svg')}}" class="clients-image img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-4 me-auto clients-item-height">
                <img src="{{asset('assets/images/clients/profil-rejser.svg')}}" class="clients-image img-fluid" alt="">
            </div>

        </div>
    </div>
    </section> -->

    <section class="projects section-padding" id="section_3">
        <div class="container">
            <div class="row">

                <div class="col-lg-12  col-12 ms-auto">
                    <div class="section-title-wrap d-flex justify-content-center align-items-center mb-4">
                        <img src="{{asset('assets/images/white-desk-work-study-aesthetics.jpg')}}"
                            class="avatar-image img-fluid" alt="">

                        <h2 class="text-white ms-4 mb-0">{{__('trans.Portofolio')}}</h2>
                    </div>

                </div>

                <div class="clearfix"></div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">Branding</small>

                            <h5 class="projects-title">{{__('trans.Work Title')}}</h5>
                        </div>

                        <a href="{{asset('assets/images/projects/nikhil-KO4io-eCAXA-unsplash.jpg')}}"
                            class="popup-image">
                            <img src="{{asset('assets/images/projects/nikhil-KO4io-eCAXA-unsplash.jpg')}}"
                                class="projects-image img-fluid" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">Photography</small>

                            <h5 class="projects-title">{{__('trans.Work Title')}}</h5>
                        </div>

                        <a href="{{asset('assets/images/projects/the-5th-IQYR7N67dhM-unsplash.jpg')}}"
                            class="popup-image">
                            <img src="{{asset('assets/images/projects/the-5th-IQYR7N67dhM-unsplash.jpg')}}"
                                class="projects-image img-fluid" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">Website</small>

                            <h5 class="projects-title">{{__('trans.Work Title')}}</h5>
                        </div>

                        <a href="{{asset('assets/images/projects/true-agency-9Bjog5FZ-oc-unsplash.jpg')}}"
                            class="popup-image">
                            <img src="{{asset('assets/images/projects/true-agency-9Bjog5FZ-oc-unsplash.jpg')}}"
                                class="projects-image img-fluid" alt="">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="services section-padding" id="section_4">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 mx-auto">
                    <div class="section-title-wrap d-flex justify-content-center align-items-center mb-1">
                        <img src="{{asset('assets/images/handshake-man-woman-after-signing-business-contract-closeup.jpg')}}"
                            class="avatar-image img-fluid" alt="">

                        <h2 class="text-white ms-4 mb-0">{{__('trans.Our Video Library')}}</h2>
                    </div>

                    <div class="row pt-lg-5">
                        <div class="col-lg-4 col-12">
                            <div class="services-thumb text-center">
                                <div class="align-items-center  border-bottom mb-2 pb-2">
                                    <h5 class="text-uppercase mt-2 mb-3 text-center">{{__('trans.Video Title')}}</h5>
                                </div>

                                <iframe src="https://www.youtube.com/embed/4Z9mUjtFJYY"
                                    title="The USA 4K - Scenic Relaxation Film With Calming Music" frameborder="0"
                                    width="100%"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>

                                <p>{{__('trans.Video Sub Title')}}</p>

                                <!-- <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a> -->

                                <!-- <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                    <i class="services-icon bi-globe"></i>
                                </div> -->
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="services-thumb text-center">
                                <div class="align-items-center  border-bottom mb-2 pb-2">
                                    <h5 class="text-uppercase mt-2 mb-3 text-center">{{__('trans.Video Title')}}</h5>
                                </div>

                                <iframe src="https://www.youtube.com/embed/4Z9mUjtFJYY"
                                    title="The USA 4K - Scenic Relaxation Film With Calming Music" frameborder="0"
                                    width="100%"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>

                                <p>{{__('trans.Video Sub Title')}}</p>

                                <!-- <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a> -->

                                <!-- <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                    <i class="services-icon bi-globe"></i>
                                </div> -->
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="services-thumb text-center">
                                <div class="align-items-center  border-bottom mb-2 pb-2">
                                    <h5 class="text-uppercase mt-2 mb-3 text-center">{{__('trans.Video Title')}}</h5>
                                </div>

                                <iframe src="https://www.youtube.com/embed/4Z9mUjtFJYY"
                                    title="The USA 4K - Scenic Relaxation Film With Calming Music" frameborder="0"
                                    width="100%"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>

                                <p>{{__('trans.Video Sub Title')}}</p>

                                <!-- <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a> -->

                                <!-- <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                    <i class="services-icon bi-globe"></i>
                                </div> -->
                            </div>
                        </div>


                    </div>

                    <div class="row justify-content-center align-items-center ms-auto">
                        <div class="col-md-6 col-12 text-center">
                            <a href="{{route('ourVideos',$lang)}}"
                                class="custom-btn custom-border-btn btn mt-3">{{__('trans.Discover More')}}</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="services section-padding" id="section_5">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 mx-auto">
                    <div class="section-title-wrap d-flex justify-content-center align-items-center mb-1">
                        <img src="{{asset('assets/images/handshake-man-woman-after-signing-business-contract-closeup.jpg')}}"
                            class="avatar-image img-fluid" alt="">

                        <h2 class="text-white ms-4 mb-0">{{__('trans.Blog')}}</h2>
                    </div>

                    <div class="row pt-lg-5">
                        <div class="col-lg-4 col-12">
                            <div class="services-thumb text-center">
                                <div class="border-bottom mb-2 pb-1">
                                    <a href="{{route('articleDetails',$lang)}}">
                                        <h5 class="text-uppercase mt-2 mb-3 text-center">{{__('trans.article title')}}
                                        </h5>
                                    </a>
                                    <p>18 May 2022</p>
                                </div>

                                <a href="{{route('articleDetails',$lang)}}">
                                    <img src="{{asset('assets/images/handshake-man-woman-after-signing-business-contract-closeup.jpg')}}"
                                        class="img-fluid mb-2 mt-2" alt="">
                                </a>
                                <p>{{__('trans.subtitle')}}</p>

                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="services-thumb text-center">
                                <div class="border-bottom mb-2 pb-1">
                                    <a href="{{route('articleDetails',$lang)}}">
                                        <h5 class="text-uppercase mt-2 mb-3 text-center">{{__('trans.article title')}}
                                        </h5>
                                    </a>
                                    <p>18 May 2022</p>
                                </div>

                                <a href="{{route('articleDetails',$lang)}}">
                                    <img src="{{asset('assets/images/handshake-man-woman-after-signing-business-contract-closeup.jpg')}}"
                                        class="img-fluid mb-2 mt-2" alt="">
                                </a>
                                <p>{{__('trans.subtitle')}}</p>

                                <!-- <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a> -->

                                <!-- <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                    <i class="services-icon bi-globe"></i>
                                </div> -->
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="services-thumb text-center">
                                <div class="border-bottom mb-2 pb-1">
                                    <a href="{{route('articleDetails',$lang)}}">

                                        <h5 class="text-uppercase mt-2 mb-3 text-center">{{__('trans.article title')}}
                                        </h5>
                                    </a>
                                    <p>18 May 2022</p>
                                </div>

                                <a href="{{route('articleDetails',$lang)}}">
                                    <img src="{{asset('assets/images/handshake-man-woman-after-signing-business-contract-closeup.jpg')}}"
                                        class="img-fluid mb-2 mt-2" alt="">
                                </a>
                                <p>{{__('trans.subtitle')}}</p>

                                <!-- <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a> -->

                                <!-- <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                    <i class="services-icon bi-globe"></i>
                                </div> -->
                            </div>
                        </div>

                    </div>

                    <div class="row justify-content-center align-items-center ms-auto">
                        <div class="col-md-6 col-12 text-center">
                            <a href="{{route('blog',$lang)}}"
                                class="custom-btn custom-border-btn btn mt-3">{{__('trans.Discover More')}}</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>




    <section class="contact section-padding" id="section_6">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-12">
                    <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
                        <img src="{{asset('assets/images/aerial-view-man-using-computer-laptop-wooden-table.jpg')}}"
                            class="avatar-image img-fluid" alt="">

                        <h2 class="text-white ms-4 mb-0">{{__('trans.Contact')}}</h2>
                    </div>
                </div>

                <div class="clearfix"></div>



                <div class="col-lg-5 col-md-5 col-12 ps-lg-0">
                    <div class="contact-info d-flex flex-column">
                        <strong class="site-footer-title d-block mb-3">{{__('trans.Address')}}</strong>

                        <p class="mb-2">
                            {{__('trans.Location')}}
                        </p>

                        <strong class="site-footer-title d-block mt-4 mb-3">{{__('trans.Email')}}</strong>

                        <p>
                            <a href="mailto:hello@josh.design">
                                hello@josh.design
                            </a>
                        </p>

                        <strong class="site-footer-title d-block mt-4 mb-3">{{__('trans.Call')}}</strong>

                        <p class="mb-0">
                            <a href="tel: 120-240-9600">
                                120-240-9600
                            </a>
                        </p>
                    </div>
                </div>

                <div class="col-lg-7 col-12 mt-5 mt-lg-0">
                    <form action="#" method="get" class="custom-form contact-form" role="form">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name"
                                        required="">

                                    <label for="floatingInput">{{__('trans.Name')}}</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating">
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        class="form-control" placeholder="{{__('trans.Email')}}" required="">

                                    <label for="floatingInput">{{__('trans.Email')}}</label>
                                </div>
                            </div>

                            <div class="col-lg-12 col-12">
                                <div class="form-floating">
                                    <input type="text" name="subject" id="subject" class="form-control"
                                        placeholder="{{__('trans.Subject')}}">

                                    <label for="floatingInput">{{__('trans.Subject')}}</label>
                                </div>
                            </div>


                            <div class="col-lg-12 col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" name="message"
                                        placeholder="Tell me about the project"></textarea>

                                    <label for="floatingTextarea">{{__('trans.Tell me about your request')}}</label>
                                </div>
                            </div>

                            <div class="col-lg-3 col-12 ms-auto">
                                <button type="submit" class="form-control">{{__('trans.Send')}}</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
     
    </section>

</main>


@endsection