<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 22:13:19
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\usergroups\components\privileges_section.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180560093661c8becf7ed7d1-32693597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb8e4d664cf91b9f80c30df8b514b1b70c0aa4b4' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\usergroups\\components\\privileges_section.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '180560093661c8becf7ed7d1-32693597',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'section_id' => 0,
    'section' => 0,
    'named_groups_exists' => 0,
    'usergroup_id' => 0,
    'group_id' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c8becf862dc2_12564923',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c8becf862dc2_12564923')) {function content_61c8becf862dc2_12564923($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\modifier.count.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('privilege_sections.'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("privilege_sections.".((string)$_smarty_tpl->tpl_vars['section_id']->value)),'target'=>"#".((string)$_smarty_tpl->tpl_vars['section_id']->value)."_contents"), 0);?>

<div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section_id']->value, ENT_QUOTES, 'UTF-8');?>
_contents" class="collapse in collapse-visible">
    <?php $_smarty_tpl->tpl_vars['named_groups_exists'] = new Smarty_variable(smarty_modifier_count($_smarty_tpl->tpl_vars['section']->value)&&key($_smarty_tpl->tpl_vars['section']->value)!=='', null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['named_groups_exists']->value) {?>
        <div class="control-group">
            <div class="controls">
                <?php echo $_smarty_tpl->getSubTemplate ("views/usergroups/components/privileges_access_level_controls.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section_id'=>$_smarty_tpl->tpl_vars['section_id']->value,'group_id'=>'section_global','usergroup_id'=>$_smarty_tpl->tpl_vars['usergroup_id']->value,'disable_custom_access_level_control'=>true,'hide_controls'=>true), 0);?>

            </div>
        </div>
    <?php }?>
    <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['group_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['section']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['group_id']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/usergroups/components/privileges_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('usergroup_id'=>$_smarty_tpl->tpl_vars['usergroup_id']->value,'section_id'=>$_smarty_tpl->tpl_vars['section_id']->value,'group_id'=>$_smarty_tpl->tpl_vars['group_id']->value,'group'=>$_smarty_tpl->tpl_vars['group']->value), 0);?>

    <?php } ?>
</div>
<?php }} ?>
