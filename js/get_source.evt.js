/* 
 * トップページから商品情報画面の商品位置まで移動
 * 
 * オリジナルプラグインファイルjquery.data_send.v2.jsのsendData関数を使用
 */
$(function(){
	 
	var $infols = $(".lineup ul li #plst"); // 左下、商品一覧
	var $phtls = $("span.photolst a");　// 動くサムネイル
	var $newitem = $(".new dl dd a"); // 更新情報・お知らせ
	
	$infols.on("click", function(){
		/*
		 * sendDataのオプションを設定
		 * data: data-jumpの値
		 * name: GETで渡す値を格納する変数名
		 * action: 値を送る先
		 */
		$(this).sendData({data: "jump", name: "id", action: "products.php"});
	});
	$phtls.on("click", function(){
		$(this).sendData({data: "jump", name: "id", action: "products.php"});
	});
	$newitem.on("click", function(){
		$(this).sendData({data: "jump", name: "id", action: "products.php"});
	});

	/* トップページのdiv#fromsubのdata-jump属性に値が入ったか検知 */
	/*
	var mo = new MutationObserver(function(){
		//alert("入りました。");
		$("#fromsub").sendData({data: "jump", name: "id", action: "products.php"});
	});
	mo.observe($("#fromsub").get(0), {attributes: true});
	*/

});
