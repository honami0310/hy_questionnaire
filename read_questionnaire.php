<html>

<head>
    <meta charset="utf-8">
    <title>課題</title>
    <link rel="stylesheet" href="data/css/style.css">
    <!-- jquery読み込み -->
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- JQuery -->
</head>

<body>

<?php
$file = "data/data_questionnaire.txt";

$lines = file($file);

?>
<div class="space30"></div>
    <div id="outputspace" >
        <!-- phpデータ出力 -->
        <ul id="dataLine" hidden>
            <!-- foreachでファイルの配列をループ処理 -->
            <!-- { }（波カッコ）を使わない代わりに、:（コロン）を付け、一番最後にendforeachを付ける -->
            <!-- テキストURL: https://www.flatflag.nir87.com/foreach-294#foreach-5 -->
            <?php foreach ($lines as $line) : ?>

                <!-- 配列の要素を１行ずつ<li>タグに埋め込む -->
                <li><?php echo $line; ?></li>
            <?php endforeach; ?>

        </ul>

        <table id="dataTable">
            <tr>
            <td class="top">送信日時</td>
            <td class="top">名前</td>
            <td class="top">email</td>
            <td class="top">性別</td>
            <td class="top">年齢</td>
            <td class="top">犬猫派</td>
            <td class="top">勤務style</td>
            <td class="top">MILへの意気込み</td></tr>
                <!-- ここにアンケート表示 -->
        </table>
</html>

<script>
    $(document).ready(function() {
        // ul内の各liに対して処理
        $("#dataLine li").each(function(){
            // カンマで分割する処理
            let data = $(this).text().split(",");
            // 新しい行にtrをつける
            let newRow = $("<tr>");
            // それぞれのデータをth,trで囲ってtableに入れる
            data.forEach(function(item){
                newRow.append($("<td>").text(item));
            });

            $("#dataTable").append(newRow);

        });
    });
</script>
</body>

</html>