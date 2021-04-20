<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Covid19</title>
	<?php include 'link/links.php';
	include 'css/style.php';
	?>
</head>
<body>
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
					<a class="nav-link" href="index.php/#about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php/#symptoms">Symptoms</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php/#prevention">Prevention</a>
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

</script>
<!-- end js -->
</body>
</html>