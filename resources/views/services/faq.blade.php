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
                            <a href="/" class="gspace-2">Home</a>
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
                <div class="faq-title-container animate-box animated animate__animated" data-animate="animate__fadeInLeft">
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
                <div class="d-flex flex-column animate-box animated animate__animated" data-animate="animate__fadeInUp">
                    <div class="accordion" id="faqAccordion">

                        <!-- General FAQs -->
                        <div class="accordion-item" data-category="general">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq1">
                                    What is digital marketing?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Digital marketing is the process of promoting or advertising your business, service, or product online or through the Internet. The efforts will vary depending on the nature of the business, its objectives, and its stage in the lifecycle.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item" data-category="general">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq2">
                                    Why is it important for my business?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>An inbound marketing strategy has replaced an outbound strategy as the predominant marketing paradigm thanks to digital marketing. Consumers go online to order products because they are aware of what they want and when they want it.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item" data-category="general">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq3">
                                    Why do I need digital marketing for my business?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>These days it is insufficient to just have a website. Due to the enormous volume of traffic and users on the internet, competition has become fiece in one of the most competitive arenas. Although your online marketing presence is built upon a website, which is why it is so crucial, a website is merely a foundation.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Web Design FAQs -->
                        <div class="accordion-item" data-category="web">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq4">
                                    Why should be included on my business website?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>In general, websites should have the following page: Home Page, About Us Page, Services/Products Page, Blog, and a Contact Us Page. However, this entirely depends on the kind of business you are in.<br><br>
                                    Please don't worry if you are unsure of what should be on your website. Our team of professionals always conducts a through analysis of your company to ensure that we are adding all the necessary pages to really make your product or service stand out.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="web">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq5">
                                    What is the general cost for developing a business website?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Every single website for a business is unique. Website costs can range from $5,000 to $100,000, contingent on the project's complexity. Customized websites will fall between those that just need the bare minimum of functionality and basic information and those that require more.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="web">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq6">
                                    What tools and technology will you use to build my business website?
                                </button>
                            </h2>
                            <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>We make use of whatever equipment and technology will work best for your company. After deciding which platform is best for your company, we will design and develop your website accordingly. But in more detail, we know how to work with WordPress, Joomla, Magento, Drupal, custom PHP-based websites, and many other platforms.</p>
                                </div>
                            </div>
                        </div>

                        <!-- SEO FAQs -->
                        <div class="accordion-item" data-category="seo">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq7">
                                    What is Search Engine Optimization (SEO)?
                                </button>
                            </h2>
                            <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>The acronym for search engine optimization is SEO. The goal of search engine optimization is to make your website more visible for targeted keyword searches while simultaneously promoting it to rank well for those same keywords.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item" data-category="seo">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq8">
                                    Why is SEO so important?
                                </button>
                            </h2>
                            <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>SEO is crucial because it increases the prominence of your online presence and visibility. When we work on SEO, we are producing useful content and social evidence that directs internet visitors back to your company. You may connect with potential clients that you may not have previously been able to reach thanks to this inbound marketing strategy, which is extremely valuable. With the right SEO plan, your company can grow from zero to one hundred and establish an unstoppable online presence.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item" data-category="seo">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq9">
                                    Why do search engine rankings change so often?
                                </button>
                            </h2>
                            <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Due to search engines' ongoing efforts to enhance their functionality and give users better results, search engine rankings fluctuate frequently. As such, the factors that determine SEO ranking are ever-evolving.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Content Marketing FAQs -->
                        <div class="accordion-item" data-category="content">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq10">
                                    Why is content marketing so important?
                                </button>
                            </h2>
                            <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Due to its ability to direct visitors to your website, content marketing is crucial. You can demonstrate your expertise in your field to potential clients and perhaps even provide them with helpful products or services by producing high-quality content.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item" data-category="content">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq11">
                                    How can the content that is created be used for my business?
                                </button>
                            </h2>
                            <div id="faq11" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <div>
                                        <p>There are numerous applications for the content that is produced for your company. The following task are possible with the content:</p>
                                        <ul class="check-list">
                                            <li>Share it on Social Media</li>
                                            <li>Distribute via Email Campaign</li>
                                            <li>Post on Your Website</li>
                                            <li>Utilize for Hard Copy Marketing Materials</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item" data-category="content">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq12">
                                    Who determines what topics you will create content about?
                                </button>
                            </h2>
                            <div id="faq12" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Together, we ascertain what queries or worries your prospective clients might have and how we can address them in our content.</p>
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