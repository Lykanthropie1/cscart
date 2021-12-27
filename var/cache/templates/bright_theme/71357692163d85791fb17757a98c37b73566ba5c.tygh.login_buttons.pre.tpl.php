<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 22:04:20
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\addons\hybrid_auth\hooks\index\login_buttons.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20132791661c8bcb49b9660-45718473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71357692163d85791fb17757a98c37b73566ba5c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\hybrid_auth\\hooks\\index\\login_buttons.pre.tpl',
      1 => 1639659197,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20132791661c8bcb49b9660-45718473',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'providers_list' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c8bcb4a076b8_48482442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c8bcb4a076b8_48482442')) {function content_61c8bcb4a076b8_48482442($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (is_array($_smarty_tpl->tpl_vars['providers_list']->value)) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/hybrid_auth/views/auth/components/login_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hybrid_auth/hooks/index/login_buttons.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/hybrid_auth/hooks/index/login_buttons.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (is_array($_smarty_tpl->tpl_vars['providers_list']->value)) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/hybrid_auth/views/auth/components/login_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php }?><?php }} ?>
