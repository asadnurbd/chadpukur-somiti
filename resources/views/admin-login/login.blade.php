<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">


    <link rel="stylesheet" href="{{ asset('assets') }}/css/login.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/main.css" />


</head>

<body>
    <header>
        <div class="inner-width">
            <a href="#" class="logo"><img src="{{ asset('assets') }}/images/small-logo.png" alt=""></a>
            <i class="menu-toggle-btn fas fa-bars"></i>
            <nav class="navigation-menu-1">
                <a href="/home"><i class="fas fa-home nav-home"></i> Home</a>
                <a href="form.html"><i class="fas fa-align-left nav-about"></i> Form</a>
                <!-- <a href="/admin"><i class="fab fa-buffer nav-works"></i> Login</a> -->
                <!-- <a href="#"><i class="fas fa-users nav-team"></i> Team</a>
                <a href="login.html"><i class="fas fa-headset nav-contact"></i> LOGIN</a> -->
            </nav>
        </div>
    </header>

    <section>
        <div class="imgBx">
            <img src="{{ asset('assets') }}/images/cover.jpg">
            <h2>চাঁদপুকুর খ্রীষ্টান সমবায় সমিতি লিঃ</h2>
        </div>
        <div class="contentBx">
             
            <div class="formBx">
                <?php
                 $message=Session::get('error_message');
                 if($message){  ?>

                 </br><h3 class="text-danger" role="alert" style="font-family: 'PT Serif', serif; color:red; padding-bottom:40px;text-align:center;">

                    <?php
                     echo "$message"; 
                     Session::put('error_message','null')
                    
                    ?>
                    
                   
                    </h3>
                <?php }  ?>

                <h2>প্রবেশ করুন</h2>
              
                


             
                <form  method="post"   action="/admin-login" >
                    @csrf

                 

                    <div class="inputBx">
                        <span>ব্যবহারকারীর নাম</span>
                        <input type="text" name="admin_name" required>

                    </div>
                    <span class="text-danger" role="alert" style="font-family: 'PT Serif', serif;">
                        @error('name')
                    
                            {{ $message }}
                        
                         @enderror
                    </span>

                    <span class="text-danger" role="alert" style="font-family: 'PT Serif', serif;">
                        @error('password')
                    
                            {{ $message }}
                        
                         @enderror
                    </span>

                    <div class="inputBx">
                        <span>পাসওয়ার্ড</span>
                        <input type="password" name="admin_password" required>
                    </div>
                    <div class="remember">
                        <label> <input type="checkbox" name=""> আমাকে মনে কর</label>

                    </div>

                    <div class="inputBx">

                        <input type="submit" value="সাইন ইন করুন" name="">
                    </div>


                </form>



            </div>

        </div>
    </section>

</body>
<script type="text/javascript">
    $(".menu-toggle-btn").click(function() {
        $(this).toggleClass("fa-times-circle");
        $(".navigation-menu").toggleClass("active");
    });
</script>

</html>