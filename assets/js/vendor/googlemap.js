//Google Map Skin - Get more at http://snazzymaps.com/
var myOptions = {
    zoom: 16,
    center: new google.maps.LatLng(-33.8665433, 151.1956316),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
	scrollwheel: false,
    disableDefaultUI: true,
    styles: [{"featureType":"water","elementType":"all","stylers":[{"hue":"#bbbbbb"},{"saturation":-100},{"lightness":-4},{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"hue":"#999999"},{"saturation":-100},{"lightness":-33},{"visibility":"on"}]},{"featureType":"road","elementType":"all","stylers":[{"hue":"#999999"},{"saturation":-100},{"lightness":-6},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"hue":"#aaaaaa"},{"saturation":-100},{"lightness":-15},{"visibility":"on"}]}]
};

var map = new google.maps.Map(document.getElementById('map'), myOptions);
