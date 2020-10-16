<link rel="stylesheet" href="/css/recovery.css">
<!--  -->
<section class="box">
    {if !is_null($hash)}
        <form class="form" id="form_recovery">
            <div class="form__row">
                <input id="pass" type="password" class="form__input" placeholder="Новый пароль">
            </div>
            <div class="form__row">
                <input id="duble_pass" type="password" class="form__input" placeholder="Повторите пароль">
            </div>
            <div class="form__row">
                <input type="submit" id="submit" hash="{$hash}" class="form__submit" value="Сохранить">
            </div>
        </form>
    {/if}
</section>
<!--  -->
<script src="/js/recovery.js"></script>