<?php /* Smarty version Smarty-3.1.7, created on 2020-07-22 15:36:22
         compiled from "/var/www/html/vtiger/includes/runtime/../../layouts/v7/modules/MailManager/partials/SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14403352005f185cf6cf9a12-42907468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5eab9532cbcc0b2451e286c82aa34d52cb1cea6f' => 
    array (
      0 => '/var/www/html/vtiger/includes/runtime/../../layouts/v7/modules/MailManager/partials/SidebarHeader.tpl',
      1 => 1595424176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14403352005f185cf6cf9a12-42907468',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SELECTED_MENU_CATEGORY' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5f185cf6d04dc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f185cf6d04dc')) {function content_5f185cf6d04dc($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['APP_IMAGE_MAP'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppIcons(), null, 0);?>
<div class="col-sm-12 col-xs-12 app-indicator-icon-container app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
">
    <div class="row" title="<?php echo strtoupper(vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value));?>
">
        <span class="app-indicator-icon fa vicon-mailmanager"></span>
    </div>
</div>
    
<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>