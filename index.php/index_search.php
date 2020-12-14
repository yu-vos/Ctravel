<?php
	header('Content-Type: text/html; charset=UTF-8');
	$maker = $_GET['maker'];
	$db = new pdo("mysql:host=localhost;dbname=websecuritydb","root","12345");
	$sql = "SELECT * FROM foodtbl WHERE maker ='$maker' ORDER BY price";
	$ps = $db->query($sql);
?>
<body>
	<table border=1>
		<tr>
			<th>商品ID</th>
			<th>品名</th>
			<th>メーカー</th>
			<th>単価</th>
		</tr>
<?php
	while ($row = $ps->fetch()){
		echo "<tr>\n";
		for ($i = 0; $i < 4; $i++) {
			echo "<td>" . $row[$i] . "</td>\n";
		}
	}