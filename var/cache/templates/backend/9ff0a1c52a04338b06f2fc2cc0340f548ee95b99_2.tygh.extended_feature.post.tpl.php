<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:09:04
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/seo/hooks/product_features/extended_feature.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704cd03b70c8_71825327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ff0a1c52a04338b06f2fc2cc0340f548ee95b99' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/seo/hooks/product_features/extended_feature.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/seo/common/seo_name_field.tpl' => 1,
  ),
),false)) {
function content_67704cd03b70c8_71825327 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
if ($_smarty_tpl->tpl_vars['feature_type']->value == smarty_modifier_enum("ProductFeatures::EXTENDED") && ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("ULTIMATE") || fn_allowed_for("MULTIVENDOR"))) {
$_smarty_tpl->_subTemplateRender("tygh:addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_data'=>$_smarty_tpl->tpl_vars['var']->value,'object_name'=>"feature_data[variants][".((string)$_smarty_tpl->tpl_vars['num']->value)."]",'hide_title'=>true,'object_id'=>$_smarty_tpl->tpl_vars['var']->value['variant_id'],'object_type'=>"e"), 0, false);
}
}
}
