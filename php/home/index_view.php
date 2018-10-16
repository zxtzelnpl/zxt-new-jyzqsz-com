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
    <link rel="stylesheet" href="/assets/home_new/css/index.css">
    <link rel="stylesheet" href="/assets/home_new/css/move-box.css">
    <style>.index-number-li .percent{margin-left: 12px;}</style>
</head>
<body>
<!--头部-->
<?php include "header_view.php"; ?>
<!--头部-->
<div class="container index">
    <!--swiper-->
    <div class="swiper-container index-banner">
        <div class="swiper-wrapper">
        <?php foreach($banner_list as $v): ?>
            <div class="swiper-slide"><a href="<?php echo $v['url']; ?>"><img class="swiper-slider-img" src="<?php echo $v['path']; ?>" style="width:100% ;" alt="" /></a></div>
        <?php endforeach; ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div><!--左箭头-->
        <div class="swiper-button-next"></div><!--右箭头-->
    </div>


    <!--指数-->
    <div class="index-number">
        <div class="index-number-wrap">
            <ul class="index-number-ul" id="zhishu">
                <!-- <li class="index-number-li red">
                    <span class="name">上证指数：</span>
                    <span class="number">2918.77</span>
                    <span class="rise">8.79</span>
                    <span class="percent">0.30%</span>
                </li>
                <li class="index-number-li red">
                    <span class="name">深证指数：</span>
                    <span class="number">9035.38</span>
                    <span class="rise">45.68</span>
                    <span class="percent">0.21%</span>
                </li>
                <li class="index-number-li red">
                    <span class="name">创业板指数：</span>
                    <span class="number">1563.15</span>
                    <span class="rise">15.98</span>
                    <span class="percent">1.03%</span>
                </li> -->
            </ul>
            <p class="index-number-p">
                <img class="index-number-p-img" src="/assets/home_new/images/icon_home_app_xz.png" alt="">
                <a href="#" class="index-number-p-a">下载民众投顾APP</a>
                <span class="index-number-p-span">行情服务随时随地</span>
            </p>
        </div>
    </div>


    <!--民众资讯首页-->
    <div class="page-information">
        <div class="page-information-boxes">
            <div class="page-information-box dynamics-info">
                <h2 class="page-information-box-title">投顾观点</h2>
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
                            <div class="head-title">
                                <?php echo $v['title']; ?>
                            </div>
                        </div>
                        <div class="body">
                            <?php echo mb_substr(strip_tags($v['content']), 0,100); ?>
                        </div>
                    </a>
                <?php else: ?>
                    <a class="li" href="/information/tzgd_detail/<?php echo $v['id']; ?>.html" target="_blank">
                        <span class="li-date"><?php echo date("Y/m/d",strtotime($v['datetime'])); ?></span>
                        <span class="li-summary">
                        <?php echo $v['title']; ?>
                        </span>
                    </a>
                <?php endif; ?>
                <?php endforeach; ?>
                <?php endif ?>
                </div>
            </div>
            <div class="page-information-box investment-view">
                <h2 class="page-information-box-title">资讯动态</h2>
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
                            <div class="head-title">
                                <?php echo $v['Title']; ?>
                            </div>
                        </div>
                        <div class="body">
                            <?php echo mb_substr(strip_tags($v['Content']), 0,100); ?>
                        </div>
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
                <h2 class="page-information-box-title">今日头条</h2>
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
                            <div class="head-title">
                                <?php echo $v['title']; ?>
                            </div>
                        </div>
                        <div class="body">
                            <?php echo mb_substr(strip_tags($v['content']), 0,100); ?>
                        </div>
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
    </div>

    <!--头条新闻-->
    <div class="news">
        <div class="wrap">
            <h2 class="title">头条新闻</h2>
            <a class="sub-title" href="/information/jrtt.html">更多 ></a>
            <div class="news-boxes">
            <?php foreach($headline_news_list as $key => $v): ?>
                <?php if($key < 1): ?>
                <a href="/information/jrtt_detail/<?php echo $v['id']; ?>.html" class="news-left">
                    <img class="news-left-img" src="<?php echo $v['pic_path']; ?>" alt="头条新闻">
                    <p class="news-left-p"><?php echo $v['title']; ?></p>
                </a>
                <?php endif; ?>
            <?php endforeach; ?>
                <div class="news-middle">
                <?php foreach($headline_news_list as $key => $v): ?>
                    <?php if($key < 3 && $key > 0): ?>
                    <a class="news-middle-link" href="/information/jrtt_detail/<?php echo $v['id']; ?>.html">
                        <img class="news-middle-img" src="<?php echo $v['pic_path']; ?>" alt="头条新闻">
                        <p class="news-middle-p"><?php echo $v['title']; ?></p>
                    </a>
                    <?php endif; ?>
                <?php endforeach; ?>
                </div>
                <div class="news-right">
                <?php foreach($headline_news_list as $key => $v): ?>
                    <?php if($key >= 3 ): ?>
                    <a class="news-right-link" href="/information/jrtt_detail/<?php echo $v['id']; ?>.html"><?php echo $v['title']; ?></a>
                    <?php endif; ?>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>



    <!--民众风采-->
    <div class="reference">
        <div class="wrap">
            <h2 class="title">民众内参</h2>
            <a class="sub-title" href="/information/index.html">更多 ></a>
            <div class="reference-boxes">
            <?php foreach($information_list as $key => $v): ?>
                <a class="reference-box" href="/information/tzgd_detail/<?php echo $v['id']; ?>.html">
                    <img src="<?php echo $v['pic_path']; ?>" alt="" class="reference-box-img">
                    <div class="reference-box-info">
                        <p class="reference-box-title"><?php echo $v['title']; ?></p>
                        <p class="date"><?php echo substr($v['datetime'],0,10); ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>


    <!--产品中心-->
    <div class="product">
        <div class="wrap">
            <h2 class="title">产品中心</h2>
            <a class="sub-title" href="/product/index.html">更多 ></a>
            <div class="product-boxes">
                <div class="product-box product-box-product">
                    <div class="product-box-title">
                        智能量化股池
                    </div>
                    <div class="product-box-content">
                    <?php foreach($product_list as $k => $v): ?>
                        <a href="/product/index.html" class="product-box-content-li">
                            <span class="product-box-content-title"><?php echo $v['name']; ?></span>
                            <span class="product-box-content-sub"><?php echo $v['keywords']; ?></span>
                        </a>
                    <?php endforeach; ?>
                       <!--  <a href="/product/index.html" class="product-box-content-li">
                           <span class="product-box-content-title">操盘先锋</span>
                           <span class="product-box-content-sub">质优个股+操盘策略</span>
                       </a>
                       <a href="/product/index.html" class="product-box-content-li">
                           <span class="product-box-content-title">策略调研</span>
                           <span class="product-box-content-sub">高成长+低估值</span>
                       </a>
                       <a href="/product/index.html" class="product-box-content-li">
                           <span class="product-box-content-title">私人订制</span>
                           <span class="product-box-content-sub">私人专属 策略订制</span>
                       </a> -->
                    </div>
                </div>
                <div class="product-box product-box-strategy">
                    <div class="product-box-title">
                        专家优选策略
                    </div>
                    <div class="product-box-content">
                        <div class="product-box-content-li">
                            <span class="product-box-content-title">人工优选标的</span>
                        </div>
                        <div class="product-box-content-li">
                            <span class="product-box-content-title">科学仓位管理</span>
                        </div>
                        <div class="product-box-content-li">
                            <span class="product-box-content-title">提示买卖点位</span>
                        </div>
                        <div class="product-box-content-li">
                            <span class="product-box-content-title">止盈止损预警</span>
                        </div>
                    </div>
                </div>
                <div class="product-box product-box-service">
                    <div class="product-box-title">
                        贴身管家服务
                    </div>
                    <div class="product-box-content">
                        <div class="product-box-content-li">
                            <span class="product-box-content-title">百名 专家顾问</span>
                        </div>
                        <div class="product-box-content-li">
                            <span class="product-box-content-title">专属 投资助理</span>
                        </div>
                        <div class="product-box-content-li">
                            <span class="product-box-content-title">全程 贴心服务</span>
                        </div>
                        <div class="product-box-content-li">
                            <span class="product-box-content-title">0基础 系统教学</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-boxes" style="display:none;">
                <?php foreach($product_list as $k => $v): ?>
                    <?php if($k < 2): ?>
                    <div class="product-box">
                       <div class="product-box-info">
                           <h2 class="product-box-info-title"><?php echo $v['name']; ?></h2>
                           <p class="product-box-info-detail"><?php echo $v['description']; ?></p>
                           <a href="/product/index.html" class="product-box-info-link">
                               了解详情
                           </a>
                       </div>
                       <div class="product-box-pic">
                           <img class="product-box-pic-img" src="<?php echo $v['pic_path']; ?>" alt="<?php echo $v['name']; ?>">
                       </div>
                    </div>
                    <?php else: ?>
                    <div class="product-box">
                        <div class="product-box-pic">
                            <img class="product-box-pic-img" src="<?php echo $v['pic_path']; ?>" alt="<?php echo $v['name']; ?>">
                        </div>
                        <div class="product-box-info">
                            <h2 class="product-box-info-title"><?php echo $v['name']; ?></h2>
                            <p class="product-box-info-detail"><?php echo $v['description']; ?></p>
                            <a href="/product/index.html" class="product-box-info-link">
                                了解详情
                            </a>
                        </div>
                    </div>
                    <?php endif; ?>
               <?php endforeach; ?>
            </div>
        </div>
    </div>


    <!--投顾风采-->
    <div class="teacher">
        <div class="wrap">
            <h2 class="title">投顾风采</h2>
            <a class="sub-title" href="/team/index.html">更多 ></a>
            <div class="teacher-content">
                <div class="detail">

                    <div class="detail-wrap">
                        <img class="detail-img" src="/assets/home_new/mock/teacher2.png"/>
                        <div class="detail-name">田雨辰</div>
                        <div class="detail-line">/</div>
                        <div class="detail-number">执业编号：<span>A0770617010020</span></div>
                    </div>

                </div>
                <div class="boxes">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                        <?php foreach($team_member_list1 as $val): ?>
                            <div class="swiper-slide">
                                <div class="box-wrap">
                                <?php foreach($val as $v): ?>
                                    <div class="box before" data-img="<?php echo $v['picture']; ?>" data-name="<?php echo $v['name']; ?>" data-number="<?php echo $v['number']; ?>">
                                        <div class="box-before">
                                            <img class="box-before" src="<?php echo $v['picture']; ?>" alt="" width="200" height="200">
                                        </div>
                                        <div class="box-after">
                                            <span><?php echo $v['name']; ?></span>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                                </div>
                            </div>
                        <?php endforeach; ?>

                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <!--民众财经-->
    <div class="finance">
        <div class="wrap">
            <h2 class="title">民众财经</h2>
            <a class="sub-title" href="/video/index.html">更多 ></a>
            <div class="finance-boxes">
            <?php foreach($video_list as $v): ?>
                <a href="/video/video_detail/<?php echo $v['id']; ?>.html" class="finance-box">
                    <img class="image" src="<?php echo $v['pic_path']; ?>" alt="民众财经">
                    <span class="date"><?php echo date("m-d",$v['timestamp']); ?></span>
                    <span class="finance-box-title"><?php echo $v['title']; ?></span>
                </a>
            <?php endforeach; ?>
            </div>
        </div>
    </div>



    <!--合作伙伴-->
    <div class="cooperative">
        <div class="wrap">
            <h2 class="title">合作伙伴</h2>
            <div class="cooperatives">
            <?php if(count($link_list)): ?>
                <?php foreach($link_list as $v): ?>
                <img class="cooperatives-img" src="<?php echo $v['pic_path']; ?>" alt="" />
                <?php endforeach; ?>
            <?php endif; ?>
            </div>
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

<div class="move-box" data-action="move-box">
    <div class="move-box-head">
        <img class="move-box-head-close" src="/assets/home_new/images/warning_box/wrong.png" alt="">
    </div>
    <div class="move-box-content">
        <div class="move-box-content-inner">
            警惕互联网“非法荐股”风险
        </div>
    </div>

    <a class="move-box-link" target="_blank" href="/Investor_edu/index/5.html">
        <span>进入了解详细</span>
        <img src="/assets/home_new/images/warning_box/shape.png" alt="">
    </a>

    <img class="move-box-warning" src="/assets/home_new/images/warning_box/warning.png" alt="">
</div>

</html>
<script src="/assets/home_new/public/swiper.min.js"></script>
<script>
$(function(){
    console.log($(".teacher .box:first").data("name"));
    $(".teacher .box:first").removeClass("before").addClass("after");
    $('.detail-img').attr('src',$(".teacher .box:first").data("img"));
    $('.detail-name').html($(".teacher .box:first").data("name"));
    $('.detail-number span').html($(".teacher .box:first").data("number"));
})
</script>
<script>
  $(function(){
    var bannerSwiper = new Swiper('.swiper-container.index-banner', {
      speed:1000,
      autoplay: true,//可选选项，自动滑动
      pagination: {
        el: '.swiper-pagination',
        type:'bullets',
        clickable :true
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    })

    var bannerSwiper = new Swiper('.teacher .swiper-container', {
      speed:200,
      pagination: {
        el: '.swiper-pagination',
        type:'bullets',
        clickable :true
      }
    });

    $(".teacher .box").on('click',function(){
      let $this = $(this)
      if($this.hasClass('before')){
        $(".teacher .box.after").removeClass('after').addClass('before')
        $this.removeClass('before').addClass('after');

        var img = $this.data('img');
        var name = $this.data('name');
        var number = $this.data('number');
        $('.detail-img').attr('src',img);
        $('.detail-name').html(name);
        $('.detail-number span').html(number);
      }
    });

    /*查过两行加上省略号*/
    eclipse('.finance-box-title',30);
    eclipse('.reference-box-title',30);
    /*首页增加的民众信息的部分*/
    eclipse('.li-top .body',64);
    eclipse('.li-info-summary',56);
  })
</script>
<script>
function getMsg()
{
    $.ajax({
        url: '/index/getMsg',
        type: 'POST',
        data: {url:"http://hq.sinajs.cn/list=s_sh000001,s_sz399001,s_sz399006",},
        dataType:"json",
        success: function (data) {
         //判断指数上涨下跌

        if(Number(data["shangzhi"][1]).toFixed(2)<0){
            var shangzhi = '<li class="index-number-li green"><span class="name">上证指数：</span><span class="number">'+Number(data["shangzhi"][1]).toFixed(2)+'</span><span class="rise">'+Number(data["shangzhi"][0]).toFixed(2)+'</span><span class="percent">'+Number(data["shangzhi"][2]).toFixed(2)+'%</span></li>';
        }

        else{
         var shangzhi = '<li class="index-number-li red"><span class="name">上证指数：</span><span class="number">'+Number(data["shangzhi"][1]).toFixed(2)+'</span><span class="rise">'+Number(data["shangzhi"][0]).toFixed(2)+'</span><span class="percent">'+Number(data["shangzhi"][2]).toFixed(2)+'%</span></li>';
        }
        if (Number(data["shengzhi"][1]).toFixed(2)<0) {
          var shengzhi = '<li class="index-number-li green"><span class="name">深证指数：</span><span class="number">'+Number(data["shengzhi"][1]).toFixed(2)+'</span><span class="rise">'+Number(data["shengzhi"][0]).toFixed(2)+'</span><span class="percent">'+Number(data["shengzhi"][2]).toFixed(2)+'%</span></li>';
        }
        else{
          var shengzhi = '<li class="index-number-li red"><span class="name">深证指数：</span><span class="number">'+Number(data["shengzhi"][1]).toFixed(2)+'</span><span class="rise">'+Number(data["shengzhi"][0]).toFixed(2)+'</span><span class="percent">'+Number(data["shengzhi"][2]).toFixed(2)+'%</span></li>';
        }
        if (Number(data["chuangye"][1]).toFixed(2)<0) {
           var chuangye = '<li class="index-number-li green"><span class="name">创业板指数：</span><span class="number">'+Number(data["chuangye"][1]).toFixed(2)+'</span><span class="rise">'+Number(data["chuangye"][0]).toFixed(2)+'</span><span class="percent">'+Number(data["chuangye"][2]).toFixed(2)+'%</span></li>';
        }
        else{
           var chuangye = '<li class="index-number-li red"><span class="name">创业板指数：</span><span class="number">'+Number(data["chuangye"][1]).toFixed(2)+'</span><span class="rise">'+Number(data["chuangye"][0]).toFixed(2)+'</span><span class="percent">'+Number(data["chuangye"][2]).toFixed(2)+'%</span></li>';
        }
         var html=shangzhi + shengzhi + chuangye;
          $("#zhishu").html(html);
        }
    })
}
getMsg();
setInterval(getMsg, "5000");
</script>
<script src="/assets/home_new/js/move-box.js"></script>
