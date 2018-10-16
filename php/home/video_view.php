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
    <link rel="stylesheet" href="/assets/home_new/css/finance.css">
</head>
<body>
<!--头部-->
<?php include "header_view.php"; ?>
<!--头部-->


<!--面包屑导航-->
<div class="crumbs">
    <a href="/">首页</a>
    <a href="/video/index.html" class="crumbs-add">民众财经</a>
</div>


<!--民众财经主体-->
<div class="page-finance">
    <div class="page-finance-nav">
        <div class="page-finance-nav-head">
            全部视频（<?php echo $video_count; ?>个）
        </div>
        <div class="page-finance-nav-body">
            <div class="select classify_teach">
                <span class="select-label">老师：</span>
                <a class="select-link" data-teacher="0">全部</a>
                <?php foreach($teacher_list as $v): ?>
                <a class="select-link" data-teacher="<?php echo $v['id']; ?>"><?php echo $v['name']; ?></a>
                <?php endforeach; ?>
            </div>
            <div class="select classify_time">
                <span class="select-label">时间：</span>
                <a class="select-link" data-time="0">全部</a>
                <a class="select-link" data-time="1">当天</a>
                <a class="select-link" data-time="2">最近一周</a>
                <a class="select-link" data-time="3">最近一个月</a>
                <a class="select-link" data-time="4">最近三个月</a>
            </div>
        </div>
    </div>
    <div class="page-finance-list">
    <?php if(count($video_list)): ?>
    <?php foreach($video_list as $v): ?>
        <a href="/video/video_detail/<?php echo $v['id']; ?>.html" class="page-finance-list-li">
            <div class="img">
                <img src="<?php echo $v['pic_path']; ?>" alt="">
                <div class="img-cover"></div>
            </div>
            <div class="info">
                <div class="title"><?php echo $v['title']; ?></div>
                <div class="sub">
                    <span class="sub-date"><?php echo date("m-d",$v['timestamp']); ?></span>
                    <span class="sub-time"><?php echo date("H:i",$v['timestamp']); ?></span>
                </div>
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
var page = <?php echo $page; ?>;
var pages = <?php echo $pages; ?>;
$("#pagination").pagination({
    currentPage: page,
    totalPage: pages,
    callback: function(current) {

    }
});
</script>
</html>
<script>
$(function(){
    var page = <?php echo $page; ?>;
    var teacher = <?php echo $teacher; ?>;
    var time = <?php echo $time; ?>;
    $('.classify_teach>a').each(function(){
        if($(this).data("teacher") == teacher){
            $('.classify_teach>a').removeClass('active');
            $(this).addClass('active');
        }
    })
    $('.classify_time>a').each(function(){
        if($(this).data("time") == time){
            $('.classify_time>a').removeClass('active');
            $(this).addClass('active');
        }
    })

    $('.classify_teach>a').click(function(){
        var teacher = $(this).data("teacher");
        var time = $(".classify_time>.active").data("time");
        window.location.href = "/video/index/"+teacher+"/"+time+"/"+page+".html";
    })
    $('.classify_time>a').click(function(){
        var time = $(this).data("time");
        var teacher = $(".classify_teach>.active").data("teacher");
        window.location.href = "/video/index/"+teacher+"/"+time+"/"+page+".html";
    })
})
</script>
