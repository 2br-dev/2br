<link rel="stylesheet" href="/css/jobs.css">
<!--  -->
<main class="main">
    <section class="banner">
        <img src="/images/jobs_banner.jpg" alt="" class="banner__img">
    </section>
    <!--  -->
    <section class="body app__center">
        <p class="title">Вакансии</p>
        <!--  -->
        {if empty($jobs)}
        <div class="empty">
            <p class="empty__title">
                Сейчас у нас нет свободных вакансий. <br>
                Но, наверняка, скоро откроется вакансия для тебя. Поэтому присылай свое резюме и портфолио на <span>brand@2-br.ru<span>
            </p>
        </div>
        {else}
        <div class="content">
            {foreach $jobs as $job}  
            <!--  -->
            <div class="content__col">
                <div class="content__left">
                    <img src="/images/jobs/{$job['type']}.jpg" alt="" class="content__left_img">
                </div>
                <div class="content__right">
                    {* <p class="content__title">Навыки</p>
                    <ul class="content__list">
                    {foreach $job['skills'] as $skill} 
                        <li class="content__item">{$skill}</li>
                    {/foreach}
                    </ul>
                    <p class="content__text">Если тебя заинтересовала вакансия, присылайте портфолио на адрес <span>brand@2-br.ru</span></p> *}
                    {$job['desc']}
                </div>
            </div>
            <!--  -->
            {/foreach}
        </div>
        {/if}
    </section>
</main>