<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:09:04
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/seo/hooks/product_features/feature_code.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704cd01a2ae0_72241795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5130b1ab35d59ab03238409125a44e1c02fa4538' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/seo/hooks/product_features/feature_code.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67704cd01a2ae0_72241795 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('seo.product_feature.feature_code.notice'));
?>
<div id="elm_feature_code_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_description" class="muted description">
    <p><?php echo $_smarty_tpl->__("seo.product_feature.feature_code.notice");?>
</p>
    <?php if ($_smarty_tpl->tpl_vars['feature_codes']->value) {?>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature_codes']->value, 'feature_code');
$_smarty_tpl->tpl_vars['feature_code']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature_code']->value) {
$_smarty_tpl->tpl_vars['feature_code']->do_else = false;
?>
                <li><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature_code']->value['name'], ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature_code']->value['description'], ENT_QUOTES, 'UTF-8');?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <?php }?>
</div><?php }
}
