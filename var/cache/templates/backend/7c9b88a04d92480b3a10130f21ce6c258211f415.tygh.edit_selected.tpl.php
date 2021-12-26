<?php /* Smarty version Smarty-3.1.21, created on 2021-12-24 19:11:56
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\products\components\context_menu\edit_selected.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27068396161c5f14ccdc586-26781869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c9b88a04d92480b3a10130f21ce6c258211f415' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\products\\components\\context_menu\\edit_selected.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '27068396161c5f14ccdc586-26781869',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c5f14cd17e42_64646633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c5f14cd17e42_64646633')) {function content_61c5f14cd17e42_64646633($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('edit_selected'));
?>


<li class="btn bulk-edit__btn bulk-edit__btn--edit-products mobile-hide">
    <span class="bulk-edit__btn-content">
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'class'=>"cm-process-items",'text'=>$_smarty_tpl->__("edit_selected"),'target_id'=>"content_select_fields_to_edit",'form'=>$_smarty_tpl->tpl_vars['params']->value['form']));?>

    </span>
</li>
<?php }} ?>
