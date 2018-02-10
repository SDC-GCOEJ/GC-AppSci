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
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
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
			<!--  <h1><a href="index.php"><span class="highlight"></span>Department of Applied Science</a></h1>-->
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
                <li><a href="https://gcoej.ac.in/download/Final_Academic%20Calendar_FY_2017-180.pdf">Academic Calender</a></li>
                
              </ul>
            </li>
             <li class="dropdown current_page">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<span class="caret"></span></a>
              <ul class="dropdown-menu drop_menu" role="menu">
                <li><a href="about.php" >About Us</a></li>
                <li><a href="pos.php">PEOs and POs</a></li>
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
            
           <!-- <li class="dropdown">
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
    <h2>ABOUT US</h2>
    <span class="breadcrumbs"><a href="index.php"><i class="fa fa-home home_1"></i></a><span>/About/About Us</span></span>
  </div>
</div>

<div class="about_top">
 <div class="container">
  <div class="col-md-3 column-12">
  </div>
  <div class="col-md-9 column-15">
     <p>ABOUT THE DEPARTMENT</p>
       <div class="module_container">
          <div class="item_content">
        <!--  <p><span style="color: #000000;"><strong>Preamble - The department of Physics was established in 1996 to impart basic training in physics to degree students.</strong></span></p>
<p><span style="color: #000000;"><strong>The department conducts physics lectures for the first year degree.&nbsp;</strong></span></p>
<ul>
<li><span style="color: #000000;"><strong>Strength &ndash; At the time of establishment total strength of the students &ndash; 180</strong></span></li>
</ul>
<p><span style="color: #000000;"><strong>Now a day total First year Intake is - 360</strong></span></p>
<p><span style="color: #000000;">U.G. &ndash; Courses offered and Intake</span></p>
<table>
<article>
<tr>
  <th>Class</th>
  <th>Sanctioned Intake</th>
  <th>Actual Enrollment</th>
</tr>
<tr>
<td width="213">
<p><span style="color: #000000;">F.E. (Mechanical)</span></p>
</td>
<td width="213">
<p><span style="color: #000000;">60</span></p>
</td>
<td width="213">
<p><span style="color: #000000;">59</span></p>
</td>
</tr>
<tr>
<td width="213">
<p><span style="color: #000000;">F.E.(Electronic&Telecommunication)</span></p>
</td>
<td width="213">
<p><span style="color: #000000;">60</span></p>
</td>
<td width="213">
<p><span style="color: #000000;">48</span></p>
</td>
</tr>
<tr>
<td width="213">
<p><span style="color: #000000;">F.E. (Instrumentation)</span></p>
</td>
<td width="213">
<p><span style="color: #000000;">60</span></p>
</td>
<td width="213">
<p><span style="color: #000000;">50</span></p>
</td>
</tr>
<tr>
<td width="213">
<p><span style="color: #000000;">F.E. (Computer)</span></p>
</td>
<td width="213">
<p><span style="color: #000000;">60</span></p>
</td>
<td width="213">
<p><span style="color: #000000;">60</span></p>
</td>
</tr>
<tr>
<td width="213">
<p><span style="color: #000000;">F.E. ( Electrical)</span></p>
</td>
<td width="213">
<p><span style="color: #000000;">60</span></p>
</td>
<td width="213">
<p><span style="color: #000000;">62</span></p>
</td>
</tr>
<tr>
<td width="213">
<p><span style="color: #000000;">F.E. (Civil)</span></p>
</td>
<td width="213">
<p><span style="color: #000000;">60</span></p>
</td>
<td width="213">
<p><span style="color: #000000;">63</span></p>
</td>
</tr>
</article>
</table>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><strong><span style="color: #000000;">Infrastructural Facility -</span></strong></p>
<ul>
<li><span style="color: #000000;">Total area of the department &ndash; 435</span></li>
<li><span style="color: #000000;">Laboratories- Total 2 laboratories organized over 72&nbsp;&nbsp; sqm area.</span></li>
<li><span style="color: #000000;">Total cost of the equipments in the department- 5455770</span></li>
<li><span style="color: #000000;">Computing facility- Computers connected in LAN - 06</span></li>
</ul>
<p><span style="color: #000000;">Printers - 06</span></p>
<p><span style="color: #000000;">Xerox Machine RICOH - 01</span></p>
<p><span style="color: #000000;">Separate power backup &ndash; 2KVA</span></p>
<p><span style="color: #000000;">Broadband internet facility</span></p>
<p><strong><span style="color: #000000;">Result -</span></strong></p>
<table>
<article>
<tr>
  <th>Class/Year</th>
  
  <th>Class/Year</th>
  <th>2015-16</th>

</tr>
<tr>
<td width="367">
<p><span style="color: #000000;">F.E. (Mechanical)</span></p>
</td>
<td width="90">
<p><span style="color: #000000;">86.21</span></p>
</td>
<td width="91">
<p><span style="color: #000000;">85.25</span></p>
</td>
</tr>
<tr>
<td width="367">
<p><span style="color: #000000;">F.E. (Electronic & Telecommunication)</span></p>
</td>
<td width="90">
<p><span style="color: #000000;">75</span></p>
</td>
<td width="91">
<p><span style="color: #000000;">86.88</span></p>
</td>
</tr>
<tr>
<td width="367">
<p><span style="color: #000000;">F.E. (Instrumentation)</span></p>
</td>
<td width="90">
<p><span style="color: #000000;">81.36</span></p>
</td>
<td width="91">
<p><span style="color: #000000;">64.41</span></p>
</td>
</tr>
<tr>
<td width="367">
<p><span style="color: #000000;">F.E. (Computer)</span></p>
</td>
<td width="90">
<p><span style="color: #000000;">70.5</span></p>
</td>
<td width="91">
<p><span style="color: #000000;">90.16</span></p>
</td>
</tr>
<tr>
<td width="367">
<p><span style="color: #000000;">F.E. ( Electrical)</span></p>
</td>
<td width="90">
<p><span style="color: #000000;">85</span></p>
</td>
<td width="91">
<p><span style="color: #000000;">83.87</span></p>
</td>
</tr>
<tr>
<td width="367">
<p><span style="color: #000000;">F.E. (Civil)</span></p>
</td>
<td width="90">
<p><span style="color: #000000;">77.6</span></p>
</td>
<td width="91">
<p><span style="color: #000000;">85.24</span></p>
</td>
</tr>
</article>
</table>
<table width="654">
<article>
<tr>
  <td colspan="4" class="headertable">List of Faculty</td>
</tr>
<tr>
  <th>Sr. no.</th>
  <th>Name</th>
  <th>Designation</th>
  <th>Qualification</th>
</tr>
<tr>
<td width="73">
<p><span style="color: #000000;">1</span></p>
</td>
<td width="228">
<p><span style="color: #000000;">Smt Mrinalini S. Phalak</span></p>
</td>
<td width="216">
<p><span style="color: #000000;">Assistant prof.</span></p>
</td>
<td width="137">
<p><span style="color: #000000;">M.Sc,M.Ed,M.Phill PhD(Persuing)</span></p>
</td>
</tr>
<tr>
<td width="73">
<p><span style="color: #000000;">2</span></p>
</td>
<td width="228">
<p><span style="color: #000000;">Smt. Y.S. Patil</span></p>
</td>
<td width="216">
<p><span style="color: #000000;">Assistant prof.</span></p>
</td>
<td width="137">
<p><span style="color: #000000;">M.Sc, PhD(Persuing)</span></p>
</td>
</tr>
<tr>
<td width="73">
<p><span style="color: #000000;">3</span></p>
</td>
<td width="228">
<p><span style="color: #000000;">Shri S.D. Gadhire</span></p>
</td>
<td width="216">
<p><span style="color: #000000;">Assistant prof.</span></p>
</td>
<td width="137">
<p><span style="color: #000000;">M.Sc,B.Ed</span></p>
</td>
</tr>
<tr>
<td width="73">
<p><span style="color: #000000;">4</span></p>
</td>
<td width="228">
<p><span style="color: #000000;">Shri V.M. Kanke</span></p>
</td>
<td width="216">
<p><span style="color: #000000;">Assistant prof.</span></p>
</td>
<td width="137">
<p><span style="color: #000000;">M.Sc,B.Ed</span></p>
</td>
</tr>
<tr>
<td width="73">
<p><span style="color: #000000;">5</span></p>
</td>
<td width="228">
<p><span style="color: #000000;">Smt. N.M. Gosavi</span></p>
</td>
<td width="216">
<p><span style="color: #000000;">Assistant prof.</span></p>
</td>
<td width="137">
<p><span style="color: #000000;">M.Sc,B.Ed</span></p>
</td>
</tr>
<tr>
<td width="73">
<p><span style="color: #000000;">6</span></p>
</td>
<td width="228">
<p><span style="color: #000000;">Shri. G.S. Patil</span></p>
</td>
<td width="216">
<p><span style="color: #000000;">Assistant prof.(Contract)</span></p>
</td>
<td width="137">
<p><span style="color: #000000;">M.Sc</span></p>
</td>
</tr>
<tr>
<td width="73">
<p><span style="color: #000000;">7</span></p>
</td>
<td width="228">
<p><span style="color: #000000;">Shri. S.R. Zope</span></p>
</td>
<td width="216">
<p><span style="color: #000000;">Assistant prof.(Contract)</span></p>
</td>
<td width="137">
<p><span style="color: #000000;">BE, MBA, PhD(Persuing)</span></p>
</td>
</tr>
<tr>
<td width="73">
<p><span style="color: #000000;">8</span></p>
</td>
<td width="228">
<p><span style="color: #000000;">Smt. U.A. Kadam</span></p>
</td>
<td width="216">
<p><span style="color: #000000;">Assistant prof.(Contract)</span></p>
</td>
<td width="137">
<p><span style="color: #000000;">BE,MBA</span></p>
</td>
</tr>
<tr>
<td width="73">
<p><span style="color: #000000;">9</span></p>
</td>
<td width="228">
<p><span style="color: #000000;">Shri.M.B.Sonkamble </span></p>
</td>
<td width="216">
<p><span style="color: #000000;">Assistant prof.(Contract)</span></p>
</td>
<td width="137">
<p><span style="color: #000000;">MA,B.Ed,SET</span></p>
</td>
</tr>
<tr>
<td width="73">
<p><span style="color: #000000;">10</span></p>
</td>
<td width="228">
<p><span style="color: #000000;">Shri. G.S.Deshmukh</span></p>
</td>
<td width="216">
<p><span style="color: #000000;">Assistant prof.(Contract)</span></p>
</td>
<td width="137">
<p><span style="color: #000000;">MA,B.Ed,SET</span></p>
</td>
</tr>
</article>
</table>
<table>
<article>
  <tr>
  <td colspan="4" class="headertable">List of Supporting Staff</td>
</tr>
<tr>
  <th>Sr. no.</th>
  <th>Name</th>
  <th>Designation</th>
  <th>Qualification</th>
</tr>
<tr>
<td width="73">
<p><span style="color: #000000;">1</span></p>
</td>
<td width="246">
<p><span style="color: #000000;">Shri. S.G. Zope</span></p>
</td>
<td width="160">
<p><span style="color: #000000;">Lab assistant</span></p>
</td>
<td width="160">
<p><span style="color: #000000;">M.Sc.</span></p>
</td>
</tr>
<tr>
<td width="73">
<p><span style="color: #000000;">2</span></p>
</td>
<td width="246">
<p><span style="color: #000000;">Smt. D.A.Baviskar</span></p>
</td>
<td width="160">
<p><span style="color: #000000;">Tech.Lab. Asst.</span></p>
</td>
<td width="160">
<p><span style="color: #000000;">Diploma</span></p>
</td>
</tr>
</article>
</table>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><strong><span style="color: #000000;">Name and Signature of HOD &ndash; Smt. Mrinalini Sunil Phalak</span></strong></p>


        -->

    <?php
        $query=mysqli_query($mysqli,"SELECT * FROM sub_pages WHERE uid=67");
        while($row=mysqli_fetch_array($query))
        {
            echo $row['pageinfo'];
        }

    ?>

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
