<?php /* Smarty version Smarty-3.1.21, created on 2022-01-13 14:13:55
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\views\departments\info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35812295461e009737d69f3-69081418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f65f4d73d3722d465c03c854066c22a611eef29c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\views\\departments\\info.tpl',
      1 => 1641554720,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '35812295461e009737d69f3-69081418',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'department_data' => 0,
    'settings' => 0,
    'config' => 0,
    'search' => 0,
    'workers' => 0,
    'c_url' => 0,
    'rev' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'allow_save' => 0,
    'no_hide_input' => 0,
    'worker' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e009739fa1b2_95431202',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e009739fa1b2_95431202')) {function content_61e009739fa1b2_95431202($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.include_ext.php';
if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('workers','first_name_and_last_name','email','first_name_and_last_name','email','no_data','workers','first_name_and_last_name','email','first_name_and_last_name','email','no_data'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div id="product_features_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
    <div class="ty-feature">

        <?php if ($_smarty_tpl->tpl_vars['department_data']->value['main_pair']) {?>
            <div class="ty-feature__image">
                <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_ids'=>true,'images'=>$_smarty_tpl->tpl_vars['department_data']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'],'lazy_load'=>true), 0);?>

            </div>
        <?php }?>

            <div class="ty-feature__description ty-wysiwyg-content">
                <?php echo $_smarty_tpl->tpl_vars['department_data']->value['description'];?>

            </div>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>"pagination_contents_department"), 0);?>

    <?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev']),'assign'=>'c_icon'),$_smarty_tpl);?>

    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-dummy",'assign'=>'c_dummy'),$_smarty_tpl);?>

    <?php $_smarty_tpl->tpl_vars['rev'] = new Smarty_variable((($tmp = @$_REQUEST['content_id'])===null||$tmp==='' ? "pagination_contents" : $tmp), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['workers']->value) {?>
        <div class="ty-container">

            <h2><?php echo $_smarty_tpl->__("workers");?>
:</h2>

            <table class="table table-middle table--relative table-responsive">
                <thead>
                <tr>
                    <th>
                        <a class="cm-ajax"
                           href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=name&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
                           data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("first_name_and_last_name");?>

                            <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="name") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?>
                        </a>
                    </th>
                    <th>
                        <a class="cm-ajax"
                           href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=email&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
                           data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("email");?>

                            <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="email") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?>
                        </a>
                    </th>
                </tr>
                </thead>
                <?php  $_smarty_tpl->tpl_vars['worker'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['worker']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['workers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['worker']->key => $_smarty_tpl->tpl_vars['worker']->value) {
$_smarty_tpl->tpl_vars['worker']->_loop = true;
?>
                    <tr>
                        <?php $_smarty_tpl->tpl_vars['allow_save'] = new Smarty_variable(true, null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                            <?php $_smarty_tpl->tpl_vars["no_hide_input"] = new Smarty_variable("cm-no-hide-input", null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars["no_hide_input"] = new Smarty_variable('', null, 0);?>
                        <?php }?>
                        <td class="ty-categories-picker__title"
                            style="width: 6%"
                            class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
"
                            data-th="<?php echo $_smarty_tpl->__("first_name_and_last_name");?>
">
                            <p class="row-status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['worker']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['worker']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
</p>
                        </td>
                        <td class="ty-categories-picker__title" style="width: 6%" data-th="<?php echo $_smarty_tpl->__("email");?>
">
                            <a class="row-status" href="mailto:<?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['worker']->value['email']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['worker']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"pagination_contents_department"), 0);?>

    <!--product_features_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo $_smarty_tpl->tpl_vars['department_data']->value['department'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/departments/info.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/departments/info.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div id="product_features_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
    <div class="ty-feature">

        <?php if ($_smarty_tpl->tpl_vars['department_data']->value['main_pair']) {?>
            <div class="ty-feature__image">
                <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_ids'=>true,'images'=>$_smarty_tpl->tpl_vars['department_data']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'],'lazy_load'=>true), 0);?>

            </div>
        <?php }?>

            <div class="ty-feature__description ty-wysiwyg-content">
                <?php echo $_smarty_tpl->tpl_vars['department_data']->value['description'];?>

            </div>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>"pagination_contents_department"), 0);?>

    <?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev']),'assign'=>'c_icon'),$_smarty_tpl);?>

    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-dummy",'assign'=>'c_dummy'),$_smarty_tpl);?>

    <?php $_smarty_tpl->tpl_vars['rev'] = new Smarty_variable((($tmp = @$_REQUEST['content_id'])===null||$tmp==='' ? "pagination_contents" : $tmp), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['workers']->value) {?>
        <div class="ty-container">

            <h2><?php echo $_smarty_tpl->__("workers");?>
:</h2>

            <table class="table table-middle table--relative table-responsive">
                <thead>
                <tr>
                    <th>
                        <a class="cm-ajax"
                           href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=name&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
                           data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("first_name_and_last_name");?>

                            <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="name") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?>
                        </a>
                    </th>
                    <th>
                        <a class="cm-ajax"
                           href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=email&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
                           data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("email");?>

                            <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="email") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?>
                        </a>
                    </th>
                </tr>
                </thead>
                <?php  $_smarty_tpl->tpl_vars['worker'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['worker']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['workers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['worker']->key => $_smarty_tpl->tpl_vars['worker']->value) {
$_smarty_tpl->tpl_vars['worker']->_loop = true;
?>
                    <tr>
                        <?php $_smarty_tpl->tpl_vars['allow_save'] = new Smarty_variable(true, null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                            <?php $_smarty_tpl->tpl_vars["no_hide_input"] = new Smarty_variable("cm-no-hide-input", null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars["no_hide_input"] = new Smarty_variable('', null, 0);?>
                        <?php }?>
                        <td class="ty-categories-picker__title"
                            style="width: 6%"
                            class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
"
                            data-th="<?php echo $_smarty_tpl->__("first_name_and_last_name");?>
">
                            <p class="row-status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['worker']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['worker']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
</p>
                        </td>
                        <td class="ty-categories-picker__title" style="width: 6%" data-th="<?php echo $_smarty_tpl->__("email");?>
">
                            <a class="row-status" href="mailto:<?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['worker']->value['email']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['worker']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"pagination_contents_department"), 0);?>

    <!--product_features_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo $_smarty_tpl->tpl_vars['department_data']->value['department'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?><?php }} ?>
