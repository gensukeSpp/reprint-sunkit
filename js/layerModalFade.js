var ModalFade8 = function(status){

	/* ModalFade8クラスのコンストラクタ */
	this.bottom_obj = status.under;
	this.top_obj = status.over;
	this.front_obj;
	this.button_obj = status.button;
		
	/*
	 * 4段階のモーダルウィンドウ
	 * 
	 * opt=商品画像
	 */
	this.displayItem = function(opt){
		var myself = this;
		
		var firststage = function(){
			var dfd = new $.Deferred();
			/* 0.7秒後に表示 */
			setTimeout(function(){
				myself.bottom_obj.fadeIn("slow");
				dfd.resolve();
			}, 700);
			return dfd.promise();
		}

		var secondstage = function(){
			var dfd = new $.Deferred();
			setTimeout(function(){
				_setMargin(myself.top_obj).fadeIn("slow");
				dfd.resolve();
			}, 700);
			return dfd.promise();
		}

		var thirdstage = function(){
			if(opt.parent(".modal").data("link") !== ""){
				//myself.top_obj.append(myself.button_obj);
				var indiv_url = opt.parent(".modal").data("link");
				myself.button_obj.attr("onClick", "window.open('" + indiv_url + "')");
				myself.button_obj.fadeIn("slow");
			}else{
				/* data-link属性に値がなかったら、ボタンを表示しない */
				myself.button_obj.hide();
				return;
			}
		}

		var fourthstage = function(){
			var dfd = new $.Deferred();
			setTimeout(function(){
				/* タグをコピー */
				myself.front_obj = opt.clone();
				myself.front_obj.appendTo(myself.top_obj);
				_setMargin(myself.front_obj).css("top", "45%").fadeIn("slow");
				dfd.resolve();
			}, 1000);
			return dfd.promise();
		}
		/* $.Deferred.then()でAjaxを階層的に実行 */
		firststage().then(function(){
			return $.when(secondstage(), thirdstage());
		}).then(fourthstage);
	};
	
	this.exitLayer = function(){
		var myself = this;
		myself.front_obj.remove();
		myself.top_obj.fadeOut();
		myself.bottom_obj.fadeOut();
	};
	
	/* モーダルウィンドウの位置を調節する関数 */
	function _setMargin(mwindow){
		var secWidth = mwindow.width() * 0.5;
		var secHeight = mwindow.height() * 0.5;
		//console.log(secWidth);
		//console.log(secHeight);
			
		var Widthpx = secWidth * -1;
		var Heightpx = secHeight * -1;
			
		return mwindow.css({
			"margin-left" : Widthpx + "px",
			"margin-top" : Heightpx + "px",
			"top" : "50%",
			"left" : "50%"
		});
	};
}
