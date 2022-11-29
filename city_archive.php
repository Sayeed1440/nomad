
    <?php include'header.php'; ?>


    <!-- carousel images -->
    <section class="banner2_img">
        <div class="container">
            <img src="img/banner2.jpg" alt="banner">
            <div class="banner_inner">
                <h1>Explore Cities</h1>
                <a href="index.php">Home</a><span>></span><a href="city_archive.php">Cities</a>
            </div>
        </div>
    </section>

    <!-- explore cities -->
    <section class="explore_cities">
        <div class="container">
            <div class="head_dtails2">
                <div class="input-group">
                    <div class="form-outline">
                        <input type="text" id="form1" class="form-control ui-autocomplete-input " placeholder="Search by city name"/>
                    </div>
                    <button type="button" class="btn_search">
                        <img src="img/search.svg" alt="search">
                    </button>
                   <!--  <div class="ui-widget" style="margin-top:2em; font-family:Arial">
  Result:
  <div id="log" class="ui-widget-content"></div>
</div> -->
                </div>
                <div class="city_filter city_filter_top">
                    <a class="filter_left" data-bs-toggle="modal" data-bs-target="#exampleModalFilter">Filters</a>
                    <a class="filter_right" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Sort</a>
                    <ul class="dropdown-menu dropdown-menu-end filter_right_dropdown" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Most Popular</a></li>
                        <li><a class="dropdown-item" href="#">Best Climatic Conditions</a></li>
                        <li><a class="dropdown-item" href="#">With Top Clubs</a></li>
                        <li><a class="dropdown-item" href="#">With Famous Routes</a></li>
                    </ul>
                </div>
                <div class="city_filter city_filter_mobile">
                    <a class="filter_left" data-bs-toggle="modal" data-bs-target="#exampleModalFilter2">Filters</a>
                    <a class="filter_right" data-bs-toggle="modal" data-bs-target="#exampleModalShort">Sort</a>
                </div>
            </div>
            <div class="cities_box">
                <div class="row" id="dataJson">
                   

                </div>
            </div> 
        </div>

        <!-- filter modal -->
        <div class="modal fade filter_modal" id="exampleModalFilter">
            <div class="modal-dialog modal-dialog-scrollable filter_modal_box">
                <div class="modal-content w3-animate-right">
                    <div class="modal-header filter_modal_header">
                        <h5 class="modal-title" id="exampleModalLabel">FILTERS</h5>
                        <button type="button" class="btnclose" data-bs-dismiss="modal" aria-label="Close"><img src="img/close.svg" alt="close"></button>
                    </div>
                    <div class="modal-body filter_modal_body">
                        <div class="filter_modal_details">
                            <h2>COUNTRIES</h2>
                            <div class="filter_countries">
                                <span>India <button>&#10005;</button></span>
                                <span>Brazil <button>&#10005;</button></span>
                            </div>
                        </div>
                        <div class="filter_modal_details">
                            <h2>WEATHER</h2>
                            <div class="filter_check_box">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Warm Now</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Cold Now</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Clear Air</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Less Humid</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Mild Now</label>
                                </div>
                            </div>
                        </div>
                        <div class="filter_modal_details">
                            <h2>Geography</h2>
                            <div class="filter_check_box">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Mountains</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Islands</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">High Altitude</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Low Altitude</label>
                                </div>
                            </div>
                        </div>
                        <div class="filter_modal_details">
                            <h2>CLIMATE</h2>
                            <div class="filter_check_box">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Tropical</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Desert</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Temprate</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Polar</label>
                                </div>
                            </div>
                        </div>
                        <div class="filter_modal_details">
                            <h2>CONTINENT</h2>
                            <div class="filter_check_box">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Asia</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Europe</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">America</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Oceania</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Africa</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Caribbean</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <!-- filter modal Mobile -->
         <div class="modal fade filter_modal_mobile" id="exampleModalFilter2">
            <div class="modal-dialog modal-xl modal-dialog-scrollable filter_modal_mobile_box">
                <div class="modal-content w3-animate-bottom">
                    <div class="modal-header filter_modal_header">
                        <h5 class="modal-title" id="exampleModalLabel">FILTERS</h5>
                        <button type="button" class="btnclose" data-bs-dismiss="modal" aria-label="Close"><img src="img/close.svg" alt="close"></button>
                    </div>
                    <div class="modal-body filter_modal_body">
                        <div class="filter_modal_details">
                            <h2>COUNTRIES</h2>
                            <div class="filter_countries">
                                <span>India <button>&#10005;</button></span>
                                <span>Brazil <button>&#10005;</button></span>
                            </div>
                        </div>
                        <div class="filter_modal_details">
                            <h2>WEATHER</h2>
                            <div class="filter_check_box">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Warm Now</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Cold Now</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Clear Air</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Less Humid</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Mild Now</label>
                                </div>
                            </div>
                        </div>
                        <div class="filter_modal_details">
                            <h2>Geography</h2>
                            <div class="filter_check_box">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Mountains</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Islands</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">High Altitude</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Low Altitude</label>
                                </div>
                            </div>
                        </div>
                        <div class="filter_modal_details">
                            <h2>CLIMATE</h2>
                            <div class="filter_check_box">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Tropical</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Desert</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Temprate</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Polar</label>
                                </div>
                            </div>
                        </div>
                        <div class="filter_modal_details">
                            <h2>CONTINENT</h2>
                            <div class="filter_check_box">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Asia</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Europe</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">America</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Oceania</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Africa</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label">Caribbean</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Short modal Mobile -->
        <div class="modal fade filter_modal_mobile sort_mobile" id="exampleModalShort">
            <div class="modal-dialog modal-xl filter_modal_mobile_box">
                <div class="modal-content w3-animate-bottom">
                    <div class="modal-header filter_modal_header">
                        <h5 class="modal-title" id="exampleModalLabel">SORT</h5>
                        <button type="button" class="btnclose" data-bs-dismiss="modal" aria-label="Close"><img src="img/close.svg" alt="close"></button>
                    </div>
                    <div class="modal-body filter_modal_body sort_modal"> 
                        <ul class="filter_right_dropdown">
                            <li><a class="dropdown-item sort_1" href="#">Most Popular</a></li>
                            <li><a class="dropdown-item" href="#">Best Climatic Conditions</a></li>
                            <li><a class="dropdown-item" href="#">With Top Clubs</a></li>
                            <li><a class="dropdown-item sort_2" href="#">With Famous Routes</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- footer -->
  
    <?php include'footer.php'; ?>
     <!-- read json data  -->

    