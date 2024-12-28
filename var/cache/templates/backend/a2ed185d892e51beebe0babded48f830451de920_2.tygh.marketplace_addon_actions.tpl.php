<?php
/* Smarty version 4.3.0, created on 2024-12-28 13:07:54
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/views/addons/components/marketplace/marketplace_addon_actions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_677068aae79895_27344425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2ed185d892e51beebe0babded48f830451de920' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/views/addons/components/marketplace/marketplace_addon_actions.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_677068aae79895_27344425 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('cscart_marketplace.buy'));
if ($_smarty_tpl->tpl_vars['is_marketplace_addons']->value) {?>
    <div>
        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a']->value['addon_marketplace_page'], ENT_QUOTES, 'UTF-8');?>
" class="btn" target="_blank">
            <?php echo $_smarty_tpl->__("cscart_marketplace.buy");?>

        </a>
    </div>
<?php }
}
}
