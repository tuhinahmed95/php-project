<?php
	include dirname(__FILE__) .'/include/header.php';
	include dirname(__FILE__) .'/include/navbar.php';
?>

<body>	
		<!-- TOP SEARCH BOX -->
        <div class="search-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-form">
						<form class="tourz-search-form">
							<div class="input-field">
								<input type="text" id="select-city" class="autocomplete">
								<label for="select-city">Enter city</label>
							</div>
							<div class="input-field">
								<input type="text" id="select-search" class="autocomplete">
								<label for="select-search" class="search-hotel-type">Search over a million tour and travels, sight seeings, hotels and more</label>
							</div>
							<div class="input-field">
								<input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn"> </div>
						</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- END TOP SEARCH BOX -->
    </section>
    <!--END HEADER SECTION-->
		
	<!--====== FAQ ==========-->
	<section>
		<div class="form form-spac rows">
			<div class="container">
				<!-- TITLE & DESCRIPTION -->
				<div class="spe-title col-md-12">
					<h2>Frequency Asked <span>Questions</span></h2>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 form_1 faq-form wow fadeInLeft" data-wow-duration="1s">
					<!--====== THANK YOU MESSAGE ==========-->
					<form class="contact__form v2-search-form" method="post" action="http://rn53themes.net/themes/demo/travelz/mail/faq.php">
							<div class="alert alert-success contact__msg" style="display: none" role="alert">
								Thank you message
							</div>
						<ul>
							<li>
								<input type="text" name="name" value="" placeholder="Name" required> </li>
							<li>
								<input type="tel" name="phone" value="" placeholder="Mobile" required> </li>
							<li>
								<input type="email" name="email" value="" placeholder="Email id" required> </li>
							<li>
								<input type="text" name="city" value="" placeholder="City" required> </li>
							<li>
								<input type="text" name="ecount" value="" placeholder="Country" required> </li>
							<li>
								<textarea name="emess" cols="40" rows="3" placeholder="Enter your message"></textarea>
							</li>
							<li>
								<input type="submit" value="Submit" id="send_button"> </li>
						</ul>
					</form>
				</div>
				<!--====== COMMON NOTICE ==========-->
				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="1s">
					<div class="rows book_poly">
						<h3>Common Notice</h3>
						<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages</p>
						<ul>
							<li>But the majority have suffered alteration in some form, by injected humour</li>
							<li>All the Lorem Ipsum generators on the Internet tend to repeat</li>
							<li>The generated Lorem Ipsum is therefore always free from repetition</li>
							<li>Proof : Id proof mandatory for tour travel</li>
							<li>available, but the majority have suffered alteration in some form</li>
							<li>It has survived not only five centuries, but also the leap</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== TIPS BEFORE TRAVEL ==========-->
	<section>
		<div class="rows tips tips-home tb-space home_title">
			<div class="container tips_1">
				<!-- TIPS BEFORE TRAVEL -->
				<div class="col-md-4 col-sm-6 col-xs-12">
					<h3>Tips Before Travel</h3>
					<div class="tips_left tips_left_1">
						<h5>Bring copies of your passport</h5>
						<p>Aliquam pretium id justo eget tristique. Aenean feugiat vestibulum blandit.</p>
					</div>
					<div class="tips_left tips_left_2">
						<h5>Register with your embassy</h5>
						<p>Mauris efficitur, ante sit amet rhoncus malesuada, orci justo sollicitudin.</p>
					</div>
					<div class="tips_left tips_left_3">
						<h5>Always have local cash</h5>
						<p>Donec et placerat ante. Etiam et velit in massa. </p>
					</div>
				</div>
				<!-- CUSTOMER TESTIMONIALS -->
				<div class="col-md-8 col-sm-6 col-xs-12 testi-2">
					<!-- TESTIMONIAL TITLE -->
					<h3>Customer Testimonials</h3>
					<div class="testi">
						<h4>John William</h4>
						<p>Ut sed sem quis magna ultricies lacinia et sed tortor. Ut non tincidunt nisi, non elementum lorem. Aliquam gravida sodales</p> <address>Illinois, United States of America</address> </div>
					<!-- ARRANGEMENTS & HELPS -->
					<h3>Arrangement & Helps</h3>
					<div class="arrange">
						<ul>
							<!-- LOCATION MANAGER -->
							<li>
								<a href="#"><img src="images/Location-Manager.png" alt=""> </a>
							</li>
							<!-- PRIVATE GUIDE -->
							<li>
								<a href="#"><img src="images/Private-Guide.png" alt=""> </a>
							</li>
							<!-- ARRANGEMENTS -->
							<li>
								<a href="#"><img src="images/Arrangements.png" alt=""> </a>
							</li>
							<!-- EVENT ACTIVITIES -->
							<li>
								<a href="#"><img src="images/Events-Activities.png" alt=""> </a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include dirname(__FILE__) .'/include/footer.php'; ?>
	