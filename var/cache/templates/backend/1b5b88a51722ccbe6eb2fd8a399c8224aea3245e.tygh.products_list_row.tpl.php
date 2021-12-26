<?php /* Smarty version Smarty-3.1.21, created on 2021-12-23 20:17:46
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\products\components\products_list_row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153452328361c4af3a59dfc9-27488698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b5b88a51722ccbe6eb2fd8a399c8224aea3245e' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\products\\components\\products_list_row.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '153452328361c4af3a59dfc9-27488698',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hide_amount' => 0,
    'checkbox_name' => 0,
    'row_index' => 0,
    'show_radio' => 0,
    'product' => 0,
    'hide_options' => 0,
    'show_aoc' => 0,
    'additional_class' => 0,
    'show_price' => 0,
    'default_product_amount' => 0,
    'is_order_management' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c4af3a681183_11489616',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c4af3a681183_11489616')) {function content_61c4af3a681183_11489616($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_include_ext')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.include_ext.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_name','price','add_product'));
?>
<?php $_smarty_tpl->tpl_vars['hide_amount'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['hide_amount']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['checkbox_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['checkbox_name']->value)===null||$tmp==='' ? "add_products_ids" : $tmp), null, 0);?>

<tr id="picker_product_row_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row_index']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_list:table_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_list:table_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['hide_amount']->value) {?>
        <td class="center" width="1%" data-th=""><input type="<?php if ($_smarty_tpl->tpl_vars['show_radio']->value) {?>radio<?php } else { ?>checkbox<?php }?>" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checkbox_name']->value, ENT_QUOTES, 'UTF-8');?>
[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item mrg-check" id="checkbox_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" /></td>
    <?php }?>
        <td data-th="<?php echo $_smarty_tpl->__("product_name");?>
">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_list:product_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_list:product_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <input type="hidden" id="product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
" />

            <?php if ($_smarty_tpl->tpl_vars['hide_amount']->value) {?>
                <label for="checkbox_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</label>
            <?php } else { ?>
                <div><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</div>
            <?php }?>
                <div class="product-list__labels">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_additional_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_additional_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if ($_smarty_tpl->tpl_vars['product']->value['product_code']) {?>
                        <div class="product-code">
                            <span class="product-code__label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                    <?php }?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_additional_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['product']->value,'show_hidden_input'=>true), 0);?>

                </div>


            <?php if (!$_smarty_tpl->tpl_vars['hide_options']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/select_product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'name'=>"product_data",'show_aoc'=>$_smarty_tpl->tpl_vars['show_aoc']->value,'additional_class'=>$_smarty_tpl->tpl_vars['additional_class']->value), 0);?>

            <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_list:product_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </td>
    <?php if ($_smarty_tpl->tpl_vars['show_price']->value) {?>
        <td class="cm-picker-product-options right" data-th="<?php echo $_smarty_tpl->__("price");?>
"><?php if (!floatval($_smarty_tpl->tpl_vars['product']->value['price'])&&$_smarty_tpl->tpl_vars['product']->value['zero_price_action']=="A") {?><input class="input-medium" id="product_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" type="text" size="3" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][price]" value="" /><?php } else {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['price']), 0);
}?></td>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['hide_amount']->value) {?>
        <td class="center nowrap cm-value-changer" width="5%">
            <div class="input-prepend input-append">
                <a class="btn no-underline strong increase-font cm-decrease"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-minus"),$_smarty_tpl);?>
</a>
                <input id="product_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" type="text" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['default_product_amount']->value)===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][amount]" size="3" class="input-micro cm-amount"<?php if ($_smarty_tpl->tpl_vars['product']->value['qty_step']>1) {?> data-ca-step="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['qty_step'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> />
                <a class="btn no-underline strong increase-font cm-increase"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-plus"),$_smarty_tpl);?>
</a>
            </div>
        </td>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['is_order_management']->value) {?>
        <td class="center nowrap" width="5%">
            <div>
                <a class="btn cm-process-items cm-submit cm-ajax cm-add-product" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("add_product");?>
" data-ca-dispatch="dispatch[order_management.add]" data-ca-check-filter="#picker_product_row_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-form="add_products"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-share-alt",'data'=>array("data-ca-check-filter"=>"#picker_product_row_".((string)$_smarty_tpl->tpl_vars['i']->value))),$_smarty_tpl);?>
</a>
            </div>
        </td>
    <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_list:table_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_list:table_columns")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_list:table_columns"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_list:table_columns"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<!--picker_product_row_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row_index']->value, ENT_QUOTES, 'UTF-8');?>
--></tr>
<?php }} ?>
