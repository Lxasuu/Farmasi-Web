<?php include 'partials/header.php'; ?>

<main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Karya Mahasiswa</li>
                    </ol>
                </div>
            </nav>
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Karya Mahasiswa</h1>
                            <p class="mb-0">Showcase hasil kreativitas dan inovasi mahasiswa TRPL dalam membangun solusi
                                teknologi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Page Title -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">
            <div class="container">
                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">Semua</li>
                        <li data-filter=".filter-web">Web App</li>
                        <li data-filter=".filter-mobile">Mobile App</li>
                        <li data-filter=".filter-ai">AI & IoT</li>
                    </ul><!-- End Portfolio Filters -->

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sistem Informasi Akademik</h4>
                                    <p>Web App - Laravel & React</p>
                                    <a href="assets/img/portfolio/app-1.jpg" title="Sistem Informasi Akademik"
                                        data-gallery="portfolio-gallery-web" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-mobile">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>E-Commerce Mobile</h4>
                                    <p>Mobile App - Flutter</p>
                                    <a href="assets/img/portfolio/product-1.jpg" title="E-Commerce Mobile"
                                        data-gallery="portfolio-gallery-mobile" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-ai">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Smart Agriculture IoT</h4>
                                    <p>AI & IoT - Python & Arduino</p>
                                    <a href="assets/img/portfolio/branding-1.jpg" title="Smart Agriculture IoT"
                                        data-gallery="portfolio-gallery-ai" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->
                    </div><!-- End Portfolio Container -->
                </div>
            </div>
        </section><!-- /Portfolio Section -->

    </main>

    <?php include 'partials/footer.php'; ?>