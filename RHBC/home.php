<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>web based patient information  Managment System fore  Gamby general hospital</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <style type="text/css">
<!--
.style5 {font-size: medium; font-family: "Times New Roman", Times, serif; font-weight: bold; }
.style7 {
	font-size: medium;
	font-style: italic;
	font-weight: bold;
	font-family: "Times New Roman", Times, serif;
	color: #000099;
}
.style8 {color: #fff}
-->
  </style>
  <script type="text/javascript">
tday =new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock(){
d = new Date();
nday = d.getDay();
nmonth = d.getMonth();
ndate = d.getDate();
nyear = d.getYear();
nhour = d.getHours();
nmin = d.getMinutes();
nsec = d.getSeconds();

if(nyear<1000) nyear=nyear+1900;

if(nhour == 0) {ap = " AM";nhour = 12;}
else if(nhour <= 11) {ap = " AM";}
else if(nhour == 12) {ap = " PM";}
else if(nhour >= 13) {ap = " PM";nhour -= 12;}

if(nmin <= 9) {nmin = "0" +nmin;}
if(nsec <= 9) {nsec = "0" +nsec;}


document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
setTimeout("GetClock()", 1000);
}
window.onload=GetClock;
</script>
</head>

<body>
 <div id="main">
  <?php
if (!isset($_SESSION)) {
  session_start();
}
?>
  <div id="header">
	 <div id="banner">
	    
	    <!--<div id="welcome_slogan"> -->
		 
	     <img width="918" height="105" src="images/bann.jpg">   
	   <!--</div> <!--close welcome_slogan-->
    </div><!--close banner-->
</div><!--close header-->
	<div id="navigation">
        <ul>
        <li class="current"><a href="index.php">Home</a></li>		
        <li><a href="background.php">About Us </a>
		<ul class="sub-menu">
		<li><a href="background.php">Background</a></li>
		<li><a href="mission.html">Misson</a></li>
		
		</ul>
		</li>
        <li><a href="recordOffice.html">Offices</a>
		<ul class="sub-menu">
	    <li><a href="recordOffice.html">Record office</a></li>

		<li><a href="accountant.html"> Accountant</a></li>
		
		<li><a href="techncian.html">Lab_ Technician Office</a></li>
		</ul>
		</li>
        <li><a href="NewpatientRegstration.php">Service</a>
		<ul class="sub-menu">
		<li><a href="NewpatientRegstration.php"> Registration</a></li>
		<li><a href="index.php"> Maintanance </a></li>
		<li><a href="index.php"> Bill payment</a></li>
		</ul>
		</li>
		<li><a href="NewpatientRegstration.php">Registration</a></li>
        <li><a href="contact.html">Contact Us</a></li>		
      </ul>
   </div><!--close menubar-->
	<div id="sub-menu">
	
	  <span class="style5"><font color="#000000"> Language </font></span> 
	    <select name="language" size="1" >
        <option value="eng">English</option>
        <option value="amh" onClick="load()">አማርኛ(Amharic)</option>
      	 
    </select> 
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
	 <?php
echo "<b>".date('l\, F jS\, Y ')."</b>";
?>
   </div>	
<div id="site_content">		
       <ul class="slideshow">
        <li class="show"><img width="880" height="250" src="images/front.jpg" alt="&quot;Gamby general hospital  building &quot;" /></li>
        <li><img width="880" height="250" src="images/pip.jpg" alt="&quot;Gamby general hospital service cars&quot;" /></li>
		<li><img width="880" height="250" src="images/hbt.jpg" alt="&quot;over view ofGamby General Hospital  &quot;" /></li>
		<li><img width="880" height="250" src="images/bb.jpg" alt="&quot;Gamby General Hospital pharmacy&quot;" /></li>
		<li><img width="880" height="220" src="images/office.jpg" alt="&quot;Gamby General Hospital sergur room&quot;" /></li>
      </ul>  
</div><!--close header-->

	
    
	<div id="site_content">		  
	 
	  <div class="sidebar_container">
	    <!--close sidebar-->
<div class="sidebar">
		<div class="sidebar_item">
		  
		  <h2> <a href="logout.php" class="style8">Logout</a></h2>
            <p>
              <?php
           print "Welcome "."<b><u>".$_SESSION['User_Name']."<u></b>.<br/>";
			print "Date is: ";
		
			echo "<b>".date('l\, F jS\, Y ')."</b>";


		   ?>
            </p>
            		</div>
          <div class="sidebar_item">
		  <h2>Application</h2>
              <h3> <a href="ReadBillValue.php">Read Bill Value</a></h3>
			  <h3><a href="nurse_screening_resultOrder.php">New nurse_screening_result Order</a></h3>
			  <h3><a href="MeterRead.php">Meter Reading</a></h3>
			  <h3><a href="index.html">Message Reading</a></h3>
			  <h3><a href="contact.html">Send Comment</a></h3>
			  
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
        <!--close sidebar-->
      </div>
	  <!--close sidebar_container-->		 
	 
	  <div id="content">
        <div class="content_item">
		  <h1>Custemer Bill Payment Information </h1>
		  <form id="form1" method="post" action="">
		    <fieldset>
		    <legend class="style7">Welcome </legend>
		    <p>Well come &quot;<?php  print "<b><u>".$_SESSION['User_Name']."<u></b>"?> &quot; you are login as patient </p>	   
		    </fieldset>
          </form>
	    </div>
        <!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content--> 
    
	<div id="navigation">
        <ul>
        <li class="current"><a href="index.php">Home</a></li>		
        <li><a href="background.php">About Us </a>
		<ul class="sub-menu">
		<li><a href="background.php">Background</a></li>
		<li><a href="mission.html">Misson</a></li>
		
		</ul>
		</li>
        <li><a href="recordOffice.html">Offices</a>
		<ul class="sub-menu">
	    <li><a href="recordOffice.html">Record office</a></li>

		<li><a href="accountant.html"> Accountant</a></li>
		
		<li><a href="techncian.html">Lab_ Technician Office</a></li>
		</ul>
		</li>
        <li><a href="NewpatientRegstration.php">Service</a>
		<ul class="sub-menu">
		<li><a href="NewpatientRegstration.php"> Registration</a></li>
		<li><a href="index.php"> Maintanance </a></li>
		<li><a href="index.php"> Bill payment</a></li>
		</ul>
		</li>
		<li><a href="NewpatientRegstration.php">Registration</a></li>
        <li><a href="contact.html">Contact Us</a></li>		
      </ul>
   </div><!--close menubar-->
</div><!--close main-->
  
  <div id="footer">
<a href="http://www.virtualtourist.com/travel/Africa/Ethiopia/Bahir_Dar-2024144/TravelGuide-Bahir_Dar.html">Copyright &copy; 2016</a><a href="http://jigsaw.w3.org/css-validator/check/referer"></a> | 
	  <a href="https://www.google.com.et/search?q=ethiopian+water+resources+photos&biw=1366&bih=657&tbm=isch&tbo=u&source=univ&sa=X&ei=pfpMVZjfHcG7sQHKj4DwBQ&ved=0CCEQsAQ//www.pdphoto.org/">Images</a> | www.gamby.com</div>
  <!--close footer-->  
  
</body>
</html>
i