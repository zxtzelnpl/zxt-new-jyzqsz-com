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
    <link rel="stylesheet" href="/assets/home_new/css/education.css">
</head>
<body>
<!--头部-->
<?php include "header_view.php"; ?>
<!--头部-->


<div class="page-education">
    <div class="page-education-nav standard_nav">
    <?php foreach($teach_list as $v): ?>
        <a href="/teach/index/<?php echo $v['id']; ?>.html" class="li" data-id="<?php echo $v['id']; ?>"><?php echo $v['name']; ?></a>
    <?php endforeach; ?>
    </div>
    <div class="page-education-content">
        <div class="page-education-content-head standard_summary_title">
            适当性
        </div>
        <div class="page-education-content-body">
        <?php foreach($teach_news_list as $v): ?>
            <div class="page-education-content-a">
                <a class="title" href="/teach/teach_detail/<?php echo $v['id']; ?>.html" target="_blank"><?php echo $v['title']; ?></a>
                <div class="date"><?php echo substr($v['datetime'],0,16); ?></div>
            </div>
        <?php endforeach; ?>  
        </div>
        <div class="pagination">
            <div id="pagination" class="pagination-inner"></div>
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
<script type="text/javascript">
    $(function(){
        var page = <?php echo $page; ?>;
        var pages = <?php echo $pages; ?>;
        var id = <?php echo $id; ?>;
        $("#pagination").pagination({
            currentPage: page,
            totalPage: pages,
            callback: function(current) {
                window.location.href="/teach/index/"+id+"/"+current+".html";
            }
        });
        
        $(".standard_nav>a").each(function(){
            if($(this).data("id") == id){
                $('.standard_nav>a').removeClass('active');
                $(this).addClass('active');
            }
        });
        var content = $(".standard_nav .active").html();
        $(".standard_summary_title").html(content);
        
    })
</script>
</html>

