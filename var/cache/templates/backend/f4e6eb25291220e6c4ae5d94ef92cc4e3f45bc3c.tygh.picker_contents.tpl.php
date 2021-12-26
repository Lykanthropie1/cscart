<?php /* Smarty version Smarty-3.1.21, created on 2021-12-23 20:17:43
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\pickers\products\picker_contents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82621263961c4af377eeef9-42930389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4e6eb25291220e6c4ae5d94ef92cc4e3f45bc3c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\pickers\\products\\picker_contents.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '82621263961c4af377eeef9-42930389',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'picker_selected_companies' => 0,
    'is_order_management' => 0,
    'products' => 0,
    'hide_amount' => 0,
    'show_price' => 0,
    'show_radio' => 0,
    'hide_options' => 0,
    'but_close_text' => 0,
    'but_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c4af37937956_30278551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c4af37937956_30278551')) {function content_61c4af37937956_30278551($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_items_added','options','no','yes','any_option_combinations','add_products','add_products_and_close','choose','close'));
?>
<?php if (!$_REQUEST['extra']) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function(_, $) {

    _.tr('text_items_added', '<?php echo strtr($_smarty_tpl->__("text_items_added"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
    _.tr('options', '<?php echo strtr($_smarty_tpl->__("options"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');

<?php if ($_REQUEST['display']=="options"||$_REQUEST['display']=="options_amount"||$_REQUEST['display']=="options_price") {?>
    _.tr('no', '<?php echo strtr($_smarty_tpl->__("no"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
    _.tr('yes', '<?php echo strtr($_smarty_tpl->__("yes"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
    _.tr('aoc', '<?php echo strtr($_smarty_tpl->__("any_option_combinations"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');

    function _getDescription(obj, id)
    {
        var p = {};
        var d = '';
        var aoc = $('#sw_option_' + id + '_AOC');
        var aocDescription;
        var descriptionPrefix;

        if (aoc.length && aoc.prop('checked')) {
            aocDescription = aoc.data('caAocText') ? aoc.data('caAocText') : _.tr('aoc');
        } else {
            var $container = $('#option_' + id + '_AOC');
                descriptionPrefix = $container.data('caEmptyProductDescriptionPrefix') ? '' : (_.tr('options') + ': ');

            $(':input', $container).each( function() {
                var op = this;
                var j_op = $(this);

                if (typeof(op.name) == 'string' && op.name == '') {
                    return false;
                }
                var matches = op.name.match(/\[(\d+)\]$/);
                if (matches && matches.length) {
                    var option_id = matches[1];
                    if (op.type == 'checkbox') {
                        var variant = (op.checked == false) ? _.tr('no') : _.tr('yes');
                    }
                    if (op.type == 'radio' && op.checked == true) {
                        var variant = $('#option_description_' + id + '_' + option_id + '_' + op.value).text();
                    }
                    if (op.type == 'select-one') {
                        var variant = op.options[op.selectedIndex].text;
                    }
                    if ((op.type == 'text' || op.type == 'textarea') && op.value != '') {
                        if (j_op.hasClass('cm-hint') && op.value == op.defaultValue) { //FIXME: We should not become attached to cm-hint class
                            var variant = '';
                        } else {
                            var variant = op.value;
                        }
                    }
                    if ((op.type == 'checkbox') || ((op.type == 'text' || op.type == 'textarea') && op.value != '') || (op.type == 'select-one') || (op.type == 'radio' && op.checked == true)) {
                        if (op.type == 'checkbox') {
                            p[option_id] = (op.checked == false) ? $('#unchecked_' + id + '_option_' + option_id).val() : op.value;
                        }else{
                            p[option_id] = (j_op.hasClass('cm-hint') && op.value == op.defaultValue) ? '' : op.value; //FIXME: We should not become attached to cm-hint class
                        }

                        var optionName = $('#option_description_' + id + '_' + option_id).text();

                        d += '<li><strong>' + optionName + '</strong>: <bdi>' + variant + '</bdi></li>';
                    }
                }
            });

            d = d ? '<strong>' + descriptionPrefix + '</strong><br><ul class="unstyled">' + d + '</ul>' : '';
        }
        return {
            path: p,
            desc: aocDescription ? aocDescription : d,
        };
    }
<?php }?>

    $.ceEvent('on', 'ce.formpost_add_products', function(frm, elm) {
        var products = {};
        var _display = frm.find("[name=display_type]").val();

        if ($('input.cm-item:checked', frm).length > 0) {
            $('input.cm-item:checked', frm).each( function() {
                var id = $(this).val(),
                    value = $('#product_' + id + '_alt').length ? $('#product_' + id + '_alt').val() : $('#product_' + id).val();

                if (_display == "options" || _display == "options_amount" || _display == "options_price") {

                    products[id] = {
                        option: _getDescription(frm, id),
                        value: value
                    };
                } else if(_display === 'radio') {
                    products[id] = value;
                } else {
                    products[id] = {
                        value: value
                    };
                }

                if ($('#company_id_' + id).length) {
                    products[id].companyId = $('#company_id_' + id).val();
                    products[id].companyName = $('#company_name_' + id).val();
                }
            });

            $.ceEvent('trigger', 'ce.picker_transfer_js_items', [products, frm]);
            $.cePicker('add_js_item', frm.data('caResultId'), products, 'p', {});

            $.ceNotification('show', {
                type: 'N',
                title: _.tr('notice'),
                message: _.tr('text_items_added'),
                message_state: 'I'
            });
        }

        return false;
    });

}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("views/products/components/products_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"products.picker",'picker_selected_companies'=>$_smarty_tpl->tpl_vars['picker_selected_companies']->value,'extra'=>"<input type=\"hidden\" name=\"result_ids\" value=\"pagination_".((string)$_REQUEST['data_id'])."\">",'put_request_vars'=>true,'form_meta'=>"cm-ajax",'in_popup'=>true,'is_order_management'=>$_smarty_tpl->tpl_vars['is_order_management']->value), 0);?>


<form action="<?php echo htmlspecialchars(fn_url($_REQUEST['extra']), ENT_QUOTES, 'UTF-8');?>
" method="post" name="add_products" data-ca-result-id="<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data">
<input type="hidden" name="display_type" value="<?php echo htmlspecialchars($_REQUEST['display'], ENT_QUOTES, 'UTF-8');?>
">

<?php $_smarty_tpl->tpl_vars['but_text'] = new Smarty_variable($_smarty_tpl->__("add_products"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['but_close_text'] = new Smarty_variable($_smarty_tpl->__("add_products_and_close"), null, 0);?>

<?php if ($_REQUEST['display']!="options_amount"&&$_REQUEST['display']!="options_price") {?>
    <?php $_smarty_tpl->tpl_vars['hide_amount'] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php if ($_REQUEST['display']=="options_price") {?>
    <?php $_smarty_tpl->tpl_vars['show_price'] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php if ($_REQUEST['display']=="radio") {?>
    <?php $_smarty_tpl->tpl_vars['show_radio'] = new Smarty_variable(true, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['hide_options'] = new Smarty_variable(true, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_text'] = new Smarty_variable('', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_close_text'] = new Smarty_variable($_smarty_tpl->__("choose"), null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("views/products/components/products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value,'form_name'=>"add_products",'checkbox_id'=>"add_product_checkbox",'div_id'=>"pagination_".((string)$_REQUEST['data_id']),'hide_amount'=>$_smarty_tpl->tpl_vars['hide_amount']->value,'show_price'=>$_smarty_tpl->tpl_vars['show_price']->value,'checkbox_name'=>$_REQUEST['checkbox_name'],'show_aoc'=>$_REQUEST['aoc'],'only_selectable_options'=>$_REQUEST['only_selectable_options'],'additional_class'=>"option-item",'show_radio'=>$_smarty_tpl->tpl_vars['show_radio']->value,'hide_options'=>$_smarty_tpl->tpl_vars['hide_options']->value,'is_order_management'=>$_smarty_tpl->tpl_vars['is_order_management']->value), 0);?>


<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
<div class="buttons-container">
    <?php if ($_smarty_tpl->tpl_vars['is_order_management']->value) {?>
        <a class="btn cm-dialog-closer tool-link" id="close_add_products"><?php echo $_smarty_tpl->__("close");?>
</a>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"submit",'but_text'=>$_smarty_tpl->tpl_vars['but_close_text']->value,'but_role'=>"button_main",'but_meta'=>"cm-process-items btn-primary",'but_onclick'=>"$"."('#add_product_id').val('')",'allow_href'=>true), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->tpl_vars['but_text']->value,'but_close_text'=>$_smarty_tpl->tpl_vars['but_close_text']->value,'is_js'=>fn_is_empty($_REQUEST['extra'])), 0);?>

    <?php }?>
</div>
<?php }?>
</form>
<?php }} ?>
