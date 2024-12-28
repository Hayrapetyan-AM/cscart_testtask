<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:07:27
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/bestsellers/hooks/products/detailed_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704c6f3b17d2_55467070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8fdc4427d405f5f14cf576faea527f8c1a016d7' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/bestsellers/hooks/products/detailed_content.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
  ),
),false)) {
function content_67704c6f3b17d2_55467070 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('bestselling','sales_amount'));
$_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("bestselling"),'target'=>"#acc_bestsellers"), 0, false);
?>
<div id="acc_bestsellers" class="collapse in <?php if (!$_smarty_tpl->tpl_vars['allow_edit_sales_amount']->value) {?>cm-hide-inputs<?php }?>">
    <div class="control-group">
        <label class="control-label" for="sales_amount"><?php echo $_smarty_tpl->__("sales_amount");?>
</label>
        <div class="controls">
        <input type="text" id="sales_amount" name="product_data[sales_amount]" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['product_data']->value['sales_amount'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-large" size="10" />
        </div>
    </div>
</div><?php }
}
