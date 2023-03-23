<?php
/* Smarty version 4.3.0, created on 2023-03-09 02:51:28
  from '/var/www/html/templates/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_640949b05fa2b4_05197460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ecae972c42ca6d8b124f0bd8b6faa0d1a0c6170' => 
    array (
      0 => '/var/www/html/templates/contact.tpl',
      1 => 1678153364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640949b05fa2b4_05197460 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_382079769640949b05f7344_33218965', 'head_area');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1357256511640949b05f9572_99756504', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'content_base.tpl');
}
/* {block 'head_area'} */
class Block_382079769640949b05f7344_33218965 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_area' => 
  array (
    0 => 'Block_382079769640949b05f7344_33218965',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'head_area'} */
/* {block 'main'} */
class Block_1357256511640949b05f9572_99756504 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1357256511640949b05f9572_99756504',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="frame-top"></div>
  
<h2>お問い合わせ</h2>

<!--<p class="mailto"><a href="mailto:m.koasa@sunkithokkaido.com">Mail To:<br><strong>株式会社サンキット北海道</strong></a></p>-->

<form action="confirm4.php" method="POST" name="contact">
<table class="ta1 mb1em">
<tbody><tr>
<th colspan="2" class="tamidashi">※マークは入力必須です</th>
</tr>
<tr>
<th>お名前※</th>
<td><input type="text" name="name" size="30" class="ws" required="required"></td>
</tr>
<tr>
<th>メールアドレス※</th>
<td><input type="text" name="mail" size="30" class="ws" required="required"></td>
</tr>
<tr>
<th>ご住所(都道府県)</th>
<td>
<select name="address1">
<option value="" selected="selected">都道府県選択</option>
<option value="北海道">北海道</option>
<option value="青森県">青森県</option>
<option value="岩手県">岩手県</option>
<option value="宮城県">宮城県</option>
<option value="秋田県">秋田県</option>
<option value="山形県">山形県</option>
<option value="福島県">福島県</option>
<option value="茨城県">茨城県</option>
<option value="栃木県">栃木県</option>
<option value="群馬県">群馬県</option>
<option value="埼玉県">埼玉県</option>
<option value="千葉県">千葉県</option>
<option value="東京都">東京都</option>
<option value="神奈川県">神奈川県</option>
<option value="新潟県">新潟県</option>
<option value="富山県">富山県</option>
<option value="石川県">石川県</option>
<option value="福井県">福井県</option>
<option value="山梨県">山梨県</option>
<option value="長野県">長野県</option>
<option value="岐阜県">岐阜県</option>
<option value="静岡県">静岡県</option>
<option value="愛知県">愛知県</option>
<option value="三重県">三重県</option>
<option value="滋賀県">滋賀県</option>
<option value="京都府">京都府</option>
<option value="大阪府">大阪府</option>
<option value="兵庫県">兵庫県</option>
<option value="奈良県">奈良県</option>
<option value="和歌山県">和歌山県</option>
<option value="鳥取県">鳥取県</option>
<option value="島根県">島根県</option>
<option value="岡山県">岡山県</option>
<option value="広島県">広島県</option>
<option value="山口県">山口県</option>
<option value="徳島県">徳島県</option>
<option value="香川県">香川県</option>
<option value="愛媛県">愛媛県</option>
<option value="高知県">高知県</option>
<option value="福岡県">福岡県</option>
<option value="佐賀県">佐賀県</option>
<option value="長崎県">長崎県</option>
<option value="熊本県">熊本県</option>
<option value="大分県">大分県</option>
<option value="宮崎県">宮崎県</option>
<option value="鹿児島県">鹿児島県</option>
<option value="沖縄県">沖縄県</option>
</select></td>
</tr>
<tr>
<th>ご住所(市区町村以下)</th>
<td><input type="text" name="address2" size="30" class="wl"></td>
</tr>

<tr>
<th>お問い合わせ項目※</th>
<td>
<label><input type="radio" name="item" value="ご意見" required="required">ご意見</label><br>
<label><input type="radio" name="item" value="ご要望">ご要望</label><br>
<label><input type="radio" name="item" value="ご質問・お問い合わせ">ご質問・お問い合わせ</label><br>
<label><input type="radio" name="item" value="その他">その他</label><br>
<!--<label><input type="checkbox" name="お問い合わせ項目" value="お問い合わせ項目５">お問い合わせ項目５</label>-->
</td>
</tr>

<tr>
<th>お問い合わせ詳細※</th>
<td>
<textarea name="comment" cols="30" rows="10" class="wl" required="required"></textarea>
</td></tr>
</tbody></table>

<div class="c">
<input type="submit" value="確認" class="c_btn">
<input type="reset" value="リセット" class="r_btn">
</div><br>
</form>

<strong><p>※　プライバシーポリシー</p></strong>
<p class="privacy">サンキット北海道（以下「当方」）は、お問い合わせ受付時にお客様の個人の情報を取得いたします。お客様の個人情報は以下の目的でりよういたします。</p>
<ul>
  <li>当方において取り扱うサービスについて、メール、電話などの方法によるご案内。</li>
  <li>新サービス、あるいは顧客満足度向上策検討のため、メール、電話などの方法によるアンケート調査の実施。</li>
  <li>お客様から頂いたお問い合わせについてのご回答。</li>
</ul>
<br>
<p class="privacy">当方が取得したお客様の個人情報は、上記利用目的の達成の範囲内で、当方が選定した委託先と個人情報の取り扱いに関する契約を締結した上で、預託する場合があります。</p>
<p class="privacy">当方は、取得したお客様の個人情報を、本人の同意なく第三者に提供することはありません。</p>
  
  <div id="frame-bottom"></div>

<?php
}
}
/* {/block 'main'} */
}
