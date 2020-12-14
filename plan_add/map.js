function initMap(){

    tokyo = {lat: 35.6803997, lng: 139.7690174}
    akihabara = {lat: 35.698383, lng: 139.773072}

    map = new google.maps.Map(document.getElementById('map'), {
    center: tokyo,
    zoom: 12,
  });

    marker = new google.maps.Marker({
    map: map
  });
    marker1 = new google.maps.Marker({
    map: map
  });
  marker2 = new google.maps.Marker({
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
function codeAddress1(){
    geocoder = new google.maps.Geocoder();

    inputAddress2 = document.getElementById('address2').value;

    geocoder.geocode({ 'address': inputAddress2}, function(results, status){
    if (status == 'OK') {
      map.setCenter(results[0].geometry.location);
      marker1 = new google.maps.Marker({
        position: results[0].geometry.location,
        map: map,
      });
    } else {
      alert("該当する結果がありませんでした：" + status);
    }
  });
}
function codeAddress2(){
    geocoder = new google.maps.Geocoder();

    inputAddress3 = document.getElementById('address3').value;

    geocoder.geocode({ 'address': inputAddress3}, function(results, status){
        if (status == 'OK') {
            map.setCenter(results[0].geometry.location);
            marker2 = new google.maps.Marker({
            position: results[0].geometry.location,
            map: map,
            });
        } else {
            alert("該当する結果がありませんでした：" + status);
        }
    });
}
function codeAddress3(){
    geocoder = new google.maps.Geocoder();

    inputAddress4 = document.getElementById('address4').value;

    geocoder.geocode({ 'address': inputAddress4}, function(results, status){
    if (status == 'OK') {
      map.setCenter(results[0].geometry.location);
      marker3 = new google.maps.Marker({
        position: results[0].geometry.location,
        map: map,
      });
    } else {
      alert("該当する結果がありませんでした：" + status);
    }
  });
}
function codeAddress4(){
    geocoder = new google.maps.Geocoder();

    inputAddress5 = document.getElementById('address5').value;

    geocoder.geocode({ 'address': inputAddress5}, function(results, status){
    if (status == 'OK') {
      map.setCenter(results[0].geometry.location);
      marker4 = new google.maps.Marker({
        position: results[0].geometry.location,
        map: map,
      });
    } else {
      alert("該当する結果がありませんでした：" + status);
    }
  });
}
function codeAddress5(){
    geocoder = new google.maps.Geocoder();

    inputAddress6 = document.getElementById('address6').value;

    geocoder.geocode({ 'address': inputAddress6}, function(results, status){
    if (status == 'OK') {
      map.setCenter(results[0].geometry.location);
      marker5 = new google.maps.Marker({
        position: results[0].geometry.location,
        map: map,
      });
    } else {
      alert("該当する結果がありませんでした：" + status);
    }
  });
}
function codeAddress6(){
    geocoder = new google.maps.Geocoder();

    inputAddress7 = document.getElementById('address7').value;

    geocoder.geocode({ 'address': inputAddress7}, function(results, status){
    if (status == 'OK') {
      map.setCenter(results[0].geometry.location);
      marker6 = new google.maps.Marker({
        position: results[0].geometry.location,
        map: map,
      });
    } else {
      alert("該当する結果がありませんでした：" + status);
    }
  });
}