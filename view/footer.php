<!-- Begin Brand Area -->
<div class="brand-area pt-90">
    <div class="container">
        <div class="brand-nav border-top border-bottom">
            <div class="row">
                <div class="col-lg-12">
                    <div class="kenne-element-carousel brand-slider slider-nav" data-slick-options='{
                    "slidesToShow": 6,
                    "slidesToScroll": 1,
                    "infinite": false,
                    "arrows": false,
                    "dots": false,
                    "spaceBetween": 30
                    }' data-slick-responsive='[
                    {"breakpoint":992, "settings": {
                    "slidesToShow": 4
                    }},
                    {"breakpoint":768, "settings": {
                    "slidesToShow": 3
                    }},
                    {"breakpoint":576, "settings": {
                    "slidesToShow": 2
                    }}
                ]'>

                        <div class="brand-item">
                            <a href="#">
                                <img src="view/assets/images/brand/1.png" alt="Brand Images">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="view/assets/images/brand/2.png" alt="Brand Images">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="view/assets/images/brand/3.png" alt="Brand Images">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="view/assets/images/brand/4.png" alt="Brand Images">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="view/assets/images/brand/5.png" alt="Brand Images">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="view/assets/images/brand/6.png" alt="Brand Images">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="view/assets/images/brand/1.png" alt="Brand Images">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="view/assets/images/brand/2.png" alt="Brand Images">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Brand Area End Here -->

<!-- Begin Kenne's Footer Area -->
<div class="kenne-footer_area bg-white_color">
    <div class="footer-top_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="newsletter-area">
                        <div class="newsletter-logo">
                            <a href="#">
                                <img src="view/assets/images/footer/logo/1.png" alt="Logo" width="200px">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="row footer-widgets_wrap">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="footer-widgets_title">
                                <h4>Mua sắm</h4>
                            </div>
                            <div class="footer-widgets">
                                <ul>
                                    <?php
                                    $dsdm = list_danhmuc();
                                    foreach($dsdm as $ds) {
                                        extract($ds);
                                        $linkdm = "index.php?act=sanpham&iddm=".$id_dm;
                                        echo '
                                                            <li><a href="'.$linkdm.'">'.$tendm.'</a></li>
                                                        ';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="footer-widgets_title">
                                <h4>Tài khoản</h4>
                            </div>
                            <div class="footer-widgets">
                                <ul>
                                    <?php
                                    if(isset($_SESSION['username'])) {
                                        extract($_SESSION['username']);
                                        ?>
                                        <li>
                                            <a href="index.php?act=myacc">
                                                <?= $username ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index.php?act=cart">Giỏ hàng</a>
                                        </li>
                                    <?php } else { ?>
                                        <li>
                                            <a href="index.php?act=sigorreg">Đăng nhập</a>
                                        </li>
                                        <li>
                                            <a href="index.php?act=sigorreg">Đăng ký</a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="footer-widgets_title">
                                <h4>Khác</h4>
                            </div>
                            <div class="footer-widgets">
                                <ul>
                                    <li><a href="index.php?act=wlandac">Giỏ hàng</a></li>
                                    <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                                    <li><a href="index.php?act=faq">FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="copyright">
                        <span>Copyright &copy; 2023 <a href="#">Kenne.</a> All rights reserved.</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="payment">
                        <img src="view/assets/images/footer/logo/1.png" alt="Logo" class="hd-logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Scroll To Top Start -->
<a class="scroll-to-top" href="#"><i class="ion-chevron-up"></i></a>
<!-- Scroll To Top End -->

</div>

<!-- JS ============================================ -->

<!-- jQuery JS -->
<script src="view/assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="view/assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
<!-- Modernizer JS -->
<script src="view/assets/js/vendor/modernizr-3.11.2.min.js"></script>
<!-- Bootstrap JS -->
<script src="view/assets/js/vendor/bootstrap.bundle.min.js"></script>

<!-- Slick Slider JS -->
<script src="view/assets/js/plugins/slick.min.js"></script>
<!-- Barrating JS -->
<script src="view/assets/js/plugins/jquery.barrating.min.js"></script>
<!-- Counterup JS -->
<script src="view/assets/js/plugins/jquery.counterup.js"></script>
<!-- Nice Select JS -->
<script src="view/assets/js/plugins/jquery.nice-select.js"></script>
<!-- Sticky Sidebar JS -->
<script src="view/assets/js/plugins/jquery.sticky-sidebar.js"></script>
<!-- Jquery-ui JS -->
<script src="view/assets/js/plugins/jquery-ui.min.js"></script>
<script src="view/assets/js/plugins/jquery.ui.touch-punch.min.js"></script>
<!-- Theia Sticky Sidebar JS -->
<script src="view/assets/js/plugins/theia-sticky-sidebar.min.js"></script>
<!-- Waypoints JS -->
<script src="view/assets/js/plugins/waypoints.min.js"></script>
<!-- jQuery Zoom JS -->
<script src="view/assets/js/plugins/jquery.zoom.min.js"></script>
<!-- Timecircles JS -->
<script src="view/assets/js/plugins/timecircles.js"></script>

<!-- Main JS -->
<script src="view/assets/js/main.js"></script>

</body>

</html>