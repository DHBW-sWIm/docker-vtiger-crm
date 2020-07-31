<?php /* Smarty version Smarty-3.1.7, created on 2020-07-30 10:57:01
         compiled from "/var/www/html/vtiger/includes/runtime/../../layouts/v7/modules/Users/UserEditViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3284349385f22a77d656146-77517097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '471a5e4df3ebe742b786d45c609a6d82e0c74d44' => 
    array (
      0 => '/var/www/html/vtiger/includes/runtime/../../layouts/v7/modules/Users/UserEditViewPreProcess.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3284349385f22a77d656146-77517097',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5f22a77d66a20',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f22a77d66a20')) {function content_5f22a77d66a20($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['QUALIFIED_MODULE'] = new Smarty_variable('Settings:User', null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("SettingsMenuStart.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="bodyContents"><div class="mainContainer row-fluid"><?php }} ?>