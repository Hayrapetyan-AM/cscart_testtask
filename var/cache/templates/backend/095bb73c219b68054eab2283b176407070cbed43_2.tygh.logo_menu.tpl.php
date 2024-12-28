<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:06:52
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/components/menu/logo_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704c4cd3ba19_91001806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '095bb73c219b68054eab2283b176407070cbed43' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/components/menu/logo_menu.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67704c4cd3ba19_91001806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('admin.go_to_the_homepage'));
$_smarty_tpl->_assignInScope('logo_path_light', "cart_logo.svg");
$_smarty_tpl->_assignInScope('logo_path_dark', "cart_logo_white.svg");?><a href="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) " ", ENT_QUOTES, 'UTF-8');?>
class="top-bar__btn top-bar__btn--not-hover mobile-hidden" <?php echo htmlspecialchars((string) " ", ENT_QUOTES, 'UTF-8');?>
title="<?php echo $_smarty_tpl->__("admin.go_to_the_homepage");?>
" <?php echo htmlspecialchars((string) " ", ENT_QUOTES, 'UTF-8');?>
><span class="top-bar__btn-inner logo-menu__btn-inner"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"menu:logo_menu"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"menu:logo_menu"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['backoffice_color_scheme']->value === smarty_modifier_enum("BackofficeColorSchemeVariants::DARK")) {?><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['logo_path_dark']->value, ENT_QUOTES, 'UTF-8');?>
" border="0" alt="" class="logo-menu__logo logo-menu__logo--cscart"/><?php } elseif ($_smarty_tpl->tpl_vars['backoffice_color_scheme']->value === smarty_modifier_enum("BackofficeColorSchemeVariants::SYSTEM")) {?><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['logo_path_light']->value, ENT_QUOTES, 'UTF-8');?>
" border="0" alt="" class="logo-menu__logo logo-menu__logo--cscart logo-menu__logo--light"/><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['logo_path_dark']->value, ENT_QUOTES, 'UTF-8');?>
" border="0" alt="" class="logo-menu__logo logo-menu__logo--cscart logo-menu__logo--dark"/><?php } else { ?><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['logo_path_light']->value, ENT_QUOTES, 'UTF-8');?>
" border="0" alt="" class="logo-menu__logo logo-menu__logo--cscart"/><?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"menu:logo_menu"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></span></a><?php }
}