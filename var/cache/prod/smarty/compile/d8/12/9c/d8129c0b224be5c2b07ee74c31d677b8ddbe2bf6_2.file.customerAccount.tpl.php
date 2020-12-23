<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-23 14:57:06
  from 'C:\xampp\htdocs\microGranjasEshop\modules\psgdpr\views\templates\front\customerAccount.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fe34cb257d172_59299490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8129c0b224be5c2b07ee74c31d677b8ddbe2bf6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\microGranjasEshop\\modules\\psgdpr\\views\\templates\\front\\customerAccount.tpl',
      1 => 1608729652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe34cb257d172_59299490 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="psgdpr-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['front_controller']->value, ENT_QUOTES, 'UTF-8');?>
">
    <span class="link-item">
        <i class="material-icons">account_box</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'GDPR - Personal data','mod'=>'psgdpr'),$_smarty_tpl ) );?>

    </span>
</a>
<?php }
}
