<?php
/* Smarty version 3.1.31, created on 2020-08-31 13:28:58
  from "/home/b/burdilo/temp.2-br.ru/public_html/protected/modules/homePage/tpl/block.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f4cd0ea1938f5_36204504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c7f7d494a01470c0287f71212696614b2dbc538' => 
    array (
      0 => '/home/b/burdilo/temp.2-br.ru/public_html/protected/modules/homePage/tpl/block.tpl',
      1 => 1598869685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4cd0ea1938f5_36204504 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
                
            </video>
            <!-- <p class="slogan">Иногда мир меняется...<br>
            Но это не касается наших целей</p>
            <a class="banner-link" href="/biznes-v-krizis">Узнайте о нашем проекте Бизнес в кризис</a> -->
        </section>
        <!-- /banner -->
        <!--  -->
        <!-- projects -->
        <section class="projects app__center">
        <?php if (!empty($_smarty_tpl->tpl_vars['projectList']->value)) {?>
            <?php $_smarty_tpl->_assignInScope('counter', 0);
?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projectList']->value, 'project');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['project']->value) {
?>
            <a <?php if (!empty($_smarty_tpl->tpl_vars['project']->value['content'])) {?> href="/raboty?id=<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
" <?php }?> class="projects__item">
                <img src="<?php echo $_smarty_tpl->tpl_vars['project']->value['preview']['src'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['project']->value['preview']['alt'];?>
" class="projects__img">
                <!--  -->
                <div class="projects__mask">
                    <div class="projects__mask_convas">
                        <p class="projects__mask_text"><?php echo $_smarty_tpl->tpl_vars['project']->value['label'];?>
</p>
                    </div>
                </div>
            </a>
            <?php $_smarty_tpl->_assignInScope('counter', $_smarty_tpl->tpl_vars['counter']->value+1);
?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <?php if ($_smarty_tpl->tpl_vars['counter']->value%2 === 1) {?>
                <div class="projects__item projects__item-stub">
                    <p class="projects__item-stub_title">В разработке</p>
                </div>
            <?php }?>
        <?php }?>
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
<?php echo '<script'; ?>
 src="/js/home.js"><?php echo '</script'; ?>
><?php }
}
