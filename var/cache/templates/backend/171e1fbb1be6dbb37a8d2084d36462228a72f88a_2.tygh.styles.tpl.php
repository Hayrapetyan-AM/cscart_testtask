<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:06:48
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/common/styles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704c48ab38b0_89724855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '171e1fbb1be6dbb37a8d2084d36462228a72f88a' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/common/styles.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/critical_css.tpl' => 1,
    'tygh:views/statuses/components/styles.tpl' => 1,
  ),
),false)) {
function content_67704c48ab38b0_89724855 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'get_tygh_style_contents' => 
  array (
    'compiled_filepath' => '/home/armen/phpProjects/cscart/fidem_test_task/var/cache/templates/backend/171e1fbb1be6dbb37a8d2084d36462228a72f88a_2.tygh.styles.tpl.php',
    'uid' => '171e1fbb1be6dbb37a8d2084d36462228a72f88a',
    'call_name' => 'smarty_template_function_get_tygh_style_contents_150691706367704c48a7f592_62676657',
  ),
));
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/block.styles.php','function'=>'smarty_block_styles',),));
$_smarty_tpl->_subTemplateRender("tygh:common/critical_css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php $_smarty_tpl->_assignInScope('is_theme_editor_currently_opened', (defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor" && $_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor'] === true);?>

<?php if ($_smarty_tpl->tpl_vars['backoffice_color_scheme']->value === smarty_modifier_enum("BackofficeColorSchemeVariants::DARK") && !$_smarty_tpl->tpl_vars['is_theme_editor_currently_opened']->value) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('styles', array());
$_block_repeat=true;
echo smarty_block_styles(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'get_tygh_style_contents', array('color_scheme'=>smarty_modifier_enum("BackofficeColorSchemeVariants::DARK")), true);?>

    <?php $_block_repeat=false;
echo smarty_block_styles(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} elseif ($_smarty_tpl->tpl_vars['backoffice_color_scheme']->value === smarty_modifier_enum("BackofficeColorSchemeVariants::SYSTEM") && !$_smarty_tpl->tpl_vars['is_theme_editor_currently_opened']->value) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('styles', array('link_media'=>"screen and (prefers-color-scheme: light)"));
$_block_repeat=true;
echo smarty_block_styles(array('link_media'=>"screen and (prefers-color-scheme: light)"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'get_tygh_style_contents', array('color_scheme'=>smarty_modifier_enum("BackofficeColorSchemeVariants::LIGHT")), true);?>

    <?php $_block_repeat=false;
echo smarty_block_styles(array('link_media'=>"screen and (prefers-color-scheme: light)"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('styles', array('link_media'=>"screen and (prefers-color-scheme: dark)"));
$_block_repeat=true;
echo smarty_block_styles(array('link_media'=>"screen and (prefers-color-scheme: dark)"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'get_tygh_style_contents', array('color_scheme'=>smarty_modifier_enum("BackofficeColorSchemeVariants::DARK")), true);?>

    <?php $_block_repeat=false;
echo smarty_block_styles(array('link_media'=>"screen and (prefers-color-scheme: dark)"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else { ?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('styles', array());
$_block_repeat=true;
echo smarty_block_styles(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'get_tygh_style_contents', array('color_scheme'=>smarty_modifier_enum("BackofficeColorSchemeVariants::LIGHT")), true);?>

    <?php $_block_repeat=false;
echo smarty_block_styles(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* smarty_template_function_get_tygh_style_contents_150691706367704c48a7f592_62676657 */
if (!function_exists('smarty_template_function_get_tygh_style_contents_150691706367704c48a7f592_62676657')) {
function smarty_template_function_get_tygh_style_contents_150691706367704c48a7f592_62676657(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),1=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
?>

    <?php echo smarty_function_style(array('src'=>"ui/jqueryui.css"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"lib/select2/select2.min.css"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"lib/bootstrap_switch/stylesheets/bootstrapSwitch.css"),$_smarty_tpl);?>


    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:styles"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:styles"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php echo smarty_function_style(array('src'=>"styles.less"),$_smarty_tpl);?>


        <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor") {?>
            <?php echo smarty_function_style(array('src'=>"config_vendor.less"),$_smarty_tpl);?>

        <?php }?>

        <?php echo smarty_function_style(array('src'=>"tygh/supports.css"),$_smarty_tpl);?>


        <?php echo smarty_function_style(array('src'=>"glyphs.css"),$_smarty_tpl);?>


        <?php $_smarty_tpl->_subTemplateRender("tygh:views/statuses/components/styles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>(defined('STATUSES_ORDER') ? constant('STATUSES_ORDER') : null)), 0, false);
?>

        <?php if ($_smarty_tpl->tpl_vars['language_direction']->value == 'rtl') {?>
            <?php echo smarty_function_style(array('src'=>"rtl.less"),$_smarty_tpl);?>

        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:styles"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']) {?>
        <?php echo smarty_function_style(array('src'=>"../../themes/responsive/css/tygh/components/block_manager.less"),$_smarty_tpl);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['color_scheme']->value === smarty_modifier_enum("BackofficeColorSchemeVariants::DARK")) {?>
        <?php echo smarty_function_style(array('src'=>"config_dark.less"),$_smarty_tpl);?>

        <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor") {?>
            <?php echo smarty_function_style(array('src'=>"config_vendor_dark.less"),$_smarty_tpl);?>

        <?php }?>
    <?php }
}}
/*/ smarty_template_function_get_tygh_style_contents_150691706367704c48a7f592_62676657 */
}