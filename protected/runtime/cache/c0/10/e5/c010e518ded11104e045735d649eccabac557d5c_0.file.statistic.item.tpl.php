<?php
/* Smarty version 3.1.31, created on 2020-10-16 15:28:42
  from "C:\localserver\OpenServer\domains\2br.local\protected\app\core\admin-template\view\shopping\orders\statistic.item.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f8991fa8dafc8_42485423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c010e518ded11104e045735d649eccabac557d5c' => 
    array (
      0 => 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\app\\core\\admin-template\\view\\shopping\\orders\\statistic.item.tpl',
      1 => 1602568199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8991fa8dafc8_42485423 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_to_money')) require_once 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\app\\libs\\smarty.plugins\\modifier.to_money.php';
?>
<tr class="statistic__row"><td class="statistic__item statistic__item--border"><span class="statistic__item__name"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
:</span></td><td class="statistic__item statistic__item--push"><?php echo $_smarty_tpl->tpl_vars['list']->value['count'];?>
</td><td class="statistic__item statistic__item--push"><?php if ($_smarty_tpl->tpl_vars['list']->value['cost']) {?><strong><?php echo smarty_modifier_to_money($_smarty_tpl->tpl_vars['list']->value['cost']);?>
</strong> <span class="ruble">p</span><?php } else { ?>-<?php }?></td><td class="statistic__item statistic__item--push"><?php if ($_smarty_tpl->tpl_vars['list']->value['average']) {?><strong><?php echo smarty_modifier_to_money($_smarty_tpl->tpl_vars['list']->value['average']);?>
</strong> <span class="ruble">p</span><?php } else { ?>-<?php }?></td><td class="statistic__item statistic__item--push"><?php echo $_smarty_tpl->tpl_vars['list']->value['products'];?>
 / <?php echo $_smarty_tpl->tpl_vars['list']->value['unique'];?>
</td><td class="statistic__item statistic__item--pure"><?php if ($_smarty_tpl->tpl_vars['list']->value['hits']) {?><button type="button" class="statistic__button" onclick="orders.toggle(this, 'hits-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
', 'is-visible', true)">Показать</button><div class="statistic__block" id="hits-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><table class="statistic__hits"><colgroup><col width="75%"><col width="20%"></colgroup><thead><tr><th class="statistic__hits__head">Наименование</th><th class="statistic__hits__head statistic__hits__head--push">Продаж</th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value['hits'], 'hit', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['hit']->value) {
?><tr><td class="statistic__hits__item"><a href="/<?php echo $_smarty_tpl->tpl_vars['ADMIN_DIR']->value;?>
/shopping/catalog/edit/<?php echo $_smarty_tpl->tpl_vars['hit']->value['id'];?>
" class="statistic__hits__product" target="_blank"><?php echo $_smarty_tpl->tpl_vars['hit']->value['name'];?>
</a></td><td class="statistic__hits__item statistic__hits__item--push"><?php echo $_smarty_tpl->tpl_vars['hit']->value['count'];?>
</td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody></table></div><?php }?></td></tr>
<?php }
}
