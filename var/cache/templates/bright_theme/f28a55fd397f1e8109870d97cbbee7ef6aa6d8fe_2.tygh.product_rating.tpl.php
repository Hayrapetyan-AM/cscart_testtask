<?php
/* Smarty version 4.3.0, created on 2024-12-28 10:54:16
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/product_rating.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704958095798_28227627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f28a55fd397f1e8109870d97cbbee7ef6aa6d8fe' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/product_rating.tpl',
      1 => 1735386000,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/product_rating_overview.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/product_stars_details.tpl' => 2,
  ),
),false)) {
function content_67704958095798_28227627 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
    <section class="ty-product-review-product-rating">

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_rating_overview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('average_rating'=>$_smarty_tpl->tpl_vars['average_rating']->value,'total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_stars_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ratings_stats'=>$_smarty_tpl->tpl_vars['ratings_stats']->value,'total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value), 0, false);
?>

    </section>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/product_rating.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/product_rating.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
    <section class="ty-product-review-product-rating">

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_rating_overview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('average_rating'=>$_smarty_tpl->tpl_vars['average_rating']->value,'total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value), 0, true);
?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_stars_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ratings_stats'=>$_smarty_tpl->tpl_vars['ratings_stats']->value,'total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value), 0, true);
?>

    </section>
<?php }
}
}
}
