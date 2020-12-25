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
      alert("プラスを押す前に左側に場所を指定してくださいまたは場所が存在していません");
        fab.style.display ="block";
        address2.style.display ="none";
        fab2.style.display ="none";
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
      alert("プラスを押す前に左側に場所を指定してください");
        fab2.style.display ="block";
        // blockで表示
        address3.style.display ="none";
        // blockで表示
        fab3.style.display ="none";
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
            alert("プラスを押す前に左側に場所を指定してください");
            fab3.style.display ="block";
            // blockで表示
            address4.style.display ="none";
            // blockで表示
            fab4.style.display ="none";
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
      alert("プラスを押す前に左側に場所を指定してください");
        fab4.style.display ="block";
        // blockで表示
        address5.style.display ="none";
        // blockで表示
        fab5.style.display ="none";
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
      alert("プラスを押す前に左側に場所を指定してください");
        fab5.style.display ="block";
            // blockで表示
            address6.style.display ="none";
            // blockで表示
            fab6.style.display ="none";
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
      alert("プラスを押す前に左側に場所を指定してください");
        fab6.style.display ="block";
            // blockで表示
            address7.style.display ="none";
            // blockで表示
            fab7.style.display ="none";
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
      alert("プラスを押す前に左側に場所を指定してください");
    }
  });
}
function check(){

    var flag = 0;


    // 設定開始（必須にする項目を設定してください）

    if(document.form1.title.value == ""){ // 「お名前」の入力をチェック

        flag = 1;

    }
    else if(document.form1.plan1.value == ""){ // 「パスワード」の入力をチェック

        flag = 1;

    }
    else if(document.form1.image.value == ""){ // 「コメント」の入力をチェック

        flag = 1;

    }

    // 設定終了


    if(flag){

        window.alert('必須項目に未入力がありました'); // 入力漏れがあれば警告ダイアログを表示
        return false; // 送信を中止

    }
    else{

        return true; // 送信を実行

    }

}