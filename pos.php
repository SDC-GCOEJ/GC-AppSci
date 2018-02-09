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
			  <!--<h1><a href="index.php"><span class="highlight"></span>Department of Applied Science</a></h1>-->
        <img src="images/sci.png">
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
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
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
                <li><a href="student.php">Student</a></li>
              </ul>
            </li>
            
           <!-- <li class="dropdown">
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
             <li class="dropdown current_page">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<span class="caret"></span></a>
              <ul class="dropdown-menu drop_menu" role="menu">
                <li><a href="about.php">About Us</a></li>
                <li><a href="pos.php">PEOs and Pos</a></li>
                 <li><a href="sources.php">Short Term Courses</a></li>
                
              </ul>
            </li>
            
                       
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Infrastructure<span class="caret"></span></a>
              <ul class="dropdown-menu drop_menu" role="menu">
                <li><a href="lab.php">Laboratories</a></li>
                
              </ul>
            </li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">BOS<span class="caret"></span></a>
              <ul class="dropdown-menu drop_menu" role="menu">
               <li><a href="composition.php">Composition</a></li>
                <li><a href="mom.php">MoM</a></li>
                
              </ul>
            </li>
            
           <!-- <li class="dropdown current_page">
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
    <h2>PEOs & POs</h2>
    <span class="breadcrumbs"><a href="index.php"><i class="fa fa-home home_1"></i></a><span>About/PEOs & POs</span></span>
  </div>
</div>

<div class="about_top">
 <div class="container">
  <div class="col-md-3 column-12">
  </div>
  <div class="col-md-9 column-15">
    
       <div class="module_container">
          <div class="item_content">
          <?php
        $query=mysqli_query($mysqli,"SELECT * FROM sub_pages WHERE uid=73");
        while($row=mysqli_fetch_array($query))
        {
            echo $row['pageinfo'];
        }

    ?>

        <!--  <p><span style="color: #000000;"><strong>SH102 Engineering Physics&nbsp;</strong></span></p></h5>
            <p><span style="color: #000000;"><strong>Learning Objective</strong></span></p>
<ul>
<li>Develop a conceptual understanding of the fundamental physical principles described above.</li>
<li>Demonstrate skill in using advanced mathematical techniques to solve physics problems in electricity and magnetism, optics, fibre optic communication, modern physics, acoustic and quantum mechanics.</li>
<li>Appreciation of physics principles and theories, and the beauties of physics;</li>
<li>Apply an understanding of physical concepts to various systems and devises.</li>
</ul><br><br><br>
<p><span style="color: #000000;"><strong>SH103 Engineering Physics&nbsp;Lab</strong></span></p>
<p><span style="color: #000000;"><strong>Learning Objective</strong></span></p>
<ul>
<li>Use the latest techniques, skills, and modern tools necessary for engineering practices.</li>
<li>Can analyze characteristic properties and determine the resistivity of semiconductor.</li>
<li>Analyze wavelength of Laser, working of Laser, various properties and</li>
<li>Can study Hall effect &amp; determine Hall coefficient.</li>
<li>Describe working of solar cell, its advantages, disadvantages and uses.</li>
<li>Can understand the&nbsp; phenomenon&nbsp; of&nbsp; diffraction&nbsp; &amp;&nbsp; diffraction&nbsp; grating &nbsp;and determine wavelength of light using diffraction grating.</li>
<li>Describe the use of sound level meter</li>
<li>Describe ultrasonic wave and analyze its velocity</li>
<li>Analyze e/m of an electron and describe motion of electron in electric field.</li>
<li>Describe working CRO and its uses.</li>
</ul>
<br><br><br>
                <h5 class="item_title1"><p><span style="color: #000000;"><strong>SH152 Engineering Chemistry Lab</strong></span></p>
                </h5>
            <p><span style="color: #000000;"><strong>Learning Objective</strong></span></p>
        <p><span style="color: #000000;">After successful completion of this lab work, student will be able to</span></p>
<ol>
<li><span style="color: #000000;">Understand the term PH.</span></li>
<li><span style="color: #000000;">Understand and Differentiate between alkaline, acidic, neutral solution of substances.</span></li>
<li><span style="color: #000000;">The working of PH meter.</span></li>
<li><span style="color: #000000;">Understand the polymerization reaction.</span></li>
<li><span style="color: #000000;">Student should be able to understand different types of Polymers.</span></li>
<li><span style="color: #000000;">Understand the importance of Polymers.</span></li>
<li><span style="color: #000000;">Understand the calorific value of coal.</span></li>
<li><span style="color: #000000;">Understand the acid value of given liquid lubricant.</span></li>
<li><span style="color: #000000;">Understand the different types of acids and bases.</span></li>
<li><span style="color: #000000;">Understand the bad consequences of alkali salts in water.</span></li>
<li><span style="color: #000000;">Understand the bad consequences of chlorides in water.</span></li>
<li><span style="color: #000000;">Understand harness of water.</span></li>
<li><span style="color: #000000;">Understand the bad consequences of hard water.</span></li>
</ol>

        <h5 class="item_title1"><p><span style="color: #000000;"><strong>SH153 Environmental Studies</strong></span></p>
<p><span style="color: #000000;"><strong>Learning Objective</strong></span></p></h5>
        <p><span style="color: #000000;">We have tried to achieve the following objectives through this course.</span></p>
<ol>
<li><span style="color: #000000;">Creating the awareness about environmental problems among people.</span></li>
<li><span style="color: #000000;">Imparting basic knowledge about the environment and its allied problems.</span></li>
<li><span style="color: #000000;">Developing an attitude of concern for the environment.</span></li>
<li><span style="color: #000000;">Motivating public to participate in environment protection and environment improvement.</span></li>
<li><span style="color: #000000;">Acquiring skills to help the concerned individuals in identifying and solving environmental problems.</span></li>
<li><span style="color: #000000;">To help the social groups and individuals to acquire knowledge of pollution and environmental degradation.</span></li>
</ol>
<p><span style="color: #000000;">&nbsp;</span><span style="color: #000000;"><strong>SH155-General Proficiency</strong></span></p>
<p><span style="color: #000000;"><strong>General Objectives</strong></span></p>
<p><span style="color: #000000;">We have tried to achieve the following objectives through this course.</span></p>
<ol>
<li><span style="color: #000000;">To make the student industry ready in terms of his/her ability to communicate effectively.</span></li>
<li><span style="color: #000000;">To develop the ability of the student to create, compose and render presentations with or without the help of media.</span></li>
<li><span style="color: #000000;">To understand the importance of public speech and the role language plays in that.</span></li>
<li><span style="color: #000000;">To enhance the ability of written communication by giving a primer on English.</span></li>
<li><span style="color: #000000;">To make the students effective team workers with a capacity to lead in any circumstances.</span></li>
<li><span style="color: #000000;">To understand and become adept in corporate communication of writing letters and memos etc.</span></li>
<li><span style="color: #000000;">To enhance the ability of written communication by continuing to advanced level in English.</span>
</ol>
<p><span style="color: #000000;"><strong>SH-201 Engineering Mathematics-III</strong></span></p>
<p><span style="color: #000000;">&nbsp;The prime objective of offering this course is to strengthen the</span></p>
<ol>
<li><span style="color: #000000;">Students will understand second and higher order differential equations and their solutions by general method as well as some short cut methods. Also application of differential equations to electrical engineering problems are discussed which will allow them to apply to engineering problems.</span></li>
<li><span style="color: #000000;">Students will understand integral transforms such as Laplace transform (L.T.) of a function in t-domain. They will learn L.T. and their inverses of various standard functions as well as special functions such as Heaviside function, Dirac delta function, Periodic function. Also they will learn the techniques to solve Initial Value Problems through Laplace transform techniques.</span></li>
<li><span style="color: #000000;">Students will understand Fourier transforms, Fourier Sine Transforms, Fourier Cosine transforms and their Inverses which are again very useful in solving Initial Value Problems.</span></li>
<li><span style="color: #000000;">Students will also learn the important theorems of vector integration like Green&rsquo;s, Gauss&rsquo; and Stokes&rsquo; theorems.</span></p>
<li><span style="color: #000000;">Students will understand vector integration such as line integral, surface integral, Volume integral which is very much essential in various problems.</span></li>
<li><span style="color: #000000;">Students will understand function of a complex variable, definition of analytic function and its use in solving real or complex integration. Cauchy Integral theorem and Cauchy residue theorem are very important tools in solving many problems. They will learn these techniques.</span></li>
</ol>
<p><span style="color: #000000;"><strong>SH-202 Engineering Mathematics-III</strong></span></li>
<p><span style="color: #000000;">&nbsp;The prime objective of offering this course is to strengthen the</span></p>
<ol>
<li><span style="color: #000000;">1 Students will understand second and higher order differential equations and their solutions by general method as well as some short cut methods. Also application of differential equations to electrical engineering problems are discussed which will allow them to apply to Bending Beam, Oscillation of a string and vibration of a spring problems.</span></li>
<li><span style="color: #000000;">2 Students will understand how to solve higher order partial differential equations. Also application of partial differential equations to wave equation and one dimensional, two dimensional heat equations.</span></li>
<li><span style="color: #000000;">3 Students will understand Fourier transforms, Fourier Sine Transforms, Fourier Cosine transforms and their Inverses which are again very useful in solving Initial Value Problems.</span></li>
<pli<span style="color: #000000;">4 Students will also learn the important theorems of vector integration like Green&rsquo;s, Gauss&rsquo; and Stokes&rsquo; theorems.</span></p>
<p><span style="color: #000000;">5 Students will understand vector integration such as line integral, surface integral, Volume integral which is very much essential in various problems.</span></li>


</ol>

-->
               </div>

         </div>
        </div>
     <div class="clearfix"> </div>
 </div>
</div>

 
<div class="footer_bottom">
  <div class="container">
    <div class="copy">
            <p>Developed & Managed by <a href="https://sdc.gcoej.ac.in/index.php" target="_blank">Software Developement Cell</a>,Government College of Engineering, Jalgaon </p>
            <p><a href="deve.php" target="_blank">-Developers-</a></p>
            <p>Write to us- <a href="mailto:sdc.comp.gcoej@gmail.com">sdc.comp.gcoej@gmail.com</a></p>
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
