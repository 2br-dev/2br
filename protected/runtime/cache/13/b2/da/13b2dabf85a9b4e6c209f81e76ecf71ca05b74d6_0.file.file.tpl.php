<?php
/* Smarty version 3.1.31, created on 2020-10-16 15:07:13
  from "C:\localserver\OpenServer\domains\2br.local\protected\app\core\admin-template\fields\file.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f898cf1ed5f52_91454366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13b2dabf85a9b4e6c209f81e76ecf71ca05b74d6' => 
    array (
      0 => 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\app\\core\\admin-template\\fields\\file.tpl',
      1 => 1602568199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:fields/upload.tpl' => 1,
  ),
),false)) {
function content_5f898cf1ed5f52_91454366 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table bg-white b-a" id="uploaded_files_list_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><colgroup><col><col width="10%"><col width="10%"><col width="10%"></colgroup><thead><tr><th width="50%">Файл</th><th>Размер</th><th>Порядок</th><th>Действия</th></tr></thead><tbody><?php if (isset($_smarty_tpl->tpl_vars['list']->value) && !empty($_smarty_tpl->tpl_vars['list']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'e');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
?><tr id="file_photo_<?php echo $_smarty_tpl->tpl_vars['e']->value['id'];?>
"><td><a class="upload-gallery-edit" title="Редактировать наименование" onclick="return editTitle(<?php echo $_smarty_tpl->tpl_vars['e']->value['id'];?>
, '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['e']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
')" href="#"><i class="zmdi zmdi-edit"></i></a> <a href="<?php echo $_smarty_tpl->tpl_vars['e']->value['file'];?>
" target="_blank" id="ftitle_<?php echo $_smarty_tpl->tpl_vars['e']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value['title'];?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['e']->value['size'];?>
</td><td><a style="float:left;margin: 0 5px 0 0;" title="Редактировать порядок" onclick="return editOrd(<?php echo $_smarty_tpl->tpl_vars['e']->value['id'];?>
, '<?php echo $_smarty_tpl->tpl_vars['e']->value['ord'];?>
')" href="#"><i class="zmdi zmdi-edit"></i></a> <span id="ordfile_<?php echo $_smarty_tpl->tpl_vars['e']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value['ord'];?>
</span></td><td><button type="button" class="btn btn-default btn-xs" onclick="return Module.ajaxFileDelete(<?php echo $_smarty_tpl->tpl_vars['e']->value['id'];?>
, 'file_photo_<?php echo $_smarty_tpl->tpl_vars['e']->value['id'];?>
');" href="#" data-no-instant>Удалить</button></td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?><tr><td colspan="4" class="center-middle">Файл<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['f_file_count']) && $_smarty_tpl->tpl_vars['settings']->value['f_file_count'] == 1) {?>ы<?php }?> не загружен<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['f_file_count']) && $_smarty_tpl->tpl_vars['settings']->value['f_file_count'] == 1) {?>ы<?php }?></td></tr><?php }?></tbody></table><?php $_smarty_tpl->_subTemplateRender("file:fields/upload.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->tpl_vars['name']->value,'value'=>$_smarty_tpl->tpl_vars['value']->value,'count'=>$_smarty_tpl->tpl_vars['settings']->value['f_file_count']), 0, false);
}
}
