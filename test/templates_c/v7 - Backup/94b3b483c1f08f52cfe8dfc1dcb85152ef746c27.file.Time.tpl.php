<?php /* Smarty version Smarty-3.1.7, created on 2020-06-26 17:38:24
         compiled from "C:\wamp64\www\vtiger\includes\runtime/../../layouts/v7\modules\Vtiger\uitypes\Time.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3449324655ef63290c9f341-11948604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94b3b483c1f08f52cfe8dfc1dcb85152ef746c27' => 
    array (
      0 => 'C:\\wamp64\\www\\vtiger\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\uitypes\\Time.tpl',
      1 => 1593182151,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3449324655ef63290c9f341-11948604',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'BLOCK_FIELDS' => 0,
    'USER_MODEL' => 0,
    'FIELD_NAME' => 0,
    'MODULE' => 0,
    'TIME_FORMAT' => 0,
    'FIELD_VALUE' => 0,
    'SPECIAL_VALIDATOR' => 0,
    'FIELD_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ef63290d4c67',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ef63290d4c67')) {function content_5ef63290d4c67($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo(), null, 0);?><?php $_smarty_tpl->tpl_vars["SPECIAL_VALIDATOR"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator(), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_VALUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["TIME_FORMAT"] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('hour_format'), null, 0);?><?php if ((!$_smarty_tpl->tpl_vars['FIELD_NAME']->value)){?><?php $_smarty_tpl->tpl_vars["FIELD_NAME"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName(), null, 0);?><?php }?><div class="input-group inputElement time"><input id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" type="text" data-format="<?php echo $_smarty_tpl->tpl_vars['TIME_FORMAT']->value;?>
" class="timepicker-default form-control" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"<?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)){?>data-validator='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
'<?php }?><?php if ($_smarty_tpl->tpl_vars['FIELD_INFO']->value["mandatory"]==true){?> data-rule-required="true" <?php }?><?php if (count($_smarty_tpl->tpl_vars['FIELD_INFO']->value['validator'])){?>data-specific-rules='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value["validator"]);?>
'<?php }?> data-rule-time="true"/><span class="input-group-addon" style="width: 30px;"><i class="fa fa-clock-o"></i></span></div>
<?php }} ?>