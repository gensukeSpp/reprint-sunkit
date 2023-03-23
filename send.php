<?php
	mb_language("Ja") ;
	mb_internal_encoding("UTF-8") ;
	
	$mailto = mb_convert_kana("*.*****@sunkithokkaido.com", "a");
	
	session_start();
	//$from = strtr( mb_encode_mimeheader($_SESSION["mail"], "ISO-2022-JP"), array( "\r"=>"" ) );
	$from = convertEOL($_SESSION["mail"]);
	$message = "【名前】" . $_SESSION["name"] . "　【住所】" . $_SESSION["address1"] . $_SESSION["address2"] . "\n【本文】" . $_SESSION["comment"];

	if (!mb_send_mail($mailto, "【項目】" . $_SESSION["item"], $message, "From: " . $from)) {
		exit("メールを送信できませんでした。");
	}

	function convertEOL($string, $to = "\n"){   
		return preg_replace("/\r\n|\r|\n/", $to, $string);
	}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./style/confirm.css" rel="stylesheet" type="text/css">
<title>メール送信</title>
</head>
<body>
<div id="container">
<p class="send-report">メールが送信されました。
<!--<?php if(isset($message)){
	echo $message;
	}else{
	exit("error");} ?>--></p>
<a href="./index.php">トップページへ</a>
</div>
</body>
</html>
