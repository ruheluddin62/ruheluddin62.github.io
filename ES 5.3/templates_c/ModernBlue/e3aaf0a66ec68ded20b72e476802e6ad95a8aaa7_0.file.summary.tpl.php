<?php
/* Smarty version 3.1.31, created on 2017-03-13 15:46:47
  from "C:\xampp\htdocs\evo60\templates\ModernBlue\summary.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c6b0d7a3f609_40802651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3aaf0a66ec68ded20b72e476802e6ad95a8aaa7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\evo60\\templates\\ModernBlue\\summary.tpl',
      1 => 1489374308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:login_ads.tpl' => 1,
  ),
),false)) {
function content_58c6b0d7a3f609_40802651 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\evo60\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) require_once 'C:\\xampp\\htdocs\\evo60\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php';
if ($_smarty_tpl->tpl_vars['user_info']->value['loginads_view'] == 0) {?>
	<?php $_smarty_tpl->_subTemplateRender("file:login_ads.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?>
<div class="widget-main-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['dashboard'];?>
</div>
<div class="widget-content">
    <div class="admin-info">
        <div class="title"><?php echo $_smarty_tpl->tpl_vars['user_info']->value['username'];?>
</div>
        <div><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['membersince'];?>
: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user_info']->value['signup'],"%b %e, %Y");?>
</div>
        <div><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['membership'];?>
: <?php echo $_smarty_tpl->tpl_vars['mymembership']->value['name'];?>
</div>
        <?php if ($_smarty_tpl->tpl_vars['user_info']->value['type'] != 1) {?>
         <div><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['upgexpires'];?>
: <?php if ($_smarty_tpl->tpl_vars['user_info']->value['upgrade_ends'] != 0) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user_info']->value['upgrade_ends'],"%d-%m-%Y");
} else {
echo $_smarty_tpl->tpl_vars['lang']->value['txt']['never'];
}?></div>
        <?php }?>
    </div>
    <div class="calendar">
        <div class="top corner-top">
        <div style="font-size:12px"><?php echo smarty_modifier_date_format(time(),"%A");?>
</div>
        <?php echo smarty_modifier_date_format(time(),"%e");?>

        </div>
        <div class="bottom corner-bottom"><?php echo smarty_modifier_date_format(time(),"%b");?>
</div>
    </div>
    <div class="clear"></div>
</div>
<?php if ($_smarty_tpl->tpl_vars['show_advice']->value == 'yes') {?>
    	<div class="dashboardbox corner-all">
        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lang']->value['txt']['youhaventviewad'],"%clicks",$_smarty_tpl->tpl_vars['settings']->value['clicks_necessary']);?>

        </div>
<?php }?>

<div id="tabs">
	<ul>
    	<li><a href="#tab-1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['general_stats'];?>
</a></li>
    	<li><a href="#tab-2"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['advertiser_stats'];?>
</a></li>
    	<li><a href="#tab-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['charts'];?>
</a></li>
    	<li><a href="#tab-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['login_failures'];?>
</a></li>
    </ul>
    <div id="tab-1">
         <div class="widget-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['earningstats'];?>
</div>
        
        <table width="100%" class="tbl-content" cellpadding="4">
            <tr>
                <td width="20"><span class="system-icon money"></span></td>
                <td width="200"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['balance'];?>
</strong></td>
                <td><strong><?php echo set_amount($_smarty_tpl->tpl_vars['user_info']->value['money']);?>
</strong></td>
                <td align="right"><a href="/?view=account&page=withdraw">[ <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['withdraw'];?>
 ]</a></td>
            </tr>
            <tr>
                <td><span class="system-icon creditcards"></span></td>
                <td><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['purchasebalance'];?>
</strong></td>
                <td><strong><?php echo set_amount($_smarty_tpl->tpl_vars['user_info']->value['purchase_balance']);?>
</strong></td>
                <td align="right"><a href="/?view=account&page=addfunds">[ <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['addfunds'];?>
 ]</a></td>
            </tr>
            <tr>
                <td><span class="system-icon hourglass"></span></td>
                <td><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['pendingcashout'];?>
</strong></td>
                <td><?php echo set_amount($_smarty_tpl->tpl_vars['user_info']->value['pending_withdraw']);?>
</td>
                <td></td>
            </tr>
            <tr>
                <td><span class="system-icon css_valid"></span></td>
                <td><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['paymentsdone'];?>
</strong></td>
                <td><?php echo set_amount($_smarty_tpl->tpl_vars['user_info']->value['withdraw']);?>
</td>
                <td></td>
            </tr>
            <?php if ($_smarty_tpl->tpl_vars['mymembership']->value['point_enable'] == 1) {?>
            <tr>
                <td><span class="system-icon award_star_gold_3"></span></td>
                <td><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['points'];?>
</strong>    </td>
                <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['points'];?>
 pts</td>
                <td align="right"><a href="/?view=account&page=convert_points">[ <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['convert_points'];?>
 ]</a></td>
            </tr>
            <?php }?>
        </table>
            
        <div class="widget-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['refstats'];?>
</div>    
        <table width="100%" class="tbl-account" cellpadding="4">
            <tr>
                <td width="20"><span class="system-icon user"></span></td>
                <td width="200"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['directrefs'];?>
</strong></td>
                <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['referrals'];?>
</td>
                <td align="right"><?php if ($_smarty_tpl->tpl_vars['settings']->value['buy_referrals'] == 'yes') {?><a href="/?view=account&page=buyreferrals">[ <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['buyrefs'];?>
 ]</a><?php }?></td>
            </tr>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['rent_referrals'] == 'yes') {?>
            <tr>
                <td width="20"><span class="system-icon user_red"></span></td>
                <td width="200"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['rentedrefs'];?>
</strong></td>
                <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['rented_referrals'];?>
</td>
                <td align="right"><a href="/?view=account&page=rentreferrals">[ <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['rentrefs'];?>
 ]</a></td>
            </tr>
        <?php }?> 
            <tr>
                <td width="20"><span class="system-icon medal_gold_add"></span></td>
                <td width="200"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['refsearned'];?>
</strong></td>
                <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['refearnings'];?>
</td>
                <td align="right"></td>
            </tr>
        </table>
        <div class="widget-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['chart1'];?>
</div>
         <table width="100%" class="tbl-account" cellpadding="4">
            <tr>
                <td width="20"><span class="system-icon chart_line"></span></td>
                <td width="200"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['yourclicks'];?>
</strong></td>
                <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['clicks'];?>
</td>
            </tr>
            <tr>
                <td width="20"><span class="system-icon chart_curve"></span></td>
                <td><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['yourrefclicks'];?>
</strong></td>
                <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['refclicks'];?>
</td>
            </tr>
        </table>  
    </div>
    
    <div id="tab-2">
          <div class="widget-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['adbalancestats'];?>
</div>
            <table width="100%" class="tbl-account" cellpadding="4">
                <tr>
                    <td width="20"><span class="system-icon flag_green"></span></td>
                    <td width="200"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['adcredits'];?>
</strong></td>
                    <td><strong><?php echo $_smarty_tpl->tpl_vars['user_info']->value['ad_credits'];?>
</strong></td>
                    <td align="right"><a href="/?view=adverise">[ Buy credits ]</a> &nbsp; &nbsp; <a href="/?view=account&page=manageads">[ Advertise ]</a></td>
                </tr>
        
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['loginads_available'] == 'yes') {?>
                <tr>
                    <td width="20"><span class="system-icon flag_orange"></span></td>
                    <td><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['loginad_credits'];?>
</strong></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['loginads_credits'];?>
</td>
                    <td align="right"><a href="/?view=adverise">[ Buy credits ]</a> &nbsp; &nbsp; <a href="/?view=account&page=manageads&class=login_ads">[ Advertise ]</a></td>
                </tr>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['ptsu_available'] == 'yes') {?>
                <tr>
                    <td width="20"><span class="system-icon flag_pink"></span></td>
                    <td><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ptsucredits'];?>
</strong></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['ptsu_credits'];?>
</td>
                    <td align="right"><a href="/?view=adverise">[ Buy credits ]</a> &nbsp; &nbsp; <a href="/?view=account&page=manageads&class=ptsu_offers">[ Advertise ]</a></td>
                </tr>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['bannerads_available'] == 'yes') {?>
                <tr>
                    <td width="20"><span class="system-icon flag_blue"></span></td>
                    <td><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['bannercredits'];?>
</strong></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['banner_credits'];?>
</td>
                    <td align="right"><a href="/?view=adverise">[ Buy credits ]</a> &nbsp; &nbsp; <a href="/?view=account&page=manageads&class=banner_ads">[ Advertise ]</a></td>
                </tr>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['fads_available'] == 'yes') {?>
                <tr>
                    <td width="20"><span class="system-icon flag_purple"></span></td>
                    <td><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['featuredadcredits'];?>
</strong></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['fads_credits'];?>
</td>
                    <td align="right"><a href="/?view=adverise">[ Buy credits ]</a> &nbsp; &nbsp; <a href="/?view=account&page=manageads&class=featured_ads">[ Advertise ]</a></td>
                </tr>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['flinks_available'] == 'yes') {?>
                <tr>
                    <td width="20"><span class="system-icon flag_red"></span></td>
                    <td><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['featuredlinkcredits'];?>
</strong></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['flink_credits'];?>
</td>
                    <td align="right"><a href="/?view=adverise">[ Buy credits ]</a> &nbsp; &nbsp; <a href="/?view=account&page=manageads&class=featured_link">[ Advertise ]</a></td>
                </tr>
                <?php }?>
            </table>   
                 
    </div>
	<div id="tab-3">
        <!-- Content -->
        <?php echo html_script('assets/fusioncharts/FusionCharts.js');?>

        
        <table width="100%">
            <tr>
                <td width="50%">
        
            <div id="chartdiv" align="center"> 
                FusionCharts. </div>
              <?php echo '<script'; ?>
 type="text/javascript">
                   var chart = new FusionCharts("assets/fusioncharts/Line.swf?ChartNoDataText=Please select a record above", "ChartId", "280", "144", "0", "0");
                   chart.setDataXML("<chart bgSWF='charts/chart.png' canvasBorderColor='e0e0e0' lineColor='33373e' showShadow='1' shadowColor='bdbdbd' anchorBgColor='f1cc2b' caption='<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['chart1'];?>
' showLabels='0' numVDivLines='8' hoverCapBgColor='f7df39' decimalPrecision='2' formatNumberScale='0' showValues='0'  divLineAlpha='20' alternateHGridAlpha='6'><?php echo $_smarty_tpl->tpl_vars['myclicks']->value;?>
</chart>");		   
                   chart.render("chartdiv");
                <?php echo '</script'; ?>
>
         
        
                </td>
        
                <td>
        
        
            <div id="chartdiv2" align="center"> 
                FusionCharts. </div>
              <?php echo '<script'; ?>
 type="text/javascript">
                   var chart = new FusionCharts("assets/fusioncharts/Line.swf?ChartNoDataText=Please select a record above", "ChartId", "280", "144", "0", "0");
                   chart.setDataXML("<chart bgSWF='charts/chart.png' canvasBorderColor='e0e0e0' lineColor='33373e' showShadow='1' shadowColor='bdbdbd' anchorBgColor='f1cc2b' caption='<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['chart2'];?>
' showLabels='0' numVDivLines='8' hoverCapBgColor='f7df39' decimalPrecision='2' formatNumberScale='0' showValues='0'  divLineAlpha='20' alternateHGridAlpha='6'><?php echo $_smarty_tpl->tpl_vars['refclicks']->value;?>
</chart>");		   
                   chart.render("chartdiv2");
                <?php echo '</script'; ?>
>
         
        
                </td>
            </tr>
            
           <?php if ($_smarty_tpl->tpl_vars['settings']->value['rent_referrals'] == 'yes') {?> 
            <tr>
                <td><br />
        
            <div id="chartdiv3" align="center"> 
                FusionCharts. </div>
              <?php echo '<script'; ?>
 type="text/javascript">
                   var chart = new FusionCharts("assets/fusioncharts/Line.swf?ChartNoDataText=Please select a record above", "ChartId", "280", "144", "0", "0");
                   chart.setDataXML("<chart bgSWF='charts/chart.png' canvasBorderColor='e0e0e0' lineColor='33373e' showShadow='1' shadowColor='bdbdbd' anchorBgColor='f1cc2b' caption='<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['chart3'];?>
' showLabels='0' numVDivLines='8' hoverCapBgColor='f7df39' decimalPrecision='2' formatNumberScale='0' showValues='0'  divLineAlpha='20' alternateHGridAlpha='6'><?php echo $_smarty_tpl->tpl_vars['rentedrefclicks']->value;?>
</chart>");		   
                   chart.render("chartdiv3");
                <?php echo '</script'; ?>
>
                
                </td>
                <td><br />
        
            <div id="chartdiv4" align="center"> 
                FusionCharts. </div>
              <?php echo '<script'; ?>
 type="text/javascript">
                   var chart = new FusionCharts("assets/fusioncharts/Line.swf?ChartNoDataText=Please select a record above", "ChartId", "280", "144", "0", "0");
                   chart.setDataXML("<chart bgSWF='charts/chart.png' canvasBorderColor='e0e0e0' lineColor='33373e' showShadow='1' shadowColor='bdbdbd' anchorBgColor='f1cc2b' caption='<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['chart4'];?>
' showLabels='0' numVDivLines='8' hoverCapBgColor='f7df39' decimalPrecision='4' formatNumberScale='0' showValues='0'  divLineAlpha='20' alternateHGridAlpha='6'><?php echo $_smarty_tpl->tpl_vars['autopayclicks']->value;?>
</chart>");		   
                   chart.render("chartdiv4");
                <?php echo '</script'; ?>
>
                </td>
        
           </tr>
           <?php }?>
        </table>    
    </div>    
    <div id="tab-4">
        <div class="widget-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['login_failures'];?>
</div>
        <div class="widget-content">
        <?php if (!empty($_smarty_tpl->tpl_vars['loginfailure']->value)) {?>
            <?php
$__section_f_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_f']) ? $_smarty_tpl->tpl_vars['__smarty_section_f'] : false;
$__section_f_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['loginfailure']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_f_0_total = $__section_f_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_f'] = new Smarty_Variable(array());
if ($__section_f_0_total != 0) {
for ($__section_f_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_f']->value['index'] = 0; $__section_f_0_iteration <= $__section_f_0_total; $__section_f_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_f']->value['index']++){
?>
                <div class="error_login">
                    <div><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['user_agent'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['loginfailure']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_f']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_f']->value['index'] : null)]['agent'];?>
</div>
                    <div><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ip_address'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['loginfailure']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_f']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_f']->value['index'] : null)]['ip'];?>
</div>
                    <div><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['date'];?>
:</strong> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['loginfailure']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_f']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_f']->value['index'] : null)]['date'],"%b %e %Y %r");?>
</div>
                </div>
            <?php
}
}
if ($__section_f_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_f'] = $__section_f_0_saved;
}
?>
        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['noinformationavailable'];?>

        <?php }?>
        </div>
    </div>
</div>









<?php echo $_smarty_tpl->tpl_vars['initmember']->value;
}
}
