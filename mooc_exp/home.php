<!DOCTYPE html>
<html>
<head>
  <title>Mooc Experience</title>
  <meta charset="UTF-8">
  	<!-- include the css & js link -->
	<?php require ('link.php');?>

</head>

<body>
<?php include 'include.php';?>

<div class="container">
	
<?php
	$array = array(112,500,66,40);

	$dataMooc = array(
		[0] => array([0] => 'olivie_c',[1] => 'birout_w'),
		[1] => array([0] => 'SuperCours',[1] => 'Un Cours'),
		[2] => array([0] => 'video',[1] => 'texte',[3] => 'exo')
	);

	// print_r($dataMooc);
?>

	<!-- ligne 1 Head -->
	<div class="row">
		<div class="col-md-2"><img id="logo" src="image/mooc-exp-logo.png"></div>
		<div class="col-md-10">
			<nav class="navbar navbar-default " role="navigation">
	   		<div class="navbar-header"><a class="navbar-brand" href="#">Analyseur d'adhérence</a></div>
	   		<div>
	      	<p class="navbar-text navbar-right"><img src="asset/bootstrap-dist/glyphicons_free/glyphicons/png/glyphicons_003_user.png">Signed in as <a href="#" class="navbar-link" id="pseudo">Staff </a> |
	      	<a href="#" class="navbar-link" id="logout"> logout &nbsp&nbsp</a>
	      	</p>
	   		</div>
			</nav>
		</div>
	</div>

	<!-- ligne 2 Menu -->
	<div class="row">
		<div class="btn-group btn-group-justified">
	  		<div class="btn-group">
	    	<button data-toggle="modal" href="#modalCourse" type="button" class="btn btn-default">Cours</button></div>
	  		<div class="btn-group">
	    	<button data-toggle="modal" href="#modalLesson" type="button" class="btn btn-default">Leçons</button></div>
	  		<div class="btn-group">
	    	<button data-toggle="modal" href="#modalType" type="button" class="btn btn-default">Types</button></div>
	    	<div class="btn-group">
	    	<button data-toggle="modal" href="#modalAppr" type="button" class="btn btn-default">Apprenants</button></div>
		</div>
	</div>

	<!-- ligne 3 Main -->
	<div class="row">
		<div class="col-md-12" id="display">
			<?php
				require ('asset/GChartPhp/gChart.php');
				?>
				<h2>Pie Chart</h2>
				<?php
				$piChart = new gPieChart();
				$piChart->addDataSet(array($array[0],$array[1],$array[2],$array[3]));
				$piChart->setLegend(array("first", "second", "third","fourth"));
				$piChart->setLabels(array("first", "second", "third","fourth"));
				$piChart->setColors(array("ff3344", "11ff11", "22aacc", "3333aa"));
			?>

			<input id="val-first" type="value" value="69" style="display:none">
			<img src="<?php print $piChart->getUrl();  ?>" />

			<div class=".col-md-4 chart" id="camembert" ></div>
			<div class=".col-md-4 chart" id="column" ></div>
		
		</div>
	</div>
</div>

</body>