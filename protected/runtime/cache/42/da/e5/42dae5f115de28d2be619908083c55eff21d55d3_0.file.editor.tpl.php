<?php
/* Smarty version 3.1.31, created on 2020-10-16 15:07:13
  from "C:\localserver\OpenServer\domains\2br.local\protected\app\core\admin-template\fields\editor.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f898cf1eefff5_93453468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42dae5f115de28d2be619908083c55eff21d55d3' => 
    array (
      0 => 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\app\\core\\admin-template\\fields\\editor.tpl',
      1 => 1602568199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/editor.tpl' => 1,
  ),
),false)) {
function content_5f898cf1eefff5_93453468 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['settings']->value['f_editor_mode'])) {?>
    <?php $_smarty_tpl->_assignInScope('mode', $_smarty_tpl->tpl_vars['settings']->value['f_editor_mode']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('mode', "php");
}?>

<?php $_smarty_tpl->_subTemplateRender("file:system/editor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('editor_type'=>$_smarty_tpl->tpl_vars['settings']->value['f_editor'],'editor_id'=>$_smarty_tpl->tpl_vars['name']->value,'editor_name'=>$_smarty_tpl->tpl_vars['name']->value,'editor_value'=>$_smarty_tpl->tpl_vars['value']->value,'editor_cont'=>$_smarty_tpl->tpl_vars['value']->value,'editor_hightlight'=>$_smarty_tpl->tpl_vars['mode']->value), 0, false);
}
}
