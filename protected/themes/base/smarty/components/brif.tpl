<link rel="stylesheet" href="/css/brif.css">
<!--  -->
<div class="b__overlay" id="brifOverlay"></div>
<form class="b__form" id="brifForm">
    <button class="b__close" id="closeBrif"></button>
    <div class="b__title-box">
        <p class="b__title">Бриф</p>
        <p class="b__title-2"><span>*</span> - поля, обязательные к заполнению.</p>
    </div>
    <!--  -->
    <section class="b__box" id="section_1">
        <label for="scope" class="b__label"><span>*</span> 1. Опишите сферу деятельности компании.</label>
        <textarea class="b__textarea" id="scope"></textarea>
    </section>
    <!--  -->
    <section class="b__box"  id="section_2">
        <label for="scope" class="b__label-2"><span>*</span> 2. Какие работы необходимо провести.</label>
        <input type="checkbox" class="b__check" id="type_1">
        <label for="type_1" class="b__ckeck_label">брендинг/ ребрендинг</label>
        <input type="checkbox" class="b__check" id="type_2">
        <label for="type_2" class="b__ckeck_label">создание сайта/ продукта Digitale</label>
        <input type="checkbox" class="b__check" id="type_3">
        <label for="type_3" class="b__ckeck_label">коммуникационная стратегия</label>
        <input id="another" type="text" class="b__input" placeholder="Другое">
    </section>
    <!--  -->
    <section class="b__box"  id="section_3">
        <label for="scope" class="b__label-2"><span>*</span> 3. Как удобно будет связаться?</label>

        <input type="checkbox" class="b__check" id="connect_1">
        <label for="connect_1" class="b__ckeck_label">Телефон</label>
           
        <input type="checkbox" class="b__check" id="connect_2">
        <label for="connect_2" class="b__ckeck_label">Telegram</label>
            
        <input type="checkbox" class="b__check" id="connect_3">
        <label for="connect_3" class="b__ckeck_label">WhatsApp</label>
        <input id="connect_1_input" type="text" class="b__input-hide" placeholder="Ваш номер телефона">
        
        <input type="checkbox" class="b__check" id="connect_4">
        <label for="connect_4" class="b__ckeck_label">Электронная почта</label>
        <input id="connect_2_input" type="text" class="b__input-hide" placeholder="e-mail">
        
    </section>
    <!--  -->
    <section class="b__box" id="section_4">
        <label for="scope" class="b__label-2">4. Оставьте ссылку на сайт/ Instagram</label>
        <input type="text" class="b__input" placeholder="скопируйте сюда ссылку" id="b_link">
    </section>
    <!--  -->
    <section class="b__box-submit">
        <button class="b__btn-submit" type="submit">Отправить бриф</button>
    </section>
</form>
<!--  -->
<form class="p__form" id="promoForm">
    <button class="p__close" id="closePromo"></button>
    <section class="p__box">
        <p class="p__title">Ваш промокод</p>
        <p class="p__code">2Br-Branding Today</p>
    </section>
    <section class="p__box">
        <p class="p__text"><span>5 000</span> рублей - на создание сайта</p>
        <p class="p__text"><span>10 000</span> рублей - разработка бренда</p>
    </section>
    <section class="p__box" id="section_5">
        <input type="text" class="p__input" placeholder="e-mail" id="p_email">
        <button type="submit" class="p__submit">Получить промокод по почте</button>
    </section>
</form>
<!--  -->
<script src="/js/brif.js"></script>