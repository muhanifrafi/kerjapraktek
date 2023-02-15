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

<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Cutive+Mono|Sue+Ellen+Francisco" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Sue+Ellen+Francisco" rel="stylesheet">

<body>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-xl-flex align-items-center align-items-end">
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
    
    <!-- ======= Header ======= -->
                <section id="header-page" class="clearfix" style="">
    <div class="containerx block d-flex align-items-center justify-content-center" style="background-image:url(http://127.0.0.1:8000/frontend/assets/img/header/images_header/header6.jpg);background-position:left bottom;filter: brightness(50%);">
      <p class="header-title" style="filter: brightness(100%);"> </p>
    </div>
  </section>
      <!-- BEGIN: Main Menu-->
      @include('includes.navbar')
    <!-- END: Main Menu-->
    @include('includes.breadcrumb')  
<!-- END HEADER -->

  <div class="container">
	<div class="row pad-row">
	  <div class="col-md-12  col-sm-12">
	  <div class="d-flex align-items-center justify-content-center vh-100x">
            <div class="text-center">
                <h1 class="display-1 fw-bold">Certificate of Approved Military Aircraft Repair Station</h1>
                <!-- <p class="fs-3"> <span class="text-danger">Opps!</span> Page not found.</p> -->
				<img src="frontend\assets\img\certificates\certificate_25.jpg" alt="image page not found">		
				
                <p class="lead">
                detail <br> sertif
                  </p>
                <a href="/" class="btn btn-primary">Go Home</a><br>	
            </div>
        </div>
	</div>			  
</div>




    <!-- BEGIN: Main Menu-->
    @include('includes.footer')
    <!-- END: Main Menu-->
