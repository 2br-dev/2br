<?php
/* Smarty version 3.1.31, created on 2020-10-16 15:26:20
  from "C:\localserver\OpenServer\domains\2br.local\protected\app\core\admin-template\view\locale\index\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f89916c4c9925_83096539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67a0a87fa9883523f06d2f4f7d7f89ed8ad4c3a6' => 
    array (
      0 => 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\app\\core\\admin-template\\view\\locale\\index\\index.tpl',
      1 => 1602568199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/pager.tpl' => 1,
  ),
),false)) {
function content_5f89916c4c9925_83096539 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="managing"><div class="managing__start"><div class="managing__item"><form action="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
/search" class="locale-search"><input name="word" placeholder="<?php echo t('a.word.or.translation');?>
" class="locale-search__input" value="<?php echo $_smarty_tpl->tpl_vars['find_value']->value;?>
"><button type="submit" class="locale-search__button"><i class="zmdi zmdi-search"></i></button></form></div><div class="managing__item"><a href="/<?php echo $_smarty_tpl->tpl_vars['ADMIN_DIR']->value;?>
/locale/add" class="button button-green"><i class="zmdi zmdi-plus-circle"></i><?php echo t('add.something',array('string'=>t('simple.word')));?>
</a></div><?php if (!empty($_GET)) {?><div class="managing__item"><a href="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
" class="button"><i class="zmdi zmdi-format-clear-all"></i>Сбросить фильтры</a></div><?php }?><div class="managing__item catalog-disable" id="remove-button"><button type="button" class="button button-red"><i class="zmdi zmdi-delete"></i>Удалить выбранные переводы</button></div></div><div class="managing__end"><div class="managing__sortable"><span class="managing__sortable__label"><?php echo t('label.sort');?>
:</span><div class="managing__sortable__select"><select name="sort"><option value="">По новизне</option><option value="">По алфавиту</option><option value="">Только системные</option><option value="">Только пользовательские</option></select></div></div><div class="managing__limit"><span class="managing__limit__label"><?php echo t('on.the.page');?>
:</span><div class="managing__limit__select"><select name="limit" onchange="shopping.setLimit('discounts', this)"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page_count']->value, 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['limit']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div></div></div><table class="table"><colgroup><col width="250"><col><col width="140"><col width="85"><col width="60"></colgroup><thead><tr><th>Ключ</th><th><?php echo t('translations');?>
</th><th>Примеры</th><th colspan="2">Группа</th></tr></thead><tbody><?php if ($_smarty_tpl->tpl_vars['dictionary_list']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dictionary_list']->value, 'row', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['row']->value) {
?><tr><td><a href="/<?php echo $_smarty_tpl->tpl_vars['ADMIN_DIR']->value;?>
/locale/edit/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" title="Редактировать"><span class="zmdi zmdi-edit"></span> <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</a></td><td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value['list'], 'value', false, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value => $_smarty_tpl->tpl_vars['value']->value) {
?><span class="locale__item"><i class="flag flag_<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
"></i> <span class="locale__item__value"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</span></span><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</td><td><span class="inner-copy j-clipboard" data-clipboard="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">key</span><span class="inner-copy j-clipboard" data-clipboard="t('<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
')">php</span><span class="inner-copy j-clipboard" data-clipboard="{{ t('<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
') }}">twig</span><span class="inner-copy j-clipboard" data-clipboard="{t('<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
')}">smarty</span><span class="inner-copy j-clipboard" data-clipboard="{t('<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
')}">text</span></td><td><?php if ($_smarty_tpl->tpl_vars['row']->value['system']) {?><span class="label orange"><?php echo t('systematic');?>
</span><?php }?></td><td class="tac"><a href="/<?php echo $_smarty_tpl->tpl_vars['ADMIN_DIR']->value;?>
/locale/edit/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="zmdi zmdi-edit" title="Редактировать"></a><a href="/<?php echo $_smarty_tpl->tpl_vars['ADMIN_DIR']->value;?>
/locale/del/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="zmdi zmdi-delete remove-trigger" title="Удалить" onclick="return cp.dialog('Вы действительно хотите удалить поле?')" data-no-instant></a></td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?><tr><td colspan="5">--</td></tr><?php }?></tbody></table><?php $_smarty_tpl->_subTemplateRender("file:system/pager.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
