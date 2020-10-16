<link rel="stylesheet" href="/css/modul_personal_data.css">
<!--  -->
<section class="box">
    <div class="pd-box">
        <div id="pd_list" class="pd-box__section pd-box__section-active">
            <div class="pd-box__row">
                <p class="pd-box__text"><span>Имя:</span> {$data['name']}</p>
            </div>
            <div class="pd-box__row">
                <p class="pd-box__text"><span>E-mail:</span> {$data['email']}</p>
            </div>
            <div class="pd-box__row">
                <p class="pd-box__text"><span>Телефон:</span> {$data['phone']}</p>
            </div>
        </div>
        <!--  -->
        <form id="pd_editor" class="pd-box__section" autocomplete="off">
            <div class="pd-box__row">
                <input id="pd_name" type="text" class="pd-box__input" placeholder="Имя*" value="{$data['name']}">
            </div>
            <div class="pd-box__row">
                <input id="pd_email" type="text" class="pd-box__input" placeholder="E-mail*" value="{$data['email']}">
            </div>
            <div class="pd-box__row">
                <input id="pd_phone" type="text" class="pd-box__input" placeholder="Телефон*" value="{$data['phone']}">
            </div>
            <div class="pd-box__row pd-box__row-btn">
                <a id="pd_back" class="pd-box__btn">Отменить</a>
                <input id="pd_save" type="submit" value="Сохранить" class="pd-box__btn">
            </div>
        </form>
    </div>
    <!--  -->
    <div class="manage">
        <a id="edit_pd" class="manage__link">Редактировать данные</a>
        <a id="edit_password" class="manage__link">Изменить пароль</a>
    </div>
</section>
<!--  -->
<!--  -->
<!--  -->
<div class="pass_overlay" id="pass_overlay"></div>
<!--  -->
<form autocomplete="off" class="pass" id="pass_form">
    <a id="pass_close" class="pass__btn-close"></a>
    <p class="pass__title">Смена пароля</p>
    <div class="pass__row">
        <input id="pass_old" type="password" class="pass__input" autocomplete="off" placeholder="Текущий пароль">
    </div>
    <div class="pass__row">
        <input id="pass_new" type="password" class="pass__input" autocomplete="off" placeholder="Новый пароль">
    </div>
    <div class="pass__row">
        <input id="pass_new_duble" type="password" class="pass__input" autocomplete="off" placeholder="Повторите пароль">
    </div>
    <div class="pass__row pass__row-btn">
        <input id="pass_save" type="submit" value="Изменить" class="pass__btn-submit">
    </div>
</form>
<!--  -->
<!--  -->
<!--  -->
<script src="/js/modul_personal_data.js"></script>