
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>WEB SITE OF BRHBC</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <style type="text/css">
  </style>
<script language="javascript">

function load() {
var load = window.open ('indexx.php','_self',false);

}
function loadEng() {
var load = window.open ('index.php','_self',false);

}
// -->
</script>
<script type="text/javascript">
<!--
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

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
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
		 
	     <img width="918" height="105" src="images/bann.png">   
	   <!--</div> <!--close welcome_slogan-->
	  </div><!--close banner-->
   </div><!--close header-->
	<div id="navigation">
     <ul>
        <li class="current">
          <div align="left"><a href="index.php">Home</a></div>
        </li>
		
        <li>
          <div align="left"><a href="background.php">About Us </a>
               
          </div>
        </li>
        
        <li>
          <div align="left"><a href="#">Programs/Service</a>
          </div>
        </li>
            <li>
          <div align="left"><a href="Books.php">Books</a>
          </div>
        </li>
	<li>
          <div align="left"><a href="Apps.php">Applications</a>
          </div>
        </li>
        <li><div align="left"><a href="contact.php">Contact Us</a></div></li>
		
      </ul>
    </div><!--close menubar-->	
  
  <div id="site_content">			  
      <ul class="slideshow">
        <li class="show"><img width="880" height="250" src="images/Logo.png" alt="&quot;God is love &quot;" /></li>
        <li><img width="880" height="250" src="images/mis.jfif" alt="&quot;God is love &quot;" /></li>
		<li><img width="880" height="250" src="images/hbt.jfif" alt="&quot;God is love &quot;" /></li>
		<li><img width="880" height="250" src="images/22.jpg" alt="&quot;God is love;" /></li>
		<li><img width="880" height="250" src="images/office.jfif" alt="&God is love;" /></li>
      </ul>   
</div><!--close header-->

	
    
	<div id="site_content">		   
	  <div class="sidebar_container">
	    <!--close sidebar-->
<div class="sidebar">
          <div class="sidebar_item">
            <h2>Login</h2>
			<form action="login.php" method="post" id="form1" onsubmit="MM_validateForm('username','','R','password','','R');return document.MM_returnValue">
            
			User Name:<?php if(isset($_GET['fail'])) echo "<font color=\"red\"><b> Login Error</b></font>"; ?> <input type="text" name ="username" >
			Password: <input type="password" name ="password" >
			<input type="Submit" name="send" value ="sign In" >
			
			
			</form>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar--> 
		   		
		<div class="sidebar">
          <div class="sidebar_item">
             patient threat
			  <div class="content_image">
		    <img src="images/8.jpg" alt="image1" height="190" width="200"/><br style="clear:both"/>
		    <!--close content_container-->
            <!--close content_container-->
        </div>
			  
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
        <!--close sidebar-->
      </div>
	  <!--close sidebar_container-->		 
	 
	  <div id="content">
        <div class="content_item">
		  <h1>Messages from Rhoboth Church leaders</h1> 
	      <p align="justify"><span class="style1"></span>እግዚአብሄር መልካም ነው.</p>
		  <div class="content_image">
		    <img src="images/bb.jpg" alt="image1" width="199" height="262"/>	      </div>
		  <p align="justify"> ተልዕኮ፡- በጌታ አምነው የዳኑ ሰዎችን ሁሉ የክርስቶስ ደቀ መዝሙር ማድረግ፡፡ ማቴ 28፡- 19

ራዕይ፡-በአባይ ማዶ እና በአካባቢዋ ያሉትን ሰዎች በወንጌል ተደርሰው የክርስቶስ ደቀ መዝሙር በመሆን   ድሆችን ፤ ወላጅ የሌላቸውን    ህፃናትና ጧዋሪ የሌላቸውን አቅም በፈቀደ መሰረት ስረዱ እና ሲንከባከቡ ማየት፡፡

ግብ፡- የህብረቷን አባላት መንፈሳዊ ህይወት የእግዚአብሔርን ቃል በመመገብ ወደ ክርስቶስ ሙላት በነገር ሁሉ ማብቃት በህብረተሰቡ ዘንድ ክርስቶስን በመግለፅ መልካም ምስክርነት እንዲኖራቸው የሚቻለውን ሁሉ ማድረግ፡፡
<p align="justify"> ተልዕኮ፡- በጌታ አምነው የዳኑ ሰዎችን ሁሉ የክርስቶስ ደቀ መዝሙር ማድረግ፡፡ ማቴ 28፡- 19

ራዕይ፡-በአባይ ማዶ እና በአካባቢዋ ያሉትን ሰዎች በወንጌል ተደርሰው የክርስቶስ ደቀ መዝሙር በመሆን   ድሆችን ፤ ወላጅ የሌላቸውን    ህፃናትና ጧዋሪ የሌላቸውን አቅም በፈቀደ መሰረት ስረዱ እና ሲንከባከቡ ማየት፡፡

ግብ፡- የህብረቷን አባላት መንፈሳዊ ህይወት የእግዚአብሔርን ቃል በመመገብ ወደ ክርስቶስ ሙላት በነገር ሁሉ ማብቃት በህብረተሰቡ ዘንድ ክርስቶስን በመግለፅ መልካም ምስክርነት እንዲኖራቸው የሚቻለውን ሁሉ ማድረግ፡፡
</p></p>
		  <p>&nbsp;</p>
		  <br style="clear:both"/>
		   <p>&nbsp;</p>
		  
		  
		 
          <br style="clear:both"/><!--close content_container-->
          <!--close content_container-->
        </div>
        <!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content--> 
    

 
 
</div><!--close main-->
  
  <div id="footer">
	  <a href="http://www.virtualtourist.com/travel/Africa/Ethiopia/Bahir_Dar-2024144/TravelGuide-Bahir_Dar.html">Copyright &copy; 2015
	  </a><a href="http://jigsaw.w3.org/css-validator/check/referer"></a> | 
	  <a href="https://www.google.com.et/search?q=ethiopian+water+resources+photos&biw=1366&bih=657&tbm=isch&tbo=u&source=univ&sa=X&ei
	  =pfpMVZjfHcG7sQHKj4DwBQ&ved=0CCEQsAQ//www.pdphoto.org/">Images</a> Gamby,com</div>
	  
  <!--close footer-->  
  
</body>
</html>
