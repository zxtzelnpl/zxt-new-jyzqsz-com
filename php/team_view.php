<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>投顾团队</title>
        <!--common-->
    <link rel="stylesheet" href="/assets/home_new/css/QGindex.css"/>
    <link rel="stylesheet" href="/assets/home_new/css/header.css"/>
    <link rel="stylesheet" href="/assets/home_new/css/footer.css"/>
    <script src="/assets/home_new/public/jquery.js"></script>
    <!--common-->

    <link rel="stylesheet" href="/assets/home_new/public/swiper.min.css">
    <link rel="stylesheet" href="/assets/home_new/css/team.css">
</head>
<body>
<!--头部-->
<?php include "header_view.php"; ?>
<!--头部-->

<div class="team container">
    <ul class="product-type">
        <li class="product-type-li">
            <img class="product-img" src="/assets/home_new/images/icon_team_jp.png" alt="大咖荟萃" />
            <h2 class="product-title">大咖荟萃</h2>
            <div class="product-division"><span></span></div>
            <div class="product-summary">
                君银投顾汇聚了行业内众多一线知名金融大咖，涵盖湖北卫视《天生阿财》的常住嘉宾、第一财经《今日股市》的特邀嘉宾、深圳财经频道的特邀嘉宾等，用专业权威的投资的理念投资方法引领投资者理性投资。
            </div>
        </li>
        <li class="product-type-li">
            <img class="product-img" src="/assets/home_new/images/icon_team_td.png" alt="团队服务" />
            <h2 class="product-title">团队服务</h2>
            <div class="product-division"></div>
            <div class="product-summary">
                君银投顾根据多年来市场风格的变化规律，相继组件了强势优选团队、牛眼主升团队、量化驱动团队，以此迎合投资者多元化的投资风格。
            </div>
        </li>
        <li class="product-type-li">
            <img class="product-img" src="/assets/home_new/images/icon_team_cl.png" alt="海量策略" />
            <h2 class="product-title">海量策略</h2>
            <div class="product-division"><span></span></div>
            <div class="product-summary">
                金牌投顾全方位分析宏观经济运行情况，研判行情大势，深度挖掘各个行业投资价值，定制不同风格投资策略，为每一个投资者提供这适合的投资服务。
            </div>
        </li>
    </ul>

    <div class="product-line">
        <img class="product-line-img" src="/assets/home_new/images/icon_team_zs.png" alt="" />
    </div>

    <div class="team-show">
        <img class="team-show-banner" src="<?php echo $team_pic; ?>"/>
        <h2 class="team-show-title">团队领军人物</h2>
        <div class="team-show-swiper">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                <?php foreach($team_member_list as $v): ?>
                    <div class="swiper-slide team-show-teacher">
                        <img class="team-show-teacher-img" src="<?php echo $v['picture']; ?>" alt="<?php echo $v['name']; ?>">
                        <div class="team-show-teacher-info">
                            <h4 class="team-show-teacher-info-name"><?php echo $v['name']; ?></h4>
                            <p class="team-show-teacher-info-number">执业编号：<?php echo $v['number']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
                    
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
            <!-- Add Navigation -->
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>

        <div class="team-show-nav">
        <?php foreach($team_list as $v): ?>
            <a class="team-show-nav-li" data-id="<?php echo $v['id']; ?>" href='/team/index/<?php echo $v['id']; ?>.html'><?php echo $v['name']; ?></a>
        <?php endforeach; ?>
        </div>
    </div>

    <div class="team-detail">
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <?php foreach($team_member_list as $v): ?>
                <div class="swiper-slide">
                    <img class="team-detail-img" src="<?php echo $v['introduce_pic']; ?>" alt="">
                </div>
            <?php endforeach; ?>  
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


<script src="/assets/home_new/public/swiper.min.js"></script>
<script>
   var team_id = <?php echo $team_id; ?>;
    $(".team-show-nav>a").each(function(){
        if($(this).data("id") == team_id){
            $(this).addClass("active");
        }
    })

  var teachers = $('.team-show-teacher');
  var showBoxSwiper = new Swiper('.team-show-swiper>.swiper-container', {
    simulateTouch:false,
    slidesPerView:2,
    slidesPerGroup : 2,
    spaceBetween : 24,
    pagination: {
      el: '.swiper-pagination',
      type:'bullets',
      clickable :true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    on:{
      init:function(){
        teachers.eq(this.activeIndex).addClass('active');
      }
    }
  });

  var detailSwiper = new Swiper('.team-detail>.swiper-container',{
    simulateTouch:false
  });


  teachers.on('click',function(){
    var $this = $(this);
    if($this.hasClass('active')){
      return false;
    }
    else{
      $('.team-show-teacher.active').removeClass('active');
      $this.addClass('active');
      var index = $this.index();
      detailSwiper.slideTo(index);
    }
  });



  var teamShow = $('.team-show');
  var teamShowNav = $('.team-show-nav');
  var myScroll = function(){
    var top = teamShow[0].getBoundingClientRect().top;
    var left = teamShow[0].getBoundingClientRect().left-30;
    var _left;
    if(left>=180){
      _left =left-180;
    }
    else{
      return teamShowNav[0].style="display:none;"
    }
    if(top<30){
      teamShowNav[0].style="position:fixed;top:30px;left:"+_left+"px"
    }
    else{
      teamShowNav[0].style=""
    }
  }

  $(window).on('load',myScroll);
  $(window).on('resize',myScroll);
  $(window).on('scroll',myScroll);


</script>
</html>
