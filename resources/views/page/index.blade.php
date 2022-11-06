<!doctype html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>สมัครรับข้อมูลสุขภาพ</title>

    <!-- CSS FILES -->
    <link href="{{ asset('/template/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('/template/css/templatemo-kind-heart-charity.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>

<body id="section_1">


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
                        <a class="nav-link " href="{{ route('index') }}">หน้าแรก</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>

        <section class="contact-section section-padding" id="section_6">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                        <div class="contact-info-wrap">
                            <h2>สมัครเลยตอนนี้</h2>



                            <div class="contact-info">
                                <h5 class="mb-3">ข้อมูลติดต่อ</h5>

                                <p class="d-flex mb-2">
                                    <i class="bi-geo-alt me-2"></i>
                                    goodhealth77.com
                                </p>



                                <p class="d-flex">
                                    <i class="bi-envelope me-2"></i>

                                    <a href="mailto:info@yourgmail.com">
                                        goodhealth77@health.com
                                    </a>
                                </p>


                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 mx-auto">
                        <div class="custom-form contact-form" action="#" method="get" role="form">
                            <h2>ช่องทางการติดต่อคุณ</h2>

                            <p class="mb-4">หรือส่งเมล์ให้เราได้โดยตรง:
                                <a href="#">goodhealth77@health.com</a>
                            </p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="first-name" id="first-name" class="form-control"
                                        placeholder="ชื่อ" required>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="last-name" id="last-name" class="form-control"
                                        placeholder="นามสกุล" required>
                                </div>
                            </div>

                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                class="form-control" placeholder="อีเมล์" required>

                            <textarea name="message" rows="5" class="form-control" id="message" placeholder="แนะนำตัวคุณสั้นๆ ?"></textarea>

                            <button type="submit" class="form-control">ส่งข้อมูล</button>
                        </div>
                    </div>

                </div>
            </div>
        </section>




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
