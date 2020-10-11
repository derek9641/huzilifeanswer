<!DOCTYPE html>
<html>
	<head>
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="print" onload="this.media='all'">
	    <script scr='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
	    <style>
	    .btn {
	      background-color: white;
	      border: none;
	      color: black;
	      padding: 12px 30px;
	      cursor: pointer;
	      font-size: 20px;
	    }
	    @font-face {
	      font-family: LiSu;
	      src: url(lisu.ttf),
	           url(lisu.eot),
	           url(lisu.woff);
	      font-display:swap;
	    }
	    </style>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-174921125-2"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-174921125-2');
		</script>

		<script type="text/ecmascript">
		    /*改变原始宽度（0）*/
		    function openNav() {
		        document.getElementById("mySidenav").style.width = "100%";
		    }
		    /*恢复原始宽度0*/
		    function closeNav() {
		        document.getElementById("mySidenav").style.width = "0";
		    }
		</script>
		<script type="text/javascript">
			lazyload();
			function random_com () {
				var imgnumber = Math.floor(Math.random()*17646)+1; 
				if (window.location.href == 'https://seeyouthen.cc/huzi/answer') {
					document.getElementById('images').innerHTML = "<b style='position:absolute;left:50%;bottom:5px;transform: translate(-50%, -50%);color:white'>編號：#"+imgnumber+"</b><img onerror='random_com()' class='comment' style='position:absolute;left:50%;bottom:60px;transform: translate(-50%, -50%);' src='images/" + imgnumber + ".jpg'>";
				}
				else {
					document.getElementById('images').innerHTML = "<b style='position:absolute;left:50%;bottom:5px;transform: translate(-50%, -50%);color:white;'>編號：#"+imgnumber+"</b><img onerror='random_com()' class='comment' style='position:absolute;left:50%;bottom:60px;transform: translate(-50%, -50%);' src='https://seeyouthen.cc/huzi/images/" + imgnumber + ".jpg'>";
				}
				document.getElementById('button_name').innerHTML = "繼續發問";
			}
		</script>
		<title>線上人生解答系統(復刻)</title>
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link rel="icon" type="image/png" href="favicon.ico">
		<link rel="manifest" href="site.webmanifest">
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
		<style type="text/css">
			@media only screen and (max-width: 500px) {
				.comment {
					width:100%;
				}
			}
			html, body {
			  height:100%;
			}
			.sidenav {
			    height: 100%;
			    width: 0; /*原始宽度为0*/
			    position: fixed;
			    z-index: 1;
			    top: 0;
			    right: 0;
			    background-color: #111;
			    overflow-x: hidden;
			    transition: 0.5s;
			    padding-top: 60px;
			}
			 
			/*侧边栏选项选择器*/
			.sidenav a {
			    padding: 8px 8px 8px 32px;
			    text-decoration: none;
			    font-size: 25px;
			    color: #818181;
			    display: block;
			    transition: 0.3s;
			}
			 
			/*侧栏标签和关闭按钮光标的效果*/
			.sidenav a:hover, .offcanvas a:focus{
			    color: #f1f1f1;
			}
			 
			/*侧栏和关闭按钮的位置选择器*/
			.sidenav .closebtn {
			    position: absolute;
			    top: 0;
			    right: 25px;
			    font-size: 36px;
			    margin-left: 50px;
			}
			/*当文档高度小于450px时，改变侧栏的padding属性和字体大小*/
			@media screen and (max-height: 450px) {
			  .sidenav {padding-top: 15px;}
			  .sidenav a {font-size: 18px;}

			}
		</style>
	</head>
	<body style="background-image: url('https://seeyouthen.cc/huzi/background.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%;margin:0px;">
		<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style='cursor: pointer;'>&times;</a>
		  <div style='text-align: center;'>
			  <h1 style='color:white;'>來源:</h1>
			  <a href='https://www.youtube.com/watch?v=DZ9lsn_7uLE'>https://www.youtube.com/watch?v=DZ9lsn_7uLE</a>
		  	  <h1 style='color:white;'>訂閱胡子Huzi:</h1>
			  <a href='https://www.youtube.com/channel/UC9YOQFPfEUXbulKDtxeqqBA/join'>https://www.youtube.com/channel/UC9YOQFPfEUXbulKDtxeqqBA/join</a>

              <h1 style='color:white;'>app下載連結:</h1>
              <button class="btn" onclick='window.location.href = "https://play.google.com/store/apps/details?id=cc.huzilifeanswer"'><i class="fa fa-android"></i> Download</button>
              <button class="btn" style='padding: 10px 30px;'><i class="fa fa-apple"></i> IOS等等</button>
		  </div>
		</div>
		<div style='text-align: center;'>
			<div style='width:100%;height:60px;background-color:#303030;'><span style="color:white;cursor:pointer;font-size: 30px;float: right;margin:5px;cursor: pointer;border-bottom: 0px solid black;font-size: 18px;float: right;color: #f2f2f2;text-align: center;padding: 14px 16px;text-decoration: none;font-size: 17px;cursor: pointer;" onclick="openNav()">&#9776;</span></div>
				<div style='padding-bottom: 8%;background-color: white;border-radius:10px;padding-top: 5%;padding-left: 5px;padding-right: 5px;margin-right:15px;margin-left:15px;'>
					<h2 style='font-family: LiSu;margin-left:5px;margin-right:5px;'>線上人生解答系統</h2>
					<p style='font-family: LiSu;font-size: 20px;margin-left:10px;margin-right:10px;'>【使用方法】當你感到困惑的時候，打開此網站，誠心誠意的向天地神靈發問之後，按下「請開示」的按鈕，你就會得到你需要的答案。</p>
					<p style="font-family: LiSu;font-size:10px"><br>如果發現不適當的可以把圖片下的編號輸入至google forms:<a href='https://forms.gle/DR4uaiaVFhnV2iQD6' target="_blank">https://forms.gle/DR4uaiaVFhnV2iQD6</a><br>P.S. 因為有一萬七千多則留言，所以請拜託大家幫忙 &gt;_&lt; </p>
				</div>	
			</div>
			<div id='images'>
			</div>
		</div>
		<button style='position:absolute;left:50%;bottom:50px;transform: translate(-50%, -50%);background: transparent;width:60%;padding-top: 5px;padding-bottom: 5px;border: 3px solid black;' onclick='random_com()'><b style='color:white;font-family: LiSu;' id='button_name'>請開示</b></button>
	</body>
</html>
