<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 22:07:16
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\buttons\add_empty_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51052957361c8bd64976785-63726014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0a99510a4dbe53486de2687c8ca7cf26aa651c9' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\buttons\\add_empty_item.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '51052957361c8bd64976785-63726014',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item_id' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c8bd64993343_47001429',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c8bd64993343_47001429')) {function content_61c8bd64993343_47001429($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add'));
?>
<a class="btn btn-add" name="add" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("add");?>
</a>&nbsp;<?php }} ?>
