/*!
 * 
 * Allelectrics 2017
 * 
 */
! function(t) { "use strict";

    t(".navbar-collapse ul li a").click(function() { t(".navbar-toggle:visible").click() }),

    t("#mainNav").affix({ offset: { top: 100 } }) }(jQuery);

 // map 
function init_map(){
  var myOptions = {zoom:17,center:new google.maps.LatLng(50.456790, 30.490087),mapTypeId:google.maps.MapTypeId.ROADMAP,disableDefaultUI: false,scaleControl: true,scrollwheel: false,streetViewControl: false,};
  
  map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
  
  marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(50.456790, 30.490087), icon: "images/map-marker.png",});
  
  
  google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});
  infowindow.open(map,marker);
var styles = [
  {
    stylers: [
      { hue: "#ba5e60" },
      { saturation: -20 }
    ]
  },{
    featureType: "road",
    elementType: "geometry",
    stylers: [
      { lightness: 100 },
      { visibility: "simplified" }
    ]
  },{
    featureType: "road",
    elementType: "labels",
    stylers: [
      { visibility: "simplified" }
    ]
  },{
        featureType: "poi",
    elementType: "labels",
    stylers: [
      { visibility: "off" }
    ]
  },{
        featureType: "transit",
    elementType: "labels",
    stylers: [
      { visibility: "off" }
    ]
  }];
map.setOptions({styles: styles});
}
  google.maps.event.addDomListener(window, 'load', init_map);

  // slick slider
$(document).ready(function(){
	$('.auto-imgs-slider').slick({
		dots: true,
		arrows: false,
	});
});


// SPOILER
$(document).ready(function(){
 $('.spoiler-title').click(function(){
  $(this).parent().children('.spoiler-body').slideToggle();
  $(this).toggleClass("down");
  return false;
 });
});