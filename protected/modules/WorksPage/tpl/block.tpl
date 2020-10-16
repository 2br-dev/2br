<link rel="stylesheet" href="/css/works.css">
<!--  -->
<main class="main">
    <section class="banner">
        <img src="/images/banner_works.jpg" alt="" class="banner__img">
    </section>
    <!--  -->
    <section class="body app__center">
        <div class="body__row">
            <p class="title">Работы</p>
            <div class="body__filter">
                <a href="/raboty?filter=" class="body__filter_link {if is_null($filter)}body__filter_link-active{/if}">Все</a>
                <a href="/raboty?filter=branding" class="body__filter_link {if $filter == 'branding'}body__filter_link-active{/if}">Брендинг</a>
                <a href="/raboty?filter=digital" class="body__filter_link {if $filter == 'digital'}body__filter_link-active{/if}">Диджитал</a>
            </div>
        </div>
        <!--  -->
        <!-- projects -->
        <section class="projects">
        {if !empty($projectList)}
            {assign var='counter' value=0}
            
            {foreach $projectList as $project}
            <a {if !empty($project['content'])}href="/raboty?id={$project['id']}&filter={$filter}"{/if} class="projects__item">
                <img src="{$project['preview']['src']}" alt="{$project['preview']['alt']}" class="projects__img">
                <!--  -->
                <div class="projects__mask">
                    <div class="projects__mask_convas">
                        <p class="projects__mask_text">{$project['label']}</p>
                    </div>
                </div>
            </a>
            {$counter = $counter + 1}
            {/foreach}
            {if $counter % 2 === 1}
                <div class="projects__item projects__item-stub">
                    <p class="projects__item-stub_title">В разработке</p>
                </div>
            {/if}
        {/if}
        </section>
        <!-- /projects -->
    </section>
</main>
<!--  -->
<script src="/js/works.js"></script>