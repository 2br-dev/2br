<?php
/* Smarty version 3.1.31, created on 2020-10-16 15:07:13
  from "C:\localserver\OpenServer\domains\2br.local\protected\app\core\admin-template\fields\input.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f898cf1ea55d9_28610558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72256f10c27f4b246eac241eb222153c01fc80d1' => 
    array (
      0 => 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\app\\core\\admin-template\\fields\\input.tpl',
      1 => 1602568199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f898cf1ea55d9_28610558 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="<?php echo $_smarty_tpl->tpl_vars['class_name']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php }
}
