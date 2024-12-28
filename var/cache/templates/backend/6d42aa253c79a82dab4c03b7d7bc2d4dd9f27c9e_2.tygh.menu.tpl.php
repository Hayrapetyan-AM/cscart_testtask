<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:06:53
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704c4d158ab7_86132006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d42aa253c79a82dab4c03b7d7bc2d4dd9f27c9e' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/menu.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:components/menu/get_primary_items.tpl' => 1,
    'tygh:components/menu/main_menu.tpl' => 2,
    'tygh:components/menu/get_secondary_items.tpl' => 1,
    'tygh:common/quick_menu.tpl' => 1,
  ),
),false)) {
function content_67704c4d158ab7_86132006 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
?>
<div class="cs-main-menu">
    <div class="cs-main-menu__outer" id="header_navbar">
        <div class="cs-main-menu__header-mobile mobile-visible">
            <button type="button" class="btn mobile-menu-closer mobile-menu-closer-btn">
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon icon-remove overlay-navbar-open"),$_smarty_tpl);?>

            </button>
        </div>
        <div class="cs-main-menu__inner">
            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:components/menu/get_primary_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navigation'=>$_smarty_tpl->tpl_vars['navigation']->value,'quick_menu'=>$_smarty_tpl->tpl_vars['quick_menu']->value), 0, false);
?>
                <div class="cs-main-menu__primary <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['main_menu_primary_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:components/menu/main_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['primary_items']->value,'prefix'=>"primary",'show_collapse_default'=>$_smarty_tpl->tpl_vars['show_collapse_default']->value), 0, false);
?>
                </div>

                                <?php $_smarty_tpl->_subTemplateRender("tygh:components/menu/get_secondary_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navigation'=>$_smarty_tpl->tpl_vars['navigation']->value), 0, false);
?>
                <?php if ($_smarty_tpl->tpl_vars['secondary_items']->value) {?>
                    <div class="cs-main-menu__secondary">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:components/menu/main_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['secondary_items']->value,'prefix'=>"secondary",'show_collapse_default'=>$_smarty_tpl->tpl_vars['show_collapse_default']->value), 0, true);
?>
                    </div>
                <?php }?>
            <?php }?>
        </div>
    <!--header_navbar--></div>
</div>
<div class="cs-main-menu__backdrop mobile-menu-closer">
</div>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/quick_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('quick_menu'=>$_smarty_tpl->tpl_vars['quick_menu']->value), 0, false);
}
}