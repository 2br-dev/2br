{strip}
<header class="header">
	<div class="header__body app__center">
		<!--  -->
		<a href="/" class="header__box-logo">
			<svg class="header__box-logo_img">
				<use xlink:href="/images/logo_sprite.svg#logo"></use>
			</svg>
		</a>
		<div class="header__scroll" id="scroll_label">
			<div class="header__scroll_body">
				<img src="/images/icons/icon_arrow_up.svg" alt="" class="header__scroll_arrow header__scroll_arrow-up">
				<p class="header__scroll_label header__scroll_label-up">Контакты</p>
			</div>
		</div>
		<!--  -->
		<a class="header__brif-btn" id="brif">Заполнить бриф</a>
		<!--  -->
		{if $smarty.session.user_id > 0}
			<a href="/lk" class="header__lk-link">{$smarty.session.user_name}</a>
		{else}
			<a id="open_form" class="header__lk-link">Войти в кабинет</a>
		{/if}
		<!--  -->
		<div class="header__btn" id="burger_menu_btn" ready="1">
			<div class="header__btn_line header__btn_line-N1"></div>
			<div class="header__btn_line header__btn_line-N2"></div>
			<div class="header__btn_line header__btn_line-N3"></div>
		</div>
		<!--  -->
		<nav class="header__menu" id="menu">
			<div class="header__menu_overlay"></div>
			<div class="header__menu_center">
				<div class="header__menu_nav-box">
					<a href="/raboty" class="header__menu_item {if $uri[0] === 'raboty'}header__menu_item-active{/if}">Работы</a>
					<a href="/uslugi" class="header__menu_item {if $uri[0] === 'uslugi'}header__menu_item-active{/if}">Услуги</a>
					<a href="/sozdanie-sajtov" class="header__menu_item {if $uri[0] === 'sozdanie-sajtov'}header__menu_item-active{/if}">Создание сайтов</a>
					<a href="/brunch-ot-2br" class="header__menu_item {if $uri[0] === 'brunch-ot-2br'}header__menu_item-active{/if}">Brunch от 2Br</a>
					<a href="/agenstvo" class="header__menu_item {if $uri[0] === 'agenstvo'}header__menu_item-active{/if}">Агентство</a>
					<a href="/vakansii" class="header__menu_item {if $uri[0] === 'vakansii'}header__menu_item-active{/if}">Вакансии</a>
				</div>
				<div class="header__menu_bottom">
					<a class="header__menu_item header__menu_item-desctop" id="contacts">Контакты</a>
					<a href="/kontakty" class="header__menu_item header__menu_item-mobile">Контакты</a>
					<a href="tel: +7 (861) 243-20-33" class="header__menu_item header__menu_item-phone">+7 (861) 243-20-33</a>
				</div>
				<div class="header__menu_bottom header__menu_bottom-social">
					<div class="header__menu_social">
						<a target="blank" href="https://www.instagram.com/2br_krd/" class="header__menu_social_icon header__menu_social_icon-inst"></a>
						<a target="blank" href="https://ru-ru.facebook.com/2br.brightbrand/" class="header__menu_social_icon header__menu_social_icon-fb"></a>
						<a target="blank" href="tg://resolve?domain=@BrBr_2Br" class="header__menu_social_icon header__menu_social_icon-telegram"></a>
						<a target="blank" href="https://api.whatsapp.com/send?phone=89882432033" class="header__menu_social_icon header__menu_social_icon-wa"></a>
					</div>
				</div>
			</div>

		</nav>
	</div>
</header>
<!--  -->
<script src="/js/header.js"></script>
<!--  -->
{/strip}