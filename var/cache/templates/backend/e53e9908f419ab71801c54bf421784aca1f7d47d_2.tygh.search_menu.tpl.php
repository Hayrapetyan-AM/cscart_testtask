<?php
/* Smarty version 4.3.0, created on 2024-12-28 11:06:52
  from '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/components/menu/search_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67704c4cd82f58_70100575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e53e9908f419ab71801c54bf421784aca1f7d47d' => 
    array (
      0 => '/home/armen/phpProjects/cscart/fidem_test_task/design/backend/templates/components/menu/search_menu.tpl',
      1 => 1728377975,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67704c4cd82f58_70100575 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/armen/phpProjects/cscart/fidem_test_task/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_general'));
?>
<!--quick search-->
<div class="search nav__search">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:global_search"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:global_search"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <form id="global_search" method="get" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" class="search__form" data-ca-search-menu="form">
            <input type="hidden" name="dispatch" value="search.results" />
            <input type="hidden" name="compact" value="Y" />
            <label for="gs_text" class="search__group">
                <input type="text"
                    class="cm-autocomplete-off search__input"
                        id="gs_text"
                        name="q"
                        placeholder="<?php echo $_smarty_tpl->__("admin_search_general");?>
"
                        value="<?php echo htmlspecialchars((string) $_REQUEST['q'], ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-search-menu="input"
                    />
                <button class="btn search__button" type="submit" id="search_button"></button>
            </label>
        </form>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:global_search"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

</div>
<!--end quick search--><?php }
}
