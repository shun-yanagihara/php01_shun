<html>
<head>
<meta charset="utf-8">
<title>POST練習</title>
</head>
<body>
<form action="write.php" method="post">
	お名前: <input type="text" name="name">
	EMAIL: <input type="text" name="mail">
	<ul>
		<li>アンケート①：ご年齢は？ <input type="text" name="age"></li>
		<li>アンケート②：お住まいは？ <input type="text" name="address"></li>
		<li>アンケート③：ご職業は？ <input type="text" name="job"></li>
	</ul>
	<input type="submit" value="送信">
</form>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>