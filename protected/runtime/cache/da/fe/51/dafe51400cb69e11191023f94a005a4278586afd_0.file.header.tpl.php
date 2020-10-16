<?php
/* Smarty version 3.1.31, created on 2020-08-31 13:28:58
  from "/home/b/burdilo/temp.2-br.ru/public_html/protected/themes/base/smarty/components/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f4cd0ea21d7f6_58634349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dafe51400cb69e11191023f94a005a4278586afd' => 
    array (
      0 => '/home/b/burdilo/temp.2-br.ru/public_html/protected/themes/base/smarty/components/header.tpl',
      1 => 1584691936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4cd0ea21d7f6_58634349 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header class="header"><div class="header__body app__center"><!--  --><a href="/" class="header__box-logo"><svg class="header__box-logo_img"><use xlink:href="/images/logo_sprite.svg#logo"></use></svg></a><div class="header__scroll" id="scroll_label"><div class="header__scroll_body"><img src="/images/icons/icon_arrow_up.svg" alt="" class="header__scroll_arrow header__scroll_arrow-up"><p class="header__scroll_label header__scroll_label-up">Контакты</p></div></div><!--  --><a class="header__brif-btn" id="brif">Заполнить бриф</a><!--  --><?php if ($_SESSION['user_id'] > 0) {?><a href="/lk" class="header__lk-link"><?php echo $_SESSION['user_name'];?>
</a><?php } else { ?><a id="open_form" class="header__lk-link">Войти в кабинет</a><?php }?><!--  --><div class="header__btn" id="burger_menu_btn" ready="1"><div class="header__btn_line header__btn_line-N1"></div><div class="header__btn_line header__btn_line-N2"></div><div class="header__btn_line header__btn_line-N3"></div></div><!--  --><nav class="header__menu" id="menu"><div class="header__menu_overlay"></div><div class="header__menu_center"><div class="header__menu_nav-box"><a href="/raboty" class="header__menu_item <?php if ($_smarty_tpl->tpl_vars['uri']->value[0] === 'raboty') {?>header__menu_item-active<?php }?>">Работы</a><a href="/uslugi" class="header__menu_item <?php if ($_smarty_tpl->tpl_vars['uri']->value[0] === 'uslugi') {?>header__menu_item-active<?php }?>">Услуги</a><a href="/sozdanie-sajtov" class="header__menu_item <?php if ($_smarty_tpl->tpl_vars['uri']->value[0] === 'sozdanie-sajtov') {?>header__menu_item-active<?php }?>">Создание сайтов</a><a href="/brunch-ot-2br" class="header__menu_item <?php if ($_smarty_tpl->tpl_vars['uri']->value[0] === 'brunch-ot-2br') {?>header__menu_item-active<?php }?>">Brunch от 2Br</a><a href="/agenstvo" class="header__menu_item <?php if ($_smarty_tpl->tpl_vars['uri']->value[0] === 'agenstvo') {?>header__menu_item-active<?php }?>">Агентство</a><a href="/vakansii" class="header__menu_item <?php if ($_smarty_tpl->tpl_vars['uri']->value[0] === 'vakansii') {?>header__menu_item-active<?php }?>">Вакансии</a></div><div class="header__menu_bottom"><a class="header__menu_item header__menu_item-desctop" id="contacts">Контакты</a><a href="/kontakty" class="header__menu_item header__menu_item-mobile">Контакты</a><a href="tel: +7 (861) 243-20-33" class="header__menu_item header__menu_item-phone">+7 (861) 243-20-33</a></div><div class="header__menu_bottom header__menu_bottom-social"><div class="header__menu_social"><a target="blank" href="https://www.instagram.com/2br_krd/" class="header__menu_social_icon header__menu_social_icon-inst"></a><a target="blank" href="https://ru-ru.facebook.com/2br.brightbrand/" class="header__menu_social_icon header__menu_social_icon-fb"></a><a target="blank" href="tg://resolve?domain=@BrBr_2Br" class="header__menu_social_icon header__menu_social_icon-telegram"></a><a target="blank" href="https://api.whatsapp.com/send?phone=89882432033" class="header__menu_social_icon header__menu_social_icon-wa"></a></div></div></div></nav></div></header><!--  --><?php echo '<script'; ?>
 src="/js/header.js"><?php echo '</script'; ?>
><!--  --><?php }
}
