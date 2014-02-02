<?php 
	$navHome = '<li><h3><a href="index.php">HOME</a></h3></li';
	$navListing = '><li><h3><a href="listings.php">LISTING</a></h3></li';
	$navBuyers = '><li><h3><a href="buyers.php">BUYERS</a></h3></li';
	$navSellers = '><li><h3><a href="sellers.php">SELLERS</a></h3></li';
	$navContact = '><li><h3><a href="contact.php">CONTACT</a></h3></li>';
	
	$pageTitle = 'Reineer &ndash; Home';
	
	require('./templates/header.php');
?>

        <main>
            <section class="mainTop"></section>
            <section class="mainMid">
                <section class="midContent">
				
                    <div class="wrapper">   
					<h1>Thank You!</h1>
						<p>&nbsp;</p>
						<section>
							<p>Thank you for filling out the form. We will reply to you as soon as possible.</p>
						</section>
					</div>
                    
                </section>
            </section>
        </main>
		<?php require('./templates/footer.php'); ?>
    </body>
</html>