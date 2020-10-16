<?php
/* Smarty version 3.1.31, created on 2020-08-31 17:06:02
  from "/home/b/burdilo/temp.2-br.ru/public_html/protected/modules/BrunchPage/tpl/block.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f4d03ca47d894_61344986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cb114501a93e2bbaa2ea190e9cedc4c9af75c3b' => 
    array (
      0 => '/home/b/burdilo/temp.2-br.ru/public_html/protected/modules/BrunchPage/tpl/block.tpl',
      1 => 1581673211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4d03ca47d894_61344986 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
            
        </video>
    </section>
    <!--  -->
    <section class="body app__center">
        <p class="title">Brunch от 2Br</p>
        <!--  -->
        <?php if (!empty($_smarty_tpl->tpl_vars['slider']->value)) {?>
        
        <div class="box">
            <div class="slider-section">
                <div class="slider">
                    <div class="slider__body" id="slider">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slider']->value, 'photo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
?>
                        <!--  -->
                        <div class="slider__slide">
                            <div class="slider__slide_wrap">
                                <div class="slider__slide_overlay">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value['src'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['photo']->value['alt'];?>
" class="slider__slide_img">
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <!--  -->
        <?php if (!empty($_smarty_tpl->tpl_vars['events']->value)) {?>
        <div class="content">
            <div class="content__left"></div>
            <!--  -->
            <div class="content__right">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['events']->value, 'event');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['event']->value) {
?>    
                <div class="row">
                    <div class="row__title">
                        <p class="row__title_text"><?php echo $_smarty_tpl->tpl_vars['event']->value['date'];?>
 (<?php echo $_smarty_tpl->tpl_vars['event']->value['weekDay'];?>
)</p>
                        <p class="row__title_text"><?php echo $_smarty_tpl->tpl_vars['event']->value['time'];?>
</p>
                    </div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['event']->value['rows'], 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                    <p class="row__text"><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
</p>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            </div>
        </div>
        <?php }?>
    </section>
</main>
<!--  -->
<?php echo '<script'; ?>
 src="/js/brunch.js"><?php echo '</script'; ?>
>
<!--  --><?php }
}
