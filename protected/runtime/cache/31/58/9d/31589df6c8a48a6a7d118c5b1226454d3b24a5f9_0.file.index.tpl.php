<?php
/* Smarty version 3.1.31, created on 2020-10-16 15:26:19
  from "C:\localserver\OpenServer\domains\2br.local\protected\app\core\admin-template\view\seo\index\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f89916b0c8b38_07973329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31589df6c8a48a6a7d118c5b1226454d3b24a5f9' => 
    array (
      0 => 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\app\\core\\admin-template\\view\\seo\\index\\index.tpl',
      1 => 1602568199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/controll.tpl' => 6,
    'file:system/editor.tpl' => 3,
    'file:system/group.tpl' => 2,
  ),
),false)) {
function content_5f89916b0c8b38_07973329 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="button-container"><a href="/<?php echo $_smarty_tpl->tpl_vars['ADMIN_DIR']->value;?>
/seo/scan"class="button button-blue" data-no-instant><i class="zmdi zmdi-ok-circle"></i>Начать сканирование</a></div><form method="post"><input type="hidden" value="generate" name="action"><table class="table"><col width="200"><col><tbody><tr><td class="h">Адрес сайта</td><td><input value="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['website'])) {
echo stripslashes($_smarty_tpl->tpl_vars['settings']->value['website']);
}?>" size="50" name="website" class="required"></td></tr><tr><td class="h">Сообшить о карте</td><td><div class="controlls-wrapper"><?php if (isset($_smarty_tpl->tpl_vars['ping']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ping']->value, 'text', false, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['text']->value) {
$_smarty_tpl->_assignInScope('checked', false);
if (isset($_smarty_tpl->tpl_vars['settings']->value['ping']) && in_array($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['settings']->value['ping'])) {
$_smarty_tpl->_assignInScope('checked', true);
}
$_smarty_tpl->_subTemplateRender("file:system/controll.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"checkbox",'name'=>"ping[]",'checked'=>$_smarty_tpl->tpl_vars['checked']->value,'value'=>$_smarty_tpl->tpl_vars['value']->value,'text'=>$_smarty_tpl->tpl_vars['text']->value), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div></td></tr><tr><td class="h">Сжать файл</td><td><?php $_smarty_tpl->_assignInScope('checked', false);
if (isset($_smarty_tpl->tpl_vars['settings']->value['compress_sitemap']) && $_smarty_tpl->tpl_vars['settings']->value['compress_sitemap'] == '1') {
$_smarty_tpl->_assignInScope('checked', true);
}
$_smarty_tpl->_subTemplateRender("file:system/controll.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"checkbox",'name'=>"compress_sitemap",'checked'=>$_smarty_tpl->tpl_vars['checked']->value,'value'=>1,'text'=>"Сжимать файл"), 0, true);
?>
</td></tr><tr><td class="h">Файл карты сайта</td><td><input value="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['sitemap_file'])) {
echo stripslashes($_smarty_tpl->tpl_vars['settings']->value['sitemap_file']);
}?>" size="50" class="w50" name="sitemap_file"></td></tr><tr><td class="h">Сжатый файл</td><td><input value="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['compress_file'])) {
echo stripslashes($_smarty_tpl->tpl_vars['settings']->value['compress_file']);
}?>" size="50" class="w50" name="compress_file"></td></tr><tr><td class="h">Игнорировать разделы</td><td><?php $_smarty_tpl->_assignInScope('disallow_dir', '');
if (isset($_smarty_tpl->tpl_vars['settings']->value['disallow_dir'])) {
$_smarty_tpl->_assignInScope('disallow_dir', stripslashes($_smarty_tpl->tpl_vars['settings']->value['disallow_dir']));
}
$_smarty_tpl->_subTemplateRender("file:system/editor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('editor_type'=>"codemirror",'editor_id'=>"disallow_dir",'editor_name'=>"disallow_dir",'editor_value'=>$_smarty_tpl->tpl_vars['disallow_dir']->value,'editor_cont'=>$_smarty_tpl->tpl_vars['disallow_dir']->value,'editor_hightlight'=>"shell"), 0, false);
?>
</td></tr><tr><td class="h">Игнорировать файлы</td><td><?php $_smarty_tpl->_assignInScope('disallow_file', '');
if (isset($_smarty_tpl->tpl_vars['settings']->value['disallow_file'])) {
$_smarty_tpl->_assignInScope('disallow_file', stripslashes($_smarty_tpl->tpl_vars['settings']->value['disallow_file']));
}
$_smarty_tpl->_subTemplateRender("file:system/editor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('editor_type'=>"codemirror",'editor_id'=>"disallow_file",'editor_name'=>"disallow_file",'editor_value'=>$_smarty_tpl->tpl_vars['disallow_file']->value,'editor_cont'=>$_smarty_tpl->tpl_vars['disallow_file']->value,'editor_hightlight'=>"shell"), 0, true);
?>
</td></tr><tr><td class="h">Игнорировать ключи в url</td><td><?php $_smarty_tpl->_assignInScope('disallow_key', '');
if (isset($_smarty_tpl->tpl_vars['settings']->value['disallow_key'])) {
$_smarty_tpl->_assignInScope('disallow_key', stripslashes($_smarty_tpl->tpl_vars['settings']->value['disallow_key']));
}
$_smarty_tpl->_subTemplateRender("file:system/editor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('editor_type'=>"codemirror",'editor_id'=>"disallow_key",'editor_name'=>"disallow_key",'editor_value'=>$_smarty_tpl->tpl_vars['disallow_key']->value,'editor_cont'=>$_smarty_tpl->tpl_vars['disallow_key']->value,'editor_hightlight'=>"shell"), 0, true);
?>
</td></tr><tr><td class="h">Последние изменения</td><td><?php if (isset($_smarty_tpl->tpl_vars['lastmod']->value)) {?><div class="group-label clearfix"><p class="mb10">Даты последнего изменения:</p><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lastmod']->value, 'text', false, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['text']->value) {
$_smarty_tpl->_subTemplateRender("file:system/controll.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"radio",'name'=>"lastmod",'needle'=>$_smarty_tpl->tpl_vars['settings']->value['lastmod'],'value'=>$_smarty_tpl->tpl_vars['value']->value,'text'=>$_smarty_tpl->tpl_vars['text']->value), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div><?php }
if (isset($_smarty_tpl->tpl_vars['lastmod_format']->value)) {?><div class="group-label mb0 clearfix"><p class="mb10">Формат времени:</p><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lastmod_format']->value, 'text', false, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['text']->value) {
$_smarty_tpl->_subTemplateRender("file:system/controll.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"radio",'name'=>"lastmod_format",'needle'=>$_smarty_tpl->tpl_vars['settings']->value['lastmod_format'],'value'=>$_smarty_tpl->tpl_vars['value']->value,'text'=>$_smarty_tpl->tpl_vars['text']->value), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div><?php }?></td></tr><tr><td class="h">Приоритет</td><td><?php if (isset($_smarty_tpl->tpl_vars['priority']->value)) {?><div class="group-label mb0 clearfix"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['priority']->value, 'text', false, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['text']->value) {
$_smarty_tpl->_subTemplateRender("file:system/controll.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"radio",'name'=>"priority",'needle'=>$_smarty_tpl->tpl_vars['settings']->value['priority'],'value'=>$_smarty_tpl->tpl_vars['value']->value,'text'=>$_smarty_tpl->tpl_vars['text']->value), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div><?php }
if (isset($_smarty_tpl->tpl_vars['priority_fixed']->value)) {
$_smarty_tpl->_subTemplateRender("file:system/group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"radio",'check'=>$_smarty_tpl->tpl_vars['settings']->value['priority_fixed'],'name'=>"priority_fixed",'list'=>$_smarty_tpl->tpl_vars['priority_fixed']->value), 0, false);
}?></td></tr><tr><td class="h">Частота изменения</td><td><?php if (isset($_smarty_tpl->tpl_vars['changefreq']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['changefreq']->value, 'text', false, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['text']->value) {
$_smarty_tpl->_subTemplateRender("file:system/controll.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"radio",'name'=>"changefreq",'needle'=>$_smarty_tpl->tpl_vars['settings']->value['changefreq'],'value'=>$_smarty_tpl->tpl_vars['value']->value,'text'=>$_smarty_tpl->tpl_vars['text']->value), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if (isset($_smarty_tpl->tpl_vars['changefreq_fixed']->value)) {
$_smarty_tpl->_subTemplateRender("file:system/group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"radio",'check'=>$_smarty_tpl->tpl_vars['settings']->value['changefreq_fixed'],'name'=>"changefreq_fixed",'list'=>$_smarty_tpl->tpl_vars['changefreq_fixed']->value), 0, true);
}?></td></tr></tbody></table><div class="button-container"><button class="button button-green" type="submit"><i class="zmdi zmdi-save"></i>Сохранить настройки</button><a class="button button-red" href="/<?php echo $_smarty_tpl->tpl_vars['ADMIN_DIR']->value;?>
/seo/settings/"><i class="zmdi zmdi-arrow-left"></i>Отмена</a></div></form><?php }
}
