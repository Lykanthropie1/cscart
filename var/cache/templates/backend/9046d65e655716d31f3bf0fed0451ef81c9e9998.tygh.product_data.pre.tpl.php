<?php /* Smarty version Smarty-3.1.21, created on 2021-12-23 20:17:46
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\product_variations\hooks\product_list\product_data.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116019132161c4af3a8f8773-64718706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9046d65e655716d31f3bf0fed0451ef81c9e9998' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_variations\\hooks\\product_list\\product_data.pre.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '116019132161c4af3a8f8773-64718706',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c4af3a91a1c8_65691110',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c4af3a91a1c8_65691110')) {function content_61c4af3a91a1c8_65691110($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php if ($_smarty_tpl->tpl_vars['product']->value['variation_name']) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_list:picker_product_alt_name")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_list:picker_product_alt_name"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <input type="hidden" id="product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_alt" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['variation_name'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_list:picker_product_alt_name"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
