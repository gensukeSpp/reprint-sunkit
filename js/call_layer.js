/* 商品情報ページにおけるモーダルウィンドウ実行ファイル */
$(function(){

	/* ModalFade8インスタンス用変数 */
	var mfi;
	/* bodyにかかる下地 */
	var bottom = '<div class="whitelayer">';
	/* モーダルウィンドウ */
	var top = '<div class="overlayer">';
	/* モーダルウィンドウ上のボタン */
	var to_buy = '<input type="button" value="ご購入ページへ">';

	$(".modal img").on("click", function(e){
		/* タグの生成を一度だけにしたクラスのインスタンス */
		var st = SingletonTagModule.getInstance({bottom_elem: bottom, top_elem: top, image_elem: '', input_elem: to_buy});
		mfi = new ModalFade8(st);
		//mfi.scan();
		/* クリックした画像をウィンドウ上にモーダルウィンドウ表示 */
		mfi.displayItem($(this));
		/* デフォルトの動きを抑制 */
		e.preventDefault();
	});
	
	//if(mfi !== undefined){
		$("body").on("click", function(){
			/* 下地・ウィンドウをフェードアウト */
			mfi.exitLayer();
		});
	//}
})
