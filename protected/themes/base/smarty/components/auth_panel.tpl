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
<script src="/js/auth_panel.js"></script>