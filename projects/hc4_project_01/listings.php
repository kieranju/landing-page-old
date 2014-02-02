<?php 
	$navHome = '<li><h3><a href="index.php">HOME</a></h3></li';
	$navListing = '><li id="current"><h3><a href="listings.php">LISTING</a></h3></li';
	$navBuyers = '><li><h3><a href="buyers.php">BUYERS</a></h3></li';
	$navSellers = '><li><h3><a href="sellers.php">SELLERS</a></h3></li';
	$navContact = '><li><h3><a href="contact.php">CONTACT</a></h3></li>';
	
	$pageTitle = 'Reineer &ndash; Listings';
	
	require('./templates/header.php');
?>

        <main>
                            
            <section class="mainTop"></section>
            
            <section class="mainMid">
            
                <section class="midContent">
                
                <div class="sort_by">
                    
                    	<h3>Filter by:</h3>
                                        
               			<ul>
                    	
                            <li>
    
                            <h3><span>Price</span></h3>
                                    <ul>
                                        <li><a href="#">$0 - $150,000</a></li>
                                        <li><a href="#">$150,001 - $300,000</a></li>
                                        <li><a href="#">$300,001 - $450,000</a></li>
                                        <li><a href="#">$450,001 - $600,000</a></li>
                                        <li><a href="#">$600,001+</a></li>
                                    </ul>
                    
                            </li>
                            
                            <li>
                            
                            <h3><span>Location</span></h3>
                                    <ul>
                                        <li><a href="#">Vancouver</a></li>
                                        <li><a href="#">Burnaby</a></li>
                                        <li><a href="#">New Westminster</a></li>
                                        <li><a href="#">Coquitlam</a></li>
                                        <li><a href="#">Surrey</a></li>

                                    </ul>
                            
                            </li>
                
                	</ul>
                
                </div> <!--end of sort_by-->
                
                <div class="clear"></div>
                
                <div class="listing_details group-1" data-group="1">
                
                	<button class="escape">X</button>
                    
                    <div class="cycle-slideshow slide" data-cycle-fx="scrollHorz"     data-cycle-pause-on-hover="true" data-cycle-speed="450" data-cycle-prev=".btn_prev"
        data-cycle-next=".btn_next">
                    
                     <div class="cycle-prev"></div>
    				<div class="cycle-next"></div>
  
                        <img src="images/home1_large1.JPG" alt="Large picture of apartment" />
                        <img src="images/home1_large2.JPG" alt="Large picture of apartment" />
                        <img src="images/home1_large3.JPG" alt="Large picture of apartment" />
                        <img src="images/home1_large4.JPG" alt="Large picture of apartment" />
                        <img src="images/home1_large5.JPG" alt="Large picture of apartment" />
  
     				
                     
                         <div class="slide_controls">
                         
                            <div class="btn_prev">
                            </div>
                            
                            <div class="btn_next">
                            </div>
                        
                        </div><!-- end slide_controls -->
                        
                         </div><!-- end gallery -->
                         
                         <div class="details_sidebar">
                         
                             <h3>Price:&nbsp;<span>$367,000</span></h3>
                             
                             <h3>Location:&nbsp;<span>3543 Cordova Street, Vancouver</span></h3>
                             
                             <h3>Bedrooms:&nbsp;<span>2</span></h3>
                             
                             <h3>Key amenities:&nbsp;<span>Large patio, beautiful view, electric fireplace.</span></h3>
                             
                             <h3>Date Listed:&nbsp;<span>November 12th, 2013</span></h3>
                             
                             <button class="contact_seller">Contact Seller</button>
                         
                         </div> <!-- End of details sidebar-->
                         
                         <div class="clear"></div>
                         
                         <div class="details_box">
                         
                         	<h3><span>Description:</span></h3>
                            
                            <p>Lorem ipsum dolor sit amet, ne ullum facilis argumentum his, cu sint nemore moderatius quo. Mea tamquam volumus te, duo ei animal patrioque assentior. Et reque tation sed, cu suas choro concludaturque sit, est ex sonet nonumes platonem. Enim tractatos pro in. Decore forensibus eloquentiam ea cum, mel fuisset scripserit no, debet facilisi abhorreant pro ut.</p>

                            <p>Eu his malorum detraxit signiferumque, at consequat temporibus vix. Ea sed noster civibus. Ius consulatu posidonium adversarium no, eum ex ignota aliquid. Ullum consul ea sed. Ne mea sint error, ceteros constituam an nec.</p>
                            
                            <p>Cum ea causae debitis iracundia. Ei vix natum ceteros scaevola, esse omnes ut sit. Maiorum sensibus corrumpit ad vis, ut mea eros placerat, no vero regione mel. Ut hinc concludaturque has. Ex pro invidunt salutatus. Ut modo nusquam definiebas nec, ei error expetenda euripidis sea, ad.</p>
                         
                         </div>
                
                </div> <!--End of listing_details -->
				
                    <section class="listing_box">
                    
                    	<img src="images/home1_small2.png" alt="View from exterior apartment"/>
                        
                        <h3>3543 Cordova Street, Vancouver <span>&nbsp;$367,000</span></h3>
                        
                        <p><span>&#8226;</span> Lorem ipsum dolor sit amet, ne ullum facilis argumentum his, cu sint si.</p>
                        <p><span>&#8226;</span> Lorem ipsum dolor sit amet, ne ullum facilis argumentum his, cu sint si.</p>
                        <p><span>&#8226;</span> Lorem ipsum dolor sit amet, ne ullum facilis argumentum his, cu sint si.</p>
                        
                        <button class="button_details group-1" data-group="1">Details</button>
                     
                    	<div class="clear"></div>
                        
                    </section> <!--End of listing_box-->
                    
                    <div class="listing_details group-2" data-group="2">
                
                	<button class="escape">X</button>
                    
                    <div class="cycle-slideshow slide" data-cycle-fx="scrollHorz"     data-cycle-pause-on-hover="true" data-cycle-speed="450" data-cycle-prev=".btn_prev"
        data-cycle-next=".btn_next">
                    
                     <div class="cycle-prev"></div>
    				<div class="cycle-next"></div>
  
                        <img src="images/home2_large1.JPG" alt="Large picture of apartment" />
                        <img src="images/home2_large2.JPG" alt="Large picture of apartment" />
                        <img src="images/home2_large3.JPG" alt="Large picture of apartment" />
                        <img src="images/home2_large4.JPG" alt="Large picture of apartment" />
                        <img src="images/home2_large5.JPG" alt="Large picture of apartment" />
  
     				
                     
                         <div class="slide_controls">
                         
                            <div class="btn_prev">
                            </div>
                            
                            <div class="btn_next">
                            </div>
                        
                        </div><!-- end slide_controls -->
                        
                         </div><!-- end gallery -->
                         
                         <div class="details_sidebar">
                         
                             <h3>Price:&nbsp;<span>$213,000</span></h3>
                             
                             <h3>Location:&nbsp;<span>325 Queens Ave, New Westminster</span></h3>
                             
                             <h3>Bedrooms:&nbsp;<span>1</span></h3>
                             
                             <h3>Key amenities:&nbsp;<span>Spacious living room, large modern kitchen, heated floors.</span></h3>
                             
                             <h3>Date Listed:&nbsp;<span>November 3rd, 2013</span></h3>
                             
                             <button class="contact_seller">Contact Seller</button>
                         
                         </div> <!-- End of details sidebar-->
                         
                         <div class="clear"></div>
                         
                         <div class="details_box">
                         
                         	<h3><span>Description:</span></h3>
                            
                            <p>Lorem ipsum dolor sit amet, ne ullum facilis argumentum his, cu sint nemore moderatius quo. Mea tamquam volumus te, duo ei animal patrioque assentior. Et reque tation sed, cu suas choro concludaturque sit, est ex sonet nonumes platonem. Enim tractatos pro in. Decore forensibus eloquentiam ea cum, mel fuisset scripserit no, debet facilisi abhorreant pro ut.</p>

                            <p>Eu his malorum detraxit signiferumque, at consequat temporibus vix. Ea sed noster civibus. Ius consulatu posidonium adversarium no, eum ex ignota aliquid. Ullum consul ea sed. Ne mea sint error, ceteros constituam an nec.</p>
                            
                            <p>Cum ea causae debitis iracundia. Ei vix natum ceteros scaevola, esse omnes ut sit. Maiorum sensibus corrumpit ad vis, ut mea eros placerat, no vero regione mel. Ut hinc concludaturque has. Ex pro invidunt salutatus. Ut modo nusquam definiebas nec, ei error expetenda euripidis sea, ad.</p>
                         
                         </div>
                
                </div> <!--End of listing_details -->
                    
                    <section class="listing_box">
                    
                        <img src="images/home2_small.png" alt="View from exterior apartment"/>
                        
                        <h3>325 Queens Ave, New Westminster <span>&nbsp;$213,000</span></h3>
                        
                        <p><span>&#8226;</span> Lorem ipsum dolor sit amet, ne ullum facilis argumentum his, cu sint si.</p>
                        <p><span>&#8226;</span> Lorem ipsum dolor sit amet, ne ullum facilis argumentum his, cu sint si.</p>
                        <p><span>&#8226;</span> Lorem ipsum dolor sit amet, ne ullum facilis argumentum his, cu sint si.</p>
                        
                        
                        <button class="button_details group-2" data-group="2">Details</button>
                        
                        <div class="clear"></div>
                    
                    </section> <!--End of listing_box-->
                    
                    <div class="listing_details group-3" data-group="3">
                
                	<button class="escape">X</button>
                    
                    <div class="cycle-slideshow slide" data-cycle-fx="scrollHorz"     data-cycle-pause-on-hover="true" data-cycle-speed="450" data-cycle-prev=".btn_prev"
        data-cycle-next=".btn_next">
                    
                     <div class="cycle-prev"></div>
    				<div class="cycle-next"></div>
  
                        <img src="images/home3_large1.JPG" alt="Large picture of apartment" />
                        <img src="images/home3_large2.JPG" alt="Large picture of apartment" />
                        <img src="images/home3_large3.JPG" alt="Large picture of apartment" />
                        <img src="images/home3_large4.JPG" alt="Large picture of apartment" />
                        <img src="images/home3_large5.JPG" alt="Large picture of apartment" />
  
     				
                     
                         <div class="slide_controls">
                         
                            <div class="btn_prev">
                            </div>
                            
                            <div class="btn_next">
                            </div>
                        
                        </div><!-- end slide_controls -->
                        
                         </div><!-- end gallery -->
                         
                         <div class="details_sidebar">
                         
                             <h3>Price:&nbsp;<span>$309,900</span></h3>
                             
                             <h3>Location:&nbsp;<span>750 15th Street East, North Vancouver</span></h3>
                             
                             <h3>Bedrooms:&nbsp;<span>2</span></h3>
                             
                             <h3>Key amenities:&nbsp;<span>Beautiful view, newly renovated bathroom, large master bedroom.</span></h3>
                             
                             <h3>Date Listed:&nbsp;<span>October 30th, 2013</span></h3>
                             
                             <button class="contact_seller">Contact Seller</button>
                         
                         </div> <!-- End of details sidebar-->
                         
                         <div class="clear"></div>
                         
                         <div class="details_box">
                         
                         	<h3><span>Description:</span></h3>
                            
                            <p>Lorem ipsum dolor sit amet, ne ullum facilis argumentum his, cu sint nemore moderatius quo. Mea tamquam volumus te, duo ei animal patrioque assentior. Et reque tation sed, cu suas choro concludaturque sit, est ex sonet nonumes platonem. Enim tractatos pro in. Decore forensibus eloquentiam ea cum, mel fuisset scripserit no, debet facilisi abhorreant pro ut.</p>

                            <p>Eu his malorum detraxit signiferumque, at consequat temporibus vix. Ea sed noster civibus. Ius consulatu posidonium adversarium no, eum ex ignota aliquid. Ullum consul ea sed. Ne mea sint error, ceteros constituam an nec.</p>
                            
                            <p>Cum ea causae debitis iracundia. Ei vix natum ceteros scaevola, esse omnes ut sit. Maiorum sensibus corrumpit ad vis, ut mea eros placerat, no vero regione mel. Ut hinc concludaturque has. Ex pro invidunt salutatus. Ut modo nusquam definiebas nec, ei error expetenda euripidis sea, ad.</p>
                         
                         </div>
                
                </div> <!--End of listing_details -->
                    
                    <section class="listing_box">
                        
                        <img src="images/home3_small.png" alt="View from exterior apartment"/>
                        
                        <h3>750 15th Street East, North Vancouver <span>&nbsp;$309,900</span></h3>
                        
                        <p><span>&#8226;</span> Lorem ipsum dolor sit amet, ne ullum facilis argumentum his, cu sint si.</p>
                        <p><span>&#8226;</span> Lorem ipsum dolor sit amet, ne ullum facilis argumentum his, cu sint si.</p>
                        <p><span>&#8226;</span> Lorem ipsum dolor sit amet, ne ullum facilis argumentum his, cu sint si.</p>
                        
                        
                        <button class="button_details group-3" data-group="3">Details</button>
                        
                        <div class="clear"></div>
                    
                    </section> <!--End of listing_box-->
                    
                    <div class="listing_details group-4" data-group="4">
                
                	<button class="escape">X</button>
                    
                    <div class="cycle-slideshow slide" data-cycle-fx="scrollHorz"     data-cycle-pause-on-hover="true" data-cycle-speed="450" data-cycle-prev=".btn_prev"
        data-cycle-next=".btn_next">
                    
                     <div class="cycle-prev"></div>
    				<div class="cycle-next"></div>
  
                        <img src="images/home4_large1.JPG" alt="Large picture of apartment" />
                        <img src="images/home4_large2.JPG" alt="Large picture of apartment" />
                        <img src="images/home4_large3.JPG" alt="Large picture of apartment" />
                        <img src="images/home4_large4.JPG" alt="Large picture of apartment" />
                        <img src="images/home4_large5.JPG" alt="Large picture of apartment" />
  
     				
                     
                         <div class="slide_controls">
                         
                            <div class="btn_prev">
                            </div>
                            
                            <div class="btn_next">
                            </div>
                        
                        </div><!-- end slide_controls -->
                        
                         </div><!-- end gallery -->
                         
                         <div class="details_sidebar">
                         
                             <h3>Price:&nbsp;<span>$424,900</span></h3>
                             
                             <h3>Location:&nbsp;<span>2680 Arbutus Street, Vancouver</span></h3>
                             
							 <h3>Bedrooms:&nbsp;<span>3</span></h3>
                             
                             <h3>Key amenities:&nbsp;<span>Spacious living room, solar panels on patio, air conditioning.</span></h3>
                             
                             <h3>Date Listed:&nbsp;<span>October 24th, 2013</span></h3>	
                             
                             <button class="contact_seller">Contact Seller</button>			

                         </div> <!-- End of details sidebar-->
                         
                         <div class="clear"></div>
                         
                         <div class="details_box">
                         
                         	<h3><span>Description:</span></h3>
                            
                            <p>Lorem ipsum dolor sit amet, ne ullum facilis argumentum his, cu sint nemore moderatius quo. Mea tamquam volumus te, duo ei animal patrioque assentior. Et reque tation sed, cu suas choro concludaturque sit, est ex sonet nonumes platonem. Enim tractatos pro in. Decore forensibus eloquentiam ea cum, mel fuisset scripserit no, debet facilisi abhorreant pro ut.</p>

                            <p>Eu his malorum detraxit signiferumque, at consequat temporibus vix. Ea sed noster civibus. Ius consulatu posidonium adversarium no, eum ex ignota aliquid. Ullum consul ea sed. Ne mea sint error, ceteros constituam an nec.</p>
                            
                            <p>Cum ea causae debitis iracundia. Ei vix natum ceteros scaevola, esse omnes ut sit. Maiorum sensibus corrumpit ad vis, ut mea eros placerat, no vero regione mel. Ut hinc concludaturque has. Ex pro invidunt salutatus. Ut modo nusquam definiebas nec, ei error expetenda euripidis sea, ad.</p>
                         
                         </div>
                
                </div> <!--End of listing_details -->
                    
                    <section class="listing_box">
                    
                        <img src="images/home4_small.png" alt="View from exterior apartment"/>
                        
                        <h3>2680 Arbutus Street, Vancouver <span>&nbsp;$424,900</span></h3>
                        
                        <p><span>&#8226;</span> Lorem ipsum dolor sit amet, ne ullum facilis argumentum his, cu sint si.</p>
                        <p><span>&#8226;</span> Lorem ipsum dolor sit amet, ne ullum facilis argumentum his, cu sint si.</p>
                        <p><span>&#8226;</span> Lorem ipsum dolor sit amet, ne ullum facilis argumentum his, cu sint si.</p>
                        
                        
                        <button class="button_details group-4" data-group="4">Details</button>
                        
                        <div class="clear"></div>
                    
                    </section> <!--End of listing_box-->
                    
                    <div class="listing_details group-5" data-group="5">
                
                	<button class="escape">X</button>
                    
                    <div class="cycle-slideshow slide" data-cycle-fx="scrollHorz"     data-cycle-pause-on-hover="true" data-cycle-speed="450" data-cycle-prev=".btn_prev"
        data-cycle-next=".btn_next">
                    
                     <div class="cycle-prev"></div>
    				<div class="cycle-next"></div>
  
                        <img src="images/home5_large1.JPG" alt="Large picture of apartment" />
                        <img src="images/home5_large2.JPG" alt="Large picture of apartment" />
                        <img src="images/home5_large3.JPG" alt="Large picture of apartment" />
                        <img src="images/home5_large4.JPG" alt="Large picture of apartment" />
                        <img src="images/home5_large5.JPG" alt="Large picture of apartment" />
  
     				
                     
                         <div class="slide_controls">
                         
                            <div class="btn_prev">
                            </div>
                            
                            <div class="btn_next">
                            </div>
                        
                        </div><!-- end slide_controls -->
                        
                         </div><!-- end gallery -->
                         
                         <div class="details_sidebar">
                         
                             <h3>Price:&nbsp;<span>$295,000</span></h3>
                             
                             <h3>Location:&nbsp;<span>970 Grange Street, Burnaby</span></h3>
                             
                             <h3>Bedrooms:&nbsp;<span>2</span></h3>
                             
                             <h3>Key amenities:&nbsp;<span>electric fireplace, laundry shoot in closet, heated floors.</span></h3>
                             
                             <h3>Date Listed:&nbsp;<span>October 13th, 2013</span></h3>
                             
                             <button class="contact_seller">Contact Seller</button>
                         
                         </div> <!-- End of details sidebar-->
                         
                         <div class="clear"></div>
                         
                         <div class="details_box">
                         
                         	<h3><span>Details:</span></h3>
                            
                            <p>Lorem ipsum dolor sit amet, ne ullum facilis argumentum his, cu sint nemore moderatius quo. Mea tamquam volumus te, duo ei animal patrioque assentior. Et reque tation sed, cu suas choro concludaturque sit, est ex sonet nonumes platonem. Enim tractatos pro in. Decore forensibus eloquentiam ea cum, mel fuisset scripserit no, debet facilisi abhorreant pro ut.</p>

                            <p>Eu his malorum detraxit signiferumque, at consequat temporibus vix. Ea sed noster civibus. Ius consulatu posidonium adversarium no, eum ex ignota aliquid. Ullum consul ea sed. Ne mea sint error, ceteros constituam an nec.</p>
                            
                            <p>Cum ea causae debitis iracundia. Ei vix natum ceteros scaevola, esse omnes ut sit. Maiorum sensibus corrumpit ad vis, ut mea eros placerat, no vero regione mel. Ut hinc concludaturque has. Ex pro invidunt salutatus. Ut modo nusquam definiebas nec, ei error expetenda euripidis sea, ad.</p>
                         
                         </div>
                
                </div> <!--End of listing_details -->
                    
                    <section class="listing_box">
                    
                    	<img src="images/home5_small.png" alt="View from exterior apartment"/>
                        
                        <h3>970 Grange Street, Burnaby <span>&nbsp;$295,000</span></h3>
                        
                        <p><span>&#8226;</span> Lorem ipsum dolor sit amet, ne ullum facilis argumentum his, cu sint si.</p>
                        <p><span>&#8226;</span> Lorem ipsum dolor sit amet, ne ullum facilis argumentum his, cu sint si.</p>
                        <p><span>&#8226;</span> Lorem ipsum dolor sit amet, ne ullum facilis argumentum his, cu sint si.</p>
                        
                        
                        <button class="button_details group-5" data-group="5">Details</button>
                     
                    	<div class="clear"></div>
                        
                    </section> <!--End of listing_box-->
                    
                    <div class="listing_pages">
                    
                    	<a href="#"><div class="previous_page"></div>Previous Page</a>
                    
                    	<a href="#"><span>1</span></a><p>/</p>
                        
                        <a href="#">2</a><p>/</p>
                        
                        <a href="#">3</a><p>/</p>
                        
                        <a href="#">4</a><p>/</p>
                        
                        <a href="#">5</a>
                        
                        <a href="#">Next Page<div class="next_page"></div></a>
                    
                    </div>
                    
                    <div class="clear"></div>
                    
                </section> <!--End of midContent-->
                
            </section> <!--End of mainMid-->
        </main>
		<?php require('./templates/footer.php'); ?>
    </body>
</html>