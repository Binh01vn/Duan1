<?php
ob_start();
session_start();
include("../../model/pdo.php");
include("../../model/binhluan.php");
$idsp = $_REQUEST['idsp'];
$listbl = loadall_binhluan($idsp);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="../assets/css/fontawesome-stars.min.css">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="../assets/css/ion-fonts.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="../assets/css/slick.css">
    <!-- Animation -->
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="../assets/css/jquery-ui.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <!-- Timecircles -->
    <link rel="stylesheet" href="../assets/css/timecircles.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <div class="tab-pane active" id="tab-review">
        <form class="form-horizontal" id="form-review" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <div id="review">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <td>Ussername</td>
                            <td>Nội dung bình luận</td>
                            <td>Ngày bình luận</td>
                            <td>Đánh giá sản phẩm</td>
                        </tr>
                        <?php
                        foreach($listbl as $lb) {
                            extract($lb); ?>
                            <tr>
                                <td>
                                    <strong>
                                        <?= $username ?>
                                    </strong>
                                </td>
                                <td style="width: 50%;">
                                    <?= $noidungbl ?>
                                </td>
                                <td class="text-right">
                                    <?= $ngaybl ?>
                                </td>
                                <td>
                                    <div class="rating-box">
                                        <ul>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <?php
            if(isset($_SESSION['username'])) {
                extract($_SESSION['username']); ?>
                <h2>Bình luận tại đây</h2>
                <div class="form-group required second-child">
                    <input type="hidden" name="idsp" value="<?= $idsp ?>">
                    <div class="col-sm-12 p-0">
                        <label class="control-label">Hãy nêu cảm nhận của bạn về sản
                            phẩm</label>
                        <textarea class="review-textarea" name="noidungbl" id="con_message"></textarea>
                    </div>
                </div>
                <div class="form-group last-child required">
                    <div class="col-sm-12 p-0">
                        <div class="your-opinion">
                            <label>Đánh giá của bạn</label>
                            <span>
                                <select class="star-rating" name="votestar">
                                    <option value="1"></option>
                                    <option value="2"></option>
                                    <option value="3"></option>
                                    <option value="4"></option>
                                    <option value="5"></option>
                                </select>
                            </span>
                        </div>
                    </div>
                    <div class="kenne-btn-ps_right">
                        <button class="kenne-btn" name="guibl" type="submit" value="blandvote">Gửi bình luận</button>
                    </div>
                </div>
            <?php } else { ?>
                <h2>Đăng nhập để bình luận!</h2>
            <?php } ?>
        </form>
        <?php
        if((isset($_POST['guibl'])) && ($_POST['guibl'])) {
            $noidungbl = $_POST['noidungbl'];
            $idsp = $_POST['idsp'];
            $iduser = $_SESSION['username']['idacc'];
            $ngaybl = date('d/m/Y');

            $votestar = $_POST['votestar'];
            if($votestar != null && $noidungbl != null) {
                insert_votestar($votestar, $idsp);
                insert_binhluan($noidungbl, $ngaybl, $idsp, $iduser);
            }
            header("location: ".$_SERVER['HTTP_REFERER']);
            ob_end_flush();
        }
        ?>
    </div>

    <!-- JS ============================================ -->

    <!-- jQuery JS -->
    <script src="../assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <!-- Modernizer JS -->
    <script src="../assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="../assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Slick Slider JS -->
    <script src="../assets/js/plugins/slick.min.js"></script>
    <!-- Barrating JS -->
    <script src="../assets/js/plugins/jquery.barrating.min.js"></script>
    <!-- Counterup JS -->
    <script src="../assets/js/plugins/jquery.counterup.js"></script>
    <!-- Nice Select JS -->
    <script src="../assets/js/plugins/jquery.nice-select.js"></script>
    <!-- Sticky Sidebar JS -->
    <script src="../assets/js/plugins/jquery.sticky-sidebar.js"></script>
    <!-- Jquery-ui JS -->
    <script src="../assets/js/plugins/jquery-ui.min.js"></script>
    <script src="../assets/js/plugins/jquery.ui.touch-punch.min.js"></script>
    <!-- Theia Sticky Sidebar JS -->
    <script src="../assets/js/plugins/theia-sticky-sidebar.min.js"></script>
    <!-- Waypoints JS -->
    <script src="../assets/js/plugins/waypoints.min.js"></script>
    <!-- jQuery Zoom JS -->
    <script src="../assets/js/plugins/jquery.zoom.min.js"></script>
    <!-- Timecircles JS -->
    <script src="../assets/js/plugins/timecircles.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>
</body>

</html>