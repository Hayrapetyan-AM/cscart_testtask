<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:06:53
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/help_center/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704c4d828026_27679736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f91741ffcadd7735241d4e4b46c040fe715bdedf' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/help_center/hooks/index/scripts.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67704c4d828026_27679736 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/help_center/help_center_background.js"),$_smarty_tpl);?>

<?php }
}
}
