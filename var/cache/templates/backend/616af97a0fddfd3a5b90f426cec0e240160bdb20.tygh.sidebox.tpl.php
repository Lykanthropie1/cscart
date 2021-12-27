<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 22:07:11
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\common\sidebox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140662654061c8bd5f6d0bc8-56378598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '616af97a0fddfd3a5b90f426cec0e240160bdb20' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\common\\sidebox.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '140662654061c8bd5f6d0bc8-56378598',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c8bd5f6f3042_05851421',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c8bd5f6f3042_05851421')) {function content_61c8bd5f6f3042_05851421($_smarty_tpl) {?><?php if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="sidebar-row">
        <h6><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</h6>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? "&nbsp;" : $tmp);?>

    </div>
    <hr />
<?php }?><?php }} ?>
