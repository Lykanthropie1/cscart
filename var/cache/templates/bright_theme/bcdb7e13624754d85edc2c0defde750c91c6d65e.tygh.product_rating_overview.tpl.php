<?php /* Smarty version Smarty-3.1.21, created on 2022-01-11 13:29:20
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\addons\product_reviews\views\product_reviews\components\product_rating_overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70071261661dd5c00a4b0d6-74606929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcdb7e13624754d85edc2c0defde750c91c6d65e' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\product_rating_overview.tpl',
      1 => 1639659192,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '70071261661dd5c00a4b0d6-74606929',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'total_product_reviews' => 0,
    'out_of_five' => 0,
    'average_rating' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61dd5c00ad7627_43718705',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61dd5c00ad7627_43718705')) {function content_61dd5c00ad7627_43718705($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.out_of_five','product_reviews.out_of_five'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
    <?php $_smarty_tpl->tpl_vars['out_of_five'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['out_of_five']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>

    <section class="ty-product-review-product-rating-overview">

        <div class="ty-product-review-product-rating-overview__primary">

            <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rating'=>$_smarty_tpl->tpl_vars['average_rating']->value,'size'=>"xlarge"), 0);?>


            <?php if ($_smarty_tpl->tpl_vars['average_rating']->value) {?>
                <div class="ty-product-review-product-rating-overview__rating">
                    <strong class="ty-product-review-product-rating-overview__rating-current">
                        <?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['average_rating']->value,1), ENT_QUOTES, 'UTF-8');?>

                    </strong>
                    <?php if ($_smarty_tpl->tpl_vars['out_of_five']->value) {?>
                        <span class="ty-product-review-product-rating-overview__rating-out-of-five">
                            <?php echo $_smarty_tpl->__("product_reviews.out_of_five");?>

                        </span>
                    <?php }?>
                </div>
            <?php }?>

        </div>

        <div class="ty-product-review-product-rating-overview__secondary">

            <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/product_reviews_total_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value,'secondary'=>true), 0);?>


        </div>
    </section>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/product_rating_overview.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/product_rating_overview.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
    <?php $_smarty_tpl->tpl_vars['out_of_five'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['out_of_five']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>

    <section class="ty-product-review-product-rating-overview">

        <div class="ty-product-review-product-rating-overview__primary">

            <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rating'=>$_smarty_tpl->tpl_vars['average_rating']->value,'size'=>"xlarge"), 0);?>


            <?php if ($_smarty_tpl->tpl_vars['average_rating']->value) {?>
                <div class="ty-product-review-product-rating-overview__rating">
                    <strong class="ty-product-review-product-rating-overview__rating-current">
                        <?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['average_rating']->value,1), ENT_QUOTES, 'UTF-8');?>

                    </strong>
                    <?php if ($_smarty_tpl->tpl_vars['out_of_five']->value) {?>
                        <span class="ty-product-review-product-rating-overview__rating-out-of-five">
                            <?php echo $_smarty_tpl->__("product_reviews.out_of_five");?>

                        </span>
                    <?php }?>
                </div>
            <?php }?>

        </div>

        <div class="ty-product-review-product-rating-overview__secondary">

            <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/product_reviews_total_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value,'secondary'=>true), 0);?>


        </div>
    </section>
<?php }?>
<?php }?><?php }} ?>
