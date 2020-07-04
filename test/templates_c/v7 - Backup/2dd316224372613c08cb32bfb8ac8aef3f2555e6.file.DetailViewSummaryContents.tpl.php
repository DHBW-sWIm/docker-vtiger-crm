<?php /* Smarty version Smarty-3.1.7, created on 2020-06-26 17:56:37
         compiled from "C:\wamp64\www\vtiger\includes\runtime/../../layouts/v7\modules\Leads\DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15087376135ef636d57ef7e5-01938309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dd316224372613c08cb32bfb8ac8aef3f2555e6' => 
    array (
      0 => 'C:\\wamp64\\www\\vtiger\\includes\\runtime/../../layouts/v7\\modules\\Leads\\DetailViewSummaryContents.tpl',
      1 => 1593182118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15087376135ef636d57ef7e5-01938309',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ef636d582074',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ef636d582074')) {function content_5ef636d582074($_smarty_tpl) {?>

<form id="detailView" class="clearfix" method="POST" style="position: relative"><div class="col-lg-12 resizable-summary-view"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></form><?php }} ?>