<?php /* Smarty version Smarty-3.1.21, created on 2021-12-22 23:50:39
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\common\icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121877757061c38f9f960aa3-85430899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b4e4073872bd5c1b08e9a77c816fc9437d984d0' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\common\\icon.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '121877757061c38f9f960aa3-85430899',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class' => 0,
    'id' => 0,
    'title' => 0,
    'data' => 0,
    'data_value' => 0,
    'data_name' => 0,
    'icon_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c38f9f991533_72349928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c38f9f991533_72349928')) {function content_61c38f9f991533_72349928($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['class']->value) {?><span 
        class="cs-icon <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
            id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
            <?php  $_smarty_tpl->tpl_vars['data_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data_value']->_loop = false;
 $_smarty_tpl->tpl_vars['data_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data_value']->key => $_smarty_tpl->tpl_vars['data_value']->value) {
$_smarty_tpl->tpl_vars['data_value']->_loop = true;
 $_smarty_tpl->tpl_vars['data_name']->value = $_smarty_tpl->tpl_vars['data_value']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['data_value']->value) {?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_value']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php }?>
            <?php } ?>
        <?php }?>
    ><?php if ($_smarty_tpl->tpl_vars['icon_text']->value) {
echo $_smarty_tpl->tpl_vars['icon_text']->value;
}?></span><?php }?><?php }} ?>
