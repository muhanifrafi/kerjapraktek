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

    <div id="main">
  <h1 id="title"><center>Status</center></h1>
  <div id="img-div">
    <img id="image" src="https://vignette.wikia.nocookie.net/vsbattles/images/5/5a/Jiraiya_full2.png/revision/latest/scale-to-width-down/320?cb=20180225160956"></img>
  <h3 id="img-caption">TESTING PROJECT<h3>
    <p id="tribute-info"><center>Jiraiya (自来也) was one of Konohagakure's Sannin. Famed as a hermit and pervert of stupendous ninja skill, Jiraiya travelled the world in search of knowledge that would help his friends, the various novels he wrote, and, posthumously, the world in its entirety – knowledge that would be passed on to his godson and final student, Naruto Uzumaki.<br> <br>
      After he graduated from Konoha's Ninja Academy, Jiraiya was teamed with Orochimaru and Tsunade under the leadership of Hiruzen Sarutobi. Hiruzen gave them a bell test for the team's first exercise, during which Jiraiya repeatedly fell for Hiruzen's tricks, and for failing to acquire a bell, he was tied to a stump as punishment. Hiruzen encouraged Jiraiya to be more like Orochimaru, but Jiraiya countered that his Transparent Escape Technique was a fair testament to his skills, as he could spy on bathing women without getting caught: Hiruzen offered to accompany him to see if this was true.[8] Jiraiya had a certain interest in Tsunade from their first meeting,[9] and when her breasts developed, she became a frequent target of his peepings. She nearly killed him when she caught him on one occasion, forcing him to be more discreet about his interests.[10]<br><br>
      Jiraiya at some point discovered Mount Myōboku, the residence of the toads; in the anime, he was brought there when he tried to summon a toad without first having a contract with them.[11] Fukasaku trained Jiraiya in their ways, most prominently senjutsu. While he was at Mount Myōboku, the Great Toad Sage made a prediction about Jiraiya: that he would travel the world and during that time meet the Child of the Prophecy, a student who would grow up to either save or destroy the world depending upon how Jiraiya taught them.[12]</center></p>
    <a id="tribute-link" target="_blank" href="https://naruto.fandom.com/wiki/Jiraiya">Read full article</a>  


    <!-- BEGIN: Main Menu-->
    @include('includes.navbar')
    <!-- END: Main Menu-->


    <!-- BEGIN: Main Menu-->
    @include('includes.footer')
    <!-- END: Main Menu-->
