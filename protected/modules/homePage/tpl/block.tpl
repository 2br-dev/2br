<link rel="stylesheet" href="/css/home.css">
<!--  -->
<div class="main">
    <div class="main__body">
        <!-- banner -->
        <section class="banner">
            <div class="banner__img-box">
                <img src="/images/home_banner/mobile_stock.png" alt="" class="banner__img">
            </div>
            <video loop muted autoplay class="banner__video">
                <source src="/images/home_banner/main_web2.mp4" type="video/mp4">
                {* <source src="/images/main.avi" type="video/avi"> *}
            </video>
            <!-- <p class="slogan">Иногда мир меняется...<br>
            Но это не касается наших целей</p>
            <a class="banner-link" href="/biznes-v-krizis">Узнайте о нашем проекте Бизнес в кризис</a> -->
        </section>
        <!-- /banner -->
        <!--  -->
        <!-- projects -->
        <section class="projects app__center" id="projects">
        {if !empty($projectList)}
            {assign var='counter' value=0}
            {foreach $projectList as $project}
            <a {if !empty($project['content'])} href="/raboty?id={$project['id']}" {/if} class="project">
                {if $project['preview']['type'] === 'video'}
                    <video src="{$project['preview']['src']}" loop muted autoplay ></video>
                {/if}
                {if $project['preview']['type'] === 'image'}
                    <img src="{$project['preview']['src']}" alt="{$project['preview']['alt']}" class="projects__img">
                {/if}
                <div class="header-wrapper">
                    <div class="header-content">{$project['label']}</div>
                    {* <div class="subheader">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, aut.</div> *}
                </div>                
            </a>
            {$counter = $counter + 1}
            {/foreach}
            {* {if $counter % 2 === 1}
                <div class="projects__item projects__item-stub">
                    <p class="projects__item-stub_title">В разработке</p>
                </div>
            {/if} *}
        {/if}
        </section>
        <!-- /projects -->
        <!--  -->
        <!-- btn -->
        <section class="btn app__center">
            <a href="/raboty" class="btn__link">УВИДЕТЬ БОЛЬШЕ</a>
        </section>
        <!-- /btn -->
    </div>
</div>
<!--  -->
<script src="/js/home.js"></script>