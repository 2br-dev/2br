<?php
/* Smarty version 3.1.31, created on 2020-10-16 15:07:13
  from "C:\localserver\OpenServer\domains\2br.local\protected\app\core\admin-template\fields\upload.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f898cf1ee3334_59377943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9572824f98feb108b42a3f29904502914eba73e1' => 
    array (
      0 => 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\app\\core\\admin-template\\fields\\upload.tpl',
      1 => 1602568199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f898cf1ee3334_59377943 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
"><label class="file--upload"><div class="file--upload-placehoder">Прикрепить файл<?php if ($_smarty_tpl->tpl_vars['count']->value == 1) {?>ы<?php }?></div><div class="file--upload-button">Обзор</div><input type="file" accept="*" onchange="cp.fileChange(this)" <?php if ($_smarty_tpl->tpl_vars['count']->value == 1) {?>name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[]" multiple<?php } else { ?>name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }?> data-url="/<?php echo $_smarty_tpl->tpl_vars['ADMIN_DIR']->value;?>
/templates/js/upload/upload.php" id="fileupload_input_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"></label><?php }
}
