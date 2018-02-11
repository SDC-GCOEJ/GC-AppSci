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
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
	h3.tittle {
    color: #000;
    font-size: 3em;
    text-align: center;
    margin-bottom: 16px;
}

h3.tittle span {
    color: #ef5861;
}

.tittle-style {
    position: relative;
}

.tittle-style:before {
    content: "";
    background: #000;
    width: 7%;
    height: 1px;
    position: absolute;
    top: 0;
    left: 46%;
}

.tittle-style:after {
    content: "";
    background: #ef5861;
    width: 3%;
    height: 5px;
    position: absolute;
    top: -2px;
    left: 48%;
    border-radius: 6px;
}

.title-div {
    margin-bottom: 70px;
}

.banner-bottom-w3l,
.contact {
    padding: 5em 0 0;
}

.banner_bottom_left h4 {
    font-size: 2em;
    color: #262c38;
    letter-spacing: 1px;
    margin-bottom: 20px;
    font-weight: 600;
}

.banner_bottom_left {
    padding-right: 4em;
}

.banner_bottom_left p {
    color: #666;
    line-height: 2em;
    margin-bottom: 1em;
}

.banner_bottom_left p:nth-child(3) {
    margin-bottom: 0;
    border-top: 2px solid #ef5861;
    padding-top: 13px;
}


/*-- //about --*/


/*-- stats --*/

.stats-info-agile {
    background: url(images/a1.jpg) no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    text-align: center;
    padding: 2em 3em 0;
    min-height: 650px;
    -webkit-box-shadow: 0px 3px 5px 0px rgba(10, 10, 10, 0.47);
    -moz-box-shadow: 0px 3px 5px 0px rgba(10, 10, 10, 0.47);
    box-shadow: 0px 3px 5px 0px rgba(10, 10, 10, 0.47);
}

.stats-grid {
    padding: 2em 0;
}

.numscroller {
    font-size: 2.5em;
    color: #fff;
    font-weight: 600;
    letter-spacing: 1px;
}

.stats-info-agile p {
    color: #e4e4e4;
    font-size: 15px;
}

.stat-border {
    position: relative;
}

.stat-border:before {
    position: absolute;
    top: 0%;
    width: .5%;
    height: 149px;
    background: rgba(255, 255, 255, 0.51);
    content: "";
    left: 97%;
}

.child-stat {
    border-top: 2px solid rgba(255, 255, 255, 0.51);
}


/*-- //stats --*/
/*-- services --*/

.services,
.news,
.testimonials,
.middle-sec-agile,
.aitsresumethree,
.about-sec,
.team,
.blog-cource,
.register-form-main,
.gallery,
.w3_wthree_agileits_icons,
.typo {
    padding: 5em 0;
}

.services {
    background: #ef5861;
    text-align: center;
    margin-top: -7em;
}

.services h3.tittle {
    text-align: left;
}

.services h3.tittle span {
    color: #fff;
}

.services .tittle-style:after {
    left: 9%;
    background: #37BF91;
}

.services .tittle-style:before {
    left: 7%;
    background: #fff;
}

.services-grids-w3l span {
    font-size: 40px;
    color: #37BF91;
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    transition: .5s all;
    background: #fff;
    padding: 12px 24px;
}

.services-grids-w3l h4 {
    color: #fff;
    font-size: 20px;
    margin: 20px 0 10px;
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    transition: .5s all;
    letter-spacing: 1px;
    font-weight: 600;
}

.services-grids-w3l p {
    padding: 0 2em;
    color: #dedede;
    font-size: 14px;
}

.services-grids-w3l:hover span {
    color: #000;
    -webkit-transform: scale(0.8);
    -moz-transform: scale(0.8);
    -o-transform: scale(0.8);
    -ms-transform: scale(0.8);
    transform: scale(0.8);
}

.services h3.agileits-title span {
    border-left-color: #fff;
}

.services-grids-w3l:hover h4 {
    -webkit-transform: scale(1.2);
    -moz-transform: scale(1.2);
    -o-transform: scale(1.2);
    -ms-transform: scale(1.2);
    transform: scale(1.2);
}

.servi-shadow {
    border: 2px solid #fff;
    padding: 2.5em 0;
    -webkit-box-shadow: 0px 0px 4px 0px rgba(50, 50, 50, 0.75);
    -moz-box-shadow: 0px 0px 4px 0px rgba(50, 50, 50, 0.75);
    box-shadow: 0px 0px 4px 0px rgba(50, 50, 50, 0.75);
}

.services-moksrow:nth-child(3) {
    margin-top: 2em;
}


/*-- //services --*/




</style>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); 
  } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
  
<div class="header" style="background-color: #222 "> <!--style="background-color: #222 "--> 
		<div class="container">
			<div class="col-sm-12 logo">
			<!-- <h1><a href="index.php"><span class="highlight">Department of Applied Science</span></a></h1>
        <h5 style="color: #fff">Government College of Engineering, Jalgaon</h5>-->
       <img src="images/sci_white.png" width="100%">
			</div>
		    <div class="col-sm-9 logo_right">
		       
			<!-- script for menu -->
			<span class="menu"></span>

					
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
            <li class="current_page"><a href="index.php">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle " data-toggle="dropdown">People<span class="caret"></span></a>
              <ul class="dropdown-menu drop_menu">
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
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admission<span class="caret"></span></a>
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
                <li><a href="Composition.php">Composition</a></li>
                <li><a href="mom.php">MoM</a></li>
              </ul>
             </li>
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other<span class="caret"></span></a>
              <ul class="dropdown-menu drop_menu" role="menu">
                <li><a href="pos.php">PEOs & POs</a></li>
                <li><a href="sources.php">Short Courses</a></li>
              </ul>
             </li>-->
             <li><a href="photo.php">Photogallery</a></li>
             
           </ul>
        
     </div><!-- /.navbar-collapse -->
   </div>
</nav>

<script type="text/javascript">
		$(function() {
		blinkeffect('#txtblnk');
		})
		function blinkeffect(selector) {
		$(selector).fadeOut('slow', function() {
		$(this).fadeIn('slow', function() {
		blinkeffect(this);
		});
		});
		}
</script>

<div class="container">
  <h2></h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/sl12.jpg" alt="IDEAS" style="width:100%;">
        <div class="carousel-caption">
          <h3>VISION</h3>
          <p>GLOBALLY ACCEPTED ENGINEERS WITH HUMAN SKILLS</p>
        </div>
      </div>

      <div class="item">
        <img src="images/sl9.jfif" alt="INNOVATIONS" style="width:100%;">
        <div class="carousel-caption">
          <h3>MISSION</h3>
          <p>TO PROMOTE OVERALL DEVELOPMENT OF STUDENTS.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/sl13.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>QUALITY POLICY</h3>
          <p>OFFERING VALUE BASED TECHNICAL EDUCATION</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

  <div class="clearfix"> </div>
</section>

</div>
<div class="banner-bottom-w3l" id="about">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>W</span>elcome
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="welcome-sub-wthree">
				<div class="col-md-6 banner_bottom_left">
					<h4>About
						<span>Applied Science Department</span>
					</h4>
					<p>Preamble-The department of Science & Humanities  was established in 1996 to impart basic training in Science & Humanities to degree students. </p>
					<p>The department conducts physics, Chemistry, Mathematics, General Proficiency, Management lectures for the first year degree. Strength – At the time of establishment total strength of the students – 180.Now a day total First year Intake is - 360 </p>
          <br>
          <br>
          <h4><a href="about.php">Read more</a></h4>
				</div>
				<!-- Stats-->
				<div class="col-md-6 stats-info-agile">
					
					<center><h2>NOTICES</h2></center>
						<center>
						<marquee direction="up" scrolldelay="150" onmouseover="this.stop();" onmouseout="this.start();"><br><br>
          <?php
              $pname="Science & Humanities - Notice Board";
            $query=mysqli_query($mysqli,"SELECT * FROM pp_files WHERE ppage='$pname'");
             $i=1;
        
            while($row=mysqli_fetch_array($query))
            {
            ?>
            <tr>
          
          <td><a href="<?php echo "https://gcoej.ac.in/".$row['url']; ?> " target="_blank"><?php echo $row['file_name']; ?></a></td>
          <br><br> 
</tr>
<?php
            $i++;
        }

    ?>


            <br><br></marquee><br>
						  <h3><a href="notice.php">VIEW ALL</a></h3>
							</center>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Stats -->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->
  <script src="js/bootstrap.js"></script>
  <!-- stats numscroller-js-file -->
  <script src="js/numscroller-1.0.js"></script>
  <!-- //stats numscroller-js-file -->
<!-- services -->
 <br><br><br>
<div class="footer_bottom">
	<div class="container">
		<div class="copy">
<p>Developed & Managed by <a href="https://sdc.gcoej.ac.in/index.php" target="_blank">Software Developement Cell</a>,Government College of Engineering, Jalgaon </p>
            <p><a href="deve.php" target="_blank">-Developers-</a></p>
            <p>Write to us- <a href="mailto:admin@gcoej.ac.in">admin@gcoej.ac.in</a></p>	    </div>
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
