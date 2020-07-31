<?php /* Smarty version Smarty-3.1.7, created on 2020-07-22 14:37:18
         compiled from "/var/www/html/vtiger/includes/runtime/../../layouts/v7/modules/Potentials/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6495045085f184f1e66a8b5-46869709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56becc40545e6ae048aaf0077db21fb4bdee5fb3' => 
    array (
      0 => '/var/www/html/vtiger/includes/runtime/../../layouts/v7/modules/Potentials/ModuleSummaryView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6495045085f184f1e66a8b5-46869709',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5f184f1e6723d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f184f1e6723d')) {function content_5f184f1e6723d($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>