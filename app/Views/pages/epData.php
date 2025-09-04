<?= $this->extend('templates/ita') ?>
<?= $this->section('content') ?>

<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade-up" data-aos-delay="100">
        <div class="breadcrumbs">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/"><i class="bi bi-house"></i> Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Category</a></li> -->
                    <li class="breadcrumb-item active current">ข้อมูลองค์กร | Hospital organization data</li>
                </ol>
            </nav>
        </div>


        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <div class="col-lg-12">
                        <div class="content">
                            <h2>ข้อมูลพื้นฐานขององค์กร</h2>
                            <h4>ณ วันที่ 10 เดือนพฤษภาคม พ.ศ.2561</h4>
                            <div class="col-lg-12">
                                <div class="image-section" data-aos="fade-left" data-aos-delay="200">
                                    <div class="main-image">
                                        <img src="assets/img/gallery/epData.png" alt="Hospital organization data"
                                            style="max-width:100%; height:auto; object-fit:contain; display:block;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /About Section -->

    </div><!-- End Page Title -->

</main>

<?= $this->endSection() ?>