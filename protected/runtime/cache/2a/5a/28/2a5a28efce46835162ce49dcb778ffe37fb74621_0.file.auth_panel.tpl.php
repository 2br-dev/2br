<?php
/* Smarty version 3.1.31, created on 2020-10-16 15:06:50
  from "C:\localserver\OpenServer\domains\2br.local\protected\themes\base\smarty\components\auth_panel.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f898cda2fd877_61607382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a5a28efce46835162ce49dcb778ffe37fb74621' => 
    array (
      0 => 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\themes\\base\\smarty\\components\\auth_panel.tpl',
      1 => 1602568222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f898cda2fd877_61607382 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="/css/auth_panel.css">
<!--  -->
<section class="auth_overlay" id="auth_overlay"></section>
<p  id="auth_message" class="auth__message">Ссылка для восстановление пароля направлена на Ваш email адрес</p>
<!--  -->
<form class="auth" id="auth_form">
    <a class="auth__btn" id="auth_close"></a>
    <div class="auth__row">
        <input id="auth_login" type="text" class="auth__input" placeholder="Логин">
    </div>
    <div class="auth__row">
        <input id="auth_password" type="password" class="auth__input" placeholder="Пароль">
        <a id="pass_visible" class="auth__btn-pass"></a>
    </div>
    <div class="auth__row">
        <input type="submit" class="auth__submit" value="Войти">
        <a id="auth_forgot" class="auth__link">Забыли пароль?</a>
    </div>
</form>
<!--  -->
<form class="auth" id="auth_form_email">
    <a class="auth__btn" id="auth_close_email"></a>
    <p class="auth__text">Укажите email, который Вы использовали для входа на сайт</p>
    <div class="auth__row">
        <input id="auth_email" type="text" class="auth__input" placeholder="email">
    </div>
    <div class="auth__row">
        <input type="submit" class="auth__submit" value="Отправить">
    </div>
</form>
<!--  -->
<?php echo '<script'; ?>
 src="/js/auth_panel.js"><?php echo '</script'; ?>
><?php }
}
