<html>
    <head>
        <meta charset="utf-8">
        <title>Cトラベル</title>
        <link rel="stylesheet" href="plan_add.css">
        <h1>Cトラベル</h1>
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <script language="JavaScript"><!--
function setTF(fObj,vType)
{
	fObj.style.visibility = vType;
}
// --></script>
    </head>
    <body>
        <a id="fab" href="#">
                <i class="fa fa-plus" onClick="setTF(this.form.txtField1,'visible')"></i>
        </a>
        <form action="#" method="post">
            <input  class="title"type="text" name="name"placeholder="タイトルを入力してください。">
            <input class="basyo" id="address" type="textbox" name="name"placeholder="場所を指定してくさい">
            <input type="text" name="txtField1" style="visibility:hidden"><br>
        </form>
        <form method="post" enctype="multipart/form-data">
            <label class="upload-label">
                写真を選択
                <input type="file" id="example"multiple, accept=".png, .jpg, .jpeg, .doc">
            </label>
        </form>
        <!-- 👇ここにプレビュー画像を追加する -->
        <div id="preview"></div>
        
        <!--<div id="latlngDisplay">ここに緯度、経緯が表示される</div>
        <div id="addressDisplay">ここに住所が表示される</div>-->
        <div id="map"></div>

    <style>
        #map{
          height: 600px;
          width: 600px;
            /* 下の1文を追加 */
          background-color: red;
        }
    </style>

    </body>
    <script src="plan_add.js"></script>
    <script src="map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt8VOq7z8BwfdOaghYgQ7_WffuyYk-yxk&callback=initMap" async defer></script>
</html>