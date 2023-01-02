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
            <a href="/home" class="logo"><img src="{{ asset('assets') }}/images/small-logo.png" alt=""></a>
            <i class="menu-toggle-btn fas fa-bars"></i>
            <nav class="navigation-menu-1">
                <a href="/home"><i class="fas fa-home nav-home"></i> Home</a>
                <a href="form.html"><i class="fas fa-align-left nav-about"></i> {{Session::get('admin_name')}}</a>
                <a href="/admin-logout"><i class="fab fa-buffer nav-works"></i> Logout</a>
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
                            <h3> সদস্য খুজুন</h3>
                            <form>
                                <input class="form-control" type="text" placeholder="সদস্য নাম">
                                <input class="form-control" type="text" placeholder="জাতীয় পরিচয় পত্রের নং:">
                                <!-- <div class="control-group">
                                    <select class="custom-select">
                                            <option selected>Choose a service</option>
                                            <option value="1">House Cleaning</option>
                                            <option value="2">Apartment Cleaning</option>
                                            <option value="3">Office Cleaning</option>
                                        </select>
                                </div>
                                <textarea class="form-control" placeholder="Comment"></textarea> -->
                                <button class="btn btn-block">খোঁজ করতে  এখানে ক্লিক করুন

                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Pricing Plan Start -->
        <div class="price">
            <div class="container">
                <div class="section-header">
                    <!-- <p>Pricing Plan</p> -->
                    <h2>সমিতির ব্যবস্থাপনা গুলো নিম্নে উল্লেখ করা হলো:-</h2>
                </div>
                <div class="row">

                    <div class="col-md-3">
                        <a href="/user-create-form">
                            <div class="price-item">
                                <div class="price-header">
                                    <div class="price-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="price-title">
                                        <h2>সদস্য তৈরি করুন</h2>
                                    </div>
                                    <div class="price-pricing">
                                        <h2><small></small>99</h2>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>

                    <div class="col-md-3">
                        <div class="price-item featured-item">
                            <a href="/all-user-information">
                                <div class="price-header">
                                    <div class="price-icon">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="price-title">
                                        <h2>সকল সদস্যের তথ্য</h2>
                                        <!-- <h2>লোন প্রদান করুন</h2> -->

                                    </div>
                                    <div class="price-pricing">
                                        <h2><small></small>149</h2>
                                    </div>
                                </div>
                            </a>


                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="price-item">
                            <div class="price-header">
                                <div class="price-icon">
                                    <i class="fa fa-gift"></i>
                                </div>
                                <div class="price-title">
                                    <h2>লোন ব্যাবস্থাপনা</h2>
                                </div>
                                <div class="price-pricing">
                                    <h2><small>$</small>199</h2>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <div class="price-icon">
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="price-title">
                                    <h2>সঞ্চয় কালেকশন করুন</h2>
                                </div>
                                <div class="price-pricing">
                                    <h2><small>$</small>149</h2>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="price-item">
                            <div class="price-header">
                                <div class="price-icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="price-title">
                                    <h2>সঞ্চয় ব্যাবস্থাপনা</h2>
                                </div>
                                <div class="price-pricing">
                                    <h2><small>$</small>99</h2>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <div class="price-icon">
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="price-title">
                                    <h2> সকল সদস্যের ব্যালেন্স</h2>
                                </div>
                                <div class="price-pricing">
                                    <h2><small>$</small>149</h2>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="price-item">
                            <div class="price-header">
                                <div class="price-icon">
                                    <i class="fa fa-gift"></i>
                                </div>
                                <div class="price-title">
                                    <h2> লোন কালেকশন</h2>
                                </div>
                                <div class="price-pricing">
                                    <h2><small>$</small>199</h2>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <div class="price-icon">
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="price-title">
                                    <h2> FDR কালেকশন </h2>
                                </div>
                                <div class="price-pricing">
                                    <h2><small>$</small>149</h2>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="price-item">
                            <div class="price-header">
                                <div class="price-icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="price-title">
                                    <h2>DPS কালেকশন</h2>
                                </div>
                                <div class="price-pricing">
                                    <h2><small>$</small>99</h2>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <div class="price-icon">
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="price-title">
                                    <h2>দৈনিক কালেকশন</h2>
                                </div>
                                <div class="price-pricing">
                                    <h2><small>$</small>149</h2>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="price-item">
                            <div class="price-header">
                                <div class="price-icon">
                                    <i class="fa fa-gift"></i>
                                </div>
                                <div class="price-title">
                                    <h2>দৈনিক লেনদেন</h2>
                                </div>
                                <div class="price-pricing">
                                    <h2><small>$</small>199</h2>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <div class="price-icon">
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="price-title">
                                    <h2>দৈনিক প্রদান</h2>
                                </div>
                                <div class="price-pricing">
                                    <h2><small>$</small>149</h2>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="price-item">
                            <div class="price-header">
                                <div class="price-icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="price-title">
                                    <h2>খরচের খাত</h2>
                                </div>
                                <div class="price-pricing">
                                    <h2><small>$</small>99</h2>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <div class="price-icon">
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="price-title">
                                    <h2>কর্মচারীর তালিকা</h2>
                                </div>
                                <div class="price-pricing">
                                    <h2><small>$</small>149</h2>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="price-item">
                            <div class="price-header">
                                <div class="price-icon">
                                    <i class="fa fa-gift"></i>
                                </div>
                                <div class="price-title">
                                    <h2>অন্যান্য নগদ জমা</h2>
                                </div>
                                <div class="price-pricing">
                                    <h2><small>$</small>199</h2>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <div class="price-icon">
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="price-title">
                                    <h2>ঋণদাতা তৈরি করুন</h2>
                                </div>
                                <div class="price-pricing">
                                    <h2><small>$</small>149</h2>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="price-item">
                            <div class="price-header">
                                <div class="price-icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="price-title">
                                    <h2>ঋণ গ্রহণ করুন</h2>
                                </div>
                                <div class="price-pricing">
                                    <h2><small>$</small>99</h2>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <div class="price-icon">
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="price-title">
                                    <h2>ঋন ব্যাবস্থাপনা</h2>
                                </div>
                                <div class="price-pricing">
                                    <h2><small>$</small>149</h2>
                                </div>
                            </div>


                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- Pricing Plan End -->



        <!-- About Start -->
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

        <!-- About End -->


        <!-- Service Start -->
        <!-- <div class="service">
            <div class="container">
                <div class="section-header">
                    <p>Our Services</p>
                    <h2>Provide Services Worldwide</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="img/service-1.jpg" alt="Service">
                            <h3>Flour Cleaning</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare
                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="img/service-2.jpg" alt="Service">
                            <h3>Glass Cleaning</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare
                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="img/service-3.jpg" alt="Service">
                            <h3>Carpet Cleaning</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare
                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="img/service-4.jpg" alt="Service">
                            <h3>Toilet Cleaning</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare
                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Service End -->


        <!-- Feature Start -->
        <!-- <div class="feature">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="section-header left">
                            <p>Why Choose Us</p>
                            <h2>Expert Cleaners and World Class Services</h2>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.
                            Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                        </p>
                        <a class="btn" href="">Learn More</a>
                    </div>
                    <div class="col-md-7">
                        <div class="row align-items-center feature-item">
                            <div class="col-5">
                                <img src="img/feature-1.jpg" alt="Feature">
                            </div>
                            <div class="col-7">
                                <h3>Expert Cleaners</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate.
                                </p>
                            </div>
                        </div>
                        <div class="row align-items-center feature-item">
                            <div class="col-5">
                                <img src="img/feature-2.jpg" alt="Feature">
                            </div>
                            <div class="col-7">
                                <h3>Reasonable Prices</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate.
                                </p>
                            </div>
                        </div>
                        <div class="row align-items-center feature-item">
                            <div class="col-5">
                                <img src="img/feature-3.jpg" alt="Feature">
                            </div>
                            <div class="col-7">
                                <h3>Quick & Best Services</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Feature End -->


        <!-- Team Start -->
        <!-- <div class="team">
            <div class="container">
                <div class="section-header">
                    <p>Team Member</p>
                    <h2>Meet Our Expert Cleaners</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-1.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Josh Dunn</h2>
                                <h3>CEO</h3>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-2.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Mollie Ross</h2>
                                <h3>Team Manager</h3>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-3.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Dylan Adams</h2>
                                <h3>Cleaner</h3>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-4.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Jennifer Page</h2>
                                <h3>Cleaner</h3>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Team End -->


        <!-- FAQs Start -->
        <!-- <div class="faqs">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="section-header left">
                            <p>You Might Ask</p>
                            <h2>Frequently Asked Questions</h2>
                        </div>
                        <img src="img/faqs.jpg" alt="Image">
                    </div>
                    <div class="col-md-7">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                        <span>1</span> Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                        <span>2</span> Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                        <span>3</span> Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                        <span>4</span> Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                        <span>5</span> Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn" href="">Ask more</a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- FAQs End -->




        <!-- Newsletter Start -->
        <!-- <div class="newsletter">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h2>Get A Free Quote</h2>
                        <p>
                            Lorem ipsum dolor sit amet adipiscing elit
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="form">
                            <input class="form-control" placeholder="Email here">
                            <button class="btn">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Newsletter End -->


        <!-- Testimonial Start -->
        <!-- <div class="testimonial">
            <div class="container">
                <div class="section-header">
                    <p>Client Review</p>
                    <h2>Client Says About Service</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-1.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-2.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-3.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-4.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Testimonial End -->


        <!-- Call to Action Start -->
        <!-- <div class="call-to-action">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-9">
                        <h2>Get A Free Cleaning Service</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        </p>
                    </div>
                    <div class="col-md-3">
                        <a class="btn" href="https://htmlcodex.com/contact">Contact Us</a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Call to Action End -->


        <!-- Blog Start -->
        <!-- <div class="blog">
            <div class="container">
                <div class="section-header">
                    <p>Latest From Blog</p>
                    <h2>Stay Updated From Our Blog</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <img src="img/blog-1.jpg" alt="Blog">
                            <h3>Lorem ipsum dolor</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Flour Cleaning</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>11-Jun-20</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum
                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <img src="img/blog-2.jpg" alt="Blog">
                            <h3>Lorem ipsum dolor</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Glass Cleaning</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>11-Jun-20</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum
                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <img src="img/blog-3.jpg" alt="Blog">
                            <h3>Lorem ipsum dolor</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Carpet Cleaning</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>11-Jun-20</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum
                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Blog End -->


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-contact">
                            <h2>Get In Touch</h2>
                            <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                            <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                            <p><i class="fa fa-envelope"></i>info@example.com</p>
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
                        <div class="footer-link">
                            <h2>Useful Link</h2>
                            <a href="">About Us</a>
                            <a href="">Our Story</a>
                            <a href="">Our Services</a>
                            <a href="">Our Projects</a>
                            <a href="">Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-link">
                            <h2>Useful Link</h2>
                            <a href="">Our Clients</a>
                            <a href="">Clients Review</a>
                            <a href="">Ongoing Project</a>
                            <a href="">Customer Support</a>
                            <a href="">FAQs</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-form">
                            <h2>Stay Updated</h2>
                            <p>
                                Lorem ipsum dolor sit amet, adipiscing elit. Etiam accumsan lacus eget velit
                            </p>
                            <input class="form-control" placeholder="Email here">
                            <button class="btn">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container footer-menu">
                <div class="f-menu">
                    <a href="">Terms of use</a>
                    <a href="">Privacy policy</a>
                    <a href="">Cookies</a>
                    <a href="">Help & FQAs</a>
                    <a href="">Contact us</a>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="https://htmlcodex.com">HTML Codex</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
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