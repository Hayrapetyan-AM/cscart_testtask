<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:07:30
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/views/block_manager/components/device_availability_attributes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704c72936c07_60108015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d354622bcc1d648f31f731efb4408cb874c5d12' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/views/block_manager/components/device_availability_attributes.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67704c72936c07_60108015 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('devices', (($tmp = $_smarty_tpl->tpl_vars['item']->value['availability'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['devices']->value, 'is_available', false, 'device');
$_smarty_tpl->tpl_vars['is_available']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['device']->value => $_smarty_tpl->tpl_vars['is_available']->value) {
$_smarty_tpl->tpl_vars['is_available']->do_else = false;
?>
    data-ca-device-availability-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['device']->value, ENT_QUOTES, 'UTF-8');?>
="<?php if ($_smarty_tpl->tpl_vars['is_available']->value) {?>true<?php } else { ?>false<?php }?>"
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
