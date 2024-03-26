@extends('layout.app')

<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo">
            <a href="#hero">
                <img src="img/logo.png" alt="diskominfojabar" style="width:100%; height:100%;" class="rounded">
            </a>
        </h1>


        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="#profil">Profil</a></li>
                <li><a class="nav-link scrollto" href="#layanan">Layanan</a></li>
                <li><a class="nav-link scrollto" href="#kontak">Kontak</a></li>
                <li><a class="nav-link scrollto" href="sesi/">Login</a></li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

    </div>
</header><!-- End Header -->

<section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h1>Selamat Datang di Pengajuan Kerja Praktek<span> Diskominfo Jawa Barat</span></h1>
        <h2> Diskominfo Jabar Akurat, Informatif, Cergas, Tangguh, Melayani Sepenuh Hati </h2>
        <div class="d-flex">
        </div>
    </div>
</section>

{{-- Profil --}}
<br><br>
<section id="profil" class="about section-bg">
    <div class="container" data-aos="fade-up">

        <div class="card border-0 rounded-3 shadow">
            <div class="card-body">
                <div class="row">
                    <!-- Gambar di sebelah kiri -->
                    <div class="col-md-6">
                        <img src="img/hero-bg.jpg" alt="About Us Image" class="img-fluid rounded">
                    </div>

                    <!-- Informasi About di sebelah kanan -->
                    <div class="col-md-6">
                        <div class="section-title mb-4">
                            <h2 class="pb-2 border-bottom"><span>Profil</span></h2>
                        </div>

                        <h3><span>Dinas Komunikasi dan Informatika (Diskominfo)</span></h3>

                        <p style="text-align: justify">Dinas Komunikasi dan Informatika merupakan perangkat daerah di
                            Provinsi Jawa Barat yang mempunyai tugas pokok melaksanakan urusan pemerintahan bidang
                            komunikasi,
                            informatika dan hubungan masyarakat berdasarkan azas otonomi dan pembantuan.</p>

                        <p style="text-align: justify">Dinas Komunikasi dan Informatika (Diskominfo) Provinsi Jawa Barat
                            bertugas melaksanakan urusan pemerintahan di bidang komunikasi, informatika, dan hubungan
                            masyarakat. Awalnya bernama BAPASITELDA, Diskominfo lahir dari transformasi berdasarkan
                            Perda Nomor 21 Tahun 2008.</p>

                        <p style="text-align: justify">Berlokasi di Jalan Tamansari No. 55, Bandung, Diskominfo Prov.
                            Jabar memiliki peran strategis dalam mencapai visi Jawa Barat sebagai "Digital Province."
                            Transformasinya mencakup perluasan cakupan, dari aspek teknis hingga kebijakan, untuk
                            mencapai keunggulan dalam inovasi dan kolaborasi di era digital.</p>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<br><br>

<section id="layanan" class="layanan section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title mb-4">
            <h2 class="pb-2 border-bottom"><span>Layanan Kami</span></h2>
        </div>

        <div class="row">
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
                data-aos-delay="100">

                <p style="text-align: justify">Layanan Kerja Praktek adalah platform yang dirancang untuk
                    memberikan kemudahan kepada mahasiswa atau siswa Sekolah Menengah Kejuruan (SMK) dalam mengajukan
                    dan mengelola proses kerja praktek secara online. Sebelum anda ingin memulai Kerja Praktek, terdapat
                    beberapa persyaratan harus dipenuhi:
                </p>
                <ul>
                    <li>
                        <span class="material-symbols-outlined" style="margin-right: 8px;">
                            description
                        </span>
                        <div>
                            <h5>Surat Rekomendasi dari Badan Kesatuan Bangsa Dan Politik (Bakesbangpol) Jawa Barat</h5>
                        </div>
                    </li>
                    <li>
                        <span class="material-symbols-outlined" style="margin-right: 8px;">
                            description
                        </span>
                        <div>
                            <h5>Surat Keterangan dari Universitas / Sekolah</h5>
                        </div>
                    </li>
                </ul>

                <p>Jika anda ingin mengikuti Kerja Praktek, silakan masuk ke halaman form dibawah.</p>
                <a href="pengajuan/"><button class="btn btn-primary">Form Kerja Praktek</button></a>
            </div>

            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <img src="/img/home.jpg" class="img-fluid rounded" alt="">
            </div>


        </div>

    </div>
</section>

<br><br>



{{-- Kontak --}}

<section id="kontak" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="card border-0 rounded-3 shadow">
            <div class="card-body">
                <div class="section-title mb-4">
                    <h2 class="pb-2 border-bottom"><span>Kontak Kami</span></h2>

                </div>


                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-6">
                        <div id="google-map" class="rounded">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14528.622759702574!2d107.5879232320002!3d-6.903294111865935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e65aa2299cc7%3A0x9f2fb9d404546928!2sDinas%20Komunikasi%20dan%20Informatika%20Provinsi%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1706591591378!5m2!1sid!2sid"
                                width="600" height="450" style="border:0; border-radius: 15px;" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="info-box mb-4 rounded">
                                    <span class="material-symbols-outlined">location_on</span>
                                    <h3>Alamat</h3>
                                    <p>Jl. Tamansari No.55, Lb. Siliwangi, Kecamatan Coblong, Kota Bandung, Jawa Barat
                                        40132
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="info-box  mb-4 rounded">
                                    <span class="material-symbols-outlined">mail</span>
                                    <h3>Email Us</h3>
                                    <p>diskominfo@jabarprov.go.id</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="info-box mb-4 rounded">
                                    <span class="material-symbols-outlined">call</span>
                                    <h3>Hubungi Kami</h3>
                                    <p>+222502898</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="info-box mb-4 rounded">
                                    <h3>Media Sosial</h3>
                                    <a href="https://www.facebook.com/Diskominfo-Jabar-100064438461544/"
                                        target="_blank">
                                        <i class="bi bi-facebook"></i>
                                    </a>
                                    <a href="https://twitter.com/diskominfojabar" target="_blank">
                                        <i class="bi bi-twitter"></i>
                                    </a>
                                    <a href="https://www.instagram.com/diskominfojabar/" target="_blank">
                                        <i class="bi bi-instagram"></i>
                                    </a>
                                    <a href="https://www.youtube.com/@diskominfojabar6370" target="_blank">
                                        <i class="bi bi-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<br><br>
<footer id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="text-center">
                    &copy; 2024 Marwan Hakim. Universitas Pasundan
                </p>
            </div>
        </div>
    </div>
</footer>
