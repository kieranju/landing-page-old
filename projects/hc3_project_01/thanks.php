<?php 
	$navIndex = '<li><a href="index.php">HOME</a></li>';
	$navHistory = '<li><a href="history.php">HISTORY</a></li>';
	$navOdins = '<li id="current"><a href="odins.php">ÓÐINS</a></li>';
	$navRegion = '<li><a href="region.php">REGION</a></li>';
	
	$titleCurrent = 'Niflheim - Odins';
	
	require('./templates/header.php');
?>

        <section>
                <div id="midMid" style="width: 700px; background-image: none; background-color: #ff6f5d; margin: 0 auto; border-radius: 5px; padding-bottom: 6px;">
					<h1>THANK YOU!</h1>
					<p>Thank you for submitting form content.</p>
					<p>The page may decide to redirect you soon.</p>
					<p><i>(it won't)</i></p>
				</div>
        </section>
<?php 
	require('./templates/footer.php');
?>