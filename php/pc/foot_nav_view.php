<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $foot_nav_info['name']; ?></title>
    <meta name="keywords" content="<?php echo $foot_nav_info['seo_k']; ?>">
    <meta name="description" content="<?php echo $foot_nav_info['seo_d']; ?>">
        <!--common-->
    <link rel="stylesheet" href="/assets/home_new/css/QGindex.css"/>
    <link rel="stylesheet" href="/assets/home_new/css/header.css"/>
    <link rel="stylesheet" href="/assets/home_new/css/footer.css"/>
    <script src="/assets/home_new/public/jquery.js"></script>
    <!--common-->

    <link rel="stylesheet" href="/assets/home_new/public/swiper.min.css">
    <link rel="stylesheet" href="/assets/home_new/css/foot-link.css">
</head>
<body>
<!--头部-->
<?php include "header_view.php"; ?>
<!--头部-->


<!--面包屑导航-->
<div class="crumbs">
    <a href="/">首页</a>
    <a href="#" class="crumbs-add"><?php echo $foot_nav_info['name']; ?></a>
</div>


<div class="container foot-link">
    <div class="foot-link-nav">
        <ul class="foot-link-ul">
        <?php foreach($foot_nav_list as $v): ?>
            <li class="foot-link-li" data-id='<?php echo $v['id']; ?>'><a class="foot-link-a" href="/foot_nav/index/<?php echo $v['id']; ?>.html"><?php echo $v['name']; ?></a></li>
        <?php endforeach; ?>
            <li class="foot-link-li" ><a class="foot-link-a" href="/about_us/index.html">关于我们</a></li>
            <!-- <li class="foot-link-li" ><a class="foot-link-a" href="/foot_nav/staff.html">员工公示</a></li>
            <li class="foot-link-li" ><a class="foot-link-a" href="/foot_nav/tggs.html">投顾公示</a></li> -->
        </ul>
    </div>

    <div class="foot-link-content">
        <h2 class="title"><?php echo $foot_nav_info['title']; ?></h2>
        <div class="content">
            <?php echo $foot_nav_info['content']; ?>
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
<script>
$(function(){
    var id = <?php echo $id; ?>;
    $(".foot-link-ul>li").each(function(){
        if($(this).data('id') == id){
            $(this).addClass('active');
        }
    });
    
})
</script>
