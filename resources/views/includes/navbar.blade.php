<?php
// include "./x-admin/cmslibs_pg/tmcustomer_trainingServices/tmcustomer_trainingServices.php";
// include "./x-admin/cmslibs_pg/tmcust_training_detailServices/tmcust_training_detailServices.php";
// include "./x-admin/cmslibs_pg/tmstatus_trainingServices/tmstatus_trainingServices.php";
// include "./x-admin/cmslibs_pg/tmmroServices/tmmroServices.php";
// include "./x-admin/cmslibs_pg/tmmrodtlServices/tmmrodtlServices.php";
?>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">

    <div class="menu-container">
        <div class="menu d-flex align-items-center justify-content-between">
            <a href="" class="logo"><img class="img-fluid" src="{{ url('frontend/assets/img/logo/ptdi.png') }}" alt="logoptdi"></a>
            <ul>
                <li><a href="#">Customer</a>
                    <ul>
                        <li><a href="customer">WorldWide Customers</a></li>
                        <li><a target="_blank" href="./statisfaction">Customer Statisfaction Survey</a></li>
                    </ul>
                </li>
                <li><a href="#">Aircraft</a>
                    <ul>
                        <li><a href="fixed_wing">Fixed Wing</a></li>
                        <li><a href="rotary_wing">Rotary Wing</a></li>
                    </ul>
                </li>
                <li><a href="#">Services</a>
                    <ul class="sub-more">
                        <li>
                            <p>Technical Support</p>
                            <ul>
                                <li><a href="adam">ADAM</a></li>
                                <li><a href="ram">RAM</a></li>
                                <li><a href="warranty_terms">Warranty Terms</a></li>
                            </ul>
                        </li>
                        <li>
                            <p>Manuals</p>
                            <ul>
                                <li>
                                    <a>Aircraft Manuals</a>
                                    <ul class="editable-list">
                                        <li><a href="loap+index">Loap Index</a></li>
                                        <li><a href="sb+index">SB Index</a></li>
                                    </ul>
                                </li>
                                <li><a href="ietm">IETM</a></li>
                            </ul>
                        </li>
                        <li>
                            <p>Spare Parts</p>
                            <ul>
                                <li><a href="stocks">Stock</a></li>
                                <li><a href="howtoorder">How To Order</a></li>
                            </ul>
                        </li>
                        <li>
                            <p>Training</p>
                            <ul>
                                <?php
                                    // $limit = "";
                                    // $filter = "";
                                    // $order = "id asc";
                                    // $listtmcustomer_training = getAlltmcustomer_training($filter, $order, $limit);
                                    // $objtmcustomer_training = new tmcustomer_training();
                                    // foreach ($listtmcustomer_training as $dat) {
                                    //     $objtmcustomer_training = unserialize($dat);
                                    //     $idmro = $objtmcustomer_training->getid();
                                    //     $limit2 = "";
                                    //     $filter2 = " where c_training=$idmro";
                                    //     $order2 = "id asc";
                                    //     $listtmcust_training_detail = getAlltmcust_training_detail($filter2, $order2, $limit2);
                                    //     $objtmcust_training_detail = new tmcust_training_detail();
                                    //     $getn_title = strtolower(str_replace(" ", "-", $objtmcustomer_training->getn_title()));
                                ?>
                                <li>
                                    {{-- <a
                                        href="<?php //echo BASE_PATH.'training_detail-' . $objtmcustomer_training->getid() . "-" . $getn_title ?>"><?php //echo $objtmcustomer_training->getn_title() ?></a> --}}
                                </li>
                                <?php // } ?>
                            </ul>
                        </li>
                        <li>
                            <p>MRO</p>
                            <?php
                                // $limit = "";
                                // $filter = " where f_mro_stat='1'";
                                // $order = "i_id_mro asc";
                                // $listtmmro = getAlltmmro($filter, $order, $limit);
                                // $objtmmro = new tmmro();
                                // $na = count($listtmmro);
                                // if ($na != 0) {
                                //     echo "<ul>\n";
                                //     foreach ($listtmmro as $dat) {
                                //         $objtmmro = unserialize($dat);
                                //         $idmro = $objtmmro->geti_id_mro();
                                //         $title = trim($objtmmro->getn_mro_title());
                                //         $titlez=strtolower($title);
                                //         $titlez=str_replace(" ","-",$titlez);

                                //         $limit2 = "";
                                //         $filter2 = " where  f_mro_dtlstat='1' and i_id_mro=$idmro";
                                //         $order2 = "i_id_mrodtl asc";
                                //         $listtmmrodtl = getAlltmmrodtl($filter2, $order2, $limit2);
                                //         $objtmmrodtl = new tmmrodtl();
                                //         $na2 = count($listtmmrodtl);

                                //         if ($na2 == 0) {
                                //             echo "<li><a href=\"".BASE_PATH."mro-" . $idmro . "-" . $titlez . "\">" . $title . "</a></li>\n";
                                //         } else {
                                //             echo "<li><a href=\"#\">" . $title . "</a>\n";
                                //             echo "  <ul class=\"editable-list\">\n";
                                //             foreach ($listtmmrodtl as $dat) {
                                //                 $objtmmrodtl = unserialize($dat);
                                //                 $idmrodtl=$objtmmrodtl->geti_id_mrodtl();
                                //                 $titledtl=trim($objtmmrodtl->getn_mro_dtl());
                                //                 $titledtlz=strtolower($titledtl);
                                //                 $titledtlz=str_replace(" ","-",$titledtlz);
                                //                 echo "<li><a href=\"".BASE_PATH."mro_detail-" . $idmrodtl . "-" . $titledtlz . "\">" . $titledtl . "</a></li>\n";

                                //             }
                                //             echo "  </ul>\n";
                                //             echo "</li>\n";
                                //         }
                                //     }
                                //     echo "</ul>\n";
                                // }
                            ?>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Status</a>
                    <ul>
                        <li><a href="undercons">Fleet</a></li>
                        <li><a href="undercons">Project</a></li>
                    </ul>
                </li>
                <li><a href="certificate">Certificates</a></li>
            </ul>
        </div>
    </div>


</header><!-- End Header -->

<script>
    /*global $ */
    $(document).ready(function () {

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


        $(".menu > ul > li").hover(function (e) {

            if ($(window).width() > 943) {
                $(this).children("ul").stop(true, false).fadeToggle(150);
                $(this).children("ul .sub-more").stop(true, false).fadeToggle(150).toggleClass(
                    "d-flex justify-content-center");
                // e.preventDefault();
            }
        });
        //If width is more than 943px dropdowns are displayed on hover

        $(".menu > ul > li").click(function () {
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

        $(".menu-mobile").click(function (e) {
            $(".menu > ul").toggleClass('show-on-mobile');
            e.preventDefault();
        });
        //when clicked on mobile-menu, normal menu is shown as a list, classic rwd menu story (thanks mwl from stackoverflow)

    });

</script>
