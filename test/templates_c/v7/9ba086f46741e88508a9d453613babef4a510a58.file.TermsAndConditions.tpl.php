<?php /* Smarty version Smarty-3.1.7, created on 2020-01-17 21:42:45
         compiled from "/var/www/html/mastercrm-vtiger/includes/runtime/../../layouts/v7/modules/Settings/Vtiger/TermsAndConditions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11335686815e222a55469772-57702997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ba086f46741e88508a9d453613babef4a510a58' => 
    array (
      0 => '/var/www/html/mastercrm-vtiger/includes/runtime/../../layouts/v7/modules/Settings/Vtiger/TermsAndConditions.tpl',
      1 => 1560717990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11335686815e222a55469772-57702997',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'INVENTORY_MODULES' => 0,
    'MODULE_NAME' => 0,
    'CONDITION_TEXT' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5e222a554b09c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e222a554b09c')) {function content_5e222a554b09c($_smarty_tpl) {?>
<div class="editViewContainer" id="TermsAndConditionsContainer"><div class="col-sm-12 col-lg-12 col-md-12 form-horizontal"><div class="block"><div><h4><?php echo vtranslate('LBL_TERMS_AND_CONDITIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4></div><hr><div class="contents row form-group"><div class="col-lg-offset-1 col-lg-2 col-md-2 col-sm-2 control-label fieldLabel"><label><?php echo vtranslate('LBL_SELECT_MODULE','Vtiger');?>
</label></div><div class="fieldValue col-lg-4 col-md-4 col-sm-4 "><select class="select2-container select2 inputElement col-sm-6 selectModule"><?php  $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE_NAME']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['INVENTORY_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_NAME']->key => $_smarty_tpl->tpl_vars['MODULE_NAME']->value){
$_smarty_tpl->tpl_vars['MODULE_NAME']->_loop = true;
?><option value=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo vtranslate($_tmp1,$_tmp2);?>
</option><?php } ?></select></div></div><br><div class="col-lg-offset-1 col-lg-11 col-md-11 col-sm-11"><textarea class=" TCContent form-control" rows="10" placeholder="<?php echo vtranslate('LBL_SPECIFY_TERMS_AND_CONDITIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" style="width:100%;" ><?php echo $_smarty_tpl->tpl_vars['CONDITION_TEXT']->value;?>
</textarea></div><div class='clearfix'></div><br></div></div><br><div class='modal-overlay-footer clearfix '><div class="row clearfix"><div class='textAlignCenter col-lg-12 col-md-12 col-sm-12 '><button type='submit' class='btn btn-success saveButton saveTC hide' type="submit" ><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>&nbsp;&nbsp;</div></div></div></div>

<?php }} ?>