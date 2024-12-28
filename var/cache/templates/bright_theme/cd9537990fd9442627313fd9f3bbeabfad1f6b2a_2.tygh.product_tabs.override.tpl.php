<?php
/* Smarty version 4.3.0, created on 2024-12-28 10:58:17
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/themes/bright_theme/templates/addons/product_second_description/hooks/products/product_tabs.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704a492143d5_81760263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd9537990fd9442627313fd9f3bbeabfad1f6b2a' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/themes/bright_theme/templates/addons/product_second_description/hooks/products/product_tabs.post.tpl',
      1 => 1735412295,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/tabs/components/product_tabs.tpl' => 2,
  ),
),false)) {
function content_67704a492143d5_81760263 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_subTemplateRender("tygh:views/tabs/components/product_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['properties']['wrapper']) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['properties']['wrapper'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox_content'),'title'=>$_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['description']), 0, true);
} else { ?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox_content');?>

<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_second_description/hooks/products/product_tabs.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_second_description/hooks/products/product_tabs.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_subTemplateRender("tygh:views/tabs/components/product_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php if ($_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['properties']['wrapper']) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['properties']['wrapper'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox_content'),'title'=>$_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['description']), 0, true);
} else { ?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox_content');?>

<?php }
}
}
}
