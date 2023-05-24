/* 
 * おススメ商品ページにおける、チェックカウント
 * 及びモーダルウィンドウ実行ファイル
 */
$(function(){

	/* recommendFade用インスタンス変数 */
	var mfr;
	/* bodyにかかる下地 */
	var bottom = '<div class="graylayer">';
	/* モーダルウィンドウ */
	var top = '<div class="recom-panel">';

	$('#r_btn').click(function(){
		if(!$("input:checked").prop("checked")){
			alert("どこかにチェックを入れてください");
		}else{
			var stm = SingletonTagModule.getInstance({bottom_elem: bottom, top_elem: top, image_elem: '', input_elem: ''});
			mfr = new recommendCallBack(stm);
			mfr.displayUnder();

			/* それぞれ($("one")~$("eight"))のチェックのした個数（最大5個）*/
			var onecheck = $('#one :checked').length;
			var twocheck = $('#two :checked').length;
			var threecheck = $('#three :checked').length;
			var fourcheck = $('#four :checked').length;
			var fivecheck = $('#five :checked').length;
			var sixcheck = $('#six :checked').length;
			var sevencheck = $('#seven :checked').length;
			var eightcheck = $('#eight :checked').length;

			var checks = [onecheck, twocheck, threecheck, fourcheck, fivecheck, sixcheck, sevencheck, eightcheck];

			/* $("one")~$("eight")で最も多いチェック数を格納 */
			var maxCnt = Math.max.apply(null, checks);
			//console.log(maxCnt);
			
			var dfd = new $.Deferred();
			for(var i = 0; i <= checks.length; i++){
				if(maxCnt == checks[i]){
					$.ajax({
						type: 'GET',
						/* 読み込むHTMLページのURL */
						url: './recommend_files/rcm'+(i + 1)+'.html',
						dataType: 'html',
						cache: false,
						success: dfd.resolve,
						error: dfd.reject
					}).then(
						function(data){
							// console.log(data);
							mfr.displayRecommend(data);}, 
						function(xhr, textStatus, errorThrown){alert('Error! ' + textStatus + ' ' + errorThrown);}
					);
				}
			}
		}
	})
	
	//if(mfr !== undefined){
		$("body").on("click", function(){
			/* タグの除去 */
			$("div.rpl").replaceWith("");
			/* フェードアウト */
			mfr.exitRecommend();
		})
	//}
})
