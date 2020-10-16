<?php
/* Smarty version 3.1.31, created on 2020-10-16 15:28:34
  from "C:\localserver\OpenServer\domains\2br.local\protected\app\core\admin-template\view\structure\index\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f8991f2da29f3_10046326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ef8147215c9b1bd672dc570fd51c5db034c2b45' => 
    array (
      0 => 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\app\\core\\admin-template\\view\\structure\\index\\index.tpl',
      1 => 1602568199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8991f2da29f3_10046326 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="dd-tree"><?php $_smarty_tpl->_assignInScope('structure_item', $_smarty_tpl->tpl_vars['tv_struct']->value);
if (!empty($_smarty_tpl->tpl_vars['structure_item']->value)) {?><div class="dd nestable-tree" data-path="structure" data-group="0"><ol class="dd-list"><?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/structure_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('a_tree'=>$_smarty_tpl->tpl_vars['structure_item']->value), 0, true);
?>
</ol></div><?php }?></div>

<?php }
}
