<?php /* Smarty version Smarty-3.1.21, created on 2022-01-13 12:15:23
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\discussion\views\discussion_manager\components\post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59900763261dfedab70f9f8-38482760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd91471b0ed3f31950ca4992409bdd58867538887' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\discussion\\views\\discussion_manager\\components\\post.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '59900763261dfedab70f9f8-38482760',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'post' => 0,
    'type' => 0,
    'd_url' => 0,
    'current_redirect_url' => 0,
    'settings' => 0,
    'allow_save' => 0,
    'show_object_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61dfedab8e5b21_22446417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61dfedab8e5b21_22446417')) {function content_61dfedab8e5b21_22446417($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('approved','disapprove','not_approved','approve','approved','not_approved','delete','ip_address'));
?>
<?php $_smarty_tpl->tpl_vars["current_redirect_url"] = new Smarty_variable(rawurlencode(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"selected_section=discussion")), null, 0);?>
<div class="summary">
    <input type="text" name="posts[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
][name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
" size="40" class="input-hidden">

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"discussion:update_post")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"discussion:update_post"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if ($_smarty_tpl->tpl_vars['type']->value=="C"||$_smarty_tpl->tpl_vars['type']->value=="B") {?>
            <textarea name="posts[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
][message]" cols="80" rows="5" class="input-hidden"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['message'], ENT_QUOTES, 'UTF-8');?>
</textarea>
        <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"discussion:update_post"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<div class="tools">
    <div class="pull-left">
        <?php if (fn_check_view_permissions("discussion.m_delete")) {?>
            <?php $_smarty_tpl->tpl_vars["d_url"] = new Smarty_variable(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"selected_section=discussion")), null, 0);?>
            <input type="hidden" name="d_redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d_url']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <input type="checkbox" name="delete_posts[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
]" id="delete_checkbox_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
"  class="pull-left cm-item" value="Y">
        <?php }?>
        <div class="pull-left post__statuses cm-statuses">
            <?php if (fn_check_view_permissions("discussion.update")) {?>
                <span class="cm-status-a <?php if ($_smarty_tpl->tpl_vars['post']->value['status']=="D") {?>hidden<?php }?>">
                    <span class="label label-success"><?php echo $_smarty_tpl->__("approved");?>
</span>
                    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'id'=>"premoderation_disapprove",'title'=>$_smarty_tpl->__("disapprove"),'icon'=>"icon-thumbs-down",'icon_first'=>true,'class'=>"btn post__btn-status-switch cm-status-switch",'data'=>array("data-ca-status"=>"D","data-ca-post-id"=>$_smarty_tpl->tpl_vars['post']->value['post_id'])));?>

                </span>
                <span class="cm-status-d <?php if ($_smarty_tpl->tpl_vars['post']->value['status']=="A") {?>hidden<?php }?>">
                    <span class="label label-important"><?php echo $_smarty_tpl->__("not_approved");?>
</span>
                    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'id'=>"premoderation_disapprove",'title'=>$_smarty_tpl->__("approve"),'icon'=>"icon-thumbs-up",'icon_first'=>true,'class'=>"btn post__btn-status-switch cm-status-switch",'data'=>array("data-ca-status"=>"A","data-ca-post-id"=>$_smarty_tpl->tpl_vars['post']->value['post_id'])));?>

                </span>
            <?php } else { ?>
                <span class="cm-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['post']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
                    <?php if ($_smarty_tpl->tpl_vars['post']->value['status']=="A") {?>
                        <span class="label label-success"><?php echo $_smarty_tpl->__("approved");?>
</span>
                    <?php } else { ?>
                        <span class="label label-important"><?php echo $_smarty_tpl->__("not_approved");?>
</span>
                    <?php }?>
                </span>
            <?php }?>
            <?php if (fn_check_view_permissions("discussion.delete")) {?>
                <?php ob_start();
echo $_smarty_tpl->__("delete");
$_tmp4=ob_get_clean();?><?php ob_start();
echo htmlspecialchars(fn_url("discussion.delete?post_id=".((string)$_smarty_tpl->tpl_vars['post']->value['post_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['current_redirect_url']->value)), ENT_QUOTES, 'UTF-8');
$_tmp5=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'icon'=>"icon-trash",'title'=>$_tmp4,'class'=>"btn post__btn-delete cm-confirm",'method'=>"POST",'href'=>$_tmp5));?>

            <?php }?>
        </div>
    </div>


    <div class="pull-right">
        <span class="muted">
            <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"elm_date_holder_".((string)$_smarty_tpl->tpl_vars['post']->value['post_id']),'date_name'=>"posts[".((string)$_smarty_tpl->tpl_vars['post']->value['post_id'])."][date]",'date_val'=>(($tmp = @$_smarty_tpl->tpl_vars['post']->value['timestamp'])===null||$tmp==='' ? (defined('TIME') ? constant('TIME') : null) : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'date_meta'=>"post-date",'show_time'=>true,'time_name'=>"posts[".((string)$_smarty_tpl->tpl_vars['post']->value['post_id'])."][time]",'meta_class'=>"review-date"), 0);?>

            /
            <?php echo $_smarty_tpl->__("ip_address");?>
:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['ip_address'], ENT_QUOTES, 'UTF-8');?>

        </span>

        <?php if (($_smarty_tpl->tpl_vars['type']->value=="R"||$_smarty_tpl->tpl_vars['type']->value=="B")&&$_smarty_tpl->tpl_vars['post']->value['rating_value']>0) {?>
            <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/rate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rate_id'=>"rating_".((string)$_smarty_tpl->tpl_vars['post']->value['post_id']),'rate_value'=>$_smarty_tpl->tpl_vars['post']->value['rating_value'],'rate_name'=>"posts[".((string)$_smarty_tpl->tpl_vars['post']->value['post_id'])."][rating_value]"), 0);?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stars'=>$_smarty_tpl->tpl_vars['post']->value['rating_value']), 0);?>

            <?php }?>
        <?php }?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['show_object_link']->value) {?>
        <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['post']->value['object_data']['url']), ENT_QUOTES, 'UTF-8');?>
" class="post-object" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['object_data']['description'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['object_data']['description'], ENT_QUOTES, 'UTF-8');?>
</a>
    <?php }?>
</div>
<?php }} ?>
