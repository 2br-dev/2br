<?php
/* Smarty version 3.1.31, created on 2020-08-31 17:06:01
  from "/home/b/burdilo/temp.2-br.ru/public_html/protected/modules/AgencyPage/tpl/block.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f4d03c9034f63_17387484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5d21815fb5ff0c7a276825bfaed511fa3824a39' => 
    array (
      0 => '/home/b/burdilo/temp.2-br.ru/public_html/protected/modules/AgencyPage/tpl/block.tpl',
      1 => 1563201755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4d03c9034f63_17387484 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="/css/agency.css">
<!--  -->
<main class="main">
    <section class="banner">
        <img src="/images/agency_banner.jpg" alt="" class="banner__img">
    </section>
    <!--  -->
    <section class="body app__center">
        <p class="title">Команда</p>
        <!--  -->
        <div class="box">
            <?php if (!empty($_smarty_tpl->tpl_vars['commandList']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['commandList']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                <div class="box__col">
                    <div class="box__col_img-box">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img']['src'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['img']['alt'];?>
" class="box__col_img">
                        <div class="box__col_mask">
                            <p class="box__col_mask_title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</p>
                            <p class="box__col_mask_description"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</p>
                        </div>
                    </div>
                    <p class="box__col_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</p>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <?php }?>
        </div>
    </section>
</main><?php }
}
