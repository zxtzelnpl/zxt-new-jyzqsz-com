<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href=" /assets/home_new/bitbug_favicon.ico" />
    <title>投资者教育</title>
        <!--common-->
    <link rel="stylesheet" href="/assets/home_new/css/QGindex.css"/>
    <link rel="stylesheet" href="/assets/home_new/css/header.css"/>
    <link rel="stylesheet" href="/assets/home_new/css/footer.css"/>
    <script src="/assets/home_new/public/jquery.js"></script>
    <!--common-->

    <link rel="stylesheet" href="/assets/home_new/public/swiper.min.css">
    <link rel="stylesheet" href="/assets/home_new/css/investor-edu.css">
</head>
<body>
<!--头部-->
<?php include "header_view.php"; ?>
<!--头部-->


<!--面包屑导航-->
<div class="crumbs">
    <a href="/">首页</a>
    <a href="/Investor_edu/index.html" class="crumbs-add">投资者教育</a>
    <a href="#" class="crumbs-add">客户投诉电话：0755-82560701 0755-82567081</a>
</div>

<div class="investor-edu">
    <div class="investor-edu-nav">
        <a class="investor-edu-nav-li" href="/Investor_edu/index/1.html">打击非法证券活动</a>
        <a class="investor-edu-nav-li" href="/Investor_edu/index/2.html">风险揭示书</a>
        <span class="investor-edu-nav-li active" >警惕互联网非法荐股</span>
        <a class="investor-edu-nav-li double-line" href="/Investor_edu/index/4.html">险有所知、投有所择、老有所享</a>
        <a class="investor-edu-nav-li double-line"  href="/Investor_edu/index/5.html">警惕互联网“非法荐股”风险</a>
    </div>
    <div class="investor-edu-content">
        <div class="investor-edu-content-vigilance">
            <div class="content-head">
                警惕互联网非法荐股风险
            </div>
            <div class="content-text">
                近期，不法分子利用微信、微博、网络直播室、论坛、股吧、QQ等互联网工具或平台进行“非法荐股”活动有所抬头。非法活动花样繁多，欺骗性强，而不法分子往往无固定经营场所，流窜作案，有的甚至藏身境外，严重损害投资者利益和证券市场正常秩序。在此提醒广大投资者，根据《证券法》《期货交易管理条例》《证券、期货投资咨询管理暂行办法》等法律法规规定，从事证券、期货投资咨询业务，必须依法取得中国证监会的业务许可；未经中国证监会许可，任何单位和个人均不得从事证券、期货投资咨询业务。请投资者选择合法证券期货经营机构，获取相关投资咨询服务，对各类“荐股”活动保持高度警惕，远离“非法荐股”活动，以免遭受财产损失。合法证券期货经营机构名单可在中国证监会、中国证券业协会、中国期货业协会网站查询。
            </div>
            <div class="content-nav">
                <div class="content-nav-li active">
                    <div class="content-nav-li-title">
                        投资者保护明规则、识风险<br/>
                        案例巡展
                    </div>
                    <div class="content-nav-li-sub">
                        操纵市场篇（二）
                    </div>
                </div>
                <div class="content-nav-li">
                    <div class="content-nav-li-title">
                        投资者保护明规则、识风险案例巡展
                    </div>
                    <div class="content-nav-li-sub">
                        操纵市场篇（四）
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="content-body-box active">
                    <img class="content-body-img" src="/assets/home_new/investor_edu/warning_content1.jpg" alt="">
                </div>
                <div class="content-body-box">
                    <img class="content-body-img" src="/assets/home_new/investor_edu/warning_content2.jpg" alt="">
                </div>
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


<script>
    $(function () {
      var lis = $('.content-nav-li');
      var boxes = $('.content-body-box');
      var ACTIVE = 'active';
      lis.on('click',function(){
        var $this =$(this);

        if($this.hasClass(ACTIVE)){
          return false
        }
        else{
          var i = $this.index();
          $this.addClass(ACTIVE).siblings().removeClass(ACTIVE);
          boxes.eq(i).addClass(ACTIVE).siblings().removeClass(ACTIVE);
        }
      });
    })
</script>
</html>
