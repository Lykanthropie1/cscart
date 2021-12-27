<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 22:13:19
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\usergroups\components\get_privileges.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82917255861c8becf506913-44225623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3801df33e6856d6e5d8904870bd1894cee9b08b1' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\usergroups\\components\\get_privileges.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '82917255861c8becf506913-44225623',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'show_privileges_tab' => 0,
    'grouped_privileges' => 0,
    'section_id' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c8becf530028_26409863',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c8becf530028_26409863')) {function content_61c8becf530028_26409863($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('privilege.apply_to_all'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/usergroup_privileges.js"),$_smarty_tpl);?>

<div class="usergroup-privileges-list" id="content_privileges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['show_privileges_tab']->value) {?>
        <div class="control-group">
            <div class="control-label"><?php echo $_smarty_tpl->__("privilege.apply_to_all");?>
:</div>
            <div class="controls">
                <?php echo $_smarty_tpl->getSubTemplate ("views/usergroups/components/privileges_access_level_controls.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section_id'=>'usergroup','group_id'=>'global','usergroup_id'=>$_smarty_tpl->tpl_vars['id']->value,'show_custom_access_level_control'=>false), 0);?>

            </div>
        </div>
        <hr/>
        <input type="hidden" name="usergroup_data[privileges]" value="" />
        <?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_smarty_tpl->tpl_vars['section_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['grouped_privileges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->_loop = true;
 $_smarty_tpl->tpl_vars['section_id']->value = $_smarty_tpl->tpl_vars['section']->key;
?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/usergroups/components/privileges_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('usergroup_id'=>$_smarty_tpl->tpl_vars['id']->value,'section_id'=>$_smarty_tpl->tpl_vars['section_id']->value,'section'=>$_smarty_tpl->tpl_vars['section']->value), 0);?>

        <?php } ?>
    <?php }?>
<!--content_privileges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }} ?>
