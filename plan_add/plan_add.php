<html>
    <head>
        <meta charset="utf-8">
        <title>Cトラベル</title>
        <h1>Cトラベル</h1>
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    </head>
    <body>
        <div style="position:absolute; top:110px; left:900px;">
            <a id="fab" href="#">
                <i class="fa fa-plus" onclick="clickBtn1() ,codeAddress()"></i>
            </a></div>
        <div style="position:absolute; top:190px;   left:900px;">
            <a id="fab2" href="#">
                <i class="fa fa-plus" onclick="clickBtn2()"></i>
            </a></div>
        <div style="position:absolute; top:270px;   left:900px;">
            <a id="fab3" href="#">
                <i class="fa fa-plus" onclick="clickBtn3()"></i>
            </a></div>
        <form action="#" method="post">
            <input  class="title"type="text" name="name"placeholder="タイトルを入力してください。">
            <div style="position:absolute; top:120px; left:700px;"><input class="basyo" id="address" type="textbox" name="name"placeholder="場所を指定してくさい"></div>
            <div style="position:absolute; top:200px; left:700px;"><input class="basyo" id="address2" type="textbox" name="name"placeholder="場所を指定してくさい"></div>
            <div style="position:absolute; top:280px; left:700px;"><input class="basyo" id="address3" type="textbox" name="name"placeholder="場所を指定してくさい"></div>
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
        h1 {
            font-weight: normal;
            padding-bottom: 10px;
            text-align: center;
            position: relative;
            margin: 0 0 30px 0;
            letter-spacing: 5px;
            position: relative;
        }

        html {
            background-color: #f0f8ff;
            overflow: hidden scroll;
        }
        body {
            background-color: #fff;
            padding: 30px 30px 30px;
            max-width: 1000px;
            margin: 20px auto;
            box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.18);
            border-radius: 3px;
            position: relative;
        }
        .title {
            margin-left: 70px;
        }
        /* labelをボタンらしく */
        .upload-label {
          display: inline-block;
          cursor: pointer; /* カーソルを指に */
          margin-left: 100px;
          padding: .7em 1em; /* 文字まわりの余白 */
          line-height: 1.4; /* 行間 */
          background: #3e8bff; /* 背景色 */
          color: #FFF; /* 文字色 */
          font-size: 0.95em; /* フォントサイズ */
          border-radius: 2.5em; /* 角の丸み */
          transition: 0.2s; /* ホバーをなめらかに */
        }
        /* ホバー時 */
        .upload-label:hover {
          box-shadow: 0 8px 10px -2px rgba(0, 0, 0, 0.2); /* 影を表示 */
        }
        /* inputは隠す */
        .upload-label input {
          display: none;
        }
        #preview img {
          margin-left: 50px;
          float: left;
          width: 200px;
          height:200px;
          border: solid 1px silver;
        }
        #map{
          height: 500px;
          width: 500px;
            /* 下の1文を追加 */
          background-color: red;
        }
        #fab {/*円の部分*/
            float: right;
            display: block;
            width: 40px;/*幅*/
            height: 40px;/*高さ*/
            background: #03a9f4;/*背景色*/
            border-radius: 50%;/*角丸く*/
            transition: .3s;/*滑らかな動きに*/
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.12), 0 2px 2px 0 rgba(0,0,0,.24);/*影*/
        }

        #fab:hover {/*ホバー時*/
          box-shadow: 0 4px 5px 0 rgba(0,0,0,.14), 0 1px 10px 0 rgba(0,0,0,.12), 0 2px 4px -1px rgba(0,0,0,.2);
        }

        #fab i {/*中央のアイコン*/
          padding-left: 12px;
          color: white;
          line-height: 40px;/*＝幅と高さ*/
          font-size: 20px;/*サイズ*/
        }

        #fab2 {/*円の部分*/
            float: right;
            display: block;
            width: 40px;/*幅*/
            height: 40px;/*高さ*/
            background: #03a9f4;/*背景色*/
            border-radius: 50%;/*角丸く*/
            transition: .3s;/*滑らかな動きに*/
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.12), 0 2px 2px 0 rgba(0,0,0,.24);/*影*/
        }
        #fab2:hover {/*ホバー時*/
          box-shadow: 0 4px 5px 0 rgba(0,0,0,.14), 0 1px 10px 0 rgba(0,0,0,.12), 0 2px 4px -1px rgba(0,0,0,.2);
        }
        #fab2 i {/*中央のアイコン*/
          padding-left: 12px;
          color: white;
          line-height: 40px;/*＝幅と高さ*/
          font-size: 20px;/*サイズ*/
        }
        #fab3 {/*円の部分*/
            float: right;
            display: block;
            width: 40px;/*幅*/
            height: 40px;/*高さ*/
            background: #03a9f4;/*背景色*/
            border-radius: 50%;/*角丸く*/
            transition: .3s;/*滑らかな動きに*/
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.12), 0 2px 2px 0 rgba(0,0,0,.24);/*影*/
        }
        #fab3:hover {/*ホバー時*/
          box-shadow: 0 4px 5px 0 rgba(0,0,0,.14), 0 1px 10px 0 rgba(0,0,0,.12), 0 2px 4px -1px rgba(0,0,0,.2);
        }
        #fab3 i {/*中央のアイコン*/
          padding-left: 12px;
          color: white;
          line-height: 40px;/*＝幅と高さ*/
          font-size: 20px;/*サイズ*/
        }
    </style>

    </body>
    <script src="plan_add.js"></script>
    <script src="map.js"></script>
    <script src="button.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt8VOq7z8BwfdOaghYgQ7_WffuyYk-yxk&callback=initMap" async defer></script>
</html>