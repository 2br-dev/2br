<?php
/* Smarty version 3.1.31, created on 2020-08-31 17:06:05
  from "/home/b/burdilo/temp.2-br.ru/public_html/protected/modules/ServicesPage/tpl/block.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f4d03cd6457b9_72373676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fd2d70ac5dbfbb76aee671e21c90e625608aa06' => 
    array (
      0 => '/home/b/burdilo/temp.2-br.ru/public_html/protected/modules/ServicesPage/tpl/block.tpl',
      1 => 1581673020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4d03cd6457b9_72373676 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="/css/services.css">
<!--  -->
<main class="main">
    <section class="banner">
        <img src="/images/banner_services.jpg" alt="" class="banner__img">
    </section>
    <!--  -->
    <section class="body app__center">
        <p class="title">Услуги</p>
        <div class="box-flex">
            <div class="box-flex__col">
                <div class="box-flex__col_box-label">
                    <img src="/images/services_label_1.png" alt="" class="box-flex__col_label">
                </div>
                <div class="box-flex__content">
                    <div class="box-flex__content_list">
                        <p class="box-flex__content_text">Разработка платформы бренда</p>
                        <p class="box-flex__content_text">Ключевая метафора бренда</p>
                        <p class="box-flex__content_text">Нейминг, слоган, вербальная коммуникация</p>
                        <p class="box-flex__content_text">Сиситема визуальной коммуникации</p>
                        <p class="box-flex__content_text">Полиграфия</p>
                        <p class="box-flex__content_text">Упаковка</p>
                        <p class="box-flex__content_text">Иллюстрации</p>
                    </div>
                    <!--  -->
                    <p class="box-flex__content_link"><a href="/raboty?filter=branding">Работы</a> <sup><?php echo $_smarty_tpl->tpl_vars['projectCount']->value['branding'];?>
</sup></p>
                </div>
            </div>
            <div class="box-flex__col">
                <div class="box-flex__col_box-label">
                    <img src="/images/services_label_2.png" alt="" class="box-flex__col_label">
                </div>
                <div class="box-flex__content">
                    <div class="box-flex__content_list">
                        <p class="box-flex__content_text">Анализ и стратегия</p>
                        <p class="box-flex__content_text">Дизайн</p>
                        <p class="box-flex__content_text">Интернет-магазины</p>
                        <p class="box-flex__content_text">Разработка</p>
                        <p class="box-flex__content_text">Поддержка</p>
                    </div>
                     <!--  -->
                     <p class="box-flex__content_link"><a href="/raboty?filter=digital">Работы</a> <sup><?php echo $_smarty_tpl->tpl_vars['projectCount']->value['digital'];?>
</sup></p>
                </div>
            </div>
        </div>
    </section>
</main><?php }
}
