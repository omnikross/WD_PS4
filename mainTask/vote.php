<?php 
$vote = $_POST['vote'];

$filename = "data.json";
$content = json_decode(file_get_contents($filename), true) ?: 
    ['Good' => 0, 'Bad' => 0];

if ($vote == 0) {
	$content['Good'] += 1;
}
if ($vote == 1) {
	$content['Bad'] += 1;
}
 
$pretty = json_encode($content, JSON_PRETTY_PRINT);
$fp = fopen($filename,"w");
fputs($fp,$pretty);
fclose($fp);
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
	google.charts.load("current", {packages:["corechart"]});
	google.charts.setOnLoadCallback(drawChart);
	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			['Task', 'Percentage'],
			['Good', <?php echo json_encode($content['Good']); ?>],
			['Bad', <?php echo json_encode($content['Bad']); ?>]
			]);
		var options = {
			title: 'We are: ',
		};

		var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		chart.draw(data, options);
	} 
</script>
<div id="piechart" style="width: 900px; height: 500px;"></div>