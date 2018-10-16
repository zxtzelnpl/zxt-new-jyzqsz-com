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
    <link rel="stylesheet" href="/assets/home_new/css/information.css">
</head>
<body>
<!--头部-->
<?php include "header_view.php"; ?>
<!--头部-->


<div class="page-information">
    <div class="page-information-banner"></div>
    <div class="page-information-boxes">
        <div class="page-information-box dynamics-info">
            <h2 class="title">投资观点</h2>
            <span class="more"><a href="/information/tzgd.html">更多></a></span>
            <div class="lis">
                <?php if(count($tzgd_list)): ?>
                <?php foreach($tzgd_list as $key => $v): ?>
                <?php if($key < 1): ?>
                <a class="li-top" href="/information/tzgd_detail/<?php echo $v['id']; ?>.html" target="_blank">
                    <div class="head">
                        <div class="head-date">
                            <div class="month"><?php echo date("m",strtotime($v['datetime'])); ?></div>
                            <div class="date"><?php echo date("d",strtotime($v['datetime'])); ?></div>
                        </div>
                        <div class="head-title"><?php echo $v['title']; ?></div>
                    </div>
                    <div class="body">
                       <?php echo mb_substr(strip_tags($v['content']), 0,100); ?>
                    </div>
                </a>
                <?php else: ?>
                <a class="li" href="/information/tzgd_detail/<?php echo $v['id']; ?>.html" target="_blank">
                    <span class="li-date"><?php echo date("Y/m/d",strtotime($v['datetime'])); ?></span>
                    <span class="li-summary"><?php echo $v['title']; ?></span>
                </a>
                <?php endif; ?>
                <?php endforeach; ?>
                <?php endif ?>
            </div>
        </div>
        <div class="page-information-box investment-view">
            <h2 class="title">资讯动态</h2>
            <span class="more"><a href="/information/zxdt.html">更多></a></span>
            <div class="lis">
                <?php if(count($zxdt_list)): ?>
                <?php foreach($zxdt_list as $key => $v): ?>
                <?php if($key < 1): ?>
                <a class="li-top" href="/information/zxdt_detail/<?php echo $v['ID']; ?>.html" target="_blank">
                    <div class="head">
                        <div class="head-date">
                            <div class="month"><?php echo date("m",strtotime($v['UEditTime'])); ?></div>
                            <div class="date"><?php echo date("d",strtotime($v['UEditTime'])); ?></div>
                        </div>
                        <div class="head-title"><?php echo $v['Title']; ?></div>
                    </div>
                    <div class="body"><?php echo mb_substr(strip_tags($v['Content']), 0,100); ?></div>
                </a>
                <?php else: ?>
                <a class="li" href="/information/zxdt_detail/<?php echo $v['ID']; ?>.html" target="_blank">
                    <span class="li-date"><?php echo date("Y/m/d",strtotime($v['UEditTime'])); ?></span>
                    <span class="li-summary"><?php echo $v['Title']; ?></span>
                </a>
                <?php endif; ?>
                <?php endforeach; ?>
                <?php endif ?>
            </div>
        </div>
        <div class="page-information-box top-news">
            <h2 class="title">今日头条</h2>
            <span class="more"><a href="/information/jrtt.html">更多></a></span>
            <div class="lis">
                <?php if(count($jrtt_list)): ?>
                <?php foreach($jrtt_list as $key => $v): ?>
                <?php if($key < 1): ?>
                <a class="li-top" href="/information/jrtt_detail/<?php echo $v['id']; ?>.html" target="_blank">
                    <div class="head">
                        <div class="head-date">
                            <div class="month"><?php echo date("m",$v['timestamp']); ?></div>
                            <div class="date"><?php echo date("d",$v['timestamp']); ?></div>
                        </div>
                        <div class="head-title"><?php echo $v['title']; ?></div>
                    </div>
                    <div class="body"><?php echo mb_substr(strip_tags($v['content']), 0,100); ?></div>
                </a>
                <?php else: ?>
                <a class="li" href="/information/jrtt_detail/<?php echo $v['id']; ?>.html" target="_blank">
                    <span class="li-date"><?php echo date("Y/m/d",$v['timestamp']); ?></span>
                    <span class="li-summary"><?php echo $v['title']; ?></span>
                </a>
                <?php endif; ?>
                <?php endforeach; ?>
                <?php endif ?>
            </div>
        </div>
    </div>

    <div class="page-information-boxes">
        <div class="page-information-box strategic-summary">
            <h2 class="title">策略纪要</h2>
            <span class="more"><a href="/information/cljy.html">更多></a></span>
            <div class="lis">
            <?php if(count($cljy_list)): ?>
            <?php foreach($cljy_list as $key => $v): ?>
                <a href="/information/cljy_detail/<?php echo $v['id']; ?>.html" class="li">
                    <img class="li-img" src="<?php echo $v['pic_path']; ?>"/>
                    <div class="li-info">
                        <div class="li-info-title">
                            <div class="in-title"><?php echo $v['title']; ?></div>
                            <div class="date"><?php echo date("Y-m-d",strtotime($v['datetime'])); ?></div>
                        </div>
                        <div class="li-info-summary"><?php echo mb_substr(strip_tags($v['content']), 0,100); ?></div>
                    </div>
                </a>
            <?php endforeach; ?>
            <?php endif; ?>
            </div>
        </div>
        <!-- <div class="page-information-box game">
            <h2 class="title">主题博弈</h2>
            <span class="more"><a href="/information/ztby.html">更多></a></span>
            <div class="lis">
            <?php if(count($ztby_list)): ?>
            <?php foreach($ztby_list as $key => $v): ?>
                <a href="/information/ztby_detail/<?php echo $v['id'] ?>.html" class="li" target="_blank">
                    <img class="li-img" src="<?php echo $v['pic_path']; ?>" alt="">
                </a>
            <?php endforeach; ?>
            <?php endif; ?>
            </div>
        </div> -->
    </div>
</div>

<!--底部-->
<?php include "footer_view.php"; ?>
<!--底部-->
</body>
<!--common-->
<script src="/assets/home_new/public/common.js"></script>
<!--common-->


<script>
    eclipse('.li-top .body',64);
    eclipse('.li-info-summary',120);
</script>
</html>
