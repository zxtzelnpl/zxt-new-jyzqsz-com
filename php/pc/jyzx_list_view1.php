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
    <link rel="stylesheet" href="/assets/home_new/public/jquery.pagination.css">
    <link rel="stylesheet" href="/assets/home_new/css/top-news.css">
    <meta name="baidu-site-verification" content="PGYzWJBy7D" />
</head>
<body>
<!--头部-->
<?php include "header_view.php"; ?>
<!--头部-->


<!--面包屑导航-->
<div class="crumbs">
    <a href="/">首页</a>
    <a href="/information/index.html" class="crumbs-add">民众资讯</a>
    <a href="/information/tzgd.html" class="crumbs-add">投顾观点</a>
</div>

<div class="top-news container">
    <h2 class="top-news-head">投顾观点</h2>
    <div class="top-news-content">
    <?php if(count($tzgd_list)): ?>
        <?php foreach($tzgd_list as $key => $v): ?>
        <a href="/information/tzgd_detail/<?php echo $v['id']; ?>.html" class="top-news-content-li">
            <img class="top-news-content-li-img" src="<?php echo $v['pic_path']; ?>"/>
            <div class="top-news-content-li-info">
                <div class="info-head">
                    <div class="info-title"><?php echo $v['title']; ?></div>
                    <div class="info-sub"><?php echo date("Y-m-d",strtotime($v['datetime'])); ?></div>
                </div>
                <div class="info-text"><?php echo mb_substr(strip_tags($v['content']), 0,200); ?></div>
            </div>
        </a>
        <?php endforeach; ?>
    <?php endif; ?>

    </div>
    <div class="pagination">
        <div id="pagination" class="pagination-inner"></div>
    </div>
</div>



<!--底部-->
<?php include "footer_view.php"; ?>
<!--底部-->

</body>
<!--common-->
<script src="/assets/home_new/public/common.js"></script>
<!--common-->


<script src="/assets/home_new/public/jquery.pagination.min.js"></script>
<script>
    /*查过两行加上省略号*/
    eclipse('.info-text',100);

    var page = <?php echo $page; ?>;
    var pages = <?php echo $pages; ?>;
    $("#pagination").pagination({
      currentPage: page,
      totalPage: pages,
      callback: function(current) {
        window.location.href = "/information/tzgd/"+current+".html";
      }
    });
</script>
</html>
