<?php /* Smarty version Smarty-3.1.21, created on 2021-12-23 20:19:26
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\buttons\update_for_all.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16392885961c4af9e39ba90-33713890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '838b8f1f91742b396fc776f4e001ef59486f6a80' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\buttons\\update_for_all.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16392885961c4af9e39ba90-33713890',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display' => 0,
    'absolute_position' => 0,
    'hide_element' => 0,
    'settings' => 0,
    'title_act' => 0,
    'title_dis' => 0,
    'runtime' => 0,
    'object_ids' => 0,
    'component' => 0,
    'object_id' => 0,
    'name' => 0,
    'static_position' => 0,
    'visible' => 0,
    'meta' => 0,
    'title' => 0,
    'disable_ids' => 0,
    'names' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c4af9e4ddf50_30126791',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c4af9e4ddf50_30126791')) {function content_61c4af9e4ddf50_30126791($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_to_json')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\modifier.to_json.php';
if (!is_callable('smarty_modifier_enum')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('update_for_all_hid_act','update_for_all_hid_dis','update_for_all_act','update_for_all_dis'));
?>
<?php if ($_smarty_tpl->tpl_vars['display']->value) {?>
    <?php $_smarty_tpl->tpl_vars['absolute_position'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['absolute_position']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['hide_element']->value) {?>
        <?php $_smarty_tpl->tpl_vars['title_act'] = new Smarty_variable($_smarty_tpl->__("update_for_all_hid_act"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['title_dis'] = new Smarty_variable($_smarty_tpl->__("update_for_all_hid_dis"), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['title_act'] = new Smarty_variable($_smarty_tpl->__("update_for_all_act"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['title_dis'] = new Smarty_variable($_smarty_tpl->__("update_for_all_dis"), null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Stores']['default_state_update_for_all']=='active') {?>
        <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->tpl_vars['title_act']->value, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['visible'] = new Smarty_variable("visible", null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->tpl_vars['title_dis']->value, null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>
        <?php $_smarty_tpl->tpl_vars['visible'] = new Smarty_variable("hidden", null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['object_ids']->value) {?>
        <?php $_smarty_tpl->tpl_vars['disable_ids'] = new Smarty_variable(smarty_modifier_to_json($_smarty_tpl->tpl_vars['object_ids']->value), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['component']->value)===null||$tmp==='' ? (implode($_smarty_tpl->tpl_vars['object_ids']->value,"__")) : $tmp), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['disable_ids'] = new Smarty_variable($_smarty_tpl->tpl_vars['object_id']->value, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['component']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['object_id']->value : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['object_ids'] = new Smarty_variable(array($_smarty_tpl->tpl_vars['object_id']->value), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['names'] = new Smarty_variable(array($_smarty_tpl->tpl_vars['object_id']->value=>$_smarty_tpl->tpl_vars['name']->value), null, 0);?>
    <?php }?>

    <div class="update-for-all
        <?php if ($_smarty_tpl->tpl_vars['absolute_position']->value) {?>
            update-for-all--absolute
        <?php } elseif ($_smarty_tpl->tpl_vars['static_position']->value) {?>
            update-for-all--static
        <?php }?>
    ">
        <a class="cm-update-for-all-icon
            icon-group
            update-for-all__icon
            cm-tooltip
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visible']->value, ENT_QUOTES, 'UTF-8');?>

            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            href="#"
            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-update-for-all="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['component']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-title-active="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_act']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-title-disabled="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_dis']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-disable-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['disable_ids']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['hide_element']->value) {?>data-ca-hide-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hide_element']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
        </a>
        <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['object_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['names']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['object_id']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
            <input type="hidden"
                class="cm-no-hide-input"
                id="hidden_update_all_vendors_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"
                value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['Stores']['default_state_update_for_all']==="not_active"&&!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>
                    disabled="disabled"
                <?php }?>
            />
        <?php } ?>
    </div>
<?php }?>
<?php }} ?>
