<?php
	session_start();
	$n = $_POST["name"];
	$_SESSION["name"] = $n;
	$m = $_POST["mail"];
	$_SESSION["mail"] = $m;
	$a1 = $_POST["address1"];
	$_SESSION["address1"] = $a1;
	$a2 = $_POST["address2"];
	$_SESSION["address2"] = $a2;
	$i = $_POST["item"];
	$_SESSION["item"] = $i;
	$c = $_POST["comment"];
	$_SESSION["comment"] = $c;
	//header("Location: send.php");
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./style/confirm.css" rel="stylesheet" type="text/css">
<title>確認画面</title>
</head>
<body>
<div id="container">
<div class="upperlogo"></div>
<h2>メールは送信されません</h2>
<form action="send.php" method="post" name="form">
<table border="1">
  <tr>
    <td>お名前</td><td name="_name"><?php echo htmlspecialchars($n, ENT_QUOTES); ?></td>
  </tr>
  <tr>
    <td>メールアドレス</td><td name="_mail"><?php echo htmlspecialchars($m, ENT_QUOTES); ?></td>
  </tr>
  <tr>
    <td>ご住所(都道府県)</td><td name="_address1"><?php echo htmlspecialchars($a1, ENT_QUOTES); ?></td>
  </tr>
  <tr>
    <td>ご住所(市区町村以下)</td><td name="_address2"><?php echo htmlspecialchars($a2, ENT_QUOTES); ?></td>
  </tr>
　<tr>
    <td>お問い合わせ項目</td><td name="_item"><?php echo htmlspecialchars($i, ENT_QUOTES); ?></td>
  </tr>
  <tr>
    <td>お問い合わせ詳細</td><td name="_comment"><?php echo nl2br(htmlspecialchars($c, ENT_QUOTES)); ?></td>
  </tr>
</table><br />
<input type="submit" value="送信" class="send">
</form>
<input type="submit" value="戻る" class="back" onClick="javascript:history.back()">
<!--<a href="./contact2.html">戻る</a>-->
</div><!--/div#container-->

</body>
</html>
