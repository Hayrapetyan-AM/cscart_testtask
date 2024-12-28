<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:09:48
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/common/sidebox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704cfc2c7fe7_51115585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8eceefc93845864976c41803e064961f0360f37' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/common/sidebox.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67704cfc2c7fe7_51115585 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),));
if (smarty_modifier_trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="sidebar-row">
        <h6><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</h6>
        <?php echo (($tmp = $_smarty_tpl->tpl_vars['content']->value ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp);?>

    </div>
    <hr />
<?php }
}
}
