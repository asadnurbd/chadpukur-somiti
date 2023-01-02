<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CCSSL- Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Cleaning Company Website Template" name="keywords">
    <meta content="Cleaning Company Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets')}}/css/home.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/style.css" /> -->

    <style>
        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
            font-family: "Open Sans", sans-serif;
        }

        header {
            height: 90px;
            background: #2f3640;
        }

        .inner-width {
            /* max-width: 1000px; */
            padding: 0 70px;
            margin: auto;
            background: #1956ac;
        }

        .logo {
            float: left;
            padding: 20px 0;
        }

        .logo img {
            height: 50px;
        }

        .navigation-menu-1 {
            float: right;
            display: flex;
            align-items: center;
            min-height: 90px;
        }

        .navigation-menu-1 a {
            margin-left: 10px;
            color: #ddd;
            text-transform: uppercase;
            font-size: 14px;
            padding: 12px 20px;
            border-radius: 4px;
            transition: .3s linear;
        }

        .navigation-menu-1 a:hover {
            background: #fff;
            color: #2f3640;
            transform: scale(1.1);
        }

        .navigation-menu-1 i {
            margin-right: 8px;
            font-size: 16px;
        }

        .nav-home {
            color: #ff6b6b;
        }

        .nav-about {
            color: #0abde3;
        }

        .nav-works {
            color: #feca57;
        }

        .nav-team {
            color: #5f27cd;
        }

        .nav-contact {
            color: #1dd1a1;
        }

        .menu-toggle-btn {
            float: right;
            height: 90px;
            line-height: 90px !important;
            color: #fff;
            font-size: 26px;
            display: none !important;
            cursor: pointer;
        }

        @media screen and (max-width:700px) {
            .inner-width {
                /* max-width: 1000px; */
                padding: 0 10px;
                margin: auto;
                background: #1956ac;
            }
            .navigation-menu-1 a {
                margin-left: 10px;
                color: #ddd;
                text-transform: uppercase;
                font-size: 14px;
                padding: 12px 10px;
                border-radius: 4px;
                transition: .3s linear;
            }
        }
    </style>
</head>

<body>
   <header>
        <div class="inner-width">
            <a href="#" class="logo"><img src="{{ asset('assets') }}/images/small-logo.png" alt=""></a>
            <i class="menu-toggle-btn fas fa-bars"></i>
            <nav class="navigation-menu-1">
                <a href="/home"><i class="fas fa-home nav-home"></i> Home</a>
                <a href="form.html"><i class="fas fa-align-left nav-about"></i> Form</a>
                <a href="/admin"><i class="fab fa-buffer nav-works"></i>Login</a>
                <!-- <a href="#"><i class="fas fa-users nav-team"></i> Team</a>
                <a href="login.html"><i class="fas fa-headset nav-contact"></i> LOGIN</a> -->
            </nav>
        </div>
    </header>

    <div class="wrapper">
        <!-- Header Start -->
        <div class="header home">
            <div class="container-fluid">


                <div class="hero row align-items-center">
                    <div class="col-md-7">
                        <img src="{{ asset('assets') }}/images/logo.png" alt="" width="270" height="300">
                        <h2>চাঁদপুকুর খ্রীস্টান </h2>
                        <h2><span>সমবায়</span> সমিতি</h2>
                        <p> সমিতির কার্যক্রম হিসাব রাখার সফটওয়্যার । সমিতির হিসাব রাখুন চোখের সামনে নিরাপদে ।</p>
                        <a class="btn" href="">আরো জানতে</a>
                    </div>
                    <div class="col-md-5">
                        <div class="form">
                        <?php
                            $message=Session::get('error_message');
                            if($message){  ?>

                            </br><h3 class="text-danger" role="alert" style="font-family: 'PT Serif', serif; color:red; padding-bottom:10px;text-align:center;">

                                <?php
                                echo "$message";
                                Session::put('error_message',' ')

                                ?>


                                </h3>
                          <?php }  ?>


                            <h3> প্রবেশ করুন</h3>
                            <form  method="post" action="/admin-login" >
                              @csrf
                                <input class="form-control" type="text" name="admin_name" placeholder="ব্যবহারকারীর নাম">
                                <input class="form-control" type="password" name="admin_password" placeholder="পাসওয়ার্ড">
                                <!-- <div class="control-group">
                                    <select class="custom-select">
                                            <option selected>Choose a service</option>
                                            <option value="1">House Cleaning</option>
                                            <option value="2">Apartment Cleaning</option>
                                            <option value="3">Office Cleaning</option>
                                        </select>
                                </div>
                                <textarea class="form-control" placeholder="Comment"></textarea> -->
                                <button type="submit" class="btn btn-block">এখানে ক্লিক করুন

                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->




        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="{{ asset('assets') }}/images/cover.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="about-text">
                            <h2><span>১০</span> বছরের সাফল্যের শীর্ষে </h2>
                            <p>
                             গ্রামীণ অর্থনৈতিক অবকাঠামো উন্নয়নে চাঁদপুকুর খ্রীস্টান
                             সমবায় সমিতির গর্ব করার মত সুদীর্ঘকালের ঐতিহ্য এবং ইতিহাস রয়েছে। ঊনবিংশ শতাব্দীর গোড়ার দিকে সর্বপ্রথম  চাঁদপুকুর খ্রীস্টান
                             সমবায় সমিতির   যাত্রা শুরু হয়। ১৮২১ সালে সাপাহার ,নওগাঁ জেলানামক শহরে ও তার আশেপাশের দরিদ্রদের সংগঠিত করে চাঁদপুকুর খ্রীস্টান
                             সমবায় সমিতির  প্রতিষ্ঠা হয় । চাঁদপুকুর খ্রীস্টান সমবায় সমিতির  মাধ্যমে নিজস্ব সঞ্চয় সংগ্রহ করে দরিদ্রদের তাদের ভাগ্যোন্নয়নে ব্রতী হয়।
                            </p>
                            <p>

                             গ্রামীণ অর্থনৈতিক অবকাঠামো উন্নয়নে চাঁদপুকুর খ্রীস্টান
                             সমবায় সমিতির গর্ব করার মত সুদীর্ঘকালের ঐতিহ্য এবং ইতিহাস রয়েছে। ঊনবিংশ শতাব্দীর গোড়ার দিকে সর্বপ্রথম  চাঁদপুকুর খ্রীস্টান
                             সমবায় সমিতির   যাত্রা শুরু হয়।
                            </p>
                            <a class="btn" href="">আরো জানতে</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->



        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-contact">
                            <h2>আমাদের ঠিকানা</h2>
                            <p><i class="fa fa-map-marker-alt"></i>চাঁদপুকুর মিশন,বাঁকরইল,পত্নীতলা,নওগাঁ</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-contact">
                            <h2>সামাজিক যোগাযোগ</h2>
                            <div class="footer-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-contact">
                          <h2> যোগাযোগ</h2>
                            <p><i class="fa fa-phone-alt"></i>০১৭৪০৮০৮৩৭২/p>
                            <p><i class="fa fa-envelope"></i>cc-ssl.com</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-form">
                            <h2>আমাদের সম্পর্কে</h2>
                            <p>
                                গ্রামীণ অর্থনৈতিক অবকাঠামো উন্নয়নে চাঁদপুকুর খ্রীস্টান সমবায় সমিতির গর্ব করার মত সুদীর্ঘকালের ঐতিহ্য এবং ইতিহাস রয়েছে।
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="https://htmlcodex.com">Copyright 2022 CCSSL </a>| All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Developed By <a href="https://asadnur.com">asadnur.com</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


</body>

</html>
