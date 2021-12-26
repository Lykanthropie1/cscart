<?php /* Smarty version Smarty-3.1.21, created on 2021-12-23 20:17:47
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\product_bundles\hooks\product_list\table_columns.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203006123961c4af3b664622-38267807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33451b109ea78d770ca2d3c2367cccb3999693d0' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_bundles\\hooks\\product_list\\table_columns.post.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '203006123961c4af3b664622-38267807',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'option' => 0,
    'variant' => 0,
    'option_id' => 0,
    'variant_id' => 0,
    'op_modifier' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c4af3b6b33c7_81672312',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c4af3b6b33c7_81672312')) {function content_61c4af3b6b33c7_81672312($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'C:\\OpenServer\\domains\\cscart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php';
?><input type="hidden" id="price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['base_price'], ENT_QUOTES, 'UTF-8');?>
" />
<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_smarty_tpl->tpl_vars['option_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['product_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['option_id']->value = $_smarty_tpl->tpl_vars['option']->key;
?>
    <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_smarty_tpl->tpl_vars['variant_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['option']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
 $_smarty_tpl->tpl_vars['variant_id']->value = $_smarty_tpl->tpl_vars['variant']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['variant']->value['modifier']!=0) {?>
            <?php if ($_smarty_tpl->tpl_vars['variant']->value['modifier_type']=="A") {?>
                <?php $_smarty_tpl->tpl_vars['op_modifier'] = new Smarty_variable($_smarty_tpl->tpl_vars['variant']->value['modifier'], null, 0);?>
            <?php } else { ?>
                <?php echo smarty_function_math(array('equation'=>"(price / 100) * modifier",'price'=>$_smarty_tpl->tpl_vars['product']->value['base_price'],'modifier'=>$_smarty_tpl->tpl_vars['variant']->value['modifier'],'assign'=>"op_modifier"),$_smarty_tpl);?>

            <?php }?>
            <input type="hidden" id="pb_option_modifier_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['op_modifier']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>
    <?php } ?>
<?php } ?><?php }} ?>
