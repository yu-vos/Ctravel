/*jshint globalstrict: true*/
/*jshint esversion: 6 */
/*eslint-env es6*/
/*jshint globalstrict: true*/
/*jshint esversion: 6 */
/*jshint jquery: true*/
/*jshint node: true*/
/*jshint browser: true*/
/*jshint devel: true*/
/*eslint-env es6*/
/*eslint-env jquery*/
/*eslint-env browser*/
/*eslint no-console: 0*/
function previewFile(file) {
  // プレビュー画像を追加する要素
  const preview = document.getElementById('preview');

  // FileReaderオブジェクトを作成
  const reader = new FileReader();

  // ファイルが読み込まれたときに実行する
  reader.onload = function (e) {
    const imageUrl = e.target.result; // 画像のURLはevent.target.resultで呼び出せる
    const img = document.createElement("img"); // img要素を作成
    img.src = imageUrl; // 画像のURLをimg要素にセット
    preview.appendChild(img); // #previewの中に追加
  }

  // いざファイルを読み込む
  reader.readAsDataURL(file);
}


// <input>でファイルが選択されたときの処理
const fileInput = document.getElementById('example');
const handleFileSelect = () => {
  const files = fileInput.files;
  for (let i = 0; i < files.length; i++) {
    previewFile(files[i]);
  }
}
fileInput.addEventListener('change', handleFileSelect);

var map;
var marker;
var infoWindow;
var center = {
   lat: 34.7019399, // 緯度
  lng: 135.51002519999997 // 経度
};
function initMap() {
 map = new google.maps.Map(document.getElementById('sample'), { // #sampleに地図を埋め込む
     center: center, // 地図の中心を指定
     zoom: 19 // 地図のズームを指定
   });
 
 marker = new google.maps.Marker({ // マーカーの追加
        position: center, // マーカーを立てる位置を指定
      map: map // マーカーを立てる地図を指定
   });
 
 infoWindow = new google.maps.InfoWindow({ // 吹き出しの追加
        content: '<div class="sample">TAM 大阪</div>' // 吹き出しに表示する内容
  });
 marker.addListener('click', function() { // マーカーをクリックしたとき
     infoWindow.open(map, marker); // 吹き出しの表示
    });
}