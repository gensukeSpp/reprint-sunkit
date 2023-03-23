{extends file='content_base.tpl'}

{block name=head_area prepend}
{/block}

{block name=main}
  
<div class="main-bg"></div>
<p>あなたはどのタイプ？　あなたにオススメの商品はこちら。</p><br>
<div id="one">
<label><input type="checkbox" value="1">疲れやすい</label><br>
<label><input type="checkbox" value="2">むくみやすい</label><br>
<label><input type="checkbox" value="3">よく息切れする</label><br>
<label><input type="checkbox" value="4">風邪をひきやすい</label><br>
<label><input type="checkbox" value="5">食欲不振だ</label><br>
</div>
<br>
<div id="two">
<label><input type="checkbox" value="6">顔色が悪い</label><br>
<label><input type="checkbox" value="7">乾燥肌だ</label><br>
<label><input type="checkbox" value="8">髪の毛に艶がなく、抜け毛が多い</label><br>
<label><input type="checkbox" value="9">ドライアイ</label><br>
<label><input type="checkbox" value="10">筋肉がひきつる</label><br>
</div>
<br>
<div id="three">
<label><input type="checkbox" value="11">顔色や唇の色がいつも悪い</label><br>
<label><input type="checkbox" value="12">体温が低い</label><br>
<label><input type="checkbox" value="13">眠気がひどい</label><br>
<label><input type="checkbox" value="14">クマが濃い</label><br>
<label><input type="checkbox" value="15">下痢や頻尿の傾向にある</label><br>
</div>
<br>
<div id="four">
<label><input type="checkbox" value="16">肌がくすんでいる</label><br>
<label><input type="checkbox" value="17">シミができやすい</label><br>
<label><input type="checkbox" value="18">よくため息をつく</label><br>
<label><input type="checkbox" value="19">イライラして怒りっぽい</label><br>
<label><input type="checkbox" value="20">ゲップやガスが多い</label><br>
</div>
<br>
<div id="five">
<label><input type="checkbox" value="21">顔や唇の色が黒っぽい</label><br>
<label><input type="checkbox" value="22">肌がザラザラだ</label><br>
<label><input type="checkbox" value="23">クマができやすい</label><br>
<label><input type="checkbox" value="24">内出血の痕が消えにくい</label><br>
<label><input type="checkbox" value="25">情緒不安定なほうだ</label><br>
</div>
<br>
<div id="six">
<label><input type="checkbox" value="26">色白、もち肌だ</label><br>
<label><input type="checkbox" value="27">オイリー肌だ</label><br>
<label><input type="checkbox" value="28">口の中が粘っこい</label><br>
<label><input type="checkbox" value="29">肥満体質だ</label><br>
<label><input type="checkbox" value="30">大便が柔らかい</label><br>
</div>
<br>
<div id="seven">
<label><input type="checkbox" value="31">乾燥肌で小じわができやすい</label><br>
<label><input type="checkbox" value="32">顔が火照っている</label><br>
<label><input type="checkbox" value="33">体は細身だ</label><br>
<label><input type="checkbox" value="34">口が乾きやすい</label><br>
<label><input type="checkbox" value="35">便秘がちだ</label><br>
</div>
<br>
<div id="eight">
<label><input type="checkbox" value="36">味の濃いものが好き</label><br>
<label><input type="checkbox" value="37">ニキビや吹き出物が出やすい</label><br>
<label><input type="checkbox" value="38">尿が濁っている</label><br>
<label><input type="checkbox" value="39">排便してもすっきりしない</label><br>
<label><input type="checkbox" value="40">体が重い</label><br>
</div>
<br>
<input type="button" id="r_btn" value="あなたにオススメする商品は…">
<input type="button" id="c_btn" value="クリア">
  <!--<div id="underlogo"></div>-->
<section class="window"></section>
 
{/block}
