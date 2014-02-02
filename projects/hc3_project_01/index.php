<?php 
	$navIndex = '<li id="current"><a href="index.php">HOME</a></li>';
	$navHistory = '<li><a href="history.php">HISTORY</a></li>';
	$navOdins = '<li><a href="odins.php">ÓÐINS</a></li>';
	$navRegion = '<li><a href="region.php">REGION</a></li>';
	
	$titleCurrent = 'Niflheim - Home';
	
	require('./templates/header.php');
?>

        <section>
            <section class="leftContent">
                <div class="leftTop"></div>
                <div id="leftMid">
                    <h1>SIDE</h1>
                    <p>Phasellus id hendrerit nisi, at eleifend nunc. Curabitur porta mi vitae iaculis vulputate. Mauris fermentum dolor quis augue tempor tincidunt. Pellentesque feugiat aliquam leo a venenatis. Fusce egestas orci nulla. Duis ac tempus nulla. Nulla id nulla vestibulum, tincidunt augue at, bibendum massa. Mauris quis erat sapien. Etiam interdum nulla nibh, id scelerisque leo feugiat at. Vestibulum vehicula dictum blandit. Integer vitae volutpat eros. Sed volutpat nunc eu metus auctor, ultricies imperdiet odio congue. Praesent convallis, elit ut porttitor tempor, erat tellus dictum ligula, eu porttitor tellus diam vitae ligula. Duis viverra nibh lacus, et fringilla orci condimentum id. Aliquam ultricies massa vel dui dapibus congue.</p>
                    <br />
                    <p>Duis dapibus ligula in interdum tincidunt. Sed quis turpis faucibus, fringilla turpis et, congue enim. Aliquam erat volutpat. Phasellus lacinia velit metus, eu tincidunt ante dignissim nec. Mauris auctor eu nulla interdum molestie. Vivamus vulputate turpis ut dictum elementum. Nulla volutpat elementum fringilla.</p>
                </div>
                <div class="leftBot"></div>
            </section>
            <section class="midContent">
                <div class="midTop"></div>
                <div id="midMid">
                    <h1>MAIN</h1>
                    <p>Phasellus id hendrerit nisi, at eleifend nunc. Curabitur porta mi vitae iaculis vulputate. Mauris fermentum dolor quis augue tempor tincidunt. Pellentesque feugiat aliquam leo a venenatis. Fusce egestas orci nulla. Duis ac tempus nulla. Nulla id nulla vestibulum, tincidunt augue at, bibendum massa. Mauris quis erat sapien. Etiam interdum nulla nibh, id scelerisque leo feugiat at. Vestibulum vehicula dictum blandit. Integer vitae volutpat eros. Sed volutpat nunc eu metus auctor, ultricies imperdiet odio congue. Praesent convallis, elit ut porttitor tempor, erat tellus dictum ligula, eu porttitor tellus diam vitae ligula. Duis viverra nibh lacus, et fringilla orci condimentum id. Aliquam ultricies massa vel dui dapibus congue.</p>
                    <br />
                    <p>Duis dapibus ligula in interdum tincidunt. Sed quis turpis faucibus, fringilla turpis et, congue enim. Aliquam erat volutpat. Phasellus lacinia velit metus, eu tincidunt ante dignissim nec. Mauris auctor eu nulla interdum molestie. Vivamus vulputate turpis ut dictum elementum. Nulla volutpat elementum fringilla. Morbi ac quam metus.</p>
                    <br />
                    <h1>MORE</h1>
                    <p>Cras ac feugiat ligula. Pellentesque lacus turpis, posuere egestas dapibus vel, pretium et purus. Vestibulum laoreet dolor nec quam scelerisque lobortis. Aliquam porttitor felis id pellentesque condimentum. Nunc id leo mollis, dignissim nunc id, malesuada tellus. Sed pulvinar purus libero, in ultrices turpis vulputate ut. Aenean id arcu ipsum. Maecenas feugiat adipiscing adipiscing. Sed suscipit ac augue id ornare. Praesent mi lorem, viverra ut tincidunt non, scelerisque ut felis. Duis felis elit, viverra quis mollis vel, ullamcorper non augue. Curabitur in blandit orci. Ut suscipit risus sed sem auctor aliquet.</p>
                </div>
                <div class="midBot"></div>
            </section>
            <section class="rightContent">
                <div class="rightTop"></div>
                <div id="rightMid">
				<?php require('./templates/form.php'); ?>
                </div>
                <div class="rightBot"></div>
            </section>
        </section>
        <div class="clearfix"></div>
<?php 
	require('./templates/footer.php');
?>