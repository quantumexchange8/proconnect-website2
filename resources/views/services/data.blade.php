@extends('master')

@section('title','Data Services | ' . config('app.name'))
@section('contents')
<!-- Section Banner -->
<div class="section-banner">
    <div class="banner-layout-wrapper">
        <div class="banner-layout">
            <div class="d-flex flex-column text-center align-items-center gspace-2">
                <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">Services - Data</h2>
                <nav class="breadcrumb">
                    <a href="/" class="gspace-2">Home</a>
                    <span class="separator-link">/</span>
                    <p class="current-page">Data</p>
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
                    <span>Data Service</span>
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
                                            <i class="fas fa-chart-line feature-icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-title">
                                    <h4>Predictive Analysis</h4>
                                </div>
                            </div>
                            <p>
                                Utilize data to forecast trends and inform future tactics through predictive analysis.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                            <div class="d-flex flex-row gspace-2 gspace-md-3 align-items-center">
                                <div>
                                    <div class="service-icon-wrapper">
                                        <div class="service-icon">
                                            <i class="fas fa-file-alt feature-icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-title">
                                    <h4>Customized Reporting</h4>
                                </div>
                            </div>
                            <p>
                                Deliver reports based on the objectives and preferences of your clients.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-service animate-box animated fast animate__animated" data-animate="animate__fadeInLeft">
                            <div class="d-flex flex-row gspace-2 gspace-md-3 align-items-center">
                                <div>
                                    <div class="service-icon-wrapper">
                                        <div class="service-icon">
                                            <i class="fas fa-shield-alt feature-icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-title">
                                    <h4>Data Security</h4>
                                </div>
                            </div>
                            <p>
                                Ensure best adherence of data security and compliance.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-service animate-box animated slow animate__animated" data-animate="animate__fadeInLeft">
                            <div class="d-flex flex-row gspace-2 gspace-md-3 align-items-center">
                                <div>
                                    <div class="service-icon-wrapper">
                                        <div class="service-icon">
                                            <i class="fas fa-object-group feature-icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-title">
                                    <h4>Segmentation</h4>
                                </div>
                            </div>
                            <p>
                                Segment data to study and comprehend the preferences and behaviours of audiences. 
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                            <div class="d-flex flex-row gspace-2 gspace-md-3 align-items-center">
                                <div>
                                    <div class="service-icon-wrapper">
                                        <div class="service-icon">
                                            <i class="fas fa-bullseye feature-icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-title">
                                    <h4>User Conversion Tracking</h4>
                                </div>
                            </div>
                            <p>
                                Monitor and assess user conversions with efficiency for optimization.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-service animate-box animated fast animate__animated" data-animate="animate__fadeInLeft">
                            <div class="d-flex flex-row gspace-2 gspace-md-3 align-items-center">
                                <div>
                                    <div class="service-icon-wrapper">
                                        <div class="service-icon">
                                            <i class="fas fa-search-dollar feature-icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-title">
                                    <h4>Competitor Analysis</h4>
                                </div>
                            </div>
                            <p>
                                Analyze and study data from competitors to identify gaps and opportunities in the market.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
