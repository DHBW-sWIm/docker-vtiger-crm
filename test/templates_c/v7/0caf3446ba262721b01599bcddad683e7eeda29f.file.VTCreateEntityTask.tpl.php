<?php /* Smarty version Smarty-3.1.7, created on 2020-01-21 10:17:29
         compiled from "/srv/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/Workflows/Tasks/VTCreateEntityTask.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17146078505e26cfb919f666-70654962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0caf3446ba262721b01599bcddad683e7eeda29f' => 
    array (
      0 => '/srv/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/Workflows/Tasks/VTCreateEntityTask.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17146078505e26cfb919f666-70654962',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'WORKFLOW_MODEL' => 0,
    'RELATED_MODULES_INFO' => 0,
    'TASK_OBJECT' => 0,
    'RELATED_MODULES' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5e26cfb91adf2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e26cfb91adf2')) {function content_5e26cfb91adf2($_smarty_tpl) {?>
<div class="row"><div class="col-lg-9"><div class="row"><div class="col-lg-2" style="position:relative;top:4px;padding-right: 0px;"><?php echo vtranslate('LBL_MODULES_TO_CREATE_RECORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <span class="redColor">*</span></div><div class="col-lg-10"><?php $_smarty_tpl->tpl_vars['RELATED_MODULES_INFO'] = new Smarty_variable($_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->getDependentModules(), null, 0);?><?php $_smarty_tpl->tpl_vars['RELATED_MODULES'] = new Smarty_variable(array_keys($_smarty_tpl->tpl_vars['RELATED_MODULES_INFO']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->entity_type, null, 0);?><select class="select2" id="createEntityModule" name="entity_type" data-rule-required="true" style="min-width: 150px;"><option value=""><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['MODULE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RELATED_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE']->key => $_smarty_tpl->tpl_vars['MODULE']->value){
$_smarty_tpl->tpl_vars['MODULE']->_loop = true;
?><option <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->entity_type==$_smarty_tpl->tpl_vars['MODULE']->value){?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php } ?></select></div></div></div></div><br><div id="addCreateEntityContainer" style="margin-bottom: 70px;"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("CreateEntity.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
<?php }} ?>