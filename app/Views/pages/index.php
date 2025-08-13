<?= $this->extend('templates/index') ?>
<?= $this->section('content') ?>

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <div class="container-fluid p-0">
            <div class="hero-wrapper">
                <div class="hero-image">
                    <img src="assets/img/health/bghos.jpg" alt="Advanced Healthcare" class="img-fluid">
                </div>

                <div class="hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-10" data-aos="fade-right" data-aos-delay="100">
                                <div class="content-box">
                                    <span class="badge-accent" data-aos="fade-up" data-aos-delay="150">Phichai
                                        Hospital</span>
                                    <h1 data-aos="fade-up" data-aos-delay="200">โรงพยาบาลพิชัย</h1>
                                    <p data-aos="fade-up" data-aos-delay="250">มีหลักธรรมาภิบาล บริการด้วยใจ
                                        ให้ชุมชนเชื่อมั่น สรรค์สร้างพัฒนา</p>

                                    <!-- <div class="cta-group" data-aos="fade-up" data-aos-delay="300">
                                        <a href="appointment.html" class="btn btn-primary">Book Appointment</a>
                                        <a href="services.html" class="btn btn-outline">Explore Services</a>
                                    </div> -->
                                    <!-- Floating Video -->

                                    <!-- <div class="floating-video draggable resizable" id="floatingVideo">
                                        <button class="close-btn" onclick="document.getElementById('floatingVideo').style.display='none'">×</button>
                                        <video src="assets/video/PASULOL.mp4" autoplay muted playsinline controls></video>
                                    </div> -->

                                    <!-- <div class="floating-video" id="floatingVideo">
                                        <button class="close-btn" onclick="document.getElementById('floatingVideo').style.display='none'">×</button>
                                        <video src="assets/video/PASULOL.mp4" controls width="300" autoplay muted playsinline></video>
                                    </div> -->


                                    <!-- <div class="floating-image" id="floatingImageBox">
                                        <button class="close-btn" onclick="document.getElementById('floatingImageBox').style.display='none'">×</button>

                                        <img src="assets/img/person/headMaster.jpg" alt="ภาพแสดงตัวอย่าง" />

                                        <div class="image-caption">
                                            ผู้อำนวยการโรงพยาบาลพิชัย
                                        </div>
                                        <div class="image-caption">
                                            นาย
                                        </div>
                                    </div> -->


                                    <div class="info-badges" data-aos="fade-up" data-aos-delay="350">
                                        <div class="badge-item">
                                            <i class="bi bi-telephone-fill"></i>
                                            <div class="badge-content">
                                                <span>โทรศัพย์ / โทรสาร -> ติดต่อฉุกเฉิน บริการ 24 ชั่วโมง</span>
                                                <strong>055-832100 / 055-456299</strong>
                                            </div>
                                        </div>
                                        <div class="badge-item">
                                            <i class="bi bi-clock-fill"></i>
                                            <div class="badge-content">
                                                <span>เวลาทำการ</span>
                                                <strong>วัน จันทร์ - ศุกร์: 8:00 - 16:30 น.</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="features-wrapper">
                        <div class="row gy-4">

                            <div class="col-lg-4">
                                <div class="feature-item" data-aos="fade-up" data-aos-delay="450">
                                    <div class="feature-icon">
                                        <i class="bi bi-heart-pulse-fill"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Cardiology</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="feature-item" data-aos="fade-up" data-aos-delay="500">
                                    <div class="feature-icon">
                                        <i class="bi bi-lungs-fill"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Pulmonology</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="feature-item" data-aos="fade-up" data-aos-delay="550">
                                    <div class="feature-icon">
                                        <i class="bi bi-capsule"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h3>Diagnostics</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> -->

                </div>
            </div>
        </div>
        </div>
    </section><!-- /Hero Section -->

    <!-- Home About Section -->
    <!-- <section id="home-about" class="home-about section"> -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <!-- <div class="row gy-5 align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                    <div class="about-image">
                        <img src="assets/img/gallery/p2.jpg" alt="Modern Healthcare Facility" class="img-fluid rounded-3 mb-4">
                        <div class="experience-badge">
                            <span class="years">59</span>
                            <span class="text">ปีที่เปิดทำการ</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="about-content">
                        <h2>ประวัติของโรงพยาบาลพิชัย</h2>
                        <p class="lead"></p>

                        <p>กรมอนามัยได้ใช้งบประมาณสร้างสถานีอนามัยชั้นหนึ่งในพื้นที่ที่ได้รับบริจาคใกล้สถานีตำรวจอำเภอพิชัย และเปิดให้บริการเมื่อ 8 ธันวาคม 2509 โดยมีนายแพทย์ประยูร บุญเพียร เป็นหัวหน้าคนแรก ต่อมาในปี 2516 มีการจัดแพทย์หมุนเวียน ส่งผลให้มีประชาชนมาใช้บริการมากขึ้น ต่อมาสถานีอนามัยได้เปลี่ยนชื่อเป็น "โรงพยาบาลพิชัย" ในปี 2522 แต่เนื่องจากสถานที่เดิมคับแคบ จึงมีการก่อสร้างโรงพยาบาลขนาด 10 เตียงแห่งใหม่บริเวณหมู่ที่ 1 และเปิดให้บริการในเดือนเมษายน 2527

                            และในเดือนพฤศจิกายนปีเดียวกัน ได้รับบริจาคสร้างตึกสงฆ์อาพาธ และต่อมาได้รับการจัดสรรที่ดิน 65 ไร่ ขยายเป็นโรงพยาบาล 30 เตียง เปิดบริการเมื่อ 16 กรกฎาคม 2530 จากนั้นได้พัฒนาเป็นโรงพยาบาลขนาด 60 เตียงในปี 2544 และได้รับการรับรองมาตรฐานโรงพยาบาลเมื่อ 10 มกราคม 2546 ซึ่งมีการปรับปรุงด้านอาคารและบริการอย่างต่อเนื่องจนถึงปัจจุบัน</p>

                        <div class="row g-4 mt-4">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                <div class="feature-item">
                                    <div class="icon">
                                        <i class="bi bi-heart-pulse"></i>
                                    </div>
                                    <h4>Compassionate Care</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                                <div class="feature-item">
                                    <div class="icon">
                                        <i class="bi bi-star"></i>
                                    </div>
                                    <h4>Medical Excellence</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>

                        <div class="cta-wrapper mt-4">
                            <a href="about.html" class="btn btn-primary">Learn More About Us</a>
                            <a href="#" class="btn btn-outline">Meet Our Team</a>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="row mt-5 pt-4 certifications-row" data-aos="fade-up" data-aos-delay="600">
                <div class="col-12 text-center mb-4">
                    <h4 class="certification-title">Our Accreditations</h4>
                </div>
                <div class="col-12">
                    <div class="certifications">
                        <div class="certification-item" data-aos="zoom-in" data-aos-delay="700">
                            <img src="assets/img/clients/clients-1.webp" alt="Certification">
                        </div>
                        <div class="certification-item" data-aos="zoom-in" data-aos-delay="800">
                            <img src="assets/img/clients/clients-2.webp" alt="Certification">
                        </div>
                        <div class="certification-item" data-aos="zoom-in" data-aos-delay="900">
                            <img src="assets/img/clients/clients-3.webp" alt="Certification">
                        </div>
                        <div class="certification-item" data-aos="zoom-in" data-aos-delay="1000">
                            <img src="assets/img/clients/clients-4.webp" alt="Certification">
                        </div>
                    </div>
                </div>
            </div> -->

        </div>

    </section><!-- /Home About Section -->

    <!-- Featured Departments Section -->
    <section id="featured-departments" class="featured-departments section">

        <!-- Tabbed Section Title -->


        <!-- <h1>Pure CSS Tabs With Indicator</h1> -->
        <div class="tabs" data-aos="fade-up">

            <input type="radio" id="tab1" name="tab-control" checked>
            <input type="radio" id="tab2" name="tab-control">
            <input type="radio" id="tab3" name="tab-control">

            <ul>
                <li>
                    <label for="tab1" role="button">
                        <svg viewBox="0 0 24 24">
                            <path d="M2,5V13H6L11,18V2L6,7H2Z" />
                        </svg>
                        <br><span>ข่าวสารประชาสัมพันธ์</span>
                    </label>
                </li>
                <li>
                    <label for="tab2" role="button">
                        <svg viewBox="0 0 24 24">
                            <path
                                d="M15,14L12,16.5L9,14L10.5,11L9,8H11.5L12,6L12.5,8H15L13.5,11L15,14M19,4H18V2H16V4H8V2H6V4H5C3.89,4 3,4.89 3,6V20C3,21.11 3.89,22 5,22H19C20.11,22 21,21.11 21,20V6C21,4.89 20.11,4 19,4Z" />
                        </svg>
                        <br><span>กิจกรรม</span>
                    </label>
                </li>
                <li>
                    <label for="tab3" role="button">
                        <svg viewBox="0 0 24 24">
                            <path
                                d="M4 22H20V2H4V22ZM6 4H18V20H6V4ZM8 6V8H10V6H8ZM14 6V8H16V6H14ZM8 10V12H10V10H8ZM14 10V12H16V10H14ZM8 14V16H10V14H8ZM14 14V16H16V14H14ZM11 18H13V20H11V18Z" />
                        </svg>
                        <br><span>สำนักงาน สปสช.</span>
                    </label>
                </li>
            </ul>


            <div class="slider">
                <div class="indicator"></div>
            </div>

            <div class="content">
                <section>
                    <div class="news-section">
                        <div class="news-grid">

                            <div class="news-item">
                                <img src="assets/img/gallery/post-1.jpg" alt="โลโก้">
                                <a href='/news'>
                                    <div class="news-content">
                                        <h4>ประกาศรายชื่อผู้มีสิทธิ์เข้ารับการประเมินสมรรถนะ ครั้งที่ 1</h4>
                                        <p>16/07/2025</p>
                                    </div>
                                </a>
                            </div>
                            <div class="news-item">
                                <img src="assets/img/logo_edit.png" alt="โลโก้">
                                <a href='/'>
                                    <div class="news-content">
                                        <h4>ประกาศรายชื่อผู้มีสิทธิ์เข้ารับการประเมินสมรรถนะ ครั้งที่ 1</h4>
                                        <p>16/07/2025</p>
                                    </div>
                                </a>
                            </div>
                            <div class="news-item">
                                <img src="assets/img/logo_edit.png" alt="โลโก้">
                                <a href='/'>
                                    <div class="news-content">
                                        <h4>ประกาศรายชื่อผู้มีสิทธิ์เข้ารับการประเมินสมรรถนะ ครั้งที่ 1</h4>
                                        <p>16/07/2025</p>
                                    </div>
                                </a>
                            </div>
                            <div class="news-item">
                                <img src="assets/img/logo_edit.png" alt="โลโก้">
                                <a href='/'>
                                    <div class="news-content">
                                        <h4>ประกาศรายชื่อผู้มีสิทธิ์เข้ารับการประเมินสมรรถนะ ครั้งที่ 1</h4>
                                        <p>16/07/2025</p>
                                    </div>
                                </a>
                            </div>
                            <div class="news-item">
                                <img src="assets/img/logo_edit.png" alt="โลโก้">
                                <a href='/'>
                                    <div class="news-content">
                                        <h4>ประกาศรายชื่อผู้มีสิทธิ์เข้ารับการประเมินสมรรถนะ ครั้งที่ 1</h4>
                                        <p>16/07/2025</p>
                                    </div>
                                </a>
                            </div>
                            <div class="news-item">
                                <img src="assets/img/logo_edit.png" alt="โลโก้">
                                <a href='/'>
                                    <div class="news-content">
                                        <h4>ประกาศรายชื่อผู้มีสิทธิ์เข้ารับการประเมินสมรรถนะ ครั้งที่ 1</h4>
                                        <p>16/07/2025</p>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div class="view-more">
                            <a href="#">+ ดูทั้งหมด</a>
                        </div>
                    </div>
                </section>
                <section>
                    <h2>Details</h2>
                    <p>รายละเอียดกิจกรรม</p>
                </section>
                <section>
                    <h2>Contact</h2>
                    <p>1. ตรวจสอบเงินเดือน สำหรับเจ้าหน้าที่<br>
2. แบบฟอร์มต่าง ๆ (วันลา และ อื่น ๆ )<br>
3. ใบซ่อม<br>
4. เบอร์โทรศัพท์ภายใน รพ.พิชัย<br>
5. เบอร์โทรศัพท์ โรงพยาบาลศูนย์/โรงพยาบาลชุมชน<br>
6. พิธีน้อมรำลึกเนื่องในวันคล้ายวันสวรรคต ร.9<br>
7. โครงการจิตอาสา เราทำความดีด้วยหัวใจ 23 ตค 65<br>
8. พิธีวางพานพุ่ม “พระบิดาแห่งการแพทย์แผนไทย”<br>
9. พิธีวางพวงมาลา 23 ตุลาคม 2565”<br>
10. ทำบุญตักบาตร ใน รพ.พิชัย”<br>
11. ความรู้เรื่องไข้หวัดนก<br>
12. นโยบายกระทรวงสาธารณสุข<br>
13. รายงานผลการกำกับติดตามการดำเนินงานตามแผนปฏิบัติการส่งเสริมคุณธรรมของชมรมจริยธรรมของหน่วยงาน ประจำปีงบประมาณ พ.ศ. 2568 รอบ 6 เดือน</p>
                </section>
            </div>
        </div><br><br><br><br><br><br>

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="container section-title" data-aos="fade-up">
                    <h2>สาระน่ารู้</h2>
                    <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
                </div><!-- End Section Title -->


                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="department-card">
                        <div class="department-image">
                            <img src="assets/img/gallery/eyestest.jpg" alt="Cardiology Department">
                        </div>
                        <!-- 
                        <div class="department-image">
                            <img src="assets/img/health/fb1.jpg" alt="Cardiology Department" class="img-fluid">
                        </div> -->
                        <div class="department-content" style="">
                            <!-- <div class="department-icon">
                                <i class="fas fa-heartbeat"></i>
                            </div> -->
                            <h3>เช็กอาการตาบอดสี! แบบทดสอบตาบอดสีฟรี เซฟไว้ก่อนไปสอบใบขับขี่ </h3>
                            <p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 300px;">
                                ชวนทำแบบทดสอบตาบอดสี เพื่อเตรียมความพร้อมก่อนไปสอบใบขับขี่พร้อมวิธีแก้แบบง่าย ๆ ที่จะช่วยปรับการมองเห็นสีต่าง ๆ ได้ชัดเจนมากยิ่งขึ้น เพื่อลดเวลาในการสอบใบขับขี่
                            </p>
                            <a href="https://www.wongnai.com/articles/colour-blind-test?ref=ct" class="btn-learn-more">
                                <span>ดูเพิ่มเติม</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- End Department Card -->
            </div>
        </div>



    </section>

</main>

<?= $this->endSection() ?>