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

    <div class="container">
    <div class="jumbotron">
      <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
          <h1 class="text-center">Status test</h1>
          <h2 class="text-center text-responsive"><em>Fleet</em></h2>
          <br>
          <div id="imgcap" class="text-center">
            <img id="main" src="https://wallpapercave.com/wp/cYFs83V.jpg">
            
          </div>
          <br>
          <div id="div1" class="row">
            <p id="h2h"><em><strong>Itachi Uchiha</strong>, age four. After seeing what occurs on the battlefield up close, he makes a certain decision. He decided that he would change the world. The dream that Itachi aimed for. His dream: A Hokage from the Uchiha clan, and a future where those he loved could live in peace. His time in the ninja academy, his meeting with Shisui, becoming a Genin, Chunin, and finally a member of the Anbu. Itachi ran straight down a path of glory, not knowing that a cruel darkness was spreading. This is the story of the glory, frustration, and determination of the ninja called a genius.</em></p>
          </div>

          <div class="row">
            <div class="col-md-5 col-xs-5 col-lg-5"><img class="img-responsive" id="img1" src="https://image.ibb.co/dhm00m/Qto4JVn.jpg"></div>
            <div class="col-md-7 col-xs-5 col-lg-5">
              <p style="font-size:28px;"><q>People Live their Lives bound by what they accept as correct and true. That is how they define "Reality" . But what does it mean to be "correct" or "true"? They are merely vague concepts... Their "Reality" may all be a mirage. Can we consider them to be simply living in their own world, shaped by their beliefs?</q><br><br>-
                Itachi Uchiha</p>
            </div>
          </div>

          <div id="div3" class="row">
            <div class="col-md-7 col-xs-7 col-lg-7">
              <p class="hh2">Itachi was a highly perceptive child, wise beyond his years and spent much of his time researching the history of the village from the writings their ancestors left behind. Because of this, Itachi was never limited to the view of his own
                clan but worried about the fate of the village as a whole. Later the third hokage confirms this by saying "even at the age of seven, he had the thinking of a Hokage". </p>
            </div>
            <div class="col-md-5 col-xs-5 col-lg-5">
              <img class="img-responsive" id="itch" src="https://image.ibb.co/e5K7fm/IMG_20171024_192758.jpg">
            </div>
          </div>
          <div class="row">
            <div class="col-md-5 col-xs-5 col-lg-5">
              <img id="logo" src="https://res.cloudinary.com/teepublic/image/private/s--De6_nKvN--/t_Preview/b_rgb:191919,c_limit,f_jpg,h_630,q_90,w_630/v1494737667/production/designs/1601918_1.jpg">
            </div>
            <div class="col-md-7 col-xs-7 col-lg-7">
              <p class="hh2">Uchihas were initially descendants of Indra Otsutsuki who believed in power. After being felt as treated secondary to Senju clan in the village as none of the Uchicha ever became a Hokage or attained a valued position in the village they
                bred more hatred towards the village and decided to rebel.The current Hokage Hiruzen Sarutobi and Lord Danzo had knowledge of this and ordered complete annihilation of Uchiha Clan, as if they emerge to pull out a war it was going to restart
                the endless series of clan wars just like it was before establishment of Konoha. </p>
            </div>
          </div>
          <div style="background-color:#400000" class="row">
            <div class="col-md-7 col-xs-7 col-lg-7">
              <p class="hh2">Itachi had complete understanding of the consequences. He even at the tender age of 13 exceeded in wisdom and skill than most higher level shinobis. Danzo was after Shishui Uchiha's eyes and to save the name of clan Shishui commits suicide
                and hands over his eye to Itachi, and takes a promise from him that he will save the Uchiha name and Konoha at all cost. Danzo had meticulously planned Uchiha's end via hands of Itachi. Itachi without a word of pain, accomplishes his mission
                sparing none, except his younger brother. He even kills his own parents, while his hands were shaking and he was trembling with pain within.
              </p>
            </div>
            <div class="col-md-5 col-xs-5 col-lg-5">
              <img class="img-responsive" id="ita" src="https://dailyanimeart.files.wordpress.com/2012/06/itachi_crying_by_segma7-d54rc1p.jpg?w=1112"></div>
          </div>
          <div class="row">
            <div class="col-md-5 col-xs-5 col-lg-5">
              <img class="img-responsive" id="ita" src="https://i.pinimg.com/564x/ae/76/10/ae7610cbe660d5e8c57c0605142c998e--naruto-shippuden-sasuke-naruto-art.jpg">
            </div>
            <div class="col-md-7 col-xs-7 col-lg-7">
              <p class="hh2">
                From being a prodigy who would have rightly earned his place as the Fifth Hokage to a rogue ninja hated by every one, and no one ever knew how great Itachi's sacrifice is! Its something we as normal humans are unable to comprehend, the pain that his heart must have felt while slaughtering his own clan-mates, his own comrades. He lost his clan, his pride, his love, seeded hatred in his brother, his best friend committed suicide. The extent of pain Itachi endured and his will to protect the same village which despises him is beyond comprehension.
              </p>
            </div>
          </div>
          <div style="background-color:#400000;padding:20px 20px;">
            <br>
            <h2 class="text-center text-responsive">Itachi chose <strong>hatred</strong> instead of honor...<strong>Pain</strong> instead of Love...<strong>Darkness</strong> instead of Light...</h2>
          </div>
          <br><br>
          <div class="row">
            <div class="col-md-12 col-xs-12 col-lg-12">
              <img id="eyes" class="img-responsive" src="https://image.ibb.co/fJAzRR/IMG_20171024_195435.jpg"><br>
              <div class="carousel-caption">
                <h3 id="hh3"><em><blockquote><q>If you want to know who you are, you have to look at your real self and acknowledge what you see</q></blockquote><br><br><br>- Itachi Uchiha</em></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <h2 class="text-center text-responsive">For more details on Itachi,<a href="http://naruto.wikia.com/wiki/Itachi_Uchiha" target="_blank"> Go Here</a></h2>
    </div>
    <footer class="text-center">
      <p style="font-size:20px;font-family:monospace;"><a href="https://www.freecodecamp.com/itachikesh" target="_blank">Testing Fleet</a></p>
      </footer>


    <!-- BEGIN: Main Menu-->
    @include('includes.navbar')
    <!-- END: Main Menu-->


    <!-- BEGIN: Main Menu-->
    @include('includes.footer')
    <!-- END: Main Menu-->
