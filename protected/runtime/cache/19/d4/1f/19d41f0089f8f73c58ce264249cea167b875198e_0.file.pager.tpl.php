<?php
/* Smarty version 3.1.31, created on 2020-10-16 15:06:57
  from "C:\localserver\OpenServer\domains\2br.local\protected\app\core\admin-template\system\pager.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f898ce113ad11_95306350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19d41f0089f8f73c58ce264249cea167b875198e' => 
    array (
      0 => 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\app\\core\\admin-template\\system\\pager.tpl',
      1 => 1602568199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f898ce113ad11_95306350 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\app\\vendors\\smarty\\smarty\\libs\\plugins\\function.math.php';
if (isset($_smarty_tpl->tpl_vars['pager_info']->value) && !empty($_smarty_tpl->tpl_vars['pager_info']->value)) {
$_smarty_tpl->_assignInScope('uri', $_SERVER['REQUEST_URI']);
if ($_smarty_tpl->tpl_vars['pager_info']->value['page_count'] != 1) {
if (!isset($_smarty_tpl->tpl_vars['pager_info']->value['advanced']) && !empty($_smarty_tpl->tpl_vars['pager_info']->value['arr_pages'])) {?><div class="pagination"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pager_info']->value['arr_pages'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
echo smarty_function_math(array('assign'=>'this_page','equation'=>"(a + 1)",'a'=>$_smarty_tpl->tpl_vars['item']->value['point']),$_smarty_tpl);?>
<a class="<?php if ($_smarty_tpl->tpl_vars['pager_info']->value['curr_page'] == $_smarty_tpl->tpl_vars['item']->value['point']) {?>pagination-current<?php } else { ?>pagination-link<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['qstring'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['this_page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['this_page']->value;?>
</a><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div><?php } elseif (!empty($_smarty_tpl->tpl_vars['pager_info']->value['advanced'])) {?><div class="pagination"><a class="button button-prev" href="<?php echo $_smarty_tpl->tpl_vars['pager_info']->value['first_page'];?>
">Первая</a><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pager_info']->value['arr_pages'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
if (is_numeric($_smarty_tpl->tpl_vars['item']->value['point'])) {
echo smarty_function_math(array('assign'=>'this_page','equation'=>"(a + 1)",'a'=>$_smarty_tpl->tpl_vars['item']->value['point']),$_smarty_tpl);?>
<a class="<?php if ($_smarty_tpl->tpl_vars['pager_info']->value['curr_page'] == $_smarty_tpl->tpl_vars['item']->value['point']) {?>pagination-current<?php } else { ?>pagination-link<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['qstring'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['this_page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['this_page']->value;?>
</a><?php } else { ?><span class="pagination-empty" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['point'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['point'];?>
</span><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo smarty_function_math(array('assign'=>'last_j','equation'=>"(a-1)",'a'=>$_smarty_tpl->tpl_vars['pager_info']->value['page_count']),$_smarty_tpl);?>
<a class="button button-next" href="<?php echo $_smarty_tpl->tpl_vars['pager_info']->value['last_page'];?>
">Последняя</a></div><?php }
}
}
}
}
