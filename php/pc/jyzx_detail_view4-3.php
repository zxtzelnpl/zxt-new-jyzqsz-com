<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
      <!--common-->
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
  <link rel="stylesheet" href="/assets/home_new/css/detail-office.css">
  <link rel="stylesheet" href="/assets/home_new/css/article-detail.css">
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
    <a href="/information/cljy.html" class="crumbs-add">策略纪要</a>
    <a class="crumbs-add"><?php echo $information_detail['title']; ?></a>
  </div>

  <!--样式同民众头条-->
  <div class="container">
    <div class="info-content">
        <div class="info-content-title">
                <div class="title"><?php echo $information_detail['title']; ?></div>
                <div class="date"><?php echo date("Y-m-d",$information_detail['timestamp']); ?></div>
        </div>
        <div class="office-content">
                <img class="office-content-img" src="/assets/home_new/images/detail/file_word.png" alt="">
                <p class="office-content-p">这是一个WORD文件请
                    <a class="office-download" href="http://pxzbs.jyzqsz.com/<?php echo $information_detail['filepath']; ?>" download="这里面文件策略纪要的标题">下载</a>
                后观看</p>
        </div>

        <div class="page-foot">
            <span class="page-foot-name">董齐安</span>
            <span class="page-foot-number">A0770617010001</span>
            <span class="page-foot-text">入市需谨慎，投资有风险</span>
        </div>

      <div class="page-article-content-nav">
        <div class="prev">
          <span>上一篇：</span>
          <a class="link" href="/information/cljy_detail/<?php echo $prev['id']; ?>.html"><?php echo $prev['title']; ?></a>
        </div>
        <div class="next">
          <span>下一篇：</span>
          <a class="link" href="/information/cljy_detail/<?php echo $next['id']; ?>.html"><?php echo $next['title']; ?></a>
        </div>
      </div>
    </div>

    <div class="page-article-side">
        <div class="page-article-side-title">
            热门头条
        </div>
        <?php if(count($hot_info)): ?>
        <?php foreach($hot_info as $v): ?>
        <a class="page-article-side-a" href="/information/cljy_detail/<?php echo $v['id']; ?>.html"><?php echo $v['title']; ?></a>
        <?php endforeach; ?>
        <?php endif; ?>

    </div>




  <!--底部-->
<?php include "footer_view.php"; ?>
<!--底部-->

</body>
<!--common-->
<script src="/assets/home_new/public/common.js"></script>
<!--common-->


<script src="/assets/home_new/public/jquery.pagination.min.js"></script>
<script src="/assets/home_new/js/office-detail.js"></script>


</html>
