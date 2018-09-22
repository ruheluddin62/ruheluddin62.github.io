<?php
/* Smarty version 3.1.31, created on 2017-03-13 04:28:34
  from "C:\xampp\htdocs\evo60\templates\ModernBlue\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c611e210db30_59166838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d950eaeb0dd50130a846d6aee69b9b04dbc058c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\evo60\\templates\\ModernBlue\\header.tpl',
      1 => 1489372285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c611e210db30_59166838 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\evo60\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['settings']->value['site_title'];?>
</title>
    <?php echo html_script(array('assets/jquery/jquery.min.js','assets/jqueryui/jquery-ui.min.js','assets/evolution/js/evolutionscript.js','assets/evolution/js/l2blockit.js'));?>

    <?php echo html_css(array('assets/jqueryui/css/jquery-ui.min.css','assets/evolution/css/global.css'));?>

<?php echo '<script'; ?>
>
$(function(){
	$(".navbar .submenu").hover(function(){
		$(this).children('ul').show();
	}, function(){
		$(this).children('ul').hide();
	});
<?php if ($_smarty_tpl->tpl_vars['logged']->value == 'yes') {?>
	var stickyNavTop = $('.flotator').offset().top;  	
	stickyNavTop= stickyNavTop+130;
	var stickyNav = function(){  
	var scrollTop = $(window).scrollTop();  		   
	if (scrollTop > (stickyNavTop)) { 
		$('.member_toolbar').show();  
		$('.flotator').addClass('sticky');  
	} else {  
		$('.member_toolbar').hide();
		$('.flotator').removeClass('sticky');   
	}  
	};  	  
	stickyNav();    
	$(window).scroll(function() {  
		stickyNav();  
});
<?php }?>
	}); 
mydate = new Date("<?php echo smarty_modifier_date_format(time(),"%d %b %Y %H:%M:%S");?>
");


	$(document).ready(function() {	
		dateTimer();
	});
	
	

	
	<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['googleanalytics'] == 'yes') {
echo '<script'; ?>
 type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?php echo $_smarty_tpl->tpl_vars['settings']->value['googleanalyticsid'];?>
']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

<?php echo '</script'; ?>
>
<?php }?>
</head>

<body>
<div class="fullsite">
    <div class="wrapper">
        <div id="header">
<?php if ($_smarty_tpl->tpl_vars['logged']->value == 'yes') {?>
<div class="flotator">
    <div class="member_toolbar" style="display:none">
    	
        <ul>
        	<li class="mini_logo"><img src="<?php echo base_url('assets/evolution/images/mini_logo.png');?>
" align="absmiddle" /></li>
            <li title="Username"><a href="/?view=account"><img src="<?php echo base_url('assets/evolution/images/memberbar/account.png');?>
" align="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['user_info']->value['username'];?>
</a></li>
            <li title="Account balance"><a href="/?view=account"><img src="<?php echo base_url('assets/evolution/images/memberbar/coins.png');?>
" align="absmiddle" /> <?php echo set_amount($_smarty_tpl->tpl_vars['user_info']->value['money']);?>
</a></li>
            <li title="Purchase balance"><a href="/?view=account&page=addfunds"><img src="<?php echo base_url('assets/evolution/images/memberbar/coins_add.png');?>
" align="absmiddle" />  <?php echo set_amount($_smarty_tpl->tpl_vars['user_info']->value['purchase_balance']);?>
</a></li>
            <li title="Direct referrals"><a href="/?view=account&page=referrals"><img src="<?php echo base_url('assets/evolution/images/memberbar/refs.png');?>
" align="absmiddle" />  <?php echo $_smarty_tpl->tpl_vars['user_info']->value['referrals'];?>
</li>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['rent_referrals'] == 'yes') {?>
            <li title="Rented referrals"><a href="/?view=account&page=rented_referrals"><img src="<?php echo base_url('assets/evolution/images/memberbar/rentedrefs.png');?>
" align="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['user_info']->value['rented_referrals'];?>
</a>
            </li>
            <?php }?>
            <li title="Account settings">
                <a href="/?view=account&page=settings"><img src="<?php echo base_url('assets/evolution/images/memberbar/settings.png');?>
" align="absmiddle" /></a>
            </li>
            <li title="My orders">
                <a href="/?view=account&page=history"><img src="<?php echo base_url('assets/evolution/images/memberbar/cart.png');?>
" align="absmiddle" /></a>
            </li>
            <li title="Statistics">
                <a href="/?view=account&page=statistics"><img src="<?php echo base_url('assets/evolution/images/memberbar/stats.png');?>
" align="absmiddle" /></a>
            </li>
            <li title="Private messages">
                <a href="/?view=account&page=messages"><img src="<?php echo base_url('assets/evolution/images/memberbar/email.png');?>
" align="absmiddle" /></a>
            </li>
            <li title="Logout">
                <a href="/?view=logout"><img src="<?php echo base_url('assets/evolution/images/memberbar/lock.png');?>
" align="absmiddle" /></a>
            </li>
            <li title="Server Time">
                <img src="<?php echo base_url('assets/evolution/images/memberbar/clock.png');?>
" align="absmiddle" /> <span id="timenow"></span>
            </li>
        </ul>
        <div class="clear"></div>
    </div>
</div>
<?php }?>
            <div id="logo">
                <a href="/"></a>
            </div>
            <div class="top-banner"><?php if (showrotatingbanners()) {
}?></div>
            <div class="clear"></div>
            <div class="navbar">
                <ul>
                    <li><a href="./" <?php if ($_SERVER['SCRIPT_NAME'] == '/index.php' && $_GET['view'] == '' || $_GET['view'] == 'home') {?>class="current"<?php }?>><span class="white-icon ui-icon-home"></span><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['home'];?>
</a></li>
                        <li><a href="index.php?view=advertise" <?php if ($_GET['view'] == 'advertise') {?>class="current"<?php }?>><span class="white-icon ui-icon-cart"></span><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['advertise'];?>
</a></li>
                        
                        <li class="submenu"><a href="javascript:void(0);" <?php if ($_GET['view'] == 'ads') {?>class="current"<?php }?>><span class="white-icon ui-icon-star"></span><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['earn_money'];?>
</a>
                        	<ul>
                            	<li><a href="index.php?view=ads"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['viewads'];?>
</a></li>
                                <?php if ($_smarty_tpl->tpl_vars['logged']->value == 'yes' && $_smarty_tpl->tpl_vars['settings']->value['ptsu_available'] == 'yes') {?>
                                <li><a href="index.php?view=account&page=ptsu"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ptsu'];?>
</a></li>
                                <?php }?>
                            </ul>
                        </li>
                        <?php if ($_smarty_tpl->tpl_vars['logged']->value != 'yes') {?>
                        <li><a href="index.php?view=login" <?php if ($_GET['view'] == 'login') {?>class="current"<?php }?>><span class="white-icon ui-icon-person"></span><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['login'];?>
</a></li>
                        <li><a href="index.php?view=register" <?php if ($_GET['view'] == 'register') {?>class="current"<?php }?>><span class="white-icon ui-icon-star"></span><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['register'];?>
</a></li>
                        <?php } else { ?>
                        <li><a href="index.php?view=account" <?php if ($_GET['view'] == 'account') {?>class="current"<?php }?>><span class="white-icon ui-icon-person"></span><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['myaccount'];?>
</a></li>
                        <?php }?>
                        <li><a href="index.php?view=faq" <?php if ($_GET['view'] == 'faq') {?>class="current"<?php }?>><span class="white-icon ui-icon-note"></span><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['faq'];?>
</a></li>
                        <?php if (($_smarty_tpl->tpl_vars['logged']->value == 'yes' && $_smarty_tpl->tpl_vars['memberonly_support']->value == 'yes') || ($_smarty_tpl->tpl_vars['memberonly_support']->value != 'yes')) {?>
                        <li><a href="index.php?view=contact" <?php if ($_GET['view'] == 'contact') {?>class="current"<?php }?>><span class="white-icon ui-icon-flag"></span><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['support'];?>
</a></li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['logged']->value != 'yes') {?>
                        <li><a href="index.php?view=terms" <?php if ($_GET['view'] == 'terms') {?>class="current"<?php }?>><span class="white-icon ui-icon-document"></span><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['terms'];?>
</a></li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['forum_active'] == 'yes') {?>
                        <li><a href="forum.php" <?php if ($_SERVER['SCRIPT_NAME'] == '/forum.php') {?>class="current"<?php }?>><span class="white-icon ui-icon-comment"></span><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['forum'];?>
</a></li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['logged']->value == 'yes') {?>
                        <li><a href="index.php?view=logout"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['logout'];?>
</a></li>
                        <?php }?>
                </ul>
            <div class="clear"></div>

            </div>
        </div>
     
        <div id="content">
<?php if ($_SERVER['SCRIPT_NAME'] == '/forum.php') {?>
<div class="site_title"><?php echo $_smarty_tpl->tpl_vars['settings']->value['site_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['forum'];?>
</div>
<div class="site_content">
<?php }
}
}
