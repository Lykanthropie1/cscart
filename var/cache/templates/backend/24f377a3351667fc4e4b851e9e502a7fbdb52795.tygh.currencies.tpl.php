<?php /* Smarty version Smarty-3.1.21, created on 2021-12-23 20:19:25
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\storefronts\components\currencies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120834278961c4af9d2ce795-74150616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24f377a3351667fc4e4b851e9e502a7fbdb52795' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\storefronts\\components\\currencies.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '120834278961c4af9d2ce795-74150616',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'is_localization_picker_allowed' => 0,
    'all_currency_ids' => 0,
    'all_currencies' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c4af9d31e2e3_07804764',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c4af9d31e2e3_07804764')) {function content_61c4af9d31e2e3_07804764($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('currencies'));
?>


<div class="control-group">
    <label for="currencies_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    >
        <?php echo $_smarty_tpl->__("currencies");?>

    </label>
    <div class="controls" id="currencies_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['is_localization_picker_allowed']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/adaptive_object_selection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"storefront_data[currencies]",'input_id'=>"storefront_currrency",'item_ids'=>$_smarty_tpl->tpl_vars['all_currency_ids']->value,'items'=>$_smarty_tpl->tpl_vars['all_currencies']->value,'id_field'=>"currency_id",'name_field'=>"description",'storefront_id'=>$_smarty_tpl->tpl_vars['id']->value,'type'=>"currencies",'load_items_url'=>"currencies.selector?storefront_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'class_prefix'=>"localization",'close_on_select'=>"false"), 0);?>

        <?php } else { ?>
            <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['text'], ENT_QUOTES, 'UTF-8');?>
</p>
            <?php } ?>
        <?php }?>
    </div>
</div>
<?php }} ?>
