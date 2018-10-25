<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $tdk['seo_t']; ?></title>
    <meta name="keywords" content="<?php echo $tdk['seo_k']; ?>">
    <meta name="description" content="<?php echo $tdk['seo_d']; ?>">
    <link rel="shortcut icon" href=" /assets/home_new/bitbug_favicon.ico" />
    <link rel="stylesheet" href="/assets/home_new/css/QGindex.css"/>
    <link rel="stylesheet" href="/assets/home_new/css/header.css"/>
    <link rel="stylesheet" href="/assets/home_new/css/footer.css"/>
    <script src="/assets/home_new/public/jquery.js"></script>
    <!--common-->

  <link rel="stylesheet" href="/assets/home_new/public/swiper.min.css">
  <link rel="stylesheet" href="/assets/home_new/public/jquery.pagination.css">
  <link rel="stylesheet" href="/assets/home_new/pdf/web/pdf_viewer.css">
  <link rel="stylesheet" href="/assets/home_new/css/detail-pdf.css">
  <link rel="stylesheet" href="/assets/home_new/css/article-detail.css">
  <meta name="baidu-site-verification" content="PGYzWJBy7D" />
</head>
<body>
<!--头部-->
<?php include "header_view.php"; ?>
<!--头部-->


<!--面包屑导航-->
<div class="crumbs">
    <a href="/information/index.html">民众资讯</a>
    <a href="/information/tzgd.html" class="crumbs-add">投顾观点</a>
    <a href="#" class="crumbs-add"><?php echo $information_detail['title']; ?></a>
</div>

<div class="container">
    <div class="info-content">

      <div id="pageContainer" class="page-container" data-url="<?php echo $information_detail['pdf_path']; ?>">
        <canvas id="pageCanvas" class="page-canvas">

        </canvas>

        <div class="page-PDF-foot">
          <div class="page-PDF-control">
            <p id="prev" class="btn prev disable">上一页</p>
            <p class="show-index">Page <span id=page_num></span> of <span id=page_count></span></p>
            <p id="next" class="btn next">下一页</p>
          </div>
        </div>
      </div>

        <div class="page-foot">
            <span class="page-foot-name">董齐安</span>
            <span class="page-foot-number">A0770617010001</span>
            <span class="page-foot-text">入市需谨慎，投资有风险</span>
        </div>

      <div class="page-article-content-nav">
        <div class="prev">
            <span>上一篇：</span>
            <a class="link" href="/information/tzgd_detail/<?php echo $prev['id']; ?>.html"><?php echo $prev['title']; ?></a>
        </div>
        <div class="next">
          <span>下一篇：</span>
          <a class="link" href="/information/tzgd_detail/<?php echo $next['id']; ?>.html"><?php echo $next['title']; ?></a>
        </div>
      </div>
    </div>

    <div class="page-article-side">
        <div class="page-article-side-title">
            热门头条
        </div>
        <?php if(count($hot_info)): ?>
        <?php foreach($hot_info as $v): ?>
        <a class="page-article-side-a" href="/information/tzgd_detail/<?php echo $v['id']; ?>.html"><?php echo $v['title']; ?></a>
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


<script src="/assets/home_new/public/jquery.pagination.min.js"></script>
<script src="/assets/home_new/pdf/build/pdf.js"></script>
<script src="/assets/home_new/js/pdf-detail.js"></script>
<!--common-->
</html>
<script type="text/javascript">


</script>
