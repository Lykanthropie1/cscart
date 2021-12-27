<?php /* Smarty version Smarty-3.1.21, created on 2021-12-27 10:56:29
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\profiles\update_department.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41925648661c97058e5d336-23952212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '142876d764c175909ee93cc1c8a269570b8bf8cb' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\profiles\\update_department.tpl',
      1 => 1640591749,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '41925648661c97058e5d336-23952212',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c970590c3592_28977560',
  'variables' => 
  array (
    'department_data' => 0,
    'id' => 0,
    'settings' => 0,
    'u_info' => 0,
    'hide_first_button' => 0,
    'hide_second_button' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c970590c3592_28977560')) {function content_61c970590c3592_28977560($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('name','position_short','image','description','creation_date','director','add_director','workers','add_workers','delete'));
?>
<?php if ($_smarty_tpl->tpl_vars['department_data']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['department_data']->value['department_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit" name="departments_form" enctype="multipart/form-data">
        <input type="hidden" class="cm-no-hide-input" name="fake" value="1" />
        <input type="hidden" class="cm-no-hide-input" name="department_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

        <div id="content_general">
            <div class="control-group">
                <label for="elm_department_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
</label>
                <div class="controls">
                    <input type="text" name="department_data[department]" id="elm_department_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['department_data']->value['department'], ENT_QUOTES, 'UTF-8');?>
" size="25" class="input-large" />
                </div>
            </div>

            <div class="control-group">
                <label for="elm_department_position" class="control-label cm-required"><?php echo $_smarty_tpl->__("position_short");?>
</label>
                <div class="controls">
                    <input type="text" name="department_data[position]" id="elm_department_position" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['department_data']->value['position'], ENT_QUOTES, 'UTF-8');?>
" size="25" class="input-large" />
                </div>
            </div>

            <div class="control-group" id="department_graphic">
                <label class="control-label"><?php echo $_smarty_tpl->__("image");?>
</label>
                <div class="controls">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"department",'image_object_type'=>"department",'image_pair'=>$_smarty_tpl->tpl_vars['department_data']->value['main_pair'],'image_object_id'=>$_smarty_tpl->tpl_vars['id']->value,'no_detailed'=>true,'hide_titles'=>true), 0);?>

                </div>
            </div>

            <div class="control-group" id="department_text">
                <label class="control-label" for="elm_department_description"><?php echo $_smarty_tpl->__("description");?>
:</label>
                <div class="controls">
                    <textarea id="elm_department_description" name="department_data[description]" cols="35" rows="8" class="cm-wysiwyg input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['department_data']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="elm_department_timestamp_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("creation_date");?>
</label>
                <div class="controls">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"elm_department_timestamp_".((string)$_smarty_tpl->tpl_vars['id']->value),'date_name'=>"department_data[timestamp]",'date_val'=>(($tmp = @$_smarty_tpl->tpl_vars['department_data']->value['timestamp'])===null||$tmp==='' ? (defined('TIME') ? constant('TIME') : null) : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

                </div>
            </div>

            <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"department_data[status]",'id'=>"elm_department_status",'obj_id'=>$_smarty_tpl->tpl_vars['id']->value,'obj'=>$_smarty_tpl->tpl_vars['department_data']->value,'hidden'=>false), 0);?>


            <div class="control-group">
                <label class="control-label"><?php echo $_smarty_tpl->__("director");?>
</label>
                <div class="controls">
                    <?php echo $_smarty_tpl->getSubTemplate ("pickers/users/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("add_director"),'data_id'=>"return_users",'but_meta'=>"btn",'input_name'=>"department_data[user_id]",'item_ids'=>$_smarty_tpl->tpl_vars['department_data']->value['user_id'],'placement'=>"right",'display'=>"radio",'view_mode'=>"single_button",'user_info'=>$_smarty_tpl->tpl_vars['u_info']->value), 0);?>

                </div>
            </div>

            <div class="control-group">
                <label class="control-label"><?php echo $_smarty_tpl->__("workers");?>
</label>
                <div class="controls">
                    <?php echo $_smarty_tpl->getSubTemplate ("pickers/users/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("add_workers"),'data_id'=>"return_users",'but_meta'=>"btn",'input_name'=>"department_data[user_id]",'item_ids'=>$_smarty_tpl->tpl_vars['department_data']->value['user_id'],'placement'=>"right",'display'=>"checkbox",'view_mode'=>"single_button",'user_info'=>$_smarty_tpl->tpl_vars['u_info']->value), 0);?>

                </div>
            </div>








            <!--content_general--></div>
        <!--content_addons--></div>
        <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
        <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"profiles.delete_department?department_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'method'=>"POST"));?>
</li>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php }?>
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
            <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit-link",'but_target_form'=>"departments_form",'but_name'=>"dispatch[profiles.update_department]"), 0);?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[profiles.update_department]",'but_role'=>"submit-link",'but_target_form'=>"departments_form",'hide_first_button'=>$_smarty_tpl->tpl_vars['hide_first_button']->value,'hide_second_button'=>$_smarty_tpl->tpl_vars['hide_second_button']->value,'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

            <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    </form>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['id']->value ? $_smarty_tpl->tpl_vars['department_data']->value['department'] : ("Добавить новый отдел"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'select_languages'=>true), 0);?>
<?php }} ?>
