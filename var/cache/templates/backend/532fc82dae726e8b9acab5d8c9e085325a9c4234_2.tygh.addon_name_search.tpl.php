<?php
/* Smarty version 4.3.0, created on 2024-12-28 12:12:08
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/views/addons/components/manage/addon_name_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67705b982561a8_48095998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '532fc82dae726e8b9acab5d8c9e085325a9c4234' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/views/addons/components/manage/addon_name_search.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67705b982561a8_48095998 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_field','remove','addons.search_description'));
?>
<div class="sidebar-row addons-addon-name-search">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="addons_search_form" method="get" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
 form--no-margin">
        <div class="controls">
            <input type="text"
                name="q"
                id="elm_addon"
                value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
"
                autofocus
                class="input-full input--no-margin"
                placeholder="<?php echo $_smarty_tpl->__("admin_search_field");?>
"
            />
            <button type="button" class="hidden addons-addon-name-search__remove" id="elm_addon_clear" title="<?php echo $_smarty_tpl->__("remove");?>
">
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon icon-remove"),$_smarty_tpl);?>

            </button>
        </div>
    </form>
    <div class="muted description">
        <?php echo $_smarty_tpl->__("addons.search_description");?>

    </div>
</div>
<?php }
}
