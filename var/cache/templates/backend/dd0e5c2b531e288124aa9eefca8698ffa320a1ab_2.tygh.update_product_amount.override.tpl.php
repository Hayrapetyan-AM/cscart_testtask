<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:07:26
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/product_variations/hooks/products/update_product_amount.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704c6ec171e8_84355408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd0e5c2b531e288124aa9eefca8698ffa320a1ab' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/product_variations/hooks/products/update_product_amount.override.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67704c6ec171e8_84355408 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("amount")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
