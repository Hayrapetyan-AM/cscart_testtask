<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:06:52
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/views/products/components/search_filters/products_filter_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704c4c6c23e8_53089795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6047340da7ee7a9b565e206cd1c122fadd5e9a4' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/views/products/components/search_filters/products_filter_items.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/products/components/advanced_search_form.tpl' => 1,
  ),
),false)) {
function content_67704c4c6c23e8_53089795 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['filter_items']->value) {?>
    <div class="group form-horizontal">
        <div class="control-group">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/advanced_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_features'=>$_smarty_tpl->tpl_vars['filter_items']->value,'prefix'=>((string)$_smarty_tpl->tpl_vars['form_id']->value)."_filter_",'data_name'=>"filter_variants"), 0, false);
?>
        </div>
    </div>
<?php }
}
}