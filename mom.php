<?php
session_start();
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
            
          <!--  <li class="dropdown">
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
                <li><a href="about.php">Time Table</a></li>
                <li><a href="https://gcoej.ac.in/download/Final_Academic%20Calendar_FY_2017-180.pdf" target="_blank">>Academic Calender</a></li>
                
              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<span class="caret"></span></a>
              <ul class="dropdown-menu drop_menu" role="menu">
                <li><a href="about.php">About</a></li>
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
            
            <li class="dropdown current_page">
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
        
     </div>
   
   </div>
</nav>

<body>
<div class="about_banner">
  <div class="container">
    <h2>MoM</h2>
    <span class="breadcrumbs"><a href="index.php"><i class="fa fa-home home_1"></i></a><span>/BOS/MoM</span></span>
  </div>
</div>

    

 <table align="center">
 <article>

 <tr>
    <th>Sr.No</th>
    <th>Title</th>
    <th>Download</th>
</tr>
<?php
$pname="Science & Humanities - BoS MoM";
     $query=mysqli_query($mysqli,"SELECT * FROM pp_files WHERE ppage='$pname'");
        $i=1;
        
        while($row=mysqli_fetch_array($query))
        {
          ?>
          <tr>
  <td><?php echo $i;?></td>
  <td><?php echo $row['file_name']; ?></td>
  <td><a href="<?php echo "https://gcoej.ac.in/".$row['url']; ?> " target="_blank">Download</a></td>
</tr>
<?php
            $i++;
        }

    ?>
<!--tr>
  <td>1</td>
  <td>MoM BoS:1</td>
  <td><a href="https://gcoej.ac.in/download/MoM%20BoS10.docx">Download</a></td>
</tr>
<tr>
  <td>2</td>
  <td>MoM BoS:2</td>
  <td><a href="https://gcoej.ac.in/download/MOM_OF_BoS20.docx">Download</a></td>
</tr>
<tr>
  <td>3</td>
  <td>Action Taken BoS 2</td>
  <td><a href="https://gcoej.ac.in/download/Action%20Taken%20BoS20.docx">Download</a></td>
</tr>
<tr>
  <td>4</td>
  <td>MoM BoS:3</td>
  <td><a href="https://gcoej.ac.in/download/MOM_OF_BoS30.docx">Download</a></td>
</tr>
<tr>
  <td>5</td>
  <td>Action Taken BoS 2</td>
  <td><a href="https://gcoej.ac.in/download/Action%20taken%203rd%20BoS0.docx">Download</a></td>
</tr>
<tr>
  <td>6</td>
  <td>MoM BoS:4</td>
  <td><a href="https://gcoej.ac.in/download/MoM%20BoS40.pdf">Download</a></td>
</tr>
<tr>
  <td>7</td>
  <td>Action Taken BoS 4</td>
  <td><a href="https://gcoej.ac.in/download/Action%20taken%204rd%20BoS0.docx">Download</a></td>
</tr>
<tr>
  <td>8</td>
  <td>MoM BoS:5</td>
  <td><a href="https://gcoej.ac.in/download/MOM_OF_BoS50.docx">Download</a></td>
</tr-->

</article>
</table>
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
<!--
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
    </script>-->
<!-- FlexSlider -->   
</body>
</html>

