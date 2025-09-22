@extends('master')

@section('title','About Us | ' . config('app.name'))
@section('contents')
<!-- Section Banner -->
<div class="section-banner">
    <div class="banner-layout-wrapper">
        <div class="banner-layout">
            <div class="d-flex flex-column text-center align-items-center gspace-2">
                <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">About Proconnect Solution</h2>
                <nav class="breadcrumb">
                    <a href="/" class="gspace-2">Home</a>
                    <span class="separator-link">/</span>
                    <p class="current-page">About Us</p>
                </nav>    
            </div>
            <div class="spacer"></div>
        </div>
    </div>
</div>

<!-- Section Expertise -->
<div class="section">
    <div class="hero-container">
        <div class="d-flex flex-column flex-xl-row gspace-5">
            <div class="expertise-img-layout">
                <div class="image-container expertise-img">
                    <img src="{{ asset('assets/image/dummy-img-600x400.jpg') }}" alt="Expertise Image" class="img-fluid  animate-box animated animate__animated" data-animate="animate__fadeInUp">
                    <div class="expertise-layout">
                        <div class="d-flex flex-column">
                            <div class="card-expertise-wrapper">
                                <div class="card card-expertise  animate-box animated animate__animated" data-animate="animate__fadeInDown">
                                    <h4>Take the Next Step in Digital Success</h4>
                                    <p>Partner with us to craft strategies that elevate your brand and fuel long-term growth.</p>
                                    <div class="d-flex align-items-center flex-row gspace-2 expertise-link">
                                        <a href="/services/contactus">Get Free Consultation</a>
                                        <i class="fa-solid fa-circle-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="expertise-spacer"></div>
                        </div>
                        <div class="expertise-spacer"></div>
                    </div>
                </div>
            </div>
            <div class="expertise-title">
                <div class="sub-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">
                    <i class="fa-regular fa-circle-dot"></i>
                    <span>About Our Company</span>
                </div>
                <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">Extend Your Reach to Your Target Customers with <span style="proconnect">Proconnect</span></h2>
                <p>An innovator and traiblazer of digital marketing. We craft and deliver engaging web experiences, generate organic web traffic through advanced and technical SEO, and leverage data for guided decisions. </p>
                <p>Join us for an innovative and successful journey into the digital era, from design solutions to strategic brand formation.</p>
                <div class="card card-expertise card-expertise-counter animate-box animated animate__animated" data-animate="animate__fadeInUp">
                    <div class="d-flex flex-row gspace-2 align-items-center mb-4">
                        <h5>Grow website with Proconnect</h5>
                    </div>
                    <ul class="check-list row">
                        <li class="col-md-6">Ignite Your Presence</li>
                        <li class="col-md-6">Dominate Search Engines</li>
                        <li class="col-md-6">Data-Driven Excellence</li>
                        <li class="col-md-6">Compelling Content Creation</li>
                        <li class="col-md-6">Form a Robust Foundation</li>
                        <li class="col-md-6">Cohesive Design Solutions</li>
                        <li class="col-md-6">Strategic Media Presence</li>
                        <li class="col-md-6">Socialize with Purpose</li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section">
    @include('contents.partner')
</div>

<!-- Four Circle Percentages -->
<div class="section-wrapper-digital-process">
    <div class="section digital-process-banner">
        <div class="hero-container">
            <div class="sub-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">
                            <i class="fa-regular fa-circle-dot"></i>
                            <span>Why Choose Us</span>
                        </div>
                        <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">Unlock Revenue Growth for Your Business</h2>
            <div class="digital-process-content mt-3">
                <div class="digital-process-steps-wrapper">
                    <div class="digital-process-steps">
                        <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1">
                            <div class="col">
                                <div class="digital-process-step animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                    <div class="d-flex card-satisfaction align-items-center flex-column">
                                        <div class="percent-circle" data-counter="88">
                                            <svg>
                                            <circle class="bg" cx="80" cy="80" r="70"></circle>
                                            <circle class="progress" cx="80" cy="80" r="70"></circle>
                                            </svg>
                                            <div class="percent-text">0%</div>
                                        </div>
                                        <h6>SEO Excellence: Driving Organic Growth</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-md-row flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInDown">
                                    <div class="step-spacer"></div>
                                    <div class="digital-process-step">
                                        <div class="d-flex card-satisfaction align-items-center flex-column">
                                        <div class="percent-circle" data-counter="91">
                                            <svg>
                                            <circle class="bg" cx="80" cy="80" r="70"></circle>
                                            <circle class="progress" cx="80" cy="80" r="70"></circle>
                                            </svg>
                                            <div class="percent-text">0%</div>
                                        </div>
                                        <h6>Data-Driven Insights: Unleashing Business Potential</h6>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-md-row flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                    <div class="step-spacer"></div>     
                                    <div class="digital-process-step">
                                        <div class="d-flex card-satisfaction align-items-center flex-column">
                                        <div class="percent-circle" data-counter="95">
                                            <svg>
                                            <circle class="bg" cx="80" cy="80" r="70"></circle>
                                            <circle class="progress" cx="80" cy="80" r="70"></circle>
                                            </svg>
                                            <div class="percent-text">0%</div>
                                        </div>
                                        <h6>Mobile Optimization Mastery: Crafting Seamless Experiences</h6>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-md-row flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInDown">
                                    <div class="step-spacer"></div>
                                    <div class="digital-process-step">
                                        <div class="d-flex card-satisfaction align-items-center flex-column">
                                        <div class="percent-circle" data-counter="94">
                                            <svg>
                                            <circle class="bg" cx="80" cy="80" r="70"></circle>
                                            <circle class="progress" cx="80" cy="80" r="70"></circle>
                                            </svg>
                                            <div class="percent-text">0%</div>
                                        </div>
                                        <h6>Strategic Content Impact: Web Presence Revolution</h6>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="spacer"></div>
</div>

<!-- Mission and Vision -->
<div class="section">
    <div class="hero-container">
        <div class="team-wrapper">
            <div class="card team-layout">
                <div class="d-flex flex-column align-items-center gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                    <div class="sub-heading">
                        <i class="fa-regular fa-circle-dot"></i>
                        <span>Our Mission and Vision</span>
                    </div>
                    <h2 class="title-heading">Our Mission & Vision</h2>
                </div>
                <div class="row row-cols-md-2 row-cols-1 g-4 d-flex">
                    <div class="col">
                        <div class="team-card">
                            <div class="team-front gradient-bg">
                                <h3>Mission</h3>
                            </div>
                            <div class="team-back gradient-bg-alt">
                                <h4 class="title-heading">Our Mission</h4>
                                <div class="spacer"></div><br>
                                <ul class="dot-list">
                                    <li>To create custom solutions to take brands to new heights</li>
                                    <li>To provide state-of-the-art web design.</li>
                                    <li>To enable our clients to thrive in the constantly changing digital ecosystem.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="team-card">
                        <div class="team-front gradient-bg">
                            <h3>Vision</h3>
                        </div>
                        <div class="team-back gradient-bg-alt">
                            <h4 class="title-heading">Our Vision</h4>
                            <div class="spacer"></div><br>
                            <ul class="dot-list">
                                    <li><b>Encouraging Digital Triumphs:</b> <br>We envision a digital world where brands resonate, businesses flourish, and online experiences redefine success. This is where innovation meets excellence.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="spacer"></div>
            </div>
        </div>
    </div>
</div>
<!-- services --> 
<section class="services">
    <h2 class="services-title">Our Services</h2>
    <div class="spacer"></div>
    <div class="services-container">
        <a href="/services/web-design"><div class="service">Web Design</div></a>
        <a href="/services/seo"><div class="service">SEO</div></a>
        <a href="/services/data"><div class="service">Data</div></a>
        <a href="/services/content"><div class="service">Content</div></a>
        <a href="/services/formation"><div class="service">Formation</div></a>
        <a href="/services/media"><div class="service">Media</div></a>
        <a href="/services/social"><div class="service">Social</div></a>
    </div>
</section>

@endsection