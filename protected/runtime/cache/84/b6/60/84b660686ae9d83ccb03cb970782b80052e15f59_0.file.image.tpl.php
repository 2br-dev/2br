<?php
/* Smarty version 3.1.31, created on 2020-10-16 15:07:13
  from "C:\localserver\OpenServer\domains\2br.local\protected\app\core\admin-template\fields\image.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f898cf1eb8cd1_80952058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84b660686ae9d83ccb03cb970782b80052e15f59' => 
    array (
      0 => 'C:\\localserver\\OpenServer\\domains\\2br.local\\protected\\app\\core\\admin-template\\fields\\image.tpl',
      1 => 1602568199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f898cf1eb8cd1_80952058 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Fine Uploader Thumbnails template w/ customization====================================================================== --><?php echo '<script'; ?>
>initialFiles['<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
']=<?php if (isset($_smarty_tpl->tpl_vars['json']->value)) {
echo $_smarty_tpl->tpl_vars['json']->value;
} else { ?>[]<?php }?>;<?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/template" id="upload-template"><div class="qq-uploader-selector qq-uploader" qq-drop-area-text="Drop files here"><div class="qq-total-progress-bar-container-selector qq-total-progress-bar-container"><div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar"></div></div><div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone><span class="qq-upload-drop-area-text-selector"></span></div><div class="attachments__selector"><i class="attachments__selector__icon zmdi zmdi-attachment-alt"></i> Перетащите <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['f_file_count']) && $_smarty_tpl->tpl_vars['settings']->value['f_file_count'] == 1) {?>изображение<?php } else { ?>изображения<?php }?> сюда или <a class="attachments__selector__link qq-upload-button-selector qq-upload-button" id="dropzone-<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
-target" tabindex="-1">выберите ...</a></div><span class="qq-drop-processing-selector qq-drop-processing"><span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span></span><ul class="attachments-list qq-upload-list-selector qq-upload-list" aria-live="polite" aria-relevant="additions removals"><li class="attachments-list__item"><div class="attachments-file clearfix"><div class="attachments-file__control"><button type="button" class="attachments-file__control__link is-delete qq-upload-delete-selector qq-upload-delete"><i class="zmdi zmdi-delete" aria-label="Delete"></i></button><button type="button" class="attachments-file__control__link is-edit" onclick="return editOrd(<?php echo $_smarty_tpl->tpl_vars['e']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['e']->value['ord'];?>
)" title="Редактировать порядок"><i class="zmdi zmdi-edit"></i></button><button type="button" class="attachments-file__control__link is-visible" onclick="return editVisible(<?php echo $_smarty_tpl->tpl_vars['e']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['e']->value['visible'];?>
)"><i class="zmdi zmdi-eye<?php if ($_smarty_tpl->tpl_vars['e']->value['visible'] == 0) {?>-off<?php }?>" id="fvisible_<?php echo $_smarty_tpl->tpl_vars['e']->value['id'];?>
"></i></button></div><div class="qq-progress-bar-container-selector attachments-file__progress progress progress-xss active no-radius"><div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-success qq-progress-bar-selector qq-progress-bar"></div></div><div class="attachments-file__preview"><img src="/cp/images/ff/file.svg" class="attachments-file__preview__ico qq-thumbnail-selector" qq-max-size="100" qq-server-scale alt=""></div><div class="attachments-file__content"><div class="attachments-file__name"><i class="zmdi zmdi-edit"></i> <span class="attachments-file__name__title qq-upload-file-selector qq-upload-file" title="Редактировать alt | title"></span></div><div class="attachments-file__date-size qq-upload-size-selector qq-upload-size"></div></div></div></li></ul><dialog class="qq-alert-dialog-selector"><div class="qq-dialog-message-selector"></div><div class="qq-dialog-buttons"><button type="button" class="qq-cancel-button-selector">Close</button></div></dialog><dialog class="qq-confirm-dialog-selector"><div class="qq-dialog-message-selector"></div><div class="qq-dialog-buttons"><button type="button" class="qq-cancel-button-selector">No</button><button type="button" class="qq-ok-button-selector">Yes</button></div></dialog><dialog class="qq-prompt-dialog-selector"><div class="qq-dialog-message-selector"></div><input type="text"><div class="qq-dialog-buttons"><button type="button" class="qq-cancel-button-selector">Cancel</button><button type="button" class="qq-ok-button-selector">Ok</button></div></dialog></div><?php echo '</script'; ?>
><!-- Fine Uploader DOM Element====================================================================== --><div class="attachments js-fileupload"><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="js-fileupload-group"><input type="hidden" name="settings[<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
]" value="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['json'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['json'], ENT_QUOTES, 'UTF-8', true);
}?>" class="js-fileupload-settings"><input type="hidden" name="count[<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
]" value="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['f_file_count'])) {
echo $_smarty_tpl->tpl_vars['settings']->value['f_file_count'];
}?>" class="js-fileupload-count"><input type="file" <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['f_file_count']) && $_smarty_tpl->tpl_vars['settings']->value['f_file_count'] == 1) {?>name="files_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[]" multiple<?php } else { ?>name="files_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }?> class="attachments__field"><div class="attachments__uploader js-fileupload-control" id="uploads-<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['action']->value) {?> data-action="/<?php echo $_smarty_tpl->tpl_vars['ADMIN_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php }?>><ul class="attachments-list qq-upload-list-selector qq-upload-list" aria-live="polite" aria-relevant="additions removals"></ul></div></div><?php }
}
