<?php /* Smarty version Smarty-3.1.21, created on 2021-12-23 20:17:46
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\products\components\products_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47076923861c4af3a307a88-27881398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fcbb765f4ae7ab036b276cfac53925245b4a33d' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\products\\components\\products_list.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '47076923861c4af3a307a88-27881398',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'search' => 0,
    'products' => 0,
    'hide_amount' => 0,
    'show_radio' => 0,
    'c_url' => 0,
    'rev' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'show_price' => 0,
    'is_order_management' => 0,
    'row_index' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c4af3a3e99e5_62865867',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c4af3a3e99e5_62865867')) {function content_61c4af3a3e99e5_62865867($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.include_ext.php';
if (!is_callable('smarty_function_script')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_block_hook')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_block_inline_script')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_name','price','quantity','no_data'));
?>
<div id="add_product">
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"pagination_".((string)$_REQUEST['data_id'])), 0);?>


<?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['rev'] = new Smarty_variable((($tmp = @"pagination_".((string)$_REQUEST['data_id']))===null||$tmp==='' ? "pagination_contents" : $tmp), null, 0);?>

<?php $_smarty_tpl->tpl_vars['row_index'] = new Smarty_variable(1, null, 0);?>
<?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev']),'assign'=>'c_icon'),$_smarty_tpl);?>

<?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-dummy",'assign'=>'c_dummy'),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>



<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
<input type="hidden" id="add_product_id" name="product_id" value=""/>
<div class="table-responsive-wrapper">
    <table width="100%" class="table table--relative table-responsive">
    <thead>
    <tr>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_list:table_head")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_list:table_head"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if ($_smarty_tpl->tpl_vars['hide_amount']->value) {?>
            <th class="center" width="1%">
                <?php if ($_smarty_tpl->tpl_vars['show_radio']->value) {?>&nbsp;<?php } else {
echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
}?>
            </th>
        <?php }?>
        <th width="80%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=product&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("product_name");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="product") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
        <?php if ($_smarty_tpl->tpl_vars['show_price']->value) {?>
            <th class="right" width="10%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=price&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("price");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="price") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
        <?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['hide_amount']->value) {?>
            <th class="center" width="5%"><?php echo $_smarty_tpl->__("quantity");?>
</th>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['is_order_management']->value) {?>
            <th class="center" width="5%"></th>
        <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_list:table_head"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </tr>
    </thead>
    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/products_list_row.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('row_index'=>$_smarty_tpl->tpl_vars['row_index']->value++,'hide_amount'=>$_smarty_tpl->tpl_vars['hide_amount']->value), 0);?>

    <?php } ?>
    </table>
</div>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function(_, $) {
    function _switchAOC(id, disable, $row)
    {
        var aoc = $row.find('#sw_option_' + id + '_AOC');
        if (aoc.length) {
            aoc.addClass('cm-skip-avail-switch');
            aoc.prop('disabled', disable);
            disable = aoc.prop('checked') ? true : disable;
        }

        $row.find('.cm-picker-product-options').switchAvailability(disable, false);
    }

    function init(context)
    {
        if (context.find('tr[id^=picker_product_row_]').length) {
            if (!$('.cm-add-product').length) {
                context.find('.cm-picker-product-options').switchAvailability(true, false);
            } else {
                context.find('.cm-picker-product-options').switchAvailability(false, false);
            }
        }
    }

    $(document).ready(function() {
        init($(_.doc));

        $.ceEvent('on', 'ce.commoninit', function(context) {
            init(context);
        });

        $(_.doc).on('click', '.cm-increase,.cm-decrease', function() {
            var inp = $('input', $(this).closest('.cm-value-changer'));
            var new_val = parseInt(inp.val()) + ($(this).is('a.cm-increase') ? 1 : -1);
            var disable = new_val > 0 ? false : true;
            var _id = inp.prop('id').replace('product_id_', '');

            _switchAOC(_id, disable, $(this).closest('tr'));
        });

        $.ceEvent('on', 'ce.formajaxpost_add_products', function(response, params) {
            if ($('.cm-add-product').length && response.current_url) {
                var url = response.current_url;

                $.ceAjax('request', url, {
                    method: 'get',
                    result_ids: 'button_trash_products,om_ajax_update_totals,om_ajax_update_payment,om_ajax_update_shipping',
                    full_render: true
                });
            }
        });

        $(_.doc).on('click', '.cm-add-product', function() {
            if ($(this).prop('id')) {
                var _id = $(this).prop('id');
                $('#add_product_id').val(_id);
            }
        });

        $(_.doc).on('change', '.cm-amount', function() {
            var new_val = parseInt($(this).val());
            var disable = new_val > 0 ? false : true;
            var _id = $(this).prop('id').replace('product_id_', '');

            _switchAOC(_id, disable, $(this).closest('tr'));
        });

        $(_.doc).on('click', '.cm-item', function() {
            var disable = (this.checked) ? false : true;
            var _id = $(this).prop('id').replace('checkbox_id_', '');

            _switchAOC(_id, disable, $(this).closest('tr'));
        });

        $(_.doc).on('click', '.cm-check-items', function() {
            var form = $(this).parents('form:first');
            var _checked = this.checked;
            $('.cm-item', form).each(function () {
                if (_checked && !this.checked || !_checked && this.checked) {
                    $(this).click();
                }
            });
        });
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"pagination_".((string)$_REQUEST['data_id'])), 0);?>

<?php }} ?>
