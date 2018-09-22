<?php
/* Smarty version 3.1.31, created on 2017-03-13 15:46:47
  from "C:\xampp\htdocs\evo60\templates\ModernBlue\account.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c6b0d7902f40_36962020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8582c01b830e61b63a2f4efe4a570032205335fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\evo60\\templates\\ModernBlue\\account.tpl',
      1 => 1393351106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58c6b0d7902f40_36962020 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="site_title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['account'];?>
</div>
<div class="site_content">
<!-- Content -->
<?php if ($_GET['page'] != 'upgrade') {?>    
<div style="display:table; width:100%">
<div style="display:table-cell; width:210px">
<ul  class="member_sidebar">        
    <li><div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['global'];?>
</div>
    	<ul>
            <li><a href="index.php?view=account&page=summary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['accsummary'];?>
</a></li>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['message_system'] == 'yes') {?>
            <li><a href="index.php?view=account&page=messages"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['message_system'];?>
 (<?php if ($_smarty_tpl->tpl_vars['unread_messages']->value == 0) {?>0<?php } else { ?><strong><?php echo $_smarty_tpl->tpl_vars['unread_messages']->value;?>
</strong><?php }?>)</a></li>
            <?php }?>
            <li><a href="index.php?view=account&page=addfunds"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['addfunds'];?>
</a></li>
            <li><a href="index.php?view=account&page=upgrade"><?php if ($_smarty_tpl->tpl_vars['user_info']->value['type'] == 1) {
echo $_smarty_tpl->tpl_vars['lang']->value['txt']['upgaccount'];
} else {
echo $_smarty_tpl->tpl_vars['lang']->value['txt']['extmembership'];
}?></a></li>
            <li><a href="index.php?view=account&page=withdraw"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['withdraw'];?>
</a></li>
            <li><a href="index.php?view=account&page=banners"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['banners'];?>
</a></li>
		</ul>
	</li>    
    <li><div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['settings'];?>
</div>
			<ul>
                <li><a href="index.php?view=account&page=settings"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['personal'];?>
</a></li>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['forum_active'] == 'yes') {?>
                <li><a href="index.php?view=account&page=forum_settings"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['forum_settings'];?>
</a></li>
                <?php }?>
                <li><a href="index.php?view=account&page=manageads"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['advertiser_panel'];?>
</a></li>
            </ul>
    </li>
    
    <li><div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['referrals'];?>
</div>
        <ul>
            <li><a href="index.php?view=account&page=referrals"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['directrefs'];?>
</a></li>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['rent_referrals'] == 'yes') {?>
            <li><a href="index.php?view=account&page=rented_referrals"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['rentedrefs'];?>
</a></li>
            <li><a href="index.php?view=account&page=rentreferrals"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['rentrefs'];?>
</a></li>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['buy_referrals'] == 'yes') {?>
            <li><a href="index.php?view=account&page=buyreferrals"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['buyrefs'];?>
</a></li>
            <?php }?>
        </ul>
    </li>
    
    <li><div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['logs'];?>
</div>
        <ul>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['ptsu_available'] == 'yes') {?>
             <li><a href="index.php?view=account&page=ptsu_history"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ptsuhistory'];?>
</a></li>
            <?php }?>
            <li><a href="index.php?view=account&page=history"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['orderhistory'];?>
</a></li>
            <li><a href="index.php?view=account&page=deposit_history"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['deposithistory'];?>
</a></li>
            <li><a href="index.php?view=account&page=withdraw_history"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['withdrawhistory'];?>
</a></li>
            <li><a href="index.php?view=account&page=login"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['loginhistory'];?>
</a></li>
        </ul>
    </li>
    
    <li><div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['other'];?>
</div>
        <ul>
            <li><a href="index.php?view=account&page=profitcalculator"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['profit_calculator'];?>
</a></li>
        </ul>
    </li>        
</ul>    
</div>
<div style="display:table-cell; padding-left:20px">
<?php }?>        
        	<!-- Content -->
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['file_name']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            <!-- End Content -->
<?php if ($_GET['page'] != 'upgrade') {?>  
</div>
</div>
<?php }?>
<div class="clear"></div>


</div>
<!-- End Content -->

<!-- End Content -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
