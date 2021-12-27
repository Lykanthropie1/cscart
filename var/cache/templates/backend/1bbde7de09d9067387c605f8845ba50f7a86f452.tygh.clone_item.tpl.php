<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 22:07:16
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\buttons\clone_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30926389761c8bd649e5877-25970823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bbde7de09d9067387c605f8845ba50f7a86f452' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\buttons\\clone_item.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '30926389761c8bd649e5877-25970823',
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
  'unifunc' => 'content_61c8bd649ff494_74227207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c8bd649ff494_74227207')) {function content_61c8bd649ff494_74227207($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('clone'));
?>
<a class="btn btn-clone" name="clone" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("clone");?>
</a>&nbsp;<?php }} ?>
