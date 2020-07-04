<?php /* Smarty version Smarty-3.1.7, created on 2020-06-30 08:39:29
         compiled from "C:\wamp64\www\vtiger\includes\runtime/../../layouts/v7\modules\Users\CalendarDetailViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16258052745efafa414c1032-12644415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '728c045576e0422b38d2ee225b5039297febfa96' => 
    array (
      0 => 'C:\\wamp64\\www\\vtiger\\includes\\runtime/../../layouts/v7\\modules\\Users\\CalendarDetailViewPreProcess.tpl',
      1 => 1593182140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16258052745efafa414c1032-12644415',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5efafa41509ff',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5efafa41509ff')) {function content_5efafa41509ff($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("SettingsMenuStart.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="bodyContents"><div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("CalendarDetailViewHeader.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>