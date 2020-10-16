<?php
/* Smarty version 3.1.31, created on 2020-08-31 15:09:11
  from "/home/b/burdilo/temp.2-br.ru/public_html/protected/modules/WorksPage/tpl/item.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f4ce8672d6ca2_76218493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '417502315d5b981ecae817b8f28a7ae247bddd65' => 
    array (
      0 => '/home/b/burdilo/temp.2-br.ru/public_html/protected/modules/WorksPage/tpl/item.tpl',
      1 => 1580804864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4ce8672d6ca2_76218493 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="/css/item.css">
<!--  -->
<main class="main">
    <section class="banner">
        <img src="<?php echo $_smarty_tpl->tpl_vars['project']->value['banner']['src'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['project']->value['banner']['alt'];?>
" class="banner__img">
    </section>
    <!--  -->
    <section class="app__center">
        <?php if ($_smarty_tpl->tpl_vars['project']->value['title'] != '') {?>
            <p class="title"><?php echo $_smarty_tpl->tpl_vars['project']->value['title'];?>
</p>
        <?php }?>
        <!--  -->
        <div class="content_worksItem">
            <?php echo $_smarty_tpl->tpl_vars['project']->value['content'];?>

        </div>
        <!--  -->
        <nav class="nav">
            <a href="/raboty?id=<?php echo $_smarty_tpl->tpl_vars['project']->value['prevProject'];?>
&filter=<?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
" class="nav__btn">
            <?php if ($_smarty_tpl->tpl_vars['project']->value['prevProject'] != '') {?>
                <hr class="nav__btn_line nav__btn_line-fire">
                <p class="nav__btn_text nav__btn_text-left">Предыдущий <br>проект</p>
                <hr class="nav__btn_line">
            <?php }?>
            </a>
            <a href="/raboty?filter=<?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
" class="nav__btn">
                <hr class="nav__btn_line nav__btn_line-half-fire">
                <p class="nav__btn_text nav__btn_text-desctop">Смотреть все проекты</p>
                <p class="nav__btn_text nav__btn_text-mobile">Все<br>проекты</p>
                <hr class="nav__btn_line nav__btn_line-half-fire">
            </a>
            
            <a href="/raboty?id=<?php echo $_smarty_tpl->tpl_vars['project']->value['nextProject'];?>
&filter=<?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
" class="nav__btn">
            <?php if ($_smarty_tpl->tpl_vars['project']->value['nextProject'] != '') {?>
                <hr class="nav__btn_line">
                <p class="nav__btn_text nav__btn_text-right">Следующий <br>проект</p>
                <hr class="nav__btn_line nav__btn_line-fire">
            <?php }?>
            </a>
        </nav>
    </section>
</main>
<!--  -->
<?php }
}
