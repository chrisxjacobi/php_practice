<?php

	// Constants
    define('TITLE', 'Arrays');

	// Variables
    $myName = 'Chris';
    $ageGroup = array ('child', 'teenager', 'adult');
	
	// Arrays
    $handlebar = array(
    name => 'Handlebar',
    color => 'black'
    );

    $fuManchu = array(
    name => 'fu manchu',
    color => 'brown'
    );

    $salvadorDali = array(
    name => 'Salvador Dali',
    color => 'blonde'
    );

    $gentlemen = array(
      array(
        firstName => 'Carter',
        country => 'Canada'
      ),
      array(
        firstName => 'Rodrigo',
        country => 'Uruguay'
      ),
      array(
        firstName => 'Giovanni',
        country => 'Italy'
      )
    );

	
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Get Your Hands Dirty:
            <?php echo TITLE ?>
        </title>
        <link href="/assets/styles.css" rel="stylesheet">
        <script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shCore.js"></script>
        <script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shBrushPhp.js"></script>
        <link type="text/css" rel="stylesheet" href="/assets/syntaxhighlighter/styles/shCoreDefault.css" />
        <script type="text/javascript">
            SyntaxHighlighter.all();

        </script>
    </head>

    <body>
        <div class="wrapper">
            <a href="/" title="Back to directory" id="logo">
                <img src="/assets/img/logo.png" alt="PHP">
            </a>

            <h1>Get Your Hands Dirty: <small><?php echo TITLE ?></small></h1>
            <hr>

            <h2>Your Example</h2>

            <div class="sandbox">

                <h3>
                    <?php echo $gentlemen[0][firstName] ?> from
                    <?php echo $gentlemen[0][country] ?>
                </h3>
                <p>
                    <strong><?php echo $gentlemen[0][firstName] ?></strong> is quite the
                    <strong><?php echo $ageGroup[2] ?></strong>! He sports a solid
                    <strong><?php echo $handlebar[name] ?></strong> moustache that is
                    <strong><?php echo $handlebar[color] ?></strong> in color.</p>

                <h3>
                    <?php echo $gentlemen[1][firstName] ?> from
                    <?php echo $gentlemen[1][country] ?>
                </h3>
                <p><strong><?php echo $gentlemen[1][firstName] ?></strong> is a rather dapper
                    <strong><?php echo $ageGroup[2] ?></strong>! He proudly wears a
                    <strong><?php echo $fuManchu[name] ?></strong> that is colored in a gentle
                    <strong><?php echo $fuManchu[color] ?></strong></p>
                </p>

                <h3>
                    <?php echo $gentlemen[2][firstName] ?> from
                    <?php echo $gentlemen[2][country] ?>
                </h3>
                <p><strong><?php echo $gentlemen[2][firstName] ?></strong> might seem too young for a 'stache because he is a
                    <strong><?php echo $ageGroup[0] ?></strong>! But he proudly displays his
                    <strong><?php echo $salvadorDali[name] ?></strong> at school! Although, it is a little hard to see because it's light
                    <strong><?php echo $salvadorDali[color] ?></strong>.</p>
                </p>

            </div>
            <!-- end sandbox -->

            <a href="index.php" class="button">Back to the final example</a>

            <div class="navs cf">
                <a href="" class="button prev">Previous Lecture</a>
                <a href="" class="button next">Next Lecture</a>
            </div>
            <!-- end navs -->

            <hr>

            <small>&copy;<?php echo date('Y') ?> - <?php echo $myName ?></small>
        </div>
        <!-- end wrapper -->

        <div class="copyright-info">
            <?php include('../assets/includes/copyright.php'); ?>
        </div>
        <!-- end copyright-info -->
    </body>

    </html>
