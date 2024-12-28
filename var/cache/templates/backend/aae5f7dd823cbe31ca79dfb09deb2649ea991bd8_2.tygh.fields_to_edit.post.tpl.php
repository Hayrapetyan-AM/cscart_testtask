<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:09:00
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704ccc6f8129_88306811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aae5f7dd823cbe31ca79dfb09deb2649ea991bd8' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67704ccc6f8129_88306811 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('discussion_title_category'));
?>
<label for="discussion_type" class="checkbox">
<input type="checkbox" value="discussion_type" id="discussion_type" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
<?php echo $_smarty_tpl->__("discussion_title_category");?>
</label>
<?php }
}
