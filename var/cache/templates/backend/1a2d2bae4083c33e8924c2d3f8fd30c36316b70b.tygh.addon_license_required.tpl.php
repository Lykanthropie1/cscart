<?php /* Smarty version Smarty-3.1.21, created on 2021-12-23 13:02:26
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\addons\components\addons\addon_license_required.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40199036361c449328accf5-15974206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a2d2bae4083c33e8924c2d3f8fd30c36316b70b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\addons\\components\\addons\\addon_license_required.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '40199036361c449328accf5-15974206',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c4493290baa1_94745674',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c4493290baa1_94745674')) {function content_61c4493290baa1_94745674($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('mve_ultimate_or_plus_license_required','mve_ultimate_license_required','ultimate_license_required'));
?>
<?php if (fn_allowed_for("MULTIVENDOR")&&fn_check_addon_snapshot($_smarty_tpl->tpl_vars['key']->value,"plus")) {?>
    <?php $_smarty_tpl->tpl_vars['license_required'] = new Smarty_variable(array('promo_popup_title'=>$_smarty_tpl->__("mve_ultimate_or_plus_license_required",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))),'href'=>fn_url("functionality_restrictions.mve_ultimate_or_plus_license_required"),'target_id'=>"content_mve_ultimate_or_plus_license_required"), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['license_required'] = clone $_smarty_tpl->tpl_vars['license_required'];?>
<?php } elseif (fn_allowed_for("MULTIVENDOR")) {?>
    <?php $_smarty_tpl->tpl_vars['license_required'] = new Smarty_variable(array('promo_popup_title'=>$_smarty_tpl->__("mve_ultimate_license_required",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))),'href'=>fn_url("functionality_restrictions.mve_ultimate_license_required"),'target_id'=>"content_mve_ultimate_license_required"), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['license_required'] = clone $_smarty_tpl->tpl_vars['license_required'];?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['license_required'] = new Smarty_variable(array('promo_popup_title'=>$_smarty_tpl->__("ultimate_license_required",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))),'href'=>fn_url("functionality_restrictions.ultimate_license_required"),'target_id'=>"content_ultimate_license_required"), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['license_required'] = clone $_smarty_tpl->tpl_vars['license_required'];?>
<?php }?>
<?php }} ?>
