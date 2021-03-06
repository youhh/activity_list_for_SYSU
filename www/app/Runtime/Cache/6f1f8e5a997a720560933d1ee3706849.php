<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>个人课表</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/www/app/static/css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="/www/app/static/css/flexslider.css" type="text/css" rel="stylesheet" media="screen">
<link href="/www/app/static/css/tipsy.css" type="text/css" rel="stylesheet" media="screen">
<link href="/www/app/static/css/prettyPhoto.css" type="text/css" rel="stylesheet" media="screen">
<link href="/www/app/static/css/jcarousel.css" type="text/css" rel="stylesheet" media="screen" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Arvo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>  
<script type="text/javascript" src="/www/app/static/js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="/www/app/static/js/jquery.flexslider-min.js"></script><!--featured slider-->
<script type="text/javascript" src="/www/app/static/js/jquery.tipsy.js"></script><!--tooltip-->
<script type="text/javascript" src="/www/app/static/js/css3-mediaqueries.js"></script><!--mediaqueries-->
<script type="text/javascript" src="/www/app/static/js/jquery.visualNav.min.js"></script><!--navigation-->
<script type="text/javascript" src="/www/app/static/js/jquery.isotope.min.js"></script><!--filterable work-->
<script type="text/javascript" src="/www/app/static/js/jquery.prettyPhoto.js"></script><!--pretty photo-->
<script type="text/javascript" src="/www/app/static/js/jquery.jcarousel.min.js"> </script><!--latest work-->

<script type="text/javascript">
	function mycarousel_initCallback(carousel)
{
    // Disable autoscrolling if the user clicks the prev or next button.
    carousel.buttonNext.bind('click', function() {
        carousel.startAuto(0);
    });

    carousel.buttonPrev.bind('click', function() {
        carousel.startAuto(0);
    });

    // Pause autoscrolling if the user moves with the cursor over the clip.
    carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
};
jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
        auto: 2,
        wrap: 'last',
        initCallback: mycarousel_initCallback
    });
});
</script>

<!--BEGIN:Accordion	-->
<script type="text/javascript" src="/www/app/static/js/jquery-ui-1.8.17.custom.min.js"></script><!--accordion-->
<script type="text/javascript">
	$(function() {
		$( "#accordion" ).accordion({
		header: "h4",
		autoHeight: false, 
		});
	});
</script>

<!--BEGIN:mosaic-->
<link rel="stylesheet" href="/www/app/static/css/mosaic.css" type="text/css" media="screen" />
<script type="text/javascript" src="/www/app/static/js/mosaic.1.0.1.js"></script>
<script type="text/javascript">  
			jQuery(function($){
				$('.views').mosaic({
					opacity		:	0.8			//Opacity for overlay (0-1)
				});	    
		    });
</script>

<!--gallery-->
<link rel="stylesheet" type="text/css" href="/www/app/static/css/elastislide.css" media="screen" />
<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
		</script>

<!--tab-->    
<script src="/www/app/static/js/organictabs.jquery.js"></script>
<script>
        $(function() {
            
            $("#tab").organicTabs({
                "speed": 200
            });
    
        });
</script>

<!--elastic slider-->
<script type="text/javascript" src="/www/app/static/js/jquery.eislideshow.js"></script>
        <script type="text/javascript" src="/www/app/static/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#ei-slider').eislideshow({
					animation			: 'center',
					autoplay			: true,
					slideshow_interval	: 3000,
					titlesFactor		: 0
                });
            });
        </script>

<!--GOOGLE MAP PLUGIN-->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
			function initialize() {
				var latlng = new google.maps.LatLng(8.48333, 124.65000);
				var settings = {
					zoom: 15,
					center: latlng,
					mapTypeControl: true,
					mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
					navigationControl: true,
					navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
					mapTypeId: google.maps.MapTypeId.ROADMAP};
				var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
				
				var infowindow = new google.maps.InfoWindow({
					content: contentString
				});
				
				var companyImage = new google.maps.MarkerImage('images/logo.png',
					new google.maps.Size(100,50),
					new google.maps.Point(0,0),
					new google.maps.Point(50,50)
				);

				var companyShadow = new google.maps.MarkerImage('images/logo_shadow.html',
					new google.maps.Size(130,50),
					new google.maps.Point(0,0),
					new google.maps.Point(65, 50));

				var companyPos = new google.maps.LatLng(8.48333, 124.65000);

				var companyMarker = new google.maps.Marker({
					position: companyPos,
					map: map,
					icon: companyImage,
					shadow: companyShadow,
					title:"Høgenhaug",
					zIndex: 3});
				
				var trainImage = new google.maps.MarkerImage('images/train.html',
					new google.maps.Size(50,50),
					new google.maps.Point(0,0),
					new google.maps.Point(50,50)
				);

				var trainShadow = new google.maps.MarkerImage('images/train_shadow.html',
					new google.maps.Size(70,50),
					new google.maps.Point(0,0),
					new google.maps.Point(60, 50)
				);

				var trainPos = new google.maps.LatLng(57.0429, 9.9173);

				var trainMarker = new google.maps.Marker({
					position: trainPos,
					map: map,
					icon: trainImage,
					shadow: trainShadow,
					title:"Train Station",
					zIndex: 2
				});

				var parkingImage = new google.maps.MarkerImage('images/parking.html',
					new google.maps.Size(50,50),
					new google.maps.Point(0,0),
					new google.maps.Point(50,50)
				);

				var parkingShadow = new google.maps.MarkerImage('images/parking_shadow.html',
					new google.maps.Size(70,50),
					new google.maps.Point(0,0),
					new google.maps.Point(60, 50)
				);

				var parkingPos = new google.maps.LatLng(57.0437, 9.9147);

				var parkingMarker = new google.maps.Marker({
					position: parkingPos,
					map: map,
					icon: parkingImage,
					shadow: parkingShadow,
					title:"Parking Lot",
					zIndex: 1
				});
				
				google.maps.event.addListener(companyMarker, 'click', function() {
					infowindow.open(map,companyMarker);
				});
			}
		</script>


<!--[if lt IE 9]>
<script src="/www/app/static/js/html5.js" type="text/javascript"></script>
<![endif]-->
<script type="text/javascript" src="/www/app/static/js/custom.js"></script>
</head>

<body onLoad="initialize()">
<div id="page">
  <div id="page_container">
    
	<aside id="header">
      <h1 id="logo"><a class="menu" href="#home"> </a></h1>
	  
      <nav id="main-nav">
        <ul>
          <li><a class="menu" href="#home">个人主页</a></li>
          <li><a class="menu" href="#works">课程表</a></li>
          <li><a class="menu" href="#contact">联系我们</a></li>
        </ul>
      </nav>
	  
      <div class="widget">
        <ul class="social">
          <li class="facebook"><a href="#" class="tip" title="微博"><img src="/www/app/static/images/ico_weibo.png" alt="微博"></a></li>
          <li class="skype"><a href="#" class="tip" title="人人"><img src="/www/app/static/images/ico_renren.png" alt="人人"></a></li>
		  <li class="facebook"><a href="#" class="tip" title="Facebook"><img src="/www/app/static/images/ico_facebook.png" alt="Facebook"></a></li>
          <li class="skype"><a href="#" class="tip" title="Skype"><img src="/www/app/static/images/ico_skype.png" alt="Skype"></a></li>
          <li class="twitter"><a href="#" class="tip" title="Twitter"><img src="/www/app/static/images/ico_twitter.png" alt="Twitter"></a></li>
         </ul>
      </div>
	  
      <div id="copy-right">
        <p>&copy; Copyright &copy; 2014.系统分析设计小组 <br/> All rights reserved.<a target="_blank" href="sserpys@gmail.com"></a></p>
      </div>
    </aside>
	
    <section id="main">
      <div id="home" class="content">
      	<h2 class="intro">Hello!  XXX </h2>
        <div class="flexslider clearfix">
		 <p>最近消息:</p>
		 
		 <ul class="slides">
			<li><a href="http://ss.sysu.edu.cn/InformationSystem/Article.aspx?id=7440"> 
				<img src="/www/app/static/images/featured/slide_1.jpg" alt="Image"/> 
				<p>微软亚洲研究院资深研究员学术讲座信息</p> </a>
			</li>
			
			<li><a href="http://v.163.com/special/opencourse/machinelearning.html"> <img src="/www/app/static/images/featured/slide_2.jpg" alt="Image"/> 
				<p>2014年硕士研究生招生录取通知书邮寄地址校对系统开放通知 </p></a>
			</li>
            <li><a href="http://cg.cs.tsinghua.edu.cn/course/resource.htm"> <img src="/www/app/static/images/featured/slide_3.jpg" alt="Image"/> 
				<p>计算机图形学</p></a>
			</li>
          </ul>
        </div>
		
        <hr class="divider">
        <div class="column">
          <div class="one-half"> <span class="dropcap">1</span>
            <p><span class="title"><h3><strong>今日课程</strong></h3></span></p>
            <p>
				<table border="1">
					<tr>
						<th>课程</th>
						<th>地点</th>
						<th>上课时间</th>
					</tr>
					
					<tr>
						<td>软件测试</td>
						<td>公教楼A301</td>
						<td>9:45 - 11:25</td>
					</tr>
					
					<tr>
						<td>计算机图形学</td>
						<td>公教楼A401</td>
						<td>15:20 - 17:55</td>
					</tr>
					
				</table>
			</p>
			
          </div>
          <div class="one-half last"> <span class="dropcap">2</span>
            <p><span class="title"><h3><strong>课程提醒</strong></h3></span></p>
			<ui>
				<li> 计算机图形学需要课堂测试 </li>
				<li> 软件测试需要做课堂展示 </li>
			</ui>
			</div>
        </div>	
		
        <div class="list_work">
          <ul id="mycarousel" class="jcarousel-skin-tango">
            <li class="mosaic-block circle"><a href="#" class="mosaic-overlay"></a><img src="/www/app/static/images/work/work_1.jpg" alt="" /></li>
            <li class="mosaic-block circle"><a href="#" class="mosaic-overlay"></a><img src="/www/app/static/images/work/work_2.jpg" alt="" /></li>
            <li class="mosaic-block circle"><a href="#" class="mosaic-overlay"></a><img src="/www/app/static/images/work/work_3.jpg" alt="" /></li>
            <li class="mosaic-block circle"><a href="#" class="mosaic-overlay"></a><img src="/www/app/static/images/work/work_1.jpg" alt="" /></li>
            <li class="mosaic-block circle"><a href="#" class="mosaic-overlay"></a><img src="/www/app/static/images/work/work_2.jpg" alt="" /></li>
           
          </ul>
          <span><a href="#works">查看所有课程分类</a></span>
          <!--end:jcarousel--> 
        </div>
      </div>
      <!-- END: .content -->
      <div id="works" class="content">
        <div class="page_title">
          <h2><span>课程表</span></h2>
        </div>
        <section id="options" class="clearfix">
		
          <ul id="filters" class="option-set clearfix" data-option-key="filter">
            <li><a href="#filter" data-option-value="*">所有课程</a></li>
            <li>/<a href="#filter" data-option-value=".illustration">专业必修课</a></li>
            <li>/<a href="#filter" data-option-value=".print">专业选修课</a></li>
            <li>/<a href="#filter" data-option-value=".motion">公共必修课</a></li>
            <li>/<a href="#filter" data-option-value=".website">公共选修课</a></li>
          </ul>
		  
        </section>
        <div id="works-container">
          <div class="element motion mosaic-block views" data-category="motion"> <a href="images/preview/work_1_l.jpg" rel="prettyPhoto[gallery1]" title="Image Title Here" class="mosaic-overlay"></a><img src="/www/app/static/images/work/work_1.jpg" alt="Image" /></div>
                    <div class="element illustration mosaic-block views" data-category="illustration"> <a href="images/preview/work_2_l.jpg" rel="prettyPhoto[gallery1]" title="Image Title Here" class="mosaic-overlay"></a><img src="/www/app/static/images/work/work_2.jpg" alt="Image" /> </div>
                    <div class="element motion mosaic-block views" data-category="print"> <a href="images/preview/work_3_l.jpg" rel="prettyPhoto[gallery1]" title="Image Title Here" class="mosaic-overlay"></a><img src="/www/app/static/images/work/work_3.jpg" alt="Image" /> </div>
                    <div class="element website mosaic-block views" data-category="website"> <a href="images/preview/work_4_l.jpg" rel="prettyPhoto[gallery1]" title="Image Title Here" class="mosaic-overlay"></a><img src="/www/app/static/images/work/work_4.jpg" alt="Image" /> </div>
                    <div class="element print mosaic-block views" data-category="print"> <a href="images/preview/work_5_l.jpg" rel="prettyPhoto[gallery1]" title="Image Title Here" class="mosaic-overlay"></a><img src="/www/app/static/images/work/work_5.jpg" alt="Image" /> </div>
                    <div class="element illustration mosaic-block views" data-category="illustration"> <a href="http://vimeo.com/1084537&amp;width=700" rel="prettyPhoto[gallery1" title="Vimeo Video" class="mosaic-overlay"></a><img src="/www/app/static/images/work/work_6.jpg" alt="Vimeo Video" /> </div>
                    <div class="element illustration mosaic-block views" data-category="illustration"> <a href="images/preview/work_7_l.jpg" rel="prettyPhoto[gallery1]" title="Image Title Here" class="mosaic-overlay"></a><img src="/www/app/static/images/work/work_7.jpg" alt="Image" /> </div>
                    <div class="element motion mosaic-block views" data-category="motion"> <a href="images/preview/work_8_l.jpg" rel="prettyPhoto[gallery1]" title="Image Title Here" class="mosaic-overlay"></a><img src="/www/app/static/images/work/work_8.jpg" alt="Image" /> </div>
                    <div class="element motion mosaic-block views" data-category="motion"> <a href="images/preview/work_9_l.jpg" rel="prettyPhoto[gallery1]" title="Image Title Here" class="mosaic-overlay"></a><img src="/www/app/static/images/work/work_9.jpg" alt="Image" /> </div>
                    <div class="element print mosaic-block views" data-category="print"> <a href="images/preview/work_10_l.jpg" rel="prettyPhoto[gallery1]" title="Image Title Here" class="mosaic-overlay"></a><img src="/www/app/static/images/work/work_10.jpg" alt="Image" /> </div>
                    <div class="element illustration mosaic-block views" data-category="illustration"> <a href="images/preview/work_11_l.jpg" rel="prettyPhoto[gallery1]" title="Image Title Here" class="mosaic-overlay"></a><img src="/www/app/static/images/work/work_11.jpg" alt="Image" /> </div>
                    <div class="element illustration mosaic-block views" data-category="illustration"> <a href="images/preview/work_12_l.jpg" rel="prettyPhoto[gallery1]" title="Image Title Here" class="mosaic-overlay"></a><img src="/www/app/static/images/work/work_12.jpg" alt="Image" /> </div>
                    <div class="element motion mosaic-block views" data-category="motion"> <a href="images/preview/work_13_l.jpg" rel="prettyPhoto[gallery1]" title="Image Title Here" class="mosaic-overlay"></a><img src="/www/app/static/images/work/work_13.jpg" alt="Image" /> </div>
                    <div class="element website mosaic-block views" data-category="website"> <a href="images/preview/work_14_l.jpg" rel="prettyPhoto[gallery1]" title="Image Title Here" class="mosaic-overlay"></a><img src="/www/app/static/images/work/work_14.jpg" alt="Image" /> </div>
                    <div class="element print mosaic-block views" data-category="print"> <a href="images/preview/work_15_l.jpg" rel="prettyPhoto[gallery1]" title="Image Title Here" class="mosaic-overlay"></a><img src="/www/app/static/images/work/work_15.jpg" alt="Image" /> </div>
        </div>
        <div class="pagination">
            <ul>
                <li><a href="#" class="current">1</a></li>
                <li><a href="#">2</a></li>
            </ul>
            <span>Page 1 of 2</span>
        </div>
      </div>
      
 
      <div id="contact" class="content last-content">
        <img src="/www/app/static/images/contact-us.jpg" alt="" />
        <div class="page_title">
          <h2><span>联系我们</span></h2>
        </div>
        <h3>请用下面的方式联系我们.</h3>
        <div class="contactinfo">
		  </br>
          <p>
			方法1：广东省广州市中山大学慎思园 </br> 
			方法2：电话: 012345678910		    </br>
			方法3：电子邮件: <a href="mailto:sserpys@gmail">sserpys@gmail</a>
		   </p>
		   
        </div>
        <div id="map_canvas"></div>
        	<form action="javascript:alert('success!');" id="ajax-contact-form" class="contactForm">
          <div id="note"></div>
          <p>
            <input type="text" name="name" value="您的姓名" onblur="if (this.value == ''){this.value = 'Your Name'; }" onfocus="if (this.value == 'Your Name') {this.value = '';}" >
            &nbsp;
            <input type="text" name="email" value="您的电子邮件" onblur="if (this.value == ''){this.value = 'Your Email'; }" onfocus="if (this.value == 'Your Email') {this.value = '';}">
            &nbsp;
            <input type="text" name="website" value="您的主页" onblur="if (this.value == ''){this.value = 'Your Website'; }" onfocus="if (this.value == 'Your Website') {this.value = '';}">
          </p>
          <p>
            <textarea name="message" rows="10" cols="20" onblur="if (this.value == ''){this.value = 'Your Message'; }" onfocus="if (this.value == 'Your Message') {this.value = '';}">您的消息内容</textarea>
          </p>
          <p>
            <input type="submit" name="submit" class="submit" value="留言">
          </p>
        </form>   	
      </div>
      <!-- END: .content -->
      <div class="copyright"><p>&copy; Copyright &copy; 2014.系统分析设计小组 All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p></div>
    </section>
  </div>
</div>
<!--gallery responsive-->
<script type="text/javascript" src="/www/app/static/js/jquery.tmpl.min.js"></script> 
<script type="text/javascript" src="/www/app/static/js/jquery.easing.1.3.js"></script> 
<script type="text/javascript" src="/www/app/static/js/jquery.elastislide.js"></script> 
<script type="text/javascript" src="/www/app/static/js/gallery.js"></script>

<script type="text/javascript">

$(document).ready(function(){
$("#ajax-contact-form").submit(function(){

var str = $(this).serialize();

   $.ajax({
   type: "POST",
   url: "contact.php",
   data: str,
   success: function(msg){
    
$("#note").ajaxComplete(function(event, request, settings){

if(msg == 'OK') // Message Sent? Show the 'Thank You' message and hide the form
{
result = '<div class="notification_ok">Your message has been sent. Thank you!</div>';
$("#fields").hide();
}
else
{
result = '<ul class="error">'+msg+'</ul>';
}

$(this).html(result);

});

}

 });

return false;

});

});
</script> 

<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>