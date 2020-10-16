<?php
/* Smarty version 3.1.31, created on 2020-10-16 12:11:12
  from "C:\localserver\OpenServer\domains\2br.local\protected\themes\base\smarty\components\scripts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f8963b0c53597_89110158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35d4a6dc6518b44f7e8033b987579ec68f2a9f8b' => 
    array (
      0 => 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\themes\\base\\smarty\\components\\scripts.tpl',
      1 => 1602568222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8963b0c53597_89110158 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_compress')) require_once 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\app\\libs\\smarty.plugins\\function.compress.php';
?>
<!-- <?php echo '<script'; ?>
 src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"><?php echo '</script'; ?>
> --><?php echo smarty_function_compress(array('attr'=>'data-no-instant','mode'=>'js','source'=>array(array('file'=>'/js/vendor.min.js'),array('file'=>'/js/app.min.js'),array('file'=>'/js/slick.min.js'),array('file'=>'/js/loader.js'))),$_smarty_tpl);
if (isset($_smarty_tpl->tpl_vars['suggestions']->value)) {?><!--[if lt IE 10]><?php echo '<script'; ?>
 type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"><?php echo '</script'; ?>
><![endif]--><?php echo '<script'; ?>
 type="text/javascript" src="https://dadata.ru/static/js/lib/jquery.suggestions-15.12.min.js"><?php echo '</script'; ?>
><?php }?></body></html><?php }
}
