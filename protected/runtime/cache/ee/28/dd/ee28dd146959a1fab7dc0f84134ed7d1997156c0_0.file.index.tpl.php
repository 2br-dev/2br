<?php
/* Smarty version 3.1.31, created on 2020-10-16 15:28:03
  from "C:\localserver\OpenServer\domains\2br.local\protected\app\core\admin-template\view\dashboard\index\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f8991d3312953_03575865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee28dd146959a1fab7dc0f84134ed7d1997156c0' => 
    array (
      0 => 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\app\\core\\admin-template\\view\\dashboard\\index\\index.tpl',
      1 => 1602568199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8991d3312953_03575865 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['permissions']->value) && !empty($_smarty_tpl->tpl_vars['permissions']->value)) {?><h4>Ошибки прав на папки:</h4><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['permissions']->value, 'item', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['item']->value) {
?><div class="apply notice"><p><b><?php echo $_smarty_tpl->tpl_vars['item']->value['folder'];?>
</b> нет прав на редактирования, текущие права на папку <b><?php echo $_smarty_tpl->tpl_vars['item']->value['perms'];?>
</b></p><div class="button-container mb5 clearfix"><a href="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
/perm/edit/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" class="button button-green"><i class="zmdi zmdi-wrench"></i>Исправить</a></div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?><div class="fl"><?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/technology.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/widgets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div><?php }
}
