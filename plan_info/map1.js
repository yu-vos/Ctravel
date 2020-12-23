function initMap(){

    tokyo = {lat: 35.6803997, lng: 139.7690174}

    map = new google.maps.Map(document.getElementById('map'), {
    center: tokyo,
    zoom: 12,
  });

    marker = new google.maps.Marker({
    map: map
  });
}