<!DOCTYPE html>
<html>
  <head>
    <title>สำนักพิมพ์ คำต่อคำ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="css/register.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/homecss.css">


    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <script src="http://www.wordforwordbooks.com/w4w/assets/js/midway.min.js"></script>
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
        <img id="logo" src="img/lo3.png" class="img-rounded">


        <div id="word"> ต่อเติมความหมายในใจคนอ่าน </div>


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
          <li><a href="#">เข้าสู่ระบบ</a></li>
          <li><a href="#"> <i class="icon-shopping-cart icon-white"></i> ตะกร้า</a></li>
        </ul>
      </div>
    </div>

    <div class = "row" style="background-color: #f5f5f5; margin-top:-20px; ">
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

    

  <p id="regis"   style="font-color: #BF1534;" >Registeration</p>

  <div class="content" style="margin-top:30px; margin-left: 80px; margin-right: 80px; border: 0.5px dotted; border-color:black; background-color: #f5f5f5;"> 

      
        <?php echo form_open('form'); ?>
          <div class = "row" >
            <div class = "span5">
              <p> Username </p>
              <input  class="inputt" name="username" type="text" placeholder="Please input username" style="margin-top:25px;">
            </div>
         
            <div class = "span4">
                <p> Password </p>
                <input  class="inputt" name="password" type="text" placeholder="Please input password" style="margin-top:25px;">
            </div>
          </div>

       

          <div class = "row">
            <div class = "span5">
              <p style="width:150px;"> Password Again </p>
              <input  class="inputt"  name="passwordA"type="text" placeholder="Please input password" style="width:200px;"  >
            </div>

             <div class = "span4" >
              <p> Address </p>
              <textarea  rows="4"  name="address" style = "margin-top:25px; width:242px; padding-left:0px; padding-right:0px; margin-left:0px;"></textarea>
            </div>

            <div class = "span5" style = "margin-top:-60px;">
              <p> E-mail </p>
              <input  class="inputt"  name="email" type="text" placeholder="Please input E-mail">
            </div>
          </div>

      

         

          <div class = "row" style="" >
             <button type="submit" class="btn" id="submit" style = "margin-top:20px; margin-left:370px;">Submit</button>
             <button  type="reset" class="btn" id="reset" style = "margin-left: 30px;  margin-top:20px;">Reset</button>
          </div>



        <?php echo form_close(); ?>



   </div>


 
</div> <!--PAge__>





    
  </body>
</html>