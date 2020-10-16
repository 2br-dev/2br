<link rel="stylesheet" href="/css/item.css">
<!--  -->
<main class="main">
    <section class="banner">
        <img src="{$project['banner']['src']}" alt="{$project['banner']['alt']}" class="banner__img">
    </section>
    <!--  -->
    <section class="app__center">
        {if $project['title'] != ''}
            <p class="title">{$project['title']}</p>
        {/if}
        <!--  -->
        <div class="content_worksItem">
            {$project['content']}
        </div>
        <!--  -->
        <nav class="nav">
            <a href="/raboty?id={$project['prevProject']}&filter={$filter}" class="nav__btn">
            {if $project['prevProject'] != ''}
                <hr class="nav__btn_line nav__btn_line-fire">
                <p class="nav__btn_text nav__btn_text-left">Предыдущий <br>проект</p>
                <hr class="nav__btn_line">
            {/if}
            </a>
            <a href="/raboty?filter={$filter}" class="nav__btn">
                <hr class="nav__btn_line nav__btn_line-half-fire">
                <p class="nav__btn_text nav__btn_text-desctop">Смотреть все проекты</p>
                <p class="nav__btn_text nav__btn_text-mobile">Все<br>проекты</p>
                <hr class="nav__btn_line nav__btn_line-half-fire">
            </a>
            
            <a href="/raboty?id={$project['nextProject']}&filter={$filter}" class="nav__btn">
            {if $project['nextProject'] != ''}
                <hr class="nav__btn_line">
                <p class="nav__btn_text nav__btn_text-right">Следующий <br>проект</p>
                <hr class="nav__btn_line nav__btn_line-fire">
            {/if}
            </a>
        </nav>
    </section>
</main>
<!--  -->
