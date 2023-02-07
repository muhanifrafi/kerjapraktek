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


    <div class="slide-container">
  
  <div class="wrapper">
    <div class="clash-card barbarian">
      <div class="clash-card__image clash-card__image--barbarian">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/barbarian.png" alt="barbarian" />
      </div>
      <div class="clash-card__level clash-card__level--barbarian">Level 4</div>
      <div class="clash-card__unit-name">The Barbarian</div>
      <div class="clash-card__unit-description">
        The Barbarian is a kilt-clad Scottish warrior with an angry, battle-ready expression, hungry for destruction. He has Killer yellow horseshoe mustache.
      </div>

      <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
        <div class="one-third">
          <div class="stat">20<sup>S</sup></div>
          <div class="stat-value">Training</div>
        </div>

        <div class="one-third">
          <div class="stat">16</div>
          <div class="stat-value">Speed</div>
        </div>

        <div class="one-third no-border">
          <div class="stat">150</div>
          <div class="stat-value">Cost</div>
        </div>

      </div>

    </div> <!-- end clash-card barbarian-->
  </div> <!-- end wrapper -->
  
  <div class="wrapper">
    <div class="clash-card archer">
      <div class="clash-card__image clash-card__image--archer">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/archer.png" alt="archer" />
      </div>
      <div class="clash-card__level clash-card__level--archer">Level 5</div>
      <div class="clash-card__unit-name">The Archer</div>
      <div class="clash-card__unit-description">
        The Archer is a female warrior with sharp eyes. She wears a short, light green dress, a hooded cape, a leather belt and an attached small pouch.
      </div>

      <div class="clash-card__unit-stats clash-card__unit-stats--archer clearfix">
        <div class="one-third">
          <div class="stat">25<sup>S</sup></div>
          <div class="stat-value">Training</div>
        </div>

        <div class="one-third">
          <div class="stat">24</div>
          <div class="stat-value">Speed</div>
        </div>

        <div class="one-third no-border">
          <div class="stat">300</div>
          <div class="stat-value">Cost</div>
        </div>

      </div>

    </div> <!-- end clash-card archer-->
  </div> <!-- end wrapper -->
  
  <div class="wrapper">
    <div class="clash-card giant">
      <div class="clash-card__image clash-card__image--giant">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/giant.png" alt="giant" />
      </div>
      <div class="clash-card__level clash-card__level--giant">Level 5</div>
      <div class="clash-card__unit-name">The Giant</div>
      <div class="clash-card__unit-description">
        Slow, steady and powerful, Giants are massive warriors that soak up huge amounts of damage. Show them a turret or cannon and you'll see their fury unleashed!
      </div>

      <div class="clash-card__unit-stats clash-card__unit-stats--giant clearfix">
        <div class="one-third">
          <div class="stat">2<sup>M</sup></div>
          <div class="stat-value">Training</div>
        </div>

        <div class="one-third">
          <div class="stat">12</div>
          <div class="stat-value">Speed</div>
        </div>

        <div class="one-third no-border">
          <div class="stat">2250</div>
          <div class="stat-value">Cost</div>
        </div>

      </div>

    </div> <!-- end clash-card giant-->
  </div> <!-- end wrapper -->
  
   <div class="wrapper">
    <div class="clash-card goblin">
      <div class="clash-card__image clash-card__image--goblin">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/goblin.png" alt="goblin" />
      </div>
      <div class="clash-card__level clash-card__level--goblin">Level 5</div>
      <div class="clash-card__unit-name">The Goblin</div>
      <div class="clash-card__unit-description">
        These pesky little creatures only have eyes for one thing: LOOT! They are faster than a Spring Trap, and their hunger for resources is limitless.
      </div>

      <div class="clash-card__unit-stats clash-card__unit-stats--goblin clearfix">
        <div class="one-third">
          <div class="stat">30<sup>S</sup></div>
          <div class="stat-value">Training</div>
        </div>

        <div class="one-third">
          <div class="stat">32</div>
          <div class="stat-value">Speed</div>
        </div>

        <div class="one-third no-border">
          <div class="stat">100</div>
          <div class="stat-value">Cost</div>
        </div>

      </div>

    </div> <!-- end clash-card goblin-->
  </div> <!-- end wrapper -->
  
  <div class="wrapper">
    <div class="clash-card wizard">
      <div class="clash-card__image clash-card__image--wizard">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/wizard.png" alt="wizard" />
      </div>
      <div class="clash-card__level clash-card__level--wizard">Level 6</div>
      <div class="clash-card__unit-name">The Wizard</div>
      <div class="clash-card__unit-description">
        The Wizard is a terrifying presence on the battlefield. Pair him up with some of his fellows and cast concentrated blasts of destruction on anything, land or sky!
      </div>

      <div class="clash-card__unit-stats clash-card__unit-stats--wizard clearfix">
        <div class="one-third">
          <div class="stat">5<sup>M</sup></div>
          <div class="stat-value">Training</div>
        </div>

        <div class="one-third">
          <div class="stat">16</div>
          <div class="stat-value">Speed</div>
        </div>

        <div class="one-third no-border">
          <div class="stat">4000</div>
          <div class="stat-value">Cost</div>
        </div>

      </div>

    </div> <!-- end clash-card wizard-->
  </div> <!-- end wrapper -->
  
</div> <!-- end container -->


    <!-- BEGIN: Main Menu-->
    @include('includes.navbar')
    <!-- END: Main Menu-->


    <!-- BEGIN: Main Menu-->
    @include('includes.footer')
    <!-- END: Main Menu-->
