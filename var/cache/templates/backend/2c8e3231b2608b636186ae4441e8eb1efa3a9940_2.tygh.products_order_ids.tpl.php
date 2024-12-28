<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:06:52
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/views/products/components/search_filters/products_order_ids.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704c4c6e5176_96331436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c8e3231b2608b636186ae4441e8eb1efa3a9940' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/views/products/components/search_filters/products_order_ids.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:pickers/orders/picker.tpl' => 1,
  ),
),false)) {
function content_67704c4c6e5176_96331436 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('no_items'));
$_smarty_tpl->_subTemplateRender("tygh:pickers/orders/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item_ids'=>$_smarty_tpl->tpl_vars['search']->value['order_ids'],'no_item_text'=>$_smarty_tpl->__("no_items"),'data_id'=>"order_ids",'input_name'=>"order_ids",'view_mode'=>"simple"), 0, false);
}
}
