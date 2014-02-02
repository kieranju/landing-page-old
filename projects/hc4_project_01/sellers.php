<?php 
	$navHome = '<li><h3><a href="index.php">HOME</a></h3></li';
	$navListing = '><li><h3><a href="listings.php">LISTING</a></h3></li';
	$navBuyers = '><li><h3><a href="buyers.php">BUYERS</a></h3></li';
	$navSellers = '><li id="current"><h3><a href="sellers.php">SELLERS</a></h3></li';
	$navContact = '><li><h3><a href="contact.php">CONTACT</a></h3></li>';
	
	$pageTitle = 'Reineer &ndash; Sellers';
	
	require('./templates/header.php');
?>

        <main>
            <section class="mainTop"></section>
            <section class="mainMid">
                <section class="midContent">
				
				<div class="wrapper">
					<h3>Seller Form</h3>
					<p>Selling a condo in Vancouver is decision worth much consideration. When it comes time to decide if you should be selling your Vancouver home many factors weigh into that decision.  There is no doubt selling a house in Vancouver is as much about timing as it needs or wants. We have seen the Vancouver market featured in the media, but what is really happening in your neighbourhood? </p>
					<p>Our company can give you up-to-date information on what&rsquo;s happening in the marketplace, as well as the price, financing, terms and condition of competing properties. These are key factors in getting your property sold at the best price, quickly and with minimum hassle. We will ensure your property is marketed well to maximize its exposure to other real estate agents and the public. We know when and where to market your property to generate the most interest and potential sales opportunities. When you do receive offers on your home, we will help you objectively evaluate every buyer&rsquo;s proposal without compromising your goals. Throughout the selling process, we are always available to address any questions or concerns you may have.</p>
					<p>If you're thinking of selling your home, we can help you. Please fill out the form below to request your home's current market value and a suggested listing price.</p>			
					
					<form action="process_form.php" method="post" id="for sellers" class="content_form">
						<input type='hidden' name='data[form_type]' value='For Sellers'>
						<ul id='formTop'>
						
							<ul id="formTopLeft">
								<li class='for_sellers_address'>
									<label for='for_sellers_address'><span>*</span> Address</label> <input type='text' id='for_sellers_address' placeholder="1234 Boulevard Street" name='data[Address]' value='' size='20' maxlength='250' required/>
								</li>
								
								<li class='for_sellers_city'>
									<label for='for_sellers_city' ><span>*</span> City</label> <input type='text' id='for_sellers_city' name='data[City]' value='' placeholder="Vancouver" size='20' maxlength='250' required/>
								</li>
								
								<li class='for_sellers_lot_size'>
									<label for='for_sellers_lot_size' >Lot Size</label> <input type='text' id='for_sellers_lot_size' name='data[Lot Size]' value='' size='20' placeholder="2500&sup2; Feet" maxlength='250'/>
								</li>
								
								<li class='for_sellers_moving_selling'>
									<label for='for_sellers_moving_selling' >Moving/Selling</label> <select name='data[Moving/Selling]' id='for_sellers_moving_selling'><option  value='1-3 months'>1-3 months</option><option  value='4-6 months'>4-6 months</option><option  value='6 months or longer'>6 months or longer</option></select>
								</li>
							</ul>
							
							<ul id="formTopRight">
								<li class='for_sellers_name'>
									<label for='for_sellers_name'><span>*</span> Name</label> <input type='text' id='for_sellers_name' name='data[Name]' value='' size='20' placeholder="John Smith" maxlength='250' required/>
								</li>
								
								<li class='for_sellers_email'>
									<label for='for_sellers_email' ><span>*</span> Email</label> <input  type="email" placeholder="john@mail.com" id='for_sellers_email' name='data[Email]' value='' size='20' maxlength='250'  required/>
								</li>
								
								<li class='for_sellers_phone'>
									<label for='for_sellers_phone' >Phone</label> <input type='text' id='for_sellers_phone' name='data[Phone]' value='' size='20' placeholder="604 555 1234" maxlength='250'/>
								</li>
                                
                                <li class='for_sellers_mobile'>
									<label for='for_sellers_mobile'>Mobile</label> <input type='text' id='for_sellers_mobile' name='data[Mobile]' value='' size='20' placeholder="604 555 1234" maxlength='250'/>
								</li>

						</ul>
						
                        <br />
                        <br />
                        
						<ul id='formBtm'>
							<ul id="formTopLeft">
							
								<li class='for_sellers_bedrooms'>
									<label for='for_sellers_bedrooms'>Bedrooms</label> <input type='number' min="1" id='for_sellers_bedrooms' name='data[Bedrooms]' placeholder="1" value='' size='20' maxlength='250'/>
								</li>
								
								<li class='for_sellers_bathrooms'>
									<label for='for_sellers_bathrooms'>Bathrooms</label> <input type='number' min="1" id='for_sellers_bathrooms' name='data[Bathrooms]' value='' placeholder="1" size='20' maxlength='250'/>
								</li>
                                
                                <li class='for_sellers_appliances_included'>
								<label for='for_sellers_appliances_included'>Appliances Included</label> <input type='text' id='for_sellers_appliances_included' placeholder="fridge" name='data[Appliances Included]' value='' size='20' maxlength='250'/>
							</li>
								
							</ul>
							
							<li class='for_sellers_price'>
								<label for='for_sellers_price'>Price</label> <input type='text' id='for_sellers_price' name='data[Price]' value='' size='20'  placeholder="$295,000" maxlength='250'/>
							</li>
						</ul>
						
						<ul id='form_comments'>
							<li class='for_buyers_comments'>
								<label for='for_buyers_comments'></label>
								<textarea name='data[Comments]' placeholder="Comments" id='for_buyers_comments' cols='45' rows='7'></textarea>
							</li>
						</ul>
						
						<li class='newsletter'>
							<label for='newsletter'>Receive Newsletter</label><input type='checkbox' id='for_buyers_receive_newsletter' name='data[Receive Newsletter]'/>
						</li>

						<input type="submit" class="submit" name="submit" value="Submit this form"/>
					</form>
				</div>
                    
                </section>
            </section>
        </main>
		<?php require('./templates/footer.php'); ?>
    </body>
</html>