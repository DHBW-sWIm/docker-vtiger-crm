<?php /* Smarty version Smarty-3.1.7, created on 2020-06-26 17:53:06
         compiled from "C:\wamp64\www\vtiger\includes\runtime/../../layouts/v7\modules\Import\ImportLandingPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10724554465ef636024d83b5-99191200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3578ef81b55bdb4c183c4f470f51d65a30a486cf' => 
    array (
      0 => 'C:\\wamp64\\www\\vtiger\\includes\\runtime/../../layouts/v7\\modules\\Import\\ImportLandingPage.tpl',
      1 => 1593182115,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10724554465ef636024d83b5-99191200',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'FOR_MODULE' => 0,
    'TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ef636025e347',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ef636025e347')) {function content_5ef636025e347($_smarty_tpl) {?>


<div class='fc-overlay-modal'>
	<div class = "modal-content">
		<div class="overlayHeader">
			<?php ob_start();?><?php echo vtranslate('LBL_IMPORT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo vtranslate($_smarty_tpl->tpl_vars['FOR_MODULE']->value,$_smarty_tpl->tpl_vars['FOR_MODULE']->value);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['TITLE'] = new Smarty_variable($_tmp1." ".$_tmp2, null, 0);?>
			<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['TITLE']->value), 0);?>

		</div>
		<div class='modal-body' style="margin-bottom:100%" id ="landingPageDiv">
			<hr>
			<div class="landingPage container-fluid importServiceSelectionContainer">
				<div class = "col-lg-12" style = "font-size: 16px;"><?php echo vtranslate('LBL_SELECT_IMPORT_FILE_FORMAT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div>
				<br>
				<br>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" id = "csvImport">
					<div class="menu-item app-item app-SALES">
						<span class="fa fa-file-text"></span>
						<div>
							<h4><?php echo vtranslate('LBL_CSV_FILE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4>
						</div>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['FOR_MODULE']->value=='Contacts'){?>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" id = "vcfImport">
						<div class="menu-item app-item app-INVENTORY">
							<span class="fa fa-user"></span>
							<div>
								<h4><?php echo vtranslate('LBL_VCF_FILE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4>
							</div>
						</div>
					</div>
				<?php }elseif($_smarty_tpl->tpl_vars['FOR_MODULE']->value=='Calendar'){?>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" id="icsImport">
						<div class="menu-item app-item" style="background: #b74f6f none repeat scroll 0 0 !important;">
							<span class="fa fa-calendar-o"></span>
							<div>
								<h4><?php echo vtranslate('LBL_ICS_FILE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4>
							</div>
						</div>
					</div>
				<?php }?>
			</div>
		</div>
	</div>
</div>
<?php }} ?>