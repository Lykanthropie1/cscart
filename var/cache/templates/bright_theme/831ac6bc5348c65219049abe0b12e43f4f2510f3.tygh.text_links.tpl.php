<?php /* Smarty version Smarty-3.1.21, created on 2021-12-23 13:01:01
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\blocks\menu\text_links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33214824961c448dd1f9ab5-88736179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '831ac6bc5348c65219049abe0b12e43f4f2510f3' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\blocks\\menu\\text_links.tpl',
      1 => 1639659146,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '33214824961c448dd1f9ab5-88736179',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'items' => 0,
    'inline' => 0,
    'submenu' => 0,
    'text_links_id' => 0,
    'menu' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c448dd30e8e4_34074464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c448dd30e8e4_34074464')) {function content_61c448dd30e8e4_34074464($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.include_ext.php';
if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['show_items_in_line']=='Y') {?>
    <?php $_smarty_tpl->tpl_vars["inline"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["text_links_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['snapping_id'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['inline']->value&&!$_smarty_tpl->tpl_vars['submenu']->value) {?>
    <div class="ty-text-links-wrapper">
        <span id="sw_text_links_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text_links_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-text-links-btn cm-combination visible-phone">
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-short-list"),$_smarty_tpl);?>

            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-micro ty-text-links-btn__arrow"),$_smarty_tpl);?>

        </span>
    <?php }?>

        <ul <?php if (!$_smarty_tpl->tpl_vars['submenu']->value) {?>id="text_links_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text_links_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-text-links<?php if ($_smarty_tpl->tpl_vars['inline']->value&&!$_smarty_tpl->tpl_vars['submenu']->value) {?> cm-popup-box ty-text-links_show_inline<?php }?>">
            <?php  $_smarty_tpl->tpl_vars["menu"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["menu"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["menu"]->key => $_smarty_tpl->tpl_vars["menu"]->value) {
$_smarty_tpl->tpl_vars["menu"]->_loop = true;
?>
                <li class="ty-text-links__item ty-level-<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['menu']->value['level'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['menu']->value['active']) {?> ty-text-links__active<?php }
if ($_smarty_tpl->tpl_vars['menu']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['class'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['inline']->value&&!$_smarty_tpl->tpl_vars['submenu']->value&&$_smarty_tpl->tpl_vars['menu']->value['subitems']) {?> ty-text-links__subitems<?php }?>">
                    <a class="ty-text-links__a"
                        <?php if ($_smarty_tpl->tpl_vars['menu']->value['href']) {?>
                            href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['menu']->value['href']), ENT_QUOTES, 'UTF-8');?>
"
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['menu']->value['new_window']) {?>
                            target="_blank"
                        <?php }?>
                    >
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['item'], ENT_QUOTES, 'UTF-8');?>

                    </a>
                    <?php if ($_smarty_tpl->tpl_vars['menu']->value['subitems']) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("blocks/menu/text_links.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['menu']->value['subitems'],'submenu'=>true), 0);?>

                    <?php }?>
                </li>
            <?php } ?>
        </ul>

    <?php if ($_smarty_tpl->tpl_vars['inline']->value&&!$_smarty_tpl->tpl_vars['submenu']->value) {?>
    </div>
    <?php }?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/menu/text_links.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/menu/text_links.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['show_items_in_line']=='Y') {?>
    <?php $_smarty_tpl->tpl_vars["inline"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["text_links_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['snapping_id'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['inline']->value&&!$_smarty_tpl->tpl_vars['submenu']->value) {?>
    <div class="ty-text-links-wrapper">
        <span id="sw_text_links_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text_links_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-text-links-btn cm-combination visible-phone">
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-short-list"),$_smarty_tpl);?>

            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-micro ty-text-links-btn__arrow"),$_smarty_tpl);?>

        </span>
    <?php }?>

        <ul <?php if (!$_smarty_tpl->tpl_vars['submenu']->value) {?>id="text_links_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text_links_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-text-links<?php if ($_smarty_tpl->tpl_vars['inline']->value&&!$_smarty_tpl->tpl_vars['submenu']->value) {?> cm-popup-box ty-text-links_show_inline<?php }?>">
            <?php  $_smarty_tpl->tpl_vars["menu"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["menu"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["menu"]->key => $_smarty_tpl->tpl_vars["menu"]->value) {
$_smarty_tpl->tpl_vars["menu"]->_loop = true;
?>
                <li class="ty-text-links__item ty-level-<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['menu']->value['level'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['menu']->value['active']) {?> ty-text-links__active<?php }
if ($_smarty_tpl->tpl_vars['menu']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['class'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['inline']->value&&!$_smarty_tpl->tpl_vars['submenu']->value&&$_smarty_tpl->tpl_vars['menu']->value['subitems']) {?> ty-text-links__subitems<?php }?>">
                    <a class="ty-text-links__a"
                        <?php if ($_smarty_tpl->tpl_vars['menu']->value['href']) {?>
                            href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['menu']->value['href']), ENT_QUOTES, 'UTF-8');?>
"
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['menu']->value['new_window']) {?>
                            target="_blank"
                        <?php }?>
                    >
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['item'], ENT_QUOTES, 'UTF-8');?>

                    </a>
                    <?php if ($_smarty_tpl->tpl_vars['menu']->value['subitems']) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("blocks/menu/text_links.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['menu']->value['subitems'],'submenu'=>true), 0);?>

                    <?php }?>
                </li>
            <?php } ?>
        </ul>

    <?php if ($_smarty_tpl->tpl_vars['inline']->value&&!$_smarty_tpl->tpl_vars['submenu']->value) {?>
    </div>
    <?php }?>
<?php }?>
<?php }?><?php }} ?>
