<?php
/* Smarty version 4.3.0, created on 2024-12-28 10:54:15
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/themes/responsive/templates/addons/product_reviews/blocks/product_tabs/product_reviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704957ebbd41_76093998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cca9c32b3b10311c4b097653d76153a9acce55d0' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/themes/responsive/templates/addons/product_reviews/blocks/product_tabs/product_reviews.tpl',
      1 => 1735386000,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67704957ebbd41_76093998 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/block.component.php','function'=>'smarty_block_component',),1=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.title','product_reviews.title','product_reviews.title','product_reviews.title','product_reviews.title','product_reviews.title'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"product_reviews.reviews_on_product_tab",'product'=>$_smarty_tpl->tpl_vars['product']->value,'request'=>$_REQUEST,'title'=>$_smarty_tpl->__("product_reviews.title"),'quicklink'=>"product_review_link",'container_id'=>"content_product_reviews_block",'locate_to_product_review_tab'=>true));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"product_reviews.reviews_on_product_tab",'product'=>$_smarty_tpl->tpl_vars['product']->value,'request'=>$_REQUEST,'title'=>$_smarty_tpl->__("product_reviews.title"),'quicklink'=>"product_review_link",'container_id'=>"content_product_reviews_block",'locate_to_product_review_tab'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_component(array('name'=>"product_reviews.reviews_on_product_tab",'product'=>$_smarty_tpl->tpl_vars['product']->value,'request'=>$_REQUEST,'title'=>$_smarty_tpl->__("product_reviews.title"),'quicklink'=>"product_review_link",'container_id'=>"content_product_reviews_block",'locate_to_product_review_tab'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/blocks/product_tabs/product_reviews.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/blocks/product_tabs/product_reviews.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"product_reviews.reviews_on_product_tab",'product'=>$_smarty_tpl->tpl_vars['product']->value,'request'=>$_REQUEST,'title'=>$_smarty_tpl->__("product_reviews.title"),'quicklink'=>"product_review_link",'container_id'=>"content_product_reviews_block",'locate_to_product_review_tab'=>true));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"product_reviews.reviews_on_product_tab",'product'=>$_smarty_tpl->tpl_vars['product']->value,'request'=>$_REQUEST,'title'=>$_smarty_tpl->__("product_reviews.title"),'quicklink'=>"product_review_link",'container_id'=>"content_product_reviews_block",'locate_to_product_review_tab'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_component(array('name'=>"product_reviews.reviews_on_product_tab",'product'=>$_smarty_tpl->tpl_vars['product']->value,'request'=>$_REQUEST,'title'=>$_smarty_tpl->__("product_reviews.title"),'quicklink'=>"product_review_link",'container_id'=>"content_product_reviews_block",'locate_to_product_review_tab'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
