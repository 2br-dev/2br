<link rel="stylesheet" href="/css/agency.css">
<!--  -->
<main class="main">
    <section class="banner">
        <img src="/images/agency_banner.jpg" alt="" class="banner__img">
    </section>
    <!--  -->
    <section class="body app__center">
        <p class="title">Команда</p>
        <!--  -->
        <div class="box">
            {if !empty($commandList)}
            {foreach $commandList as $item}
                <div class="box__col">
                    <div class="box__col_img-box">
                        <img src="{$item['img']['src']}" alt="{$item['img']['alt']}" class="box__col_img">
                        <div class="box__col_mask">
                            <p class="box__col_mask_title">{$item['title']}</p>
                            <p class="box__col_mask_description">{$item['description']}</p>
                        </div>
                    </div>
                    <p class="box__col_name">{$item['name']}</p>
                </div>
            {/foreach}
            {/if}
        </div>
    </section>
</main>