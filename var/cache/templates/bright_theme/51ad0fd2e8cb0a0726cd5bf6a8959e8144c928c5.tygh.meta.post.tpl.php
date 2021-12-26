<?php /* Smarty version Smarty-3.1.21, created on 2021-12-23 13:00:56
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\addons\seo\hooks\index\meta.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72937837661c448d81ee181-90437183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51ad0fd2e8cb0a0726cd5bf6a8959e8144c928c5' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\seo\\hooks\\index\\meta.post.tpl',
      1 => 1639659181,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '72937837661c448d81ee181-90437183',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'seo_canonical' => 0,
    'seo_alt_hreflangs_list' => 0,
    'seo_alt_lang' => 0,
    'seo_alt_lang_code' => 0,
    'schema_org_markup_items' => 0,
    'markup_item' => 0,
    'pretty_print' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c448d82d7467_10180878',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c448d82d7467_10180878')) {function content_61c448d82d7467_10180878($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!fn_seo_is_indexed_page($_REQUEST)) {?>
    <meta name="robots" content="noindex" />
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['current']) {?>
        <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['current'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['prev']) {?>
        <link rel="prev" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['prev'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['next']) {?>
        <link rel="next" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['next'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['seo_alt_lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['seo_alt_lang']->_loop = false;
 $_smarty_tpl->tpl_vars['seo_alt_lang_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['seo_alt_hreflangs_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['seo_alt_lang']->key => $_smarty_tpl->tpl_vars['seo_alt_lang']->value) {
$_smarty_tpl->tpl_vars['seo_alt_lang']->_loop = true;
 $_smarty_tpl->tpl_vars['seo_alt_lang_code']->value = $_smarty_tpl->tpl_vars['seo_alt_lang']->key;
?>
    <link title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['name'], ENT_QUOTES, 'UTF-8');?>
" dir="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['direction'], ENT_QUOTES, 'UTF-8');?>
" type="text/html" rel="alternate" hreflang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang_code']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['href'], ENT_QUOTES, 'UTF-8');?>
" />
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['markup_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['markup_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['schema_org_markup_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['markup_item']->key => $_smarty_tpl->tpl_vars['markup_item']->value) {
$_smarty_tpl->tpl_vars['markup_item']->_loop = true;
?>
    <?php echo '<script'; ?>
 type="application/ld+json">
        <?php $_smarty_tpl->tpl_vars['pretty_print'] = new Smarty_variable(0, null, 0);?>
        <?php if (defined("DEVELOPMENT")&&(defined('DEVELOPMENT') ? constant('DEVELOPMENT') : null)) {?>
            <?php $_smarty_tpl->tpl_vars['pretty_print'] = new Smarty_variable(constant("JSON_PRETTY_PRINT"), null, 0);?>
        <?php }?>
        <?php echo json_encode($_smarty_tpl->tpl_vars['markup_item']->value,$_smarty_tpl->tpl_vars['pretty_print']->value);?>

    <?php echo '</script'; ?>
>
    <?php $_smarty_tpl->tpl_vars['is_json_schema_org_markup_displayed'] = new Smarty_variable(true, null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['is_json_schema_org_markup_displayed'] = clone $_smarty_tpl->tpl_vars['is_json_schema_org_markup_displayed']; $_ptr = $_ptr->parent; }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/seo/hooks/index/meta.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/seo/hooks/index/meta.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!fn_seo_is_indexed_page($_REQUEST)) {?>
    <meta name="robots" content="noindex" />
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['current']) {?>
        <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['current'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['prev']) {?>
        <link rel="prev" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['prev'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['next']) {?>
        <link rel="next" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['next'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['seo_alt_lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['seo_alt_lang']->_loop = false;
 $_smarty_tpl->tpl_vars['seo_alt_lang_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['seo_alt_hreflangs_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['seo_alt_lang']->key => $_smarty_tpl->tpl_vars['seo_alt_lang']->value) {
$_smarty_tpl->tpl_vars['seo_alt_lang']->_loop = true;
 $_smarty_tpl->tpl_vars['seo_alt_lang_code']->value = $_smarty_tpl->tpl_vars['seo_alt_lang']->key;
?>
    <link title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['name'], ENT_QUOTES, 'UTF-8');?>
" dir="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['direction'], ENT_QUOTES, 'UTF-8');?>
" type="text/html" rel="alternate" hreflang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang_code']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['href'], ENT_QUOTES, 'UTF-8');?>
" />
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['markup_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['markup_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['schema_org_markup_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['markup_item']->key => $_smarty_tpl->tpl_vars['markup_item']->value) {
$_smarty_tpl->tpl_vars['markup_item']->_loop = true;
?>
    <?php echo '<script'; ?>
 type="application/ld+json">
        <?php $_smarty_tpl->tpl_vars['pretty_print'] = new Smarty_variable(0, null, 0);?>
        <?php if (defined("DEVELOPMENT")&&(defined('DEVELOPMENT') ? constant('DEVELOPMENT') : null)) {?>
            <?php $_smarty_tpl->tpl_vars['pretty_print'] = new Smarty_variable(constant("JSON_PRETTY_PRINT"), null, 0);?>
        <?php }?>
        <?php echo json_encode($_smarty_tpl->tpl_vars['markup_item']->value,$_smarty_tpl->tpl_vars['pretty_print']->value);?>

    <?php echo '</script'; ?>
>
    <?php $_smarty_tpl->tpl_vars['is_json_schema_org_markup_displayed'] = new Smarty_variable(true, null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['is_json_schema_org_markup_displayed'] = clone $_smarty_tpl->tpl_vars['is_json_schema_org_markup_displayed']; $_ptr = $_ptr->parent; }?>
<?php }
}?><?php }} ?>
