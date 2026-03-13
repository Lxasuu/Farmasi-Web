<?php include 'partials/header.php'; ?>

<main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Beasiswa</li>
                    </ol>
                </div>
            </nav>
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Beasiswa</h1>
                            <p class="mb-0"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Page Title -->

        <section id="beasiswa" class="beasiswa section">
            <div class="container" data-aos="fade-up">

                <div class="section-title text-center">
                    <h2>Program Beasiswa Prodi Teknologi Rekayasa Perangkat Lunak</h2>
                    <p><strong>100% Mahasiswa Baru Pasti Dapat Beasiswa</strong></p>
                </div>

                <div class="beasiswa-wrap">
                    <div class="beasiswa-tabs">
                        <button class="beasiswa-tab active" data-target="karyawan">Program Beasiswa Kelas
                            Karyawan</button>
                        <button class="beasiswa-tab" data-target="reguler">Program Beasiswa Kelas Reguler</button>
                    </div>

                    <!-- Karyawan -->
                    <div class="beasiswa-panel active" id="karyawan">
                        <div class="beasiswa-card">
                            <h3>Beasiswa Mitra Industri 30 – 50%</h3>
                            <p>
                                Dapatkan Beasiswa Mitra Industri dengan potongan 30–50% khusus untuk karyawan atau
                                keluarga karyawan
                                perusahaan mitra Politeknik Meta Industri Cikarang. Jika perusahaan tempat Anda bekerja
                                tidak terdaftar,
                                Anda masih dapat menghubungi humas@politeknikmeta.ac.id untuk informasi lebih lanjut.
                            </p>
                            <p>
                                Lihat daftar mitra: <a href="https://politeknikmeta.ac.id/kerjasama-mitra-industri/"
                                    target="_blank" rel="noopener">Klik di sini</a>
                            </p>
                        </div>

                        <div class="beasiswa-card">
                            <h3>Beasiswa Tes Konversi: Ubah Hasil Tes Menjadi Beasiswa!</h3>
                            <p>
                                Peroleh beasiswa hingga 100% berdasarkan hasil tes konversi saat pendaftaran.
                                Semakin baik hasil tes, semakin besar peluang beasiswa yang Anda dapatkan.
                            </p>
                        </div>

                        <div class="beasiswa-card">
                            <h3>Beasiswa Yayasan Pelayanan Kasih A&A Rachmat</h3>
                            <p>
                                Beasiswa untuk mahasiswa berprestasi dan berkepribadian unggul sesuai syarat dan
                                ketentuan yayasan (YPKAAR).
                                Manfaatkan peluang ini untuk meraih dukungan finansial dalam perjalanan pendidikan.
                            </p>
                        </div>
                    </div>

                    <!-- Reguler -->
                    <div class="beasiswa-panel" id="reguler">
                        <div class="beasiswa-card">
                            <h3>Beasiswa Mahasiswa Baru</h3>
                            <p>
                                Skema beasiswa untuk mahasiswa baru kelas reguler (contoh konten).
                                Kamu bisa isi jenis beasiswa reguler sesuai data kampus.
                            </p>
                        </div>

                        <div class="beasiswa-card">
                            <h3>Beasiswa Prestasi Akademik</h3>
                            <p>
                                Beasiswa untuk mahasiswa dengan IPK dan prestasi tertentu (contoh konten).
                            </p>
                        </div>
                    </div>

                    <div class="beasiswa-cta">
                        <a class="btn-getstarted" href="https://pmb-mip.politeknikmeta.ac.id/" target="_blank" rel="noopener">
                            Klik Link Pendaftaran Beasiswa Prodi Farmasi
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <script>
            // tab switch (pure JS, ringan)
            document.querySelectorAll('.beasiswa-tab').forEach(btn => {
                btn.addEventListener('click', () => {
                    document.querySelectorAll('.beasiswa-tab').forEach(b => b.classList.remove('active'));
                    document.querySelectorAll('.beasiswa-panel').forEach(p => p.classList.remove('active'));
                    btn.classList.add('active');
                    document.getElementById(btn.dataset.target).classList.add('active');
                });
            });
        </script>



    </main>

<?php include 'partials/footer.php'; ?>