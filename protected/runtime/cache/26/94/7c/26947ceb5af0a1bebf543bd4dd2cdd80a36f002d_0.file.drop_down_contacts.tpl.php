<?php
/* Smarty version 3.1.31, created on 2020-08-31 13:28:58
  from "/home/b/burdilo/temp.2-br.ru/public_html/protected/themes/base/smarty/components/drop_down_contacts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f4cd0ea1fcb01_77431842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26947ceb5af0a1bebf543bd4dd2cdd80a36f002d' => 
    array (
      0 => '/home/b/burdilo/temp.2-br.ru/public_html/protected/themes/base/smarty/components/drop_down_contacts.tpl',
      1 => 1563789546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4cd0ea1fcb01_77431842 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--  -->
<nav class="contacts" id="contacts">
    <div class="contacts__body ">
        <div class="contacts__map" id="map">
            <iframe class="contacts__map_iframe" src="https://yandex.ru/map-widget/v1/-/CCsy5UoT"></iframe>
        </div>
        <!--  -->
        <div class="contacts__box app__center">
            <p class="contacts__title">Контакты</p>
            <div class="contacts__box_center">
                <div class="contacts__row">
                    <p class="contacts__row_title">Адрес:</p>
                    <p class="contacts__row_text">
                        Краснодар, ул. Северная, <br>
                        д 324, литер Г, <br>
                        офис 54 (5 этаж без лифта)
                    </p>
                </div>
                <div class="contacts__row ">
                    <p class="contacts__row_title">Телефон:</p>
                    <p class="contacts__row_text">+7 (861) 243-20-33</p>
                </div>
                <div class="contacts__row contacts__row-hidden">
                    <p class="contacts__row_title">E-mail:</p>
                    <p class="contacts__row_text">
                        E-mail дизайнера: <a href="mailto:designer@2-br" class="contacts__row_link">designer@2-br.ru</a> <br>
                        Самый главный e-mail: <a href="mailto:brand@2-br" class="contacts__row_link">brand@2-br.ru</a>
                    </p>
                </div>
                <div class="contacts__row">
                    <p class="contacts__row_title">Instagram:</p>
                    <p class="contacts__row_text"><a target="blank" href="https://www.instagram.com/2br_krd/" class="contacts__row_link">@2br_krd</a></p>
                </div>
            </div>
            
        </div>
    </div>
</nav>
<!--  -->
<?php echo '<script'; ?>
 src="/js/drop_down_contacts.js"><?php echo '</script'; ?>
>
<!--  -->
<?php }
}
