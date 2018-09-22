<?php
/* Smarty version 3.1.31, created on 2017-03-13 04:28:34
  from "C:\xampp\htdocs\evo60\templates\ModernBlue\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c611e2d04602_85698607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac7eff64e0e7cfb2603d173bc8bab56eb60a8114' => 
    array (
      0 => 'C:\\xampp\\htdocs\\evo60\\templates\\ModernBlue\\home.tpl',
      1 => 1489375241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58c611e2d04602_85698607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo html_css(array('assets/nivoslider/themes/default/default.css','assets/nivoslider/themes/light/light.css','assets/nivoslider/themes/bar/bar.css','assets/nivoslider/nivo-slider.css'));?>

<?php echo html_script('assets/nivoslider/jquery.nivo.slider.js');?>

<div class="site_content">
    <div class="slider-wrapper theme-light">
        <div id="slider" class="nivoSlider">
            <img src="<?php echo base_url('assets/evolution/css/images/slider1.jpg');?>
" data-thumb="<?php echo base_url('assets/evolution/css/images/slider1.jpg');?>
" alt="" />
            <img src="<?php echo base_url('assets/evolution/css/images/slider2.jpg');?>
" data-thumb="<?php echo base_url('assets/evolution/css/images/slider2.jpg');?>
" alt="" />
        </div>
        <div id="htmlcaption" class="nivo-html-caption">
            <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
        </div>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    <?php echo '</script'; ?>
>
    
<?php if ($_smarty_tpl->tpl_vars['settings']->value['site_stats'] == 'yes') {?>
<div class="statistics">
	<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['stats3'];?>
: <strong><?php echo set_amount($_smarty_tpl->tpl_vars['statistics']->value['cashout']);?>
</strong> &nbsp;&nbsp;&nbsp;
    <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['stats1'];?>
: <strong><?php echo $_smarty_tpl->tpl_vars['statistics']->value['members'];?>
</strong> &nbsp;&nbsp;&nbsp;
    <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['stats2'];?>
: <strong><?php echo $_smarty_tpl->tpl_vars['statistics']->value['members_today'];?>
</strong>
	<?php if ($_smarty_tpl->tpl_vars['settings']->value['usersonline']) {?>&nbsp;&nbsp;&nbsp; <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['stats4'];?>
: <strong><?php echo $_smarty_tpl->tpl_vars['statistics']->value['usersonline'];?>
</strong><?php }?>
</div>
<?php }?>
    
    
<div class="home-box" style="float:left;">
    <div class="title">Members</div>
        <img src="<?php echo base_url('assets/evolution/css/images/members.png');?>
" align="left" />
        EvolutionScript is designed from scratch. Our innovative features for members give them flexibility and more earning potencial.
        We are always ready to take any advice into consideration.<br /><br /><br />
        <div style="padding-left:30px;">
            <strong>&raquo; What Includes:</strong><br />
            <ul>
                <li>Earn up to $0.01 per click</li>
                <li>Earn up to $0.01 per referral click</li>
                <li>Instant Payments and Receiving System</li>
                <li>Detailed statistics of your referral clicks</li>
                <li>Profesional Support</li>
            </ul>
        </div>

</div>


<div class="home-box" style="float:right;">
    <div class="title">Advertisers</div>
    <img src="<?php echo base_url('assets/evolution/css/images/advertisers.png');?>
" align="left" />
    If you are looking to promote your product or services. This is the right place for you, with competitive prices and 
    the ability to reach thousands of potencial customers, you will get the traffic you always wanted!<br /><br />
   <div style="padding-left:30px;">
        <strong>&raquo; What Includes:</strong><br />
        <ul>
            <li>Add your rotation plan instantly</li>
            <li>Choise of multiple advertisement packs</li>
            <li>Detailed statistics on GeoMap</li>
            <li>Anti-cheat protection</li>
            <li>New type of advertisements</li>
        </ul>
    </div>  
</div>

<div class="clear"></div>

<div style="background:url(<?php echo base_url('assets/evolution/css/images/briefcase.png');?>
) no-repeat scroll 50% 0px;">
<?php if ($_smarty_tpl->tpl_vars['settings']->value['fads_available'] == 'yes') {?>
	<div class="featured_ads" style="float:left;">
        <div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['featuredad'];?>
</div>
        <div class="fcontent">
            <ul class="featured-ads">
                <?php if (getfeaturedad()) {
}?>
            </ul>               
        </div>
	</div>
<?php }
if ($_smarty_tpl->tpl_vars['settings']->value['flinks_available'] == 'yes') {?>
	<div class="featured_ads">
        <div class="title2"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['featuredlink'];?>
</div>
        <div class="fcontent">
            <ul class="featured-ads">
                <?php if (getfeaturedlink()) {
}?>
            </ul>               
        </div>
	</div>
<?php }?>
<div class="clear"></div>
</div>




<div class="clear"></div>

</div>
<!-- End Content -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
