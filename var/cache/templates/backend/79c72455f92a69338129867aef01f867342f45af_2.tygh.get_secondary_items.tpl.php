<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:06:53
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/components/menu/get_secondary_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704c4d507255_06794056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79c72455f92a69338129867aef01f867342f45af' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/components/menu/get_secondary_items.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67704c4d507255_06794056 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "get_items", null, null);?>
        <?php if ((defined('BLOCK_MANAGER_MODE') ? constant('BLOCK_MANAGER_MODE') : null)) {?>
        <?php $_smarty_tpl->_assignInScope('items', array());?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('items', $_smarty_tpl->tpl_vars['navigation']->value['static']['secondary']);?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('secondary_items', $_smarty_tpl->tpl_vars['items']->value ,false ,2);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
