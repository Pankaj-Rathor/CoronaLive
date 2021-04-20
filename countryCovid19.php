<?php
?>

<!DOCTYPE html>
<html>
<head>
	<title>Covid19-case</title>
	<?php
	include 'css/style.php';
	include 'link/links.php';
	?>

	<style type="text/css">
		body{
			font-family: cursive !important;
			background: white;
		}

		#t-id{
			width: 4%;
		}

		#t-country{
			width: 28%;
		}
	</style>
</head>
<body>
	<!-- corona update -->
	<section class="w-100 h-100">
			<div class="mb-3">
				<!-- <h3 class="text-center text-uppercase">Covid-19 Update</h3> -->
			</div>

			<div class="table-responsive">
				<table class="table table-bordered table-striped text-center" id="tableId">
					<tr>
						<th id="t-id">ID</th>
						<th id="t-country">Country</th>
						<th>Total Confirmed</th>
						<th>Total Recovered</th>
						<th>Total Deaths</th>
						<th>New Confirmed</th>
						<th>New Recovered</th>
						<th>New Deaths</th>
					</tr>
				</table>
			</div>
	</section>
	<!-- end corona update -->

	<script type="text/javascript">
		$(document).ready(function(){
			fetch();
			function fetch(){
			$.get("https://api.covid19api.com/summary",
				function(data){ 
					// console.log(data['Countries'].length);
					var table = document.getElementById("tableId");
					for(var i=1;  i<(data['Countries'].length); i++){
						var x = table.insertRow();
						
						x.insertCell(0);
						table.rows[i].cells[0].innerHTML = i;
						x.insertCell(1);
						table.rows[i].cells[1].innerHTML = data['Countries'][i-1]['Country'];
						table.rows[i].cells[1].style.background = "#81d4fa";
						table.rows[i].cells[1].style.color = "white";
						// table.rows[i].cells[1].style.fontSize  = "20px";
						table.rows[i].cells[1].style.textTransform = "uppercase";
						// table.rows[i].cells[1].style.width = "26px";

						x.insertCell(2);
						table.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
						table.rows[i].cells[2].style.background = "#5472d3";

						x.insertCell(3);
						table.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalRecovered'];
						table.rows[i].cells[3].style.background = "#8bc34a";

						x.insertCell(4);
						table.rows[i].cells[4].innerHTML = data['Countries'][i-1]['TotalDeaths'];
						table.rows[i].cells[4].style.background = "#ef5350";

						x.insertCell(5);
						table.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewConfirmed'];
						table.rows[i].cells[5].style.background = "#5472d3";

						x.insertCell(6);
						table.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewRecovered'];
						table.rows[i].cells[6].style.background = "#8bc34a";

						x.insertCell(7);
						table.rows[i].cells[7].innerHTML = data['Countries'][i-1]['NewDeaths'];
						table.rows[i].cells[7].style.background = "#ef5350";
					}
				}
			)
		}

		})
		
	</script>
</body>
</html>