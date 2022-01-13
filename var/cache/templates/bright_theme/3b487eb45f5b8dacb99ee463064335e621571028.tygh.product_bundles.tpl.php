<?php /* Smarty version Smarty-3.1.21, created on 2022-01-11 13:29:18
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\addons\product_bundles\blocks\product_tabs\product_bundles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3692481361dd5bfeb58563-93742463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b487eb45f5b8dacb99ee463064335e621571028' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\product_bundles\\blocks\\product_tabs\\product_bundles.tpl',
      1 => 1639659178,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3692481361dd5bfeb58563-93742463',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61dd5bfebacc18_72010250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61dd5bfebacc18_72010250')) {function content_61dd5bfebacc18_72010250($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_block_component')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\block.component.php';
if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('component', array('name'=>"product_bundles.bundles_on_product_tab",'product'=>$_smarty_tpl->tpl_vars['product']->value)); $_block_repeat=true; echo smarty_block_component(array('name'=>"product_bundles.bundles_on_product_tab",'product'=>$_smarty_tpl->tpl_vars['product']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_component(array('name'=>"product_bundles.bundles_on_product_tab",'product'=>$_smarty_tpl->tpl_vars['product']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_bundles/blocks/product_tabs/product_bundles.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_bundles/blocks/product_tabs/product_bundles.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('component', array('name'=>"product_bundles.bundles_on_product_tab",'product'=>$_smarty_tpl->tpl_vars['product']->value)); $_block_repeat=true; echo smarty_block_component(array('name'=>"product_bundles.bundles_on_product_tab",'product'=>$_smarty_tpl->tpl_vars['product']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_component(array('name'=>"product_bundles.bundles_on_product_tab",'product'=>$_smarty_tpl->tpl_vars['product']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
