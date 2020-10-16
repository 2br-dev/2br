<?php
/* Smarty version 3.1.31, created on 2020-10-16 15:06:50
  from "C:\localserver\OpenServer\domains\2br.local\protected\modules\homePage\tpl\block.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f898cda28d6f3_62679422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '183f6ee2fc7cb9489729274fad77105eb2301be2' => 
    array (
      0 => 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\modules\\homePage\\tpl\\block.tpl',
      1 => 1602848161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f898cda28d6f3_62679422 (Smarty_Internal_Template $_smarty_tpl) {
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
        <section class="projects app__center" id="projects">
        <?php if (!empty($_smarty_tpl->tpl_vars['projectList']->value)) {?>
            <?php $_smarty_tpl->_assignInScope('counter', 0);
?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projectList']->value, 'project');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['project']->value) {
?>
            <a <?php if (!empty($_smarty_tpl->tpl_vars['project']->value['content'])) {?> href="/raboty?id=<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
" <?php }?> class="project">
                <?php if ($_smarty_tpl->tpl_vars['project']->value['preview']['type'] === 'video') {?>
                    <video src="<?php echo $_smarty_tpl->tpl_vars['project']->value['preview']['src'];?>
" loop muted autoplay ></video>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['project']->value['preview']['type'] === 'image') {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['project']->value['preview']['src'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['project']->value['preview']['alt'];?>
" class="projects__img">
                <?php }?>
                <div class="header-wrapper">
                    <div class="header-content"><?php echo $_smarty_tpl->tpl_vars['project']->value['label'];?>
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
