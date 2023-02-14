<!DOCTYPE html>
<html lang="zxx" dir='ltr'>
@include('includes.head')
@include('includes.topbar')
<!-- ======= Header ======= -->
@include('includes.navbar')
@include('includes.banner')
@include('includes.breadcrumb')
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="Author" content="IT Center PTDI">
  <meta name="Owner" content="PT Dirgantara Indonesia">
  <meta name="keywords" content="customer relation management, customer, support, dirgantara, relation, indonesia, CS, PT. DI">
  <meta name="description" content="Customer Support Dirgantara Indonesia">
  <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
  <title>CUSTOMER RELATION MANAGEMENT DIRGANTARA INDONESIA</title>

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet"> -->






  <script>
    $(function() {
      $("#jmlorder").load("module/stock/countrfq.php");
    });
  </script>


<body data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="0">
    

<script>
    /*global $ */
    $(document).ready(function() {

        "use strict";

        $('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
        //Checks if li has sub (ul) and adds class for toggle icon - just an UI

        $('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');
        //Checks if drodown menu's li elements have anothere level (ul), if not the dropdown is shown as regular dropdown, not a mega menu (thanks Luka Kladaric)

        $(".menu > ul").before("<a href=\"#\" class=\"menu-mobile\">Navigation</a>");

        //Adds menu-mobile class (for mobile toggle menu) before the normal menu
        //Mobile menu is hidden if width is more then 959px, but normal menu is displayed
        //Normal menu is hidden if width is below 959px, and jquery adds mobile menu
        //Done this way so it can be used with wordpress without any trouble


        // $('.sub-more').addClass('d-flex').addClass('justify-content-center');

        $(".menu > ul > li").hover(function(e) {

            if ($(window).width() > 943) {
                $(this).children("ul").stop(true, false).fadeToggle(150);
                $(this).children("ul .sub-more").stop(true, false).fadeToggle(150).toggleClass("d-flex justify-content-center");
                // e.preventDefault();
            }
        });
        //If width is more than 943px dropdowns are displayed on hover

        $(".menu > ul > li").click(function() {
            if ($(window).width() <= 943) {
                $(this).children("ul").fadeToggle(150);
            }
        });

        if ($(window).width() <= 943) {
            $(".menu").removeClass('d-flex').removeClass('align-items-center');
        } else {
            $(".menu").addClass('d-flex').addClass('align-items-center');
        }
        //If width is less or equal to 943px dropdowns are displayed on click (thanks Aman Jain from stackoverflow)

        $(".menu-mobile").click(function(e) {
            $(".menu > ul").toggleClass('show-on-mobile');
            e.preventDefault();
        });
        //when clicked on mobile-menu, normal menu is shown as a list, classic rwd menu story (thanks mwl from stackoverflow)

    });
</script>
  <!-- End header -->
  
  <main id="main">
    <section id="body">
    <!-- HEADING-->  
    <section>
             <div class="containerx">
             <div class="row pad-row">
             <div class="col-md-12  col-sm-12">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="aos-init aos-animate" data-aos="fade-up">

        <div class="row aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="toggleClass">All</li>
              <li data-filter=".filter-all-aircraft" id="aircraftToggle" class="filter-active"><i id="arrow-aircraft-toggle" class="fa fa-arrow-right active" aria-hidden="true"></i>Aircraft</li>
        
              <li data-filter=".filter-NAC2" class="toggleClass">Activities</li>
        
              <li data-filter=".filter-NAC5" class="toggleClass">CBT Class</li>
        
              <li data-filter=".filter-NAC3" class="toggleClass">Office</li>
        
              <li data-filter=".filter-NAC4" class="toggleClass">Training Facilities</li>
        
            </ul>
            <ul id="portfolio-aircraft-flters" style="">
        
              <li data-filter=".filter-AC10" class="">AS332 SUPER PUMA</li>
        
              <li data-filter=".filter-AC9" class="filter-active">AS365</li>
        
              <li data-filter=".filter-AC8">BELL 412EP</li>
        
              <li data-filter=".filter-AC6">CN235</li>
        
              <li data-filter=".filter-AC7">N219</li>
        
      

            </ul>
          </div>
        </div>

        <div class="row portfolio-container aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" style="position: relative; height: 963.065px;">
13          <div class="col-lg-3 col-md-4  col-sm-6 portfolio-item filter-all-aircraft filter-AC1" data-wow-delay="0.1s" style="position: absolute; left: 0px; top: 0px;">
            <div class="portfolio-wrap gallery-img-size">
              <img src="frontend\assets\img\thumb\thumb_pics_1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
             
                <p></p>
                <div>
                  <a href="frontend\assets\img\images_gallery\pics_1.jpg" title="" data-gall="portfolioGallery" class="link-preview venobox vbox-item"><i class="ion ion-eye"></i></a>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4  col-sm-6 portfolio-item filter-all-aircraft filter-AC6" data-wow-delay="0.1s" style="position: absolute; left: 288.925px; top: 0px;">
            <div class="portfolio-wrap gallery-img-size">
              <img src="frontend\assets\img\thumb\thumb_pics_8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                
                <p></p>
                <div>
                  <a href="frontend\assets\img\images_gallery\pics_8.jpg" title="" data-gall="portfolioGallery" class="link-preview venobox vbox-item"><i class="ion ion-eye"></i></a>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4  col-sm-6 portfolio-item filter-all-aircraft filter-NAC2" data-wow-delay="0.1s" style="position: absolute; left: 577.85px; top: 0px;">
            <div class="portfolio-wrap gallery-img-size">
              <img src="frontend\assets\img\thumb\thumb_pics_9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                
                <p>Preparation</p>
                <div>
                  <a href="frontend\assets\img\images_gallery\pics_9.jpg" title="Preparation" data-gall="portfolioGallery" class="link-preview venobox vbox-item"><i class="ion ion-eye"></i></a>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4  col-sm-6 portfolio-item filter-all-aircraft filter-AC6" data-wow-delay="0.1s" style="position: absolute; left: 0px; top: 192.613px;">
            <div class="portfolio-wrap gallery-img-size">
              <img src="frontend\assets\img\thumb\thumb_pics_10.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                
                <p>Maintenance</p>
                <div>
                  <a href="frontend\assets\img\images_gallery\pics_10.jpg" title="Maintenance" data-gall="portfolioGallery" class="link-preview venobox vbox-item"><i class="ion ion-eye"></i></a>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4  col-sm-6 portfolio-item filter-all-aircraft filter-AC7" data-wow-delay="0.1s" style="position: absolute; left: 288.925px; top: 192.613px;">
            <div class="portfolio-wrap gallery-img-size">
              <img src="frontend\assets\img\thumb\thumb_pics_11.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                
                <p>N219</p>
                <div>
                  <a href="frontend\assets\img\images_gallery\pics_11.jpg" title="N219" data-gall="portfolioGallery" class="link-preview venobox vbox-item"><i class="ion ion-eye"></i></a>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4  col-sm-6 portfolio-item filter-all-aircraft filter-AC8" data-wow-delay="0.1s" style="position: absolute; left: 577.85px; top: 192.613px;">
            <div class="portfolio-wrap gallery-img-size">
              <img src="frontend\assets\img\thumb\thumb_pics_12.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                
                <p>BELL 412</p>
                <div>
                  <a href="frontend\assets\img\images_gallery\pics_12.jpg" title="BELL 412" data-gall="portfolioGallery" class="link-preview venobox vbox-item"><i class="ion ion-eye"></i></a>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4  col-sm-6 portfolio-item filter-all-aircraft filter-NAC3" data-wow-delay="0.1s" style="position: absolute; left: 0px; top: 385.226px;">
            <div class="portfolio-wrap gallery-img-size">
              <img src="frontend\assets\img\thumb\thumb_pics_13.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                
                <p>KP II</p>
                <div>
                  <a href="frontend\assets\img\images_gallery\pics_13.jpg" title="KP II" data-gall="portfolioGallery" class="link-preview venobox vbox-item"><i class="ion ion-eye"></i></a>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4  col-sm-6 portfolio-item filter-all-aircraft filter-AC6" data-wow-delay="0.1s" style="position: absolute; left: 288.925px; top: 385.226px;">
            <div class="portfolio-wrap gallery-img-size">
              <img src="frontend\assets\img\thumb\thumb_pics_14.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                
                <p>CN235</p>
                <div>
                  <a href="frontend\assets\img\images_gallery\pics_14.jpg" title="CN235" data-gall="portfolioGallery" class="link-preview venobox vbox-item"><i class="ion ion-eye"></i></a>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4  col-sm-6 portfolio-item filter-all-aircraft filter-AC9" data-wow-delay="0.1s" style="position: absolute; left: 577.85px; top: 385.226px;">
            <div class="portfolio-wrap gallery-img-size">
              <img src="frontend\assets\img\thumb\thumb_pics_15.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                
                <p>AS365</p>
                <div>
                  <a href="frontend\assets\img\images_gallery\pics_15.jpg" title="AS365" data-gall="portfolioGallery" class="link-preview venobox vbox-item"><i class="ion ion-eye"></i></a>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4  col-sm-6 portfolio-item filter-all-aircraft filter-AC6" data-wow-delay="0.1s" style="position: absolute; left: 0px; top: 577.839px;">
            <div class="portfolio-wrap gallery-img-size">
              <img src="frontend\assets\img\thumb\thumb_pics_24.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                
                <p>CN235</p>
                <div>
                  <a href="frontend\assets\img\images_gallery\pics_24.jpg" title="CN235" data-gall="portfolioGallery" class="link-preview venobox vbox-item"><i class="ion ion-eye"></i></a>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4  col-sm-6 portfolio-item filter-all-aircraft filter-AC9" data-wow-delay="0.1s" style="position: absolute; left: 288.925px; top: 577.839px;">
            <div class="portfolio-wrap gallery-img-size">
              <img src="frontend\assets\img\thumb\thumb_pics_25.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                
                <p>Superpuma</p>
                <div>
                  <a href="frontend\assets\img\images_gallery\pics_25.jpg" title="Superpuma" data-gall="portfolioGallery" class="link-preview venobox vbox-item"><i class="ion ion-eye"></i></a>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4  col-sm-6 portfolio-item filter-all-aircraft filter-AC10" data-wow-delay="0.1s" style="position: absolute; left: 577.85px; top: 577.839px;">
            <div class="portfolio-wrap gallery-img-size">
              <img src="frontend\assets\img\thumb\thumb_pics_26.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                
                <p>Superpuma</p>
                <div>
                  <a href="frontend\assets\img\images_gallery\pics_26.jpg" title="Superpuma" data-gall="portfolioGallery" class="link-preview venobox vbox-item"><i class="ion ion-eye"></i></a>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4  col-sm-6 portfolio-item filter-all-aircraft filter-AC7" data-wow-delay="0.1s" style="position: absolute; left: 0px; top: 770.452px;">
            <div class="portfolio-wrap gallery-img-size">
              <img src="frontend\assets\img\thumb\thumb_pics_27.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                
                <p></p>
                <div>
                  <a href="frontend\assets\img\images_gallery\pics_27.jpg" title="" data-gall="portfolioGallery" class="link-preview venobox vbox-item"><i class="ion ion-eye"></i></a>
                  
                </div>
              </div>
            </div>
          </div>
      
 

        </div>

      </div>
    </section><!-- End Portfolio Section -->
       

     
 <script>
 

    $("#portfolio-aircraft-flters").hide();

    $("#aircraftToggle").click(function () {
      $("#portfolio-aircraft-flters").show(1000);
      $("#arrow-aircraft-toggle").addClass('active', 1000);
    });

    $(".toggleClass").click(function () {
      $("#portfolio-aircraft-flters").hide(1000);
      $("#arrow-aircraft-toggle").removeClass('active', 1000);
    });

    // $(function () {
    //   $('#world-map').vectorMap({
    //     map: 'world_mill'
    //   });
    // });
  </script>
       
  </div></div></div></section>
  </section></main> 
</body>
@include('includes.footer')

