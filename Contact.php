
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>Web site of BRHBC </title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <style type="text/css">
<!--
.style1 {
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
	font-size: medium;
}
-->
  </style>
<script language="javascript">

function load() {
var load = window.open ('NewCustRegstration.html','_self',false);

}
// -->
</script>
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
  
  <div id="header">
	 <div id="banner">
	    
	    <!--<div id="welcome_slogan"> -->
		 
	      <img width="918" height="105" src="images/bann.png">    
	   <!--</div> <!--close welcome_slogan-->
    </div><!--close banner-->
   </div><!--close banner-->
</div><!--close header-->
	<div id="navigation">
       <ul>
        <li class="current"><a href="index.php">Home</a></li>
	
        <li>
          <div align="left"><a href="Office.php">Offices</a>
          </div>
        </li>
        <li>
          <div align="left"><a href="Service.php">Service</a>
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
		<li><div align="left"><a href="Contact.php">Contact Us</a></div></li>
      </ul>
    </div><!--close menubar-->	
   <div id="sub-menu">
	
	 
	
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php
echo "<b>".date('l\, F jS\, Y ')."</b>";
?>

</div> 
  <div id="site_content">		
       <ul class="slideshow">
        <li class="show"><img width="880" height="250" src="images/ak.jpg" alt="&quot;header of rhoboth local church;" /></li>
        <li><img width="880" height="250" src="images/ab.jpg" alt="&quot;;" /></li>
		<li><img width="880" height="250" src="images/ac.jpg" alt="&quot;  &quot;" /></li>
		<li><img width="880" height="250" src="images/ad.jpg" alt="&quot;;" /></li>
		<li><img width="880" height="250" src="images/ae.jpg" alt="&quot;;" /></li>
      </ul> 
</div><!--close header-->
    <!--close menubar-->
<div id="site_content">	  
	 
	  <div class="sidebar_container">
	    <!--close sidebar-->
	    <!--close sidebar-->
<div class="sidebar">
           
       <div class="sidebar_item">
            <h2 STYLE="COLOR:RED;FONT-SIZE:25"></h2>
          <H1 STYLE="COLOR:GREEN;FONT-SIZE:20"> ጥቅሶች </H1>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->   
        <div class="sidebar">
          <div class="sidebar_item">
            <h2><a href="../index.php"></a>
<script>
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #FFFFF}";
        document.body.appendChild(css);
    };
    </script>
    <h1 style="text-align:LEFT;color:green;font-size:25"> 
   
 <span class="wrap"></span>
</a></h2>
<div class="content_image">
		    <img src="images/ai.jpg" alt="ai" height="300" width="200"/><br style="clear:both"/>
<li><img width="200" height="250" src="images/ac.jpg" alt="&quot;  &quot;" /></li>
		<li><img width="200" height="250" src="images/5.jpg" alt="&quot;;" /></li>
		<li><img width="200" height="400" src="images/aj.jpg" alt="&quot;;" /></li>
		    <!--close content_container-->
            <!--close content_container-->
        </div>

          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
  </div>
<!--close sidebar_container-->		 
	 
	  <div id="content">
        <div class="content_item">
 </div><!--close sidebar-->
  </div><!--close sidebar_container-->		 
	<img width="650" height="250" src="images/bb.jpg" alt="&quot;;" /></li>
	  <div id="content">
        <div class="content_item">
		  <h1 STYLE="COLOR:RED; FONT-SIZE:35"></h1>
		   <?php
	     
		if(isset($_POST['regist'])){
		require_once('database.php');
		$patient_Id= $_POST['patient_Id'] ;
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		
		$gender=$_POST['select'];
		$age=$_POST['age'];
		$kebele=$_POST['kebele'];
		$phonenumber=$_POST['phonenumber'];
		
		
		
		
		
		
		if(true)
			{   
		mysql_select_db( 'gamby' );
		$sql="insert into patient values('$patient_Id','$firstname','$lastname','$gender','$age','$kebele','$phonenumber')";
		$result=mysql_query($sql);
		if(!$result)
		die("unable to insert values".mysql_error());
		echo "<h1></h1>";
		}	
		  }
		else {						
		?> 


		  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data" id="form1" onsubmit="MM_validateForm('firstname','','R','lastname','','R','age','','RisNum','kebele','','RisNum','phonenumber','','RisNum');return document.MM_returnValue">
		    <fieldset><legend><span class="style7">Contacts</span></legend>
		      <p>&nbsp;</p>
		      <table width="624" height="330">

                
<img width="40" height="40" src="images/ph.png"> <h1 style=font-size:30;color:blue>Phone:+251939682366/+251918409581</h1>
<h1 style=font-size:30;color:blue>E-mail:gedefawtaya0@gmail.com</h2>
<img width="40" height="40" src="images/pO.png"><h1 style=font-size:30;color:blue>POBOX:0000</h2>
<img width="40" height="40" src="images/telegram.jpg"><h1 style=font-size:30;color:blue>telegram:</h1>
               
                    <br />
                    </label>
                    
                    <label>                  </label>
                    </span>
                    <label></label>
                    <span class="style8"><label></label>
                    </span>
                  <label></label></td>
                </tr>
              </table>
	     
		  </fieldset>
          </form>
<img width="200" height="250" src="images/af.jpg" alt="&quot;;" />
<img width="200" height="250" src="images/al.jpg" alt="&quot;;" />
<img width="200" height="250" src="images/ag.jpg" alt="&quot;;" />
<marquee><img width="700" height="300" src="images/ah.jpg" alt="&quot;;" /></marquee>
<img width="200" height="250" src="images/1.jpg" alt="&quot;;" />
<img width="200" height="250" src="images/am.jpg" alt="&quot;;" />
<img width="200" height="250" src="images/an.jpg" alt="&quot;;" />
<img width="880" height="300" src="images/ae.jpg" alt="&quot;;" /></marquee>

		  <?php } ?>
        </div><!--close content_item-->
      </div><!--close content-->   
</div><!--close site_content--> 
    <div id="navigation">
   
<marquee><p STYLE=FONT-SIZE:25;COLOR:RED>አገልግሎታችንን መደገፍ ለምትፈልጉ የብርሃን ባንክ አካውንት፡-1501650164026 ርሆቦት የህይወት ብርሃን ብላቹህ ማስገባት ትችላላቹህ፡፡ስልክ ቁጥር፡  0918409581</p></marquee>
    </div><!--close menubar-->	

  </div><!--close main-->

  <div id="footer">
  <a href="http://www.virtualtourist.com/travel/Africa/Ethiopia/Bahir_Dar-2024144/TravelGuide-Bahir_Dar.html">Copyright &copy; 2015
  </a><a href="http://jigsaw.w3.org/css-validator/check/referer"></a> | 
	  <a href="https://www.google.com.et/search?q=ethiopian+water+resources+photos&biw=1366&bih=657&tbm=isch&tbo=u&source=univ&sa=X&e
	  i=pfpMVZjfHcG7sQHKj4DwBQ&ved=0CCEQsAQ//www.pdphoto.org/">Images</a> |G</div><!--close footer-->  
  
</body>
</html>
