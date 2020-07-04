<?php /* Smarty version Smarty-3.1.7, created on 2020-06-30 08:05:57
         compiled from "C:\wamp64\www\vtiger\includes\runtime/../../layouts/v7\modules\Vtiger\dashboards\TagCloud.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6347630265efaf2654bf9e6-91417861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dd5a51e68cfab8bb5346835ef5d82a7622f211e' => 
    array (
      0 => 'C:\\wamp64\\www\\vtiger\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\dashboards\\TagCloud.tpl',
      1 => 1593182147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6347630265efaf2654bf9e6-91417861',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5efaf265525df',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5efaf265525df')) {function content_5efaf265525df($_smarty_tpl) {?>
<div class="dashboardWidgetHeader"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/WidgetHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="dashboardWidgetContent" style='padding:5px'><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/TagCloudContents.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="widgeticons dashBoardWidgetFooter"><div class="footerIcons pull-right"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashboardFooterIcons.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div>	 <?php }} ?>