<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:07:27
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/views/product_features/components/variants_picker/item_image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704c6f3073e5_60137107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5d8775ae8752932d5315e65e2fdc7efe2823d53' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/views/product_features/components/variants_picker/item_image.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67704c6f3073e5_60137107 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['enable_image']->value) {?>
    
        ${data.image_url
        ? `<img src="${data.image_url}" width="30" height="30" alt="${data.name}" class="object-picker__product-feature-image"/>`
            : `<div class="no-image object-picker__product-feature-no-image" style="width: 30px; height: 30px;"><span class="cs-icon glyph-image"></span></div>`
        }
    
<?php }?>
<div class="object-picker__product-feature-label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 ${data.name} <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</div><?php }
}
