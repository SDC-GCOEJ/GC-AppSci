<?php
$mysqli = new mysqli("gcoej.ac.in", "gcoejjif_sdcw", "sdc@2016", "gcoejjif_data_site") or die("Unable to Connect..");
?>
<!DOCTYPE html>
<html>
<head>
<title>Applied Science Department,GCOEJ</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Applied Science Department,GCOEJ" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
<!-- Owl Stylesheets -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--light-box-files -->
<script type="text/javascript" charset="utf-8">
$(function() {
	$('.gallery a').Chocolat();
});
</script>
</head>
<body>
<div class="header">
		<div class="container">
			<div class="col-sm-12 logo">
			 <!-- <h1><a href="index.php"><span class="highlight"></span>Department of Applied Science</a></h1>-->
       <img src="images/sci.png" width="100%">
			</div>
		    <div class="col-sm-9 logo_right">
		       
			<!-- script for menu -->
			<span class="menu"></span>
			<div class="clearfix"> </div>
			<div class="clearfix"></div>
		 </div>
	   </div>
</div>
<nav class="navbar nav_bottom" role="navigation">
 <div class="container">
 <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs"><i class="fa fa-bars" aria-hidden="true"></i>
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
   </div> 
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a href="index.php">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">People<span class="caret"></span></a>
              <ul class="dropdown-menu drop_menu" role="menu">
                <li><a href="faculty.php">Faculty</a></li>
                 <li><a href="staff.php">Staff</a></li>
                  <li><a href="student.php">Students</a></li>
              </ul>
            </li>
            
            <!--<li class="dropdown ">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Academics<span class="caret"></span></a>
              <ul class="dropdown-menu drop_menu" role="menu">
                <li><a href="programs.php">Programs</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="commitees.php">Commitees</a></li>
                
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admissions<span class="caret"></span></a>
              <ul class="dropdown-menu drop_menu" role="menu">
                <li><a href="Btech.php">B.Tech</a></li>
               
              </ul>
            </li>-->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Calender<span class="caret"></span></a>
              <ul class="dropdown-menu drop_menu" role="menu">
                <li><a href="tt.pdf" target="_blank">Time Table</a></li>
                <li><a href="https://gcoej.ac.in/download/Final_Academic%20Calendar_FY_2017-180.pdf" target="_blank">Academic Calender</a></li>
                
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<span class="caret"></span></a>
              <ul class="dropdown-menu drop_menu" role="menu">
                <li><a href="about.php">About Us</a></li>
                <li><a href="pos.php">PEOs and POs</a></li>
                 <li><a href="sources.php">Short Term Couses</a></li>
                
              </ul>
            </li>
            
                       
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Infrastructure<span class="caret"></span></a>
              <ul class="dropdown-menu drop_menu" role="menu">
                <li><a href="lab.php">Laboratories</a></li>
                
              </ul>
            </li>
            
            <li class="dropdown current_page">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">BOS<span class="caret"></span></a>
              <ul class="dropdown-menu drop_menu" role="menu">
               <li><a href="composition.php">Composition</a></li>
                <li><a href="mom.php">MoM</a></li>
                
              </ul>
            </li>
            
          <!--  <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Others<span class="caret"></span></a>
              <ul class="dropdown-menu drop_menu" role="menu">
                <li><a href="pos.php">PEOs & POs</a></li>
                <li><a href="sources.php">Short Courses</a></li>                
              </ul>
            </li>-->

        <li><a href="photo.php">Photogallery</a></li>
      
        </ul>
        <!--<div class="help_line"><div id="txtblnk"><p>HELP LINE : (+91)-2548713984</p></div></div>-->
     </div><!-- /.navbar-collapse -->
   
   </div>
</nav>

<body>
<div class="about_banner">
  <div class="container">
    <h2>Composition</h2>
    <span class="breadcrumbs"><a href="index.php"><i class="fa fa-home home_1"></i></a><span>/BOS/Composition</span></span>
  </div>
</div>
<center><?php
        $query=mysqli_query($mysqli,"SELECT * FROM sub_pages WHERE uid=70");
        while($row=mysqli_fetch_array($query))
        {
            echo $row['pageinfo'];
        }

    ?>
</center>
<!--
<table align="center">
<article>
<tr>
  <td colspan="4" class="headertable">Composition of BoS in Science and Humanities Department</td>
</tr>
<tr>
  <th>S.N.</th>
  <th>Designation</th>
  <th>Name, Designation and Affiliation</th>
  <th>Designation of member as per guidelines</th>
</tr>
<tr>
  <td>1</td>
  <td>Chairman</td>
  <td>Prof. Mrinalini S. Phalak (9270338257)<br>Assistant Professor in Physics, G.C.O.E. Jalgaon</td>
  <td>Head of the Department</td>
</tr>
<tr>
  <td>2</td>
  <td>Member</td>
  <td>Prof. Yogita S. Patil (9423975295)<br>Assistant Professor in Physics, G.C.O.E. Jalgaon</td>
  <td>Applied Physics</td>
</tr>
<tr>
  <td>3</td>
  <td>Member</td>
  <td>Prof. S. D. Gadhire (9423781144) <br>Assistant Professor in Mathematics, G.C.O.E. Jalgaon</td>
  <td>Engineering Mathematics</td>
</tr>
<tr>
  <td>4</td>
  <td>Member</td>
  <td>Prof. V. M. Kanke (9503600488)<br>Assistant Professor in Chemistry, G.C.O.E. Jalgaon</td>
  <td>Applied Chemistry</td>
</tr>
<tr>
  <td>5</td>
  <td>Member</td>
  <td>Prof. Narayani M. Gosavi (9270989953)<br>Assistant Professor in Chemistry, G.C.O.E. Jalgaon</td>
  <td>Environment and Management</td>
</tr>
<tr>
  <td>6</td>
  <td>Member</td>
  <td>(Vacant)</td>
  <td>English/General Proficiency</td>
</tr>
<tr>
  <td>7</td>
  <td>Member</td>
  <td>Dr. V. S. Kulkarni (9822503401)<br>Associate Prof. In Mathematics.<br>Dyneshwar Bhavan, Kalina Campus,<br> University of Mumbai, Santacruz<br>vinayakskulkarni@rediffmail.com</td>
  <td>Two Experts(In the subject from outside the college to be nominated by Academic council)</td>
</tr>
<tr>
  <td>8</td>
  <td>Member</td>
  <td>Dr. B. R. Sankapal (9637532624)<br>Associate Professor and Head in Physics,<br>Visvesvaraya National Institute of Technology, Nagpur.<br>brsankapal@phy.vnit.ac
  </td>
  <td>Two Experts(In the subject from outside the college to be nominated by Academic council)</td>
</tr>
<tr>
  <td>9</td>
  <td>Member</span></td>
  <td>Shri. Satish Mandora.<br>Partner Satellite Agrotech, Square Circles,Wisdom House, B/H Venkatesh Temple, Near Swadhyaya Bhawan,Jalgaon - 425 002, Maharashtra (India)<br>0257-2241372, Mo. 9823046474<br>celebratelife@squarecircles.in</td>
  <td>Co-opted member</td>
</tr>
<tr>
  <td>10</td>
  <td>Member</span></td>
  <td>Dr. P. P. Mahurlikar,<br>Director of Chemical Science, N. M. U. Jalgaon<br>mahulikarpp@rediffmail.com</td>
  <td>One Expert(To be nominated by the vice-chancellor from panel of six recommended by the college Principal)</td>
</tr>
<tr>
  <td>11</td>
  <td>Member</td>
  <td>Shri. S. Y. Prabhudesai,<br> (8806662003) Sr. General Manager, Supreme Industries Ltd. Jalgaon<br>sy_prabhudesai@yahoo.co.in</td>
  <td>One representative (From industry)</td>
</tr>
<tr>
  <td>12</td>
  <td>Member</td>
  <td>Dr. Parag Narkhede <br>(9422778876) Assistant Professor,<br> K.C.E’s Institute of Management and Research, Jalgaon<br>paragnarkhede@gmail.com</td>
  <td>One Postgraduate meritorious alumnus</td>
</tr>
</article>
</table>
-->

<div class="footer_bottom">
  <div class="container">
    <div class="copy">
      <p>Developed & Managed by <a href="https://sdc.gcoej.ac.in/index.php" target="_blank">Software Developement Cell</a>,Government College of Engineering, Jalgaon </p>
            <p><a href="deve.php" target="_blank">-Developers-</a></p>
            <p>Write to us- <a href="mailto:sdc.comp.gcoej@gmail.com">sdc.comp.gcoej@gmail.com</a></p>
      </div>
      </div>
  </div>
  <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;">Top </span></a>
      <script type="text/javascript" src="js/move-top.js"></script>
      <script type="text/javascript" src="js/easing.js"></script>
      <script type="text/javascript">
    $(document).ready(function() {
      /*
      var defaults = {
          containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
      };
      */
      
      $().UItoTop({ easingType: 'easeOutQuart' });
      
    });
    </script>
</div>  

<!-- Source -->
<script src="js/jquery.uls.data.js"></script>
<script src="js/jquery.uls.data.utils.js"></script>
<script src="js/jquery.uls.lcd.js"></script>
<script src="js/jquery.uls.languagefilter.js"></script>
<script src="js/jquery.uls.regionfilter.js"></script>
<script src="js/jquery.uls.core.js"></script>
<script>
  $( document ).ready( function() {
    $( '.uls-trigger' ).uls( {
      onSelect : function( language ) {
        var languageName = $.uls.data.getAutonym( language );
        $( '.uls-trigger' ).text( languageName );
      },
      quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
    } );
  } );
</script>   
<!-- FlexSlider -->
<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
<script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
      animation: "slide",
      start: function(slider){
        $('body').removeClass('loading');
      }
      });
    });
    </script>
<!-- FlexSlider -->   
</body>
</html>
</body>
</html>
