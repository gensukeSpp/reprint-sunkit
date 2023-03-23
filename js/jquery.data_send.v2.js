/* GETメソッドによりデータを受け渡すプラグイン */
// 匿名関数で全体をラップ - (5)
;(function($) {

	// このプラグインの名前 - (1)
	$.fn.sendData = function(options) {
		//要素を退避 - (2)
		var elements = this;
		
		// 渡されたオプションおよび独自データ属性をデフォルトにマージする
		var setting = $.extend({}, $.fn.sendData.defaults, options);
			
		// 要素をひとつずつ処理 - (3)
		// method chain用に要素を返す - (4)
		return elements.each(function() {
						
		// 具体的な処理をここに記述
			
			/* data-*属性の値を変数（プラグインのdataオプション）に格納 */
			var jump = $(this).data(setting.data);
			
			/* formタグを追加し、GETで値を送信する */
			$(this).append('<form>');
			var form = $('form');
			form.attr('action', setting.action);
			form.attr('mathod', 'get');
			form.append('<input>');
			var elm = $('input');
			elm.attr("name", setting.name);
			elm.attr("type", "hidden");
			elm.attr("value", jump);
			form.submit();
		});
	}			
	
	// デフォルトの引数を設定する
    $.fn.sendData.defaults = {
		data : "_asterisk",
		name : "_name",
		action : "_destination.html"
    }
    
}) (jQuery);
