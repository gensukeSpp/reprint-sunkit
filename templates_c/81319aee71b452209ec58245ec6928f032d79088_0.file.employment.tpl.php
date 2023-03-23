<?php
/* Smarty version 4.3.0, created on 2023-03-09 02:47:35
  from '/var/www/html/templates/employment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_640948c77e6959_89286230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81319aee71b452209ec58245ec6928f032d79088' => 
    array (
      0 => '/var/www/html/templates/employment.tpl',
      1 => 1678153364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640948c77e6959_89286230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1216306316640948c77e3d40_04213377', 'head_area');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1156105264640948c77e5d68_85383057', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'content_base.tpl');
}
/* {block 'head_area'} */
class Block_1216306316640948c77e3d40_04213377 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_area' => 
  array (
    0 => 'Block_1216306316640948c77e3d40_04213377',
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
class Block_1156105264640948c77e5d68_85383057 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1156105264640948c77e5d68_85383057',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="frame-top"></div>
  
<h2>求人・採用情報</h2>
<p><strong>パート・アルバイト採用</strong></p>
  <p>　※　募集は現在行っておりません。</p>
  <p>　＜仕事内容＞</p>
  <table class="emp">
    <tbody><!--<tr><td colspan="2"></td>
		  </tr>-->
          <tr>
            <th>募集職種</th>
            <td>準備中</td>
          </tr>
          <tr>
            <th>期間</th>
            <td></td>
          </tr>
          <tr>
            <th>資格</th>
            <td></td>
          </tr>
          <tr>
            <th>時間</th>
            <td>
			</td>
          </tr>
          <tr>
            <th>休日</th>
            <td></td>
          </tr>
          <tr>
            <th>給与</th>
            <td></td>
          </tr>
          <tr>
            <th>勤務先</th>
            <td></td>
          </tr>
          <tr>
            <th>待遇</th>
            <td></td>
          </tr>
        
</tbody></table>
<p><strong>新卒採用</strong></p>
  <p>　※　募集は現在行っておりません。</p>
  <p>　＜仕事内容＞</p>
		  <table class="emp">
            <tbody><!--<tr><td colspan="2"></td>
		  </tr>-->
          <tr>
            <th>募集職種</th>
            <td>準備中</td>
          </tr>
          <tr>
            <th>期間</th>
            <td></td>
          </tr>
          <tr>
            <th>資格</th>
            <td></td>
          </tr>
          <tr>
            <th>時間</th>
            <td>
			</td>
          </tr>
          <tr>
            <th>休日</th>
            <td></td>
          </tr>
          <tr>
            <th>給与</th>
            <td></td>
          </tr>
          <tr>
            <th>勤務先</th>
            <td></td>
          </tr>
          <tr>
            <th>待遇</th>
            <td></td>
          </tr>
        
</tbody></table>
  
  <div id="frame-bottom"></div>

<?php
}
}
/* {/block 'main'} */
}
