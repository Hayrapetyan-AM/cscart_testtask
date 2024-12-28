<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:07:27
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/common/tooltip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704c6f12bd13_96397667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45ba7fa0b00af1bfee07e18ead1cb3416a22ebfc' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/common/tooltip.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67704c6f12bd13_96397667 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip flex-inline link--monochrome <?php if ($_smarty_tpl->tpl_vars['position']->value === "middle") {?>vertical-align-middle<?php } else { ?>top<?php }
if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'UTF-8');
}?>" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"question_sign",'class'=>"cs-tooltip__icon"),$_smarty_tpl);?>
</a><?php }
}
}
