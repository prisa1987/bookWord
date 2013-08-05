<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="file:///Macintosh HD/Applications/XAMPP/xamppfiles/htdocs/CI_intro/css/stylesheet.css" rel="stylesheet" type="text/css">
<!-- 
To learn more about the conditional comments around the html tags at the top of the file:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
* insert the link to your js here
* remove the link below to the html5shiv
* add the "no-js" class to the html tags at the top
* you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

    <title>สำนักพิมพ์ คำต่อคำ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <!-- Bootstrap -->
    

    <link media="screen" href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">
    <link media="screen" href="<?php echo base_url();?>css/bootstrap-responsive.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>css/stylesheet.css">
   
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/register.css" />
    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>css/homecss.css">
    
    <script src="<?php echo base_url();?>js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>js/bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>js/midway.min.js" type="text/javascript"></script>

    <script>
    !function ($) {
      $(function(){
        // carousel demo
        $('#myCarousel').carousel('cycle')
      })
    }(window.jQuery)
  </script>
<script src="respond.min.js"></script>
</head>
<body>


<div class="gridContainer clearfix">
  <div id="LayoutDiv1">Use Insert Panel for additional Fluid Grid Layout Div tags. Note: All Layout Div tags must be inserted directly inside the "gridContainer" div tag. Nested Layout Div tags are not currently supported. </div>
  
  <div id="header">
  		  <img id="logo" src="<?php echo base_url();?>img/lo3.png" class="img-rounded">

    <div class="navbar navbar-inverse">
      <div class="navbar-inner">
      <!--   <a class="brand" href="#"></a> -->
        <ul class="nav">
          <!-- <li class="active"><a href="#">Home</a></li> -->
          <li><a class="left" href="#">แรกพบ</a></li>
          <li><a class="left" href="#">ชวนอ่าน</a></li>
          <li><a class="left"href="#" style="margin-right: 160px;">แจ้งข่าว</a></li>
        
        
           

       
          <!-- <li><a href="#">พบปะพูดคุย</a></li> -->
          <li><a class="right" href="#">ติดต่อเรา</a></li>
          <li><a class="right"href="#">เข้าสู่ระบบ</a></li>
          <li><a class="right" href="#"> <i class="icon-shopping-cart icon-white"></i> ตะกร้า</a></li>
        </ul>
      </div>
    </div>
  
  </div>
  
  
  <div id="content">This is the content for Layout Div Tag "content"</div>
  <div id="aside">This is the content for Layout Div Tag "aside"</div>
  <div id="footer">This is the content for Layout Div Tag "footer"</div> 
</div>
</body>
</html>
