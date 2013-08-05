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

  <body style="background-color:#FFDE87;">
    <div class="page">

      <div class="row" style=" margin-left:50px; margin-right:50px;  margin-top:10px;" >
        <img id="logo" src="<?php echo base_url();?>img/lo3.png" class="img-rounded">


       


    <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <a class="brand" href="#"></a>
        <ul class="nav">
          <!-- <li class="active"><a href="#">Home</a></li> -->
          <li><a href="#">แรกพบ</a></li>
          <li><a href="#">ชวนอ่านหนังสือ</a></li>
          <li><a href="#">แจ้งข่าว</a></li>
          <li><a href="#">พบปะพูดคุย</a></li>
          <li><a href="#">ติดต่อเรา</a></li>
          <li class="dropdown visible-desktop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">เข้าสู่ระบบ</a>
                <ul class="dropdown-menu" style="padding-left: 15px; padding-right: 15px; padding-top: 15px">
                  <li><h4>กรุณาเข้าสู่ระบบ</h3></li>
                  <form class="form" id="formLogin"> 
                            <input name="username" id="username" type="text" placeholder="อีเมลแอดเดรส"> 
                            <input name="password" id="password" type="password" placeholder="รหัสผ่าน"><br>
                            <a href="#">&nbspลืมรหัสผ่าน</a><br>
                    <button type="button" id="btnLogin" class="btn btn-inverse">เข้าสู่ระบบ</button>
                    <button type="button" id="btnLogin" class="btn btn-warning">สมัครสมาชิก</button>
                          </form>
                </ul>
              </li>

       
          <li class="dropdown visible-desktop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-shopping-cart icon-white"></i>&nbsp&nbspตะกร้า</a>
                <ul class="dropdown-menu" style="width: 200px; padding-left: 15px; padding-right: 15px; padding-top: 15px">
                  <li><h5>คุณมีหนังสือในตะกร้า : 0 เล่ม</h5></li>
                  <form class="form" id="formLogin">
                    <button type="button" id="btnLogin" class="btn btn-inverse">สั่งซื้อหนังสือ</button>
                    <button type="button" id="btnLogin" class="btn btn-warning">ดูหนังสือในตะกร้า</button>
                          </form>
                </ul>
            </li>

        </ul>
      </div>
    </div>


    <div class = "row" style="background-color: #3B3B3B; margin-top:-20px;  height:47px;  border-bottom:solid 5px #008C86; ">
        <p id="word"> เติมความหมายในใจคนอ่าน </p>
        <form class="form-search">
          <div class="input-append">
            <input type="text" class="span2 search-query" placeholder="ค้นหาหนังสือ...">
            <button type="submit" class="btn">
                <i class="icon-search"></i>
            ค้นหา</button>
          </div>
        </form>


    </div>

  </div>

    <div id="content" class="span9"> 

      <p id="regis">ข้อมูลส่วนตัว</p>

        <?php echo form_open('authentication/look_profile/'.$rs['id']); ?>
            <div class = "row">
              <br/>
              <br/>

              <p> Username </p>
              <input  class="inputt" disabled="disabled"  name="username" type="text" placeholder="Please input username" value="<?php echo $rs['username'];?>">
                <?php echo form_error("username","<font color='error'>","</font>");?></br></br></br>
           
          
                <p> Password </p>
                <input  class="inputt" name="password" type="text" placeholder="Please input password"  value="<?php echo $rs['password']?>" >
                 <?php echo form_error("password","<font color='error'>","</font>");?></br></br></br>


            
              <p> Password Again </p>
              <input  class="inputt"  name="passwordA"type="text" placeholder="Please input password" value="<?php echo $rs['password']?>" >
               <?php echo form_error("passwordA","<font color='error'>","</font>");?></br></br></br>


             
              <p> E-mail </p>
              <input  class="inputt"  name="email" type="text" placeholder="Please input E-mail" value="<?php echo $rs['email']?>">
             <?php echo form_error("email","<font color='error'>","</font>");?></br></br></br>


           
             
              <p> Address </p>
              <textarea   id="address" class="inputt"  rows="4"  name="address" style = "width:242px; padding-left:0px; padding-right:0px;"  ></textarea>
               <?php echo form_error("address","<font color='error'>","</font>");?></br> 
               <script type="text/javascript"> document.getElementById("address").value = "<?php echo $rs['address']?>";</script>
            </div>

          
 
          <div class = "row" style="" >
             <button type="submit" class="btn" id="submit" style = "margin-top:20px; margin-left:230px;">Save</button>
       
          </div>



        <?php echo form_close(); ?>



   </div>




 
    </div> 
  </body>
</html>