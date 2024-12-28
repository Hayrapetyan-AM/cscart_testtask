<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:07:26
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/product_variations/hooks/products/update_product_out_of_stock_actions.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704c6edf8db7_27267454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18de55f7a6778b2d4d77c4805d2cafafcf832f28' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/product_variations/hooks/products/update_product_out_of_stock_actions.override.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67704c6edf8db7_27267454 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("out_of_stock_actions")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
