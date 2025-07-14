<?= $this->extend('templates/contact') ?>
<?= $this->section('content-contact') ?>

<main class="main">

    <!-- Page Title -->
    <div class="page-title">
        <div class="breadcrumbs">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="bi bi-house"></i> หน้าหลัก</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Category</a></li> -->
                    <li class="breadcrumb-item active current">ติดต่อเรา</li>
                </ol>
            </nav>
        </div>

        <div class="title-wrapper">
            <h1>ติดต่อเรา</h1>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p> -->
        </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <div class="container">
            <div class="contact-wrapper">
                <div class="contact-info-panel">
                    <div class="contact-info-header">
                        <h3>ช่องทางการติดต่อ</h3>
                        <!-- <p>Dignissimos deleniti accusamus rerum voluptate. Dignissimos rerum sit maiores reiciendis voluptate inventore ut.</p> -->
                    </div>

                    <div class="contact-info-cards">
                        <div class="info-card">
                            <div class="icon-container">
                                <i class="bi bi-pin-map-fill"></i>
                            </div>
                            <div class="card-content">
                                <h4>ที่อยู่</h4>
                                <p>139 ม.1 ต.ในเมือง อ.พิชัย จ.อุตรดิตถ์ 53120</p>
                            </div>
                        </div>

                        <div class="info-card">
                            <div class="icon-container">
                                <i class="bi bi-envelope-open"></i>
                            </div>
                            <div class="card-content">
                                <h4>อีเมล</h4>
                                <p>pichaihos@pichaihos.com</p>
                            </div>
                        </div>

                        <div class="info-card">
                            <div class="icon-container">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="card-content">
                                <h4>โทร</h4>
                                <p>055-832100</p>
                            </div>
                        </div>

                        <div class="info-card">
                            <div class="icon-container">
                                <i class="bi bi-clock-history"></i>
                            </div>
                            <div class="card-content">
                                <h4>เวลาทำการ</h4>
                                <p>วัน จันทร์ - ศุกร์: 8:00 - 16:30 น. ฉุกเฉินตลอด 24 ชั่วโมง</p>
                            </div>
                        </div>
                    </div>

                    <div class="social-links-panel">
                        <h5>ช่องทางอื่น ๆ</h5>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/profile.php?id=61573656037626"><i class="bi bi-facebook"></i></a>
                            <!-- <a href="#"><i class="bi bi-twitter-x"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                            <a href="#"><i class="bi bi-youtube"></i></a> -->
                        </div>
                    </div>
                </div>

                <div class="contact-form-panel">
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3809.1489277151404!2d100.07134077501532!3d17.308362105077236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30df1a0f7d50d3e1%3A0xa05b3063fbced509!2z4LmC4Lij4LiH4Lie4Lii4Liy4Lia4Liy4Lil4Lie4Li04LiK4Lix4Lii!5e0!3m2!1sth!2sth!4v1752036783707!5m2!1sth!2sth" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <!-- <iframe src="https://maps.app.goo.gl/go86wC36mpfzxoXj8" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                    </div>

                    <div class="form-container">
                        <h3>กล่องความคิดเห็น</h3>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit mauris hendrerit faucibus imperdiet nec eget felis.</p> -->

                        <form action="forms/contact.php" method="post" class="php-email-form">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nameInput" name="name" placeholder="Full Name" required="">
                                <label for="nameInput">ชื่อ-นามสกุล</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="emailInput" name="email" placeholder="Email Address" required="">
                                <label for="emailInput">อีเมล</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="subjectInput" name="subject" placeholder="Subject" required="">
                                <label for="subjectInput">หัวข้อ</label>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="messageInput" name="message" rows="5" placeholder="Your Message" style="height: 150px" required=""></textarea>
                                <label for="messageInput">เนื้อหา</label>
                            </div>

                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">ข้อความถูกส่งแล้ว ขอบคุณที่แสดงความคิดเห็นครับ/ค่ะ</div>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn-submit">ส่งความคิดเห็น<i class="bi bi-send-fill ms-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Contact Section -->

</main>

<?= $this->endSection() ?>