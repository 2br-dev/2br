<?php
/* Smarty version 3.1.31, created on 2020-10-16 15:28:03
  from "C:\localserver\OpenServer\domains\2br.local\protected\app\core\admin-template\view\dashboard\technology.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f8991d33269e2_57929485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f703250d843ce43e9e8d3fde75c3f1ad538b9d62' => 
    array (
      0 => 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\app\\core\\admin-template\\view\\dashboard\\technology.tpl',
      1 => 1602568199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8991d33269e2_57929485 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="technology_block"><a href="#" class="button mb5 " onclick="return toggle_item(event, this, 'server-info', ['zmdi-chevron-up', 'zmdi-chevron-down'])"><i class="zmdi zmdi-chevron-down"></i> <i class="zmdi zmdi-info-outline"></i> <?php echo t('server.informationen');?>
</a><div class="technology_list clearfix hidden" id="server-info"><?php if (isset($_smarty_tpl->tpl_vars['technology']->value['php'])) {?><div class="technology_item"><div class="technology_version"><?php echo $_smarty_tpl->tpl_vars['technology']->value['php'];?>
</div><div class="technology_logo"><a href="/<?php echo $_smarty_tpl->tpl_vars['ADMIN_DIR']->value;?>
/phpinfo.php" target="_blank"><img src="/<?php echo $_smarty_tpl->tpl_vars['ADMIN_DIR']->value;?>
/images/technology/php.png" height="60" alt=""></a></div></div><?php }
if (isset($_smarty_tpl->tpl_vars['technology']->value['mysql'])) {?><div class="technology_item"><div class="technology_version"><?php echo $_smarty_tpl->tpl_vars['technology']->value['mysql'];?>
</div><div class="technology_logo"><img src="/<?php echo $_smarty_tpl->tpl_vars['ADMIN_DIR']->value;?>
/images/technology/mysql.png" height="60" alt=""></div></div><?php }
if (isset($_smarty_tpl->tpl_vars['technology']->value['memcached'])) {?><div class="technology_item"><div class="technology_version"><?php echo $_smarty_tpl->tpl_vars['technology']->value['memcached'];?>
</div><div class="technology_logo"><img src="/<?php echo $_smarty_tpl->tpl_vars['ADMIN_DIR']->value;?>
/images/technology/memcached.png" height="60" alt=""></div></div><?php }
if (isset($_smarty_tpl->tpl_vars['technology']->value['apache'])) {?><div class="technology_item"><div class="technology_version"><?php echo $_smarty_tpl->tpl_vars['technology']->value['apache'];?>
</div><div class="technology_logo"><img src="/<?php echo $_smarty_tpl->tpl_vars['ADMIN_DIR']->value;?>
/images/technology/apache.png" height="60" alt=""></div></div><?php }
if (isset($_smarty_tpl->tpl_vars['technology']->value['nginx'])) {?><div class="technology_item"><div class="technology_version"><?php echo $_smarty_tpl->tpl_vars['technology']->value['nginx'];?>
</div><div class="technology_logo"><img src="/<?php echo $_smarty_tpl->tpl_vars['ADMIN_DIR']->value;?>
/images/technology/nginx.png" height="60" alt=""></div></div><?php }
if (isset($_smarty_tpl->tpl_vars['technology']->value['mongodb'])) {?><div class="technology_item"><div class="technology_version"><?php echo $_smarty_tpl->tpl_vars['technology']->value['mongodb'];?>
</div><div class="technology_logo"><img src="/<?php echo $_smarty_tpl->tpl_vars['ADMIN_DIR']->value;?>
/images/technology/mongodb.png" height="60" alt=""></div></div><?php }
if (isset($_smarty_tpl->tpl_vars['technology']->value['redis'])) {?><div class="technology_item"><div class="technology_version"><?php echo $_smarty_tpl->tpl_vars['technology']->value['redis'];?>
</div><div class="technology_logo"><img src="/<?php echo $_smarty_tpl->tpl_vars['ADMIN_DIR']->value;?>
/images/technology/redis.png" height="60" alt=""></div></div><?php }?></div></div><?php }
}
