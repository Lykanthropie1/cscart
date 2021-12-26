<?php /* Smarty version Smarty-3.1.21, created on 2021-12-23 13:01:15
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\blocks\our_brands.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107520423261c448eb2cd966-63449034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8b3f32066ade9137e52b7846ccecf7bda2fb842' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\blocks\\our_brands.tpl',
      1 => 1639659146,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '107520423261c448eb2cd966-63449034',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'item_quantity' => 0,
    'obj_prefix' => 0,
    'item_quantity_desktop' => 0,
    'item_quantity_desktop_small' => 0,
    'item_quantity_tablet' => 0,
    'item_quantity_mobile' => 0,
    'brands' => 0,
    'brand' => 0,
    'object_img' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c448eb405ff5_27409163',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c448eb405ff5_27409163')) {function content_61c448eb405ff5_27409163($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.include_ext.php';
if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['obj_prefix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000", null, 0);?>
<?php $_smarty_tpl->tpl_vars['item_quantity'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity'])===null||$tmp==='' ? 5 : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['item_quantity_desktop'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value, null, 0);?>
<?php $_smarty_tpl->tpl_vars['item_quantity_mobile'] = new Smarty_variable(1, null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['item_quantity']->value>3) {?>
    <?php $_smarty_tpl->tpl_vars['item_quantity_desktop_small'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value-1, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['item_quantity_tablet'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value-2, null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['item_quantity']->value===1) {?>
    <?php $_smarty_tpl->tpl_vars['item_quantity_desktop_small'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['item_quantity_tablet'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['item_quantity_desktop_small'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value-1, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['item_quantity_tablet'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value-1, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation']=="Y") {?>
    <div class="owl-theme ty-owl-controls">
        <div class="owl-controls clickable owl-controls-outside" id="owl_outside_nav_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="owl-buttons">
                <div id="owl_prev_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-prev"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-left-open-thin"),$_smarty_tpl);?>
</div>
                <div id="owl_next_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-next"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-right-open-thin"),$_smarty_tpl);?>
</div>
            </div>
        </div>
    </div>
<?php }?>

<div id="scroll_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="owl-carousel ty-scroller"
    data-ca-scroller-item="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-desktop="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity_desktop']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-desktop-small="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity_desktop_small']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-tablet="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity_tablet']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-mobile="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity_mobile']->value, ENT_QUOTES, 'UTF-8');?>
"
>
    <?php  $_smarty_tpl->tpl_vars["brand"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["brand"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["brand"]->key => $_smarty_tpl->tpl_vars["brand"]->value) {
$_smarty_tpl->tpl_vars["brand"]->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars["object_img"] = new Smarty_variable($_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>"ty-grayscale",'image_width'=>$_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width'],'images'=>$_smarty_tpl->tpl_vars['brand']->value['image_pair'],'no_ids'=>true,'lazy_load'=>true,'obj_id'=>"scr_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000".((string)$_smarty_tpl->tpl_vars['brand']->value['variant_id'])), 0));?>

            <div class="ty-center ty-scroller__item">
                <a href="<?php echo htmlspecialchars(fn_url("product_features.view?variant_id=".((string)$_smarty_tpl->tpl_vars['brand']->value['variant_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['object_img']->value;?>
</a>
            </div>
    <?php } ?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['brands']->value,'prev_selector'=>"#owl_prev_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'next_selector'=>"#owl_next_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/our_brands.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/our_brands.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['obj_prefix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000", null, 0);?>
<?php $_smarty_tpl->tpl_vars['item_quantity'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity'])===null||$tmp==='' ? 5 : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['item_quantity_desktop'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value, null, 0);?>
<?php $_smarty_tpl->tpl_vars['item_quantity_mobile'] = new Smarty_variable(1, null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['item_quantity']->value>3) {?>
    <?php $_smarty_tpl->tpl_vars['item_quantity_desktop_small'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value-1, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['item_quantity_tablet'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value-2, null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['item_quantity']->value===1) {?>
    <?php $_smarty_tpl->tpl_vars['item_quantity_desktop_small'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['item_quantity_tablet'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['item_quantity_desktop_small'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value-1, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['item_quantity_tablet'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value-1, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation']=="Y") {?>
    <div class="owl-theme ty-owl-controls">
        <div class="owl-controls clickable owl-controls-outside" id="owl_outside_nav_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="owl-buttons">
                <div id="owl_prev_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-prev"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-left-open-thin"),$_smarty_tpl);?>
</div>
                <div id="owl_next_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-next"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-right-open-thin"),$_smarty_tpl);?>
</div>
            </div>
        </div>
    </div>
<?php }?>

<div id="scroll_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="owl-carousel ty-scroller"
    data-ca-scroller-item="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-desktop="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity_desktop']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-desktop-small="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity_desktop_small']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-tablet="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity_tablet']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-mobile="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_quantity_mobile']->value, ENT_QUOTES, 'UTF-8');?>
"
>
    <?php  $_smarty_tpl->tpl_vars["brand"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["brand"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["brand"]->key => $_smarty_tpl->tpl_vars["brand"]->value) {
$_smarty_tpl->tpl_vars["brand"]->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars["object_img"] = new Smarty_variable($_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>"ty-grayscale",'image_width'=>$_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width'],'images'=>$_smarty_tpl->tpl_vars['brand']->value['image_pair'],'no_ids'=>true,'lazy_load'=>true,'obj_id'=>"scr_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000".((string)$_smarty_tpl->tpl_vars['brand']->value['variant_id'])), 0));?>

            <div class="ty-center ty-scroller__item">
                <a href="<?php echo htmlspecialchars(fn_url("product_features.view?variant_id=".((string)$_smarty_tpl->tpl_vars['brand']->value['variant_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['object_img']->value;?>
</a>
            </div>
    <?php } ?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['brands']->value,'prev_selector'=>"#owl_prev_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'next_selector'=>"#owl_next_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)), 0);?>

<?php }?><?php }} ?>
