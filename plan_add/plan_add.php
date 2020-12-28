<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cトラベル：プラン登録</title>
        <h1>Cトラベル：プラン登録</h1>
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    </head>
    <body>
        <div style="position:absolute; top:120px; left:910px;">
            <a id="fab" href="#">
                <i class="fa fa-plus" onclick="clickBtn1() ,codeAddress()"></i>
            </a></div>
        <div style="position:absolute; top:200px;   left:910px;">
            <a id="fab2" href="#">
                <i class="fa fa-plus" onclick="clickBtn2() ,codeAddress1()"></i>
            </a></div>
        <div style="position:absolute; top:280px;   left:910px;">
            <a id="fab3" href="#">
                <i class="fa fa-plus" onclick="clickBtn3() ,codeAddress2()"></i>
            </a></div>
        <div style="position:absolute; top:360px;   left:910px;">
            <a id="fab4" href="#">
                <i class="fa fa-plus" onclick="clickBtn4() ,codeAddress3()"></i>
            </a></div>
        <div style="position:absolute; top:440px;   left:910px;">
            <a id="fab5" href="#">
                <i class="fa fa-plus" onclick="clickBtn5() ,codeAddress4()"></i>
            </a></div>
        <div style="position:absolute; top:520px;   left:910px;">
            <a id="fab6" href="#">
                <i class="fa fa-plus" onclick="clickBtn6() ,codeAddress5()"></i>
            </a></div>
        <div style="position:absolute; top:600px;   left:910px;">
            <a id="fab7" href="#">
                <i class="fa fa-plus" onclick="codeAddress6()"></i>
            </a></div>
            <div style="position:absolute; top:50px; left:50px;">
            <a id="fab8" href="index1.php">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
        </div>
        <form action="plan_add2.php" method="post"enctype="multipart/form-data" name="form1" onSubmit="return check()">
            <div style="position:absolute; top:120px; left:105px;"><input style="text-align: center;" class="title"type="text" name="title"placeholder="タイトルを入力してください。" id="ti"></div>
            <div style="position:absolute; top:120px; left:600px;"><input style="text-align: center;" class="basyo" id="address" type="textbox" name="plan1"placeholder="場所を指定したら右のプラスを押してください"></div>
            <div style="position:absolute; top:200px; left:600px;"><input style="text-align: center;" class="basyo" id="address2" type="textbox" name="plan2"placeholder="場所を指定したら右のプラスを押してください"></div>
            <div style="position:absolute; top:280px; left:600px;"><input style="text-align: center;" class="basyo" id="address3" type="textbox" name="plan3"placeholder="場所を指定したら右のプラスを押してください"></div>
            <div style="position:absolute; top:360px; left:600px;"><input style="text-align: center;" class="basyo" id="address4" type="textbox" name="plan4"placeholder="場所を指定したら右のプラスを押してください"></div>
            <div style="position:absolute; top:440px; left:600px;"><input style="text-align: center;" class="basyo" id="address5" type="textbox" name="plan5"placeholder="場所を指定したら右のプラスを押してください"></div>
            <div style="position:absolute; top:520px; left:600px;"><input style="text-align: center;" class="basyo" id="address6" type="textbox" name="plan6"placeholder="場所を指定したら右のプラスを押してください"></div>
            <div style="position:absolute; top:600px; left:600px;"><input style="text-align: center;" class="basyo" id="address7" type="textbox" name="plan7"placeholder="場所を指定したら右のプラスを押してください"></div>
            <div class="box26" style="position:absolute; top:700px; right:50px;">
                <span class="box-title">備考</span>
            <textarea name="biko" rows="30" cols="75" style="border:none; outline: none; background: none;"></textarea>
            </div>
            
            
            <!-- 👇ここにプレビュー画像を追加する -->
        <div style="position:absolute; top:250px; left:50px;" id="preview"></div>

        <div style="position:absolute; top:700px; left:50px;" id="map"></div>
            <div style="position:absolute; top:170px; left:50px;"><label class="upload-label">
                写真を選択
                <input type="file" name="image" id="example"multiple, accept=".png, .jpg, .jpeg, .doc, .pdf">
                </label></div>
            <button type="submit" class="btn-gradient-3d-simple">保存</button>
        </form>
        

        
    <style>
        .box26 {
            margin: 2em 0;
            padding: 0.5em 1em;
            border: solid 3px #95ccff;
            border-radius: 8px;
        }
        .box26 .box-title {
            position:absolute; top:700px; right:50px;
            display: inline-block;
            top: -18px;
            left: 10px;
            padding: 0 9px;
            line-height: 1;
            font-size: 19px;
            background: #FFF;
            color: #95ccff;
            font-weight: bold;
        }
        .box26 {
            margin: 0; 
            padding: 0;
        }
        input[type="text"] {
        margin: 0;
        padding: 0;
        background: none;
        border: none;
        border-radius: 0;
        outline: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        }
        #ti{
         border:#FF1493 1px solid;
         border-radius:5px;
         box-shadow:1px 1px 2px #67a8dd;
            width: 200px;
            height: 40px;
        }
        #ti:focus{
         box-shadow:-1px -1px 2px #67a8dd;
         transition:all 0.3s;
        }
        #address{
         border:#FF1493 1px solid;
         border-radius:5px;
         box-shadow:1px 1px 2px #67a8dd;
            width: 280px;
            height: 40px;
        }
        #address:focus{
         box-shadow:-1px -1px 2px #666;
         transition:all 0.3s;
        }
        #address2{
         border:#FF1493 1px solid;
         border-radius:5px;
         box-shadow:1px 1px 2px #67a8dd;
            width: 280px;
            height: 40px;
        }
        #address2:focus{
         box-shadow:-1px -1px 2px #666;
         transition:all 0.3s;
        }
        #address3{
         border:#FF1493 1px solid;
         border-radius:5px;
         box-shadow:1px 1px 2px #67a8dd;
            width: 280px;
            height: 40px;
        }
        #address3:focus{
         box-shadow:-1px -1px 2px #666;
         transition:all 0.3s;
        }
        #address4{
         border:#FF1493 1px solid;
         border-radius:5px;
         box-shadow:1px 1px 2px #67a8dd;
            width: 280px;
            height: 40px;
        }
        #address4:focus{
         box-shadow:-1px -1px 2px #666;
         transition:all 0.3s;
        }
        #address5{
         border:#FF1493 1px solid;
         border-radius:5px;
         box-shadow:1px 1px 2px #67a8dd;
            width: 280px;
            height: 40px;
        }
        #address5:focus{
         box-shadow:-1px -1px 2px #666;
         transition:all 0.3s;
        }
        #address6{
         border:#FF1493 1px solid;
         border-radius:5px;
         box-shadow:1px 1px 2px #67a8dd;
            width: 280px;
            height: 40px;
        }
        #address6:focus{
         box-shadow:-1px -1px 2px #666;
         transition:all 0.3s;
        }
        #address7{
         border:#FF1493 1px solid;
         border-radius:5px;
         box-shadow:1px 1px 2px #67a8dd;
            width: 280px;
            height: 40px;
        }
        #address7:focus{
         box-shadow:-1px -1px 2px #666;
         transition:all 0.3s;
        }
        .btn-gradient-3d-simple {
          display: inline-block;
          padding: 0.5em 1em;
          text-decoration: none;
          border-radius: 4px;
          color: #ffffff;
          background-image: linear-gradient(#6795fd 0%, #67ceff 100%);
          box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.29);
          border-bottom: solid 3px #5e7fca;
          position:absolute; top:60px; left:800px;
        }

        .btn-gradient-3d-simple:active {
          -webkit-transform: translateY(4px);
          transform: translateY(4px);
          box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.2);
          border-bottom: none;
        }
        h1 {
            font-weight: normal;
            padding-bottom: 10px;
            text-align: center;
            position: relative;
            margin: 0 0 30px 0;
            letter-spacing: 5px;
            position: absolute; top:20px; left:420px;
        }

        html {
            background-image: url(g0125.jpg);
            background-size:115% auto;
            overflow-x: hidden scroll;
        }
        body {
            background-color: #fff;
            padding: 30px 30px 30px;
            height: 1100px;
            width: 1000px;
            box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.18);
            border-radius: 3px;
            position: absolute; top:20px; left:100px;
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
          float: left;
          width: 400px;
          height:400px;
          border: solid 1px silver;
        }
        #map{
          height: 400px;
          width: 400px;
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
        #fab4 {/*円の部分*/
            float: right;
            display: block;
            width: 40px;/*幅*/
            height: 40px;/*高さ*/
            background: #03a9f4;/*背景色*/
            border-radius: 50%;/*角丸く*/
            transition: .3s;/*滑らかな動きに*/
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.12), 0 2px 2px 0 rgba(0,0,0,.24);/*影*/
        }
        #fab4:hover {/*ホバー時*/
          box-shadow: 0 4px 5px 0 rgba(0,0,0,.14), 0 1px 10px 0 rgba(0,0,0,.12), 0 2px 4px -1px rgba(0,0,0,.2);
        }
        #fab4 i {/*中央のアイコン*/
          padding-left: 12px;
          color: white;
          line-height: 40px;/*＝幅と高さ*/
          font-size: 20px;/*サイズ*/
        }
        #fab5 {/*円の部分*/
            float: right;
            display: block;
            width: 40px;/*幅*/
            height: 40px;/*高さ*/
            background: #03a9f4;/*背景色*/
            border-radius: 50%;/*角丸く*/
            transition: .3s;/*滑らかな動きに*/
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.12), 0 2px 2px 0 rgba(0,0,0,.24);/*影*/
        }
        #fab5:hover {/*ホバー時*/
          box-shadow: 0 4px 5px 0 rgba(0,0,0,.14), 0 1px 10px 0 rgba(0,0,0,.12), 0 2px 4px -1px rgba(0,0,0,.2);
        }
        #fab5 i {/*中央のアイコン*/
          padding-left: 12px;
          color: white;
          line-height: 40px;/*＝幅と高さ*/
          font-size: 20px;/*サイズ*/
        }
        #fab6 {/*円の部分*/
            float: right;
            display: block;
            width: 40px;/*幅*/
            height: 40px;/*高さ*/
            background: #03a9f4;/*背景色*/
            border-radius: 50%;/*角丸く*/
            transition: .3s;/*滑らかな動きに*/
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.12), 0 2px 2px 0 rgba(0,0,0,.24);/*影*/
        }
        #fab6:hover {/*ホバー時*/
          box-shadow: 0 4px 5px 0 rgba(0,0,0,.14), 0 1px 10px 0 rgba(0,0,0,.12), 0 2px 4px -1px rgba(0,0,0,.2);
        }
        #fab6 i {/*中央のアイコン*/
          padding-left: 12px;
          color: white;
          line-height: 40px;/*＝幅と高さ*/
          font-size: 20px;/*サイズ*/
        }
        #fab7 {/*円の部分*/
            float: right;
            display: block;
            width: 40px;/*幅*/
            height: 40px;/*高さ*/
            background: #03a9f4;/*背景色*/
            border-radius: 50%;/*角丸く*/
            transition: .3s;/*滑らかな動きに*/
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.12), 0 2px 2px 0 rgba(0,0,0,.24);/*影*/
        }
        #fab7:hover {/*ホバー時*/
          box-shadow: 0 4px 5px 0 rgba(0,0,0,.14), 0 1px 10px 0 rgba(0,0,0,.12), 0 2px 4px -1px rgba(0,0,0,.2);
        }
        #fab7 i {/*中央のアイコン*/
          padding-left: 12px;
          color: white;
          line-height: 40px;/*＝幅と高さ*/
          font-size: 20px;/*サイズ*/
        }
    </style>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="plan_add.js"></script>
    <script src="map.js"></script>
    <script src="button.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt8VOq7z8BwfdOaghYgQ7_WffuyYk-yxk&callback=initMap" async defer>
    </script>
</html>