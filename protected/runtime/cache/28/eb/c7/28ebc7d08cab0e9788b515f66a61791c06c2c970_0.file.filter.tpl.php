<?php
/* Smarty version 3.1.31, created on 2020-10-16 15:06:57
  from "C:\localserver\OpenServer\domains\2br.local\protected\app\core\admin-template\view\meta\module\filter.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f898ce10c9486_54636683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28ebc7d08cab0e9788b515f66a61791c06c2c970' => 
    array (
      0 => 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\app\\core\\admin-template\\view\\meta\\module\\filter.tpl',
      1 => 1602568199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f898ce10c9486_54636683 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('pagerCookie', "module_limit_".((string)$_smarty_tpl->tpl_vars['module_id']->value));
?><div class="button-container clearfix"><div class="button-container--right"><?php if ($_smarty_tpl->tpl_vars['meta_filter']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['meta_filter']->value, 'filter', false, 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['filter']->value) {
if (!empty($_smarty_tpl->tpl_vars['filter']->value['list'])) {?><div class="button-container-select button-container-select--<?php echo $_smarty_tpl->tpl_vars['filter']->value['type'];?>
"><select name="$name"<?php if ($_smarty_tpl->tpl_vars['filter']->value['type'] == 'multiselect') {?> multiple<?php }?> onchange="Module.setSort(this, <?php echo $_smarty_tpl->tpl_vars['module_id']->value;?>
, '<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
')" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php if ($_smarty_tpl->tpl_vars['filter']->value['type'] != 'multiselect') {?><option value="">- <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 -</option><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value['list'], 'n', false, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value => $_smarty_tpl->tpl_vars['n']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['meta_cookie']->value[$_smarty_tpl->tpl_vars['name']->value]) && (is_array($_smarty_tpl->tpl_vars['meta_cookie']->value[$_smarty_tpl->tpl_vars['name']->value]) && in_array($_smarty_tpl->tpl_vars['v']->value,$_smarty_tpl->tpl_vars['meta_cookie']->value[$_smarty_tpl->tpl_vars['name']->value]) || is_string($_smarty_tpl->tpl_vars['meta_cookie']->value[$_smarty_tpl->tpl_vars['name']->value]) && $_smarty_tpl->tpl_vars['v']->value == $_smarty_tpl->tpl_vars['meta_cookie']->value[$_smarty_tpl->tpl_vars['name']->value])) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['n']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?><div class="button-container-limit"><select name="limit" onchange="Module.setLimit(this, <?php echo $_smarty_tpl->tpl_vars['module_id']->value;?>
)"><option value="10">На странице</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page_count']->value, 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"<?php if (isset($_COOKIE[$_smarty_tpl->tpl_vars['pagerCookie']->value]) && $_COOKIE[$_smarty_tpl->tpl_vars['pagerCookie']->value] == $_smarty_tpl->tpl_vars['page']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><a href="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
/module/add/<?php echo $_smarty_tpl->tpl_vars['module_id']->value;?>
?backuri=<?php echo $_smarty_tpl->tpl_vars['_backuri']->value;?>
" class="button button-green"><i class="zmdi zmdi-plus-circle"></i>Добавить поле</a><?php if ($_SESSION['userinf']['gid'] == 10) {?><a href="/<?php echo $_smarty_tpl->tpl_vars['ADMIN_DIR']->value;?>
/modules/index/edit/<?php echo $_smarty_tpl->tpl_vars['module_id']->value;?>
" class="button button-gray"><i class="zmdi zmdi-settings"></i>Настройки модуля</a><?php }
if (!empty($_GET) || $_smarty_tpl->tpl_vars['filter']->value) {?><a href="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
/module/clearfilter/<?php echo $_smarty_tpl->tpl_vars['module_id']->value;?>
?backuri=<?php echo $_smarty_tpl->tpl_vars['_backuri']->value;?>
" class="button"><i class="zmdi zmdi-format-clear-all"></i>Сбросить фильтры</a><?php }?><span class="catalog-disable" id="remove-button"><button type="button" class="button button-red" onclick="Module.deleteAll(event)"><i class="zmdi zmdi-delete"></i>Удалить выбранные товары</button></span></div><?php }
}
