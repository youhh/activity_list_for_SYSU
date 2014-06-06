<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>登录 中大课室活动表</title>
<link rel="stylesheet" type="text/css" href="/www/app/css/login.css" >
</head>

<body>
<div id="warpper">
<div id="LoginWarp">
    <div class="loginform opacity radius Shadow">
       <h1><span class="log-in">登录</span>中大课室活动表</span></h1>
		<span class="signup"><p>还没有帐号？<a href="/www/app/index.php/User/signup.html" >立即注册</a></p></span>
        <FORM method="post" action="__URL__/UserLogin">    
			<p class="input"><input class="txt user" type="text" name="Uname" placeholder="用户名"></p>  
            <p class="input"><input class="txt password" type="password" name="Upwd" placeholder="密码" ></p>        
            <p class="clearfix  submit"> <INPUT type="submit" value="登陆" class="log-twitter"></p>  
		</FORM>
    </div>
</div>
<div class="demopowerby">Copyright © 2014 All Rights Reserved</div>
</div>
</body>
</html>