var recommendCallBack = function(status){
		
	/* recommendCallBackクラスのコンストラクタ */
	this.bottom_obj = status.under;
	this.top_obj = status.over;
	
	this.displayUnder = function(){
		var myself = this;
		var dfd = new $.Deferred();
		setTimeout(function(){
			myself.bottom_obj.fadeIn("slow");
		}, 1000);
		return dfd.promise();
	};
		
	this.displayRecommend = function(ajaxdata){
		var myself = this;
		var dfd = new $.Deferred();
		setTimeout(function(){
			myself.top_obj.append(ajaxdata);
			_setMargin(myself.top_obj).fadeIn("slow");
		}, 1500);
		return dfd.promise();
	};
	
	this.exitRecommend = function(){
		var myself = this;
		myself.top_obj.fadeOut();
		myself.bottom_obj.fadeOut();
	};
	
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
