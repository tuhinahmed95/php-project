
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
	

	
	<!--====== REQUEST A QUOTE ==========-->
	<section>
        <div class="tb-space cus-pack-form">
            <div class="rows container">
                <div class="spe-title cus-title">
                    <h2>Book your <span>Custom Package</span> Now!</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
                </div>
                <div class="cus-book-form form_1">
						<form class="contact__form v2-search-form" method="post" action="http://rn53themes.net/themes/demo/travelz/mail/custombooking.php">
							<div class="alert alert-success contact__msg" style="display: none" role="alert">
								Thank you for arranging a wonderful trip for us! Our team will contact you shortly!
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input type="text"  class="validate" name="name" required>
									<label>Enter your name</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input type="number"  class="validate" name="phone" required>
									<label>Enter your phone</label>
								</div>
								<div class="input-field col s6">
									<input type="email"  class="validate" name="email" required>
									<label>Enter your email</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<select name="howmanytravellers">
										<option value="" disabled selected>How many travellers?</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
								  <input type="text" class="validate" name="travelername1">
								  <label>Traveller name 1</label>
								</div>
								<div class="input-field col s12">
									<input type="text" class="validate" name="travelername2">
									<label>Traveller name 2</label>
								</div>
								<div class="input-field col s12">
									<input type="text" class="validate" name="travelername3">
									<label>Traveller name 3</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input type="text" id="select-city-1" class="autocomplete validate" name="city">
									<label for="select-city-1">Select City or Place</label>
								</div>
								<div class="input-field col s12">
									<select name="package">
										<option value="" disabled selected>Select your package</option>
										<option value="Honeymoon Package">Honeymoon Package</option>
										<option value="Family Package">Family Package</option>
										<option value="Holiday Package">Holiday Package</option>
										<option value="Group Package">Group Package</option>
										<option value="Regular Package">Regular Package</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input type="text" id="from" name="arrival" readonly>
									<label for="from">Arrival Date</label>
								</div>
								<div class="input-field col s6">
									<input type="text" id="to" name="departure" readonly>
									<label for="to">Departure Date</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<select name="noofadults">
										<option value="" disabled selected>No of adults</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
									</select>
								</div>
								<div class="input-field col s6">
									<select name="noofchildrens">
										<option value="" disabled selected>No of childrens</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>											
									</select>
								</div>
							</div>							

							<div class="row">
								<div class="input-field col s6">
									<select name="minprice">
										<option value="" disabled selected>Min Price</option>
										<option value="$200">$200</option>
										<option value="$500">$500</option>
										<option value="$1000">$1000</option>
										<option value="$5000">$5000</option>
										<option value="$10,000">$10,000</option>
										<option value="$50,000">$50,000</option>
									</select>
								</div>
								<div class="input-field col s6">
									<select name="maxprice">
										<option value="" disabled selected>Max Price</option>
										<option value="$200">$200</option>
										<option value="$500">$500</option>
										<option value="$1000">$1000</option>
										<option value="$5000">$5000</option>
										<option value="$10,000">$10,000</option>
										<option value="$50,000">$50,000</option>
									</select>
								</div>								
							</div>						
							<div class="row">
								<div class="input-field col s12">
									<input type="submit" value="Book Now" class="waves-effect waves-light tourz-sear-btn v2-ser-btn">
								</div>
							</div>
						</form>
                </div>
            </div>
        </div>
    </section>
	
<!--====== HOME HOTELS ==========-->
	<section>
		<div class="rows tb-space pad-bot-redu">
			<div class="container">
				<!-- TITLE & DESCRIPTION -->
				<div class="spe-title">
					<h2>Popular <span>Cities</span> </h2>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide. Book Hotel rooms and enjoy your holidays with distinctive experience</p>
				</div>
				<!-- CITY -->
				<div class="col-md-6">
					<a href="tour-details.php">
						<div class="tour-mig-like-com">
							<div class="tour-mig-lc-img"> <img src="images/listing/home.jpg" alt=""> </div>
							<div class="tour-mig-lc-con">
								<h5>Europe</h5>
								<p><span>12 Packages</span> Starting from $2400</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="tour-details.php">
						<div class="tour-mig-like-com">
							<div class="tour-mig-lc-img"> <img src="images/listing/home3.jpg" alt=""> </div>
							<div class="tour-mig-lc-con tour-mig-lc-con2">
								<h5>Dubai</h5>
								<p>Starting from $2400</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="tour-details.php">
						<div class="tour-mig-like-com">
							<div class="tour-mig-lc-img"> <img src="images/listing/home2.jpg" alt=""> </div>
							<div class="tour-mig-lc-con tour-mig-lc-con2">
								<h5>India</h5>
								<p>Starting from $2400</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="tour-details.php">
						<div class="tour-mig-like-com">
							<div class="tour-mig-lc-img"> <img src="images/listing/home1.jpg" alt=""> </div>
							<div class="tour-mig-lc-con tour-mig-lc-con2">
								<h5>Usa</h5>
								<p>Starting from $2400</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="tour-details.php">
						<div class="tour-mig-like-com">
							<div class="tour-mig-lc-img"> <img src="images/listing/home4.jpg" alt=""> </div>
							<div class="tour-mig-lc-con tour-mig-lc-con2">
								<h5>London</h5>
								<p>Starting from $2400</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!--====== HOME HOTELS ==========-->
	<section>
		<div class="rows tb-space pad-top-o pad-bot-redu">
			<div class="container">
				<!-- TITLE & DESCRIPTION -->
				<div class="spe-title">
					<h2>Hotels <span>booking open now! </span> </h2>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide. Book Hotel rooms and enjoy your holidays with distinctive experience</p>
				</div>
				<!-- HOTEL GRID -->
				<div class="to-ho-hotel">
					<!-- HOTEL GRID -->
					<div class="col-md-4">
						<div class="to-ho-hotel-con">
							<div class="to-ho-hotel-con-1">
								<div class="hot-page2-hli-3"> <img src="images/hci1.png" alt=""> </div>
								<div class="hom-hot-av-tic"> Available Tickets: 42 </div> <img src="images/hotels/1.jpg" alt=""> </div>
							<div class="to-ho-hotel-con-23">
								<div class="to-ho-hotel-con-2"> <a href="hotel-details.php"><h4>GTC Grand Chola</h4></a> </div>
								<div class="to-ho-hotel-con-3">
									<ul>
										<li>City: illunois,united states
											<div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
										</li>
										<li><span class="ho-hot-pri-dis">$720</span><span class="ho-hot-pri">$420</span> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- HOTEL GRID -->
					<div class="col-md-4">
						<div class="to-ho-hotel-con">
							<div class="to-ho-hotel-con-1">
								<div class="hot-page2-hli-3"> <img src="images/hci1.png" alt=""> </div>
								<div class="hom-hot-av-tic"> Available Tickets: 520 </div> <img src="images/hotels/2.jpg" alt=""> </div>
							<div class="to-ho-hotel-con-23">
								<div class="to-ho-hotel-con-2"> <a href="hotel-details.php"><h4>Taaj Grand Resorts</h4></a> </div>
								<div class="to-ho-hotel-con-3">
									<ul>
										<li>City: illunois,united states
											<div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
										</li>
										<li><span class="ho-hot-pri-dis">$840</span><span class="ho-hot-pri">$540</span> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- HOTEL GRID -->
					<div class="col-md-4">
						<div class="to-ho-hotel-con">
							<div class="to-ho-hotel-con-1">
								<div class="hot-page2-hli-3"> <img src="images/hci1.png" alt=""> </div>
								<div class="hom-hot-av-tic"> Available Tickets: 92 </div> <img src="images/hotels/3.jpg" alt=""> </div>
							<div class="to-ho-hotel-con-23">
								<div class="to-ho-hotel-con-2"> <a href="hotel-details.php"><h4>Keep Grand Hotels</h4></a> </div>
								<div class="to-ho-hotel-con-3">
									<ul>
										<li>City: illunois,united states
											<div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
										</li>
										<li><span class="ho-hot-pri-dis">$680</span><span class="ho-hot-pri">$380</span> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== SECTION: FREE CONSULTANT ==========-->
	<!--====== REQUEST A QUOTE ==========-->
	<section>
		<div class="ho-popu tb-space pad-bot-redu">
			<div class="rows container">
				<!-- TITLE & DESCRIPTION -->
				<div class="spe-title">
					<h2>Top <span>Branding</span> for this month</h2>
					<div class="title-line">
						<div class="tl-1"></div>
						<div class="tl-2"></div>
						<div class="tl-3"></div>
					</div>
					<p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
				</div>
				<div class="ho-popu-bod">
					<div class="col-md-4">
						<div class="hot-page2-hom-pre-head">
							<h4>Top Branding <span>Hotels</span></h4> </div>
						<div class="hot-page2-hom-pre">
							<ul>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.php">
										<div class="hot-page2-hom-pre-1"> <img src="images/hotels/1.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>Taaj Club House</h5> <span>City: illunois, United States</span> </div>
										<div class="hot-page2-hom-pre-3"> <span>4.5</span> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.php">
										<div class="hot-page2-hom-pre-1"> <img src="images/hotels/2.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>Universal luxury Grand Hotel</h5> <span>City: Rio,Brazil</span> </div>
										<div class="hot-page2-hom-pre-3"> <span>4.2</span> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.php">
										<div class="hot-page2-hom-pre-1"> <img src="images/hotels/3.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>Barcelona Grand Pales</h5> <span>City: Chennai,India</span> </div>
										<div class="hot-page2-hom-pre-3"> <span>5.0</span> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.php">
										<div class="hot-page2-hom-pre-1"> <img src="images/hotels/4.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>Lake Palace view Hotel</h5> <span>City: Beijing,China</span> </div>
										<div class="hot-page2-hom-pre-3"> <span>2.5</span> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.php">
										<div class="hot-page2-hom-pre-1"> <img src="images/hotels/8.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>First Class Grandd Hotel</h5> <span>City: Berlin,Germany</span> </div>
										<div class="hot-page2-hom-pre-3"> <span>4.0</span> </div>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<div class="hot-page2-hom-pre-head">
							<h4>Top Branding <span>Packages</span></h4> </div>
						<div class="hot-page2-hom-pre">
							<ul>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.php">
										<div class="hot-page2-hom-pre-1"> <img src="images/trends/1.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>Family Package Luxury</h5> <span>Duration: 7 Days and 6 Nights</span> </div>
										<div class="hot-page2-hom-pre-3"> <span>4.1</span> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.php">
										<div class="hot-page2-hom-pre-1"> <img src="images/trends/2.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>Honeymoon Package Luxury</h5> <span>Duration: 14 Days and 13 Nights</span> </div>
										<div class="hot-page2-hom-pre-3"> <span>4.4</span> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.php">
										<div class="hot-page2-hom-pre-1"> <img src="images/trends/3.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>Group Package Luxury</h5> <span>Duration: 28 Days and 29 Nights</span> </div>
										<div class="hot-page2-hom-pre-3"> <span>3.0</span> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.php">
										<div class="hot-page2-hom-pre-1"> <img src="images/trends/4.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>Regular Package Luxury</h5> <span>Duration: 12 Days and 11 Nights</span> </div>
										<div class="hot-page2-hom-pre-3"> <span>3.5</span> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.php">
										<div class="hot-page2-hom-pre-1"> <img src="images/trends/1.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>Custom Package Luxury</h5> <span>Duration: 10 Days and 10 Nights</span> </div>
										<div class="hot-page2-hom-pre-3"> <span>5.0</span> </div>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<div class="hot-page2-hom-pre-head">
							<h4>Top Branding <span>Reviewers</span></h4> </div>
						<div class="hot-page2-hom-pre">
							<ul>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.php">
										<div class="hot-page2-hom-pre-1"> <img src="images/reviewer/1.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>Christopher</h5> <span>No of Reviews: 620, City: illunois</span> </div>
										<div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.php">
										<div class="hot-page2-hom-pre-1"> <img src="images/reviewer/2.png" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>Matthew</h5> <span>No of Reviews: 48, City: Rio</span> </div>
										<div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.php">
										<div class="hot-page2-hom-pre-1"> <img src="images/reviewer/3.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>Stephanie</h5> <span>No of Reviews: 560, City: Chennai</span> </div>
										<div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.php">
										<div class="hot-page2-hom-pre-1"> <img src="images/reviewer/4.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>Robert</h5> <span>No of Reviews: 920, City: Beijing</span> </div>
										<div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
									</a>
								</li>
								<!--LISTINGS-->
								<li>
									<a href="hotels-list.php">
										<div class="hot-page2-hom-pre-1"> <img src="images/reviewer/5.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2">
											<h5>Danielle</h5> <span>No of Reviews: 768, City: Berlin</span> </div>
										<div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== REQUEST A QUOTE ==========-->
	<section>
		<div class="foot-mob-sec tb-space">
			<div class="rows container">
				<!-- FAMILY IMAGE(YOU CAN USE ANY PNG IMAGE) -->
				<div class="col-md-6 col-sm-6 col-xs-12 family"> <img src="images/mobile.png" alt="" /> </div>
				<!-- REQUEST A QUOTE -->
				<div class="col-md-6 col-sm-6 col-xs-12">
					<!-- THANK YOU MESSAGE -->
					<div class="foot-mob-app">
						<h2>Have you tried our mobile app?</h2>
						<p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
						<ul>
							<li><i class="fa fa-check" aria-hidden="true"></i> Easy Hotel Booking</li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Tour and Travel Packages</li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Package Reviews and Ratings</li>
							<li><i class="fa fa-check" aria-hidden="true"></i> Manage your Bookings, Enquiry and Reviews</li>
						</ul>
						<a href="#"><img src="images/android.png" alt=""> </a>
						<a href="#"><img src="images/apple.png" alt=""> </a>
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