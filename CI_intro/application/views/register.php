<!DOCTYPE html>
<html>
  <head>
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

 

  </head>

  <body style="background-image: url('img/tileable_wood_texture.png')" >


    <div class = "row" style="">
        <!-- <p id="word"> เติมความหมายในใจคนอ่าน </p> -->
        <form class="form-search">
          <div class="input-append">
            <button type="submit" class="btn">
                <i class="icon-search"></i>
            </button>
            <input type="text" class="span2 search-query" placeholder="ค้นหาหนังสือ...">
            
          </div>
        </form>
    </div>



    <div class="page">


      <div class="row"  >
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



      

<div id="myCarousel" class="carousel slide" >
  
      <ol class="carousel-indicators middle">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
      </ol>

      <div class="carousel-inner">

          <div class="item active">
            <img src="<?php echo base_url();?>img/01_sellya_promo.png" alt="">
            <div class="container">
              <div class="carousel-caption">
                 
              </div>
            </div>
          </div>

          <div class="item">
            <img src="" alt="">
            <div class="container">
              <div class="carousel-caption">
                <h1>Example headline.</h1>
                <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </div>
            </div>
          </div>

          <div class="item">
            <img src="http://www.wordforwordbooks.com/w4w/assets/img/carousel-1.jpg" alt="">
            <div class="container">
              <div class="carousel-caption">
                <h1>Example headline.</h1>
                <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </div>
            </div>
          </div>

          <div class="item">
            <img src="http://www.wordforwordbooks.com/w4w/assets/img/carousel-1.jpg" alt="">
            <div class="container">
              <div class="carousel-caption">
                <h1>Example headline.</h1>
                <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </div>
            </div>
          </div>


        </div>
    </div>

    

 
  <div id="content" class="span8"> 

      <p id="regis">REGISTERATION</p>

        <?php echo form_open('form'); ?>
            <div class = "row">
              <br/>
              <br/>

              <p> Username </p>
              <input  class="inputt" name="username" type="text" placeholder="Please input username" value="<?php echo set_value("username");?>">
                <?php echo form_error("username","<font color='error'>","</font>");?></br></br></br>
           
          
                <p> Password </p>
                <input  class="inputt" name="password" type="text" placeholder="Please input password"  value="" >
                 <?php echo form_error("password","<font color='error'>","</font>");?></br></br></br>


            
              <p> Password Again </p>
              <input  class="inputt"  name="passwordA"type="text" placeholder="Please input password" value="" >
               <?php echo form_error("passwordA","<font color='error'>","</font>");?></br></br></br>


             
              <p> E-mail </p>
              <input  class="inputt"  name="email" type="text" placeholder="Please input E-mail" value="<?php echo set_value("email");?>">
             <?php echo form_error("email","<font color='error'>","</font>");?></br></br></br>


           
             
              <p> Address </p>
              <textarea   class="inputt"  rows="4"  name="address" value="<?php echo set_value("address");?>" style = "width:242px; padding-left:0px; padding-right:0px;"></textarea>
               <?php echo form_error("address","<font color='error'>","</font>");?></br> 
            </div>

          
 
          <div class = "row" style="" >
             <button type="submit" class="btn" id="submit" style = "margin-top:20px; margin-left:230px;">Submit</button>
             <button  type="reset" class="btn" id="reset" style = "margin-left: 30px;  margin-top:20px;">Reset</button>
          </div>



        <?php echo form_close(); ?>



   </div>

   
     <aside id="column-right" class="span3">
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
    


 
</div> 

  </body>
</html>