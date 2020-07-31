<?php /* Smarty version Smarty-3.1.7, created on 2020-07-22 15:36:22
         compiled from "/var/www/html/vtiger/includes/runtime/../../layouts/v7/modules/MailManager/IndexViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13413748155f185cf6ccecf2-76657306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f2caf59b788c503edb85a5cac5b13aa17e0aeb0' => 
    array (
      0 => '/var/www/html/vtiger/includes/runtime/../../layouts/v7/modules/MailManager/IndexViewPreProcess.tpl',
      1 => 1595424176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13413748155f185cf6ccecf2-76657306',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5f185cf6ce6e1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f185cf6ce6e1')) {function content_5f185cf6ce6e1($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/Topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="container-fluid app-nav">
    <div class="row">
        <?php echo $_smarty_tpl->getSubTemplate ("modules/MailManager/partials/SidebarHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModuleHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</div>
</nav>
    <div id='overlayPageContent' class='fade modal overlayPageContent content-area overlay-container-60' tabindex='-1' role='dialog' aria-hidden='true'>
        <div class="data">
        </div>
        <div class="modal-dialog">
        </div>
    </div>
<div class="main-container main-container-<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
">
<div id="modnavigator" class="module-nav">
    <div class="hidden-xs hidden-sm mod-switcher-container">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/Menubar.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</div>

<div class="listViewPageDiv content-area" id="listViewContent">
<?php }} ?>