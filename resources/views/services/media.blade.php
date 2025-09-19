@extends("master")

@section('title','Media Services | ' . config('app.name'))
@section('contents')
<!-- Section Banner -->
<div class="section-banner">
    <div class="banner-layout-wrapper">
        <div class="banner-layout">
            <div class="d-flex flex-column text-center align-items-center gspace-2">
                <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">Services - Media</h2>
                <nav class="breadcrumb">
                    <a href="/" class="gspace-2">Home</a>
                    <span class="separator-link">/</span>
                    <p class="current-page">Media</p>
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
                    <span>Media Service</span>
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
                                            <i class="fas fa-broadcast-tower feature-icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-title">
                                    <h4>Strategic Media Selection</h4>
                                </div>
                            </div>
                            <p>
                                Select platforms that are in line with the campaign's objectives and target audience.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                            <div class="d-flex flex-row gspace-2 gspace-md-3 align-items-center">
                                <div>
                                    <div class="service-icon-wrapper">
                                        <div class="service-icon">
                                            <i class="fas fa-user-tag feature-icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-title">
                                    <h4>Demographic Targeting</h4>
                                </div>
                            </div>
                            <p>
                                Utilize demographic data to target ads more precisely and achieve better campaign outcomes.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-service animate-box animated fast animate__animated" data-animate="animate__fadeInLeft">
                            <div class="d-flex flex-row gspace-2 gspace-md-3 align-items-center">
                                <div>
                                    <div class="service-icon-wrapper">
                                        <div class="service-icon">
                                            <i class="fas fa-paint-brush feature-icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-title">
                                    <h4>Ad Creatives</h4>
                                </div>
                            </div>
                            <p>
                                Create powerful and captivating creatives for each platform.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-service animate-box animated slow animate__animated" data-animate="animate__fadeInLeft">
                            <div class="d-flex flex-row gspace-2 gspace-md-3 align-items-center">
                                <div>
                                    <div class="service-icon-wrapper">
                                        <div class="service-icon">
                                            <i class="fas fa-tachometer-alt feature-icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-title">
                                    <h4>Performance Monitoring </h4>
                                </div>
                            </div>
                            <p>
                                Effectively track campaign results and make real-time strategy adjustments.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection