<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:09:00
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/views/categories/components/context_menu/edit_selected.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704ccc2fc4b8_89808074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e5f3043931827771fb52adec0b4d0f114394275' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/views/categories/components/context_menu/edit_selected.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67704ccc2fc4b8_89808074 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('edit_selected'));
?>

<li class="btn bulk-edit__btn bulk-edit__btn--edit-categories mobile-hide">
    <span class="bulk-edit__btn-content bulk-edit__btn-content--no-padding">
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"dialog",'class'=>"cm-process-items bulk-edit__link",'text'=>$_smarty_tpl->__("edit_selected"),'target_id'=>"content_select_fields_to_edit",'form'=>"category_tree_form",'data'=>array("data-ca-bulkedit-disable-save-button"=>true)), true);?>

    </span>
</li>
<?php }
}
