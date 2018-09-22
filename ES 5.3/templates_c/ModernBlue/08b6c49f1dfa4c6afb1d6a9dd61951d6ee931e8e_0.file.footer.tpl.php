<?php
/* Smarty version 3.1.31, created on 2017-03-13 04:28:34
  from "C:\xampp\htdocs\evo60\templates\ModernBlue\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c611e2157ec8_85545168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08b6c49f1dfa4c6afb1d6a9dd61951d6ee931e8e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\evo60\\templates\\ModernBlue\\footer.tpl',
      1 => 1489357389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c611e2157ec8_85545168 (Smarty_Internal_Template $_smarty_tpl) {
if ($_SERVER['SCRIPT_NAME'] == '/forum.php') {?></div><?php }?>

        <div class="processorlist">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gatewaylist']->value, 'g');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
?>
                <img src="<?php echo base_url((('assets/evolution/images/gateway_home/').($_smarty_tpl->tpl_vars['g']->value->id)).('.gif'));?>
">
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </div>
	</div>
	<div id="footer">
    	<div class="copyright">Copyright &copy; 2010 - 2017 <?php echo $_smarty_tpl->tpl_vars['settings']->value['site_name'];?>
. All rights reserved.<?php echo $_smarty_tpl->tpl_vars['copyright']->value;?>
</div>
        <div class="links">
        <a href="index.php"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['home'];?>
</a> &nbsp; &bull; &nbsp; 
        <a href="index.php?view=faq"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['faq'];?>
</a> &nbsp; &bull; &nbsp; 
        <a href="index.php?view=contact"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['support'];?>
</a>
         &nbsp; &bull; &nbsp;  <a href="index.php?view=terms"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['terms'];?>
</a>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['payment_proof'] == 'yes') {?>
         &nbsp; &bull; &nbsp;  <a href="index.php?view=payment_proof"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['paymentproof'];?>
</a>
        <?php }?>
         &nbsp; &bull; &nbsp;  <a href="index.php?view=news"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['news'];?>
</a>
       
        <?php if ($_smarty_tpl->tpl_vars['forum_active']->value == 'yes') {?>
         &nbsp; &bull; &nbsp;  <a href="forum.php"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['forum'];?>
</a>
        <?php }?>
        </div>
        <div class="clear"></div>
	</div>
</div>
</div>


</body>
</html>    
    
<?php }
}
