<?php
/* Smarty version 4.3.0, created on 2024-12-28 12:48:33
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/gift_certificates/hooks/orders/search_form.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6770642114c047_73056830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4a6a62acfca56f510a5ab38bbb8ca9ecb0f4698' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/gift_certificates/hooks/orders/search_form.post.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6770642114c047_73056830 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('gift_cert_code','purchased','used'));
?>
<label class="control-label" for="gift_cert_code"><?php echo $_smarty_tpl->__("gift_cert_code");?>
:</label>
<div class="controls search-field">
    <input type="text" name="gift_cert_code" id="gift_cert_code" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['gift_cert_code'], ENT_QUOTES, 'UTF-8');?>
" size="30" class="input-text" />
    <select name="gift_cert_in">
        <option value="B|U">--</option>
        <option value="B" <?php if ($_smarty_tpl->tpl_vars['search']->value['gift_cert_in'] == "B") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("purchased");?>
</option>
        <option value="U" <?php if ($_smarty_tpl->tpl_vars['search']->value['gift_cert_in'] == "U") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("used");?>
</option>
    </select>
</div><?php }
}
