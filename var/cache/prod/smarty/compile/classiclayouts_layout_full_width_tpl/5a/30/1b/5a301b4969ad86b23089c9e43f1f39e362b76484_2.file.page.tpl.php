<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-17 15:38:22
  from 'C:\xampp\htdocs\microGranjasEshop\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fdb6d5ed2dc86_52520669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a301b4969ad86b23089c9e43f1f39e362b76484' => 
    array (
      0 => 'C:\\xampp\\htdocs\\microGranjasEshop\\themes\\classic\\templates\\page.tpl',
      1 => 1608207335,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdb6d5ed2dc86_52520669 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16865945185fdb6d5ed25b64_48807228', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_102695815fdb6d5ed267b8_72434462 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_7485874725fdb6d5ed26157_18192682 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102695815fdb6d5ed267b8_72434462', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_13748530035fdb6d5ed2b851_64326510 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_5064335525fdb6d5ed2bf37_59844143 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16602495325fdb6d5ed2b304_88518191 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13748530035fdb6d5ed2b851_64326510', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5064335525fdb6d5ed2bf37_59844143', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_17870096205fdb6d5ed2cfd0_75268909 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_6187688335fdb6d5ed2c9d5_08818851 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17870096205fdb6d5ed2cfd0_75268909', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_16865945185fdb6d5ed25b64_48807228 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16865945185fdb6d5ed25b64_48807228',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_7485874725fdb6d5ed26157_18192682',
  ),
  'page_title' => 
  array (
    0 => 'Block_102695815fdb6d5ed267b8_72434462',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_16602495325fdb6d5ed2b304_88518191',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_13748530035fdb6d5ed2b851_64326510',
  ),
  'page_content' => 
  array (
    0 => 'Block_5064335525fdb6d5ed2bf37_59844143',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_6187688335fdb6d5ed2c9d5_08818851',
  ),
  'page_footer' => 
  array (
    0 => 'Block_17870096205fdb6d5ed2cfd0_75268909',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7485874725fdb6d5ed26157_18192682', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16602495325fdb6d5ed2b304_88518191', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6187688335fdb6d5ed2c9d5_08818851', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
