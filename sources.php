
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
                <li><a href="https://gcoej.ac.in/download/Final_Academic%20Calendar_FY_2017-180.pdf" target="_blank">Academic Calender</a></li>
                
              </ul>
            </li>
             <li class="dropdown  current_page">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<span class="caret"></span></a>
              <ul class="dropdown-menu drop_menu" role="menu">
                <li><a href="about.php">About Us</a></li>
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
    <h2>SHORT TERM COURSES</h2>
    <span class="breadcrumbs"><a href="index.php"><i class="fa fa-home home_1"></i></a><span>About/Short Term Courses</span></span>
  </div>
</div>

<div class="about_top">
 <div class="container">
  <div class="col-md-3 column-12">
  </div>
  <div class="col-md-9 column-15">
     
       <div class="module_container">
          <div class="item_content">
            <h5 class="item_title1">Courses Available</h5>
            <?php
        $query=mysqli_query($mysqli,"SELECT * FROM sub_pages WHERE uid=74");
        while($row=mysqli_fetch_array($query))
        {
            echo $row['pageinfo'];
        }

    ?>

     <!--   <p><table style="width: 539px;">
<tbody>
<tr>
<td style="width: 537px;" colspan="4">
<h3 style="text-align: center;"><span style="font-size: 14pt; font-family: 'times new roman', times, serif;"><strong>Deparment of Applied Science</strong></span></h3>
<p style="text-align: center;"><strong>List of Short Term Courses Conducted by Department</strong></p>
</td>
</tr>
<tr>
<td style="width: 61px;"><span style="color: #ff6600;"><strong>S. N.</strong></span></td>
<td style="width: 206px; text-align: center;"><span style="color: #ff6600;"><strong>Name of Courses</strong></span></td>
<td style="width: 134px;"><span style="color: #ff6600;"><strong>Duration</strong></span></td>
<td style="width: 136px;"><span style="color: #ff6600;"><strong>Co-ordinator</strong></span></td>
</tr>
<tr>
<td style="width: 61px;">1</td>
<td style="width: 206px;">Mathematical &amp; statistical approach in Engg. Applications</td>
<td style="width: 134px;">26 to 30 Dec 2013</td>
<td style="width: 136px;">Shri S. D. Gadhire</td>
</tr>
<tr>
<td style="width: 61px;">2</td>
<td style="width: 206px;">Workshop on Improvement in &nbsp;Personality Development &nbsp;of the All Ladies Faculty</td>
<td style="width: 134px;">07 to 09 July,2016</td>
<td style="width: 136px;">Smt M.S.Phalak</td>
</tr>
</tbody>
</table></p>
-->        </div>

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

</body>
</html>