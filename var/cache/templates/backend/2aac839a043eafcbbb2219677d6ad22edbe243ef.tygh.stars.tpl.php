<?php /* Smarty version Smarty-3.1.21, created on 2022-01-13 12:15:23
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\discussion\views\discussion_manager\components\stars.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204761137361dfedabc52334-01432949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2aac839a043eafcbbb2219677d6ad22edbe243ef' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\discussion\\views\\discussion_manager\\components\\stars.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '204761137361dfedabc52334-01432949',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stars' => 0,
    'icon_star' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61dfedabd27ef3_07335045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61dfedabd27ef3_07335045')) {function content_61dfedabd27ef3_07335045($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.include_ext.php';
?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['name'] = "stars_rate";
$_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['start'] = (int) "1";
$_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['loop'] = is_array($_loop="6") ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["stars_rate"]['total']);
?>
    <?php $_smarty_tpl->tpl_vars['icon_star'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['section']['stars_rate']['index']>$_smarty_tpl->tpl_vars['stars']->value ? "icon-star-empty" : "icon-star", null, 0);?>
    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['icon_star']->value),$_smarty_tpl);?>

<?php endfor; endif; ?>
<?php }} ?>
