<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $tdk['seo_t']; ?></title>
    <meta name="keywords" content="<?php echo $tdk['seo_k']; ?>">
    <meta name="description" content="<?php echo $tdk['seo_d']; ?>">
        <!--common-->
    <link rel="stylesheet" href="/assets/home_new/css/QGindex.css"/>
    <link rel="stylesheet" href="/assets/home_new/css/header.css"/>
    <link rel="stylesheet" href="/assets/home_new/css/footer.css"/>
    <script src="/assets/home_new/public/jquery.js"></script>
    <!--common-->

    <link rel="stylesheet" href="/assets/home_new/pdf/web/pdf_viewer.css">
    <link rel="stylesheet" href="/assets/home_new/css/game-detail.css">
</head>
<body>
<!--头部-->
<?php include "header_view.php"; ?>
<!--头部-->

<div class="page-game-detail">
    <div class="page-game-detail-content">
        <div id="pageContainer" class="page-container" data-url="<?php echo $information_detail['pdf_path']; ?>" data-see="10"></div>
    </div>
</div>

<div class="page-game-detail-cover" id="detail-cover">
    <div class="page-game-detail-cover-box">
        <div class="in-title">
            温馨提示：
        </div>
        <div class="text">
            以下内容包含个股推荐，仅限会员查阅，请联系客服获取。客服电话：400-091-9988
        </div>
        <div class="i-see" id="detail-cover-close">确定</div>
    </div>
</div>

<!--底部-->
<?php include "footer_view.php"; ?>
<!--底部-->

</body>
<!--common-->
<script src="/assets/home_new/public/common.js"></script>
<!--common-->


<script src="/assets/home_new/pdf/build/pdf.js"></script>
<script src="/assets/home_new/pdf/web/pdf_viewer.js"></script>
<script src="/assets/home_new/js/game-detial.js"></script>
</html>
