<link rel="stylesheet" href="/css/modul_plan.css">
<!--  -->
<section class="box">
    <div class="list">
        {foreach $data as $task}
            {if $task['complete'] == 1}
                <p class="list__task list__task-complete">{$task['event']}</p>
            {else}
                <p class="list__task">{$task['event']}</p>
            {/if}
        {/foreach}
    </div>
    <!--  -->
    <div class="calendar">
        <div class="calendar__body">
            <div class="calendar__head">
                <button class="calendar__head_btn calendar__head_btn-prev" data-month="" data-year="" id="prev_month"></button>
                <p class="calendar__head_title" id="month_title" data-name="">Январь [2019]</p>
                <button class="calendar__head_btn calendar__head_btn-next" data-month="" data-year="" id="next_month"></button>
            </div>
            <div class="calendar__conteiner" id="conteiner">
                {* <div class="calendar__conteiner_item calendar__conteiner_item-hide" data-store-key="">
                    <p class="calendar__conteiner_item_num">30</p>
                    <p class="calendar__conteiner_item_text"></p>
                </div>*}
            </div>
        </div>
        <!--  -->
        <div class="card" id="info_block">
            <div class="card__title">
                <p class="card__title-text" id="info_block_date"></p>
                <p class="card__title-text" id="info_block_time"></p>
            </div>
            <div class="card__body" id="info_block_tasks">
                {* <p class="card__task">Сдача логотипа</p> *}
            </div>
            <div class="card__bottom">
                <p class="card__text" id="info_block_place"></p>
            </div>
        </div>
    </div>
</section>
<!--  -->
<!--  -->
<!--  -->
<script src="/js/modul_plan.js"></script>