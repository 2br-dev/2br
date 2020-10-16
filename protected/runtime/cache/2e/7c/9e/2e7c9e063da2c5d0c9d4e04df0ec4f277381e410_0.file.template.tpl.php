<?php
/* Smarty version 3.1.31, created on 2020-10-16 15:28:42
  from "C:\localserver\OpenServer\domains\2br.local\protected\app\core\admin-template\view\shopping\orders\template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f8991fa8b70a5_20260541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e7c9e063da2c5d0c9d4e04df0ec4f277381e410' => 
    array (
      0 => 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\app\\core\\admin-template\\view\\shopping\\orders\\template.tpl',
      1 => 1602568199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/controll.tpl' => 2,
  ),
),false)) {
function content_5f8991fa8b70a5_20260541 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/html" id="tpl_status_payment"><div class="popover" id="popover-status_payment"><span class="popover__triangle"></span><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings']->value['status_payment'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?><li><?php $_smarty_tpl->_subTemplateRender("file:system/controll.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"radio",'needle'=>"0",'addclass'=>"controll_fill",'name'=>"payment[]",'value'=>$_smarty_tpl->tpl_vars['order']->value['value'],'text'=>$_smarty_tpl->tpl_vars['order']->value['variable']), 0, true);
?>
</li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul></div><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/html" id="tpl_status_delivery"><div class="popover" id="popover-status_delivery"><span class="popover__triangle"></span><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings']->value['status_delivery'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?><li><?php $_smarty_tpl->_subTemplateRender("file:system/controll.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"radio",'needle'=>"0",'addclass'=>"controll_fill",'name'=>"delivery[]",'value'=>$_smarty_tpl->tpl_vars['order']->value['value'],'text'=>$_smarty_tpl->tpl_vars['order']->value['variable']), 0, true);
?>
</li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul></div><?php echo '</script'; ?>
>





<?php }
}
