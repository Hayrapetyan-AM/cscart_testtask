<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:13:27
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/views/block_manager/block_selection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704dd79d9de6_91581245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '608172d60f9286f7de8072711f4836a7fa540a3a' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/views/block_manager/block_selection.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/block_manager/components/new_blocks_list.tpl' => 1,
    'tygh:views/block_manager/components/existing_blocks_list.tpl' => 1,
  ),
),false)) {
function content_67704dd79d9de6_91581245 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('manage_existing_block','use_existing_block','create_new_block'));
echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('tabs_count', 2);?>

<div id="block_selection<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="tabs cm-j-tabs tabs--enable-fill tabs--count-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tabs_count']->value, ENT_QUOTES, 'UTF-8');?>
">
        <ul class="nav nav-tabs">
            <li id="user_existing_blocks_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php if ($_REQUEST['manage'] && $_REQUEST['manage'] == "Y") {
echo $_smarty_tpl->__("manage_existing_block");
} else {
echo $_smarty_tpl->__("use_existing_block");
}?></a></li>
            <li id="create_new_blocks_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js"><a><?php echo $_smarty_tpl->__("create_new_block");?>
</a></li>
        </ul>
    </div>

    <div class="cm-tabs-content tabs_content_blocks" id="tabs_content_blocks_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div id="content_create_new_blocks_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/block_manager/components/new_blocks_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('manage'=>(($tmp = $_REQUEST['manage'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)), 0, false);
?>
        <!--content_create_new_blocks_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

        <div id="content_user_existing_blocks_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/block_manager/components/existing_blocks_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('manage'=>(($tmp = $_REQUEST['manage'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)), 0, false);
?>
        <!--content_user_existing_blocks_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    </div>
<!--block_selection<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
