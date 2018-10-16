
<div class="header">
    <!--头部最高行-->
    <div class="header-top">
        <div class="header-top-wrap">
            <div class="header-phone">
                <p class="header-phone-box">客服中心电话：0755-82782361</p>
                <p class="header-phone-box">
                    <span class="header-phone-span">服务监督电话：0755-82560701</span>
                    <span class="header-phone-span-middle-line"></span>
                    <span class="header-phone-span"> 周一至五 09:00-17:30</span>
                </p>
            </div>
            <div class="header-statement" data-action="show-statement">
                <img class="header-statement-img" src="/assets/home_new/images/icon_home_sm_b.png" alt="公司声明">
                <span class="header-statement-span">公司声明</span>
            </div>
        </div>
    </div>

    <!--头部LOGO行-->
    <div class="header-bottom">
        <a class="header-logo" href="/"><img src="/assets/home_new/images/logo.png" alt="民众投顾" class="header-logo-img"></a>
        <div class="header-consultation">
            <a class="header-consultation-online" href="tencent://message/?uin=2850873565&Site=test315.nesky.cn&Menu=yes">
                <img class="header-consultation-online-img" src="/assets/home_new/images/icon_home_kf_w.png" alt="">
                <span class="header-consultation-online-span">服务咨询</span>
            </a>
            <div class="header-consultation-phone">
                <p class="header-consultation-phone-p">服务热线</p>
                <p class="header-consultation-phone-p">0755-82782361</p>
            </div>
        </div>
    </div>



    <!--头部导航-->
    <div class="header-nav">
        <ul class="header-nav-ul mynav">
        <?php foreach($category_list as $k => $val): ?>
            <?php if($val['pid'] == 0): ?>
            <li class="header-nav-li">
            <?php if($k == 0): ?>
                <a class="menu-link" href="<?php echo $val['url']; ?>"><?php echo $val['name']; ?></a>
            <?php else: ?>
                <a class="menu-link" href="<?php echo $val['url']; ?>.html"><?php echo $val['name']; ?></a>
            <?php endif; ?>
            </li>
            <?php endif; ?>
        <?php endforeach; ?>
        </ul>
    </div>
</div>

<!--声明文件-->
 <div class="statement">
    <div class="statement-box">
        <img class="statement-close" src="/assets/home_new/images/icon_sm_off.png" alt="" data-action="hide-statement"/>
        <div class="statement-summary">
            <div class="statement-summary-title">
                <p>民众证券投资咨询有限公司声明</p>
                <p class="double-line"></p>
            </div>
            <div class="statement-summary-content">
                <p>近期，我公司发现某些不法个人冒充公司营销人员向投资者收取高额的费用，甚至以保证投资收益回报等方式吸引投资者从事证券投资或其他金融相关业务，以骗取服务费或投资理财款，严重侵害了投资者及我公司的合法利益，对我公司声誉造成恶劣影响。</p>
                <h4>对此公司郑重声明：</h4>
                <p>1、我公司从事的业务范围仅限于证券投资咨询服务，未开展期货、外汇、原油、贵金属等投资业务。如投资者收到假借我公司名义推广上述业务的电话、微信等，请投资者保持警惕、谨防上当受骗。</p>
                <p>2、我公司对外统一使用公司财户收取服务费用，且严禁营销人员以私人账户收款，如有疑问可拨打总部电话0755-82560701、0755-82782361进行核实。</p>
                <p>3、郑重警告正在冒用我公司名义进行销售及其他活动的任何个人或组织，立即停止此类非法行为。对于损害我公司合法权益的行为，我公司保留追究诉诸法律的权利。</p>
                <p>4、任何冒用我公司名义引起的一切行为后果与我公司无关，敬请区分。</p>
                <p>请各位投资者提高警惕，谨防上当受骗，切实维护好自身权益。</p>
                <p>特此声明！</p>
                <p class="text-right">
                    民众证券投资咨询有限公司
                </p>
                <p class="text-right">
                    2018-04-16
                </p>
            </div>
        </div>
        <img src="/assets/home_new/images/common_sm_pic.png" class="statement-foot" />
    </div>
</div>

<!--侧边导航-->
<?php if($first_title_num != 5): ?>
<div class="sider-toolbar">
    <a class="sider-toolbar-box sider-toolbar-box-customer" href="tencent://message/?uin=2850873565&Site=test315.nesky.cn&Menu=yes"></a>
    <div class="sider-toolbar-box sider-toolbar-box-statement" data-action="show-statement">
    </div>
    <div class="sider-toolbar-box sider-toolbar-box-scroll" data-action="scroll-to-top">
    </div>
</div>
<?php endif; ?>

<script>
jQuery(function(){
var first_title_num = "<?php echo $first_title_num;?>";
//alert(first_title_num);
jQuery(".mynav>li:eq("+first_title_num+")").addClass("active").siblings().removeClass("active");
});
 </script>
