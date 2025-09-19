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

                    <!-- LEFT SIDE BUTTONS -->
            <div class="col col-xl-5">
                <div class="faq-title-container">
                    <div class="sub-heading">
                        <i class="fa-regular fa-circle-dot"></i>
                        <span>Frequently Asked Questions</span>
                    </div>
                    <h2 class="title-heading">Got Questions? We've Got Answers.</h2>
                    
                    <div class="mt-4">
                        <a href="#" class="btn btn-accent faq-btn" data-category="general">
                            <div class="btn-title"><span>General Digital Marketing</span></div>
                            <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                        </a>
                    </div>
                    <div class="mt-4">
                        <a href="#" class="btn btn-accent faq-btn" data-category="web">
                            <div class="btn-title"><span>Web Design</span></div>
                            <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                        </a>
                    </div>
                    <div class="mt-4">
                        <a href="#" class="btn btn-accent faq-btn" data-category="seo">
                            <div class="btn-title"><span>Search Engine Optimization (SEO)</span></div>
                            <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                        </a>
                    </div>
                    <div class="mt-4">
                        <a href="#" class="btn btn-accent faq-btn" data-category="content">
                            <div class="btn-title"><span>Content Marketing</span></div>
                            <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- RIGHT SIDE FAQ ACCORDION -->
            <div class="col col-xl-7">
                <div class="d-flex flex-column">
                    <div class="accordion" id="faqAccordion">

                        <!-- General FAQs -->
                        <div class="accordion-item" data-category="general">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq1">
                                    What is digital marketing?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    Digital marketing is the process of promoting or advertising your business, service, or product online or through the Internet. The efforts will vary depending on the nature of the business, its objectives, and its stage in the lifecycle.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item" data-category="general">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq2">
                                    How long does it take to see results?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    While some channels like paid ads offer quicker results, most strategies (like content and SEO) show steady growth within 3–6 months.
                                </div>
                            </div>
                        </div>

                        <!-- Web Design FAQs -->
                        <div class="accordion-item" data-category="web">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq3">
                                    Do you build responsive websites?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Yes! We design mobile-friendly, responsive websites optimized for performance and user experience.
                                </div>
                            </div>
                        </div>

                        <!-- SEO FAQs -->
                        <div class="accordion-item" data-category="seo">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq4">
                                    How do you improve search rankings?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    We use white-hat SEO strategies including keyword research, technical optimization, backlinks, and content improvement.
                                </div>
                            </div>
                        </div>

                        <!-- Content Marketing FAQs -->
                        <div class="accordion-item" data-category="content">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq5">
                                    Do you provide content strategy?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Absolutely! We create tailored content strategies that align with your brand voice and target audience.
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