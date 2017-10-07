<?php
	
	// Constants
    define('TITLE', 'Else');
	
	// Custom Variables
    $myName = 'Chris';
    $lessonNum = 11;
    $year = date('Y');

    $favFruit = 'pineapple';


?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lessonNum ?>: <small><?php echo TITLE ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
                
            <?php 
                
            if ($favFruit == 'pineapple') {
                echo "YAY! Pineapple is the best.";
            }   else {
                echo "So, you like $favFruit?";
            }
    
                
            ?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo $year ?> - <?php echo $myName ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
