<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:07:27
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/product_bundles/hooks/product_picker/table_header.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704c6fb079c4_56426324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0919d27f124f2a9b28b54c6bb71e8e67bb4cc17b' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/product_bundles/hooks/product_picker/table_header.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67704c6fb079c4_56426324 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('price','discount','value','discounted_price','product_bundles.show_on_product_page'));
if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] === "product_bundles" || $_smarty_tpl->tpl_vars['extra_mode']->value === "product_bundles") {?>
    <th><?php echo $_smarty_tpl->__("price");?>
</th>
    <th><?php echo $_smarty_tpl->__("discount");?>
</th>
    <th><?php echo $_smarty_tpl->__("value");?>
</th>
    <th><?php echo $_smarty_tpl->__("discounted_price");?>
</th>
    <th><?php echo $_smarty_tpl->__("product_bundles.show_on_product_page");?>
</th>
<?php }
}
}
