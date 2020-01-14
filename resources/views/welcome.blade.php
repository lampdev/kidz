<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="kidz__header">
    <div class="container">
        <div class="header-wrap">
            <div class="header-middle">
                <div class="header-middle-col"><img src="{{ asset('img/menu_icon_1.png') }}" alt="icon"><a href="#" class="header-link">About us</a></div>
                <div class="header-middle-col"><img src="{{ asset('img/menu_icon_1.png') }}" alt="icon"><a href="#" class="header-link">Visit us</a></div>
                <div class="header-middle-col"><img src="{{ asset('img/menu_icon_1.png') }}" alt="icon"><a href="#" class="header-link">Product</a></div>
                <div class="header-middle-col"><img src="{{ asset('img/menu_icon_1.png') }}" alt="icon"><a href="#" class="header-link">Blog</a></div>
            </div>
            <div class="header-input-wrap">
                <input class="header-input" type="text">
            </div>
        </div>
    </div>
</div>
<div class="kidz__first-section">
    <img class="logo" src="{{ asset('img/logo.png') }}" alt="logo">
    <img class="banner" src="{{ asset('img/banner_1.jpg') }}" alt="banner">
</div>
<div class="kidz__second-section">
    <div class="container">
        <div class="row-of-circles">
            <div class="circle">
                <img src="{{ asset('img/family.png') }}" alt="family">
                <span class="circle-text">FAMILY VISIT</span>
            </div>
            <div class="circle">
                <img src="{{ asset('img/present.png') }}" alt="present">
                <span class="circle-text">BIRTHDAY WITH US</span>
            </div>
            <div class="circle">
                <img src="{{ asset('img/bagpack.png') }}" alt="bagpack">
                <span class="circle-text">SCHOOL VISIT</span>
            </div>
            <div class="circle">
                <img src="{{ asset('img/humans.png') }}" alt="humans">
                <span class="circle-text">CORPORATE VISIT</span>
            </div>
        </div>
        <div class="main-row">
            <div class="row">
                <div class="left-col col-6">
                    <span class="about-us">ABOUT US</span>
                    <div class="left-col-wrap">
                        <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="#" class="more-btn">More</a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="about-img-wrap">
                        <img class="about-img" src="{{ asset('img/about-img.jpg') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="kidz__third-section">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <span class="text-section">12,000 SQ FT PLAY SPACE</span>
            </div>
            <div class="col-3">
                <span class="text-section">THE CENTRE IS CONVENIENTLY LOCATED IN THE HEART OF EALING</span>
            </div>
            <div class="col-2">
                <span class="text-section">ALONGSIDE HAVING A DELICIOUS PIZZERIA WITH AN OPEN STOV</span>
            </div>
            <div class="col-3">
                <span class="text-section">ALL TEACHERS AND STAFF ARE POLITE, WARM AND PROFESSIONAL</span>
            </div>
            <div class="col-2">
                <span class="text-section">THE ATMOSPHERE IS COSY AND FRIENDLY</span>
            </div>
        </div>
    </div>
</div>
<div class="kidz__fourth-section">
    <div class="container">
 		<span class="heading">
 			ACTIVITIES
 		</span>
        <div class="row">
            <div class="activity">
                <div class="activity-img-wrap">
                    <img src="{{ asset('img/activity-1.png') }}" alt="activity">
                </div>
                <span class="activity-word">
 					LEARN!
 				</span>
                <a href="#" class="activity-link">More</a>
            </div>
            <div class="activity">
                <div class="activity-img-wrap">
                    <img src="{{ asset('img/activity-2.png') }}" alt="activity">
                </div>
                <span class="activity-word">
 					CINEMA
 				</span>
                <a href="#" class="activity-link">More</a>
            </div>
            <div class="activity">
                <div class="activity-img-wrap">
                    <img src="{{ asset('img/activity-3.png') }}" alt="activity">
                </div>
                <span class="activity-word">
 					PLAY!
 				</span>
                <a href="#" class="activity-link">More</a>
            </div>
            <div class="activity">
                <div class="activity-img-wrap">
                    <img src="{{ asset('img/activity-4.png') }}" alt="activity">
                </div>
                <span class="activity-word">
 					FOOD
 				</span>
                <a href="#" class="activity-link">More</a>
            </div>
        </div>
    </div>
</div>
<div class="kidz__fifth-section">
    <div class="container">
        <h2 class="heading">PLAN A VISIT</h2>
        <div class="row">
            <div class="info-col col-3">
                <span class="col-heading">BEFORE VISITING</span>
                <span class="col-subheading">Working hours:</span>
                <span class="col-info">Monday-Friday: 9:00 a.m.-5:00 p.m.</span>
                <span class="col-info">Saturday-Sunday: 9:00 a.m.-10:00 p.m.</span>
                <span class="col-subheading">Agens:</span>
                <span class="col-info">0-3 years- free ticket</span>
            </div>
            <div class="info-col col-3">
                <span class="col-heading">HOW TO GET?</span>
            </div>
            <div class="info-col col-3">
                <span class="col-heading">LOYALTY PROGRAM</span>
            </div>
            <div class="info-col col-3">
                <span class="col-heading">RESTING</span>
            </div>
        </div>
        <a href="#" class="link">BUY A TICKET</a>
    </div>
</div>
<div class="kidz__sixth-section">
    <div class="container">
        <h2 class="heading">NEWS</h2>
        <div class="row">
            <div class="col-info col-2">
                <div class="img-wrap">
                    <img src="{{ asset('img/news-1.png') }}" alt="img" class="col-img">
                </div>
                <span class="col-heading">PLAY!:</span>
                <p class="col-text">Sporting facilities: football pitch, tubing hills, basketball court</p>
                <span class="col-date">19/11/09</span>
            </div>
            <div class="col-info col-2">
                <div class="img-wrap">
                    <img src="{{ asset('img/news-2.png') }}" alt="img" class="col-img">
                </div>
                <span class="col-heading">DRINK and EAT!:</span>
                <p class="col-text">Sporting facilities: football pitch, tubing hills, basketball court</p>
                <span class="col-date">19/11/09</span>
            </div>
            <div class="col-info col-2">
                <div class="img-wrap">
                    <img src="{{ asset('img/news-3.png') }}" alt="img" class="col-img">
                </div>
                <span class="col-heading">LEARN!:</span>
                <p class="col-text">Sporting facilities: football pitch, tubing hills, basketball court</p>
                <span class="col-date">19/11/09</span>
            </div>
            <div class="col-info col-2">
                <div class="img-wrap">
                    <img src="{{ asset('img/news-4.png') }}" alt="img" class="col-img">
                </div>
                <span class="col-heading">ART!:</span>
                <p class="col-text">Sporting facilities: football pitch, tubing hills, basketball court</p>
                <span class="col-date">19/11/09</span>
            </div>
            <div class="col-info col-2">
                <div class="img-wrap">
                    <img src="{{ asset('img/news-5.png') }}" alt="img" class="col-img">
                </div>
                <span class="col-heading">COMING SOON!</span>
                <p class="col-text">Sporting facilities: football pitch, tubing hills, basketball court</p>
                <span class="col-date">19/11/09</span>
            </div>
        </div>
        <a href="#" class="link">LAST NEWS</a>
    </div>
</div>
<div class="kidz__seventh-section">
    <div class="container">
        <div class="heading">PARTNERS</div>
        <div class="row">
            <img src="{{ asset('img/partner-1.png') }}" alt="img" class="img">
            <img src="{{ asset('img/partner-2.png') }}" alt="img" class="img">
            <img src="{{ asset('img/partner-1.png') }}" alt="img" class="img">
            <img src="{{ asset('img/partner-2.png') }}" alt="img" class="img">
            <img src="{{ asset('img/partner-1.png') }}" alt="img" class="img">
            <img src="{{ asset('img/partner-2.png') }}" alt="img" class="img">
        </div>
    </div>
</div>
<div class="kidz__eight-section">
    <p class="heading">HOW TO GET</p>
    <div class="main-section">
        <div class="container">
            <div class="row">
                <div class="col-info col-5">
                    <img src="{{ asset('img/mark.png') }}" alt="mark" class="img">
                    <span class="subtitle">
 						33 street, London, UK
 					</span>
                    <div class="info-block">
 						<span class="info">
 							+1 090 888 88 88
 						</span>
                        <span class="info">
 							info@kidz.com
 						</span>
                    </div>
                    <span class="ask-text">
 						ASK A QUESTION
 					</span>
                    <form class="form">
                        <input type="text" placeholder="NAME" class="input">
                        <input type="text" placeholder="E-MAIL" class="input">
                        <textarea placeholder="TEXT" class="input"></textarea>
                        <button class="send">SEND</button>
                    </form>
                </div>
                <div class="col-7">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="kidz__footer">
    <div class="container">
        <div class="row">
            <div class="col-content col-5">
                <a href="#" class="img">
                    <img src="{{ asset('img/facebook.png') }}" alt="img">
                </a>
                <a href="#" class="img">
                    <img src="{{ asset('img/instagram.png') }}" alt="img">
                </a>
                <a href="#" class="img">
                    <img src="{{ asset('img/viber.png') }}" alt="img">
                </a>
                <a href="#" class="img">
                    <img src="{{ asset('img/twitter.png') }}" alt="img">
                </a>
            </div>
            <div class="col-content col-7">
                <a href="#" class="text">About us</a>
                <a href="#" class="text">Visit us</a>
                <a href="#" class="text">Product</a>
                <a href="#" class="text">Blog</a>

            </div>
        </div>
    </div>
</div>
<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 11,
            center: {lat: 51.509865, lng: -0.118092}
        });
        var marker = new google.maps.Marker({position: {lat: 51.509865, lng: -0.118092},map: map});
        var geocoder = new google.maps.Geocoder();
    }

    function geocodeAddress(geocoder, resultsMap) {
        var address = document.getElementById('address').value;
        geocoder.geocode({'address': address}, function(results, status) {
            if (status === 'OK') {
                resultsMap.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: resultsMap,
                    position: results[0].geometry.location
                });
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUTUqjG0sHGlmA8FqJ_37sz7zMV_F5A7A&callback=initMap">
</script>
</body>
</html>
