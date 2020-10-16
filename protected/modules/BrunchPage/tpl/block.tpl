<link rel="stylesheet" href="/css/brunch.css">
<!--  -->
<main class="main">
    <!-- <section class="banner">
        <img src="/images/brunch_banner.jpg" alt="" class="banner__img">
    </section> -->
    <section class="banner">
        <div class="banner__img-box">
            <img src="/images/home_banner/mobile_stock.png" alt="" class="banner__img">
        </div>
        <video loop muted autoplay class="banner__video">
            <source src="/images/main.mp4" type="video/mp4">
            {* <source src="/images/main.avi" type="video/avi"> *}
        </video>
    </section>
    <!--  -->
    <section class="body app__center">
        <p class="title">Brunch от 2Br</p>
        <!--  -->
        {if !empty($slider)}
        
        <div class="box">
            <div class="slider-section">
                <div class="slider">
                    <div class="slider__body" id="slider">
                        {foreach $slider as $photo}
                        <!--  -->
                        <div class="slider__slide">
                            <div class="slider__slide_wrap">
                                <div class="slider__slide_overlay">
                                    <img src="{$photo['src']}" alt="{$photo['alt']}" class="slider__slide_img">
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        {/foreach}
                    </div>
                </div>
            </div>
        </div>
        {/if}
        <!--  -->
        {if !empty($events)}
        <div class="content">
            <div class="content__left"></div>
            <!--  -->
            <div class="content__right">
                {foreach $events as $event}    
                <div class="row">
                    <div class="row__title">
                        <p class="row__title_text">{$event['date']} ({$event['weekDay']})</p>
                        <p class="row__title_text">{$event['time']}</p>
                    </div>
                    {foreach $event['rows'] as $row}
                    <p class="row__text">{$row}</p>
                    {/foreach}
                </div>
                {/foreach}
            </div>
        </div>
        {/if}
    </section>
</main>
<!--  -->
<script src="/js/brunch.js"></script>
<!--  -->