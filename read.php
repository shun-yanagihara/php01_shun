<?php
// $file = fopen('data/data.txt', 'r'); // ファイルを開く

// ファイル内容を1行ずつ読み込んで出力
// $rows = [];
// while ($str = fgets($file)) {
//     $arr = explode(",", $str);
//     $row = "<tr><td>".$arr[0]."</td><td>".$arr[1]."</td><td>".$arr[2]."</td><td>".$arr[3]."</td><td>".$arr[4]."</td></tr>";
//     // var_dump($arr);
//     // echo nl2br($str); // nl2br() ... 改行文字を追加
//     $rows[]= $row;
//     echo $row;
// }
// echo var_dump($rows);

// fclose($file); // ファイルを閉じる
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ユーザ登録者一覧</h1>
    <table border="5">
    <tr>
        <th>登録日時</th>
        <th>氏名</th>
        <th>メールアドレス</th>
        <th>年齢</th>
        <th>住所</th>
        <th>職業</th>
    </tr>
    <?php
    // ファイル内容を1行ずつ読み込んで出力
    $file = fopen('data/data.txt', 'r'); // ファイルを開く
    while ($str = fgets($file)) {
        $arr = explode(",", $str);
        echo "<tr><td>".$arr[0]."</td><td>".$arr[1]."</td><td>".$arr[2]."</td><td>".$arr[3]."</td><td>".$arr[4]."</td><td>".$arr[5]."</td></tr>";
        // var_dump($arr);
        // echo nl2br($str); // nl2br() ... 改行文字を追加
    }
    fclose($file); // ファイルを閉じる
    ?>
    </table>
</body>
</html>