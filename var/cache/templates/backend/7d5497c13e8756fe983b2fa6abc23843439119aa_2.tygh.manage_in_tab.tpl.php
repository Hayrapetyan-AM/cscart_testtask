<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:07:31
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/views/tabs/manage_in_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704c730478a4_42178813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d5497c13e8756fe983b2fa6abc23843439119aa' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/views/tabs/manage_in_tab.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/tabs/manage.tpl' => 1,
  ),
),false)) {
function content_67704c730478a4_42178813 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "product_tabs") {?>hidden<?php }?>" id="content_product_tabs">
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/tabs/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--content_product_tabs--></div>
<?php }
}
