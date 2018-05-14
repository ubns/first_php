<!DOCTYPE html>
<html>
<head>
    <title>PHP FIRST</title>
</head>
<body>

<h3>PHPの記述方法</h3>
<p>今日は、<?php echo date("Y年m月d"); ?>です。</p>

<h3>変数と定数</h3>
<p>定数を表す場合は<?php define("teisu", "define")?>"<?php print(teisu)?>"で表す</p>

<p>変数を表す場合は<?php $hensu = "\$変数名"; ?>"<?php print($hensu)?>"で表す</p>

<p>数値の場合は<?php $suuti = 123;?><?php print($suuti)?>クォーテーションで囲わない</p>

<h3>配列</h3>
<?php
    $array[] = "りんご";  // $array[0]で取り出す
    $array[] = "ばなな";  // $array[1]で取り出す
    $array[] = "ぶどう";  // $array[2]で取り出す
    print($array[0])
?>

<p>array()関数の場合</p>
<?php $array = array("りんご","ばなな","ぶどう"); ?>

<p>explode()関数</p>

<p></p>
</body>
</html>