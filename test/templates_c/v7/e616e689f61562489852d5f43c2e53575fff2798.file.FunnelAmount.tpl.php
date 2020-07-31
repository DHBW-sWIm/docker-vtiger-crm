<?php /* Smarty version Smarty-3.1.7, created on 2020-07-23 05:32:25
         compiled from "/var/www/html/vtiger/includes/runtime/../../layouts/v7/modules/Potentials/dashboards/FunnelAmount.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16708575105f1920e936bff7-22173004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e616e689f61562489852d5f43c2e53575fff2798' => 
    array (
      0 => '/var/www/html/vtiger/includes/runtime/../../layouts/v7/modules/Potentials/dashboards/FunnelAmount.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16708575105f1920e936bff7-22173004',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5f1920e939267',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f1920e939267')) {function content_5f1920e939267($_smarty_tpl) {?>

<div class="dashboardWidgetHeader">
	<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/WidgetHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div class="dashboardWidgetContent">
	<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashBoardWidgetContents.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div class="widgeticons dashBoardWidgetFooter">
    <div class="footerIcons pull-right">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashboardFooterIcons.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</div>



<script type="text/javascript">
	Vtiger_Barchat_Widget_Js('Vtiger_FunnelAmount_Widget_Js',{},{});
</script>
<?php }} ?>