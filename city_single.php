
    <?php include'header.php';
    	include 'citydata.php';
    	 ?>


    <!-- carousel images -->
    <section class="banner">
        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
				<div class="carousel-inner">
				    <div class="carousel-item active carousel_img" data-bs-interval="2000">
					    <img src="img/carousel1.jpg">
					    <div class="caption_top">
					    	<p><img src="img/cloud.svg" alt="cloud"> 23&deg;C</p>
                            <p><img src="img/club.svg" alt="club"> 3 Clubs </p> 
                            <p><img src="img/routes.svg" alt="rout"> 4 Routes</p>
					    </div>
                        <div class="caption_bottom">
					        <h5>Explore the beauty of <br>Paris. France</h5>
					    </div>
				    </div>
				    <div class="carousel-item carousel_img" data-bs-interval="2000">
					    <img src="img/banner2.jpg">
                        <div class="caption_top">
					    	<p><img src="img/cloud.svg" alt="cloud"> 23&deg;C</p>
                            <p><img src="img/club.svg" alt="club"> 3 Clubs </p> 
                            <p><img src="img/routes.svg" alt="rout"> 4 Routes</p>
					    </div>
                        <div class="caption_bottom">
					        <h5>Explore the beauty of <br>Paris. France</h5>
					    </div>
				    </div>
				    <div class="carousel-item carousel_img" data-bs-interval="2000">
					    <img src="img/Rectangle43.jpg">
                        <div class="caption_top">
					    	<p><img src="img/cloud.svg" alt="cloud"> 23&deg;C</p>
                            <p><img src="img/club.svg" alt="club"> 3 Clubs </p> 
                            <p><img src="img/routes.svg" alt="rout"> 4 Routes</p>
					    </div>
                        <div class="caption_bottom">
					        <h5>Explore the beauty of <br>Paris. France</h5>
					    </div>
				    </div>
				</div>
			</div>
        </div>
    </section>

    <!-- gdp section  -->
    <section class="gdp">
        <div class="container">
            <div class="owl-carousel owl-carousel4 owl-theme gdp_carousel">
                <div class="gdp_details_box">
                    <div class="gdp_box">
                        <div class="gdp_icon">
                            <img src="img/gdp_bar.svg" alt="gdp">
                        </div>
                        <div class="gdp_det">
                            <p>GDP per capita</p>
                            <h3>&#36;<?= $gdp ?> / year</h3>
                        </div>
                    </div>
                    <div class="gdp_box gdp_box_bottom">
                        <div class="gdp_icon">
                            <img src="img/language.svg" alt="language">
                        </div>
                        <div class="gdp_det">
                            <p>Languages</p>
                            <h3>English, Spanish</h3>
                        </div>
                    </div>
                </div>
                <div class="gdp_details_box">
                    <div class="gdp_box">
                        <div class="gdp_icon">
                            <img src="img/people.svg" alt="people">
                        </div>
                        <div class="gdp_det">
                            <p>Tourists Now</p>
                            <h3><?= $tourism ?> People</h3>
                        </div>
                    </div>
                    <div class="gdp_box gdp_box_bottom">
                        <div class="gdp_icon">
                            <img src="img/flag.svg" alt="flag">
                        </div>
                        <div class="gdp_det">
                            <p>Ethnicity</p>
                            <h3>Asian, Africans</h3>
                        </div>
                    </div>
                </div>
                <div class="gdp_details_box">
                    <div class="gdp_box">
                        <div class="gdp_icon">
                            <img src="img/wifi.svg" alt="wifi">
                        </div>
                        <div class="gdp_det">
                            <p>Internet speed</p>
                            <h3>24 MBPS</h3>
                        </div>
                    </div>
                    <div class="gdp_box gdp_box_bottom">
                        <div class="gdp_icon">
                            <img src="img/lgbt.svg" alt="lgbt">
                        </div>
                        <div class="gdp_det">
                            <p>Others</p>
                            <h3>LGBTG Friendly</h3>
                        </div>
                    </div>
                </div>
                <div class="gdp_details_box">
                    <div class="gdp_box">
                        <div class="gdp_icon">
                            <img src="img/euro.svg" alt="euro">
                        </div>
                        <div class="gdp_det">
                            <p>10 EUR in USD</p>
                            <h3>9.92 USD</h3>
                        </div>
                    </div>
                    <div class="gdp_box gdp_box_bottom">
                        <div class="gdp_icon">
                            <img src="img/gdp_bar.svg" alt="gdp">
                        </div>
                        <div class="gdp_det">
                            <p>GDP per capita*</p>
                            <h3>&#36;42,456 / year</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- weather reports  -->
	<section class="weather">
		<div class="container">
			<div class="w_date">
				<h1 class="headline">WEATHER REPORTS</h1>
				<!-- <h2>Date</h2> -->
			</div>
			
			<div class="w_report_box">
				<div class="w_report details" id="weaher_details" data-bs-toggle="collapse" data-bs-target="#collapseTwo1">
					<div class="w_degree">
						<div class="w_degree_date">
                            <h3>TUE</h3>
                            <p>8/24</p>
                        </div>
						<img src="img/rain_weather.svg" alt="rain">
						<h3 class="deg">23&deg;<span>/17&deg;</span></h3>
                        <p class="w_degree_p">Very Warm and humid with intervals of cloud & sun</p>
					</div>
					<div class="w_det">
						<div class="per d-flex">
                            <img src="img/drop.svg" alt="drop"> 
                            <h3>28 %</h3> 
							<i id="plus" class="bi bi-plus-square-fill"></i>
                            <i id="minus" class="bi bi-dash-square-fill"></i>
						</div>
					</div>
				</div>
			</div>
			<div id="collapseTwo1" class="accordion-collapse collapse">
			    <div class="row">
			        <div class="col-lg-6 col-md-12 weather_all_details_left">
			        	<div class="weather_all_details">
							<h1 class="headline"><img src="img/day.svg" alt="day"> DAY</h1>
							<ul class="weather_all_details_box">
								<li>
									<p>Max UV Index</p>
									<h5>5 Moderate</h5>
								</li>
								<li>
									<p>RealFeel</p>
									<h5>21 (Hot)</h5>
								</li>
								<li>
									<p>Wind</p>
									<h5>ESE 7 Km/hr</h5>
								</li>
								<li>
									<p>Wind Gusts</p>
									<h5>22 Km/hr</h5>
								</li>
								<li>
									<p>Probability of Precipitation</p>
									<h5>5 %</h5>
								</li>
								<li>
									<p>Cloud Cover</p>
									<h5>32 %</h5>
								</li>
								<li>
									<p>Probability of Thunderstorms</p>
									<h5>0 %</h5>
								</li>
							</ul>
						</div>
			        </div>
			        <div class="col-lg-6 col-md-12">
			        	<div class="weather_all_details">
						    <h1 class="headline"><img src="img/night.svg" alt="night"> NIGHT</h1>
							<ul class="weather_all_details_box">
								<li>
									<p>RealFeel</p>
									<h5>19 (Pleasant)</h5>
								</li>
								<li>
									<p>Wind</p>
									<h5>ESE 9 Km/hr</h5>
								</li>
								<li>
									<p>Wind Gusts</p>
									<h5>24 Km/hr</h5>
								</li>
								<li>
									<p>Probability of Precipitation</p>
									<h5>3 %</h5>
								</li>
								<li>
									<p>Cloud Cover</p>
									<h5>54 %</h5>
								</li>
								<li>
									<p>Probability of Thunderstorms</p>
									<h5>0 %</h5>
								</li>
							</ul>
						</div>
			       	</div>
			    </div>
		    </div>

			<div class="w_report_box">
				<div class="w_report details" id="weaher_details2" data-bs-toggle="collapse" data-bs-target="#collapseTwo2">
					<div class="w_degree">
						<div class="w_degree_date">
                            <h3>TUE</h3>
                            <p>8/24</p>
                        </div>
						<img src="img/rain_weather.svg" alt="rain">
						<h3 class="deg">23&deg;<span>/17&deg;</span></h3>
                        <p class="w_degree_p">Very Warm and humid with intervals of cloud & sun</p>
					</div>
					<div class="w_det">
						<div class="per d-flex">
                            <img src="img/drop.svg" alt="drop"> 
                            <h3>28 %</h3> 
							<i id="plus2" class="bi bi-plus-square-fill"></i>
                            <i id="minus2" class="bi bi-dash-square-fill"></i>
						</div>
					</div>
				</div>
			</div>
			<div id="collapseTwo2" class="accordion-collapse collapse">
			    <div class="row">
			        <div class="col-lg-6 col-md-12 weather_all_details_left">
			        	<div class="weather_all_details">
							<h1 class="headline"><img src="img/day.svg" alt="day"> DAY</h1>
							<ul class="weather_all_details_box">
								<li>
									<p>Max UV Index</p>
									<h5>5 Moderate</h5>
								</li>
								<li>
									<p>RealFeel</p>
									<h5>21 (Hot)</h5>
								</li>
								<li>
									<p>Wind</p>
									<h5>ESE 7 Km/hr</h5>
								</li>
								<li>
									<p>Wind Gusts</p>
									<h5>22 Km/hr</h5>
								</li>
								<li>
									<p>Probability of Precipitation</p>
									<h5>5 %</h5>
								</li>
								<li>
									<p>Cloud Cover</p>
									<h5>32 %</h5>
								</li>
								<li>
									<p>Probability of Thunderstorms</p>
									<h5>0 %</h5>
								</li>
							</ul>
						</div>
			        </div>
			        <div class="col-lg-6 col-md-12">
			        	<div class="weather_all_details">
						    <h1 class="headline"><img src="img/night.svg" alt="night"> NIGHT</h1>
							<ul class="weather_all_details_box">
								<li>
									<p>RealFeel</p>
									<h5>19 (Pleasant)</h5>
								</li>
								<li>
									<p>Wind</p>
									<h5>ESE 9 Km/hr</h5>
								</li>
								<li>
									<p>Wind Gusts</p>
									<h5>24 Km/hr</h5>
								</li>
								<li>
									<p>Probability of Precipitation</p>
									<h5>3 %</h5>
								</li>
								<li>
									<p>Cloud Cover</p>
									<h5>54 %</h5>
								</li>
								<li>
									<p>Probability of Thunderstorms</p>
									<h5>0 %</h5>
								</li>
							</ul>
						</div>
			       	</div>
			    </div>
		    </div>
			    
			<div class="w_report_box">
				<div class="w_report details" id="weaher_details3" data-bs-toggle="collapse" data-bs-target="#collapseTwo3">
					<div class="w_degree">
						<div class="w_degree_date">
                            <h3>TUE</h3>
                            <p>8/24</p>
                        </div>
						<img src="img/rain_weather.svg" alt="rain">
						<h3 class="deg">23&deg;<span>/17&deg;</span></h3>
                        <p class="w_degree_p">Very Warm and humid with intervals of cloud & sun</p>
					</div>
					<div class="w_det">
						<div class="per d-flex">
                            <img src="img/drop.svg" alt="drop"> 
                            <h3>28 %</h3> 
							<i id="plus3" class="bi bi-plus-square-fill"></i>
                            <i id="minus3" class="bi bi-dash-square-fill"></i>
						</div>
					</div>
				</div>
			</div>
			<div id="collapseTwo3" class="accordion-collapse collapse">
			    <div class="row">
			        <div class="col-lg-6 col-md-12 weather_all_details_left">
			        	<div class="weather_all_details">
							<h1 class="headline"><img src="img/day.svg" alt="day"> DAY</h1>
							<ul class="weather_all_details_box">
								<li>
									<p>Max UV Index</p>
									<h5>5 Moderate</h5>
								</li>
								<li>
									<p>RealFeel</p>
									<h5>21 (Hot)</h5>
								</li>
								<li>
									<p>Wind</p>
									<h5>ESE 7 Km/hr</h5>
								</li>
								<li>
									<p>Wind Gusts</p>
									<h5>22 Km/hr</h5>
								</li>
								<li>
									<p>Probability of Precipitation</p>
									<h5>5 %</h5>
								</li>
								<li>
									<p>Cloud Cover</p>
									<h5>32 %</h5>
								</li>
								<li>
									<p>Probability of Thunderstorms</p>
									<h5>0 %</h5>
								</li>
							</ul>
						</div>
			        </div>
			        <div class="col-lg-6 col-md-12">
			        	<div class="weather_all_details">
						    <h1 class="headline"><img src="img/night.svg" alt="night"> NIGHT</h1>
							<ul class="weather_all_details_box">
								<li>
									<p>RealFeel</p>
									<h5>19 (Pleasant)</h5>
								</li>
								<li>
									<p>Wind</p>
									<h5>ESE 9 Km/hr</h5>
								</li>
								<li>
									<p>Wind Gusts</p>
									<h5>24 Km/hr</h5>
								</li>
								<li>
									<p>Probability of Precipitation</p>
									<h5>3 %</h5>
								</li>
								<li>
									<p>Cloud Cover</p>
									<h5>54 %</h5>
								</li>
								<li>
									<p>Probability of Thunderstorms</p>
									<h5>0 %</h5>
								</li>
							</ul>
						</div>
			       	</div>
			    </div>
		    </div>

		</div>
	</section>

    <!-- explore map segment  -->
    <section class="explore">
		<div class="container">
			<h1 class="headline">Explore <span>Segments</span></h1>
			<div class="explore_box">
				<div class="row flex-wrap-reverse">
					<div class="col-lg-6 col-md-12">
						<div class="explore_det explore_det_left">
							<h2>Segment Lists</h2>
							<ul>
								<li>
									<i class="bi bi-geo-alt-fill"></i>
									<div class="list_details">
										<h3>Delhi Noida ( Regular Map )</h3>
										<p>3.55 Km <span>0.0 %</span></p>
									</div>
								</li>
								<li>
									<i class="bi bi-geo-alt-fill"></i>
									<div class="list_details">
										<h3>Delhi Noida ( Regular Map )</h3>
										<p>3.55 Km <span>0.0 %</span></p>
									</div>
								</li>
								<li>
									<i class="bi bi-geo-alt-fill"></i>
									<div class="list_details">
										<h3>Delhi Noida ( Regular Map )</h3>
										<p>3.55 Km <span>0.0 %</span></p>
									</div>
								</li>
								<li>
									<i class="bi bi-geo-alt-fill"></i>
									<div class="list_details">
										<h3>Delhi Noida ( Regular Map )</h3>
										<p>3.55 Km <span>0.0 %</span></p>
									</div>
								</li>
								<li>
									<i class="bi bi-geo-alt-fill"></i>
									<div class="list_details">
										<h3>Delhi Noida ( Regular Map )</h3>
										<p>3.55 Km <span>0.0 %</span></p>
									</div>
								</li>
								<li>
									<i class="bi bi-geo-alt-fill"></i>
									<div class="list_details">
										<h3>Delhi Noida ( Regular Map )</h3>
										<p>3.55 Km <span>0.0 %</span></p>
									</div>
								</li>
								<li>
									<i class="bi bi-geo-alt-fill"></i>
									<div class="list_details">
										<h3>Delhi Noida ( Regular Map )</h3>
										<p>3.55 Km <span>0.0 %</span></p>
									</div>
								</li>
								<li>
									<i class="bi bi-geo-alt-fill"></i>
									<div class="list_details">
										<h3>Delhi Noida ( Regular Map )</h3>
										<p>3.55 Km <span>0.0 %</span></p>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="explore_det">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448183.7390930067!2d76.81307038634928!3d28.646677254552095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1663916580670!5m2!1sen!2sin" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <!-- club to join  -->
    <section class="famous_clubs">
        <div class="container">
            <h1 class="headline">Clubs to <span>Join</span></h1>
            <div class="owl-carousel owl-carousel2 owl-theme famous_box">
                <div type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2" class="item">
                    <img src="img/club1.jpg" alt="famous1">
                    <h3>Wilma Gang</h3>
                    <p>Club, Shop</p>
                    <h5><span>173 Members</span></h5>
                </div>
                <div type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2" class="item">
                    <img src="img/famous_1.jpg" alt="famous1">
                    <h3>Poiares a Pedalar</h3>
                    <p>Private Club, Shop</p>
                    <h5><span>113 Members</span></h5>
                </div>
                <div type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2" class="item">
                    <img src="img/famous_1.jpg" alt="famous1">
                    <h3>Poiares a Pedalar</h3>
                    <p>Private Club, Shop</p>
                    <h5><span>113 Members</span></h5>
                </div>
                <div type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2" class="item">
                    <img src="img/famous_1.jpg" alt="famous1">
                    <h3>Poiares a Pedalar</h3>
                    <p>Private Club, Shop</p>
                    <h5><span>113 Members</span></h5>
                </div>
                <div type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2" class="item">
                    <img src="img/famous_1.jpg" alt="famous1">
                    <h3>Poiares a Pedalar</h3>
                    <p>Private Club, Shop</p>
                    <h5><span>113 Members</span></h5>
                </div>
                <div type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2" class="item">
                    <img src="img/famous_1.jpg" alt="famous1">
                    <h3>Poiares a Pedalar</h3>
                    <p>Private Club, Shop</p>
                    <h5><span>113 Members</span></h5>
                </div>
                <div type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2" class="item">
                    <img src="img/famous_1.jpg" alt="famous1">
                    <h3>Poiares a Pedalar</h3>
                    <p>Private Club, Shop</p>
                    <h5><span>113 Members</span></h5>
                </div>
            </div>
            <!-- famous modal  -->
            <div class="modal fade famous_modal" id="exampleModal2">
                <div class="modal-dialog modal-lg famous_modal_box">
                    <div class="modal-content w3-animate-bottom">
                        <div class="modal-body famous_modal_body">
                            <div class="famous_details_box">
                                <div class="famous_body_left">
                                    <img src="img/famous_1.jpg" alt="famous_modal">
                                </div>
                                <div class="famous_body_right">
                                    <div class="modal-header">
                                        <button type="button" class="btnclose" data-bs-dismiss="modal" aria-label="Close"><img src="img/close.svg" alt="close"></button>
                                    </div>
                                    <h2>Poiares a Pedalar</h2>
                                    <p>England, United Kingdom</p>
                                    <h3><img src="img/members1.svg" alt="members"><span>118 Members</span></h3>
                                </div>
                            </div>
                            <div class="famous_body_bottom">
                                <p>
                                    Freedom is… training how, when and where you want to. Freedom is being comfortable no matter what the 
                                    conditions are Freedom is the sense of belonging even on your solo efforts style that speaks to
                                     individuality rather than conformity.....
                                </p>
                                <div class="famous_body_btn">
                                    <a href="#">Go To Club</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <!-- famous modal end -->
        </div>
    </section>

    <!-- looking for event -->
    <section class="event event_lap">
		<div class="container">
			<h1 class="headline">Looking for next <span>Event ?</span></h1>
			<div class="event_box">
				<div class="row">
					<div class="col-lg-3 col-md-12">
						<div class="event_det">
							<img src="img/event1.jpg">
						</div>
					</div>
					<div class="col-lg-9 col-md-12">
						<div class="event_det">
							<div class="event_title">
								<h2>Black squirrel Half Marathon</h2>
								<p>Next event date : <span>09/10/2022</span></p>
							</div>
							<div class="event_bod">
								<h4>Half Marathon</h4>
								<p>Fort Collins, Colorado USA</p>
							</div>
							<div class="event_btn">
								<a href="#">LEARN MORE</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="event_box">
				<div class="row">
					<div class="col-lg-3 col-md-12">
						<div class="event_det">
							<img src="img/event1.jpg">
						</div>
					</div>
					<div class="col-lg-9 col-md-12">
						<div class="event_det">
							<div class="event_title">
								<h2>Black squirrel Half Marathon</h2>
								<p>Next event date : <span>09/10/2022</span></p>
							</div>
							<div class="event_bod">
								<h4>Half Marathon</h4>
								<p>Fort Collins, Colorado USA</p>
							</div>
							<div class="event_btn">
								<a href="#">LEARN MORE</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="event_box">
				<div class="row">
					<div class="col-lg-3 col-md-12">
						<div class="event_det">
							<img src="img/event1.jpg">
						</div>
					</div>
					<div class="col-lg-9 col-md-12">
						<div class="event_det">
							<div class="event_title">
								<h2>Black squirrel Half Marathon</h2>
								<p>Next event date : <span>09/10/2022</span></p>
							</div>
							<div class="event_bod">
								<h4>Half Marathon</h4>
								<p>Fort Collins, Colorado USA</p>
							</div>
							<div class="event_btn">
								<a href="#">LEARN MORE</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	 <!-- looking for event mobile-->
	 <section class="event event_mobile">
		<div class="container">
			<h1 class="headline">Looking for next <span>Event ?</span></h1>
			<div class="owl-carousel owl-theme owl-carousel_event">
			<div class="event_box">
				<div class="row">
					<div class="col-lg-3 col-md-12">
						<div class="event_det">
							<img src="img/event1.jpg">
						</div>
					</div>
					<div class="col-lg-9 col-md-12">
						<div class="event_det">
							<div class="event_title">
								<h2>Black squirrel Half Marathon</h2>
								<p>Next event date : <span>09/10/2022</span></p>
							</div>
							<div class="event_bod">
								<h4>Half Marathon</h4>
								<p>Fort Collins, Colorado USA</p>
							</div>
							<div class="event_btn">
								<a href="#">LEARN MORE</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="event_box">
				<div class="row">
					<div class="col-lg-3 col-md-12">
						<div class="event_det">
							<img src="img/event1.jpg">
						</div>
					</div>
					<div class="col-lg-9 col-md-12">
						<div class="event_det">
							<div class="event_title">
								<h2>Black squirrel Half Marathon</h2>
								<p>Next event date : <span>09/10/2022</span></p>
							</div>
							<div class="event_bod">
								<h4>Half Marathon</h4>
								<p>Fort Collins, Colorado USA</p>
							</div>
							<div class="event_btn">
								<a href="#">LEARN MORE</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="event_box">
				<div class="row">
					<div class="col-lg-3 col-md-12">
						<div class="event_det">
							<img src="img/event1.jpg">
						</div>
					</div>
					<div class="col-lg-9 col-md-12">
						<div class="event_det">
							<div class="event_title">
								<h2>Black squirrel Half Marathon</h2>
								<p>Next event date : <span>09/10/2022</span></p>
							</div>
							<div class="event_bod">
								<h4>Half Marathon</h4>
								<p>Fort Collins, Colorado USA</p>
							</div>
							<div class="event_btn">
								<a href="#">LEARN MORE</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</section>

    <!-- gallery -->
    <section class="gallery">
		<div class="container">
			<h1 class="headline">Gallery</h1>
			<div class="popup-gallery">
				<div class="owl-carousel owl-carousel_gallery owl-theme">
                    <a href="img/tower.jpg" title="The Cleaner">
                        <img src="img/tower.jpg">
                    </a>
                    <a href="img/tower.jpg" title="The Cleaner">
                        <img src="img/tower.jpg">
                    </a>	
                    <a href="img/tower.jpg" title="The Cleaner">
                        <img src="img/tower.jpg">
                    </a>	
                    <a href="img/tower.jpg" title="The Cleaner">
                        <img src="img/tower.jpg">
                    </a>	
                    <a href="img/tower.jpg" title="The Cleaner">
                        <img src="img/tower.jpg">
                    </a>	
                    <a href="img/tower.jpg" title="The Cleaner">
                        <img src="img/tower.jpg">
                    </a>	
                    <a href="img/tower.jpg" title="The Cleaner">
                        <img src="img/tower.jpg">
                    </a>	
                    <a href="img/tower.jpg" title="The Cleaner">
                        <img src="img/tower.jpg">
                    </a>
                    <a href="img/tower.jpg" title="The Cleaner">
                        <img src="img/tower.jpg">
                    </a>	
						
				</div>
			</div>
		</div>
	</section>
    
    <!-- footer -->
   
    <?php include'footer.php'; ?>