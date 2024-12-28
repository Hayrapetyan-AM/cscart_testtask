<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:07:26
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/product_variations/hooks/products/update_product_qty_step.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704c6ec7d210_00504880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '712d7358b3d08527ae123be411c1a0a93e364933' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/product_variations/hooks/products/update_product_qty_step.override.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67704c6ec7d210_00504880 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("qty_step")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
