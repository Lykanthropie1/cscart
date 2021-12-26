<?php /* Smarty version Smarty-3.1.21, created on 2021-12-24 19:11:57
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\advanced_import\hooks\products\tools_list_items.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128635545561c5f14d448e91-04876664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '421cc5642ce2d9aa8d1b9b3bfc546b51dfb666e6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\advanced_import\\hooks\\products\\tools_list_items.pre.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '128635545561c5f14d448e91-04876664',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c5f14d49ee31_80909972',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c5f14d49ee31_80909972')) {function content_61c5f14d49ee31_80909972($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php if (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::VENDOR")) {?>
    <?php $_smarty_tpl->tpl_vars['import_product_href'] = new Smarty_variable("import_presets.manage&object_type=products", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['import_product_href'] = clone $_smarty_tpl->tpl_vars['import_product_href'];?>
    <?php $_smarty_tpl->tpl_vars['has_permission_an_import'] = new Smarty_variable(fn_check_permissions("import_presets","update","admin","POST"), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['has_permission_an_import'] = clone $_smarty_tpl->tpl_vars['has_permission_an_import'];?>
<?php }?>
<?php }} ?>
