<?php
/* Smarty version 3.1.31, created on 2020-10-16 15:09:42
  from "C:\localserver\OpenServer\domains\2br.local\protected\app\core\admin-template\fields\int.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f898d86b342e0_82284725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9acc03022e659cf1632d30313d1d94ad2a102527' => 
    array (
      0 => 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\app\\core\\admin-template\\fields\\int.tpl',
      1 => 1602568199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f898d86b342e0_82284725 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="integer <?php echo $_smarty_tpl->tpl_vars['class_name']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php }
}
