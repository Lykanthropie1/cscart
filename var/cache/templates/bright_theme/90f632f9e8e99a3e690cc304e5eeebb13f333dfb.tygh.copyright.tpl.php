<?php /* Smarty version Smarty-3.1.21, created on 2021-12-23 13:01:16
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\blocks\static_templates\copyright.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32377337661c448ec222b27-83706767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90f632f9e8e99a3e690cc304e5eeebb13f333dfb' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\blocks\\static_templates\\copyright.tpl',
      1 => 1639659147,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '32377337661c448ec222b27-83706767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'config' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c448ec2b1190_01272389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c448ec2b1190_01272389')) {function content_61c448ec2b1190_01272389($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('powered_by','copyright_shopping_cart','powered_by','copyright_shopping_cart'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<p class="bottom-copyright">
    &copy;
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']&&smarty_modifier_date_format((defined('TIME') ? constant('TIME') : null),"%Y")!=$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']) {?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'], ENT_QUOTES, 'UTF-8');?>
 -
    <?php }?>
    
    <?php echo htmlspecialchars(smarty_modifier_date_format((defined('TIME') ? constant('TIME') : null),"%Y"), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_name'], ENT_QUOTES, 'UTF-8');?>
. &nbsp;<?php echo $_smarty_tpl->__("powered_by");?>
 <a class="bottom-copyright" href="<?php echo htmlspecialchars(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['resources']['product_url'],"utm_source=Powered+by&utm_medium=referral&utm_campaign=footer&utm_content=".((string)$_smarty_tpl->tpl_vars['config']->value['current_host'])), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->__("copyright_shopping_cart",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>
</a>
</p><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/copyright.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/copyright.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<p class="bottom-copyright">
    &copy;
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']&&smarty_modifier_date_format((defined('TIME') ? constant('TIME') : null),"%Y")!=$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']) {?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'], ENT_QUOTES, 'UTF-8');?>
 -
    <?php }?>
    
    <?php echo htmlspecialchars(smarty_modifier_date_format((defined('TIME') ? constant('TIME') : null),"%Y"), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_name'], ENT_QUOTES, 'UTF-8');?>
. &nbsp;<?php echo $_smarty_tpl->__("powered_by");?>
 <a class="bottom-copyright" href="<?php echo htmlspecialchars(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['resources']['product_url'],"utm_source=Powered+by&utm_medium=referral&utm_campaign=footer&utm_content=".((string)$_smarty_tpl->tpl_vars['config']->value['current_host'])), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->__("copyright_shopping_cart",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>
</a>
</p><?php }?><?php }} ?>
