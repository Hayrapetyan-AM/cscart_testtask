<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:09:04
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/common/colorpicker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704cd0370832_19875133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6399824657918b174bd674ba08135ced18c6129' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/common/colorpicker.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67704cd0370832_19875133 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/modifier.render_tag_attrs.php','function'=>'smarty_modifier_render_tag_attrs',),));
?>
<div class="colorpicker <?php if ($_smarty_tpl->tpl_vars['cp_meta']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp_meta']->value, ENT_QUOTES, 'UTF-8');
}?>" <?php echo smarty_modifier_render_tag_attrs((($tmp = $_smarty_tpl->tpl_vars['cp_attrs']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));?>
>
    <input
        type="hidden"
        name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp_name']->value, ENT_QUOTES, 'UTF-8');?>
"
        id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp_value']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['show_picker']->value) {?>data-ca-spectrum-show-initial="true"<?php } else { ?>data-ca-view="palette"<?php }?>
        class="cm-colorpicker"
    >
</div><?php }
}
