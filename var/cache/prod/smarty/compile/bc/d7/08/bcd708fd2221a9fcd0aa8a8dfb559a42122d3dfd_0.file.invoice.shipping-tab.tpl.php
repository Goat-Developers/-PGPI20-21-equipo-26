<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-15 20:20:39
  from 'C:\xampp\htdocs\microGranjasEshop\pdf\invoice.shipping-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd90c872e3275_03430141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcd708fd2221a9fcd0aa8a8dfb559a42122d3dfd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\microGranjasEshop\\pdf\\invoice.shipping-tab.tpl',
      1 => 1608048605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd90c872e3275_03430141 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }
}
