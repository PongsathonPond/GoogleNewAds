<!doctype html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>หน้าหลัก | สมัครตอนนี้</title>
    </title>

    <!-- CSS FILES -->
    <link href="{{ asset('/template/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('/template/css/templatemo-kind-heart-charity.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body id="section_1">
    <section class="hero-section hero-section-full-height" style="margin-bottom: 10%">
        <div class="row">
            <div class="col-md">
                <a href="https://lotto88.company/?ref=XGZBTTVYS">
                    <img src="{{ asset('/template/images/ads/ads.jpg') }}" class="carousel-image img-fluid"
                        alt="...">
                </a>
            </div>
        </div>
    </section>


    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src="{{ asset('/template/images/logo.png') }}" class="logo img-fluid" alt="Kind Heart Charity">

                <span>
                    สมัครรับข้อมูลสุขภาพ
                    <small>Good Health77</small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="{{ route('index') }}">หน้าแรก</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/">เกี่ยวกับเรา</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/">บล็อก</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/">ข่าว</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('register') }}">สมัครตอนนี้</a>
                    </li>




                </ul>
            </div>
        </div>
    </nav>

    <main>

        <section class="hero-section hero-section-full-height">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12 col-12 p-0">
                        <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">

                                    <img src="{{ asset('/template/images/1.png') }}" class="carousel-image img-fluid"
                                        alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>กีฬา</h1>

                                        <p>สุขภาพดีไม่มีขายอยากได้ต้องเล่นกีฬา</p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="{{ asset('/template/images/2.png') }}" class="carousel-image img-fluid"
                                        alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>อาหาร การกิน</h1>

                                        <p>กินดีได้ดี กินไม่ดีได้โรค</p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="{{ asset('/template/images/3.png') }}" class="carousel-image img-fluid"
                                        alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>การพักผ่อน</h1>

                                        <p>นอนพอ ก่อประโยชน์</p>
                                    </div>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">ก่อนหน้า</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">ถัดไป</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 text-center mx-auto">
                        <h2 class="mb-5">ยินดีต้อนรับเข้าสู่ศูนย์รวมข้อมูลสุขภาพ</h2>

                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="{{ route('register') }}" class="d-block">
                                <img src="{{ asset('/template/images/icons/l_1.png') }}" alt="">

                                <p class="featured-block-text"><strong>ข้อมูลสุขภาพทั่วไป</strong></p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="{{ route('register') }}" class="d-block">
                                <img src="{{ asset('/template/images/icons/l_2.png') }}"
                                    class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text"><strong>ข้อมูลอาหารเพื่อสุขภาพ</strong> </p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="{{ route('register') }}" class="d-block">
                                <img src="{{ asset('/template/images/icons/l_3.png') }}"
                                    class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text"><strong>แนะนำกีฬาเพื่อสุขภาพ</strong></p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="{{ route('register') }}" class="d-block">
                                <img src="{{ asset('/template/images/icons/l_4.png') }}"
                                    class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text"><strong>โปรแกรมออกกำลังกาย</strong></p>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section-padding section-bg" id="section2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">

                        <img src="{{ asset('/template/images/c1.png') }}" class="custom-text-box-image img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="custom-text-box">
                            <h2 class="mb-2">สุขภาพหมายถึง</h2>

                            <h5 class="mb-3"> “สภาวะแห่งความสมบูรณ์ทางร่างกาย จิตใจ และสุขภาวะทางสังคม
                                ไม่ใช่เพียงการปราศจากโรคภัยไข้เจ็บเท่านั้น”</h5>

                            <p class="mb-0">

                                ภาวะของความสมบูรณ์ของ ร่างกาย จิตใจ และการดำรงชีวิตอยู่ในสังคม ปราศจากโรคภัย
                                สุขภาพมีความหมายเชิงบวก นั่นคือต้องมีทั้ง สุขภาพกายที่ดี สุขภาพจิตที่ดี สุขภาพสังคมที่ดี
                                สุขภาพจิตวิญญาณที่ดี จึงจะกล่าวได้ว่ามีสุขภาพที่ดี ซึ่งผู้มีสุขภาพดีถือเป็นกำไรของชีวิต
                                เพราะผู้ที่มีจะดำรงชีวิตได้อย่างทีความสุข
                                ทำอย่างไรท่านจึงจะมีสุขภาพดีทั้งกายและใจ..ติดตามบทความของเราได้เลย
                            </p>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-text-box mb-lg-0">
                                    <h5 class="mb-3">บทความสุขภาพ</h5>
                                    <ul class="custom-list mt-2">
                                        <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                            สุขภาพดีจาก การเล่นกีฬา
                                        </li>

                                        <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                            สุขภาพดีจาก อาหารและการกิน
                                        </li>

                                        <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                            สุขภาพดีจาก การพักผ่อน
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                    <div class="counter-thumb">
                                        <div class="d-flex">
                                            <span class="counter-number" data-from="1" data-to="809"
                                                data-speed="1000"></span>
                                            <span class="counter-number-text"></span>
                                        </div>

                                        <span class="counter-text">ยอดสมัครรับข้อมูล</span>
                                    </div>

                                    <div class="counter-thumb mt-4">
                                        <div class="d-flex">
                                            <span class="counter-number" data-from="1" data-to="120"
                                                data-speed="1000"></span>
                                            <span class="counter-number-text"></span>
                                        </div>

                                        <span class="counter-text">สมัครสมาชิกรับหนังสือสุขภาพ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>







        <section class="section-padding" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center mb-4">
                        <h2>บล็อกของเรา</h2>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">

                            <img src="{{ asset('/template/images/tp_1.png') }}" class="custom-block-image img-fluid"
                                alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">ข้อมูลสุขภาพทั่วไป</h5>

                                    <p>ให้ความรู้เกี่ยวกับโรคทั่วไปที่เกิดขึ้นจากการใช้ชีวิตประจำวัน โดยไม่มีค่าใช้จ่าย
                                    </p>




                                </div>

                                <a href="{{ route('register') }}" class="custom-btn btn">สมัครรับข้อมูลตอนนี้</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">

                            <img src="{{ asset('/template/images/tp_2.png') }}" class="custom-block-image img-fluid"
                                alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">ข้อมูลอาหารเพื่อสุขภาพ</h5>

                                    <p>แหล่งรวมข้อมูล อาหารเพื่อสุขภาพมากกว่า 100 รายการ
                                        ทั้งส่วนประกอบวิธีการทำ</p>

                                </div>

                                <a href="{{ route('register') }}" class="custom-btn btn">สมัครรับข้อมูลตอนนี้</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="custom-block-wrap">
                            <img src="{{ asset('/template/images/tp_3.png') }}" class="custom-block-image img-fluid"
                                alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">การออกกำลังกายเพื่อสุขภาพ</h5>

                                    <p>แนะนำกีฬาเพื่อสุขภาพ และการออกกำลังกายเบื้องต้นสำหรับคนรักสุขภาพ
                                    </p>


                                </div>

                                <a href="{{ route('register') }}" class="custom-btn btn">สมัครรับข้อมูลตอนนี้</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="volunteer-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="text-white mb-4">สมัครตอนนี้</h2>

                        <div class="custom-form volunteer-form mb-5 mb-lg-0" action="#" role="form">
                            <h3 class="mb-4">สมัครวันนี้เพื่อรับรางวัลมากมาย</h3>

                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <input type="text" name="volunteer-name" id="name" class="form-control"
                                        placeholder="ชื่อ" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="email" name="volunteer-email" id="email"
                                        pattern="[^ @]*@[^ @]*" class="form-control" placeholder="อีเมล์" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="text" name="volunteer-subject" id="address"
                                        class="form-control" placeholder="ที่อยู่" required>
                                </div>

                                <div class="col-lg-6 col-12">

                                    <input type="text" name="volunteer-subject" id="tel"
                                        class="form-control" placeholder="เบอร์โทร" required>

                                </div>
                            </div>

                            <textarea name="volunteer-message" rows="3" class="form-control" id="message"
                                placeholder="ข้อมูลด้านอื่นๆ"></textarea>

                            <button type="submit" class="form-control ">ส่งข้อมูล</button>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <img src="{{ asset('/template/images/regis.png') }}" class="volunteer-image img-fluid"
                            alt="">

                        <div class="custom-block-body text-center">
                            <h4 class="text-white mt-lg-3 mb-lg-3">สมัครตอนนี้</h4>

                            <p class="text-white">เพื่อรับสิทธิ์และรางวัล
                                พร้อมทั้งข่าวสารด้านสุขภาพต่างๆจากเราโดยไม่เสียค่าใช้จ่ายใดๆ </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="news-section section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 mb-5">
                        <h2>ข่าวอัพเดทล่าสุด</h2>
                    </div>

                    <div class="col-lg-7 col-12">
                        <div class="news-block">
                            <div class="news-block-top">
                                <a href="{{ route('new1') }}">

                                    <img src="{{ asset('/template/images/t1.png') }}" class="news-image img-fluid"
                                        alt="">
                                </a>

                                <div class="news-category-block">
                                    <a href="#" class="category-block-link">
                                        กีฬา
                                    </a>

                                    <a href="#" class="category-block-link">
                                        การออกกำลังกาย
                                    </a>
                                </div>
                            </div>

                            <div class="news-block-info">
                                <div class="d-flex mt-2">
                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            ตุลาคม 12, 2022
                                        </p>
                                    </div>

                                    <div class="news-block-author mx-5">
                                        <p>
                                            <i class="bi-person custom-icon me-1"></i>
                                            โดย PondDev
                                        </p>
                                    </div>

                                    <div class="news-block-comment">
                                        <p>
                                            <i class="bi-chat-left custom-icon me-1"></i>
                                            0 Comments
                                        </p>
                                    </div>
                                </div>

                                <div class="news-block-title mb-2">
                                    <h4><a href="{{ route('new1') }}" class="news-block-title-link">5
                                            ท่าออกกำลังกายสำหรับสายสุขภาพปี 2022</a></h4>
                                </div>

                                <div class="news-block-body">
                                    <p>5 ท่ายอดฮิตสำหรับออกกำลังกายที่บ้านโดยไม่ต้องมีอุปกรณ์
                                        เหมาะสำหรับผู้ที่ไม่มีเวลาและมือใหม่ที่กำลังเริ่มต้น</p>
                                </div>
                            </div>
                        </div>

                        <div class="news-block mt-3">
                            <div class="news-block-top">
                                <a href="{{ route('new2') }}">

                                    <img src="{{ asset('/template/images/p1.png') }}" class="news-image img-fluid"
                                        alt="">
                                </a>

                                <div class="news-category-block">
                                    <a href="#" class="category-block-link">
                                        อาหาร
                                    </a>

                                    <a href="#" class="category-block-link">
                                        ผักผลไม้
                                    </a>


                                </div>
                            </div>

                            <div class="news-block-info">
                                <div class="d-flex mt-2">
                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            ตุลาคม 9, 2022
                                        </p>
                                    </div>

                                    <div class="news-block-author mx-5">
                                        <p>
                                            <i class="bi-person custom-icon me-1"></i>
                                            โดย PondDev
                                        </p>
                                    </div>

                                    <div class="news-block-comment">
                                        <p>
                                            <i class="bi-chat-left custom-icon me-1"></i>
                                            0 Comments
                                        </p>
                                    </div>
                                </div>

                                <div class="news-block-title mb-2">
                                    <h4><a href="{{ route('new2') }}" class="news-block-title-link">5
                                            ผักที่ดีที่สุดในปี
                                            2022</a>
                                    </h4>
                                </div>

                                <div class="news-block-body">
                                    <p>5 ผักยอดฮิตในปี 2022 สำหรับสายสุขภาพสำหรับการนำมาประกอบอาหาร</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mx-auto">
                        <form class="custom-form search-form" action="#" method="post" role="form">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">

                            <button type="submit" class="form-control">
                                <i class="bi-search"></i>
                            </button>
                        </form>

                        <h5 class="mt-5 mb-3">ข่าวก่อนหน้า</h5>

                        <div class="news-block news-block-two-col d-flex mt-4">
                            <div class="news-block-two-col-image-wrap">
                                <a href="news-detail.html">
                                    <img src="{{ asset('/template/images/sport.png') }}" class="news-image img-fluid"
                                        alt="">
                                </a>
                            </div>

                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6><a href="news-detail.html" class="news-block-title-link">5
                                            กีฬายอดนิยมสำหรับคนไม่มีเวลา</a>
                                    </h6>
                                </div>

                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        มิถุนายน 10, 2022
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="news-block news-block-two-col d-flex mt-4">
                            <div class="news-block-two-col-image-wrap">
                                <a href="news-detail.html">
                                    <img src="{{ asset('/template/images/news/close-up-happy-people-working-together.jpg') }}"
                                        class="news-image img-fluid" alt="">
                                </a>
                            </div>

                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6><a href="news-detail.html" class="news-block-title-link">เคล็ดลับสุขภาพจิตดี
                                        </a>
                                    </h6>
                                </div>

                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        มิถุนายน 9, 2022
                                    </p>
                                </div>
                            </div>
                        </div>


                        <br>
                        <div class="tags-block">
                            <h5 class="mb-3">Tags</h5>

                            <a href="/" class="tags-block-link">
                                สุขภาพ
                            </a>

                            <a href="/" class="tags-block-link">
                                สมัครสมาชิกรับข้อมูล
                            </a>

                            <a href="/" class="tags-block-link">
                                กีฬา
                            </a>

                            <a href="/" class="tags-block-link">
                                อาหาร
                            </a>


                        </div>

                        <div class="custom-form subscribe-form" action="#" role="form">
                            <h5 class="mb-4">กรอกอีกเมล์ สมัครสมาชิกตอนนี้</h5>

                            <input type="email" name="subscribe-email" id="subscribe-email"
                                pattern="[^ @]*@[^ @]*" class="form-control" placeholder="อีเมล์" required>

                            <div class="col-lg-12 col-12">

                                <a href="{{ route('index') }}">

                                    <button type="submit" class="form-control ">ติดตาม</button></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>





        {{-- <section class="contact-section section-padding" id="section_6">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                        <div class="contact-info-wrap">
                            <h2>Get in touch</h2>

                            <div class="contact-image-wrap d-flex flex-wrap">
                                <img src="{{ asset('/template/images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg') }}"
                                    class="img-fluid avatar-image" alt="">

                                <div class="d-flex flex-column justify-content-center ms-3">
                                    <p class="mb-0">Clara Barton</p>
                                    <p class="mb-0"><strong>HR & Office Manager</strong></p>
                                </div>
                            </div>

                            <div class="contact-info">
                                <h5 class="mb-3">Contact Infomation</h5>

                                <p class="d-flex mb-2">
                                    <i class="bi-geo-alt me-2"></i>
                                    Akershusstranda 20, 0150 Oslo, Norway
                                </p>

                                <p class="d-flex mb-2">
                                    <i class="bi-telephone me-2"></i>

                                    <a href="tel: 305-240-9671">
                                        305-240-9671
                                    </a>
                                </p>

                                <p class="d-flex">
                                    <i class="bi-envelope me-2"></i>

                                    <a href="mailto:info@yourgmail.com">
                                        donate@charity.org
                                    </a>
                                </p>

                                <a href="#" class="custom-btn btn mt-3">Get Direction</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 mx-auto">
                        <form class="custom-form contact-form" action="#" method="post" role="form">
                            <h2>Contact form</h2>

                            <p class="mb-4">Or, you can just send an email:
                                <a href="#">info@charity.org</a>
                            </p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="first-name" id="first-name" class="form-control"
                                        placeholder="Jack" required>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="last-name" id="last-name" class="form-control"
                                        placeholder="Doe" required>
                                </div>
                            </div>

                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                class="form-control" placeholder="Jackdoe@gmail.com" required>

                            <textarea name="message" rows="5" class="form-control" id="message" placeholder="What can we help you?"></textarea>

                            <button type="submit" class="form-control">Send Message</button>
                        </form>
                    </div>

                </div>
            </div>
        </section> --}}
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">


                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <h5 class="site-footer-title mb-3">Quick Links</h5>

                    <ul class="footer-menu">
                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">ติดต่อ</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">สมัครสมาชิก</a></li>



                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">ผู้สนับสนุน</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mx-auto">
                    <h5 class="site-footer-title mb-3">ช่องทางการติดต่อ</h5>



                    <p class="text-white d-flex">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@yourgmail.com" class="site-footer-link">
                            goodhealth77@health.con
                        </a>
                    </p>



                    <a href="#" class="custom-btn btn mt-3">กลับด้านบน</a>
                </div>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-7 col-12">
                        <p class="copyright-text mb-0">Copyright © 2020 <a href="#"> Goodhealth77</a>

                        </p>
                    </div>

                    <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                        <ul class="social-icon">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-linkedin"></a>
                            </li>


                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </footer>


    <script src="{{ asset('/template/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/template/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('/template/js/click-scroll.js') }}"></script>
    <script src="{{ asset('/template/js/counter.js') }}"></script>
    <script src="{{ asset('/template/js/custom.js') }}"></script>

</body>

</html>
