<?php
/* Smarty version 3.1.31, created on 2020-10-16 15:27:52
  from "C:\localserver\OpenServer\domains\2br.local\protected\app\core\admin-template\view\search\configure\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f8991c86b0419_94252092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '220fb9296ecf4a12139d0c3dc201fafaa2431757' => 
    array (
      0 => 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\app\\core\\admin-template\\view\\search\\configure\\index.tpl',
      1 => 1602568199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/buttons.tpl' => 1,
  ),
),false)) {
function content_5f8991c86b0419_94252092 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capi')) require_once 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\app\\libs\\smarty.plugins\\modifier.capi.php';
?>
<form action="" method="post"><input type="hidden" name="action" value="save_conf"><table class="table" id="search"><col width="350"><col><tbody><tr><td class="h"><?php echo smarty_modifier_capi($_smarty_tpl->tpl_vars['locale']->value['domen']);?>
</th><td><input name="new_site" value="<?php echo $_smarty_tpl->tpl_vars['search_site']->value;?>
" disabled="disabled"></td><tr><tr><td class="h"><?php echo smarty_modifier_capi($_smarty_tpl->tpl_vars['locale']->value['ignore_links_containing']);?>
</th><td><input name="new_rules" value="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['search_rules']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
echo $_smarty_tpl->tpl_vars['item']->value;?>
 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
"></td><tr><tr><td class="h"><?php echo smarty_modifier_capi($_smarty_tpl->tpl_vars['locale']->value['not_take_links_pages_containing']);?>
:<br>(<?php echo $_smarty_tpl->tpl_vars['locale']->value['take_only_content'];?>
)</th><td><input name="new_cat_rules" value="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['search_cat_rules']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
echo $_smarty_tpl->tpl_vars['item']->value;?>
 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
"></td><tr><tr><td class="h"><?php echo smarty_modifier_capi($_smarty_tpl->tpl_vars['locale']->value['ignore_references_complete_coincidence']);?>
</th><td><input name="new_templates" value="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['search_templates']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
echo $_smarty_tpl->tpl_vars['item']->value;?>
 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
"></td><tr></tbody></table><?php $_smarty_tpl->_subTemplateRender("file:system/buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</form><?php }
}
