<?php /* Smarty version Smarty-3.1.21, created on 2021-12-22 23:50:45
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\settings\trial_expired.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78316565261c38fa57bfde8-59192368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6f362d38ecf6ac5552b8029c0b26d725a0dba3b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\settings\\trial_expired.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '78316565261c38fa57bfde8-59192368',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show' => 0,
    'store_mode_errors' => 0,
    'message' => 0,
    'config' => 0,
    'store_mode_license' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c38fa5810365_49220250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c38fa5810365_49220250')) {function content_61c38fa5810365_49220250($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('trial_expired','text_input_license_code','please_enter_license_here','activate','text_buy_new_license','buy_license','text_money_back_guarantee'));
?>
<?php if ($_smarty_tpl->tpl_vars['show']->value) {?>
    <a id="trial" class="cm-dialog-opener cm-dialog-auto-size hidden cm-dialog-non-closable" data-ca-target-id="trial_dialog"></a>

    <div class="hidden trial-expired-dialog" title="<?php echo $_smarty_tpl->__("trial_expired",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>
" id="trial_dialog">
        <?php if ($_smarty_tpl->tpl_vars['store_mode_errors']->value) {?>
            <div class="alert alert-error notification-content">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php  $_smarty_tpl->tpl_vars["message"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["message"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['store_mode_errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["message"]->key => $_smarty_tpl->tpl_vars["message"]->value) {
$_smarty_tpl->tpl_vars["message"]->_loop = true;
?>
                    <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['title'], ENT_QUOTES, 'UTF-8');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['message']->value['text'];?>
<br>
                <?php } ?>
            </div>
        <?php }?>

        <form name="trial_form" id="trial_dialog_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
            <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="store_mode" value="full">
            <div class="trial-expired">
                <p><?php echo $_smarty_tpl->__("text_input_license_code",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>
</p>

                <div class="license <?php if ($_smarty_tpl->tpl_vars['store_mode_errors']->value) {?> type-error<?php }?> item">
                    <input type="text" name="license_number" class="<?php if ($_smarty_tpl->tpl_vars['store_mode_errors']->value) {?> type-error<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_mode_license']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo $_smarty_tpl->__("please_enter_license_here");?>
">
                    <input name="dispatch[settings.change_store_mode]" type="submit" value="<?php echo $_smarty_tpl->__("activate");?>
" class="btn btn-primary">
                </div>
                <div class="trial-purchase">
                    <p>
                        <?php echo $_smarty_tpl->__("text_buy_new_license");?>

                    </p>
                        <a class="btn btn-large btn-buy" target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['resources']['product_buy_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("buy_license");?>
</a>
                    <p>
                        <?php echo $_smarty_tpl->__("text_money_back_guarantee");?>

                    </p>
                </div>
            </div>
        </form>
    </div>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
        Tygh.$(document).ready(function () {
            Tygh.$('#trial').trigger('click');
        });

        Tygh.$(window).load(function () {
            Tygh.$('#trial_dialog_form').off('submit');
        });
    <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
