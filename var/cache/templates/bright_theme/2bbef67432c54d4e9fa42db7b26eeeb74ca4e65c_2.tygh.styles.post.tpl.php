<?php
/* Smarty version 4.3.0, created on 2024-12-28 10:54:11
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/themes/responsive/templates/addons/image_zoom/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_677049535800a6_54579303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bbef67432c54d4e9fa42db7b26eeeb74ca4e65c' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/themes/responsive/templates/addons/image_zoom/hooks/index/styles.post.tpl',
      1 => 1735386000,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_677049535800a6_54579303 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),1=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><style>
    :root {
        --image-zoom-animation-time: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_animation_time'], ENT_QUOTES, 'UTF-8');?>
ms;
    }
</style>
<?php echo smarty_function_style(array('src'=>"addons/image_zoom/lib/easyzoom.css"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/image_zoom/styles.less"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/image_zoom/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/image_zoom/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><style>
    :root {
        --image-zoom-animation-time: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_animation_time'], ENT_QUOTES, 'UTF-8');?>
ms;
    }
</style>
<?php echo smarty_function_style(array('src'=>"addons/image_zoom/lib/easyzoom.css"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/image_zoom/styles.less"),$_smarty_tpl);?>

<?php }
}
}