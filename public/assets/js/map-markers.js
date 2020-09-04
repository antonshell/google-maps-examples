function initMarkers(map, data, infoWindow)
{
    for(var i = 0; i < data.length; i++) {
        var item = data[i];
        var marker = new google.maps.Marker({
            position: {lat: item.lat, lng: item.lon},
            map: map,
            icon: getMarkerIcon(),
            id: i
        });

        marker.addListener('click', function() {
            var marker = this;

            // center map to marker
            var objPoint = new google.maps.LatLng(
                marker.position.lat(),
                marker.position.lng()
            );

            map.setZoom(11);
            map.setCenter(objPoint);

            var contentString = '<div class="map__window" style="color: #000"><div class="map__window-title">' + item.name + '</div><p class="map__window-description">' + item.description + '</p></div>';
            infoWindow = new google.maps.InfoWindow({
                content: contentString
            });

            infoWindow.open(map, marker);
        });
    }
}