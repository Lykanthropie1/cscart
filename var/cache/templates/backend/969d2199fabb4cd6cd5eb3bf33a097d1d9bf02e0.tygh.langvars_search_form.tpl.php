<?php /* Smarty version Smarty-3.1.21, created on 2021-12-26 22:07:16
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\languages\components\langvars_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95920225961c8bd64b5cb29-06122997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '969d2199fabb4cd6cd5eb3bf33a097d1d9bf02e0' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\languages\\components\\langvars_search_form.tpl',
      1 => 1639041538,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '95920225961c8bd64b5cb29-06122997',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61c8bd64b86794_71098019',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c8bd64b86794_71098019')) {function content_61c8bd64b86794_71098019($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search','search_for_pattern'));
?>
<div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("search");?>
</h6>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="langvars_search_form" method="get">
        <input type="hidden" name="name" value="<?php echo htmlspecialchars($_REQUEST['name'], ENT_QUOTES, 'UTF-8');?>
"/>

        <div class="sidebar-field">
            <label><?php echo $_smarty_tpl->__("search_for_pattern");?>
</label>
            <input type="text" name="q" size="20" value="<?php echo htmlspecialchars($_REQUEST['q'], ENT_QUOTES, 'UTF-8');?>
" class="search-input-text"/>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ("buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[languages.translations]"), 0);?>

    </form>
</div><?php }} ?>
