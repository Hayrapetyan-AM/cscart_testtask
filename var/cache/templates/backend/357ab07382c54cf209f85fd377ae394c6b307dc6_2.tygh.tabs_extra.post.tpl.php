<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:07:27
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/discussion/hooks/products/tabs_extra.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704c6fe04fa2_89229957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '357ab07382c54cf209f85fd377ae394c6b307dc6' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/discussion/hooks/products/tabs_extra.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl' => 1,
  ),
),false)) {
function content_67704c6fe04fa2_89229957 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || fn_allowed_for("MULTIVENDOR")) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_company_id'=>$_smarty_tpl->tpl_vars['product_data']->value['company_id']), 0, false);
}
}
}
