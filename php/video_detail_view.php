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
    <link rel="stylesheet" href="/assets/home_new/css/finance-detail.css">
</head>
<body>
<!--头部-->
<?php include "header_view.php"; ?>
<!--头部-->

<!--面包屑导航-->
<div class="crumbs">
    <a href="/">首页</a>
    <a href="/video/index.html" class="crumbs-add">财经视频</a>
    <a href="#" class="crumbs-add"><?php echo $video_detail['title']; ?></a>
</div>


<!--君银财经-详情-->
<div class="page-finance-detail">
    <div class="page-finance-detail-video">
        <div class="video">
            <embed src="<?php echo $video_detail['video_path']; ?>" allowfullscreen="true" quality="high" width="840" height="560" align="middle" allowscriptaccess="always" type="application/x-shockwave-flash">
        </div>

        <div class="title"><?php echo $video_detail['title']; ?></div>
        <div class="sub">上传于 <?php echo date("Y-m-d",$video_detail['timestamp']); ?></div>
    </div>
    <div class="page-finance-detail-side">
        <div class="title">其他视频</div>
        <div class="list">
        <?php if(count($video_info_list)): ?>
        <?php foreach($video_info_list as $v): ?>
            <a class="li" href="/video/video_detail/<?php echo $v['id']; ?>.html">
                <img class="li-img"  src="<?php echo $v['pic_path']; ?>"/>
                <span class="li-title"><?php echo $v['title']; ?></span>
            </a>
        <?php endforeach; ?>
        <?php endif; ?>
            
        </div>
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
