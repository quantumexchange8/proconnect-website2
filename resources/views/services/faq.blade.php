@extends('master')

@section('title', 'FAQ | ' . config('app.name'))
@section('contents')
<!-- Section Banner -->
        <div class="section-banner">
            <div class="banner-layout-wrapper">
                <div class="banner-layout">
                    <div class="d-flex flex-column text-center align-items-center gspace-2">
                        <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">FAQ</h2>
                        <nav class="breadcrumb">
                            <a href="./index.html" class="gspace-2">Home</a>
                            <span class="separator-link">/</span>
                            <p class="current-page">FAQ</p>
                        </nav>    
                    </div>
                    <div class="spacer"></div>
                </div>
            </div>
        </div>

        <!-- Section FAQs -->
        <div class="section">
            <div class="hero-container">
                <div class="row row-cols-xl-2 row-cols-1 grid-spacer-5">
                    <div class="col col-xl-5">
                        <div class="faq-title-container">
                            <div class="sub-heading">
                                <i class="fa-regular fa-circle-dot"></i>
                                <span>Frequently Asked Questions</span>
                            </div>
                            <h2 class="title-heading">Got Questions? We've Got Answers.</h2>
                        </div>
                        <button>General Digital Marketing</button>
                    </div>
                    <div class="col col-xl-7">
                        <div class="d-flex flex-column">
                            <div class="accordion" id="faqAccordion1">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                                            What services does Marko offer?    
                                        </button>
                                    </h2>
                                    <div id="faq1" class="accordion-collapse collapse show"
                                        data-bs-parent="#faqAccordion1">
                                        <div class="accordion-body">
                                            <div class="accordion-spacer"></div>
                                            <p>
                                                We specialize in digital marketing, including branding, social media management, content strategy, paid ads, and analytics-driven campaigns.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="true"
                                            aria-controls="faq2">
                                            How long does it take to see results?
                                        </button>
                                    </h2>
                                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
                                        <div class="accordion-body">
                                            <div class="accordion-spacer"></div>
                                            <p>
                                                While some channels like paid ads offer quicker results, most strategies (like content and SEO) show steady growth within 3-6 months.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false"
                                            aria-controls="faq3">
                                            Do you work with businesses of all sizes?
                                        </button>
                                    </h2>
                                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
                                        <div class="accordion-body">
                                            <div class="accordion-spacer"></div>
                                            <p>
                                                Yes! We collaborate with startups, SMEs, and enterprise-level companies across various industries.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false"
                                            aria-controls="faq4">
                                            Can I request a custom digital marketing package?
                                        </button>
                                    </h2>
                                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
                                        <div class="accordion-body">
                                            <div class="accordion-spacer"></div>
                                            <p>
                                                Absolutely. We tailor our services to fit your business goals, budget, and timeline
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false"
                                            aria-controls="faq5">
                                            How do I know which service is right for me?
                                        </button>
                                    </h2>
                                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
                                        <div class="accordion-body">
                                            <div class="accordion-spacer"></div>
                                            <p>
                                                During our initial consultation, we'll assess your current strategy and recommend the best path forward based on data and goals.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false"
                                            aria-controls="faq6">
                                            Do you provide monthly performance reports?
                                        </button>
                                    </h2>
                                    <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
                                        <div class="accordion-body">
                                            <div class="accordion-spacer"></div>
                                            <p>
                                                Yes. Every month, you'll receive a clear and comprehensive report outlining progress, key metrics, and next steps.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection