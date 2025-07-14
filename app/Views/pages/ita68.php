<?= $this->extend('templates/index') ?>
<?= $this->section('content') ?>

<main class="main">

    <!-- Page Title -->
    <div class="page-title"  data-aos="fade-up" data-aos-delay="100">
        <div class="breadcrumbs">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="bi bi-house"></i> Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Category</a></li> -->
                    <li class="breadcrumb-item active current">ITA ปี 2568</li>
                </ol>
            </nav>
        </div>

        <div class="title-wrapper">
            <h1>หลักฐานเชิงประจักษ์การดำเนินงานของโรงพยาบาลพิชัย ( ITA. )
                ปีงบประมาณ 2568</h1>
            <img src="assets/img/ita.png" alt="ITA" class="img-fluid">

            <p>การประเมินคุณธรรมและความโปร่งใส</p>
            <p>( Integrity and Transparency Assessment : ITA 2568 )</p>
        </div>
    </div><!-- End Page Title -->

    <!-- Doctors Section -->
    <section id="doctors" class="doctors section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 justify-content-center">

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="doctor-card">
                        <div class="doctor-image">
                            <img src="assets/img/person/headMaster.jpg" alt="Dr. Jennifer Martinez" class="img-fluid">
                            <!-- <div class="doctor-overlay">
                                <div class="doctor-social">
                                    <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                                    <a href="#" class="social-link"><i class="bi bi-twitter"></i></a>
                                    <a href="#" class="social-link"><i class="bi bi-envelope"></i></a>
                                </div>
                            </div> -->
                        </div>
                        <div class="doctor-content">
                            <h3 class="doctor-name">นายแพทย์เศษฐวิชช์ สิริวัฒน์</h3>
                            <span class="doctor-specialty">ผู้อำนวยการโรงพยาบาลพิชัย</span>
                            <!-- <p class="doctor-bio">Mauris blandit aliquet elit eget tincidunt nibh pulvinar a. Curabitur arcu erat accumsan id imperdiet et porttitor at.</p> -->
                            <div class="doctor-experience">
                                <span class="experience-badge">พ.ศ.2568 – ปัจจุบัน</span>
                            </div>
                            <!-- <a href="appointment.html" class="btn-appointment">Book Appointment</a> -->
                        </div>
                    </div>
                </div><!-- End Doctor Card -->

            </div>

        </div>

    </section><!-- /Doctors Section -->

</main>


<?= $this->endSection() ?>