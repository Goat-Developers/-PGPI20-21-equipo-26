<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-17 15:39:44
  from 'C:\xampp\htdocs\microGranjasEshop\modules\colorchange\views\templates\hook\font.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fdb6db0d3dfd2_44217445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3773eba5f26dd8405108c3e85858e309cd8dfcba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\microGranjasEshop\\modules\\colorchange\\views\\templates\\hook\\font.tpl',
      1 => 1608215805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdb6db0d3dfd2_44217445 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!--<?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"><?php echo '</script'; ?>
>-->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/css/fontselect.css" />
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
views/js/jquery.fontselect.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      $(function(){
        $('#font').fontselect().change(function(){
          // replace + signs with spaces for css
          var font = $(this).val().replace(/\+/g, ' ');
          
          // split font into family and weight
          font = font.split(':');
          
          // set family on paragraphs 
          $('p').css('font-family', font[0]);
          $('#font2').val(font[0]);
        });
      });
    <?php echo '</script'; ?>
>
<div class="bootstrap panel">
	<div class="panel-heading">
		<i class="icon-picture-o"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Fonts"),$_smarty_tpl ) );?>

	</div>



<form  action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['server']->value,'htmlall','UTF-8' ));?>
" method="post" enctype="multipart/form-data">

<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Font size','mod'=>'colorchange'),$_smarty_tpl ) );?>
</label>
<input type="text" name="fontsize" value="<?php echo $_smarty_tpl->tpl_vars['fsize']->value;?>
">
<p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set the value for font size, only numbers and is in REM, like 1, 0.5, 1.1','mod'=>'colorchange'),$_smarty_tpl ) );?>
</p><br/>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Selected font (select inherit to use default font)','mod'=>'colorchange'),$_smarty_tpl ) );?>
: <?php echo $_smarty_tpl->tpl_vars['fonts']->value;?>
<br/>
<input id="font2" id="font2" name="font2" type="hidden" value=""/>
    <input id="font" name="font2" type="text" value="<?php echo $_smarty_tpl->tpl_vars['fonts']->value;?>
"/>
 
       

    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
     when an unknown printer took a galley of type and scrambled it to make a type 
     specimen book. It has survived not only five centuries, but also the leap into
     electronic typesetting, remaining essentially unchanged. It was popularised 
     in the 1960s with the release of Letraset sheets containing Lorem Ipsum 
     passages, and more recently with desktop publishing software like Aldus 
     PageMaker including versions of Lorem Ipsum.</p>


 <input type="submit" name="submitform" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'colorchange'),$_smarty_tpl ) );?>
" class="btn button" />

 
 </form>
</div>
<?php }
}
