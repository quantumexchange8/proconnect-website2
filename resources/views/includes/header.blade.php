<div class="navbar-wrapper">
    <nav class="navbar navbar-expand-xl">

        <div class="navbar-container">
            <div class="logo-container">
                <a class="navbar-brand" href="/"><img src="{{ asset('assets/image/Proconnect-logo-horizontal-light.png') }}" class="site-logo img-fluid"></a>
            </div>
            <button class="navbar-toggler nav-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars "></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/terms">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Services <i class="fa-solid fa-angle-down accent-color"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/services/web-design">Web Design</a></li>
                            <li><a class="dropdown-item" href="/services/seo">SEO</a></li>
                            <li><a class="dropdown-item" href="/services/data">Data</a></li>
                            <li><a class="dropdown-item" href="/services/content">Content</a></li>
                            <li><a class="dropdown-item" href="/services/formation">Formation</a></li>
                            <li><a class="dropdown-item" href="/services/media">Media</a></li>
                            <li><a class="dropdown-item" href="/services/social">Social</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/services/faq">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/terms">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="navbar-action-container">
                <div class="navbar-action-button">
                    <button id="themeSwitch" class="themeswitch" aria-label="Toggle Theme">
                        <i id="themeIcon" class="fas fa-moon"></i>
                    </button>                      
                </div>
            </div>
        </div>
    </nav>
</div>
    <!-- Section Content Edit -->
    <aside>
        <div id="edit-sidebar"></div>
    </aside>

    <!-- Section Search -->
    <div id="search-form-container"></div>
    
    <!-- Sidebar -->
<aside>
        <div id="sidebar"></div>
        <div>
    <div class="content-overlay">
        <div class="content-edit-sidebar">
            <div class="sidebar-header">
                <div></div>
                <div class="close-btn-second">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="content">
                <span>Click on the Edit Content button to edit/add the content.</span>
            </div>
        </div>
    </div>
</div>

<div>
    <div class="sidebar-overlay"></div>
    <div class="sidebar">
        <div class="sidebar-header">
            <div class="logo">
                <img src="{{ asset('assets/image/Proconnect-logo-horizontal-light.png') }}" class="site-logo img-fluid logo" alt="Logo">
            </div>
            <button class="close-btn"><span>X</span></button>
        </div>
        <ul class="menu">
            <li><a href="/">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li class="sidebar-dropdown">
                <div class="dropdown-header">
                    <a>Services </a>
                    <button class="sidebar-dropdown-btn"><i class="fa-solid fa-angle-down"></i></button>
                </div>
                <ul class="sidebar-dropdown-menu">
                    <li><a href="/services/web-design">Web Design</a></li>
                    <li><a href="/services/seo">SEO</a></li>
                    <li><a href="/services/data">Data</a></li>
                    <li><a href="/services/content">Content</a></li>
                    <li><a href="/services/formation">Formation</a></li>
                    <li><a href="/services/media">Media</a></li>
                    <li><a href="/services/social">Social</a></li>
                </ul>
            </li>  
            <li><a href="/services/faq">FAQ</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </div>
</div>
    </aside>