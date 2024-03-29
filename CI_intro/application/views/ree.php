<!doctype html>

<html class="">
<!--<![endif]-->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>css/stylesheet.css" rel="stylesheet" type="text/css">

<style type="text/css">

@font-face {
    font-family: 'circular';
    src: url('<?php echo base_url();?>fonts/circular-webfont.eot');
    src: url('<?php echo base_url();?>fonts/circular-webfont.eot?#iefix'),
         url('<?php echo base_url();?>fonts/circular-webfont.woff') format('woff'),
         url('<?php echo base_url();?>fonts/circular-webfont.ttf') format('truetype'),
         url('<?php echo base_url();?>fonts/circular-webfont.svg#circularregular') format('svg');
    font-weight: normal;
    font-style: normal;

}
  @font-face {
    font-family: 'thai_sans_lite';
    src: url('<?php echo base_url();?>fonts/thaisan/thaisanslite_r1-webfont.eot');
    src: url('<?php echo base_url();?>fonts/thaisan/thaisanslite_r1-webfont.woff') format('woff'),
         url('<?php echo base_url();?>fonts/thaisan/thaisanslite_r1-webfont.ttf') format('truetype'),
         url('<?php echo base_url();?>fonts/thaisan/thaisanslite_r1-webfont.svg#thai_sans_literegular') format('svg');
    font-weight: normal;
    font-style: normal;

}

@font-face {
    font-family: 'THSarabunNew';
    src: url('<?php echo base_url();?>fonts/thsarabunnew-webfont.eot');
    src: url('<?php echo base_url();?>fonts/thsarabunnew-webfont.eot?#iefix') format('embedded-opentype'),
         url('<?php echo base_url();?>fonts/thsarabunnew-webfont.woff') format('woff'),
         url('<?php echo base_url();?>fonts/thsarabunnew-webfont.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;

}

@font-face {
    font-family: 'THSarabunNewBold';
    src: url('<?php echo base_url();?>fonts/thsarabunnew_bold-webfont.eot');
    src: url('<?php echo base_url();?>fonts/thsarabunnew_bold-webfont.eot?#iefix') format('embedded-opentype'),
         url('<?php echo base_url();?>fonts/thsarabunnew_bold-webfont.woff') format('woff'),
         url('<?php echo base_url();?>fonts/thsarabunnew_bold-webfont.ttf') format('truetype');
    font-weight: bold;
    font-style: normal;

}


@font-face {
    font-family: 'supermarketregular';
    src: url('<?php echo base_url();?>fonts/supermarket-webfont.eot');
    src: url('<?php echo base_url();?>fonts/supermarket-webfont.eot?#iefix') format('embedded-opentype'),
         url('<?php echo base_url();?>fonts/supermarket-webfont.woff') format('woff'),
         url('<?php echo base_url();?>fonts/supermarket-webfont.ttf') format('truetype'),
         url('<?php echo base_url();?>fonts/supermarket-webfont.svg#supermarketregular') format('svg');
    font-weight: normal;
    font-style: normal;

}
</style>

    <title>สำนักพิมพ์ คำต่อคำ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <!-- Bootstrap -->
    

    <link media="screen" href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">
    <link media="screen" href="<?php echo base_url();?>css/stylesheet.css" rel="stylesheet">
    <link media="screen" href="<?php echo base_url();?>css/bootstrap-responsive.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>css/s.css">
   
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

<style type="text/css">


  /*  Layout  */
#page {
  width: 1100px; 
  margin-top: 90px;
   margin-left: auto;
  margin-right: auto;
}
/*#third{
  margin-right: 160px;
}*/


@media (max-width: 767px)  {
  body{
    padding: 0px;
  }
#page {
  width: auto;
  margin : 10px;
  margin-top : 0px;

}
#head{
  width: 800px;
  margin-top: 20px;
}
#content {
  clear: both;
  float: left;
  margin-left: 0;
  width: auto;
  display: block;
}
aside{
  visibility:hidden;
}
form{
 
  padding-right: 10px;

}
.inputt{
     width: auto;
     margin-right: 10px;
  }
  .navbar{
  width: auto;
  margin-bottom: 30px;
}
.navbar .nav {
    display: block;
    height: 50px;
    left: 0;
    margin: 0 -15px 0 0;
    padding-top: 10px;
    text-align: center;
}



#logo{
  margin-top: -10px;
  margin-left: -15px;
  height: 80px;
  width: auto;
  overflow: hidden; 
}
.item img{
  height: auto;

}

#submit{
   margin-left:10px;
}

}
@media (min-width: 768px) and (max-width: 1108px) {
#page {
  width: 800px;
  margin-top: 0px;
}
#head{
  width: 800px;
  margin-top: 20px;
}
#content {
  clear: both;
  float: left;
  margin-left: 0;
  width: auto;
  display: block;
}
.box{
  width: auto;
}
form{
  width: auto;
  padding-right: 10px;

}
.inputt{
    width: 90px;
  }
.navbar .nav {

  float: right;
}

.navbar-inverse .nav > li > a {
    /*color: rgb(153, 153, 153);*/

    color: white;
    font-size: 25px;
    width: auto;
    /*text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.25);*/
}

#first{
    /*color: rgb(153, 153, 153);*/
    margin-left: 200px;
   /* color: white;
    font-size: 25px;
    width: auto;*/
    /*text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.25);*/
}
/*
#third{
    margin-right: 0px;

}
*/


.inputt{
     width: auto;
     margin-right: 10px;
  }

.navbar{
  width: auto;
  margin-bottom: 30px;
}
#logo{
  margin-top: -20px;
  margin-left: -10px;
  height: 100px;
  width: auto;
  overflow: hidden; 
}
.item img{
  height: auto;

}




}

</style>
</head>

<body style="background-image: url('img/wooden Bookshelf background vector 02/bg.jpg')">


  <div id="head">
  	
    <img id="logo" src="<?php echo base_url();?>img/lo3.png" class="img-rounded">
    <div class="navbar navbar-inverse hidden-phone hidden-tablet">
      <div class="navbar-inner">
      <!--   <a class="brand" href="#"></a> -->
          <div class="nav-collapse">


              <ul class="nav">
                <!-- <li class="active"><a href="#">Home</a></li> -->
                <li><a id="first" href="#">แรกพบ</a></li>
                <li><a href="#">ชวนอ่าน</a></li>
                <li><a id="third" href="#" >แจ้งข่าว</a></li>
                <li><a id="forth" href="#">ติดต่อเรา</a></li>
                <li><a href="#">เข้าสู่ระบบ</a></li>
                <li><a href="#"> <i class="icon-shopping-cart icon-white" ></i>  ตะกร้า</a></li>
              </ul>
          </div>
      </div>
    </div>


    <div class="navbar navbar-inverse visible-phone visible-tablet">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar brand" data-toggle="collapse" data-target=".nav-collapse">
        MENU 
        </a>
        <div class="nav-collapse">
          <ul class="nav">
            <li class="dropdown">
         
              
                <li><a  href="#">แรกพบ</a></li>
                <li><a href="#">ชวนอ่าน</a></li>
                <li><a  href="#" >แจ้งข่าว</a></li>
                <li><a href="#">ติดต่อเรา</a></li>
                <li><a href="#">เข้าสู่ระบบ</a></li>
                <li><a href="#"> <i class="icon-shopping-cart icon-white" ></i>  ตะกร้า</a></li>
            
            </li>
          </ul>
        </div>
        </div>
          </div>
        </div>

  </div>

<div  id="page" style="margin-top:0px;">
    <div id="myCarousel" class="carousel slide fluid_container" >
  
      <ol class="carousel-indicators middle">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
      </ol>

      <div class="carousel-inner">

          <div class="item active">
            <img src="<?php echo base_url();?>img/background_blend.png" alt="" style="">
            <div class="container">
              <div class="carousel-caption">
                 <h1>Example headline.</h1>
                 <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ult</p>
              </div>
            </div>
          </div>

          <div class="item">
           <img src="<?php echo base_url();?>img/background_blend.png" alt="" style="">
            <div class="container">
              <div class="carousel-caption">
                <h1>Example headline.</h1>
                <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </div>
            </div>
          </div>

          <div class="item">
           <img src="<?php echo base_url();?>img/background_blend.png" alt="" style="">
            <div class="container">
              <div class="carousel-caption">
                <h1>Example headline.</h1>
                <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </div>
            </div>
          </div>

          <div class="item">
          <img src="<?php echo base_url();?>img/background_blend.png" alt="" style="">
            <div class="container">
              <div class="carousel-caption">
                <h1>Example headline.</h1>
                <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </div>
            </div>
          </div>


        </div>
    </div>
  
 
  
 
    <div id="content" > 

      <p id="regis">สมัครสมาชิก</p>

        <?php echo form_open('form'); ?>
            <div class = "row">
              <br/>
              <br/>

              <p> Username </p>
              <input  class="inputt" name="username" type="text" placeholder="Please input username" value="<?php echo set_value("username");?>">
                <?php echo form_error("username","<font class='font_error' color='error'>","</font>");?></br></br></br>
           
          
                <p> Password </p>
                <input  class="inputt" name="password" type="text" placeholder="Please input password"  value="" >
                 <?php echo form_error("password","<font class='font_error' color='error'>","</font>");?></br></br></br>


            
              <p> Password Again </p>
              <input  class="inputt"  name="passwordA"type="text" placeholder="Please input password" value="" >
               <?php echo form_error("passwordA","<font class='font_error' color='error'>","</font>");?></br></br></br>


             
              <p> E-mail </p>
              <input  class="inputt"  name="email" type="text" placeholder="Please input E-mail" value="<?php echo set_value("email");?>">
             <?php echo form_error("email","<font class='font_error' color='error'>","</font>");?></br></br></br>


           
             
              <p> Address </p>
              <textarea   class="inputt"  rows="4"  name="address" value="<?php echo set_value("address");?>" style = "width:242px; padding-left:0px; padding-right:0px;"></textarea>
               <?php echo form_error("address","<font  class='font_error' color='error'>","</font>");?></br> 
            </div>

          
 
          <div class = "row" style="" >
             <button type="submit" class="btn" id="submit" >Submit</button>
             <button  type="reset" class="btn" id="reset" >Reset</button>
          </div>



        <?php echo form_close(); ?>



    </div>
 
      <aside id="column-right" class="span3" style= "margin-top:0px;">
        <div class="box">
          <div class="box-heading">
            <p style="padding: 10px;  text-rendering: optimizelegibility; color: #FFFFFF;"> ACCOUNT </p>
          </div>
          <div class="box-content"> 
            <ul >
              <li><a href="#">Login</a></li>
              <li><a href="#">register</a></li>
              <li><a href="#">profile</a></li>
              <li><a href="#">Order History</a></li>
            </ul>
          </div>
        </div>
      </aside>

 
  
  <div id="footer">This is the content for Layout Div Tag "footer"</div> 
</div>
</body>
</html>
