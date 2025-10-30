<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNPRI - Universitas Prima Indonesia</title>
    <link rel="shortcut icon" href="img/logounpri.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Hero Section dengan Carousel -->
    <section class="hero-section">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="img/banner/1_fix.png" class="d-block w-100" alt="Universitas Prima Indonesia">
                    <div class="overlay"></div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="img/banner/2.png" class="d-block w-100" alt="Universitas Prima Indonesia">
                    <div class="overlay"></div>
                </div>
                <div class="carousel-item">
                    <img src="img/banner/3.png" class="d-block w-100" alt="Universitas Prima Indonesia">
                    <div class="overlay"></div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Strip Info Resmi UNPRI (seperti di website asli) -->
    <!-- <section class="unpri-official-strip">
        <div class="container py-2 text-center">
            <div class="official-text">
                <span>UNIVERSITAS PRIMA INDONESIA</span>
                <span class="bullet">•</span>
                <span>IZIN MENDIKNAS RI NO. 151/D/O/2005</span>
                <span class="bullet">•</span>
                <span>TERAKREDITASI UNGGUL BAN-PT</span>
                <span class="bullet">•</span>
                <span>STATUS SAMA DENGAN PERGURUAN TINGGI NEGERI</span>
            </div>
        </div>
    </section> -->

    <!-- Jelajahi Universitas -->
    <div class="full-width-image">
        <img src="img/univ.png" alt="Universitas" class="w-100" style="height: auto; display: block;">
    </div>

    <!-- Rekognisi Universitas -->
    <div class="image-with-carousel">
        <img src="img/REKOKNISI UNIVERSITAS (1900X570).png" alt="Rekognisi Universitas" class="background-img">
        <div class="carousel-overlay">
            <div id="rekognisiCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="logo-row d-flex justify-content-center align-items-center flex-nowrap">
                            <img src="img/rekognisi/banpt.png" class="logo-item" alt="BAN-PT">
                            <img src="img/rekognisi/unirank.png" class="logo-item" alt="Unirank">
                            <img src="img/rekognisi/logoperpusnas.png" class="logo-item" alt="Perpustakaan Nasional">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="logo-row d-flex justify-content-center align-items-center flex-nowrap">
                            <img src="img/rekognisi/terakreditas.png" class="logo-item" alt="Teraktreditasi Unggul">
                            <img src="img/rekognisi/lamkes1.png" class="logo-item" alt="Lamkes">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Judul Utama -->
    <div class="main_title text-center mb-5">
        <h2>Academic Resources</h2>
        <p>Access key academic services and platforms in one place.</p>
    </div>

    <!-- Academic & Quick Links Section -->
    <section class="academic-links-section">
        <div class="container">
            <div class="row g-4">
                <!-- Academic Calendar -->
                <div class="col-md-6">
                    <div class="quick-link-card">
                        <div class="icon-box">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <h4>Academic Calendar 2024/2025</h4>
                        <a href="#" class="btn-link">Read More</a>
                    </div>
                </div>

                <!-- Online Learning Platform -->
                <div class="col-md-6">
                    <div class="quick-link-card">
                        <div class="icon-box">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <h4>Online Learning Platform</h4>
                        <a href="#" class="btn-link">Read More</a>
                    </div>
                </div>

                <!-- Journals and Proceedings -->
                <div class="col-md-6">
                    <div class="quick-link-card">
                        <div class="icon-box">
                            <i class="fas fa-book"></i>
                        </div>
                        <h4>Journals and proceedings</h4>
                        <a href="#" class="btn-link">Read More</a>
                    </div>
                </div>

                <!-- Library -->
                <div class="col-md-6">
                    <div class="quick-link-card">
                        <div class="icon-box">
                            <i class="fas fa-university"></i>
                        </div>
                        <h4>Library</h4>
                        <a href="#" class="btn-link">Read More</a>
                    </div>
                </div>

                <!-- Professional Certification Body -->
                <div class="col-md-6">
                    <div class="quick-link-card">
                        <div class="icon-box">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h4>Professional Certification Body</h4>
                        <a href="#" class="btn-link">Read More</a>
                    </div>
                </div>

                <!-- Publication Repository -->
                <div class="col-md-6">
                    <div class="quick-link-card">
                        <div class="icon-box">
                            <i class="fas fa-archive"></i>
                        </div>
                        <h4>Publication Repository</h4>
                        <a href="#" class="btn-link">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Prima Group Section -->
    <div class="prima-group-section">
        <div class="container">
            <!-- Section Title -->
            <div class="section-title">
                <h2>PRIMA GROUP</h2>
            </div>

            <!-- Prima Group Cards Grid -->
            <div class="prima-group-grid">

                <!-- Card 1: RSU Royal Prima -->
                <a href="https://www.royalprima.com" target="_blank" class="prima-card">
                    <div class="card-image">
                        <img src="img/primagroup/royalprima.jpg" alt="RSU Royal Prima">
                    </div>
                    <div class="card-name">
                        <h3>RSU Royal Prima</h3>
                    </div>
                </a>

                <!-- Card 2: RS Mata Prima Vision -->
                <a href="https://primavisionhospital.com/" target="_blank" class="prima-card">
                    <div class="card-image">
                        <img src="img/primagroup/primavision.jpg" alt="RS Mata Prima Vision">
                    </div>
                    <div class="card-name">
                        <h3>RS Mata Prima Vision</h3>
                    </div>
                </a>

                <!-- Card 3: RS Gigi dan Mulut -->
                <a href="http://rsgmprima.unprimdn.ac.id/" target="_blank" class="prima-card">
                    <div class="card-image">
                        <img src="img/primagroup/rsgm.jpg" alt="RS Gigi dan Mulut Prima">
                    </div>
                    <div class="card-name">
                        <h3>RSGM Prima</h3>
                    </div>
                </a>

                <!-- Card 4: Global Prima School -->
                <a href="https://globalprimamdn.sch.id/" target="_blank" class="prima-card">
                    <div class="card-image">
                        <img src="img/primagroup/globalprima.jpg" alt="Global Prima School">
                    </div>
                    <div class="card-name">
                        <h3>Global Prima School</h3>
                    </div>
                </a>

                <!-- Card 5: De Prima Apartment -->
                <a href="https://www.instagram.com/deprima_apartment/?hl=en" target="_blank" class="prima-card">
                    <div class="card-image">
                        <img src="img/primagroup/deprimaapart.jpg" alt="De Prima Apartment">
                    </div>
                    <div class="card-name">
                        <h3>De Prima Apartment</h3>
                    </div>
                </a>

                <!-- Card 6: UNAJA -->
                <a href="https://unaja.ac.id/" target="_blank" class="prima-card">
                    <div class="card-image">
                        <img src="img/primagroup/unaja.png" alt="Unaja">
                    </div>
                    <div class="card-name">
                        <h3>UNAJA</h3>
                    </div>
                </a>

            </div>
        </div>
    </div>

    <!-- Jelajahi Kampus Section -->
    <div class="jelajahi-kampus-section">
        <div class="jelajahi-kampus-container">
            <!-- Background Photo (di bagian putih belakang template) -->
            <div class="background-photo">
                <img src="img/jelajahikampus.png" alt="Kampus Background" class="bg-photo-img">
            </div>

            <!-- Template Overlay (Purple design) -->
            <img src="img/JELAJAHI UNIVERSITAS(1900X650) transparan bg.png"
                alt="Jelajahi Kampus Template"
                class="jelajahi-template-overlay">

            <!-- Play Button Overlay -->
            <div class="play-button-overlay" id="playButton">
                <!-- <svg class="play-icon" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="100" cy="100" r="95" fill="none" stroke="#FDB913" stroke-width="5" />
                    <circle cx="100" cy="100" r="80" fill="#6B2C91" />
                    <polygon points="80,65 80,135 135,100" fill="#FDB913" />
                </svg> -->
            </div>
        </div>

        <!-- Video Modal -->
        <div class="video-modal" id="videoModal">
            <div class="video-modal-content">
                <span class="close-modal" id="closeModal">&times;</span>
                <div class="video-wrapper">
                    <!-- Video HTML5 Player -->
                    <video id="campusVideo" controls controlsList="nodownload">
                        <source src="img/jelajahi_kampus.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>

    <!-- UNPRI Values Section -->
    <div class="unpri-values-section">
        <div class="container">

            <!-- Section Header -->
            <div class="values-header">
                <h2 class="values-title">UNPRI VALUES</h2>
                <p class="values-subtitle">To become a leading university in innovative and adaptive socio-technopreneurship.</p>
            </div>

            <!-- Main Content with Lightbulb -->
            <div class="values-content">

                <!-- Lightbulb Image Container -->
                <div class="lightbulb-container">
                    <img src="img/nilaiunpri.png" alt="UNPRI Values" class="lightbulb-image">
                </div>

                <!-- Values Grid -->
                <div class="values-grid">

                    <!-- Value 1: Unity -->
                    <div class="value-item value-left" data-position="top-left">
                        <div class="value-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z" fill="#F7CB0C" />
                                <path d="M12 14C6.477 14 2 16.477 2 19.5V22H22V19.5C22 16.477 17.523 14 12 14Z" fill="#F7CB0C" />
                            </svg>
                        </div>
                        <h3 class="value-name">Unity</h3>
                        <p class="value-description">Menggambarkan kesatuan Civitas Academica yang beragam dan multi etnis dalam mencapai visi dan misi universitas.</p>
                    </div>

                    <!-- Value 2: Networking -->
                    <div class="value-item value-right" data-position="top-right">
                        <div class="value-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="10" stroke="#F7CB0C" stroke-width="2" />
                                <circle cx="12" cy="12" r="2" fill="#F7CB0C" />
                                <circle cx="7" cy="7" r="2" fill="#F7CB0C" />
                                <circle cx="17" cy="7" r="2" fill="#F7CB0C" />
                                <circle cx="7" cy="17" r="2" fill="#F7CB0C" />
                                <circle cx="17" cy="17" r="2" fill="#F7CB0C" />
                            </svg>
                        </div>
                        <h3 class="value-name">Networking</h3>
                        <p class="value-description">Menggambarkan keluasan jaringan kerja sama nasional dan internasional di bidang akademik dan non akademik.</p>
                    </div>

                    <!-- Value 3: Pioneering -->
                    <div class="value-item value-left" data-position="middle-left">
                        <div class="value-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 2L3 14H12L11 22L21 10H12L13 2Z" fill="#F7CB0C" />
                            </svg>
                        </div>
                        <h3 class="value-name">Pioneering</h3>
                        <p class="value-description">Menggambarkan komitmen untuk selalu menjadi yang terdepan.</p>
                    </div>

                    <!-- Value 4: Reliability -->
                    <div class="value-item value-right" data-position="middle-right">
                        <div class="value-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L3 7V11C3 16.55 6.84 21.74 12 23C17.16 21.74 21 16.55 21 11V7L12 2Z" fill="#F7CB0C" />
                                <path d="M10 17L6 13L7.41 11.59L10 14.17L16.59 7.58L18 9L10 17Z" fill="#6713AB" />
                            </svg>
                        </div>
                        <h3 class="value-name">Reliability</h3>
                        <p class="value-description">Menggambarkan sikap bertanggungjawab dan dapat dipercaya.</p>
                    </div>

                    <!-- Value 5: Integrity -->
                    <!-- <div class="value-item value-left" data-position="bottom-left">
                        <div class="value-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z" fill="#F7CB0C" />
                            </svg>
                        </div>
                        <h3 class="value-name">Integrity</h3>
                        <p class="value-description">Menggambarkan konsistensi dalam berperilaku jujur dan menjaga nilai-nilai moral yang baik.</p>
                    </div> -->

                </div>

            </div>

            <!-- Timeline Button -->
            <div class="timeline-button-container">
                <a href="https://unprimdn.ac.id/id/tours" class="timeline-button">
                    <span class="button-text">Lihat Lini Masa UNPRI</span>
                    <svg class="arrow-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z" fill="currentColor" />
                    </svg>
                </a>
            </div>

        </div>
    </div>

    <!-- Mitra Universitas -->
    <div class="image-with-carousel">
        <img src="img/MITRA UNIVERSITAS (1900X570).png" alt="Mitra Universitas" class="background-img">
        <div class="carousel-overlay">
            <div id="mitraCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="logo-row d-flex justify-content-center align-items-center flex-nowrap">
                            <img src="img/mitra/unimas.png" class="logo-item" alt="Unimas">
                            <img src="img/mitra/sandauniv.png" class="logo-item" alt="Sanda University">
                            <img src="img/mitra/uniza.png" class="logo-item" alt="Uniza">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="logo-row d-flex justify-content-center align-items-center flex-nowrap">
                            <img src="img/mitra/univmalaya.png" class="logo-item" alt="Universiti Malaya">
                            <img src="img/mitra/univutaramalay.png" class="logo-item" alt="Universiti Malaysia Utara">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Minat Bakat Mahasiswa -->
    <div class="full-width-image">
        <img src="img/TES MINAT BAKAT(1600 x 650).png" alt="Tes Minat Bakat" class="w-100" style="height: auto; display: block;">
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
    <script>
        // Optional: Add scroll animation
        document.addEventListener('DOMContentLoaded', function() {
            const valueItems = document.querySelectorAll('.value-item');

            const observerOptions = {
                threshold: 0.2,
                rootMargin: '0px 0px -100px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = entry.target.style.transform + ' translateY(0)';
                    }
                });
            }, observerOptions);

            valueItems.forEach(item => {
                item.style.opacity = '0';
                item.style.transition = 'all 0.6s ease';
                observer.observe(item);
            });
        });
    </script>
</body>

</html>