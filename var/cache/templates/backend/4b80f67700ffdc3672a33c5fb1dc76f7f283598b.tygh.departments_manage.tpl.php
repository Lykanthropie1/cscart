<?php /* Smarty version Smarty-3.1.21, created on 2021-12-28 17:26:12
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\profiles\departments_manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105291261c965173c0d11-29885197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b80f67700ffdc3672a33c5fb1dc76f7f283598b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\profiles\\departments_manage.tpl',
      1 => 1640701492,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '105291261c965173c0d11-29885197',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c96518176399_63483954',
  'variables' => 
  array (
    'config' => 0,
    'search' => 0,
    'departments' => 0,
    'c_url' => 0,
    'rev' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'department' => 0,
    'allow_save' => 0,
    'no_hide_input' => 0,
    'settings' => 0,
    'collection' => 0,
    'has_permission' => 0,
    'collections' => 0,
    'page_title' => 0,
    'select_languages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c96518176399_63483954')) {function content_61c96518176399_63483954($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.include_ext.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\modifier.date_format.php';
if (!is_callable('smarty_block_hook')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('position','name','creation_date','status','name','creation_date','edit','delete','status','no_data'));
?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" id="departments_form" name="departments_form" enctype="multipart/form-data">
        <input type="hidden" name="fake" value="1" />
        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>"pagination_contents_departments"), 0);?>


        <?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>

        <?php $_smarty_tpl->tpl_vars['rev'] = new Smarty_variable((($tmp = @$_REQUEST['content_id'])===null||$tmp==='' ? "pagination_contents_departments" : $tmp), null, 0);?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev']),'assign'=>'c_icon'),$_smarty_tpl);?>

        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-dummy",'assign'=>'c_dummy'),$_smarty_tpl);?>

        <?php $_smarty_tpl->tpl_vars['collection_statuses'] = new Smarty_variable(fn_get_default_statuses('',true), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['has_permission'] = new Smarty_variable(fn_check_permissions("departments","update_status","admin","POST"), null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['departments']->value) {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("departments_table", null, null); ob_start(); ?>
                <div class="table-responsive-wrapper longtap-selection">
                    <table class="table table-middle table--relative table-responsive">
                        <thead>
                        <tr>
                            <th width="6%" class="left mobile-hide">
                                <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                            </th>
                            <th>
                                <a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=position&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("position");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="position") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a>
                            </th>
                            <th>
                                <a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=name&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("name");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="name") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a>
                            </th>
                            <th width="15%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=timestamp&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("creation_date");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="timestamp") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                            <th width="6%" class="mobile-hide">&nbsp;</th>
                            <th width="10%" class="right"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("status");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="status") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                        </tr>
                        </thead>
                        <?php  $_smarty_tpl->tpl_vars['department'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['department']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['departments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['department']->key => $_smarty_tpl->tpl_vars['department']->value) {
$_smarty_tpl->tpl_vars['department']->_loop = true;
?>
                            <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['department']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target">
                                <?php $_smarty_tpl->tpl_vars['allow_save'] = new Smarty_variable(true, null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                                    <?php $_smarty_tpl->tpl_vars["no_hide_input"] = new Smarty_variable("cm-no-hide-input", null, 0);?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->tpl_vars["no_hide_input"] = new Smarty_variable('', null, 0);?>
                                <?php }?>

                                <td width="6%" class="left mobile-hide">
                                    <input type="checkbox" name="department_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['department']->value['department_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
 cm-item-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['department']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
" />
                                </td>

                                <td>
                                    <input type="text" name="departments_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['department']->value['department_id'], ENT_QUOTES, 'UTF-8');?>
][position]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['department']->value['position'], ENT_QUOTES, 'UTF-8');?>
" size="3" class="input-micro input-hidden">
                                </td>

                                <td class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
" data-th="<?php echo $_smarty_tpl->__("name");?>
">
                                    <a class="row-status" href="<?php echo htmlspecialchars(fn_url("profiles.update_department?collection_id=".((string)$_smarty_tpl->tpl_vars['department']->value['department_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['department']->value['department'], ENT_QUOTES, 'UTF-8');?>
</a>
                                    <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['department']->value), 0);?>

                                </td>
                                <td width="15%" data-th="<?php echo $_smarty_tpl->__("creation_date");?>
">
                                    <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['department']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>

                                </td>
                                <td width="6%" class="mobile-hide">
                                    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                                        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"profiles.update_department?department_id=".((string)$_smarty_tpl->tpl_vars['collection']->value['collection_id'])));?>
</li>
                                        <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                                            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>$_smarty_tpl->__("delete"),'href'=>"profiles.delete_department?department_id=".((string)$_smarty_tpl->tpl_vars['department']->value['department_id']),'method'=>"POST"));?>
</li>
                                        <?php }?>
                                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                    <div class="hidden-tools">
                                        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                                    </div>
                                </td>
                                <td width="10%" class="right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                                    <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['department']->value['department_id'],'status'=>$_smarty_tpl->tpl_vars['department']->value['status'],'hidden'=>true,'object_id_name'=>"department_id",'table'=>"departments",'popup_additional_class'=>((string)$_smarty_tpl->tpl_vars['no_hide_input']->value)." dropleft"), 0);?>

                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('form'=>"departments_form",'object'=>"departments",'items'=>Smarty::$_smarty_vars['capture']['departments_table'],'has_permissions'=>$_smarty_tpl->tpl_vars['has_permission']->value), 0);?>

        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"pagination_contents_departments"), 0);?>


        <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                <?php if ($_smarty_tpl->tpl_vars['collections']->value) {?>
                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[profiles.delete_departments]",'form'=>"departments_form"));?>
</li>
                <?php }?>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[profiles.update_departments]",'but_role'=>"action",'but_target_form'=>"departments_form",'but_meta'=>"cm-submit"), 0);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"departments:adv_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"departments:adv_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"profiles.add_department",'prefix'=>"top",'hide_tools'=>"true",'title'=>"Добавить отдел",'icon'=>"icon-plus"), 0);?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"departments:adv_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

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



<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"collections:manage_mainbox_params")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"collections:manage_mainbox_params"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->tpl_vars['page_title'] = new Smarty_variable("Отделы", null, 0);?>
<?php $_smarty_tpl->tpl_vars['select_languages'] = new Smarty_variable(true, null, 0);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"collections:manage_mainbox_params"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['page_title']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_languages'=>$_smarty_tpl->tpl_vars['select_languages']->value), 0);?>


<?php }} ?>
