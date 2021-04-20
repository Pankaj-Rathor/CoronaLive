<?php
	$data = file_get_contents("https://api.covid19api.com/summary");
	$coronaData = json_decode($data,true);
	// echo "<pre>";
	// print_r($coronaData['Countries']);
	// echo "</pre>";
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
		#tableId thead{
			background: skyblue;
			color: white;
		}
		
		#tableId tbody tr .country{
			text-transform: uppercase;
			font-weight: bold;
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
				<table class="table table-bordered table-striped text-center mt-3 mb-3" id="tableId">
					<thead>
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
					</thead>
					<?php
						$i=0;
						while($i<count($coronaData['Countries']))
						{
					?>
					<tr>
						<td><?php echo $x=$i+1; ?></td>
						<td class="country"><?php echo $coronaData['Countries'][$i]['Country']; ?></td>
						<td><?php echo $coronaData['Countries'][$i]['TotalConfirmed']; ?></td>
						<td><?php echo $coronaData['Countries'][$i]['TotalRecovered']; ?></td>
						<td><?php echo $coronaData['Countries'][$i]['TotalDeaths']; ?></td>
						<td><?php echo $coronaData['Countries'][$i]['NewConfirmed']; ?></td>
						<td><?php echo $coronaData['Countries'][$i]['NewRecovered']; ?></td>
						<td><?php echo $coronaData['Countries'][$i]['NewDeaths']; ?></td>
					</tr>

					<?php
					$i++;
						}
					?>
					<tbody>
						
					</tbody>
				</table>
			</div>
	</section>
	<!-- end corona update -->

	<script type="text/javascript">
		$(document).ready(function(){
			$('#tableId').DataTable();
		});
	</script>
</body>
</html>