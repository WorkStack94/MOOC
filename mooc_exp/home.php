<!DOCTYPE html>
<html>
<head>
  <title>Mooc Experience</title>
  <meta charset="UTF-8">
  	<!-- include the css & js link -->
	<?php require ('link.php');?>
	<?php require ('function.php');?>

</head>

<body>
<?php include 'include.php';?>

<div class="container">

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
				$piChart->addDataSet(array(getData()[0],getData()[1],getData()[2],getData()[3]));
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