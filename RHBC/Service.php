
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>Web site of BRHBC</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <style type="text/css">
  </style>

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
          <div align="left"><a href="Office.php">Offices </a>
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
        <li class="show"><img width="880" height="250" src="images/c.jpg" alt="&quot;header of rhoboth local church;" /></li>
        <li><img width="880" height="250" src="images/d.jpg" alt="&quot;;" /></li>
		<li><img width="880" height="250" src="images/e.jpg" alt="&quot;  &quot;" /></li>
		<li><img width="880" height="250" src="images/f.jpg" alt="&quot;;" /></li>
		<li><img width="880" height="250" src="images/i.jpg" alt="&quot;;" /></li>
      </ul> 
</div><!--close header-->
    <!--close menubar-->
<div id="site_content">	  
	 
	  <div class="sidebar_container">
	    <!--close sidebar-->
	    <!--close sidebar-->
<div class="sidebar">
          <div class="sidebar_item">
            <h2 style="color:blue;font-size:28">Announcements</h2>
          
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->   
        <div class="sidebar">
          <div class="sidebar_item">
            <h2><a href="../index.php">
</a>
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
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #FFFFFF}";
        document.body.appendChild(css);
    };
    </script>
    <h1 style="text-align:center;color:green;font-size:25">
    
  <a href="" class="typewrite" data-period="2000" data-type='[ "Hello Everybody ", "የቤት ለቤት የመፅሐፍ ቅዱስ ጥናት እየተጠና ያለው የመፅሐፍ ቅዱስ ክፍል የዕብራውያን መልዕክት ነው፡፡","በባሕርዳር እና በኣካባቢዋ ያላቹህ ሁሉ በሚቀርባቹህ ቤት በመገኘት እንድታጠኑ እናበረታታቹሃለን፡፡", " መፅሐፍ ቅዱስን በአመት አንድ ጊዜ አንብቦ ለጨረሰ ለቤ/ክያናችን አባል ለሆነ የማበረታቻ ሽልማት አዘጋጅተናል፡፡", "እግዚአብሔር ይባርካቹሁ፡፡" ]'>
    <span class="wrap"></span>
  </a>
  
</h1></h2>
            
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
  </div><!--close sidebar_container-->		 
	 
	  <div id="content">
        <div class="content_item">
		  <MARQUEE><h1 STYLE="COLOR:RED; FONT-SIZE:35">PROGRAMS OF RHOBOTH YEHIWOT BIRHAN LOCAL CHURCH!!</h1></MARQUEE>
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
		echo "<h1>PROGRAMS OF RHOBOTH YEHIWOT BIRHAN LOCAL CHURCH!!</h1>";
		}	
		  }
		else {						
		?> 
		  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data" id="form1" onsubmit="MM_validateForm('firstname','','R','lastname','','R','age','','RisNum','kebele','','RisNum','phonenumber','','RisNum');return document.MM_returnValue">
		    <fieldset><legend><span class="style7">WEEKLY PROGRAMS</span></legend>
		      <p>&nbsp;</p>
		      <table width="624" height="330">
<H1 STYLE="COLOR:GREEN;TEXT-ALIGN:CENTER">እሁድ</H1> <P STYLE="COLOR:GREEN;TEXT-ALIGN:CENTER;FONT-SIZE:20">ከ3፡00-6፡30 የአምልኮ ጊዜ</p>
<H1 STYLE="COLOR:GREEN;TEXT-ALIGN:CENTER">ማክሰኞ</H1> <P STYLE="COLOR:GREEN;TEXT-ALIGN:CENTER;FONT-SIZE:20">የወንጌል ስርጭት ጊዜ</P>
<H1 STYLE="COLOR:GREEN;TEXT-ALIGN:CENTER">ሮቡዕ</H1> <P STYLE="COLOR:GREEN;TEXT-ALIGN:CENTER;FONT-SIZE:20">ከ3፡00- 8፡00 የፆም እና የፀሎት ጊዜ</P>
<H1 STYLE="COLOR:GREEN;TEXT-ALIGN:CENTER">ሐሙስ</H1><P STYLE="COLOR:GREEN;TEXT-ALIGN:CENTER;FONT-SIZE:20">ከ11፡30- 1፡00 የትምህርት ጊዜ</P>
<H1 STYLE="COLOR:GREEN;TEXT-ALIGN:CENTER">አርብ</H1> <P STYLE="COLOR:GREEN;TEXT-ALIGN:CENTER;FONT-SIZE:20">ከምሽቱ 2-30-8፡30 የአዳር ጊዜ</P>
<H1 STYLE="COLOR:GREEN;TEXT-ALIGN:CENTER">ቅዳሜ</H1><P STYLE="COLOR:GREEN;TEXT-ALIGN:CENTER;FONT-SIZE:20"> ከ9-00-11፡00 የወጣቶች ፕሮገራም</P> 
<P STYLE="COLOR:BLUE;TEXT-ALIGN:CENTER;FONT-SIZE:30">በፕሮግራሞቻችን መገኘት የምትችሉ ሁሉ እየተገኛቹህ የበረከቱ ተካፋይ እንድትሆኑ እንጋብዛቹሃለን፡፡</P>

                
               
               
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
<div class="content_image">
		    <img src="images/1.jpg" alt="1" height="500" width="850"/><br style="clear:both"/>
		    <!--close content_container-->
            <!--close content_container-->
        </div>
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
