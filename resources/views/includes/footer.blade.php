<footer>
    <div class="footer-bottom">
        <div class="container d-flex justify-content-center">
            <div class="copyright">
                Copyright &copy; 2023. All Rights Reserved - <strong>Customer Relationship Management PT
                    Dirgantara Indonesia</strong>
            </div>
            <!-- <div class="credits">
      Designed by IT440</a>
    </div> -->
        </div>
    </div>
</footer><!-- End  Footer -->
<?php
// require ("module/customer/login.php");
// require ("module/customer/chgpasswd.php");
// require ("module/customer/frgtpasswd.php");
//require ("register.php");
?>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- Vendor JS Files -->
<script src="{{url('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('frontend/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{url('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{url('frontend/assets/vendor/counterup/counterup.min.js')}}"></script>
<script src="{{url('frontend/assets/vendor/venobox/venobox.min.js')}}"></script>
<script src="{{url('frontend/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{url('frontend/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{url('frontend/assets/vendor/aos/aos.js')}}"></script>
<script src="{{url('frontend/js/bootbox.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{url('frontend/assets/js/main.js')}}"></script>

<script>
    // <!-- Input Group Search Box -->
    $(".clearable").each(function () {

        const $inp = $(this).find("input:text"),
            $cle = $(this).find(".clearable__clear");

        $inp.on("input", function () {
            $cle.toggle(!!this.value);
        });

        $cle.on("touchstart click", function (e) {
            e.preventDefault();
            $inp.val("").trigger("input");
        });

    });

    function tog(v) {
        return v ? "addClass" : "removeClass";
    }
    $(document).on("input", ".clearable", function () {
        $(this)[tog(this.value)]("x");
    }).on("mousemove", ".x", function (e) {
        $(this)[tog(this.offsetWidth - 35 < e.clientX - this.getBoundingClientRect().left)]("onX");
    }).on("touchstart click", ".onX", function (ev) {
        ev.preventDefault();
        $(this).removeClass("x onX").val("").change();
    });

    // <!-- Input Group Search Box -->

</script>
<script>
    $(function () {
        $('.back-to-top').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location
                .hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top - 110
                    }, 500);
                    return false;
                }
            }
        });
    });

    function ShowHidePasswd(ID) {
        //alert(ID);

        if ($('#' + ID + ' input').attr("type") == "text") {
            $('#' + ID + ' input').attr('type', 'password');
            $('#' + ID + ' i').addClass("fa-eye-slash");
            $('#' + ID + ' i').removeClass("fa-eye");
        } else if ($('#' + ID + ' input').attr("type") == "password") {
            $('#' + ID + ' input').attr('type', 'text');
            $('#' + ID + ' i').removeClass("fa-eye-slash");
            $('#' + ID + ' i').addClass("fa-eye");
        }
    }

</script>
</body>

</html>
