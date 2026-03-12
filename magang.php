<?php include 'partials/header.php'; ?>

<main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Penempatan Magang</li>
                    </ol>
                </div>
            </nav>
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Penempatan Magang</h1>
                            <p class="mb-0">Daftar mahasiswa dan lokasi penempatan magang.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Page Title -->

        <section id="penempatan-magang" class="magang section">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Penempatan Magang</h2>
                    <p>Daftar mahasiswa dan lokasi penempatan magang</p>
                </div>

                <div class="magang-toolbar">
                    <input id="magangSearch" class="magang-search" type="search"
                        placeholder="Cari perusahaan / mahasiswa / NIM..." />
                    <span id="magangCount" class="magang-count"></span>
                </div>

                <div class="accordion magang-accordion" id="magangAccordion"></div>
            </div>
        </section>

        <script src="assets/js/magang.js"></script>


    </main>

    <?php include 'partials/footer.php'; ?>