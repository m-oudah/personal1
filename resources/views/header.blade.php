<body>

    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section>

    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a href="{{route('index',$lang)}}" class="navbar-brand mx-auto mx-lg-0">{{__('trans.Personal Profile')}}</a>

            <div class="d-flex align-items-center d-lg-none">
                @if($lang=='ar')
                <a class="custom-btn btn" href="/en">
                    English
                </a>
                @else
                <a class="custom-btn btn" href="/ar">
                    العربية
                </a>
                @endif
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-5">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_1">{{__('trans.home')}}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">{{__('trans.About Me')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_3">{{__('trans.Portofolio')}}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_4">{{__('trans.Videos')}}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_5">{{__('trans.Blog')}}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_6">{{__('trans.Contact')}}</a>
                    </li>
                </ul>

                <div class="d-lg-flex align-items-center d-none ms-auto">
                    @if($lang=='ar')
                    <a class="custom-btn btn" href="/en">
                        English
                    </a>
                    @else
                    <a class="custom-btn btn" href="/ar">
                        العربية
                    </a>
                    @endif
                </div>
            </div>

        </div>
    </nav>


