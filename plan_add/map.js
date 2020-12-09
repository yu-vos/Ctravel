function initMap(){

  tokyo = {lat: 35.6803997, lng: 139.7690174}

  map = new google.maps.Map(document.getElementById('map'), {
    center: tokyo,
    zoom: 12,
  });

  marker = new google.maps.Marker({
    position: tokyo,
    map: map
  });
}
    function codeAddress(){
  geocoder = new google.maps.Geocoder();

  inputAddress = document.getElementById('address').value;

  geocoder.geocode({ 'address': inputAddress}, function(results, status){
    if (status == 'OK') {
      map.setCenter(results[0].geometry.location);
      marker = new google.maps.Marker({
        position: results[0].geometry.location,
        map: map,
      });
    } else {
      alert("該当する結果がありませんでした：" + status);
    }
  });
}
let text_form = document.getElementById('address');
let output = document.getElementById('output');

text_form.addEventListener('keypress', test_ivent);


function test_ivent(e) {
    if (e.keyCode === 13) {
      output.innerHTML = text_form.value;
      return false;     
  }  
}