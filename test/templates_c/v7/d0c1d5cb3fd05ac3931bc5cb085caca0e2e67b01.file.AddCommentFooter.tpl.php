<?php /* Smarty version Smarty-3.1.7, created on 2019-06-25 14:12:02
         compiled from "/var/www/html/mastercrm-vtiger/includes/runtime/../../layouts/v7/modules/Vtiger/AddCommentFooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13478812705d122bb29586f5-54296436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0c1d5cb3fd05ac3931bc5cb085caca0e2e67b01' => 
    array (
      0 => '/var/www/html/mastercrm-vtiger/includes/runtime/../../layouts/v7/modules/Vtiger/AddCommentFooter.tpl',
      1 => 1560717990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13478812705d122bb29586f5-54296436',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'MODULE_NAME' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d122bb29609b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d122bb29609b')) {function content_5d122bb29609b($_smarty_tpl) {?>
<div class="modal-footer"><div class="row-fluid"><div class="col-xs-6"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="col-xs-6"><div><div class="pull-right cancelLinkContainer" style="margin-top:0px;"><a class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><button class="btn btn-success" type="submit" name="saveButton"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></div></div></div><?php }} ?>