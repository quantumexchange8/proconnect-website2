@extends('master')

@section('title','Content Services | ' . config('app.name'))
@section('contents')
<!-- Section Banner -->
<div class="section-banner">
    <div class="banner-layout-wrapper">
        <div class="banner-layout">
            <div class="d-flex flex-column text-center align-items-center gspace-2">
                <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">Services - Content</h2>
                <nav class="breadcrumb">
                    <a href="/" class="gspace-2">Home</a>
                    <span class="separator-link">/</span>
                    <p class="current-page">Content</p>
                </nav>    
            </div>
            <div class="spacer"></div>
        </div>
    </div>
</div>

<!-- Section Service -->
<div class="section">
    <div class="hero-container">
        <div class="d-flex flex-column justify-content-center text-center gspace-5">
            <div class="d-flex flex-column justify-content-center text-center gspace-2">
                <div class="sub-heading align-self-center animate-box animated animate__animated" data-animate="animate__fadeInDown">
                    <i class="fa-regular fa-circle-dot"></i>
                    <span>Content Service</span>
                </div>
                <h2 class="title-heading heading-container heading-container-medium animate-box animated animate__animated" data-animate="animate__fadeInDown">What We Offer</h2>
            </div>
            <div class="card-service-wrapper">
                <div class="row row-cols-xl-3 row-cols-md-2 row-cols-1 grid-spacer-2">
                    <div class="col">
                        <div class="card card-service animate-box animated slow animate__animated" data-animate="animate__fadeInLeft">
                            <div class="d-flex flex-row gspace-2 gspace-md-3 align-items-center">
                                <div>
                                    <div class="service-icon-wrapper">
                                        <div class="service-icon">
                                            <i class="fas fa-share-alt feature-icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-title">
                                    <h4>Content Distribution</h4>
                                </div>
                            </div>
                            <p>
                                Efficiently and easily distribute content across platforms to achieve best extensive reach.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                            <div class="d-flex flex-row gspace-2 gspace-md-3 align-items-center">
                                <div>
                                    <div class="service-icon-wrapper">
                                        <div class="service-icon">
                                            <i class="fas fa-photo-video feature-icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-title">
                                    <h4>Multimedia Content</h4>
                                </div>
                            </div>
                            <p>
                                Incorporate a variety of content types, such as pictures, videos, and infographics.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-service animate-box animated fast animate__animated" data-animate="animate__fadeInLeft">
                            <div class="d-flex flex-row gspace-2 gspace-md-3 align-items-center">
                                <div>
                                    <div class="service-icon-wrapper">
                                        <div class="service-icon">
                                            <i class="fas fa-comments feature-icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-title">
                                    <h4>Engagement Strategies</h4>
                                </div>
                            </div>
                            <p>
                                Deliver content that attracts and encourages user interaction and sharing.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-service animate-box animated slow animate__animated" data-animate="animate__fadeInLeft">
                            <div class="d-flex flex-row gspace-2 gspace-md-3 align-items-center">
                                <div>
                                    <div class="service-icon-wrapper">
                                        <div class="service-icon">
                                            <i class="fas fa-calendar-alt feature-icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-title">
                                    <h4>Content Calendar</h4>
                                </div>
                            </div>
                            <p>
                                Manage planning and organizing content creation efficiently with content calender.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                            <div class="d-flex flex-row gspace-2 gspace-md-3 align-items-center">
                                <div>
                                    <div class="service-icon-wrapper">
                                        <div class="service-icon">
                                            <i class="fas fa-book-open feature-icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-title">
                                    <h4>Storytelling</h4>
                                </div>
                            </div>
                            <p>
                                Construct compelling content narratives to capture and connect with the users.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
