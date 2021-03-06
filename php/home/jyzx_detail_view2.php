<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href=" /assets/home_new/bitbug_favicon.ico" />
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
    <link rel="stylesheet" href="/assets/home_new/css/article-detail.css">
</head>
<body>
<!--头部-->
<?php include "header_view.php"; ?>
<!--头部-->


<!--面包屑导航-->
<div class="crumbs">
    <a href="/information/index.html">民众资讯</a>
    <a href="/information/tzgd.html" class="crumbs-add">资讯动态</a>
    <a href="#" class="crumbs-add"><?php echo $information_detail['Title']; ?></a>
</div>


<!--文章-详情-->
<div class="page-article">
    <div class="page-article-content">
        <div class="page-article-content-title2">
            <div class="title"><?php echo $information_detail['Title']; ?></div>
            <div class="sub">
                <div class="date"><?php echo date("Y-m-d H:i",strtotime($information_detail['UEditTime'])); ?></div>
                <div class="line"></div>
                <div class="author">作者：博览资讯</div>
                <div class="line"></div>
                <div class="from">来源：博览资讯</div>
            </div>
        </div>
        <div class="page-article-content-body newsdetail">
           <?php echo $information_detail['Content']; ?>
        </div>
        <div class="page-article-content-nav">
            <div class="prev">
                <span>上一篇：</span>
                <a class="link" href="/information/zxdt_detail/<?php echo $prev['ID']; ?>.html"><?php echo $prev['Title']; ?></a>
            </div>
            <div class="next">
                <span>下一篇：</span>
                <a class="link" href="/information/zxdt_detail/<?php echo $prev['ID']; ?>.html"><?php echo $next['Title']; ?></a>
            </div>
        </div>
    </div>
    <div class="page-article-side">
        <div class="page-article-side-title">
            热门头条
        </div>
        <?php if(count($hot_info)): ?>
        <?php foreach($hot_info as $v): ?>
        <a class="page-article-side-a" href="/information/zxdt_detail/<?php echo $v['ID']; ?>.html"><?php echo $v['Title']; ?></a>
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
<script type="text/javascript">
    $(function(){
        var gllinks_list = <?php echo $gllinks_list; ?>;
        var content = $(".newsdetail").html();//文章内容
        for(var i=0;i<gllinks_list.length;i++){
            content = content.replace(gllinks_list[i]['keyword'],"<a href='"+gllinks_list[i]['url']+"' style='text-decoration:underline;'>"+gllinks_list[i]['keyword']+"</a>");
        }
        $(".newsdetail").html(content);
    })
</script>
