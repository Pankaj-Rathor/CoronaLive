<!DOCTYPE html>
<html>
<head>
	<title>Covid19</title>
	<?php include 'link/links.php';
	include 'css/style.php';
	?>
</head>
<body onload="fetch()">
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-nav p-1 pb-2 pt-2">
		<a class="navbar-brand pl-5" href="#">Covid-19</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto pr-5">
				<li class="nav-item">
					<a class="nav-link" href="indiaStates.php">India State</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#symptoms">Symptoms</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#prevention">Prevention</a>
				</li>
			</ul>
		</div>
	</nav>
	<!-- end navbar -->
	<main>
		<!-- header -->
		<div class="main-header">
			<div class="row w-100 h-100 mt-3">
				<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
					<div class="left-side w-100 h-100 d-flex justify-content-center align-items-center">
						<img src="images/weTogether.png">
					</div>
				</div>

				<div class="col-lg-5 col-md-5 col-12 order-lg-2 order-1">
					<div class="right-side w-100 h-100 d-flex justify-content-center align-items-center ml-4">
						<h1 class="pr-4">Let's Stay Safe & Fight Together Against C<span class="corona-root"><img src="images/corona1.jpg" width=75 height=75></span>rona Virus</h1>
					</div>
				</div>
			</div>
		</div>
		<!-- end header -->

		<!-- Corona Update -->
		<section class="corona-update w-100 h-100 mt-3 mb-3 pb-3 pt-2">
			<div class="mb-3">
				<h3 class="text-center text-uppercase">Global Covid-19 Update</h3>
			</div>

			<div class="d-flex justify-content-around align-items-center table-bordered table-striped pb-2 pt-2" id="update">
				<div>
					<p style="color: #80d8ff;">Total Confirmed</p>
					<h1 class="count" id="tc"></h1>
				</div>

				<div>
					<p style="color: #00e676;">Total Recovered</p>
					<h1 class="count" id="trc"></h1>
				</div>

				<div>
					<p style="color: #ff1744;">Total Deaths</p>
					<h1 class="count" id="tdc"></h1>
				</div>
				<div>
					<p style="color: #80d8ff;">New Confirmed</p>
					<h1 class="count" id="nc"></h1>
				</div>

				<div>
					<p style="color: #00e676;">New Recovered</p>
					<h1 class="count" id="nr"></h1>
				</div>

				<div>
					<p style="color: #ff1744;">New Deaths</p>
					<h1 class="count" id="nd"></h1>
				</div>
			</div>
		</section>
		<!-- end Corona Update -->

		<!-- corona update by counties -->
		<section>
			<div class="w-100 h-100 mt-4 pt-2" style="background: #546e7a; border-radius: 15px;">
				<div class="" >
					<h3 class="text-center text-uppercase" style="color: #ea80fc;">Check Your Country Covid-19 Status</h3>
				</div>
				<div class="text-center text-white w-100 mb-2" id="arrow-down" style="background: gray;" onclick="datashow()">
				<span class="mr-2">Click</span><i class="fa fa-arrow-down mr-2"></i><span>Here</span>
				</div>
				<div class="text-center text-white w-100 mb-2" id="arrow-up" style="background: gray; display: none;" onclick="datahide()">
					<span class="mr-2">Click</span><i class="fa fa-arrow-up mr-2"></i><span>Here</span>
				</div>
			</div>

			<div id="c_table" style="display: none;">
				<?php
				include 'countryCovid19.php';
				?>
			</div>

			
		</section>


		<!-- end update by counties -->

		<!-- About section -->
		<div class="container-fluid sub-section pt-5 pb-5" id="about">
			<div class="section_header text-center mb-5 mt-4">
				<h1>About COVID-19</h1>
			</div>

			<div class="row">
				<div class="col-md-5 col-lg-5 col-12">
					<img src="images/coronavirus-about.jpg" class="img-fluid">
				</div>

				<div class="col-md-6 col-lg-6 col-12">
					<h2>What is Covid-19 (Corona-Virus)</h2>
					<p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</p>
					<p>
					Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p>
					<p>
					The best way to prevent and slow down transmission is to be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your fa</p>

				</div>
			</div>
		</div>	
		<!-- end About section -->

		<!-- Symptoms Section -->
		<div class="container-fluid pt-5 pb-2" id="symptoms">
			<div class="d-flex justify-content-center align-items-center">
				<img src="images/symptoms.png" class="img-fluid img-responsive">
			</div>
		</div>	

		<!-- end Symptoms Section -->

		<!-- prevention section-->
		<div class="container-fluid sub-section pt-5 pb-5" id="prevention">
			<div class="section_header text-center mb-5 mt-4">
				<h1>6 Steps Prevention Against Coronavirus</h1>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
									<img src="images/hand-wash.jpg" class="img-fluid" width="90" height="90">
								</figure>
							</div>
							<div class="col-lg-8 col-md-8 col-12">
								<p>Wash your hands regularly for 20 seconds, with soap and water or alcohal-based hand rub</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-12">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
									<img src="images/mask.jpg" class="img-fluid" width="90" height="90">
								</figure>
							</div>
							<div class="col-lg-8 col-md-8 col-12">
								<p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-12">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
									<img src="images/social-dis.jpg" class="img-fluid" width="90" height="90">
								</figure>
							</div>
							<div class="col-lg-8 col-md-8 col-12">
								<p>Maintain at least 1 metre distance between you and people coughing or sneezing.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
									<img src="images/stay-home.png" class="img-fluid" width="90" height="90">
								</figure>
							</div>
							<div class="col-lg-8 col-md-8 col-12">
								<p>Stay home if you feel unwell.</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-12">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
									<img src="images/avoid.jpg" class="img-fluid" width="90" height="90">
								</figure>
							</div>
							<div class="col-lg-8 col-md-8 col-12">
								<p>Avoid touching your face.</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-12">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
									<img src="images/fever.jpg" class="img-fluid" width="90" height="90">
								</figure>
							</div>
							<div class="col-lg-8 col-md-8 col-12">
								<p>Seek immediate medical attention if you have serious symptoms.  Always call before visiting your doctor or health facility. </p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- end prevention section -->

		<!-- top cursor -->
		<div class="container scrollTop float-right pr-5">
			<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
		</div>
	</main>
	<!-- footer -->
	<footer class="mt-2 footer-bg">
		<div class="container-fluid text-center text-white text-uppercase">
			<p><span class="copy">&copy;</span>Copyright By Pankaj Rathor</p>
		</div>
	</div>
</footer>
<!-- end footer -->

<!-- JavaScript  -->
<script type="text/javascript">
	
	function count(){
		$('.count').counterUp({
			delay: 10,
			time: 1000
		});
	}

	myButton = document.getElementById("myBtn");
//When the user scrolls down 100px from the top of the document,show the button
window.onscroll = function(){scrollFunction()};

function scrollFunction(){
	if(document.body.scrollTop>100 || document.documentElement.scrollTop>100){
		myButton.style.display = "block";
	}else{
		myButton.style.display = "none";
	}
}

// When the user click on the button, scroll to the top of the document
function topFunction(){
	document.body.scrollTop=0; //For Safari
	document.documentElement.scrollTop=0 //For chrome, firefox,IE etc.
}

function fetch(){
	$.get("https://api.covid19api.com/summary",
		function(data){
					// console.log(data['Global']);
					document.getElementById("tc").innerHTML= new Intl.NumberFormat('en-IN', { maximumSignificantDigits: 3 }).format(data['Global']['TotalConfirmed']);
					document.getElementById("trc").innerHTML= new Intl.NumberFormat('en-IN', { maximumSignificantDigits: 3 }).format(data['Global']['TotalRecovered']);
					document.getElementById("tdc").innerHTML= new Intl.NumberFormat('en-IN', { maximumSignificantDigits: 3 }).format(data['Global']['TotalDeaths']);
					document.getElementById("nc").innerHTML= new Intl.NumberFormat('en-IN', { maximumSignificantDigits: 3 }).format(data['Global']['NewConfirmed']);
					document.getElementById("nr").innerHTML= new Intl.NumberFormat('en-IN', { maximumSignificantDigits: 3 }).format(data['Global']['NewRecovered']);
					document.getElementById("nd").innerHTML= new Intl.NumberFormat('en-IN', { maximumSignificantDigits: 3 }).format(data['Global']['NewDeaths']);
				})
}

function datashow(){
	let arrow_down = document.getElementById("arrow-down");
	let arrow_up = document.getElementById("arrow-up");
	let c_table = document.getElementById("c_table");

	arrow_down.style.display = "none";
	arrow_up.style.display = "block";
	c_table.style.display = "block"; 

}


function datahide(){
	let arrow_down = document.getElementById("arrow-down");
	let arrow_up = document.getElementById("arrow-up");
	let c_table = document.getElementById("c_table");

	arrow_up.style.display = "none";
	arrow_down.style.display = "block";
	c_table.style.display = "none"; 
}
</script>
<!-- end js -->
</body>
</html>