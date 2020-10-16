<?php
/* Smarty version 3.1.31, created on 2020-08-31 13:28:58
  from "/home/b/burdilo/temp.2-br.ru/public_html/protected/themes/base/smarty/base.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f4cd0ea1ae792_81323543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4595b55f2915c0aad49e6edfe43f6475cfb2310f' => 
    array (
      0 => '/home/b/burdilo/temp.2-br.ru/public_html/protected/themes/base/smarty/base.tpl',
      1 => 1565099470,
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
function content_5f4cd0ea1ae792_81323543 (Smarty_Internal_Template $_smarty_tpl) {
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
