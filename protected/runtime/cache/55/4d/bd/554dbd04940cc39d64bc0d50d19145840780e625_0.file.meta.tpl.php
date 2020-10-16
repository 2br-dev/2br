<?php
/* Smarty version 3.1.31, created on 2020-10-16 15:06:50
  from "C:\localserver\OpenServer\domains\2br.local\protected\themes\base\smarty\components\meta.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f898cda2c96d4_21538448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '554dbd04940cc39d64bc0d50d19145840780e625' => 
    array (
      0 => 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\themes\\base\\smarty\\components\\meta.tpl',
      1 => 1602568222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f898cda2c96d4_21538448 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_compress')) require_once 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\app\\libs\\smarty.plugins\\function.compress.php';
?>
<!DOCTYPE html>
<!-- (c) lnk. CELEBRO Studio | http://celebro.ru -->
<!--[if lt IE 7]><html class="ie6" lang="<?php echo $_smarty_tpl->tpl_vars['_page']->value['lang'];?>
"><![endif]--><!--[if IE 7]> <html class="ie7" lang="<?php echo $_smarty_tpl->tpl_vars['_page']->value['lang'];?>
"><![endif]--><!--[if IE 8]> <html class="ie8" lang="<?php echo $_smarty_tpl->tpl_vars['_page']->value['lang'];?>
"><![endif]--><!--[if IE 9]> <html class="ie9" lang="<?php echo $_smarty_tpl->tpl_vars['_page']->value['lang'];?>
"><![endif]--><!--[if gt IE 8]><!--><html class="no-js" itemscope="itemscope" itemtype="http://schema.org/<?php if (!isset($_smarty_tpl->tpl_vars['uri']->value[1])) {?>WebPage<?php } else { ?>ItemPage<?php }?>" lang="<?php echo $_smarty_tpl->tpl_vars['_page']->value['lang'];?>
"><!--<![endif]--><head><title itemprop="name"><?php echo $_smarty_tpl->tpl_vars['_meta']->value['title'];?>
</title><meta content="<?php echo $_smarty_tpl->tpl_vars['_meta']->value['description'];?>
" name="description" itemprop="description"><meta charset="utf-8"><meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"><meta content="on" http-equiv="cleartype"><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE"><meta name="format-detection" content="telephone=no"><meta name="format-detection" content="address=no"><meta name="HandheldFriendly" content="True"><?php if ($_smarty_tpl->tpl_vars['_csrf_token']->value) {?><meta content="<?php echo $_smarty_tpl->tpl_vars['_csrf_param']->value;?>
" name="csrf-param"><meta content="<?php echo $_smarty_tpl->tpl_vars['_csrf_token']->value;?>
" name="csrf-token"><?php }
echo smarty_function_compress(array('mode'=>'css','media'=>'all','source'=>array(array('file'=>'/fonts/fonts.css'),array('file'=>'/css/reset.css'),array('file'=>'/css/slick.css'),array('file'=>'/css/base.css'),array('file'=>'/css/drop_down_contacts.css'),array('file'=>'/css/header.css'),array('file'=>'/css/footer.css'))),$_smarty_tpl);?>
<meta content="<?php echo $_smarty_tpl->tpl_vars['_page']->value['robots'];?>
" name="robots"><meta content="<?php echo $_smarty_tpl->tpl_vars['_page']->value['lang'];?>
" itemprop="inLanguage"><!--<meta content="no" http-equiv="imagetoolbar"><meta content="public" http-equiv="Cache-Control"><meta content="max-age=3600, must-revalidate" http-equiv="Cache-Control">--><?php if (isset($_smarty_tpl->tpl_vars['pagination']->value['prev']) && $_smarty_tpl->tpl_vars['pagination']->value['prev'] !== '') {?><link rel="prev" href="?page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['prev'];?>
"><?php }
if (isset($_smarty_tpl->tpl_vars['pagination']->value['next']) && $_smarty_tpl->tpl_vars['pagination']->value['next'] !== '') {?><link rel="next" href="?page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['next'];?>
"><?php }?><meta name="application-name" content="<?php echo @constant('COMPANY_NAME');?>
"><meta name="yandex-verification" content="ee71d2946b620b71" /><link rel="home" href="/"><link rel="search" href="/search" title="<?php echo @constant('COMPANY_NAME');?>
" type="application/opensearchdescription+xml"><link rel="canonical" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_SERVER['REQUEST_URI'];?>
"><link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png"><link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png"><link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png"><link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png"><link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png"><link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png"><link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png"><link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png"><link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png"><link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png"><link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png"><link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png"><link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png"><link rel="manifest" href="/manifest.json"><meta name="msapplication-TileColor" content="#ffffff"><meta name="msapplication-TileImage" content="/ms-icon-144x144.png"><meta name="theme-color" content="#ffffff"><?php echo '<script'; ?>
>(function(d) { d.className = d.className.replace(/\bno-js/, ''); })(document.documentElement);<?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="/static/js/main.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="/js/jquery.colorbox-min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="//code.jivosite.com/widget.js" data-jv-id="2jdKHMSq8v" async><?php echo '</script'; ?>
><!--[if lt IE 9]><?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"><?php echo '</script'; ?>
><![endif]--></head><body class="page-<?php echo $_smarty_tpl->tpl_vars['_page']->value['system'];?>
" style="overflow: hidden"><!-- Yandex.Metrika counter -->
<?php echo '<script'; ?>
 type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(54729778, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
<?php echo '</script'; ?>
>
<noscript><div><img src="https://mc.yandex.ru/watch/54729778" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?php }
}
