<?php
/* Smarty version 3.1.31, created on 2020-08-31 15:10:11
  from "/home/b/burdilo/temp.2-br.ru/public_html/protected/modules/WorksPage/tpl/block.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f4ce8a34b6675_56738950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66bdfc5baf80db022e95e85fc143bbac1134b08e' => 
    array (
      0 => '/home/b/burdilo/temp.2-br.ru/public_html/protected/modules/WorksPage/tpl/block.tpl',
      1 => 1571733131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4ce8a34b6675_56738950 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="/css/works.css">
<!--  -->
<main class="main">
    <section class="banner">
        <img src="/images/banner_works.jpg" alt="" class="banner__img">
    </section>
    <!--  -->
    <section class="body app__center">
        <div class="body__row">
            <p class="title">Работы</p>
            <div class="body__filter">
                <a href="/raboty?filter=" class="body__filter_link <?php if (is_null($_smarty_tpl->tpl_vars['filter']->value)) {?>body__filter_link-active<?php }?>">Все</a>
                <a href="/raboty?filter=branding" class="body__filter_link <?php if ($_smarty_tpl->tpl_vars['filter']->value == 'branding') {?>body__filter_link-active<?php }?>">Брендинг</a>
                <a href="/raboty?filter=digital" class="body__filter_link <?php if ($_smarty_tpl->tpl_vars['filter']->value == 'digital') {?>body__filter_link-active<?php }?>">Диджитал</a>
            </div>
        </div>
        <!--  -->
        <!-- projects -->
        <section class="projects">
        <?php if (!empty($_smarty_tpl->tpl_vars['projectList']->value)) {?>
            <?php $_smarty_tpl->_assignInScope('counter', 0);
?>
            
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projectList']->value, 'project');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['project']->value) {
?>
            <a <?php if (!empty($_smarty_tpl->tpl_vars['project']->value['content'])) {?>href="/raboty?id=<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
&filter=<?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
"<?php }?> class="projects__item">
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
    </section>
</main>
<!--  -->
<?php echo '<script'; ?>
 src="/js/works.js"><?php echo '</script'; ?>
><?php }
}
