<?php
	
	// Constants
	define('TITLE', 'if/else/else if!!!');
	
	// Custom Variables
    $myName = 'Chris';
    $year = date('Y');

    $species = 'Human';
    $nativeLanguage = 'Russian';
    $yearsOnEarth = 31;

?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>PHP
            <?php echo TITLE ?>
        </title>
        <link href="../assets/styles.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <a href="/" title="Back to directory" id="logo">
                <img src="../assets/img/logo.png" alt="PHP">
            </a>

            <h1>Get Your Hands Dirty: <small><?php echo TITLE ?></small></h1>
            <hr>

            <h2>Your Example</h2>


            <div class="sandbox">
                <?php 
    
                if($species == 'Black Rhino') {
                    echo "<p>Welcome, <strong>Black Rhino!</strong> You and the rest of the rhinos will love this big lake!</p>";
                    
                } else if ($species == 'Human') {
                    echo "<p>Welcome, <strong>$species</strong>! Please leave the Black Rhino alone!</p>";
                } else {
                    echo "<p>Welcome to Earth! Your kind is unknown to us!</p>";
                }
    
    
            ?>

                <h5>Another Example</h5>

            <?php 
              if ($yearsOnEarth == 20) {
                  echo "Congrats for being on Earth for 20 years!";
              }  else if($yearsOnEarth < 20) {
                  echo "Not quite 20 yet, young man!";
              }  else {
                  echo "You're an old man :_(";
              }
                
                
            ?>
                
                <h5>A combo</h5>
                
            <?php 
                if ($nativeLanguage == 'German') {
                    echo "VILKOMMEN!";
                } else if ($species == 'Black Rhino') {
                    echo "You must be a rhino!";
                } else {
                    echo "You don't speak German, nor are you a rhino!";
                }
                
                
                
            ?>

            </div>
            <!-- end sandbox -->

            <a href="index.php" class="button">Back to the lecture</a>

            <hr>

            <small>&copy;<?php echo $year ?> - <?php echo $myName ?></small>
        </div>
        <!-- end wrapper -->

        <div class="copyright-info">
            <?php include('../assets/includes/copyright.php'); ?>
        </div>
        <!-- end copyright-info -->
    </body>

    </html>
