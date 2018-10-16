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
    <link rel="stylesheet" href="/assets/home_new/css/dynamics-info.css">
</head>
<body>
<!--头部-->
<?php include "header_view.php"; ?>
<!--头部-->


<!--面包屑导航-->
<div class="crumbs">
    <a href="/">首页</a>
    <a href="/information/index.html" class="crumbs-add">民众资讯</a>
    <a href="/information/zxdt.html" class="crumbs-add">资讯动态</a>
</div>

<div class="dynamics-info container">
    <h2 class="dynamics-info-head">资讯动态</h2>
    <div class="dynamics-info-content">
    <?php if(count($zxdt_list)): ?>
        <?php foreach($zxdt_list as $key => $v): ?>
        <a href="/information/zxdt_detail/<?php echo $v['ID']; ?>.html" class="dynamics-info-content-li">
            <div class="dynamics-info-head">
                <h2 class="dynamics-info-title"><?php echo $v['Title']; ?></h2>
                <div class="dynamics-info-sub"><?php echo date("Y-m-d",strtotime($v['UEditTime'])); ?></div>
            </div>
            <div class="dynamics-info-text"><?php echo mb_substr(strip_tags($v['Content']), 0,200); ?></div>
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
    eclipse('.dynamics-info-text',100);
    var page = <?php echo $page; ?>;
    var pages = <?php echo $pages; ?>;
    $("#pagination").pagination({
      currentPage: page,
      totalPage: pages,
      callback: function(current) {
        window.location.href = "/information/zxdt/"+current+".html";
      }
    });
</script>
</html>
