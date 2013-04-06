<?php /*%%SmartyHeaderCode:10552577065120fc589f6fe1-42788604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8a2ef05a658b7942d9b9dfb5c6564dcac8678ea' => 
    array (
      0 => '/var/www/prestashop/themes/default/modules/blockcategories/blockcategories.tpl',
      1 => 1356959956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10552577065120fc589f6fe1-42788604',
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5121034fc4b715_62088312',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5121034fc4b715_62088312')) {function content_5121034fc4b715_62088312($_smarty_tpl) {?>
<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<p class="title_block">Категории:</p>
	<div class="block_content">
		<ul class="tree dhtml">
				</ul>
		
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>