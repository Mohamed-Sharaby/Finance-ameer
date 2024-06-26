
<!-- Vendor -->
<script src="{{asset('site/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('site/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
<script src="{{asset('site/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('site/vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
<script src="{{asset('site/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('site/vendor/jquery.validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('site/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('site/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
<script src="{{asset('site/vendor/lazysizes/lazysizes.min.js')}}"></script>
<script src="{{asset('site/vendor/isotope/jquery.isotope.min.js')}}"></script>
<script src="{{asset('site/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('site/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('site/vendor/vide/jquery.vide.min.js')}}"></script>
<script src="{{asset('site/vendor/vivus/vivus.min.js')}}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{asset('site/js/theme.js')}}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{asset('site/js/views/view.contact.js')}}"></script>

<!-- Theme Custom -->
<script src="{{asset('site/js/custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{asset('site/js/theme.init.js')}}"></script>



<script src="{{asset('site/js/theme.init.js')}}"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
<script>

    /*
    Map Settings

        Find the Latitude and Longitude of your address:
            - https://www.latlong.net/
            - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

    */

    function initializeGoogleMaps() {
        // Map Markers
        var mapMarkers = [{
            address: "New York, NY 10017",
            html: "<strong>Porto Finance</strong><br>New York, NY 10017<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",
            icon: {
                image: "img/demos/finance/pin.png",
                iconsize: [31, 40],
                iconanchor: [31, 40]
            }
        }];

        // Map Initial Location
        var initLatitude = 40.75198;
        var initLongitude = -73.96978;

        // Map Extended Settings
        var mapSettings = {
            controls: {
                draggable: (($.browser.mobile) ? false : true),
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: true,
                streetViewControl: true,
                overviewMapControl: true
            },
            scrollwheel: false,
            markers: mapMarkers,
            latitude: initLatitude,
            longitude: initLongitude,
            zoom: 14
        };

        var map = $('#googlemaps').gMap(mapSettings),
            mapRef = $('#googlemaps').data('gMap.reference');

        // Styles from https://snazzymaps.com/
        var styles = [{ "featureType": "water", "elementType": "geometry", "stylers": [{ "color": "#e9e9e9" }, { "lightness": 17 }] }, { "featureType": "landscape", "elementType": "geometry", "stylers": [{ "color": "#f5f5f5" }, { "lightness": 20 }] }, { "featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{ "color": "#ffffff" }, { "lightness": 17 }] }, { "featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{ "color": "#ffffff" }, { "lightness": 29 }, { "weight": 0.2 }] }, { "featureType": "road.arterial", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 18 }] }, { "featureType": "road.local", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 16 }] }, { "featureType": "poi", "elementType": "geometry", "stylers": [{ "color": "#f5f5f5" }, { "lightness": 21 }] }, { "featureType": "poi.park", "elementType": "geometry", "stylers": [{ "color": "#dedede" }, { "lightness": 21 }] }, { "elementType": "labels.text.stroke", "stylers": [{ "visibility": "on" }, { "color": "#ffffff" }, { "lightness": 16 }] }, { "elementType": "labels.text.fill", "stylers": [{ "saturation": 36 }, { "color": "#333333" }, { "lightness": 40 }] }, { "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "transit", "elementType": "geometry", "stylers": [{ "color": "#f2f2f2" }, { "lightness": 19 }] }, { "featureType": "administrative", "elementType": "geometry.fill", "stylers": [{ "color": "#fefefe" }, { "lightness": 20 }] }, { "featureType": "administrative", "elementType": "geometry.stroke", "stylers": [{ "color": "#fefefe" }, { "lightness": 17 }, { "weight": 1.2 }] }];

        var styledMap = new google.maps.StyledMapType(styles, {
            name: 'Styled Map'
        });

        mapRef.mapTypes.set('map_style', styledMap);
        mapRef.setMapTypeId('map_style');
    }

    // Initialize Google Maps when element enter on browser view
    theme.fn.intObs('.google-map', 'initializeGoogleMaps()', {});

    // Map text-center At
    var mapCenterAt = function (options, e) {
        e.preventDefault();
        $('#googlemaps').gMap("centerAt", options);
    }

</script>
