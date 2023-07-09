<!-- エラー500のようにエラーが生じた時、原因を表示するか否かはサーバ側の設定の問題＝表示するようにコードで設定をいじれる -->
<!-- 以下のようなコードで、エラーの詳細を表示できるようになる -->
<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>

<?php
// クロスサイトスクリプティング（XSS）対策を関数化
// 次回以降includeで共通化することも学ぶ（今回は関数を適用するところまで）
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
 }

$name = h($_POST["name"]);
$mail = h($_POST["mail"]);
$age =h($_POST["age"]);
$address = h($_POST["address"]);
$job = h($_POST["job"]);

//文字作成
$str = date("Y-m-d H:i:s").",".$name.",".$mail.",".$age.",".$address.",".$job; //フォーマット通りに日付を表示してくれる（タイムゾーンは日本ではない）
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み。aは書き込み穂いう方（a=追加）
fwrite($file, $str."\n"); //ファイル書き込み
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>

<ul>
<li><a href="input.php">戻る</a></li>
</ul>
</body>
</html>