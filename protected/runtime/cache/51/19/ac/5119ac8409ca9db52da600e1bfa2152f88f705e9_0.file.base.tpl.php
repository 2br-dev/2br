<?php
/* Smarty version 3.1.31, created on 2020-10-16 12:11:12
  from "C:\localserver\OpenServer\domains\2br.local\protected\themes\base\smarty\base.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f8963b0be1c69_50903912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5119ac8409ca9db52da600e1bfa2152f88f705e9' => 
    array (
      0 => 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\themes\\base\\smarty\\base.tpl',
      1 => 1602568222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./components/meta.tpl' => 1,
    'file:./components/drop_down_contacts.tpl' => 1,
    'file:./components/header.tpl' => 1,
    'file:./components/footer.tpl' => 1,
    'file:./components/auth_panel.tpl' => 1,
    'file:./components/brif.tpl' => 1,
    'file:./components/scripts.tpl' => 1,
  ),
),false)) {
function content_5f8963b0be1c69_50903912 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./components/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--  --><!--  --><!--  --><!-- определение цвета темы --><?php $_smarty_tpl->_assignInScope('theme', "dark");
if ($_smarty_tpl->tpl_vars['uri']->value[0] == '1') {
$_smarty_tpl->_assignInScope('theme', "light" ,true);
}?><!--  --><div class="loader" id="loader"></div><!--  --><?php $_smarty_tpl->_subTemplateRender("file:./components/drop_down_contacts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--  --><!--  --><main class="app app__<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
"><!--  --><!-- header --><?php $_smarty_tpl->_subTemplateRender("file:./components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- /header --><!--  --><!-- content --><?php echo $_smarty_tpl->tpl_vars['_page']->value['content'];?>
<!-- /content --><!--  --><!-- footer --><?php $_smarty_tpl->_subTemplateRender("file:./components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- /footer --><!--  --></main><?php $_smarty_tpl->_subTemplateRender("file:./components/auth_panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./components/brif.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./components/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
