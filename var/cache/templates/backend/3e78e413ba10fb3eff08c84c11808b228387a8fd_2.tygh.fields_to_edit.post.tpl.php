<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:09:00
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/seo/hooks/categories/fields_to_edit.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704ccc6f10d0_38920463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e78e413ba10fb3eff08c84c11808b228387a8fd' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/seo/hooks/categories/fields_to_edit.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67704ccc6f10d0_38920463 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('seo_name'));
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || fn_allowed_for("MULTIVENDOR")) {?>
    <label class="checkbox" for="seo_name">
    	<input type="checkbox" value="seo_name" id="seo_name" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
    <?php echo $_smarty_tpl->__("seo_name");?>
</label>
<?php }
}
}
