<?php
	
	// Constants
	define('TITLE', 'Multi-Dimensional Arrays');
	
	// Custom Variables
    $myName = 'Chris';
    $lecturNum = 8;
	
	// Moustache Multi-Dimensional Array
    $moustaches = array(
    
        array(
        name => 'Handlebar',
        creepFactor => 'high',
        avgGrowthDays => 14),
        array(
        name => 'Salvador Dali',
        creepFactor => 'extreme',
        avgGrowthDays => 62),
        array(
        name => 'Fu Manchu',
        creepFactor => 'very high',
        avgGrowthDays => 58)
);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE ?></title>
		<link href="/assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lessonNum ?>: <small><?php echo TITLE ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				<h2>The <?php echo $moustaches[0][name] ?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo $moustaches[0][creepFactor] ?></strong> and takes <strong><?php echo $moustaches[0][avgGrowthDays] ?> days</strong> to grow on average.</strong></p>
        
                <h2>The <?php echo $moustaches[1][name] ?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo $moustaches[1][creepFactor] ?></strong> and takes <strong><?php echo $moustaches[1][avgGrowthDays] ?> days</strong> to grow on average.</strong></p>

                <h2>The <?php echo $moustaches[2][name] ?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo $moustaches[2][creepFactor] ?></strong> and takes <strong><?php echo $moustaches[2][avgGrowthDays] ?> days</strong> to grow on average.</strong></p>
        
        
				
				<!-- REPEAT ABOVE 2X -->
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y') ?> - <?php echo $myName ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
