<?php /* Smarty version Smarty-3.1.21, created on 2021-12-24 20:33:14
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\categories\components\context_menu\edit_selected.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143457254061c6045a5418f0-40156377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22f50be6ea0c72a94c22f5016b55859c3c209d15' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\categories\\components\\context_menu\\edit_selected.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '143457254061c6045a5418f0-40156377',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c6045a565903_66723813',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c6045a565903_66723813')) {function content_61c6045a565903_66723813($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('edit_selected'));
?>


<li class="btn bulk-edit__btn bulk-edit__btn--edit-categories mobile-hide">
    <span class="bulk-edit__btn-content">
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'class'=>"cm-process-items",'text'=>$_smarty_tpl->__("edit_selected"),'target_id'=>"content_select_fields_to_edit",'form'=>"category_tree_form",'data'=>array("data-ca-bulkedit-disable-save-button"=>true)));?>

    </span>
</li>
<?php }} ?>
