<?php /* Smarty version Smarty-3.1.21, created on 2022-01-11 13:29:20
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\addons\product_reviews\views\product_reviews\components\post_votes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132399870161dd5c00553183-22254310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b1cce7d0d454206c20bbb4c3c47ba2011edb9be' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\post_votes.tpl',
      1 => 1639659192,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '132399870161dd5c00553183-22254310',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_review' => 0,
    'product_review_id' => 0,
    'config' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61dd5c00632ec2_79847569',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61dd5c00632ec2_79847569')) {function content_61dd5c00632ec2_79847569($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.vote_up','product_reviews.vote_down','product_reviews.vote_up','product_reviews.vote_down'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['product_review']->value) {?>
    <div class="ty-product-review-post-votes" id="product_review-post_votes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>$_smarty_tpl->tpl_vars['product_review_id']->value,'but_href'=>"product_reviews.vote.up?product_review_id=".((string)$_smarty_tpl->tpl_vars['product_review_id']->value)."&return_url=".((string)rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url'])),'but_text'=>$_smarty_tpl->tpl_vars['product_review']->value['helpfulness']['vote_up'],'but_title'=>$_smarty_tpl->__("product_reviews.vote_up"),'but_role'=>"submit",'but_target_id'=>"product_review-post_votes_".((string)$_smarty_tpl->tpl_vars['product_review_id']->value),'but_meta'=>"cm-ajax ty-btn__text cm-post cm-ajax-full-render ty-product-review-post-votes__up",'but_icon'=>"ty-icon-arrow-up",'but_rel'=>"nofollow"), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>$_smarty_tpl->tpl_vars['product_review_id']->value,'but_href'=>"product_reviews.vote.down?product_review_id=".((string)$_smarty_tpl->tpl_vars['product_review_id']->value)."&return_url=".((string)rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url'])),'but_text'=>$_smarty_tpl->tpl_vars['product_review']->value['helpfulness']['vote_down'],'but_title'=>$_smarty_tpl->__("product_reviews.vote_down"),'but_role'=>"submit",'but_target_id'=>"product_review-post_votes_".((string)$_smarty_tpl->tpl_vars['product_review_id']->value),'but_meta'=>"cm-ajax ty-btn__text cm-post cm-ajax-full-render ty-product-review-post-votes__down",'but_icon'=>"ty-icon-arrow-down",'but_rel'=>"nofollow"), 0);?>

    <!--product_review-post_votes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/post_votes.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/post_votes.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['product_review']->value) {?>
    <div class="ty-product-review-post-votes" id="product_review-post_votes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>$_smarty_tpl->tpl_vars['product_review_id']->value,'but_href'=>"product_reviews.vote.up?product_review_id=".((string)$_smarty_tpl->tpl_vars['product_review_id']->value)."&return_url=".((string)rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url'])),'but_text'=>$_smarty_tpl->tpl_vars['product_review']->value['helpfulness']['vote_up'],'but_title'=>$_smarty_tpl->__("product_reviews.vote_up"),'but_role'=>"submit",'but_target_id'=>"product_review-post_votes_".((string)$_smarty_tpl->tpl_vars['product_review_id']->value),'but_meta'=>"cm-ajax ty-btn__text cm-post cm-ajax-full-render ty-product-review-post-votes__up",'but_icon'=>"ty-icon-arrow-up",'but_rel'=>"nofollow"), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>$_smarty_tpl->tpl_vars['product_review_id']->value,'but_href'=>"product_reviews.vote.down?product_review_id=".((string)$_smarty_tpl->tpl_vars['product_review_id']->value)."&return_url=".((string)rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url'])),'but_text'=>$_smarty_tpl->tpl_vars['product_review']->value['helpfulness']['vote_down'],'but_title'=>$_smarty_tpl->__("product_reviews.vote_down"),'but_role'=>"submit",'but_target_id'=>"product_review-post_votes_".((string)$_smarty_tpl->tpl_vars['product_review_id']->value),'but_meta'=>"cm-ajax ty-btn__text cm-post cm-ajax-full-render ty-product-review-post-votes__down",'but_icon'=>"ty-icon-arrow-down",'but_rel'=>"nofollow"), 0);?>

    <!--product_review-post_votes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?>
<?php }?><?php }} ?>
