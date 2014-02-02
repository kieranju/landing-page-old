<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $pageTitle ?></title>
        <link href="css/main.css" rel="stylesheet" media="all">
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        
        <link rel="stylesheet" type="text/css" href="css/index.css">
        
        <link rel="stylesheet" type="text/css" href="css/ui-darkness/jquery-ui-1.10.3.custom.css">
        
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
        
        <!--[if lt IE 9]>
<script src="dist/html5shiv.js"></script>
<![endif]-->
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <?php echo $navHome ?>
                    <?php echo $navListing ?>
                    <?php echo $navBuyers ?>
                    <?php echo $navSellers ?>
                    <?php echo $navContact ?>
                </ul>
            </nav>
        </header>