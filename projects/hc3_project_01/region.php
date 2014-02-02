<?php 
	$navIndex = '<li><a href="index.php">HOME</a></li>';
	$navHistory = '<li><a href="history.php">HISTORY</a></li>';
	$navOdins = '<li><a href="odins.php">ÓÐINS</a></li>';
	$navRegion = '<li id="current"><a href="region.php">REGION</a></li>';
	
	$titleCurrent = 'Niflheim - Region';
	
	require('./templates/header.php');
?>

        <section>
            <section class="leftContent">
                <div class="leftTop"></div>
                <div id="leftMid">
                    <h1>MAP</h1>
                    <div id="map" style="width:250px;height:250px"><iframe width="250" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=Niflheim%2C%2BGreenland&ie=UTF8&z=6&t=k&iwloc=near&output=embed"></iframe><br><table width="250" cellpadding="0" cellspacing="0" border="0"><tr><td align="left"></td></tr></table></div>
                </div>
                <div class="leftBot"></div>
            </section>
            <section class="midContent">
                <div class="midTop"></div>
                <div id="midMid">
                    <h1>LOCATION</h1>
                    <p>Proin accumsan velit id lacus eleifend tincidunt. Nam dolor eros, imperdiet a velit et, faucibus dictum lacus. In facilisis tortor felis, eget consequat augue porta eu. Quisque et pretium quam, eget ullamcorper dolor. Praesent vehicula suscipit vulputate. Mauris at velit tortor. Integer neque sapien, porttitor in venenatis non, tempus ut erat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec aliquet libero sit amet erat scelerisque, a feugiat neque mattis. Pellentesque sed elit et elit auctor elementum. Sed laoreet, lacus vel fermentum mollis, eros erat pulvinar purus, sit amet semper ante neque eget libero. Curabitur a lacinia enim, id vestibulum tortor.</p>
                    <br />
                    <p>Morbi vulputate augue ut urna vulputate iaculis. Etiam volutpat augue tellus, eget sagittis magna blandit id. Aenean eu ipsum blandit, viverra urna id, facilisis arcu. Ut ut diam eu mauris consequat tincidunt. Morbi ut sodales lorem, non euismod augue. Nunc nec arcu nulla. Cras sit amet interdum eros. Aenean feugiat nulla a rhoncus aliquet. Pellentesque enim leo, blandit ac enim in, ultrices gravida ante. Curabitur hendrerit vel sapien ac iaculis.</p>
                    <br />
                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed eget cursus sem, vitae gravida est. Aenean tristique tincidunt lorem, non ultricies diam porttitor nec. Maecenas vel eleifend eros. Fusce laoreet sollicitudin nisi, sed condimentum arcu lobortis porttitor. Aliquam erat volutpat. In eu mauris in enim feugiat lacinia non ut turpis. Duis arcu elit, tempor sed neque mollis, sagittis vulputate sem. Nullam rhoncus tortor ac laoreet mollis.</p>
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