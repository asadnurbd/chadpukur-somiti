<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>CCSSL-Form</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
    <link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <!-- Main Style Css -->

    <link rel="stylesheet" href="{{ asset('assets') }}/css/main.css" />

</head>

<body class="form-v10">

    <header>
        <div class="inner-width">
            <a href="/home" class="logo"><img src="{{ asset('assets') }}/images/small-logo.png" alt=""></a>
            <i class="menu-toggle-btn fas fa-bars"></i>
            <nav class="navigation-menu-1">
                <a href="/home"><i class="fas fa-home nav-home"></i> Home</a>
                <a href="form.html"><i class="fas fa-align-left nav-about"></i> Form</a>
                <a href="/admin"><i class="fab fa-buffer nav-works"></i> Login</a>
                <!-- <a href="#"><i class="fas fa-users nav-team"></i> Team</a>
                <a href="login.html"><i class="fas fa-headset nav-contact"></i> LOGIN</a> -->
            </nav>
        </div>
    </header>

    <div class="page-content">
        <div class="form-v10-content">
            <form class="form-detail" action="/user-admission-form" method="post" id="myform">
             @csrf
                <div class="form-left">
                    <h2 class="title">চাঁদপুকুর খ্রীস্টান সমবায় সমিতি</h2>
                    <h2 class="title">সঞ্চয় আমানত হিসাব খোলার আবেদন পত্র</h2>
                    <p class="sub-title">আমি এতদ্বারা চাঁদপুকুর খ্রীস্টান সমবায় সমিতি লিঃ এ সঞ্চয়ী আমানত খোলার আবেদন করছি।</p>

                    <div class="form-row">
                        <p class="mini-title">এ উদ্দেশ্যে আমার প্রয়োজনীয় বিষয়াদি নিম্নে উল্লেখ করা হলঃ- </p>
                    </div>
                    <!-- <div class="form-row">
                        <input type="text" name="street" class="street" id="street" placeholder="ঠিকানাঃ" required>
                    </div> -->
                    
                    <!-- <div class="form-row">

                        <select name="title">
						    <option class="option" value="title">Title</option>
						    <option class="option" value="businessman">Businessman</option>
						    <option class="option" value="reporter">Reporter</option>
						    <option class="option" value="secretary">Secretary</option>
						</select>
                        <span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
                    </div> -->
                    <div class="form-row">
                        <input type="text" name="সদস্য_নাম_মি_মিসেস_মিস" value="{{old('সদস্য_নাম_মি_মিসেস_মিস')}}" class="street" id="street" placeholder="(1) নাম(স্পষ্ট অক্ষরে)মিঃ/মিসেস/মিস ঃ" >
                        
                    </div>
                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" name="সদস্য_পিতা_স্বামীর_নাম"  value="{{old('সদস্য_পিতা_স্বামীর_নাম')}}" id="first_name" class="input-text" placeholder="(2) পিতা/স্বামীর নামঃ" required>
                        </div>

                        <div class="form-row form-row-2">
                            <input type="text" name="সদস্য_মাতার_নাম" value="{{old('সদস্য_মাতার_নাম')}}" id="last_name" class="input-text" placeholder="(3) মাতার নামঃ" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" name="সদস্য_বর্তমান_ঠিকানা" id="first_name" class="input-text" placeholder="(4) বর্তমান ঠিকানাঃ" required>
                        </div>
                        <div class="form-row form-row-2">
                            <input type="text" name="সদস্য_স্থায়ী_ঠিকানা_গ্রাম" id="last_name" class="input-text" placeholder="(5) স্থায়ী ঠিকানাঃগ্রামঃ" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" name="সদস্য_পো" id="first_name" class="input-text" placeholder="পোঃ" required>
                        </div>
                        <div class="form-row form-row-2">
                            <input type="text" name="সদস্য_উপজেলা" id="last_name" class="input-text" placeholder="উপজেলাঃ" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" name="সদস্য_জেলা" id="first_name" class="input-text" placeholder="জেলাঃ" required>
                        </div>
                        <div class="form-row form-row-2">
                            <input type="text" name="সদস্য_বয়স_বৎসর" id="last_name" class="input-text" placeholder="(6) বয়স..বৎসর।জন্মস্থানঃ" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" name="সদস্য_জন্মতারিখ" id="first_name" class="input-text" placeholder="জন্মতারিখঃ" required>
                        </div>
                        <div class="form-row form-row-2">
                            <input type="text" name="সদস্য_জাতীয়তা" id="last_name" class="input-text" placeholder="(7)জাতীয়তাঃ" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" name="সদস্য_ধর্ম" id="first_name" class="input-text" placeholder="ধর্মঃ" required>
                        </div>
                        <div class="form-row form-row-2">
                            <input type="text" name="সদস্য_পেশা" id="last_name" class="input-text" placeholder="(8)পেশাঃ " required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" name="" id="first_name" class="input-text" placeholder="পদমর্যাদাঃ" required>
                        </div>
                        <div class="form-row form-row-2">
                            <input type="text" name="" id="last_name" class="input-text" placeholder="(9)নিয়োগকর্তার নাম ও ঠিকানাঃ " required>
                        </div>
                    </div>
                 
                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" name="অন্য_সমিতির_সদস্য_নং" id="first_name" class="input-text" placeholder="10)আপনি কি ইতি পূর্বে অত্র সমিতির সদস্য ছিলেন?হ্যা/না। যদি থাকেন তবে সদস্য নং" required>
                        </div>
                        <div class="form-row form-row-2">
                            <input type="text" name="" id="last_name" class="input-text" placeholder="আমি এই মর্মে ঘোষণা করছি যে " required>
                        </div>
                    </div>

                    <div class="form-row">
                        <p>ক)আমি অত্র সমিতির উপবিধি নিজে পাঠ করছি/আমাকে পাঠ করে শোনানো হয়েছে এবং উক্ত উপবিধি ও এর সকল সংশোধনী মেনে চলব। </p>
                    </div>

                    <div class="form-row">
                        <input type="text" name="100_টাকা_জমা" class="company" id="company" placeholder="খ)আমি সমিতিতে আমার হিসেব প্রতি মাসে নূন্যতম.. .....  টাকা জমা দিব।" required>
                    </div>
                    <div class="form-row">
                        <p>গ)উপরে বর্ণিত সকল তথ্য সম্পূর্ণ সঠিক ও সত্য।</p>
                    </div>

                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" name="first_name" id="first_name" class="input-text" placeholder="তারিখঃ" required>
                        </div>
                        <div class="form-row form-row-2">
                            <input type="text" name="last_name" id="last_name" class="input-text" placeholder="আবেদনকারীর স্বাক্ষর:" required>
                        </div>
                    </div>




                    <h2 class="sub-title">উত্তরাধিকারী মনোনয়ন </h2>


                    <div class="form-row">

                        <div class='container'>
                            <span class='fieldName'>
                                <p>আমি এই মর্মে নিশ্চয়তা প্রদান করছি যে,আমার মৃত্যুর পর</p>
                            </span>
                            <span class='data'>
                                <input type="text" name="" class="company" id="company" placeholder=" " required>
                            </span>

                            <span class='fieldName'>
                                <p>আমার নামীয় হিসেবে জমাকৃত টাকা নিম্নোক্ত ব্যক্তিকে প্রদান করার অধিকার অত্র সমিতির কার্যকরী পরিষদকে প্রদান করছি।</p>
                            </span>
                        </div>

                    </div>



                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" name="উত্তরাধিকারীর_নাম" id="first_name" class="input-text" placeholder="উত্তরাধিকারীর নামঃ" required>
                        </div>
                        <div class="form-row form-row-2">
                            <input type="text" name="নমিনির_সম্পর্ক" id="last_name" class="input-text" placeholder="সম্পর্কঃ " required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" name="উত্তরাধিকারীর_স্থায়ী_ঠিকানা" id="first_name" class="input-text" placeholder="উত্তরাধিকারীর স্থায়ী  ঠিকানাঃ " required>
                        </div>
                        <div class="form-row form-row-2">
                            <input type="text" name="উত্তরাধিকারীর_পো" id="last_name" class="input-text" placeholder="পোঃ " required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" name="উত্তরাধিকারীর_উপজেলা" id="first_name" class="input-text" placeholder="উপজেলাঃ  " required>
                        </div>
                        <div class="form-row form-row-2">
                            <input type="text" name="উত্তরাধিকারীর_জেলা" id="last_name" class="input-text" placeholder="জেলাঃ" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" name="আবেদন_ভর্তির_তারিখ" id="first_name" class="input-text" placeholder="তারিখঃ " required>
                        </div>
                        <div class="form-row form-row-2">
                            <input type="text" name="ভর্তির_আবেদনকারীর_স্বাক্ষর" id="last_name" class="input-text" placeholder="আবেদনকারীর স্বাক্ষর:" required>
                        </div>
                    </div>

                    <!-- 
                    <div class="form-row">
                        <input type="text" name="additional" class="additional" id="additional" placeholder="" required>
                    </div> -->


                    <h2>দু'জন পরিচয় প্রদানকারীর বিবরণ </h2>

                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" name="পরিচয়_প্রদানকারীর_নাম_1" id="first_name" class="input-text" placeholder="১। নামঃ " required>
                        </div>
                        <div class="form-row form-row-2">
                            <input type="text" name="পরিচয়_প্রদানকারীর_স্বাক্ষর_1" id="last_name" class="input-text" placeholder=" স্বাক্ষর:" required>
                        </div>
                        <div class="form-row form-row-2">
                            <input type="text" name="পরিচয়_প্রদানকারীর_সদস্য_1" id="last_name" class="input-text" placeholder=" সদস্য নংঃ" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" name="পরিচয়_প্রদানকারীর_নাম_2" id="first_name" class="input-text" placeholder="2। নামঃ " required>
                        </div>
                        <div class="form-row form-row-2">
                            <input type="text" name="পরিচয়_প্রদানকারীর_স্বাক্ষর_2" id="last_name" class="input-text" placeholder=" স্বাক্ষর:" required>
                        </div>
                        <div class="form-row form-row-2">
                            <input type="text" name="পরিচয়_প্রদানকারীর_সদস্য_নং_2" id="last_name" class="input-text" placeholder=" সদস্য নংঃ" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <p>আবেদনকারী আমার ব্যাক্তিগত পরিচিত।অত্র সমিতিতে তাকে সদস্যপদ প্রদানের জন্য আমি বিশেষভাবে সুপারিশ করছি।</p>
                    </div>

                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" name="পরিচয়_প্রদানকারীর_তারিখ" id="first_name" class="input-text" placeholder="তারিখঃ " required>
                        </div>
                        <div class="form-row form-row-2">
                            <input type="text" name="পরিচয়_প্রদানকারীর_আবেদনকারীর_স্বাক্ষর" id="last_name" class="input-text" placeholder="আবেদনকারীর স্বাক্ষর:" required>
                        </div>
                    </div>

                    <!-- 
                    <div class="form-row">
                        <input type="text" name="additional" class="additional" id="additional" placeholder="" required>
                    </div> -->

                    <h2 class="sub-title">শুধুমাত্র অফিসে ব্যবহারের জন্য শুধুমাত্র অফিসে ব্যবহারের জন্য</h2>

<!-- 
                    <div class="form-row">

                        <div class='container'>
                            <span class='fieldName'>
                                <p>অদ্য</p>
                            </span>
                            <span class='data'>
                                <input type="text" name="ম্যানেজমেন্ট_অনুমোদনের_তারিখ" class="company" id="company" placeholder=" " required>
                            </span>

                            <span class='fieldName'>
                                <p>ইং তারিখে অনুষ্ঠিত পরিচালক মন্ডলীর সভায়</p>
                            </span>

                            <span class='data'>

                                <input type="text" name="অনুমোদনকারী_নাম" class="company" id="company" placeholder=" " required>
                            </span>
                            <span class='fieldName'>
                                <p>এর সদস্য পদ সর্ব সম্মতিক্রমে অনুমোদন করা হলো।</p>
                            </span>

                        </div>



                    </div> -->


                    <!-- <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" name="first_name" id="first_name" class="input-text" placeholder="সভার সভাপতির স্বাক্ষরঃ " required>
                        </div>

                    </div> -->


                    <div class="form-row">

                        <div class='container'>
                            <span class='fieldName'>
                                <p>সদস্য নং</p>
                            </span>
                            <span class='data'>
                                <input type="text" name="সদস্য_নং" class="company" id="company" placeholder=" " required>
                            </span>

                            <!-- <span class='fieldName'>
                                <p>এর নিকট থেকে</p>
                            </span>

                            <span class='data'>

                                <input type="text" name="company" class="company" id="company" placeholder=" " required>
                            </span>
                            <span class='fieldName'>
                                <p>নং রশিদ মারফৎ ভর্তি ফি বাবদ</p>
                            </span> -->
<!-- 
                            <span class='data'>

                                <input type="text" name="company" class="company" id="company" placeholder=" " required>
                            </span> -->

                            <!-- <span class='fieldName'>
                                <p>টাকা এবং সঞ্চয় আমানত বাবদ.. টাকা বুঝে পেলাম।</p>
                            </span> -->

                        </div>

                    </div>

                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" name="তারিখ" id="first_name" class="input-text" placeholder="তারিখঃ " required>
                        </div>
                        <div class="form-row form-row-2">
                            <input type="text" name="সংগ্রহকারীর_স্বাক্ষর" id="last_name" class="input-text" placeholder="সংগ্রহকারীর  স্বাক্ষর:" required>
                        </div>
                    </div>

                    <!-- <div class="form-row">
                        <select name="position">
						    <option value="position">Position</option>
						    <option value="director">Director</option>
						    <option value="manager">Manager</option>
						    <option value="employee">Employee</option>
						</select>
                        <span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
                    </div>
                    <div class="form-group">
                        <div class="form-row form-row-3">
                            <input type="text" name="business" class="business" id="business" placeholder="Business Arena" required>
                        </div>
                        <div class="form-row form-row-4">
                            <select name="employees">
							    <option value="employees">Employees</option>
							    <option value="trainee">Trainee</option>
							    <option value="colleague">Colleague</option>
							    <option value="associate">Associate</option>
							</select>
                            <span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
                        </div>
                    </div>
                    <div class="form-row">
                        <input type="text" name="street" class="street" id="street" placeholder="Street + Nr" required>
                    </div>
                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" name="zip" class="zip" id="zip" placeholder="Zip Code" required>
                        </div>
                        <div class="form-row form-row-2">
                            <select name="place">
							    <option value="place">Place</option>
							    <option value="Street">Street</option>
							    <option value="District">District</option>
							    <option value="City">City</option>
							</select>
                            <span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
                        </div>
                    </div>
                    <div class="form-row">
                        <select name="country">
						    <option value="country">Country</option>
						    <option value="Vietnam">Vietnam</option>
						    <option value="Malaysia">Malaysia</option>
						    <option value="India">India</option>
						</select>
                        <span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
                    </div>
                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" name="code" class="code" id="code" placeholder="Code +" required>
                        </div>
                        <div class="form-row form-row-2">
                            <input type="text" name="phone" class="phone" id="phone" placeholder="Phone Number" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <input type="text" name="your_email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Your Email">
                    </div> -->


                    <div class="form-right">
                        <div class="form-checkbox">
                            <label class="container"><p>আমি আপনার সাইটের শর্তাবলী গ্রহণ করি।</p>
                                  <input type="checkbox" name="checkbox">
                                  <span class="checkmark"></span>
                            </label>
                        </div>

                        <div class="form-row-last">
                            <input type="submit" name="register" class="register" value="সংরক্ষণ">
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</body>

<script type="text/javascript">
    $(".menu-toggle-btn").click(function() {
        $(this).toggleClass("fa-times-circle");
        $(".navigation-menu").toggleClass("active");
    });
</script>

</html>