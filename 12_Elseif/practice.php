<?php
	
	// Constants
    define('TITLE', 'Else/IF');

	
	// Custom Variables
    $myName = 'Chris';
    $lessonNum = 12;
    $year = date('Y');

    $nativeLanguage = 'Arabic';


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

            <h1>Tutorial
                <?php echo $lessonNum ?>: <small><?php echo TITLE ?></small></h1>
            <hr>

            <h2>Your Example</h2>

            <div class="sandbox">

                <?php 
                if ($nativeLanguage == 'French') {
                    echo "Bonjour! Vouz parlez Francais";
                } else if ($nativeLanguage == 'Spanish') {
                    echo "Hola...usted habla Espanol.";
                } else if ($nativeLanguage == 'Arabic') {
                    echo "Yay you can speak and awesome langugae";
                } else {
                    echo "You probably speak English...";
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
