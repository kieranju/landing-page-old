<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title><?php echo $titleCurrent ?></title>
    <link rel="stylesheet" href="styles/stylesheet.css" />
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container">
        <header>
            <nav>
                <ul class="navLeft">
					<?php echo $navIndex ?>
					<?php echo $navHistory ?>
                </ul>
                <ul class="navRight">
					<?php echo $navOdins ?>
					<?php echo $navRegion ?>
                </ul>
            </nav>
        </header>