<?php
/* Smarty version 3.1.31, created on 2017-03-13 15:46:45
  from "C:\xampp\htdocs\evo60\templates\ModernBlue\loginoutprocess.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c6b0d5627ff8_87730917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3624036dc6c4b33848ca51863e574143a0c19102' => 
    array (
      0 => 'C:\\xampp\\htdocs\\evo60\\templates\\ModernBlue\\loginoutprocess.tpl',
      1 => 1489374113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58c6b0d5627ff8_87730917 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="site_content">
<!-- Content -->
	<?php echo html_script('assets/evolution/js/link2progress.js');?>

	<?php echo '<script'; ?>
>
	var actionloginout = '<?php echo $_smarty_tpl->tpl_vars['loginout_process']->value;?>
';
	
		$(function(){
			loginoutprocess(actionloginout);
		});
	
<?php echo '</script'; ?>
>
<div style="width:500px; margin:0 auto">
<div class="widget-main-title">
<?php if ($_smarty_tpl->tpl_vars['loginout_process']->value == 'login') {?>
	<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['welcome_back'];?>
 <strong><?php echo $_smarty_tpl->tpl_vars['user_info']->value['username'];?>
</strong>!
<?php } else { ?>
	<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['good_bye'];?>

<?php }?>
</div>
<div class="widget-content">
<div align="center">
<?php if ($_smarty_tpl->tpl_vars['loginout_process']->value == 'login') {?>
	<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['please_wait_login'];?>

<?php } else { ?>
	<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['please_wait_logout'];?>

<?php }?>
</div>

<table align="center">
	<tr><td>
                        <div class="progressbar" id="progress">
                            <div id="progressbar"></div>
                        </div>
	</td></tr>
</table>
</div>   
</div>
<!-- End Content -->


</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
