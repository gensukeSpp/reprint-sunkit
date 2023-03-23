/*
 * モーダルウィンドウクラス（ModalFade8,recommendCallBack）
 * に適応されるシングルトンパターンクラス
 */
var SingletonTagModule = (function() {

	// 公開されない機能
	var instance;
	
	function SetTag(args){

		var args = args || {};
		
		this.under = $(args.bottom_elem);  
		this.over = $(args.top_elem);
		this.front = $(args.image_elem);
		this.button = $(args.input_elem);
		/*
		 * var args = {
			bottom_elem: '',
			top_elem: ''
		}
		* */
		
		/* 注意）オブジェクトにしてから、タグ挿入 */		
		$("body").append(this.under, this.over);
		this.button.appendTo(this.over);
	}

	return {
	// ここから公開された機能

		getInstance: function(args) {
			if(!instance) {
				instance = new SetTag(args); // instanceがなければSetTag()実行
			}
			return instance;　// instanceを返す
		}
	};
}());
