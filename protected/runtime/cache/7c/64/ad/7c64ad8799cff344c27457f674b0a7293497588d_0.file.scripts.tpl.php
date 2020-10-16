<?php
/* Smarty version 3.1.31, created on 2020-08-31 13:28:58
  from "/home/b/burdilo/temp.2-br.ru/public_html/protected/themes/base/smarty/components/scripts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f4cd0ea24c731_85291731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c64ad8799cff344c27457f674b0a7293497588d' => 
    array (
      0 => '/home/b/burdilo/temp.2-br.ru/public_html/protected/themes/base/smarty/components/scripts.tpl',
      1 => 1563258771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4cd0ea24c731_85291731 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_compress')) require_once '/home/b/burdilo/temp.2-br.ru/public_html/protected/app/libs/smarty.plugins/function.compress.php';
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
