<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:06:51
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/product_variations/hooks/products/product_additional_info.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704c4b5712a9_36883341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5680fb4697bc3847b18373f7e44cc6453bad4bb' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/product_variations/hooks/products/product_additional_info.pre.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_variations/views/product_variations/components/variation_features.tpl' => 1,
  ),
),false)) {
function content_67704c4b5712a9_36883341 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['variation_features']) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variation_features'=>$_smarty_tpl->tpl_vars['product']->value['variation_features'],'features_split'=>true,'features_inline'=>true,'features_mini'=>true), 0, false);
}
}
}
