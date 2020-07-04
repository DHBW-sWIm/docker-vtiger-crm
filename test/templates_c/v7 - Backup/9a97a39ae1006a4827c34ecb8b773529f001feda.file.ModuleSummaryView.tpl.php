<?php /* Smarty version Smarty-3.1.7, created on 2020-06-26 17:12:48
         compiled from "C:\wamp64\www\vtiger\includes\runtime/../../layouts/v7\modules\Accounts\ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5511507485ef62c90837f50-13885187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a97a39ae1006a4827c34ecb8b773529f001feda' => 
    array (
      0 => 'C:\\wamp64\\www\\vtiger\\includes\\runtime/../../layouts/v7\\modules\\Accounts\\ModuleSummaryView.tpl',
      1 => 1593182109,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5511507485ef62c90837f50-13885187',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ef62c9087075',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ef62c9087075')) {function content_5ef62c9087075($_smarty_tpl) {?>

<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>