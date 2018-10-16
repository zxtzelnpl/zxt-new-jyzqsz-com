<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $foot_nav_info['name']; ?></title>
    <meta name="keywords" content="<?php echo $foot_nav_info['seo_k']; ?>">
    <meta name="description" content="<?php echo $foot_nav_info['seo_d']; ?>">
        <!--common-->
    <link rel="stylesheet" href="/assets/home_new/css/QGindex.css"/>
    <link rel="stylesheet" href="/assets/home_new/css/header.css"/>
    <link rel="stylesheet" href="/assets/home_new/css/footer.css"/>
    <script src="/assets/home_new/public/jquery.js"></script>
    <!--common-->

    <link rel="stylesheet" href="/assets/home_new/public/swiper.min.css">
    <link rel="stylesheet" href="/assets/home_new/css/foot-link.css">
    <!-- Core CSS file -->
    <link rel="stylesheet" href="/assets/home_new/PhotoSwipe/dist/photoswipe.css">

    <!-- Skin CSS file (styling of UI - buttons, caption, etc.)
         In the folder of skin CSS file there are also:
         - .png and .svg icons sprite,
         - preloader.gif (for browsers that do not support CSS animations) -->
    <link rel="stylesheet" href="/assets/home_new/PhotoSwipe/dist/default-skin/default-skin.css">
</head>
<body>
<!--头部-->
<?php include "header_view.php"; ?>
<!--头部-->


<!--面包屑导航-->
<div class="crumbs">
    <a href="/">首页</a>
    <a href="#" class="crumbs-add"><?php echo $foot_nav_info['name']; ?></a>
</div>


<div class="container foot-link">
    <div class="foot-link-nav">
        <ul class="foot-link-ul">
        <?php foreach($foot_nav_list as $v): ?>
            <li class="foot-link-li" data-id='<?php echo $v['id']; ?>'><a class="foot-link-a" href="/foot_nav/index/<?php echo $v['id']; ?>.html"><?php echo $v['name']; ?></a></li>
        <?php endforeach; ?>
            <li class="foot-link-li" ><a class="foot-link-a" href="/about_us/index.html">关于我们</a></li>
            <!-- <li class="foot-link-li" ><a class="foot-link-a" href="/foot_nav/staff.html">员工公示</a></li>
            <li class="foot-link-li" ><a class="foot-link-a" href="/foot_nav/tggs.html">投顾公示</a></li> -->
        </ul>
    </div>

    <div class="foot-link-content">
        <h2 class="title"><?php echo $foot_nav_info['title']; ?></h2>
        <div class="content">
            <?php echo $foot_nav_info['content']; ?>
        </div>
    </div>
</div>


<!--底部-->
<?php include "footer_view.php"; ?>
<!--底部-->

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe.
         It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides.
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>

</body>
<!--common-->
<script src="/assets/home_new/public/common.js"></script>
<!--common-->
<!-- Core JS file -->
<script src="/assets/home_new/PhotoSwipe/dist/photoswipe.min.js"></script>
<!-- UI JS file -->
<script src="/assets/home_new/PhotoSwipe/dist/photoswipe-ui-default.min.js"></script>

</html>
<script>
$(function(){
    var id = <?php echo $id; ?>;
    $(".foot-link-ul>li").each(function(){
        if($(this).data('id') == id){
            $(this).addClass('active');
        }
    });

        /*模拟微信图片放大*/
    function enlargeImage (index) {
      var pswpElement = document.querySelectorAll('.pswp')[0];

        // build items array
      var items = [];

      $('.content img').each(function(index,img){
        items.push({
          src:img.src,
          w:img.naturalWidth,
          h:img.naturalHeight
        })
      })


        // define options (if needed)
      var options = {
        // optionName: 'option value'
        // for example:
        index: index, // start at first slide
        shareEl:false
      };

        // Initializes and opens PhotoSwipe
      var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
      gallery.init();
    };
    $('.content img').each(function(index,img){
      img.addEventListener('click',function(){
        enlargeImage(index)
      },false)
    });
})



console.log('foot_nav_view');
</script>
