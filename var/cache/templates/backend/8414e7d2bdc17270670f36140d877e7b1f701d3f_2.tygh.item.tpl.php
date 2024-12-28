<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:07:28
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/views/product_options/components/picker/item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704c704093c9_72978521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8414e7d2bdc17270670f36140d877e7b1f701d3f' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/views/product_options/components/picker/item.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67704c704093c9_72978521 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
?>
<div class="object-picker__results-label object-picker__options-results-label object-picker__results-label--new">
    <?php if ((($tmp = $_smarty_tpl->tpl_vars['icon']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
        <div class="object-picker__results-label-icon-wrapper object-picker__options-results-label-icon-wrapper object-picker__results-label-icon-wrapper--new">
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)((($tmp = $_smarty_tpl->tpl_vars['icon']->value ?? null)===null||$tmp==='' ? 'icon-plus-sign' ?? null : $tmp)))." object-picker__results-label-icon object-picker__options-results-label-icon object-picker__results-label-icon--new"),$_smarty_tpl);?>

        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['title_pre']->value) {?>
        <div class="object-picker__results-label-prefix object-picker__options-results-label-prefix object-picker__results-label-prefix object-picker__options-results-label-prefix--new">
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>

        </div>
    <?php }?>
    <div class="object-picker__results-label-body object-picker__options-results-label-body object-picker__results-label-body--new">
        ${data.name}
    </div>
    <?php if ($_smarty_tpl->tpl_vars['title_post']->value) {?>
        <div class="object-picker__results-label-suffix object-picker__options-results-label-suffix object-picker__results-label-suffix--new">
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>

        </div>
    <?php }?>
</div>
<?php }
}
