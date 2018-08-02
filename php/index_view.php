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

    <link rel="stylesheet" href="/assets/home_new/public/swiper.min.css">
    <link rel="stylesheet" href="/assets/home_new/css/index.css">
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
    </div>


    <!--指数-->
    <div class="index-number">
        <div class="index-number-wrap">
            <ul class="index-number-ul" id="zhishu">
                <li class="index-number-li red">
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
                </li>
            </ul>
            <p class="index-number-p">
                <img class="index-number-p-img" src="/assets/home_new/images/icon_home_app_xz.png" alt="">
                <a href="#" class="index-number-p-a">下载民众投顾APP</a>
                <span class="index-number-p-span">行情服务随时随地</span>
            </p>
        </div>
    </div>


    <!--产品中心-->
    <div class="product">
        <div class="wrap">
            <h2 class="title">产品中心</h2>
            <a class="sub-title" href="/product/index.html">更多 ></a>
            <div class="product-boxes">
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
                       <div class="cover"></div>
                   </div>
                </div>
                <?php else: ?>
                <div class="product-box">
                    <div class="product-box-pic">
                        <img class="product-box-pic-img" src="<?php echo $v['pic_path']; ?>" alt="<?php echo $v['name']; ?>">
                        <div class="cover"></div>
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



    <!--君银风采-->
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
      }
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
setInterval("getMsg()", "5000");
</script>
