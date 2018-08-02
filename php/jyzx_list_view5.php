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

    <link rel="stylesheet" href="/assets/home_new/public/jquery.pagination.css">
    <link rel="stylesheet" href="/assets/home_new/css/game.css">
</head>
<body>
<!--头部-->
<?php include "header_view.php"; ?>
<!--头部-->
<!--面包屑导航-->
<div class="crumbs">
    <a href="/">首页</a>
    <a href="/information/index.html" class="crumbs-add">民众资讯</a>
    <a href="/information/ztby.html" class="crumbs-add">主题博弈</a>
</div>


<div class="container game">
    <h2 class="game-head">主题博弈</h2>
    <div class="game-content">
    <?php if(count($ztby_list)): ?>
        <?php foreach($ztby_list as $key => $v): ?>
        <a class="game-link" href="/information/ztby_detail/<?php echo $v['id']; ?>.html">
            <img class="game-img" src="<?php echo $v['pic_path']; ?>" alt="">
        </a>
        <?php endforeach; ?>
    <?php endif; ?>
    </div>
    <div class="pagination">
        <div id="pagination" class="pagination-inner">

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
<script src="/assets/home_new/public/jquery.pagination.min.js"></script>
<script>
  $(function(){
    var page = <?php echo $page; ?>;
    var pages = <?php echo $pages; ?>;
    $("#pagination").pagination({
      currentPage: page,
      totalPage: pages,
      callback: function(current) {
        window.location.href = "/information/ztby/"+current+".html";
      }
    });
  })
</script>
</html>
