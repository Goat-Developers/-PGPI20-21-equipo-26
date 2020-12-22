<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-13 20:42:20
  from 'C:\xampp\htdocs\microGranjasEshop\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd66e9ce30429_40048511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a301b4969ad86b23089c9e43f1f39e362b76484' => 
    array (
      0 => 'C:\\xampp\\htdocs\\microGranjasEshop\\themes\\classic\\templates\\page.tpl',
      1 => 1607886129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd66e9ce30429_40048511 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3130283675fd66e9ce2a754_85613473', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_18192052835fd66e9ce2b016_18591926 extends Smarty_Internal_Block
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
class Block_3227910775fd66e9ce2ab63_77415130 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18192052835fd66e9ce2b016_18591926', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_6739868175fd66e9ce2e535_49741760 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_11167216005fd66e9ce2ea55_76903867 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_3655075455fd66e9ce2e178_28461352 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6739868175fd66e9ce2e535_49741760', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11167216005fd66e9ce2ea55_76903867', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_2630711605fd66e9ce2f552_69998150 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_9490559285fd66e9ce2f209_30587581 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2630711605fd66e9ce2f552_69998150', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_3130283675fd66e9ce2a754_85613473 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3130283675fd66e9ce2a754_85613473',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_3227910775fd66e9ce2ab63_77415130',
  ),
  'page_title' => 
  array (
    0 => 'Block_18192052835fd66e9ce2b016_18591926',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_3655075455fd66e9ce2e178_28461352',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_6739868175fd66e9ce2e535_49741760',
  ),
  'page_content' => 
  array (
    0 => 'Block_11167216005fd66e9ce2ea55_76903867',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_9490559285fd66e9ce2f209_30587581',
  ),
  'page_footer' => 
  array (
    0 => 'Block_2630711605fd66e9ce2f552_69998150',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3227910775fd66e9ce2ab63_77415130', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3655075455fd66e9ce2e178_28461352', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9490559285fd66e9ce2f209_30587581', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
