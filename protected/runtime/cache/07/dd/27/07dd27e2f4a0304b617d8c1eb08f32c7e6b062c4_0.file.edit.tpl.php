<?php
/* Smarty version 3.1.31, created on 2020-10-16 15:29:10
  from "C:\localserver\OpenServer\domains\2br.local\protected\app\core\admin-template\view\modules\index\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f899216a94338_43595663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07dd27e2f4a0304b617d8c1eb08f32c7e6b062c4' => 
    array (
      0 => 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\app\\core\\admin-template\\view\\modules\\index\\edit.tpl',
      1 => 1602568199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/buttons.tpl' => 1,
  ),
),false)) {
function content_5f899216a94338_43595663 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_GET['msg']) && $_GET['msg'] == "apply") {?><div class="apply">Данные были успешно сохранены!</div><?php }?><form method="post" id="form_mdd"><input type="hidden" name="module_action" value="edit"><?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/_module.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/_fields_module_edit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender("file:system/buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</form><?php }
}
