@extends('layouts.personal')

@section('content')

{{-- Hero Section --}}
<div class="hero-wrapper bg-default">
    <div class="container">
        <section id="contacts" class=" pt-4 mb-3 d-flex justify-content-between d-none d-md-flex">
            <section id="contact">
                <span class="m-0 text-roboto font-weight-700 text-default">
                    <i data-feather="phone" class="i-blue"></i>
                    <span class="ms-1">{{SiteInformation::getSiteInformation()->no_telp}}</span>
                </span>
                <span class="m-0 text-roboto font-weight-700 text-default ms-4">
                    <i data-feather="mail" class="i-blue i-stroke-white"></i>
                    <span class="ms-1">{{SiteInformation::getSiteInformation()->email}}</span>
                </span>
            </section>
            <section id="socials">
                <a href="{{SiteInformation::getSiteInformation()->facebook_url}}" target="_blank">
                    <img class="" src="{{ asset('images/icons/Facebook.png') }}" alt="social facebook link">
                </a>
                <a href="{{SiteInformation::getSiteInformation()->twitter_url}}" target="_blank">
                    <img class="ms-3" src="{{ asset('images/icons/Twitter.png') }}" alt="social Twitter link">
                </a>
                <a href="{{SiteInformation::getSiteInformation()->instagram_url}}" target="_blank">
                    <img class="ms-3" src="{{ asset('images/icons/Youtube.png') }}" alt="social Youtube link">
                </a>
            </section>
        </section>

        <nav class="navbar navbar-expand-lg navbar-light bg-transparent ">
            <div class="container-fluid px-0 text-roboto font-weight-700 mt-4 mt-md-0 ">
                <a class="navbar-brand text-default" href="#">{{SiteInformation::getSiteInformation()->site_name}}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar">
                    <ul class="navbar-nav  mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-default" aria-current="page" href="#headline">Home</a>
                        </li>
                        <li class="nav-item ms-md-3">
                            <a class="nav-link text-default" href="#company-overview">About</a>
                        </li>
                        <li class="nav-item ms-md-3">
                            <a class="nav-link text-default" href="#our-value">Our Value</a>
                        </li>
                        <li class="nav-item ms-md-3">
                            <a class="nav-link text-default" href="#our-service">Our Service</a>
                        </li>
                        <li class="nav-item ms-md-3">
                            <a class="nav-link text-default" href="#our-experience">Our Experience</a>
                        </li>
                        <li class="nav-item ms-md-3">
                            <div id="google_translate_element"></div>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <main id="headline" class="pt-5">
            <h1 class="text-roboto text-default font-weight-900 d-flex flex-column align-items-center pt-5 animate__animated animate__fadeIn animate__slow" >
                Who We Are ?
                <hr class="mb-0 mt-2 border-yellow">
            </h1>
            <section id="image" class="d-flex justify-content-center pt-3 animate__animated animate__fadeInUp animate__delay-2s	">
                <img src="{{ asset('images/about-us-team 1.png') }}" width="850" class="shadow-none img-fluid ">
            </section>
        </main>
    </div>
</div>

{{-- About Company --}}
<div class="about-us-wrapper">
    <section id="company-overview" class="bg-default-blue">
        <div class="container-fluid">
            <div class="row">
                @foreach ($aboutUs as $about)
                <div class="col-md-6">
                    <div class=" text-white p-4 py-6 p-md-6 " data-aos="fade-up" data-aos-duration="2000">
                        <h2 class="text-roboto font-weight-700">
                            {{ $about->title }}
                            <hr class="mb-0 mt-2 border-yellow">
                        </h2>
                        <p class="mt-2 text-preline">
                            {{ $about->content }}
                        </p>
                    </div>
                </div>
                @endforeach


            </div>
        </div>

    </section>
</div>

{{-- Company Value --}}
<div class="our-value-wrapper bg-default" id="our-value">
    <div class="container py-6">
        <h2 class="text-roboto font-weight-700 text-default d-flex flex-column align-items-center mb-5">
            Our Value
            <hr class="mb-0 mt-2 border-yellow">
        </h2>
        <div class="row">
            @foreach ($ourValues as $ourValue)
            <div class="col-md-4 mt-5 mt-md-0" >
                <div class="card text-center border-0 rounded-default shadow w-100 px-4 h-100" style="width: 18rem;" data-aos="fade-up" data-aos-duration="1000"
                    @if ($loop->iteration == 2)
                        data-aos-delay="500"
                    @elseif ($loop->iteration == 3)
                        data-aos-delay="1000"
                    @endif
                    >
                    <div class="card-body py-5">
                        <img src="{{ asset('storage/'.$ourValue->icon) }}" alt="{{ $ourValue->title }} Icon" class="mb-4">
                        <h5 class="card-title text-roboto text-default">{{ $ourValue->title }}</h5>
                        <p class="card-text text-preline">
                            {{ $ourValue->content }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

{{-- Company Experience --}}
<div class="our-experience" id="our-experience">
    <div class="container py-6 "  data-aos="fade-right" data-aos-duration="1000">
        <div class="row">
            <div class="col-12 col-md-5">
                <header>
                    <h1 class="text-default text-roboto font-weight-700 mt-md-3">
                        {{ $ourExperience->title }}
                    </h1>
                </header>
                <main>
                    <p class="m-0 mt-3">
                        {{ $ourExperience->content }}
                    </p>
                </main>
            </div>
            <div class="col-12 col-md-7 mt-4 mt-md-0">
                <div class="row justify">
                    <div class="col-6 col-md-6">
                        <h1 class="d-flex align-items-center text-default text-default-yellow font-weight-700 m-0">
                            <i class="exp-icon exp-icon-project me-4"></i>
                            <span>
                                {{ $ourExperience->projects_finished }}
                                <h5 class="text-roboto text-secondary">Projects delivered</h5>
                            </span>
                        </h1>
                    </div>
                    <div class="col-6 col-md-6">
                        <h1 class="d-flex align-items-center text-default text-default-yellow font-weight-700 m-0">
                            <i class="exp-icon exp-icon-awards me-4"></i>
                            <span>
                                {{ $ourExperience->awards }}
                                <h5 class="text-roboto text-secondary">Awards & Accolades</h5>
                            </span>
                        </h1>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-6 col-md-6">
                        <h1 class="d-flex align-items-center text-default text-default-yellow font-weight-700 m-0">
                            <i class="exp-icon exp-icon-satisfied me-4"></i>
                            <span>
                                {{ $ourExperience->satisfied_customers }}
                                <h5 class="text-roboto text-secondary">Satisfied Costumers</h5>
                            </span>
                        </h1>
                    </div>
                    <div class="col-6 col-md-6">
                        <h1 class="d-flex align-items-center text-default text-default-yellow font-weight-700 m-0">
                            <i class="exp-icon exp-icon-employees me-4"></i>
                            <span>
                                {{ $ourExperience->employees }}
                                <h5 class="text-roboto text-secondary">Employees</h5>
                            </span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
