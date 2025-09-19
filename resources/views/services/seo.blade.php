@extends('master')

@section('title','SEO Services | ' . config('app.name'))
@section('contents')
<!-- Section Banner -->
<div class="section-banner">
    <div class="banner-layout-wrapper">
        <div class="banner-layout">
            <div class="d-flex flex-column text-center align-items-center gspace-2">
                <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">Services - SEO</h2>
                <nav class="breadcrumb">
                    <a href="/" class="gspace-2">Home</a>
                    <span class="separator-link">/</span>
                    <p class="current-page">SEO</p>
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
                    <span>SEO Service</span>
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
                                            <i class="fas fa-key feature-icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-title">
                                    <h4>Keyword Optimization</h4>
                                </div>
                            </div>
                            <p>
                                Effectively incorporate relevant keywords into your content for elevated search engine visibility.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                            <div class="d-flex flex-row gspace-2 gspace-md-3 align-items-center">
                                <div>
                                    <div class="service-icon-wrapper">
                                        <div class="service-icon">
                                            <i class="fas fa-chart-line feature-icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-title">
                                    <h4>Analytics Integration</h4>
                                </div>
                            </div>
                            <p>
                                Monitor and assess SEO performance with analytics tools.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-service animate-box animated fast animate__animated" data-animate="animate__fadeInLeft">
                            <div class="d-flex flex-row gspace-2 gspace-md-3 align-items-center">
                                <div>
                                    <div class="service-icon-wrapper">
                                        <div class="service-icon">
                                            <i class="fas fa-map-marker-alt feature-icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-title">
                                    <h4>Local SEO</h4>
                                </div>
                            </div>
                            <p>
                                Reach specific geographic audience by optimizing for local searches.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-service animate-box animated slow animate__animated" data-animate="animate__fadeInLeft">
                            <div class="d-flex flex-row gspace-2 gspace-md-3 align-items-center">
                                <div>
                                    <div class="service-icon-wrapper">
                                        <div class="service-icon">
                                            <i class="fas fa-link feature-icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-title">
                                    <h4>Backlink Building</h4>
                                </div>
                            </div>
                            <p>
                                Build solid backlink profile to boost domain authority.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-service animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                            <div class="d-flex flex-row gspace-2 gspace-md-3 align-items-center">
                                <div>
                                    <div class="service-icon-wrapper">
                                        <div class="service-icon">
                                            <i class="fas fa-cogs feature-icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-title">
                                    <h4>Technical SEO</h4>
                                </div>
                            </div>
                            <p>
                                Optimize meta tags, website structure, and other technical elements for search engines.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-service animate-box animated fast animate__animated" data-animate="animate__fadeInLeft">
                            <div class="d-flex flex-row gspace-2 gspace-md-3 align-items-center">
                                <div>
                                    <div class="service-icon-wrapper">
                                        <div class="service-icon">
                                            <i class="fas fa-file-alt feature-icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-title">
                                    <h4>Quality Content</h4>
                                </div>
                            </div>
                            <p>
                                Ensure that users receives valuable and informative content.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
