<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-16 11:33:54
  from 'C:\xampp\htdocs\microGranjasEshop\themes\classic\templates\customer\_partials\my-account-links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd9e2926768f0_67379424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '903631001e810a71d4f1d3904c843a03b5f1cbad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\microGranjasEshop\\themes\\classic\\templates\\customer\\_partials\\my-account-links.tpl',
      1 => 1608048608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd9e2926768f0_67379424 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8978151925fd9e292674077_25336303', 'my_account_links');
?>

<?php }
/* {block 'my_account_links'} */
class Block_8978151925fd9e292674077_25336303 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'my_account_links' => 
  array (
    0 => 'Block_8978151925fd9e292674077_25336303',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" class="account-link">
    <i class="material-icons">&#xE5CB;</i>
    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</span>
  </a>
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
" class="account-link">
    <i class="material-icons">&#xE88A;</i>
    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
  </a>
<?php
}
}
/* {/block 'my_account_links'} */
}