<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:07:26
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/product_variations/hooks/products/update_product_min_qty.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704c6ec50e80_44345273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd656ac683521bd83d9130b68015099f0b588467d' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/product_variations/hooks/products/update_product_min_qty.override.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67704c6ec50e80_44345273 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("min_qty")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
