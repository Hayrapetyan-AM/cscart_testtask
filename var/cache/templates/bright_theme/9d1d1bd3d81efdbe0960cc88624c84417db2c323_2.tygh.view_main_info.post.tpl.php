<?php
/* Smarty version 4.3.0, created on 2024-12-28 10:54:15
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/themes/bright_theme/templates/addons/product_second_description/hooks/products/view_main_info.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6770495781c332_11211120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d1d1bd3d81efdbe0960cc88624c84417db2c323' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/themes/bright_theme/templates/addons/product_second_description/hooks/products/view_main_info.post.tpl',
      1 => 1735408098,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6770495781c332_11211120 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product']->value['second_description']) {?>
    <div id="product_second_description" class="ty-product-block__tab-content">
        <h3>Product Second Description</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['product']->value['second_description'];?>
</p>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_second_description/hooks/products/view_main_info.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_second_description/hooks/products/view_main_info.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['second_description']) {?>
    <div id="product_second_description" class="ty-product-block__tab-content">
        <h3>Product Second Description</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['product']->value['second_description'];?>
</p>
    </div>
<?php }
}
}
}
