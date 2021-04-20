<?php
$data = file_get_contents("https://api.covid19india.org/data.json");
$coronaData = json_decode($data, true);

	// echo "<pre>";
	// print_r($coronaData['statewise'][1]['state']);
	// echo "</pre>";
	//echo count($coronaData['statewise'])
?>

<!DOCTYPE html>
<html>
<head>
	<title>Covid19</title>
	<?php include 'link/links.php';
	include 'css/style.php';
	?>

	<style type="text/css">
		#t-state{
			width: 20%;
			padding-bottom: 10px;
			padding-top: 10px;
		}

		.state{
			text-transform: uppercase;
			font-weight: bold;
		}
		
	</style>
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

		<!-- corona update -->
		<section class="w-100 h-100">
			<div class="mb-3">
				<!-- <h3 class="text-center text-uppercase">Covid-19 Update</h3> -->
			</div>

			<div class="table-responsive">
				<table class="table table-bordered table-striped text-center mt-3 mb-3" id="tableId" style="width: 100%;">
					<thead class="bg-info">
						<tr>
							<th id="t-id">ID</th>
							<th id="t-state">State</th>
							<th>Confirmed</th>
							<th>Active</th>
							<th>Recovered</th>
							<th>Deaths</th>
							<th>Migrated other</th>
							<th>Last Update</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						while($i<count($coronaData['statewise']))
						{
							?>
							<tr>
								<td><?php echo $i; ?></td>
								<td class="state"><?php echo $coronaData['statewise'][$i]['state']; ?></td>
								<td><?php echo $coronaData['statewise'][$i]['confirmed']; ?></td>
								<td><?php echo $coronaData['statewise'][$i]['active']; ?></td>
								<td><?php echo $coronaData['statewise'][$i]['recovered']; ?></td>
								<td><?php echo $coronaData['statewise'][$i]['deaths']; ?></td>
								<td><?php echo $coronaData['statewise'][$i]['migratedother']; ?></td>
								<td><?php echo $coronaData['statewise'][$i]['lastupdatedtime']; ?></td>
							</tr>
							<?php
							$i++;
						}
						?>
					</tbody>
				</table>
			</div>
		</section>
		<!-- end corona update -->


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
	$(document).ready(function() {
		$('#tableId').DataTable();
	} );


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