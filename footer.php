 
 
 <!-- footer -->
    <footer>
        <div class="container">
            <div class="footer">
                <a class="instagram" href="#"><img class="footer_icon" src="img/insta.svg" alt="icon"></a>
                <img class="line" src="img/Line.svg" alt="line">
                <a class="facebook" href="#"><img class="footer_icon" src="img/facebook.svg" alt="icon"></a>
                <img class="line" src="img/Line.svg" alt="line">
                <a class="youtube" href="#"><img class="footer_icon" src="img/youtube.svg" alt="icon"></a>
                <img class="line" src="img/Line.svg" alt="line">
                <a class="tiktok" href="#"><img class="footer_icon" src="img/tiktok.svg" alt="icon"></a>
            </div>
            <div class="footer_logo">
                <a href="index.php"><img src="img/footer_logo.png" alt="logo"></a>
            </div>
        </div>
    </footer>
    <section class="copyright">
        <div class="container">
            <div class="copyright_box">
                <div class="copy_text">
                    <p>&copy; 2022. All rights reserved</p>
                </div>
                <div class="policy">
                    <a href="terms.php">Terms Of Use</a>
                    <a href="privacy.php">Privacy Policy</a>
                    <a href="faq.php">FAQs</a>
                </div>
            </div>
        </div>
    </section>

    


    <!-- script coding -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet">

<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
<script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>

    <!-- owl-carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <script>
        $('.owl-carousel1').owlCarousel({
            loop:true,
            margin:30,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        })
    </script>
    <script>
        $('.owl-carousel2').owlCarousel({
            loop:true,
            margin:30,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                },
                1200:{
                    items:4
                }
            }
        })
    </script>
    <script>
        $('.owl-carousel3').owlCarousel({
            loop:true,
            margin:30,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        })
    </script>

    <script>
        $('.owl-carousel4').owlCarousel({
            loop:true,
            margin:30,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                },
                1200:{
                    items:4
                }
            }
        })
    </script>
    <script>
        $('.owl-carousel_event').owlCarousel({
            loop:true,
            margin:30,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:1
                }
            }
        })
    </script>
    <script>
        $('.owl-carousel_gallery').owlCarousel({
            loop:true,
            margin:30,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        })
    </script>

    <!-- weather icon -->
    <script>
        $(document).ready(function(){
            $('#weaher_details').click(function () {
                if ($('#minus').is(':hidden')) {
                    $('#minus').show();
                    $('#plus').hide();
                } else {
                    $('#minus').hide();
                    $('#plus').show();
                }
            }); 
        });
    </script>
    <script>
        $(document).ready(function(){
            $('#weaher_details2').click(function () {
                if ($('#minus2').is(':hidden')) {
                    $('#minus2').show();
                    $('#plus2').hide();
                } else {
                    $('#minus2').hide();
                    $('#plus2').show();
                }
            }); 
        });
    </script>
    <script>
        $(document).ready(function(){
            $('#weaher_details3').click(function () {
                if ($('#minus3').is(':hidden')) {
                    $('#minus3').show();
                    $('#plus3').hide();
                } else {
                    $('#minus3').hide();
                    $('#plus3').show();
                }
            }); 
        });
    </script>

    <!-- magnific poup -->
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.popup-gallery').magnificPopup({
				delegate: 'a',
				type: 'image',
				tLoading: 'Loading image #%curr%...',
				mainClass: 'mfp-img-mobile',
				gallery: {
					enabled: true,
					navigateByImgClick: true,
					preload: [0,1]
				}
			});
		});
	</script>

    <!-- faq_left_mobile  -->
    <script>
        $(document).ready(function(){
            $('#chat').click(function () {
                if ($('#white').is(':hidden')) {
                    $('#white').show();
                    $('#color').hide();
                } else {
                    $('#white').hide();
                    $('#color').show();
                }
            }); 
        });
    </script>
    <script >
         $(document).ready(function(){
    //          function log( message ) {
    //   $( "<div>" ).text( message ).prependTo( "#log" );
    //   $( "#log" ).scrollTop( 0 );
    // }
        var searchRequest = null;
$("#form1").autocomplete({
    maxLength: 5,
    source: function(request, response) {
        if (searchRequest !== null) {
            searchRequest.abort();
        }
        // if(request.term.length >4){
        searchRequest = $.ajax({
            url: 'searchcity.php',
            method: 'post',
            dataType: "json",
            data: {term: request.term},
            success: function(data) {
                searchRequest = null;
                // response(data);
                response($.map(data, function(item) {
                 
                       return {
                        value: item.LocalizedName,
                        label: item.LocalizedName
                    };  
                   
                   
                }));
            }
        }).fail(function() {
            searchRequest = null;
        });
// }
    }
    //   minLength: 2,
    //   select: function( event, ui ) {
    //     log( "Selected: " + ui.item.value + " aka " + ui.item.id );
    //   }
});
});

    </script>


   

        <script type="text/javascript">
           fetch("cities.json")
                .then(response => response.json())
                .then(data => {
                    for (var i = 0; i<10; i++){
                        let name = data[i].name;
                        let country = data[i].country;
                    
                            document.querySelector("#dataJson").innerHTML += `
                             
                                <div class="col-md-6 col-lg-4 col-sm-6">
                                    <div class="cities_details">
                                        <a href="city_single.php">
                                            <img class="cities_img" src="img/IndiaPortrait2.jpg" alt="cities_imges">
                                            <div class="popular_cont">
                                                <h3>${name}, ${country}</h3>
                                                <div class="pop_details">
                                                    <div class="pop_details_box"><img src="img/cloud.svg" alt="cloud"> 23&deg;C</div>
                                                    <div class="pop_details_box"><img src="img/club.svg" alt="club"> Clubs</div>
                                                    <div class="pop_details_box"><img src="img/routes.svg" alt="routes"> Routes</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                           
                                `;
                    }
                })
        </script>

