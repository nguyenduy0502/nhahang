/*==Google MAP==*/
function initialize() {
    var image = wpdata.td + 'map-marker.png';
    var lat = geo.lat;
    var lon = geo.lon;
    if(!lat) lat = 55.7581792;
    if(!lon) lon = 37.6432273;
    var myLatlng = new google.maps.LatLng(lat, lon);
    var mapOptions = {
        zoom: 15,
        scrollwheel: true,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        draggable: true,
        center: myLatlng
    };

    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var contentString  = document.getElementById("marker-content").innerHTML;
    if(!contentString){
        var contentString = '<div id="content">' +
            '<div id="siteNotice">' +
            '</div>' +
            '<h3 id="firstHeading" class="firstHeading">Local Address</h3>' +
            '<div id="bodyContent">' +
            '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
            'Heritage Site.</p>' +
            '<p>Attribution: Uluru, <a href="http://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">' +
            'http://en.wikipedia.org/w/index.php?title=Uluru</a> ' +
            '(last visited June 22, 2009).</p>' +
            '</div>' +
            '</div>';
    }

    var infowindow = new google.maps.InfoWindow({
        content: contentString,
        maxWidth: 280
    });


    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        icon: image,
        animation: google.maps.Animation.DROP,
        title: 'Local Address'
    });

    google.maps.event.addListener(marker, 'click', function () {
        infowindow.open(map, marker);
    });

}

if(geo.map) google.maps.event.addDomListener(window, 'load', initialize);
