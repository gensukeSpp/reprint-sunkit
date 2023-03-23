/*
 * URLの?以降の部分のtabもしくはidにより表示されるタブ、または商品位置まで移動
 * 及びタブのスタイル
 */
$(function(){
	/* URLの?以降の部分の最初の1文字 (?記号) を除いた文字列を取得 */
	var qry = window.location.search.substring(1);
	/* 記号 (=) で文字列を配列に分割 */
	var qarr = qry.split("=");
	if(qarr[0] == "tab"){	
		var tab_num = '#tab' + qarr[1];
	/*
	 * トップページよりidで値が来たら
	 * 
	 * get_source.evt.jsのsendData()より
	 */
	}else if(qarr[0] == "id"){
		var tnum = tabAnc(qarr[1]);
		var tab_num = '#tab' + tnum;
	}
		
	/* 選択されたタブのスタイル */
	var addval = {
		"margin-top": "5px",
		"background": "rgb(255, 255, 255)",
		"border-bottom-style": "none"
		}
	/* 選択解除 */	
	var rmval = {
		"margin-top": "",
		"background": "",
		"border-bottom-style": ""
		}
		
	/* 選択されたタブのスタイル適応 */
	$("#tab li a").filter(function(){
		return /*this.href.match(tab_num);どちらでも良い*/$(this).attr("href") == tab_num;
		}).addClass("select");
	$(".select").parent().css(addval);
	$(".category").hide().filter(tab_num).fadeIn();
			
	/* 改めてクリックされたタブのスタイル適応 */
	$("#tab li a").on("click", function(){
		$("#tab li a").removeClass("select");
		$(this).addClass("select");
		$(this).parent().css(addval);
		$('#tab li a:not(".select")').parent().css(rmval);
		$(".category").hide().filter(this.hash).fadeIn();
		/* タブ切り替えごとにページトップに移動 */
		if(window.onload){
			$('html, body').animate({scrollTop: 0}, 'slow');
		}
	});
	
	/* ?tab= or ?id=の後の文字列を受け取る */
	function tabAnc(ancN){
		var tab;
		
		if(ancN.match(/^F/)){
			tab = "F";		
			return tab;
		}else if(ancN.match(/^S/)){
			tab = "S";		
			return tab;
		}else if(ancN.match(/^C/)){
			tab = "C";		
			return tab;
		}else if(ancN.match(/^Ap/)){
			tab = "Ap";		
			return tab;
		}else if(ancN.match(/^Of/)){
			tab = "Of";		
			return tab;
		}else if(ancN.match(/^DD/)){
			tab = "DD";		
			return tab;
		}
	}
});
