<?php /* Smarty version Smarty-3.1.7, created on 2020-07-22 21:31:25
         compiled from "/var/www/html/vtiger/includes/runtime/../../layouts/v7/modules/Reports/EditChartHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1158629595f18b02d4a4920-62088815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79d1861b5ec62dd2be54a93e7a0b13d35bf05c22' => 
    array (
      0 => '/var/www/html/vtiger/includes/runtime/../../layouts/v7/modules/Reports/EditChartHeader.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1158629595f18b02d4a4920-62088815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'LABELS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5f18b02d4b641',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f18b02d4b641')) {function content_5f18b02d4b641($_smarty_tpl) {?>
<div class="editContainer" style="padding-left: 2%;padding-right: 2%"><div class="row"><?php $_smarty_tpl->tpl_vars['LABELS'] = new Smarty_variable(array("step1"=>"LBL_REPORT_DETAILS","step2"=>"LBL_FILTERS","step3"=>"LBL_SELECT_CHART"), null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("BreadCrumbs.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('ACTIVESTEP'=>1,'BREADCRUMB_LABELS'=>$_smarty_tpl->tpl_vars['LABELS']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE']->value), 0);?>
</div><div class="clearfix"></div><?php }} ?>