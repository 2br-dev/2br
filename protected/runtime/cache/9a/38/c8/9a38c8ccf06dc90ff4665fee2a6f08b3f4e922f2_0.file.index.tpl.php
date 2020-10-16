<?php
/* Smarty version 3.1.31, created on 2020-10-16 15:26:27
  from "C:\localserver\OpenServer\domains\2br.local\protected\app\core\admin-template\view\lists\index\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f8991734e2811_53664318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a38c8ccf06dc90ff4665fee2a6f08b3f4e922f2' => 
    array (
      0 => 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\app\\core\\admin-template\\view\\lists\\index\\index.tpl',
      1 => 1602568199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8991734e2811_53664318 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table" id="meta_data"><col><col width="180"><col width="200"><col width="65"><thead><tr><th colspan="4"><?php echo t('titles.lists');?>
</th></tr></thead><tbody><tr><td class="h"><?php echo t('titles.list.name');?>
</td><td class="h">Системное имя (bind)</td><td class="h">Кол-во элементов в списке</td><td class="h"></td></tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mdd_list']->value, 'item', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?><tr><td><a href="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['list_name'];?>
/" title="Редактировать" class="module-item-link"><i class="zmdi zmdi-edit"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['list_name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
</td><td class="tac"><a href="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['list_name'];?>
/" class="zmdi zmdi-edit" title="Редактировать"></a><a href="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
/del/<?php echo $_smarty_tpl->tpl_vars['item']->value['list_name'];?>
/" class="zmdi zmdi-delete remove-trigger" title="Удалить" onclick="return cp.dialog('Вы действительно хотите удалить модуль и все что связанно с ним?');" data-no-instant></a></td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody></table><div class="button-container clearfix"><a href="<?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
/add/" class="button button-blue"><i class="zmdi zmdi-plus-circle"></i>Добавить новый список</a></div>
<?php }
}
