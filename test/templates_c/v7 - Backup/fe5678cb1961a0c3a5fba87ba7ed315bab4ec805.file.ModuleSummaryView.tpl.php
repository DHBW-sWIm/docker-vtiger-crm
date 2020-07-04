<?php /* Smarty version Smarty-3.1.7, created on 2020-06-26 18:57:01
         compiled from "C:\wamp64\www\vtiger\includes\runtime/../../layouts/v7\modules\Potentials\ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9204711255ef644fd822b33-68906630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe5678cb1961a0c3a5fba87ba7ed315bab4ec805' => 
    array (
      0 => 'C:\\wamp64\\www\\vtiger\\includes\\runtime/../../layouts/v7\\modules\\Potentials\\ModuleSummaryView.tpl',
      1 => 1593182123,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9204711255ef644fd822b33-68906630',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ef644fd85ac8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ef644fd85ac8')) {function content_5ef644fd85ac8($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>