<!DOCTYPE html>
<!-- (c) lnk. CELEBRO Studio | http://celebro.ru -->
{strip}
<!--[if lt IE 7]><html class="ie6" lang="{$_page.lang}"><![endif]-->
<!--[if IE 7]>   <html class="ie7" lang="{$_page.lang}"><![endif]-->
<!--[if IE 8]>   <html class="ie8" lang="{$_page.lang}"><![endif]-->
<!--[if IE 9]>   <html class="ie9" lang="{$_page.lang}"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" itemscope="itemscope" itemtype="http://schema.org/{if !isset($uri[1])}WebPage{else}ItemPage{/if}" lang="{$_page.lang}">
<!--<![endif]-->
<head>
	<title itemprop="name">{$_meta.title}</title>
	<meta content="{$_meta.description}" name="description" itemprop="description">

	<meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
	<meta content="on" http-equiv="cleartype">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<meta name="format-detection" content="telephone=no">
	<meta name="format-detection" content="address=no">
	<meta name="HandheldFriendly" content="True">
	
	{if $_csrf_token nocache}
	<meta content="{$_csrf_param}" name="csrf-param">
	<meta content="{$_csrf_token}" name="csrf-token">
	{/if}

	{* type   = 'inline' *}

	{compress
		mode   = 'css'
		media  = 'all'
		source = [
			[ file => '/fonts/fonts.css' ],
			[ file => '/css/reset.css' ],
			[ file => '/css/slick.css' ],
			[ file => '/css/base.css' ],
			[ file => '/css/drop_down_contacts.css' ],
			[ file => '/css/header.css' ],
			[ file => '/css/footer.css' ]
		]
	}

    <meta content="{$_page.robots}" name="robots">
	<meta content="{$_page.lang}" itemprop="inLanguage">
	
	<!--
	<meta content="no" http-equiv="imagetoolbar">
	<meta content="public" http-equiv="Cache-Control">
	<meta content="max-age=3600, must-revalidate" http-equiv="Cache-Control">
 	-->	
	
	{if isset($pagination.prev) && $pagination.prev !== ''}
		<link rel="prev" href="?page={$pagination.prev}">
	{/if}

	{if isset($pagination.next) && $pagination.next !== ''}
		<link rel="next" href="?page={$pagination.next}">
	{/if}

	<meta name="application-name" content="{$smarty.const.COMPANY_NAME}">

	<meta name="yandex-verification" content="ee71d2946b620b71" />

	<link rel="home" href="/">
	<link rel="search" href="/search" title="{$smarty.const.COMPANY_NAME}" type="application/opensearchdescription+xml">
	<link rel="canonical" href="http://{$smarty.server.HTTP_HOST nocache}{$smarty.server.REQUEST_URI nocache}">
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	
	<script>(function(d) { d.className = d.className.replace(/\bno-js/, ''); })(document.documentElement);</script>
	<script type="text/javascript" src="/static/js/main.js"></script>

	{* Colorbox *}
	<script src="/js/jquery.colorbox-min.js"></script>
    {* Jivosite - онлайн консультант для сайта *}
	<script src="//code.jivosite.com/widget.js" data-jv-id="2jdKHMSq8v" async></script>

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>
<body class="page-{$_page.system}" style="overflow: hidden">
<!-- Yandex.Metrika counter -->
{literal}
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(54729778, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/54729778" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
{/literal}
{/strip}