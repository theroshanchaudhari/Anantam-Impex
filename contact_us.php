<?php

if(!empty($_POST["submit"])) {
$name = $_POST['name'];
$client_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email = 'inquiry@anantam.co.in';
$body .= "From:".$client_email."\r\n";
$body .= "Name:".$name."\r\n";
$body .= "Message:".$message."\r\n";

$body1 .= "......THIS IS AN AUTO GENERATED EMAIL......\r\n";
$body1 .= "\n\n\n\nRespected\n".$name."\r";
$body1 .= "\n We have received youy Inquiry. Soon our team will be contacting you.\n Responding your inquiry may take upto 2 business days.\n\n\n For business deals kindly contact at \n Nitesh@anantam.co.in \n\n\n\n\n With Warm Regards\n Anantam Impex \r\n";
$subject1 = "Inquiry Received";


mail($email, $subject, $body);
mail($client_email,$subject1,$body1);


}
 ?>


<!doctype html>
<html lang="en"style="zoom: 120%;" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Contact us </title>
    <link rel = "icon" href = "output-onlinepngtools.ico" type = "image/x-icon">
  </head>
  <script type="text/javascript">
    function nullvalue() {
    document.getElementById("txt1") = null;
    document.getElementById("txt2") = null;
    document.getElementById("txt3") = null;
    document.getElementById("txt4") = null;
    alert("Thankyou for Inquiry");
    }
    </script>

  <body>

      <style media="screen">

        #anim {

          position: relative;
          animation-name: anim;
          animation-duration: 3s;
        }

        @keyframes anim {
          0%   { right:200px; top:0px;}
          100%  { right:0px; top:0px;}
        }

        #anim2 {
          position: relative;
          animation-name: anim2;
          animation-duration: 3s;
        }

        @keyframes anim2 {
          0%  { left:0px; top:200px;}
          100% {left:0px; top:0px;}
        }

        nav{
  position:fixed;
  box-shadow: 10px 20px 30px #c9c9c9;
  height: 130px;
  width: 100%;
  }
  img.logo{
  position: fixed;
  width: 280px;
  height: 120px;
  padding-top: 10px;
  padding-left: 10px;
  padding-right: 10px;
}
nav ul{
  float: right;


}
nav ul li{

  display: inline-block;
  line-height: 130px;
  margin: 0 5px;

}
nav ul li a{

    display:block;
}
a.active,a:hover{
  border-color: #22a6e3
  transition: .5s;
}
.checkbtn{
  font-size: 30px;
  color: #008fc5;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}

#check{

  display: none;
}
@media (max-width: 1000px){
  img.logo{
    width:200px;
    height: 90px;
    padding-left: 10px;
    position: fixed;
  }
  nav{
    height: 100px;
  }
  nav ul li a{
    font-size: 16px;
  }
}
@media (max-width: 1000px){
  .checkbtn{
    float: right;
    font-size: 40px;
    padding-top: 20px;
    display: block;
  }
  ul{
    position: fixed;
    width: 100%;
    height: auto;
    background: white;
    top: 100px;
    right: -120%;
    text-align: center;
    transition: all 2s;
    font-size: 15px;
  }
  nav ul li{
    display: block;
    margin: 6px 0;
    text-align:center;
    line-height: 30px;
  }
  nav ul li a{
    font-size: 15px;
  }
    a.hover,a.active{
    background: none;
    color: #008fc5;
  }
  1
  #alibaba{  padding-top:15px;}
  #indiamart{padding-top:15px;}
  #jd{padding-top:15px;}
  #go4b{padding-top:15px;}
  #amazoneb{padding-top:15px;}
  #panjiva{padding-top:15px;}
  #ig{padding-top:15px;}
  
  #check:checked ~ ul{
    right: 0;
  }
}
    </style>
    
      <script>
var i = 0;
var txt = 'Also find us on.';
var speed = 70;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("txtanim").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
</script>
    
    
        <!-- NAVBAR-->
  <nav class="sticky-top bg-light" width="100%">
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i >
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-justify" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
</svg>
        </i>
      </label>
      <a href="index.html"><img src="AnantamImpex.png" class="logo sticky-top" ></a>
      <ul class="bg-light px-5">
        <li><a class="btn btn-outline-primary btn-lg " href="place_order.html" >Place Order</a></li>
        <li><a class="btn btn-outline-primary btn-lg px-4 " href="about_us.html">About Us</a></li>
        <li><a class="btn btn-outline-primary btn-lg  active" href="contact_us.php">Contact Us</a></li>
       
    </nav>



  <!-- ORIGNAL.......................................................................-->




    <div class="row col-md-12 mt-5 mx-auto" width="100%" >

    <div class="col-md-5 align-self-center text-center  mb-5  mx-5 mx-auto" id="anim">

    <form method="post"  action="/contact_us.php" name="conatctusform" autocomplete = "off">
      
        <h1 class="display-3" id="type1" style="color: #008fc5; font-weight: 15px; ">Inquiry</h1>
    <div class="form-row">
    <div class="col mr-2">
        <input name="name" type="text" class="form-control form-control-lg mx-2 mx-auto mt-5" placeholder="Your Name" style="border-width:2px; border-color: #008fc5; border-style: solid;" id="txt1" required>
    </div>
    <div class="col ml-2">
        <input name="email" type="email" class="form-control form-control-lg mx-2 mx-auto mt-5 " placeholder="Your Email" style="border-width:2px; border-color: #008fc5; border-style: solid"; id="txt2" required>
    </div>
    </div>
        <input name="subject" type="text" class="form-control form-control-lg mx-2 mx-auto mt-4" placeholder="Subject" style="border-width:2px; border-color: #008fc5; border-style: solid ;" id="txt3" required>
        <textarea name="message" class="form-control mt-4" id="exampleFormControlTextarea1" rows="3" placeholder="Message" style="border-width:2px; border-color: #008fc5; border-style: solid ;" id="txt4" required ></textarea>
        <input  name="submit" class="btn btn-success btn-lg form-control-lg  rounded px-3 pt-1 mt-4" type="submit" value="Submit" onlick="nullvalue();">
    </form>
    </div>


    <!-- ORIGNAL........................................................................-->

    <div class="col-md-5 align-self-center  text-center  mx-5 mx-auto" id="anim2">
      

        <h1 class="display-3" id="type2" style="color: #008fc5; font-weight: 15px; ">Contact Us</h1>
        <div class="col mt-3">
        <img src="icons8contact.png">
        <h4>1212-Elite, S.G. Highway</h4>
          <h4> Ahmedabad-380061</h4>
        </div>
        <div class="col mt-3">
        <img src="icons8-email-64.png">
        <h4>Contact@Anantam.co.in</h4>
        </div>
        <div class="col mt-3">
        <img src="icons8-phone-64.png">
        <h4>+91 98250-98499</h4>
        </div>
    </div>
    </div>




<h1 class="text-center pt-5" style="color:#008fc5;" id="txtanim"><script>typeWriter();</script></h1>

<div class"bg-light" width="100%"  style="background: #e4f6f7; max-height:570px; height:auto; "  >
<div class="sticky-footer  my-5" width="100%" height="550px">

  <div class="text-center my-5">
  <a href="https://anantam.trustpass.alibaba.com/"><img src="alibabalogo.png" class="rounded pt-2  mx-3"  style="width:150px; max-height:150px; width:auto; height:auto;" alt="alibaba" id="alibaba" ></a>
  <a href="https://www.indiamart.com/anantamimpex/"><img src="Indiamartlogo.png" class="rounded pt-2 mx-3" width="auto"  heigth="auto" alt="Indiamart" id="indiamart" ></a>
  <a href="https://www.justdial.com/Ahmedabad/Anantam-Industries-Opposite-Shapath-Hexa-Near-Audi-Showroom-Opposite-Shapath-Hexa/079PXX79-XX79-190703190424-C8R8_BZDET?xid=QWhtZWRhYmFkIExvb3AgUGluIE1hbnVmYWN0dXJlcnM="><img src="jd-logo_nw.png" class="rounded  pt-2 mx-2" width="auto" heigth="auto" alt="JD" id="jd"></a>
  <a href="https://www.go4worldbusiness.com/member/view/2758419/anantam-impex.html"><img src="go4b.png" class="rounded  pt-2 mx-3" style="max-width:120px; max-height:120px; width:auto; height:auto;" alt="go4b"  id="go4b"></a>
  <a href="https://www.amazon.in/Anantam-impex-Melt-Stick-inch_White/dp/B0828M8R4R"><img src="amazoneb.png" class="rounded pt-2 mx-3" width="auto"  heigth="auto" alt="amazoneb"id="amazoneb" ></a>
  <a href="https://panjiva.com/Anantam-Imp-Exp/63238199"><img src="panjiva.png" class="rounded pt-2 ml-2 " style="max-width:120px; max-height:120px; width:auto; height:auto;"  alt="panjiva" id="panjiva" ></a>
  <a href="https://www.seair.co.in/indian-trader/anantam-impex.aspx"><img src="seair.png" class="rounded pt-2 mx-3" style="max-width:120px; max-height:120px; width:auto; height:auto;" width="auto"  heigth="auto" alt="seair" id="seair" ></a>
  <a href="https://www.importgenius.com/india/importers/anantam-impex"><img src="Ig.png" class="rounded  pb-2 pt-2"  style="max-width:180px; max-height:180px; width:auto; height:auto;"width="auto"  heigth="auto" alt="IG" id="ig" ></a>
  </div>

</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
