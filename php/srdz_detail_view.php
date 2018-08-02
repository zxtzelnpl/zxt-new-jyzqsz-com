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

    <link rel="stylesheet" href="/assets/home_new/public/swiper.min.css">
    <link rel="stylesheet" href="/assets/home_new/css/product-detail.css">
</head>
<body>
<!--头部-->
<?php include "header_view.php"; ?>
<!--头部-->

<!--面包屑导航-->
<div class="crumbs">
    <a href="/">首页</a>
    <a href="/product/index.html" class="crumbs-add">产品中心</a>
    <a href="#" class="crumbs-add"><?php echo $zrdz_detail_info['name']; ?></a>
</div>

<div class="container product-detail">
    <a class="product-head">
        <img class="product-head-img"
             src="<?php echo $zrdz_detail_info['pic_path']; ?>" alt="">
        <div class="product-head-info">
            <div class="box-title">
                <?php echo $zrdz_detail_info['name']; ?>
                <p class="box-title-sub">
                    <?php echo $zrdz_detail_info['description']; ?>
                </p>
            </div>
            <div class="price">
                价格：<span class="red"><?php echo $zrdz_detail_info['price']; ?>元/<?php echo $zrdz_detail_info['time']; ?>天</span>
            </div>
        </div>
    </a>
    <div class="product-content">
        <?php echo $zrdz_detail_info['content']; ?>
    </div>
</div>


<!--底部-->
<?php include "footer_view.php"; ?>
<!--底部-->

</body>
<!--common-->
<script src="/assets/home_new/public/common.js"></script>
<!--common-->
</html>
