<?php /* Smarty version Smarty-3.1.8, created on 2013-02-20 20:11:57
         compiled from "/var/www/prestashop/themes/default/mobile/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1144949678512511edd6ed35-28179536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a9efd0d4c450c51d9adb5bf65731b2e2a0c86a7' => 
    array (
      0 => '/var/www/prestashop/themes/default/mobile/index.tpl',
      1 => 1356959956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1144949678512511edd6ed35-28179536',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_512511edde2f56_15509539',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_512511edde2f56_15509539')) {function content_512511edde2f56_15509539($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>