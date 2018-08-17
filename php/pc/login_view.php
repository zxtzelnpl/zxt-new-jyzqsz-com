<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    	<meta name="apple-mobile-web-app-capable" content="yes" />
    	<meta name="format-detection" content="telephone=no,email=no,address=no" />
    	<meta name='apple-touch-fullscreen' content='yes'>
    	<meta name="apple-mobile-web-app-capable" content="yes" />
    	<meta content="fullscreen=yes,preventMove=no" name="ML-Config">
   		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
   		<link rel="stylesheet" href="/assets/home/css/QGindex.css" />
   		<script type="text/javascript" src="/assets/home/js/jquery.js"></script>
   		<script type="text/javascript" src="/assets/home/js/textauto.js"></script>
		<title>学股教育-登录注册</title>
		<style type="text/css">
			.bc_40{background: #f39801;}/*黄色*/
			.bc_41{background: #d0131a;}/*红色*/
			.bc_42{background: #171c60;}/*蓝色*/
			.bc_43{background: #5d66b1;}/*浅蓝*/
			.bc_44{background: #44993b;}/*绿色*/
			.c_41{color: #d0131a;}/*红色*/
			.c_42{color: #171c60;}/*蓝色*/
			.c_44{color: #44993b;}/*绿色*/
			.c_45{color: #f8831c;}/*淡黄*/
			.bubble{position: relative;}
			.bubble:before{
				content: "";
				display: block;
				position: absolute;
				width: .6rem;
				height: .6rem;
				border-radius: 5rem;
				background: #D0131A;
				left: -.3rem;
				margin-top: .4rem;
			}
			.shawdow_box{
				-webkit-box-shadow:5px 3px 7px  0px #747577;  
			  -moz-box-shadow:5px 3px 7px  0px #747577; 
			  -ms-box-shadow:5px 3px 7px  0px #747577; 
			  box-shadow:5px 3px 7px  0px #747577; 
			}
			.shawdow_box1{
				-webkit-box-shadow:4px 2px 3px  0px #747577;  
			  -moz-box-shadow:4px 2px 3px  0px #747577; 
			  -ms-box-shadow:4px 2px 3px  0px #747577;
			  box-shadow:4px 2px 3px  0px #747577; 
			}
			.table_b{
				border: 1px solid #929091;
				border-bottom: 0;
			}
			.table_b td:first-child{
				border-left: 0;
				border-bottom: 1px solid #929091;
			}
			.table_b td{
				border-left: 1px solid #929091;
				border-bottom: 1px solid #929091;
			}
		</style>
	</head>
	<body class="bc_12">
		<div class="pr">
			<img src="/assets/home/img1/1.jpg" class="pf bottom_0 top_0 left_0 right_0 wp hp" alt="" />
			<div class="pf bottom_0 top_0 left_0 right_0 wp hp oa">
				<!-- <div class="bc_41 tac" style="padding: .2rem 0 .1rem 0;">
					<img src="/assets/home/img1/2.png" class="" style="width: 2.3rem;" alt="" />
				</div> -->
				<div class="tac" style="padding: 2rem 0 1.5rem 0;margin-top:20%; ">
					<img src="/assets/home/img1/3.png" style="width: 5.5rem;" alt="" />
				</div>
				<div class="" style="">
					<input type="text" placeholder="请输入账号" class="db w70p bc_11 shawdow_box1 fs22 ma0 tnt1" style="border: 0;border-radius: .5rem;padding: .7rem 0;" id="account"/>
				</div>
				<div class="" style="margin-top: 1.4rem;">
					<input type="password" placeholder="请输入密码" class="db w70p bc_11 shawdow_box1 fs22 ma0 tnt1" style="border: 0;border-radius: .5rem;padding: .7rem 0;" id="password"/>
				</div>
				<div class="tac" style="margin-top: .5rem;" onclick="location.href='http://www.zgjy518.com/outerapi2/forget_password?agent_id=<?php echo $this->session->agent_id;?>'">
					<span class="fwb fs22">忘记密码？</span>
				</div>
				<div class="bc_42 c_11 tac w50p ma0 shawdow_box1 fwb fs22" style="padding: .8rem 0;border-radius: .5rem;margin-top: 1rem;" id="login_btn">登录</div>
				<div class="bc_41 c_11 tac w50p shawdow_box1 fwb fs22" style="padding: .8rem 0;border-radius: .5rem;margin:1rem auto 3rem;"  onclick="location.href='http://www.zgjy518.com/outerapi2/show_zgjy_register?agent_id=<?php echo $this->session->agent_id;?>'">注册</div>
				<!-- <div class="pf bottom_0 left_0 right_0 wp bc_42" style="padding: 1rem 0;"></div> -->
			</div>
		</div>
	</body>
	<script>
		$("#login_btn").bind("click",function(){
			var account = $("#account").val();
			var password = $("#password").val();
			if(!account){
				alert("用户名不得为空");
				return;
			}
			if(!password){
				alert("密码不得为空");
				return;
			}
			$.post("/login/check_login",{account:account,password:password},function(res){
				res = JSON.parse(res);
				if(res['status']){
					location.href="<?php echo $this->session->from_url;?>";
				}else{
					alert(res['msg']);
				}
			})
		});

	</script>
</html>
