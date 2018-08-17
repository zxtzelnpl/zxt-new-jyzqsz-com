<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href=" /assets/home_new/bitbug_favicon.ico" />
    <title>投顾公示</title>
        <!--common-->
    <link rel="stylesheet" href="/assets/home_new/css/QGindex.css"/>
    <link rel="stylesheet" href="/assets/home_new/css/header.css"/>
    <link rel="stylesheet" href="/assets/home_new/css/footer.css"/>
    <script src="/assets/home_new/public/jquery.js"></script>
    <!--common-->

    <link rel="stylesheet" href="/assets/home_new/public/swiper.min.css">
    <link rel="stylesheet" href="/assets/home_new/css/teacher.css">
</head>
<body>
<!--头部-->
<?php include "header_view.php"; ?>
<!--头部-->


<div class="teacher-page">
    <div class="teacher-page-banner">
        <img class="teacher-page-banner-img" src="/assets/home_new/mock/teachers_banner.jpg" alt="">
    </div>
    <div class="teacher-page-content">
        <?php if(count($tggs_info_list)): ?>
        <?php foreach($tggs_info_list as $v): ?>
        <div class="box">
            <img class="box-img" src="<?php echo $v['pic_path']; ?>"/>
            <div class="box-info">
                <div class="box-info-name">
                    <div class="key">姓名</div>
                    <div class="value"><?php echo $v['name']; ?></div>
                </div>
                <div class="box-info-education">
                    <div class="key">学历</div>
                    <div class="value"><?php echo $v['education']; ?></div>
                </div>
                <div class="box-info-number">
                    <div class="key">证书编号</div>
                    <div class="value"><?php echo $v['number']; ?></div>
                </div>
                <div class="box-info-type">
                    <div class="key">证书类别</div>
                    <div class="value"><?php echo $v['type']; ?></div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>

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
