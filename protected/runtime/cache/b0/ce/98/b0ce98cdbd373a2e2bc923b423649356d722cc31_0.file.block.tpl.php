<?php
/* Smarty version 3.1.31, created on 2020-08-31 17:06:07
  from "/home/b/burdilo/temp.2-br.ru/public_html/protected/modules/JobsPage/tpl/block.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f4d03cf6066c9_20469838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0ce98cdbd373a2e2bc923b423649356d722cc31' => 
    array (
      0 => '/home/b/burdilo/temp.2-br.ru/public_html/protected/modules/JobsPage/tpl/block.tpl',
      1 => 1572512607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4d03cf6066c9_20469838 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
        <?php if (empty($_smarty_tpl->tpl_vars['jobs']->value)) {?>
        <div class="empty">
            <p class="empty__title">
                Сейчас у нас нет свободных вакансий. <br>
                Но, наверняка, скоро откроется вакансия для тебя. Поэтому присылай свое резюме и портфолио на <span>brand@2-br.ru<span>
            </p>
        </div>
        <?php } else { ?>
        <div class="content">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jobs']->value, 'job');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['job']->value) {
?>  
            <!--  -->
            <div class="content__col">
                <div class="content__left">
                    <img src="/images/jobs/<?php echo $_smarty_tpl->tpl_vars['job']->value['type'];?>
.jpg" alt="" class="content__left_img">
                </div>
                <div class="content__right">
                    
                    <?php echo $_smarty_tpl->tpl_vars['job']->value['desc'];?>

                </div>
            </div>
            <!--  -->
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </div>
        <?php }?>
    </section>
</main><?php }
}
