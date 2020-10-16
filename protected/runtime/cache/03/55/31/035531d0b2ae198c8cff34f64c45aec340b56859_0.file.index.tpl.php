<?php
/* Smarty version 3.1.31, created on 2020-10-16 15:26:16
  from "C:\localserver\OpenServer\domains\2br.local\protected\app\core\admin-template\view\search\index\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f899168ef0b75_73088137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '035531d0b2ae198c8cff34f64c45aec340b56859' => 
    array (
      0 => 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\app\\core\\admin-template\\view\\search\\index\\index.tpl',
      1 => 1602568199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/help.tpl' => 1,
  ),
),false)) {
function content_5f899168ef0b75_73088137 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="apply notice"><?php $_smarty_tpl->_subTemplateRender('file:system/help.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('help_theme'=>"search_index"), 0, false);
?>
</div><?php if ($_smarty_tpl->tpl_vars['search_info']->value['index_records']) {?><div class="indexation-info">Проиндексированно <span class="badge badge-blue"><?php echo $_smarty_tpl->tpl_vars['search_info']->value['index_records'];?>
</span> страниц сайта</div><?php }?><div class="content" style="margin: 0; padding: 0;"><div class="indexation-search" id="requests"></div><div id="indexation-good" class="apply" style="display:none">Индексация сайта завершена</div></div><button type="button" class="button button-blue" onclick="return cp.indexation(event);"><i class="zmdi zmdi-refresh"></i>Индексировать сайт</button><?php }
}
