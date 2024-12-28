<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:06:52
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/help_center/hooks/menu/top_bar_right.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704c4cdb2165_85139556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c59462be117e69218894d0fa4e3488eda4ec874' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/help_center/hooks/menu/top_bar_right.pre.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/help_center/component/help_center_popup.tpl' => 1,
  ),
),false)) {
function content_67704c4cdb2165_85139556 (Smarty_Internal_Template $_smarty_tpl) {
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <div class="top-bar__btn-wrapper dropdown dropdown-top-menu-item cm-dropdown-skip-processing help-center-menu">
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/help_center/component/help_center_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
<?php }
}
}
