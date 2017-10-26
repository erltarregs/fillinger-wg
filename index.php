<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Testing the Grid Layouts!</title>
	<link rel="stylesheet" type="text/css" href="css/imported.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<!-- <script type="text/javascript" src="js/test.js"></script> -->
</head>
<body>
<?php
//echo "Echo from PHP: Hello, world! <br/> It's night time. Php ends here.";
?>

<div class="site-grid">
<!-- HEADER AND BANNER -->
	<header>
	  <div class="header-outer">
		<div class="header-inner">
		<div class="top-bar">
			<div class="tb-address">
				<b>2108 Alabama Highway 157-<br>
				Cullman, AL  35058</b>
			</div>
			<div class="tb-brand">
				<a href="#">
					<div id="brand-icon">
						<img src="images/fillingerfootclinic-icon.png">
					</div>
					<div id="brand-name" class="upper-all">
						<b>Fillinger<br>
						Foot Clinic</b>
					</div>
				</a>
			</div>
			<div class="tb-contact">
				<b>Phone </b><a href="tel:+12567377339">256-737-7339</a><br>
				<b>Fax </b>256-737-7340
			</div>
		</div>
		<div class="navigation">
			<div class="nav-container">
				<div id="mobileNav">
				  <div class="left-hm"></div>
				  <div class="right-hm">
					<div class="navicon-cont" style="font-size:30px; cursor:pointer;" onclick="openNav()">
						<span>&#9776;</span>
					</div>
				  </div>
				</div>
					<div id="myNav" class="overlay"
					onclick="closeNav()">
						<a href="javascript:void(0)" 
						class="closebtn"
						onclick="closeNav()">&times;</a> <!-- CLOSE BUTTON -->
						<div class="overlay-content upper-all">
							<a href="#">Home</a>
							<a href="#">About Us</a>
							<a href="#">Directions</a>
							<a href="#">Patient Forms</a>
							<a href="#">Shoe List</a>
							<a href="#">Links</a>
							<a href="#">Common Problems</a>
							<a href="#" id="px-portal">Patient Portal</a>
						</div>
					</div>
				<div id="deskNav" class="upper-all">
					<nav>
							<a href="#">Home</a>
							<a href="#">About Us</a>
							<a href="#">Directions</a>
							<a href="#">Patient Forms</a>
							<a href="#">Shoe List</a>
							<a href="#">Links</a>
							<a href="#">Common Problems</a>
							<a href="#" id="px-portal">Patient Portal <span><i class="glyphicon glyphicon-circle-arrow-right"></i></span></a>
					</nav>

				</div>
			</div>
		</div>
		</div>
	  </div>
		<div class="banner-outer">
			<div class="banner">
				<h1>Fillinger Foot Clinic</h1>
				is a different kind of doctor's office on a different kind of mission. From the moment you walk into our office you will feel like family. At Fillinger Foot Clinic, we don't treat problems, we treat people. We see our practice as a ministry. We take our example from the Great Physician. Your feet are a part of you, and caring for your feet means caring for you.<br>
				<button type="button" class="bttn-appt upper-all">
					<a href="#">Click here to schedule an appointment <span><i class="glyphicon glyphicon-circle-arrow-right"></i></span></a>
				</button>
			</div>
		</div>
	</header>
<!-- /HEADER AND BANNER -->

<!-- MAIN CONTENT -->
	<main>
		<div class="main-inner">
		<section id="sect-1">
			<div class="sect-inner">
				<div class="left-col upper-all">
					Specializing in<br>
					reconstructive<br>
					surgery of the foot
					<div class="semi-underline"></div>
				</div>
				<div class="right-col">
					<p>While we care for any ailment of the foot from toenail to talus (the bone that attaches to the ankle), Dr. Fillinger has advanced training in the surgical treatment of the foot.  Fortunately, most conditions do not require surgery to correct and simple methods can be used to get relief.  But sometimes, like in the case of injury or congenital deformity or even deforming diseases like arthritis, surgical intervention provides the most significant and lasting relief.</p>

					<p>This is where we excel.  Using advanced techniques and the latest technology, we can have you back on your feet and peak performance usually within 4-8 weeks.  Conditions vary in severity and other health factors effect the rate of healing.</p>

					<p>Foot surgery is successful and proven.  Many patients are able to get complete relief of their pain and limitations sometimes with relatively minor procedures.  Schedule your appointment today to discuss your treatment options with Dr. Fillinger.</p>
				</div>
			</div>
		</section>
		<section id="sect-2">
			<div class="sect-inner text-black">
				<div class="left-col upper-all">
					A little about<br>
					what we treat
					<div class="semi-underline border-black"></div>
				</div>
				<div class="right-col">
					<ul class="wwtlist">
					 <div class="ul-divider">
					  <div>
						<li>Bunions</li>
						<li>Hammertoes</li>
						<li>Flat Foot Repair</li>
						<li>Tendon and Ligament Repair</li>
						<li>Rheumatoid Reconstruction</li>
						<li>Joint Replacement</li>
						<li>Heel Pain</li>
					  </div>
					  <div>
						<li>Nerve Repair</li>
						<li>Fracture Repair</li>
						<li>Tarsal Tunnel</li>
						<li>Bracing and Orthotics</li>
						<li>Revisional Surgery</li>
						<li>Running and Performance Injuries</li>
						<li>Ingrown Toenails</li>
					  </div>
					 </div>
					</ul>
				</div>
			</div>
		</section>
		<section id="sect-3">
			<div class="sect-inner">
				<div class="left-col upper-all">
					We see patients by<br>
					appointment on:
					<div class="semi-underline"></div>
				</div>
				<div class="right-col">
					<div id="loc-and-sched">
						<b>Location</b>
						<p>We are conveniently located next to Specialty Pharmacy on Alabama Highway 157 adjacent to the Cullman Regional Medical Center Campus.  Click on the link above for map and driving directions.</p>
						<table>
							<tr>
								<td>Monday&nbsp;</td>
								<td>&nbsp;&nbsp;8:30am - 5:00pm</td>
							</tr>
							<tr>
								<td>Tuesday&nbsp;</td>
								<td>&nbsp;&nbsp;12:30pm - 3:30pm</td>
							</tr>
							<tr>
								<td>Wednesday&nbsp;</td>
								<td>&nbsp;&nbsp;8:00am - 4:30pm</td>
							</tr>
							<tr>
								<td>Thursday&nbsp;</td>
								<td>&nbsp;&nbsp;7:30am - 3:30pm</td>
							</tr>
							<tr>
								<td>Friday&nbsp;</td>
								<td>&nbsp;&nbsp;12:30pm - 3:30pm</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</section>
		</div>
	</main>
<!-- /MAIN CONTENT -->
<!-- FOOTER -->
	<footer>
		<div class="footer-inner">
			COPYRIGHT&copy;<!-- © -->2017 <a href="http://www.fillingerfootclinic.com">fillingerfootclinic.com</a>
		</div>
	</footer>
<!-- /FOOTER -->
</div>

<script type="text/javascript">
	function openNav() {
		document.getElementById("myNav").style.height = "100%";
	}
	function closeNav() {
		document.getElementById("myNav").style.height = "0";
	}
</script>

</body>
</html>
