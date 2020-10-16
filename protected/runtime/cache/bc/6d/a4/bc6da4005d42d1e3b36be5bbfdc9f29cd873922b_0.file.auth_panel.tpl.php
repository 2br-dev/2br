<?php
/* Smarty version 3.1.31, created on 2020-08-31 13:28:58
  from "/home/b/burdilo/temp.2-br.ru/public_html/protected/themes/base/smarty/components/auth_panel.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f4cd0ea230385_47845644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc6da4005d42d1e3b36be5bbfdc9f29cd873922b' => 
    array (
      0 => '/home/b/burdilo/temp.2-br.ru/public_html/protected/themes/base/smarty/components/auth_panel.tpl',
      1 => 1563266151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4cd0ea230385_47845644 (Smarty_Internal_Template $_smarty_tpl) {
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
