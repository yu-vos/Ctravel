<html>
    <head>
        <meta charset="utf-8">
        <title>Cトラベル</title>
        <link rel="stylesheet" href="index.css">
        <h1>Cトラベル</h1>
    </head>
    <body>
        
        <header>
  <div id="nav-drawer">
      <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input"><span></span></label>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
      <div id="nav-content">
        <ul id="menu">
            <li><a href="#">ログイン</a></li>
            <li><a href="#">ホーム</a></li>
            <li><a href="#">プラン作成</a></li>
            <li><a href="#">ユーザ設定</a></li>
        </ul></div>
  </div>
</header>
        
        
        
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