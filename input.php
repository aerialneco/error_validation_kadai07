<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>
<div class="container">
<form action="write.php" method="post">
    <section>
    <input type="date" name="date">
    </section>

    <!-- 感情ここから -->
    <section>
    <input type="radio" name="emotionOption" value="怒り" class="emotion" id="anger"><label class="emotionLabel" for="anger">怒り</label>
    <input type="radio" name="emotionOption" value="悲しみ" class="emotion" id="sorrow"><label class="emotionLabel" for="sorrow">悲しみ</label>
    <input type="radio" name="emotionOption" value="安心" class="emotion" id="relief"><label class="emotionLabel" for="relief">安心</label>
    <input type="radio" name="emotionOption" value="緊張" class="emotion" id="tention"><label class="emotionLabel" for="tention">緊張</label>
    <input type="radio" name="emotionOption" value="喜び" class="emotion" id="joy"><label class="emotionLabel" for="joy">喜び</label>
    <input type="radio" name="emotionOption" value="嫌悪" class="emotion" id="disgust"><label class="emotionLabel" for="disgust">嫌悪</label>
    <input type="radio" name="emotionOption" value="普通" class="emotion" id="usual"><label class="emotionLabel" for="usual">普通</label>
    <input type="radio" name="emotionOption" value="驚き" class="emotion" id="surprise"><label class="emotionLabel" for="surprise">驚き</label>
    <input type="radio" name="emotionOption" value="恐れ" class="emotion" id="fear"><label class="emotionLabel" for="fear">恐れ</label>
    <input type="radio" name="emotionOption" value="幸福" class="emotion" id="happy"><label class="emotionLabel" for="happy">幸福</label>
    </section>
    <!-- 感情ここまで -->

    <!-- スケールここから -->
    <section>
    <input type="radio" name="emotionScale" value="-5" class="scale" id="scale-5"><label class="scaleLabel" for="scale-5">-5</label>
    <input type="radio" name="emotionScale" value="-5" class="scale" id="scale-4"><label class="scaleLabel" for="scale-4">-4</label>
    <input type="radio" name="emotionScale" value="-5" class="scale" id="scale-3"><label class="scaleLabel" for="scale-3">-3</label>
    <input type="radio" name="emotionScale" value="-5" class="scale" id="scale-2"><label class="scaleLabel" for="scale-2">-2</label>
    <input type="radio" name="emotionScale" value="-5" class="scale" id="scale-1"><label class="scaleLabel" for="scale-1">-1</label>
    <input type="radio" name="emotionScale" value="0" class="scale" id="scale0"><label class="scaleLabel" for="scale0">0</label>
    <input type="radio" name="emotionScale" value="1" class="scale" id="scale1"><label class="scaleLabel" for="scale1">+1</label>
    <input type="radio" name="emotionScale" value="2" class="scale" id="scale2"><label class="scaleLabel" for="scale2">+2</label>
    <input type="radio" name="emotionScale" value="3" class="scale" id="scale3"><label class="scaleLabel" for="scale3">+3</label>
    <input type="radio" name="emotionScale" value="4" class="scale" id="scale4"><label class="scaleLabel" for="scale4">+4</label>
    <input type="radio" name="emotionScale" value="5" class="scale" id="scale5"><label class="scaleLabel" for="scale5">+5</label>
    </section>
    <!-- スケールここまで -->

    <section>
    <input type="color" value="" name="inputColor">
    </section>

    <section>
        <select name="lifeArea" id="">
            <option value="self">自分・自分に対しての意識</option>
            <option value="money">お金・物資的豊かさ</option>
            <option value="knowledge">スキル・知識習得</option>
            <option value="family">家族など大切な存在（含ペット）</option>
            <option value="hobby">趣味・娯楽</option>
            <option value="social">社交・人間関係</option>
            <option value="work">仕事・社会的地位</option>
            <option value="health">心身の健康</option>
        </select>
    </section>

    <section>
        感情のトリガー: <input type="text" name="trigger">
    </section>
    <section>
    状況等: <textarea name="situation" id="" cols="30" rows="5"></textarea>
    </section>

    <section>
    <input type="submit" value="送信">
    </section>
</form>
</div>

<?php
ini_set('display_errors', 1);
?>

</body>
</html>