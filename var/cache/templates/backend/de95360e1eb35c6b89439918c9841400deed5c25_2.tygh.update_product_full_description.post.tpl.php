<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:07:26
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/product_second_description/hooks/products/update_product_full_description.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704c6e9d3f85_29318631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de95360e1eb35c6b89439918c9841400deed5c25' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/addons/product_second_description/hooks/products/update_product_full_description.post.tpl',
      1 => 1735411260,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:components/append_language.tpl' => 1,
    'tygh:buttons/update_for_all.tpl' => 1,
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_67704c6e9d3f85_29318631 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/block.component.php','function'=>'smarty_block_component',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_second_description','edit_content_on_site'));
?>

    <div class="control-group">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"information",'field'=>"product_second_description]"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"information",'field'=>"product_second_description]"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="control-group cm-no-hide-input">
                <label class="control-label" for="elm_product_product_second_descr"><?php echo $_smarty_tpl->__("product_second_description");?>
:</label>
                <div class="controls">
                    <div class="input-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_append_wysiwyg_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php $_smarty_tpl->_assignInScope('is_block_manager_available', $_smarty_tpl->tpl_vars['runtime']->value['company_id'] || (fn_allowed_for("MULTIVENDOR")));?>
                        <textarea id="elm_product_product_second_descr"
                                  name="product_data[product_second_description]"
                                  cols="55"
                                  rows="8"
                                  class="cm-wysiwyg input-large"
                                  data-ca-is-block-manager-enabled="<?php echo htmlspecialchars((string) intval(fn_check_view_permissions("block_manager.block_selection","GET")), ENT_QUOTES, 'UTF-8');?>
"
                                  data-ca-is-block-manager-available="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_block_manager_available']->value, ENT_QUOTES, 'UTF-8');?>
"
                        ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['second_description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:components/append_language.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs_if_shared_product']->value,'simple_tooltip'=>true), 0, false);
?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>"product_second_description",'name'=>"update_all_vendors[product_second_description]",'component'=>"products.product_second_description",'hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs_if_shared_product']->value,'append'=>true), 0, false);
?>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['view_uri']->value) {?>
                        <?php ob_start();
echo htmlspecialchars((string) urlencode($_smarty_tpl->tpl_vars['view_uri']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable4=ob_get_clean();
ob_start();
if (fn_allowed_for("ULTIMATE")) {
echo "&switch_company_id=";
echo (string)$_smarty_tpl->tpl_vars['product_data']->value['company_id'];
}
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"customization.update_mode?type=live_editor&status=enable&frontend_url=".$_prefixVariable4.$_prefixVariable5,'but_text'=>$_smarty_tpl->__("edit_content_on_site"),'but_role'=>"action",'but_meta'=>"btn-small btn-live-edit cm-post",'but_target'=>"_blank"), 0, false);
?>
                    <?php }?>
                </div>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"detailed",'section'=>"information",'field'=>"product_second_description]"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
<?php }
}
