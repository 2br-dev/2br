<link rel="stylesheet" href="/css/lk.css">
<!--  -->
<main class="main">
    <section class="banner">
        <img src="/images/lk_banner.jpg" alt="" class="banner__img">
    </section>
    <!--  -->
    <section class="body app__center">
    <div class="title">
        <p class="title__text">Кабинет</p>
        <div class="title__bar">
            <a href="/lk/personal-data" class="link {if $menu == 'personal-data'}link-active{/if}">Персональные данные</a>
            <a href="/lk/materials" class="link {if $menu == 'materials'}link-active{/if}">Материалы проекта</a>
            <a href="/lk/plan" class="link {if $menu == 'plan'}link-active{/if}">План проекта</a>
            <a id="sign_out" class="link">Выход</a>
        </div>
    </div>
        {if $isAuth}
            <div class="content">
                <div class="content__main">
                    {include file=$modul}
                </div>
            </div>
        {else}
            <div class="forbidden">
                <p class="forbidden__title">Доступ закрыт</p>
            </div>
        {/if}
    </section>
</main>
<!--  -->
<script src="/js/lk.js"></script>
<!--  -->