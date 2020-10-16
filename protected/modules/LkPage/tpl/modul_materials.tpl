<link rel="stylesheet" href="/css/modul_materials.css">
<!--  -->
{if empty($data)}
<p class="mat__title">В течение 5 лет мы будем хранить все результаты работы по Вашему проекту. Все материалы будут доступны в необходимых форматах и с подробными комментариями. Логин и Пароль вручим сразу при подписании Договора.</p>
<section class="empty">
    <p class="empty__title">Файлы отсутствуют</p>
</section>
{else}
<section class="box">

    {$calendar = [
        1 => 'Январь',
        2 => 'Февраль',
        3 => 'Март',
        4 => 'Апрель',
        5 => 'Май',
        6 => 'Июнь',
        7 => 'Июль',
        8 => 'Август',
        9 => 'Сентябрь',
        10 => 'Октябрь',
        11 => 'Ноябрь',
        12 => 'Декабрь'
	]}
    {foreach $data as $year => $yearArray}
        {foreach $yearArray as $month => $monthArray}
        <div class="box__row">
            <div class="box__title">
                <p class="box__title_text">{$calendar[$month]} {$year}</p>
            </div>
            <div class="box__content">
                {foreach $monthArray as $type => $typeArray}
                {if $type == 1}
                    {$nameCategory = 'Макеты'}
                {/if}
                {if $type == 2}
                    {$nameCategory = 'Pdf файлы'}
                {/if}
                {if $type == 3}
                    {$nameCategory = 'Изображения'}
                {/if}
                {* {$typeArray|var_dump} *}
                <p class="box__label">{$nameCategory}</p>
                <div class="box__list">
                    {foreach $typeArray as $file}
                    <a href="{$file['file']}" class="box__list_box" download>
                        <div class="box__list_overlay">
                            <p class="box__list_overlay_text">Скачать</p>
                        </div>
                        <img src="/images/icons/icon_link.svg" class="box__list_icon">
                        <p class="box__list_label">{$file['name']}</p>
                    </a>
                    {/foreach}
                </div>
                {/foreach}
            </div>
        </div>
        {/foreach}
    {/foreach}
</section>
{/if}
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<script src="/js/modul_materials.js"></script>