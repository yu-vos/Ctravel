<html>
    <head>
        <meta charset="utf-8">
        <title>Cトラベル</title>
        <link rel="stylesheet" href="plan_add.css">
        <h1>Cトラベル</h1>
    </head>
    <body>
        <form action="#" method="post">
            <input type="text" name="name"placeholder="タイトルを入力してください。">
        </form>
        <form method="post" enctype="multipart/form-data">
            <label class="upload-label">
                写真を選択
                <input type="file" id="example"multiple, accept=".png, .jpg, .jpeg, .doc">
            </label>
        </form>
        <!-- 👇ここにプレビュー画像を追加する -->
        <div id="preview"></div>
    </body>
    <script src="plan_add.js"></script>
</html>