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
      <img src="images/sci.png" width="100%">
			 <!-- <h1><a href="index.php"><span class="highlight"></span>Department of Applied Science</a></h1>-->
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
                <li><a href="https://gcoej.ac.in/download/Final_Academic%20Calendar_FY_2017-180.pdf" target="_blank">Academic Calender</a></li>
                
              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<span class="caret"></span></a>
              <ul class="dropdown-menu drop_menu" role="menu">
                <li><a href="tt.pdf" target="_blank">About Us</a></li>
                <li><a href="pos.php">PEOs and POs</a></li>
                <li><a href="sources.php">Short term Courses</a></li>
                
              </ul>
            </li>
            
                       
            <li class="dropdown current_page">
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
    <h2>LABORATORIES</h2>
    <span class="breadcrumbs"><a href="index.php"><i class="fa fa-home home_1"></i></a><span>/Infrastrucure/Laboratories</span></span>
  </div>
</div>
<!--
<table align="center">
<article>

<tr>
  <td colspan="4" class="headertable">Applied Physics</td>
</tr>
<tr>
  <th>Sr. no.</th>
  <th>Name of the apparatus</th>
  <th>Qty</th>
  <th>Prize</th>
</tr>
<tr>
  <td>1</td>
  <td>13mm hardened alloy steel evacuable die set</td>
  <td>1</td>
  <td>11250</td>
</tr>
<tr>
<td>2</td>
<td>15 tons Manual Hydraulic lab pellet press</td>
<td>1</td>
<td>39375</td>
</tr>
<tr>
<td>3</td>
<td>20MHz dual trace oscilloscope with frequency counter</td>
<td>3</td>
<td>48096</td>
</tr>
<tr>
<td>4</td>
<td>2KVA online UPS static converter with 1 phase I/P 1 phase o/p with 120 min backup</td>
<td>1</td>
<td>60701</td>
</tr>
<tr>
<td>5</td>
<td>2MHz AM/FM function generator</td>
<td>3</td>
<td>24423</td>
</tr>
<tr>
<td>6</td>
<td>Agate mortar &amp; pestle</td>
<td>1</td>
<td>2250</td>
</tr>
<tr>
<td>7</span></td>
<td>Altrasonicator</td>
<td>1</td>
<td>9186</td>
</tr>
<tr>
<td>8</td>
<td>Computer dell core due E series PC Intel</td>
<td>2</td>
<td>64232</td>
</tr>
<tr>
<td>9</td>
<td>Dell Tablet</td>
<td>3</td>
<td>66300</td>
</tr>
<tr>
<td>10</td>
<td>Desktop computer Intel dual core 2</td>
<td>1</td>
<td>33217</td>
</tr>
<tr>
<td>11</td>
<td>Desktop computer wipro make</td>
<td>2</td>
<td>59859</td>
</tr>
<tr>
<td>12</td>
<td>Desktop computer with CD software</td>
<td>2</td>
<td>92260</td>
</tr>
<tr>
<td>13</td>
<td>Desktop PC IBM</td>
<td>1</td>
<td>65850</td>
</tr>
<tr>
<td>14</td>
<td>Digital copier</td>
<td>1</span></td>
<td>73767</td>
</tr>
<tr>
<td>15</td>
<td>Digital Electronic Balance</span></td>
<td>1</td>
<td>48263</td>
</tr>
<tr>
<td>16</td>
<td>Digital Picometer</td>
<td>2</span></td>
<td>34740</td>
</tr>
<tr>
<td>17</td>
<td>Digital Sound Level Meter</td>
<td>2</td>
<td>15188</td>
</tr>
<tr>
<td>18</td>
<td>Dot meterix printer wipro TVS MSP335</td>
<td>1</td>
<td>13090</td>
</tr>
<tr>
<td>19</td>
<td>Energy band gap setup</td>
<td>2</td>
<td>7200</td>
</tr>
<tr>
<td>20</td>
<td>Fiber optic communication setup</td>
<td>1</td>
<td>7800</td>
</tr>
<tr>
<td>21</td>
<td>Four Probe Appt</td>
<td>1</td>
<td>22163</td>
</tr>
<tr>
<td>22</td>
<td>Four Probe Appt</td>
<td>1</td>
<td>17438</td>
</tr>
<tr>
<td>23</td>
<td>Function Generator</td>
<td>2</td>
<td>6750</td>
</tr>
<tr>
<td>24</td>
<td>He-Ne LASER kit</td>
<td>2</td>
<td>118700</td>
</tr>
<tr>
<td>25</td>
<td>HP computer model DX2280</td>
<td>1</td>
<td>35400</td>
</tr>
<tr>
<td>26</td>
<td>Hysterisis curve apparatus</td>
<td>2</td>
<td>11769</td>
</tr>
<tr>
<td>27</td>
<td>Hysterisis curve TRACER KIT</span></td>
<td>3</td>
<td>69084</td>
</tr>
<tr>
<td>28</td>
<td>Lab Oven with Digital temp</td>
<td>1</td>
<td>20813</td>
</tr>
<tr>
<td>29</td>
<td>Laser Light Source</td>
<td>3</td>
<td>6554</td>
</tr>
<tr>
<td>30</td>
<td>Laser printer samsung ML1610</td>
<td>2</td>
<td>16570</td>
</tr>
<tr>
<td>31</td>
<td>LCD Projector</td>
<td>2</span></td>
<td><span style="color: #000000;">109676</span></td>
</tr>
<tr>
<td>32</td>
<td>Lenovo PC</td>
<td>2</td>
<td>90786</td>
</tr>
<tr>
<td>33</td>
<td>Magnetic stirrer</td>
<td>2</td>
<td>10800</td>
</tr>
<tr>
<td>34</td>
<td>Magnetic stirrer digital</td>
<td>2</td>
<td>9940</td>
</tr>
<tr>
<td>35</td>
<td>Magnetic susceptibility set</td>
<td>1</td>
<td>45000</td>
</tr>
<tr>
<td>36</td>
<td>Malus Law Apparatis</td>
<td>2</td>
<td>22600</td>
</tr>
<tr>
<td>37</td>
<td>Michelson Interferometer make-16985</td>
<td>2</td>
<td>31900</td>
</tr>
<tr>
<td>38</td>
<td>Microwave Oven</td>
<td>1</td>
<td>9990</td>
</tr>
<tr>
<td>39</td>
<td>MuffelFurness</td>
<td>1</td>
<td>24600</td>
</tr>
<tr>
<td>40</td>
<td>Multifunction Printer</td>
<td>2</td>
<td>31822</td>
</tr>
<tr>
<td>41</td>
<td>Newton's Ring Apparatus</td>
<td>2</td>
<td>14625</td>
</tr>
<tr>
<td>42</td>
<td>Oscilloscope</td>
<td>2</td>
<td>31117</td>
</tr>
<tr>
<td>43</td>
<td>Over head mini moter stirrer</td>
<td>1</td>
<td>48506</td>
</tr>
<tr>
<td>44</td>
<td>P4 computer</td>
<td>1</td>
<td>35900</td>
</tr>
<tr>
<td>45</td>
<td>pn junction diode characteristic kit</td>
<td>8</td>
<td>18450</td>
</tr>
<tr>
<td>46</td>
<td>Reaserch centrifuge</td>
<td>1</td>
<td>13000</td>
</tr>
<tr>
<td>47</td>
<td>Regulated P/S 0-30 volt</td>
<td>2</td>
<td>7875</td>
</tr>
<tr>
<td>48</td>
<td>Rota Mantal 1 RML</td>
<td>1</td>
<td>5591</td>
</tr>
<tr>
<td>49</td>
<td>Sanetory Napkin Machine</td>
<td>1</td>
<td>30038</td>
</tr>
<tr>
<td>50</td>
<td>Semiconductor energy gap mesurement</td>
<td>1</td>
<td>6305</td>
</tr>
<tr>
<td>51</td>
<td>Sodium vapour lamp</td>
<td>2</td>
<td>6075</td>
</tr>
<tr>
<td>52</td>
<td>Solar cell Characteristic Apparatus</td>
<td>2</td>
<td>7200</td>
</tr>
<tr>
<td>53</td>
<td>Solar Energy Trainer Kit</td>
<td>1</td>
<td>16724</td>
</tr>

<tr>
<td>54</td>
<td><span style="color: #000000;">Sound level meter</span></td>
<td><span style="color: #000000;">2</span></td>
<td><span style="color: #000000;">8100</span></td>
</tr>
<tr>
<td><span style="color: #000000;">55</span></td>
<td><span style="color: #000000;">Spectrometer</span></td>
<td><span style="color: #000000;">4</span></td>
<td><span style="color: #000000;">45899</span></td>
</tr>
<tr>
<td><span style="color: #000000;">56</span></td>
<td><span style="color: #000000;">Ultrasonic Detector with digital indicator</span></td>
<td><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">13500</span></td>
</tr>
<tr>
<td><span style="color: #000000;">57</span></td>
<td><span style="color: #000000;">Ultrasonic Interferometer</span></td>
<td><span style="color: #000000;">4</span></td>
<td><span style="color: #000000;">81375</span></td>
</tr>
<tr>
<td><span style="color: #000000;">58</span></td>
<td><span style="color: #000000;">UPS 525VA</span></td>
<td><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">3300</span></td>
</tr>
<tr>
<td><span style="color: #000000;">59</span></td>
<td><span style="color: #000000;">Vaccume Oven</span></td>
<td><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">40500</span></td>
</tr>
<tr>
<td><span style="color: #000000;">60</span></td>
<td><span style="color: #000000;">Wind Energy Trainer Kit</span></td>
<td><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">13560</span></td>
</tr>
<tr>
<td></td>
<td></td>
<td><span style="color: #000000;">Total</span></td>
<td><span style="color: #000000;">1937042</span></td>
</tr>
<tr>
<td><span style="color: #000000;">&nbsp;</span></td>
<td><span style="color: #000000;">&nbsp;</span></td>
<td><span style="color: #000000;">&nbsp;</span></td>
<td><span style="color: #000000;">&nbsp;</span></td>
</tr>
</article>
</table>
<table align="center">
<article>
<tr>
  <td colspan="4" class="headertable">Computer printers</td>
</tr>

<tr>
<th><span style="color: #000000;">Sr. no.</span></th>
<th><span style="color: #000000;">Name of the apparatus</span></th>
<th><span style="color: #000000;">Qty</span></th>
<th><span style="color: #000000;">Prize</span></th>
</tr>
<tr>
<td><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">Desktop PC IBM</span></td>
<td><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">65850</span></td>
</tr>
<tr>
<td><span style="color: #000000;">2</span></td>
<td><span style="color: #000000;">Computer dell core due E series PC Intel</span></td>
<td><span style="color: #000000;">2</span></td>
<td><span style="color: #000000;">64232</span></td>
</tr>
<tr>
<td><span style="color: #000000;">3</span></td>
<td><span style="color: #000000;">Dell Tablet</span></td>
<td><span style="color: #000000;">3</span></td>
<td><span style="color: #000000;">66300</span></td>
</tr>
<tr>
<td><span style="color: #000000;">4</span></td>
<td><span style="color: #000000;">Desktop computer Intel dual core 2</span></td>
<td><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">33217</span></td>
</tr>
<tr>
<td><span style="color: #000000;">5</span></td>
<td><span style="color: #000000;">Desktop computer wipro make</span></td>
<td><span style="color: #000000;">2</span></td>
<td><span style="color: #000000;">59859</span></td>
</tr>
<tr>
<td><span style="color: #000000;">6</span></td>
<td><span style="color: #000000;">Desktop computer with CD software</span></td>
<td><span style="color: #000000;">2</span></td>
<td><span style="color: #000000;">92260</span></td>
</tr>
<tr>
<td><span style="color: #000000;">7</span></td>
<td><span style="color: #000000;">Dot meterix printer wipro TVS MSP335</span></td>
<td><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">13090</span></td>
</tr>
<tr>
<td><span style="color: #000000;">8</span></td>
<td><span style="color: #000000;">HP computer model DX2280</span></td>
<td><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">35400</span></td>
</tr>
<tr>
<td><span style="color: #000000;">9</span></td>
<td><span style="color: #000000;">Laser printer samsung ML1610</span></td>
<td><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">7820</span></td>
</tr>
<tr>
<td><span style="color: #000000;">10</span></td>
<td><span style="color: #000000;">Lasre printer samsung make ML2850</span></td>
<td><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">8750</span></td>
</tr>
<tr>
<td><span style="color: #000000;">11</span></td>
<td><span style="color: #000000;">Lenovo PC</span></td>
<td><span style="color: #000000;">2</span></td>
<td><span style="color: #000000;">90786</span></td>
</tr>
<tr>
<td><span style="color: #000000;">12</span></td>
<td><span style="color: #000000;">Multifunction Printer</span></td>
<td><span style="color: #000000;">2</span></td>
<td><span style="color: #000000;">31822</span></td>
</tr>
<tr>
<td><span style="color: #000000;">13</span></td>
<td><span style="color: #000000;">P4 computer</span></td>
<td><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">35900</span></td>
</tr>
<tr>
<td><span style="color: #000000;">14</span></td>
<td><span style="color: #000000;">UPS 525VA</span></td>
<td><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">3300</span></td>
</tr>
<tr>
<td><span style="color: #000000;">&nbsp;</span></td>
<td><span style="color: #000000;">&nbsp;</span></td>
<td><span style="color: #000000;">Total</span></td>
<td><span style="color: #000000;">608586</span></td>
</tr>
</article>
</table>
<table align="center">
<article>
<tr>
  <td colspan="4" class="headertable">Applied Chemistry</td>
</tr>

<tr>
<th ><span style="color: #000000;">Sr. no.</span></th>
<th><span style="color: #000000;">Name of the apparatus</span></th>
<th><span style="color: #000000;">Qty</span></th>
<th><span style="color: #000000;">Prize</span></th>
</tr>
<tr>
<td ><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">250 LPH RO plant water purifier unit</span></td>
<td><span style="color: #000000;">2</span></td>
<td><span style="color: #000000;">272025</span></td>
</tr>
<tr>
<td><span style="color: #000000;">2</span></td>
<td><span style="color: #000000;">Cloud &amp; pour point apparatus single test</span></td>
<td><span style="color: #000000;">1</span></td>
<td ><span style="color: #000000;">10125</span></td>
</tr>
<tr>
<td><span style="color: #000000;">3</span></td>
<td><span style="color: #000000;">Colorimeter digital type c five filter equipment</span></td>
<td><span style="color: #000000;">2</span></td>
<td><span style="color: #000000;">15140</span></td>
</tr>
<tr>
<td><span style="color: #000000;">4</span></td>
<td><span style="color: #000000;">Digital Colorimeter &amp; filter chemiline</span></td>
<td><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">7695</span></td>
</tr>
<tr>
<td><span style="color: #000000;">5</span></td>
<td ><span style="color: #000000;">Digital Ph meter</span></td>
<td><span style="color: #000000;">2</span></td>
<td><span style="color: #000000;">16425</span></td>
</tr>
<tr>
<td><span style="color: #000000;">6</span></td>
<td><span style="color: #000000;">Digital TDS meter make EI</span></td>
<td><span style="color: #000000;">1</span></td>
<td ><span style="color: #000000;">7594</span></td>
</tr>
<tr>
<td ><span style="color: #000000;">7</span></td>
<td><span style="color: #000000;">Digital turbidity meter no. si-33</span></td>
<td><span style="color: #000000;">1</span></td>
<td ><span style="color: #000000;">12938</span></td>
</tr>
<tr>
<td><span style="color: #000000;">8</span></td>
<td ><span style="color: #000000;">Digital weight balance 1kg</span></td>
<td><span style="color: #000000;">1</span></td>
<td ><span style="color: #000000;">9900</span></td>
</tr>
<tr>
<td ><span style="color: #000000;">9</span></td>
<td ><span style="color: #000000;">Dissolved O2 meter</span></td>
<td ><span style="color: #000000;">1</span></td>
<td ><span style="color: #000000;">7897</span></td>
</tr>
<tr>
<td ><span style="color: #000000;">10</span></td>
<td><span style="color: #000000;">Electrical oven 0 to 200C with thermostatic</span></td>
<td ><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">6150</span></td>
</tr>
<tr>
<td ><span style="color: #000000;">11</span></td>
<td><span style="color: #000000;">Electronic fernace 0 to 900C</span></td>
<td><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">9460</span></td>
</tr>
<tr>
<td ><span style="color: #000000;">12</span></td>
<td><span style="color: #000000;">Electronic Stop watch</span></td>
<td ><span style="color: #000000;">10</span></td>
<td ><span style="color: #000000;">6100</span></td>
</tr>
<tr>
<td><span style="color: #000000;">13</span></td>
<td><span style="color: #000000;">Lab Oven</span></td>
<td ><span style="color: #000000;">1</span></td>
<td ><span style="color: #000000;">7875</span></td>
</tr>
<tr>
<td><span style="color: #000000;">14</span></td>
<td ><span style="color: #000000;">Magnetic annalytical balance</span></td>
<td ><span style="color: #000000;">1</span></td>
<td ><span style="color: #000000;">94500</span></td>
</tr>
<tr>
<td><span style="color: #000000;">15</span></td>
<td ><span style="color: #000000;">Magnetic Stirrer with hotplate</span></td>
<td ><span style="color: #000000;">3</span></td>
<td ><span style="color: #000000;">5700</span></td>
</tr>
<tr>
<td ><span style="color: #000000;">16</span></td>
<td><span style="color: #000000;">Melting point apparatus</span></td>
<td ><span style="color: #000000;">1</span></td>
<td ><span style="color: #000000;">27000</span></td>
</tr>
<tr>
<td><span style="color: #000000;">17</span></td>
<td ><span style="color: #000000;">One pan K-Roy balance upto 100gm accuracy 0.01mg</span></td>
<td><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">9950</span></td>
</tr>
<tr>
<td ><span style="color: #000000;">18</span></td>
<td><span style="color: #000000;">Over head projector</span></td>
<td ><span style="color: #000000;">1</span></td>
<td ><span style="color: #000000;">5500</span></td>
</tr>
<tr>
<td><span style="color: #000000;">19</span></td>
<td ><span style="color: #000000;">Pensky martone apparatus</span></td>
<td ><span style="color: #000000;">1</span></td>
<td ><span style="color: #000000;">17663</span></td>
</tr>
<tr>
<td ><span style="color: #000000;">20</span></td>
<td ><span style="color: #000000;">Ph meter digital</span></td>
<td ><span style="color: #000000;">2</span></td>
<td ><span style="color: #000000;">12990</span></td>
</tr>
<tr>
<td ><span style="color: #000000;">21</span></td>
<td><span style="color: #000000;">Red wood viscometer</span></td>
<td ><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">9000</span></td>
</tr>
<tr>
<td><span style="color: #000000;">22</span></td>
<td><span style="color: #000000;">Rough balance 2kg</span></td>
<td ><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">1450</span></td>
</tr>
<tr>
<td ><span style="color: #000000;">23</span></td>
<td ><span style="color: #000000;">Systronic digital spectrophotometer</span></td>
<td ><span style="color: #000000;">1</span></td>
<td ><span style="color: #000000;">23736</span></td>
</tr>
<tr>
<td ><span style="color: #000000;">24</span></td>
<td><span style="color: #000000;">Water Distilation unit</span></td>
<td ><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">7087</span></td>
</tr>
<tr>
<td><span style="color: #000000;">25</span></td>
<td ><span style="color: #000000;">Water testing kit</span></td>
<td><span style="color: #000000;">1</span></td>
<td ><span style="color: #000000;">16200</span></td>
</tr>
<tr>
<td><span style="color: #000000;">26</span></td>
<td><span style="color: #000000;">Whirlpool 180 lit Refrigerator</span></td>
<td><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">9900</span></td>
</tr>
<tr>
<td></td>
<td></td>
<td ><strong><span style="color: #000000;">Total</span></strong></td>
<td ><strong><span style="color: #000000;">630000</span></strong></td>
</tr>
</article>
</table>
<table align="center">
<article>
<tr>
  <td colspan="4" class="headertable">Language Lab</td>
</tr>
<tr>
<th><strong><span style="color: #000000;">Sr. no.</span></strong></th>
<th><strong><span style="color: #000000;">Name of the apparatus</span></strong></th>
<th><strong><span style="color: #000000;">Qty</span></strong></th>
<th><strong><span style="color: #000000;">Prize</span></strong></th>
</tr>
<tr>
<td><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">Dell PC (Dual Core/Core 2 Duo or adv.</span></td>
<td><span style="color: #000000;">18</span></td>
<td><span style="color: #000000;">578097</span></td>
</tr>
<tr>
<td><span style="color: #000000;">2</span></td>
<td><span style="color: #000000;">Lenovo PC</span></td>
<td><span style="color: #000000;">25</span></td>
<td><span style="color: #000000;">1134825</span></td>
</tr>
<tr>
<td><span style="color: #000000;">3</span></td>
<td><span style="color: #000000;">Airtight Access Point</span></td>
<td><span style="color: #000000;">3</span></td>
<td><span style="color: #000000;">113161</span></td>
</tr>
<tr>
<td><span style="color: #000000;">4</span></td>
<td><span style="color: #000000;">Dell Optiplex 3020 Minitower Desktop</span></td>
<td><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">34600</span></td>
</tr>
<tr>
<td><span style="color: #000000;">5</span></td>
<td><span style="color: #000000;">HP Prolient ML10 Server</span></td>
<td><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">78000</span></td>
</tr>
<tr>
<td><span style="color: #000000;">6</span></td>
<td><span style="color: #000000;">LG BE 320 DLP Projector</span></td>
<td><span style="color: #000000;">2</span></td>
<td><span style="color: #000000;">63399</span></td>
</tr>
<tr>
<td><span style="color: #000000;">7</span></td>
<td><span style="color: #000000;">Sony Handy Camera</span></td>
<td><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">32990</span></td>
</tr>
<tr>
<td><span style="color: #000000;">8</span></td>
<td><span style="color: #000000;">8 Sony Tripod Stand</span></td>
<td><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">1990</span></td>
</tr>
<tr>
<td><span style="color: #000000;">&nbsp;</span></td>
<td><span style="color: #000000;">&nbsp;</span></td>
<td><strong><span style="color: #000000;">Total</span></strong></td>
<td><strong><span style="color: #000000;">2037062</span></strong></td>
</tr>
<tr>
<td><span style="color: #000000;">&nbsp;</span></td>
<td><span style="color: #000000;">&nbsp;</span></td>
<td><span style="color: #000000;">&nbsp;</span></td>
<td><span style="color: #000000;">&nbsp;</span></td>
</tr>
<tr>
<th><strong><span style="color: #000000;">Sr. no.</span></strong></th>
<th><strong><span style="color: #000000;">Furniture</span></strong></th>
<th><strong><span style="color: #000000;">Qty</span></strong></th>
<th><strong><span style="color: #000000;">Prize</span></strong></th>
</tr>
<tr>
<td><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">Plastic Chairs</span></td>
<td><span style="color: #000000;">40</span></td>
<td><span style="color: #000000;">34000</span></td>
</tr>
<tr>
<td><span style="color: #000000;">2</span></td>
<td><span style="color: #000000;">Revolving Chairs</span></td>
<td><span style="color: #000000;">40</span></td>
<td><span style="color: #000000;">224000</span></td>
</tr>
<tr>
<td><span style="color: #000000;">3</span></td>
<td><span style="color: #000000;">Language Lab Furniture</span></td>
<td><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">161146</span></td>
</tr>
<tr>
<td><span style="color: #000000;">&nbsp;</span></td>
<td><span style="color: #000000;">&nbsp;</span></td>
<td><span style="color: #000000;">Total</span></td>
<td><span style="color: #000000;">419146</span></td>
</tr>
<tr>
<td><span style="color: #000000;">&nbsp;</span></td>
<td><span style="color: #000000;">&nbsp;</span></td>
<td><span style="color: #000000;">&nbsp;</span></td>
<td><span style="color: #000000;">&nbsp;</span></td>
</tr>
<tr>
<th><strong><span style="color: #000000;">Sr. no.</span></strong></th>
<th><strong><span style="color: #000000;">Name of Software</span></strong></th>
<th><strong><span style="color: #000000;">Qty</span></strong></th>
<th><strong><span style="color: #000000;">Prize</span></strong></th>
</tr>
<tr>
<td><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">Digital Language Lab Software</span></td>
<td><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">54080</span></td>
</tr>
<tr>
<td><span style="color: #000000;">2</span></td>
<td><span style="color: #000000;">Advance Pro Version</span></td>
<td><span style="color: #000000;">1</span></td>
<td><span style="color: #000000;">189000</span></td>
</tr>
<tr>
<td><span style="color: #000000;">&nbsp;</span></td>
<td><span style="color: #000000;">&nbsp;</span></td>
<td><strong><span style="color: #000000;">Total</span></strong></td>
<td><strong><span style="color: #000000;">243080</span></strong></td>
</tr>
</article>
</table>          
 -->
 <center><?php
        $query=mysqli_query($mysqli,"SELECT * FROM sub_pages WHERE uid=68");
        while($row=mysqli_fetch_array($query))
        {
            echo $row['pageinfo'];
        }

    ?>
</center>

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
