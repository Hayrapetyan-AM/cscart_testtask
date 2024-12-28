<?php
/* Smarty version 4.3.0, created on 2024-12-28 10:54:13
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/views/block_manager/frontend_render/container.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_677049556f69b0_21220964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f51f97c27f2258a418bbdfeb6bb2834d66744a2b' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/views/block_manager/frontend_render/container.tpl',
      1 => 1728377975,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_677049556f69b0_21220964 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width'] != "fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
"
    data-ca-block-manager-container-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container']->value['container_id'], ENT_QUOTES, 'UTF-8');?>
"
>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:views/block_manager/frontend_render/container.tpl" id="<?php echo smarty_function_set_id(array('name'=>"backend:views/block_manager/frontend_render/container.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width'] != "fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
"
    data-ca-block-manager-container-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container']->value['container_id'], ENT_QUOTES, 'UTF-8');?>
"
>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div><?php }
}
}
