<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="Author" content="IT Center PTDI" />
    <meta name="Owner" content="PT Dirgantara Indonesia" />
    <meta name="keywords"
        content="customer relation management, customer, support, dirgantara, relation, indonesia, CS, PT. DI" />
    <meta name="description" content="Customer Support Dirgantara Indonesia" />
    <title>CUSTOMER RELATION MANAGEMENT DIRGANTARA INDONESIA</title>

    <title>@yield('title')</title>

    @include('includes.style')
</head>

<body>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-xl-flex align-items-center align-items-end fixed-top topbar-transparent">
        <div class="container d-flex justify-content-end">
            <div class="social-links">
                <a href="{{ route('home') }}" class="login"><i class="fa fa-home"></i> Home</a>
                <a href="gallery" class="login"><i class="fa fa-image"></i> Gallery</a>
                <a href="footer" class="login"><i class="fa fa-address-book"></i> Contact Us</a>

                <!-- Button trigger modal -->
                <?php
                    // if (isset($_SESSION['userid'])) {
                    // $company = isset($_SESSION["company"]) ? $_SESSION["company"] : '';
                ?>

                {{-- <a href="logout.php"><i class="fa fa-sign-out"></i> Log Out</a> --}}
                <?php
                //} else {
                ?>
                <a href="#" class="login" data-toggle="modal" data-target="#exampleModalCenter"><i
                        class="fa fa-sign-in"></i> Login</a>
                <!-- <a href="#" class="login" data-toggle="modal" data-target="#frgtpasswd"><i class="fa fa-sign-in"></i> Lupa Password</a>-->

                <?php //   } ?>
            </div>
        </div>
    </div>

    <!-- BEGIN: Main Menu-->
    @include('includes.navbar')
    <!-- END: Main Menu-->

    <!-- BEGIN: Main Menu-->
    @include('pages.slide')
    <!-- END: Main Menu-->

    <!-- BEGIN: Main Menu-->
    @include('pages.intro')
    <!-- END: Main Menu-->

    <!-- BEGIN: Main Menu-->
    @include('includes.footer')
    <!-- END: Main Menu-->
