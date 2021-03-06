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
    <a href="/teach/index.html" >教育园地</a>
    <a href="/teach/index/<?php echo $father_class_info['id']; ?>.html" class="crumbs-add"><?php echo $father_class_info['name']; ?></a> 
    <a href="/teach/teach_detail/<?php echo $teach_news_detail['id']; ?>.html" class="crumbs-add"><?php echo $teach_news_detail['title']; ?></a>
</div>


<!--文章-详情-->
<div class="page-article">
    <div class="page-article-content">
        <div class="page-article-content-title2">
            <div class="title"><?php echo $teach_news_detail['title']; ?></div>
            <div class="sub">
                <div class="date"><?php echo substr($teach_news_detail['datetime'],0,16); ?></div>
                <div class="line"></div>
                <div class="author">作者：<?php echo $teach_news_detail['author']; ?></div>
                <div class="line"></div>
                <div class="from">来源：<?php echo $teach_news_detail['source']; ?></div>
            </div>
        </div>
        <div class="page-article-content-body newsdetail">
           <?php echo $teach_news_detail['content']; ?>
        </div>
        <div class="page-article-content-nav">
            <div class="prev">
                <span>上一篇：</span>
                <a class="link" href="/teach/teach_detail/<?php echo $prev['id']; ?>.html"><?php echo $prev['title']; ?></a>
            </div>
            <div class="next">
                <span>下一篇：</span>
                <a class="link" href="/teach/teach_detail/<?php echo $next['id']; ?>.html"><?php echo $next['title']; ?></a>
            </div>
        </div>
    </div>
    <div class="page-article-side">
        <div class="page-article-side-title">
            热门头条
        </div>
        <?php if(count($hot_info)): ?>
        <?php foreach($hot_info as $v): ?>
        <a class="page-article-side-a" href="/teach/teach_detail/<?php echo $v['id']; ?>.html"><?php echo $v['title']; ?></a>
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
