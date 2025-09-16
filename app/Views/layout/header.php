<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= esc($title ?? 'Phichai Hospital') ?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/logo_edit.png" rel="icon">
    <link href="assets/img/logo_edit.png" rel="Phichai-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- calendar -->
    <!-- <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css'> -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.2.0/main.min.css'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.3.0/main.min.css'>

    <!-- =======================================================
  * Template Name: MediTrust
  * Template URL: https://bootstrapmade.com/meditrust-bootstrap-hospital-website-template/
  * Updated: Jul 04 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        .tab-buttons {
            margin-top: 10px;
            display: flex;
            gap: 10px;
        }

        .tab-button {
            background-color: #f0e4c3;
            border: none;
            padding: 10px 10px;
            cursor: pointer;
            font-weight: bold;
            border-radius: 20px;
            transition: background-color 0.3s;
        }

        .tab-button.active {
            background-color: #d4b14d;
            color: white;
        }

        .tab-content {
            display: none;
            margin-top: 10px;
            padding: 15px;
            background: #f9f9f9;
            border-radius: 20px;
            border: 1px solid #ddd;
        }

        .tab-content.active {
            display: block;
        }
    </style>

    <style>
        /* body {
        background: #efefef;
        font-family: "Raleway", sans-serif;
        color: #333;
        margin: 0;
        padding: 0;
    } */

        /* h1 {
        text-align: center;
        color: #428BFF;
        font-weight: 300;
        padding: 40px 0 20px;
        margin: 0;
    } */

        .tabs {
            position: relative;
            background: #fff;
            width: 70%;
            margin: auto;
            padding: 10px 10px 30px;
            border-radius: 20px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
        }

        .tabs input[name="tab-control"] {
            display: none;
        }

        .tabs ul {
            display: flex;
            justify-content: space-between;
            padding-left: 0;
            margin: 0;
            list-style: none;
        }

        .tabs ul li {
            flex: 1;
            text-align: center;
        }

        .tabs ul li label {
            display: block;
            padding: 10px;
            color: #6ea089ff;
            cursor: pointer;
            transition: 0.3s;
            font-family: "Montserrat", sans-serif;
            font-weight: bold;
        }

        .tabs ul li label svg {
            height: 1.2em;
            vertical-align: bottom;
            margin-right: 0.2em;
            fill: #6ea089ff;
            transition: 0.3s;
        }

        .tabs .slider {
            position: relative;
            height: 4px;
            background: transparent;
            margin-top: 10px;
        }

        .tabs .slider .indicator {
            height: 100%;
            width: 33.3333%;
            background: #0d824b;
            transition: transform 0.3s ease-in-out;
        }

        .tabs .content section {
            display: none;
            animation: fadeIn 0.3s ease-in-out;
        }

        .tabs .content section h2 {
            display: none;
        }

        .tabs .content {
            margin-top: 20px;
        }

        /* Checked state styles */
        #tab1:checked~ul li:nth-child(1) label,
        #tab2:checked~ul li:nth-child(2) label,
        #tab3:checked~ul li:nth-child(3) label {
            color: #0d824b;
        }

        #tab1:checked~ul li:nth-child(1) label svg,
        #tab2:checked~ul li:nth-child(2) label svg,
        #tab3:checked~ul li:nth-child(3) label svg {
            fill: #0d824b;
        }

        #tab1:checked~.slider .indicator {
            transform: translateX(0%);
        }

        #tab2:checked~.slider .indicator {
            transform: translateX(100%);
        }

        #tab3:checked~.slider .indicator {
            transform: translateX(200%);
        }

        #tab1:checked~.content section:nth-child(1),
        #tab2:checked~.content section:nth-child(2),
        #tab3:checked~.content section:nth-child(3) {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(5%);
            }

            to {
                opacity: 1;
                transform: translateY(0%);
            }
        }

        @media (max-width: 1000px) {
            .tabs ul li label {
                white-space: normal;
            }

            .tabs ul li label span {
                display: block;
            }
        }

        @media (max-width: 600px) {
            .tabs ul li label span {
                display: none;
            }

            .tabs .slider {
                display: none;
            }

            .tabs .content section h2 {
                display: block;
                color: #0d824b;
                border-bottom: 3px solid #0d824b;
                margin-bottom: 10px;
            }
        }
    </style>

    <style>
        .service-features ul {
            list-style: none;
            padding-left: 0;
        }

        .service-features li {
            margin-bottom: 0.75rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .service-features li a {
            margin-bottom: 0.75rem;
            display: flex;
            align-items: flex-start;
            text-decoration: none;
            gap: 0.5rem;
        }

        .service-features h4 {
            margin-bottom: 0.75rem;
            display: flex;
            align-items: flex-start;
            text-decoration: none;
            gap: 0.5rem;
        }

        /* .service-features li a {
        display: flex;
        align-items: flex-start;
        text-decoration: none;
        color: inherit;
        gap: 0.5rem;
    } */


        .service-features li img {
            width: 20px;
            margin-right: 10px;
            margin-top: 3px;
        }

        .service-features ul ul {
            margin-left: 30px;
            margin-top: 5px;
        }

        /* .service-features ul {
        list-style: none;
        padding-left: 0;
    }

    .service-features li {
        margin-bottom: 2rem;
    } */

        .doc-header {
            font-size: 1rem;
            margin-bottom: 0.25rem;
            color: #444;
        }

        /* .service-features li a {
        display: flex;
        align-items: flex-start;
        text-decoration: none;
        color: inherit;
        gap: 0.5rem;
    } */

        /* .service-features li img {
        width: 24px;
        height: 24px;
        margin-top: 0.2rem;
    } */

        .doc-code {
            min-width: 3rem;

            flex-shrink: 0;
        }

        .doc-text {
            flex: 1;
        }


        .line-black {
            height: 2px;
            background-color: black;
            width: 100%;
            margin: 20px 0;
        }

        .item-break {
            display: flex;
            flex-direction: column;
            align-items: start;
            gap: 0.25rem;
        }

        html {
            scroll-behavior: smooth;
        }

        /* แบนเนอร์ลอยซ้าย ติดหน้าจอ */
        #sidebar-banner {
            position: fixed;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            background: #0d824b;
            padding: 10px;
            border-radius: 0 8px 8px 0;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2);
            z-index: 9999;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        #sidebar-banner button {
            background-color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            color: #0d824b;
            transition: background-color 0.3s ease;
        }

        #sidebar-banner button:hover {
            background-color: #d0e3ff;
        }
    </style>

    <style>
        /* body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background: #f8f9fa;
        } */

        .news-section {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        .news-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            background: #fff;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .news-item img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
        }

        .news-content {
            flex: 1;
        }

        .news-content h4 {
            margin: 0;
            font-size: 16px;
            color: #222;
        }

        .news-content p {
            margin: 8px 0 0;
            font-size: 14px;
            color: #666;
        }

        .view-more {
            text-align: right;
            margin-top: 20px;
        }

        .view-more a {
            text-decoration: none;
            color: #0d824b;
            font-weight: bold;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .news-grid {
                grid-template-columns: 1fr;
            }

            .news-item {
                flex-direction: column;
                align-items: flex-start;
            }

            .news-item img {
                width: 100%;
                height: auto;
            }
        }
    </style>

    <style>
        #sidebar-banner {
            max-height: 60vh;
            /* ไม่เกินความสูงของหน้าจอ */
            overflow-y: auto;
            /* มี scrollbar ด้านข้าง */
            padding: 5px;
        }

        #sidebar-banner button {
            display: block;
            width: 90%;
            margin: 3px 0;
        }


    </style>

</head>

<body class="index-page">




    <header id="header" class="header d-flex align-items-center fixed-top">
        <div
            class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets/img/logo_edit.png" alt="Phichai Hospital">
                <!-- <svg class="my-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="bgCarrier" stroke-width="0"></g>
                    <g id="tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="iconCarrier">
                        <path d="M22 22L2 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                        <path d="M17 22V6C17 4.11438 17 3.17157 16.4142 2.58579C15.8284 2 14.8856 2 13 2H11C9.11438 2 8.17157 2 7.58579 2.58579C7 3.17157 7 4.11438 7 6V22" stroke="currentColor" stroke-width="1.5"></path>
                        <path opacity="0.5" d="M21 22V8.5C21 7.09554 21 6.39331 20.6629 5.88886C20.517 5.67048 20.3295 5.48298 20.1111 5.33706C19.6067 5 18.9045 5 17.5 5" stroke="currentColor" stroke-width="1.5"></path>
                        <path opacity="0.5" d="M3 22V8.5C3 7.09554 3 6.39331 3.33706 5.88886C3.48298 5.67048 3.67048 5.48298 3.88886 5.33706C4.39331 5 5.09554 5 6.5 5" stroke="currentColor" stroke-width="1.5"></path>
                        <path d="M12 22V19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                        <path opacity="0.5" d="M10 12H14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                        <path opacity="0.5" d="M5.5 11H7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                        <path opacity="0.5" d="M5.5 14H7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                        <path opacity="0.5" d="M17 11H18.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                        <path opacity="0.5" d="M17 14H18.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                        <path opacity="0.5" d="M5.5 8H7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                        <path opacity="0.5" d="M17 8H18.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                        <path opacity="0.5" d="M10 15H14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                        <path d="M12 9V5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M14 7L10 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg> -->

                <h1 class="sitename">โรงพยาบาลพิชัย</h1>
            </a>


            <nav id="navmenu" class="navmenu">
                
                <ul>
                    <li><a href="/" class="<?= (uri_string() == '') ? 'active' : '' ?>">หน้าหลัก</a></li>
                    <li class="dropdown"><a href="#"><span>ข้อมูลโรงพยาบาล</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="/history ">ประวัติของโรงพยาบาลพิชัย</a></li>
                            <li><a href="/vision">วิสัยทัศน์/พันธกิจ</a></li>
                            <li><a href="/epData">ข้อมูลองค์กร</a></li>
                            <!-- <li><a href="#">Dropdown 4</a></li> -->
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>โครงสร้างหน่วยงาน</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <!-- <ul>
                            <li><a href="#">กรรรมการบริหารโรงพยาบาลพิชัย</a></li>
                            <li class="dropdown"><a href="#"><span>กลุ่มงานต่าง ๆ ภายในโรงพยาบาล</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">กลุ่มงานการจัดการ</a></li>
                                </ul>
                            </li>
                        </ul> -->
                    </li>
                    <li class="dropdown"><a href="#"><span>เอกสาร / ข่าวสาร</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li class="dropdown">
                                <a href="#" class="<?= (in_array(uri_string(), ['ita64', 'ita65', 'ita66', 'ita67', 'ita68'])) ? 'active' : '' ?>">
                                    <span>เอกสาร ITA</span>
                                </a>
                                <ul>
                                    <!-- <li><a href="/ita64" class="<?= (uri_string() == 'ita64') ? 'active' : '' ?>">ปี 2564</a></li>
                                    <li><a href="/ita65" class="<?= (uri_string() == 'ita65') ? 'active' : '' ?>">ปี 2565</a></li>
                                    <li><a href="/ita66" class="<?= (uri_string() == 'ita66') ? 'active' : '' ?>">ปี 2566</a></li>
                                    <li><a href="/ita67" class="<?= (uri_string() == 'ita67') ? 'active' : '' ?>">ปี 2567</a></li> -->
                                    <li><a href="/ita68" class="<?= (uri_string() == 'ita68') ? 'active' : '' ?>">ปี 2568</a></li>

                                </ul>
                            </li>

                            <!-- <li class="dropdown"><a href="#"><span>เอกสาร ITA</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="/ita64">ปี 2564</a></li>
                                    <li><a href="/ita65">ปี 2565</a></li>
                                    <li><a href="/ita66">ปี 2566</a></li>
                                    <li><a href="/ita67">ปี 2567</a></li>
                                    <li><a href="/ita68">ปี 2568</a></li>
                                </ul>
                            </li> -->
                            <!-- <li><a href="#">แบบฟอร์มต่าง ๆ</a></li> -->
                            <!-- 
                            <li class="dropdown"><a href="#"><span>แบบฟอร์มต่าง ๆ</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="/ita64">ปี 2564</a></li>
                                    <li><a href="/ita65">ปี 2565</a></li>
                                    <li><a href="/ita66">ปี 2566</a></li>
                                    <li><a href="/ita67">ปี 2567</a></li>
                                    <li><a href="/ita68">ปี 2568</a></li>
                                </ul>
                            </li> -->
                            <!-- <li><a href="#">Dropdown 1</a></li>
                            <li><a href="#">Dropdown 2</a></li>
                            <li><a href="#">Dropdown 3</a></li>
                            <li><a href="#">Dropdown 4</a></li> -->
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>กิจกรรม</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <!-- <li><a href="#">ปฏิทินกิจกรรม</a></li> -->
                            <!-- <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Deep Dropdown 1</a></li>
                                    <li><a href="#">Deep Dropdown 2</a></li>
                                    <li><a href="#">Deep Dropdown 3</a></li>
                                    <li><a href="#">Deep Dropdown 4</a></li>
                                    <li><a href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dropdown 2</a></li>
                            <li><a href="#">Dropdown 3</a></li>
                            <li><a href="#">Dropdown 4</a></li> -->
                        </ul>
                    </li>
                    <li><a href="/contact" class="<?= (uri_string() == 'contact') ? 'active' : '' ?>">ติดต่อเรา</a></li>
                    <li class="dropdown"><a href="#"><span>เจ้าหน้าที่</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <!-- <li><a href="#">เข้าสู่ระบบ</a></li> -->
                            <li><a href="https://utoapp3.moph.go.th/app65/slip/public/">ตรวจสอบเงินเดือน</a></li>
                            <!-- <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Deep Dropdown 1</a></li>
                                    <li><a href="#">Deep Dropdown 2</a></li>
                                    <li><a href="#">Deep Dropdown 3</a></li>
                                    <li><a href="#">Deep Dropdown 4</a></li>
                                    <li><a href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dropdown 2</a></li>
                            <li><a href="#">Dropdown 3</a></li>
                            <li><a href="#">Dropdown 4</a></li> -->
                        </ul>
                    </li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            <a class="btn-getstarted" href="tel:+6655-832100"><i class="bi bi-telephone-fill"></i> โทรด่วน</a>


        </div>
    </header>