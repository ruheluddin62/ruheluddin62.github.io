<?php
/* Smarty version 3.1.31, created on 2017-03-13 15:49:28
  from "C:\xampp\htdocs\evo60\templates\ModernBlue\login_history.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c6b1780261b0_92079586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08192952503850134ec896019a76bd7527171a50' => 
    array (
      0 => 'C:\\xampp\\htdocs\\evo60\\templates\\ModernBlue\\login_history.tpl',
      1 => 1489416567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c6b1780261b0_92079586 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\evo60\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
<div class="widget-main-title"><?php echo lang('loginhistory');?>
</div>
<div class="widget-content">
    <table width="100%" class="widget-tbl">
        <tr class="titles">
            <td width="20" align="center"><?php echo $_smarty_tpl->tpl_vars['pagination']->value->sort_link('status','&nbsp;');?>
</td>
            <td width="300"><?php echo $_smarty_tpl->tpl_vars['pagination']->value->sort_link('agent',lang('user_agent'));?>
</td>
            <td align="center"><?php echo $_smarty_tpl->tpl_vars['pagination']->value->sort_link('ip',lang('ip_address'));?>
</td>
            <td align="center"><?php echo $_smarty_tpl->tpl_vars['pagination']->value->sort_link('date',lang('date'));?>
</td>
        </tr>
		<?php if ($_smarty_tpl->tpl_vars['pagination']->value->total_rows() > 0) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value->result(), 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                <tr>
                    <td align="center"><img src="<?php echo base_url('assets/evolution/images/');
if ($_smarty_tpl->tpl_vars['item']->value->status == 'Successful') {?>accept<?php } else { ?>fail<?php }?>.png" /></td>
                    <td>
                        <div <?php if ($_smarty_tpl->tpl_vars['item']->value->status != 'Successful') {?>class="fail_td"<?php }?>>
							<?php if ($_smarty_tpl->tpl_vars['item']->value->agent == '') {?>-<?php } else {
echo $_smarty_tpl->tpl_vars['item']->value->agent;
}?>
                        </div>
                    </td>
                    <td align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value->ip;?>
</td>
                    <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value->date,"%b %e %Y %r");?>
</td>
                </tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

		<?php } else { ?>
            <tr>
                <td colspan="4" align="center"><?php echo lang('no_logs');?>
</td>
            </tr>
		<?php }?>
    </table>
	<?php echo $_smarty_tpl->tpl_vars['pagination']->value->create_links();?>

</div><?php }
}
