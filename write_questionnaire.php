<?php
// post.phpで書き込んだ情報を読み込んでみよう。post_confirm.phpから以下コピー
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $sex = $_POST["sex"];
    $age = $_POST["age"];
    $dog = $_POST["dog"];
    $zaitaku = $_POST["zaitaku"];
    $mil = $_POST["mil"];



//文字作成
$str = date("Y年m月d日 H:i:s").",".$name.",".$mail.",".$sex.",".$age.",".$dog.",".$zaitaku.",".$mil;
//File書き込み
$file = fopen("data/data_questionnaire.txt","a");	// ファイル読み込み。"a"だと追加、"w"だと上書き
fwrite($file, $str."\n");
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data_questionnaire.txt を確認しましょう！</h2>

<ul>
<li><a href="post_questionnaire.php">戻る</a></li>
</ul>
</body>
</html>