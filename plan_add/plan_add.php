<html>
    <head>
        <meta charset="utf-8">
        <title>Cトラベル</title>
        <link rel="stylesheet" href="plan_add.css">
        <h1>Cトラベル</h1>
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    </head>
    <body>
        <form action="#" method="post">
            <input  class="title"type="text" name="name"placeholder="タイトルを入力してください。">
            <input class="basyo" type="text" name="name"placeholder="場所を指定してくさい">
        </form>
        <a id="fab" href="#">
                <i class="fa fa-plus"></i>
            </a>
        <form method="post" enctype="multipart/form-data">
            <label class="upload-label">
                写真を選択
                <input type="file" id="example"multiple, accept=".png, .jpg, .jpeg, .doc">
            </label>
        </form>
        <!-- 👇ここにプレビュー画像を追加する -->
        <div id="preview"></div>
        <!--google maps-->
        <div id="sample"></div>
        
    </body>
    <script src="plan_add.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?
                             key=AIzaSyBt8VOq7z8BwfdOaghYgQ7_WffuyYk-yxk&callback=initMap" type="text/javascript"></script>
</html>