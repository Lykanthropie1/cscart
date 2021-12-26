<?php /* Smarty version Smarty-3.1.21, created on 2021-12-23 13:00:56
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\common\styles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184374387761c448d85db4f4-79510969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00f48f6fe8b2401ce20a8ec9a32c5af88a855dd3' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\common\\styles.tpl',
      1 => 1639659148,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '184374387761c448d85db4f4-79510969',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'reflect_less' => 0,
    'language_direction' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c448d86a0a11_77598772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c448d86a0a11_77598772')) {function content_61c448d86a0a11_77598772($_smarty_tpl) {?><?php if (!is_callable('smarty_block_styles')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\block.styles.php';
if (!is_callable('smarty_block_hook')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_style')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.style.php';
if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('styles', array('use_scheme'=>true,'reflect_less'=>$_smarty_tpl->tpl_vars['reflect_less']->value)); $_block_repeat=true; echo smarty_block_styles(array('use_scheme'=>true,'reflect_less'=>$_smarty_tpl->tpl_vars['reflect_less']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:styles")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:styles"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    
    <?php echo smarty_function_style(array('src'=>"styles.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"tygh/supports.css"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"tygh/responsive.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"lib/select2/select2.min.css"),$_smarty_tpl);?>


    
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']||$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']) {?>
        <?php echo smarty_function_style(array('src'=>"tygh/design_mode.css"),$_smarty_tpl);?>

    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor']) {?>
        <?php echo smarty_function_style(array('src'=>"tygh/theme_editor.css"),$_smarty_tpl);?>

    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']) {?>
        <?php echo smarty_function_style(array('src'=>"tygh/components/block_manager.less"),$_smarty_tpl);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['language_direction']->value=="rtl") {?>
        <?php echo smarty_function_style(array('src'=>"tygh/rtl.less"),$_smarty_tpl);?>

    <?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:styles"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_styles(array('use_scheme'=>true,'reflect_less'=>$_smarty_tpl->tpl_vars['reflect_less']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/styles.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/styles.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('styles', array('use_scheme'=>true,'reflect_less'=>$_smarty_tpl->tpl_vars['reflect_less']->value)); $_block_repeat=true; echo smarty_block_styles(array('use_scheme'=>true,'reflect_less'=>$_smarty_tpl->tpl_vars['reflect_less']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:styles")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:styles"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    
    <?php echo smarty_function_style(array('src'=>"styles.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"tygh/supports.css"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"tygh/responsive.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"lib/select2/select2.min.css"),$_smarty_tpl);?>


    
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']||$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']) {?>
        <?php echo smarty_function_style(array('src'=>"tygh/design_mode.css"),$_smarty_tpl);?>

    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor']) {?>
        <?php echo smarty_function_style(array('src'=>"tygh/theme_editor.css"),$_smarty_tpl);?>

    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']) {?>
        <?php echo smarty_function_style(array('src'=>"tygh/components/block_manager.less"),$_smarty_tpl);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['language_direction']->value=="rtl") {?>
        <?php echo smarty_function_style(array('src'=>"tygh/rtl.less"),$_smarty_tpl);?>

    <?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:styles"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_styles(array('use_scheme'=>true,'reflect_less'=>$_smarty_tpl->tpl_vars['reflect_less']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
