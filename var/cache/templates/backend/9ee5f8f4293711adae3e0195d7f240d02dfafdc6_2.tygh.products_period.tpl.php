<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:06:52
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/views/products/components/search_filters/products_period.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704c4c66f002_72153935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ee5f8f4293711adae3e0195d7f240d02dfafdc6' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/views/products/components/search_filters/products_period.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/period_selector.tpl' => 1,
  ),
),false)) {
function content_67704c4c66f002_72153935 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="search-filters__period-selector">
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('period'=>$_smarty_tpl->tpl_vars['search']->value['period'],'form_name'=>((string)$_smarty_tpl->tpl_vars['form_id']->value)."search_form",'nowrap'=>false,'form_inline'=>false,'show_divider'=>false,'is_block'=>true,'full_width'=>true), 0, false);
?>
</div><?php }
}
