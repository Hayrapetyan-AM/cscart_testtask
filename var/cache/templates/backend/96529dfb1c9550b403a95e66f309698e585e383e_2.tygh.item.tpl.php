<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:07:27
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/views/products/components/picker/item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704c6fae94a9_97961741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96529dfb1c9550b403a95e66f309698e585e383e' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/views/products/components/picker/item.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67704c6fae94a9_97961741 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('show_simple_product', (($tmp = $_smarty_tpl->tpl_vars['show_simple_product']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>

<?php if (!$_smarty_tpl->tpl_vars['show_simple_product']->value) {?>

    ${data.image && data.image.image_path
        ? `<img src="${data.image.image_path}" width="30" height="30" alt="${data.image.alt}" class="object-picker__products-image"/>
        ` : `<div class="no-image object-picker__products-image object-picker__products-image--no-image" style="width: 30px; height: 30px;"> <span class="cs-icon glyph-image"></span></div>`
    }

<?php }?>

<div class="object-picker__products-main">
    <div class="object-picker__products-name">
        <div class="object-picker__products-name-content">
            <span class="object-picker__products-name-text">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 
                
                    ${data.product ? data.product : data.text}
                 
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>

            </span>
        </div>
    </div>
</div><?php }
}
