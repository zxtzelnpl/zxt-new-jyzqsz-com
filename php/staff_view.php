<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>员工公示</title>
        <!--common-->
    <link rel="stylesheet" href="/assets/home_new/css/QGindex.css"/>
    <link rel="stylesheet" href="/assets/home_new/css/header.css"/>
    <link rel="stylesheet" href="/assets/home_new/css/footer.css"/>
    <script src="/assets/home_new/public/jquery.js"></script>
    <!--common-->

    <link rel="stylesheet" href="/assets/home_new/public/swiper.min.css">
    <link rel="stylesheet" href="/assets/home_new/css/staff.css">
</head>
<body>
<!--头部-->
<?php include "header_view.php"; ?>
<!--头部-->


<div class="page-staff">
    <form class="page-staff-head" action="/foot_nav/search_staff.html" method="post">
        <div class="drop-down-wrapper">
            <div class="drop-down-select">请选择子公司</div>
            <div class="page-staff-nav drop-down-box">
            <?php if(count($class_list)): ?>
            <?php foreach($class_list as $v): ?>
                <a class="page-staff-nav-li drop-down-option" data-f_id="<?php echo $v['id']; ?>" href="/foot_nav/staff/<?php echo $v['id']; ?>.html">
                    <?php echo $v['name']; ?>
                </a>
            <?php endforeach; ?>
            <?php endif; ?>
            </div>
        </div>

        <input class="page-staff-search" type="text" placeholder="请输入员工昵称" name="staff_name" />
        <input class="page-staff-submit" type="submit">
    </form>

    <div class="page-staff-content">
    <?php if(count($staff_info_list)): ?>
    <?php foreach($staff_info_list as $v): ?>
        <div class="box">
            <img
                    data-url="<?php echo $v['pic_path']; ?>"
                    src="/assets/home_new/images/common_yggs_zwt.jpg"
                    class="box-photo not" alt="">
            <p class="box-name"><?php echo $v['name']; ?></p>
            <p class="box-state"><?php if($v['status']): ?><?php echo  $status_arr[$v['status']]; ?><?php else: ?><?php echo  $v['datetime'].$status_arr[$v['status']]; ?><?php endif; ?></p>
        </div>
    <?php endforeach; ?>
    <?php endif; ?>
    </div>
</div>

<!--底部-->
<?php include "footer_view.php"; ?>
<!--底部-->

</body>
<!--common-->
<script src="/assets/home_new/public/common.js"></script>
<!--common-->


<script src="/assets/home_new/js/dropDown.js"></script>
<script>
    $(function(){
      /*下拉框*/
      $('.page-staff-head').DropDown({
        select:function(p,value,html){
          return false;
          // console.log(p)//option-点击的标签
          // console.log(value)//option上data-value的内容
          // console.log(html)//option-内部文本内容
        }
      });

      function lazyLoad(){
        $('img.box-photo.not').each(function(index,photo){
            var top = photo.getBoundingClientRect().top;
            if(top<=window.innerHeight){
              console.log(photo)
              var $photo = $(photo);
              var url = $photo.data('url');
              $photo.attr('src',url);
              $photo.removeClass('not');
            }
        })
      }
      lazyLoad();
      $(window).on('scroll',debounce(lazyLoad,100))
    })
</script>
</html>
