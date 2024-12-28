<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:07:26
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/product_variations/hooks/products/update_product_max_qty.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704c6ec67430_90374285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '759c299ee5d8873047dd90dcacb0bdbbe2bc0ad7' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/product_variations/hooks/products/update_product_max_qty.override.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67704c6ec67430_90374285 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("max_qty")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
