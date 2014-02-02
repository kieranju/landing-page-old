<?php 
	$navHome = '<li><h3><a href="index.php">HOME</a></h3></li';
	$navListing = '><li><h3><a href="listings.php">LISTING</a></h3></li';
	$navBuyers = '><li id="current"><h3><a href="sellers.php">BUYERS</a></h3></li';
	$navSellers = '><li><h3><a href="sellers.php">SELLERS</a></h3></li';
	$navContact = '><li><h3><a href="contact.php">CONTACT</a></h3></li>';
	
	$pageTitle = 'Reineer &ndash; Buyers';
	
	require('./templates/header.php');
?>

        <main>
            <section class="mainTop"></section>
            <section class="mainMid">
                <section class="midContent">
				
					<div class="wrapper">
                        <h3>Buyer Form</h3>
                        <p>We understand the decision to buy a condo in Vancouver is not made lightly. The relationship between home-buyers and Agents must be based on trust, mutual goals and understanding&ndash;this is why we always keep your interests first and foremost. The real estate process requires negotiation of complex issues; we are committed to working in your best interests. We will help you secure the best possible price, with the most favourable terms, in the shortest period of time.</p>
                        <p>When searching for your dream home, it&rsquo;s important to be well informed of the Real Estate market. To help you with this process, consider the following factors: What features do you require in a home to satisfy your lifestyle now? Five years from now? Will your needs change? What&rsquo;s your budget? These are decisions only you can make, but we will do everything possible to match you with your dream home.</p>	
                        <p>If you're thinking of buying a condo, we can help you. Please fill out the form below to describe your requirement.</p>	
                        
                        <form action="process_form.php" method="post" id="for buyers" class="content_form">
                            <input type='hidden' name='data[form_type]' value='For Buyers'>
                            
                            <ul id="formTop">
                                <div id="formTopLeft">
                                    <li class='for_buyers_Ideal_location'>
<label for='for_buyers_Ideal_location' ><span>*</span> Ideal Location</label>
           <select id="ideal_location" name="ideal_location">
             <option value="Vancouver" selected>Vancouver</option>
             <option value="Burnaby">Burnaby</option>
             <option value="New Westminster">New Westminster</option>
             <option value="Coquitlam">Coquitlam</option>
             <option value="Surrey">Surrey</option>
             </select><br /></li>

                                    
                                    <li class='for_buyers_price_range'>
<label for='for_buyers_price_range' ><span>*</span> Price Range</label>
           <select id="price_range" name="price_range">
             <option value="Below $150,000" selected>Below $150,000</option>
             <option value="$150,001 - $300,000">$150,001 - $300,000</option>
             <option value="$300,001 - $450,000">$300,001 - $450,000</option>
             <option value="$450,001 - $600,000">$450,001 - $600,000</option>
             <option value="Over $600,000">Over $600,000</option>
           </select><br /></li>
                                    
                                    <li class='for_buyers_Type_of_home'>
<label for='for_buyers_Type_of_home' ><span>*</span> Type Of Home</label>
           <select id="type_of_home" name="type_of_home" required>
             <option value="1 bed room" selected>1 bed room</option>
             <option value="2 bed rooms">2 bed rooms</option>
             <option value="3 bed rooms">3 bed rooms</option>
             <option value="more than 3 bed rooms">3+ bed rooms</option>
           </select><br /></li>
                                </div>
                                
                                <div id="formTopRight">
                                    <li class='for_buyers_name'>
                                        <label for='for_buyers_name'><span>*</span> Name<br/></label><input type='text' placeholder="John Smith" id='for_buyers_name' name='data[Name]' value='' size='20' maxlength='250' required/>
                                    </li>
                                    
                                    <li class='for_buyers_email'>
                                        <label for='for_buyers_email'><span>*</span> Email<br/></label><input type="email" placeholder="john@mail.com" id='for_buyers_email' name='data[Email]' value='' size='20' maxlength='250' required/>
                                    </li>
                                    
                                <li class='for_buyers_phone'>
                                    <label for='for_buyers_phonee'>Phone</label><input type="tel" placeholder="604 555 4321" id='for_buyers_phone' name='data[Phone]' value='' size='20' maxlength='250'/>
                                </li>
                                
                                <li class='for_buyers_mobile'>
                                    <label for='for_buyers_mobile'>Mobile</label><input type="tel" placeholder="604 555 1234" id='for_buyers_mobile' name='data[Mobile]' value='' size='20' maxlength='250'/>
                                </li>
                                
                                </div>
                            </ul>
                            
                            <ul id="formBtm">    
                                
                                <li class='for_buyers_min_bedrooms'>
                                    <label for='for_buyers_min_bedrooms'>Min Bedrooms</label><input type='number' min="1" id='for_buyers_min_bedrooms' name='data[Min Bedrooms]' value='' placeholder="1" size='20' maxlength='250'/>
                                </li>
                                
                                <li class='for_buyers_min_bathrooms'>
                                        <label for='for_buyers_min_bathrooms'>Min Bathrooms</label><input type='number' min="1" id='for_buyers_min_bathrooms' name='data[Min Bathrooms]' placeholder="1" value='' size='20' maxlength='250'/>
                                    </li>
                                
                                <div>
                                    
                                    <li class='for_buyers_preferred_moving_date'>
                                        <label for='for_buyers_preferred_moving_date'>Preferred Moving Date</label><input type='text' id="datepicker" placeholder="11/04/2013" name='data[Preferred Moving Date]' value='' size='20' maxlength='250'/>
                                    </li>
                                </div>
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