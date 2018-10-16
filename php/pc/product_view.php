<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/assets/home_new/bitbug_favicon.ico" />
    <title><?php echo $category_list[$first_title_num]['seo_t']; ?></title>
    <meta name="keywords" content="<?php echo $category_list[$first_title_num]['seo_k']; ?>">
    <meta name="description" content="<?php echo $category_list[$first_title_num]['seo_d']; ?>">
        <!--common-->
    <link rel="stylesheet" href="/assets/home_new/css/QGindex.css"/>
    <link rel="stylesheet" href="/assets/home_new/css/header.css"/>
    <link rel="stylesheet" href="/assets/home_new/css/footer.css"/>
    <script src="/assets/home_new/public/jquery.js"></script>
    <!--common-->

    <link rel="stylesheet" href="/assets/home_new/public/swiper.min.css">
    <link rel="stylesheet" href="/assets/home_new/css/product.css">
</head>
<body>
<!--头部-->
<?php include "header_view.php"; ?>
<!--头部-->
<div class="product container">
    <!--顶部大banner-->
    <div class="banner">
        <img class="banner-img" src="/assets/home_new/images/common_cp_toppic.jpg" alt="">
    </div>
    <!--案例回顾-->
    <div class="review">
        <h2 class="review-title">案例回顾</h2>
        <div class="review-nav">
        <?php foreach($case_review_product_list as $v): ?>
            <div class="review-nav-li" data-li="<?php echo $v['sx']; ?>"><?php echo $v['name']; ?></div>
        <?php endforeach; ?>
        </div>
        <div class="review-nav-contents">
            <?php foreach($case_review_product_list as $v): ?>
            <div class="content c-<?php echo $v['sx']; ?>" data-content="<?php echo $v['sx']; ?>">
                <div class="swiper-container review-swiper-container">
                    <div class="swiper-wrapper">
                    <?php foreach($case_review_info as $k => $value): ?>
                    <?php if($k == $v['id'] ): ?>
                    <?php foreach($value as $val): ?>
                        <div class="swiper-slide">
                            <div class="review-box">
                                <div class="title"><?php echo $product_arr[$val['product_id']]; ?></div>
                                <div class="chart">
                                    <div><?php echo $val['increase']; ?>%</div>
                                </div>
                                <div class="sub"><?php echo $val['description']; ?></div>
                                <div class="detail">
                                    <div class="date">
                                        推荐时间：<?php echo date("Y-m-d",$val['timestamp']); ?>
                                    </div>
                                    <div class="stock">
                                        推荐标的：<?php echo $val['name']."（".$val['code']."）"; ?>
                                    </div>
                                    <div class="state">
                                        状态：<?php echo $state_arr[$val['state']]; ?>
                                    </div>
                                    <?php if($val['csi']): ?>
                                    <div class="compare">
                                        同期沪深300指数表现：<?php echo $val['csi']; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <a href="#" class="link">
                                    查看案例图
                                </a>
                            </div>
                        </div>
                    <?php endforeach ?>
                    <?php endif; ?>
                    <?php endforeach; ?>
                    </div>
                </div>
                <div class="review-swiper-button-next"></div>
                <div class="review-swiper-button-prev"></div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="review-sub">
            上述个股统计为阶段性统计，过往战绩不代表未来收益，更多战绩请联系投顾助理查看
        </div>
    </div>
<?php if(count($product_list)): ?>
<?php foreach($product_list as $k => $val): ?>
    <?php if($k==3): ?>
    <div class="si-ren-ding-zhi">
    <?php elseif($k==2): ?>
    <div class="jun-yin-yan-jiu product-content">
    <?php elseif($k==1): ?>
    <div class="jun-yin-cao-pan product-content">
    <?php else: ?>
    <div class="duan-xian-bao product-content">
    <?php endif; ?>
        <div class="wrap">
            <h2 class="title"><?php echo $val['name']; ?> <span class="title-sub">//<?php echo $val['keywords']; ?>//</span></h2>
            <div class="product-boxes">
            <?php foreach($product_info as $v): ?>
                <?php if($v['sid'] == $val['id']): ?>
                <div class="product-box">
                    <a class="product-box-link" href="/product/detail/<?php echo $v['aid']; ?>.html">
                        <img class="product-box-img"
                             src="<?php echo $v['pic_path']; ?>" alt="">
                        <div class="product-box-info">
                            <div class="box-title">
                                <?php echo $v['name']; ?>
                                <p class="box-title-sub"><?php echo $v['keywords']; ?></p>
                            </div>
                            <div class="price">
                                价格：<span class="red"><?php echo $v['price']; ?>元/<?php echo $v['time']; ?>天</span>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endif; ?>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php endif; ?>


    <!--私人订制-->
    <!-- <div class="si-ren-ding-zhi">
        <div class="wrap">
            <h2 class="title">私人定制 <span class="title-sub">//专注打造只属于您的投资策略//</span></h2>
            <a href="#">
                <img class="big-img" src="/assets/home_new/images/common_cp_sr.jpg" alt="私人定制">
            </a>
        </div>
    </div> -->
    <!--主体活动-->
    <div class="zhu-ti-huo-dong" style="display:none">
        <div class="wrap">
            <h2 class="title">主题活动</h2>
            <a href="/product/zthd/<?php echo $zthd_info['id']; ?>.html">
                <img class="big-img" src="<?php echo $zthd_info['pic_path']; ?>" alt="主题活动">
            </a>
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


<script src="/assets/home_new/public/swiper.min.js"></script>
<script>
    $(function(){
      $(".review-nav .review-nav-li:first").addClass("active");
      $(".review-nav-contents .content:first").addClass("active");

      var content = '<?php echo $srdz; ?>';
      $('.si-ren-ding-zhi>.wrap').append("<a href='/product/srdz_detail.html'>"+content+"</a>");
      $('.si-ren-ding-zhi>.wrap a img').addClass("big-img").attr("title","私人订制").css("width","1200px")

      var swiper={};
      swiper.dxb = new Swiper('.c-dxb .swiper-container', {
        slidesPerView:3,
        slidesPerGroup : 3,
        // spaceBetween : 30,
        navigation: {
          nextEl: '.c-dxb .review-swiper-button-next',
          prevEl: '.c-dxb .review-swiper-button-prev'
        }
      })

      swiper.jycp = new Swiper('.c-jycp .swiper-container', {
        slidesPerView:3,
        slidesPerGroup : 3,
        // spaceBetween : 30,
        navigation: {
          nextEl: '.c-jycp .review-swiper-button-next',
          prevEl: '.c-jycp .review-swiper-button-prev'
        }
      })

      swiper.jyyj = new Swiper('.c-jyyj .swiper-container', {
        slidesPerView:3,
        slidesPerGroup : 3,
        // spaceBetween : 30,
        navigation: {
          nextEl: '.c-jyyj .review-swiper-button-next',
          prevEl: '.c-jyyj .review-swiper-button-prev'
        }
      })


      console.log(swiper)


      $('.review-nav-li').on('click',function(){
        var $this = $(this);
        if($this.hasClass('active')){
          return false;
        }
        else{
          var data = $this.data('li');
          var $content = $('[data-content="'+data+'"]');
          $this.siblings().removeClass('active');
          $this.addClass('active');
          $content.siblings().removeClass('active');
          $content.addClass('active');
          swiper[data].update()
        }
      })


    })
</script>
</html>
