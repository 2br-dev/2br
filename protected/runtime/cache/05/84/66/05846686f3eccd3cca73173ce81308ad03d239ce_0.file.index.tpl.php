<?php
/* Smarty version 3.1.31, created on 2020-10-16 15:26:38
  from "C:\localserver\OpenServer\domains\2br.local\protected\app\core\admin-template\view\blocks\index\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f89917e946675_04688963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05846686f3eccd3cca73173ce81308ad03d239ce' => 
    array (
      0 => 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\app\\core\\admin-template\\view\\blocks\\index\\index.tpl',
      1 => 1602568199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f89917e946675_04688963 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table"><col><col width="200"><col width="150"><col width="150"><col width="120"><col width="65"><thead><tr><th colspan="6">Список зон блоков</th></tr></thead><tbody><tr><td class="h"><?php echo t('titles.name');?>
</td><td class="h">Код вывода</td><td class="h">Системное имя <span class="ness_color">*</span></td><td class="h">Шаблон страницы</td><td class="h">Блок активен</td><td class="h"></td></tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_form']->value, 'item', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?><tr><td><a href="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
/index/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/" title="Редактировать" class="module-item-link"><i class="zmdi zmdi-edit"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></td><td><span class="inner-copy j-clipboard" data-clipboard="zone('<?php echo $_smarty_tpl->tpl_vars['item']->value['sys_name'];?>
')">php</span><span class="inner-copy j-clipboard" data-clipboard="{zone item='<?php echo $_smarty_tpl->tpl_vars['item']->value['sys_name'];?>
'}">smarty</span><span class="inner-copy j-clipboard" data-clipboard="{{ zone('<?php echo $_smarty_tpl->tpl_vars['item']->value['sys_name'];?>
') }}">twig</span></td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['sys_name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['tid'];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['item']->value['visible']) {?>Да<?php } else { ?>Нет<?php }?></td><td class="tac"><a href="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
/index/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/" class="zmdi zmdi-edit" title="Редактировать"></a><a href="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
/index/del/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/" class="zmdi zmdi-delete remove-trigger" title="Удалить" onclick="return cp.dialog('Вы действительно хотите удалить зону?');" data-no-instant></a></td></tr><?php
}
} else {
?>
<tr><td colspan="5" class="center-middle">Зон нет</td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody></table><a href="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
/index/add/" class="button"><i class="zmdi zmdi-plus-circle"></i>Добавить зону</a><?php }
}
