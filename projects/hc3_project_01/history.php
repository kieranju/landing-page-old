<?php 
	$navIndex = '<li><a href="index.php">HOME</a></li>';
	$navHistory = '<li id="current"><a href="history.php">HISTORY</a></li>';
	$navOdins = '<li><a href="odins.php">ÓÐINS</a></li>';
	$navRegion = '<li><a href="region.php">REGION</a></li>';
	
	$titleCurrent = 'Niflheim - History';
	
	require('./templates/header.php');
?>

        <section>
            <section class="leftContent">
                <div class="leftTop"></div>
                <div id="leftMid">
                    <h1>ETYMOLOGY</h1>
                    <p>Nifl (whence the Icelandic nifl) being cognate with the Anglo-Saxon Nifol ("dark"), Dutch nevel and German Nebel (fog).</p>
                    <br />
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
                    <h1>HISTORY</h1>
                    <p>Niflheim (or Niflheimr) is one of the Nine Worlds and is a location in Norse mythology which overlaps with the notions of Niflhel and Hel. The name Niflheimr only appears in two extant sources, Gylfaginning and the much debated Hrafnagaldr Óðins. Niflheim was primarily a realm of primordial ice and cold, with nine frozen rivers.</p>
                    <br />
                    <p>Duis dapibus ligula in interdum tincidunt. Sed quis turpis faucibus, fringilla turpis et, congue enim. Aliquam erat volutpat. Phasellus lacinia velit metus, eu tincidunt ante dignissim nec. Mauris auctor eu nulla interdum molestie. Vivamus vulputate turpis ut dictum elementum. Nulla volutpat elementum fringilla. Morbi ac quam metus.</p>
                    <br />
                    <h1>GYLFAGINNING</h1>
                    <p>In Gylfaginning by Snorri Sturluson, Gylfi, the king of ancient Scandinavia, receives an education in Norse mythology from Odin in the guise of three men. Gylfi learns from Odin (as Jafnhárr) that Niflheimr was the first world to be created after Muspelheim:
It was many ages before the earth was shaped that the Niflheim was made; and midmost within it lies the well that is called Hvergelmir, from which spring the rivers called Svöl, Gunnthrá, Fjörm, Fimbulthul, Slídr and Hríd, Sylgr and Ylgr, Víd, Leiptr; Gjöll is hard by Hel-gates.
                    <br />    
                    <p>Odin (as Þriði) further tells Gylfi that it was when the ice from Niflheimr met the flames from Muspelheimr that creation began and Ymir was formed: Just as cold arose out of Niflheim, and all terrible things, so also all that looked toward Múspellheim became hot and glowing; but Ginnungagap was as mild as windless air, and when the breath of heat met the rime, so that it melted and dripped, life was quickened from the yeast-drops, by the power of that which sent the heat, and became a man's form. And that man is named Ymir, but the Rime-Giants call him Aurgelmir;</p>
                    <br />
                    <p>In relation to the world tree Yggdrasill, Jafnhárr (Odin) tells Gylfi that Jötunheimr is located under the second root, where Ginnungagap (Yawning Void) once was: The Ash is greatest of all trees and best: its limbs spread out over all the world and stand above heaven. Three roots of the tree uphold it and stand exceeding broad: one is among the Æsir; another among the Rime-Giants, in that place where aforetime was the Yawning Void; the third stands over Niflheim, and under that root is Hvergelmir, and Nídhöggr gnaws the root from below.</p>
                    <br />
                    <p>Gylfi is furthermore informed that when Loki had engendered Hel, she was cast into Niflheimr by Odin: Hel he cast into Niflheim, and gave to her power over nine worlds, to apportion all abodes among those that were sent to her: that is, men dead of sickness or of old age. She has great possessions there; her walls are exceeding high and her gates great.</p>
                    <br />
                    <p>Hel thus became the mistress of the world of those dead in disease and old age. One last mention of Niflheimr appears where it is the last destination of the jötunn who was killed by Thor after he had built Asgard:
Now that the Æsir saw surely that the hill-giant was come thither, they did not regard their oaths reverently, but called on Thor, who came as quickly. And straightway the hammer Mjöllnir was raised aloft; he paid the wright's wage, and not with the sun and the moon. Nay, he even denied him dwelling in Jötunheim, and struck but the one first blow, so that his skull was burst into small crumbs, and sent him down below under Niflheim.</p>
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