<?php /* Smarty version Smarty-3.1.7, created on 2020-06-26 18:57:01
         compiled from "C:\wamp64\www\vtiger\includes\runtime/../../layouts/v7\modules\Potentials\DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:390267845ef644fd9d8ba0-43392125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba21471b867f6e1a7f973aeffeb1eea5384c64cf' => 
    array (
      0 => 'C:\\wamp64\\www\\vtiger\\includes\\runtime/../../layouts/v7\\modules\\Potentials\\DetailViewSummaryContents.tpl',
      1 => 1593182123,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '390267845ef644fd9d8ba0-43392125',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ef644fda1286',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ef644fda1286')) {function content_5ef644fda1286($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>