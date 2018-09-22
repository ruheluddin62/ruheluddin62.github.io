<?php
/* Smarty version 3.1.31, created on 2017-03-13 04:28:34
  from "C:\xampp\htdocs\evo60\templates\ModernBlue\advertise.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c611e205de91_55874819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ed3d8200a6b56ee1dc2058e0c2f78748b7cb1ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\evo60\\templates\\ModernBlue\\advertise.tpl',
      1 => 1489356577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58c611e205de91_55874819 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'C:\\xampp\\htdocs\\evo60\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
<?php if ($_smarty_tpl->tpl_vars['settings']->value['special_available'] == 'yes') {?>
	<?php echo $_smarty_tpl->tpl_vars['specialpackitems']->value;?>

	
		$(function(){
			updatepack();
		});
	
<?php }
echo '</script'; ?>
>
<!-- Content -->   
<div class="site_title"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['lang']->value['txt']['advertiseon'],"%mysite",$_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</div>
<div class="site_content">
<div class="menu-content">
	<div style="display:none" id="errorbox" class="errorbox"></div>  
    
 	<div id="ads_list">
    
    
    <div class="shopcart">
    	<div class="shoptitle"><div class="carticon"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ptcads'];?>
</div></div>
        <div class="shopcontent">
    	<form method="post" id="ptcform" onsubmit="return prepare_payment('ptcform');" class="formclass">
        <input type="hidden" id="ptcformproduct" name="ptcformproduct" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ptcads'];?>
">
        <input type="hidden" name="buy" value="ptc_credits">
                       <select name="item" id="ptcformlist">
                        <?php
$__section_n_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_n']) ? $_smarty_tpl->tpl_vars['__smarty_section_n'] : false;
$__section_n_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['ad_prices']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_n_0_total = $__section_n_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_n'] = new Smarty_Variable(array());
if ($__section_n_0_total != 0) {
for ($__section_n_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] = 0; $__section_n_0_iteration <= $__section_n_0_total; $__section_n_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']++){
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['ad_prices']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ad_prices']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['credits'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['credits'];?>
 - <?php echo set_amount($_smarty_tpl->tpl_vars['ad_prices']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['price']);?>
</option>
                        <?php
}
}
if ($__section_n_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_n'] = $__section_n_0_saved;
}
?>
                        </select>
                        <input type="submit" name="send" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['buynow'];?>
">
        </form>
        </div>
    </div>
    
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['loginads_available'] == 'yes') {?>
    <div class="shopcart">
    	<div class="shoptitle"><div class="carticon"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['loginads'];?>
</div></div>
        <div class="shopcontent">
    	<form method="post" id="loginadform" onsubmit="return prepare_payment('loginadform');">
        <input type="hidden" id="loginadformproduct" name="loginadformproduct" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['loginads'];?>
">
        <input type="hidden" name="buy" value="loginads_credits">
                       <select name="item" id="loginadformlist">
                        <?php
$__section_n_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_n']) ? $_smarty_tpl->tpl_vars['__smarty_section_n'] : false;
$__section_n_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['loginad_prices']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_n_1_total = $__section_n_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_n'] = new Smarty_Variable(array());
if ($__section_n_1_total != 0) {
for ($__section_n_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] = 0; $__section_n_1_iteration <= $__section_n_1_total; $__section_n_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']++){
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['loginad_prices']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['loginad_prices']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['days'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['days'];?>
 - <?php echo set_amount($_smarty_tpl->tpl_vars['loginad_prices']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['price']);?>
</option>
                        <?php
}
}
if ($__section_n_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_n'] = $__section_n_1_saved;
}
?>
                        </select>
                        <input type="submit" name="send" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['buynow'];?>
">
        </form>
        </div>
    </div>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['ptsu_available'] == 'yes') {?>
    <div class="shopcart">
    	<div class="shoptitle"><div class="carticon"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ptsu'];?>
</div></div>
        <div class="shopcontent">
    	<form method="post" id="ptsuform" onsubmit="return prepare_payment('ptsuform');" class="formclass">
        <input type="hidden" id="ptsuformproduct" name="ptsuformproduct" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['ptsu'];?>
">
        <input type="hidden" name="buy" value="ptsu_credits"> 
                        <select name="item" id="ptsuformlist">
                        <?php
$__section_n_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_n']) ? $_smarty_tpl->tpl_vars['__smarty_section_n'] : false;
$__section_n_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['ptsu_price']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_n_2_total = $__section_n_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_n'] = new Smarty_Variable(array());
if ($__section_n_2_total != 0) {
for ($__section_n_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] = 0; $__section_n_2_iteration <= $__section_n_2_total; $__section_n_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']++){
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['ptsu_price']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ptsu_price']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['credits'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['credits'];?>
 - <?php echo set_amount($_smarty_tpl->tpl_vars['ptsu_price']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['price']);?>
</option>
                        <?php
}
}
if ($__section_n_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_n'] = $__section_n_2_saved;
}
?>
                        </select>   
                        <input type="submit" name="send" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['buynow'];?>
">
        </form>
        </div>
    </div>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['fads_available'] == 'yes') {?>
    <div class="shopcart">
    	<div class="shoptitle"><div class="carticon"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['featuredad'];?>
</div></div>
        <div class="shopcontent">
    	<form method="post" id="feadform" onsubmit="return prepare_payment('feadform');" class="formclass">
        <input type="hidden" id="feadformproduct" name="feadformproduct" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['featuredad'];?>
">
        		<input type="hidden" name="buy" value="fad_credits">
                        <select name="item" id="feadformlist">
                        <?php
$__section_n_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_n']) ? $_smarty_tpl->tpl_vars['__smarty_section_n'] : false;
$__section_n_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['fads_price']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_n_3_total = $__section_n_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_n'] = new Smarty_Variable(array());
if ($__section_n_3_total != 0) {
for ($__section_n_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] = 0; $__section_n_3_iteration <= $__section_n_3_total; $__section_n_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']++){
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['fads_price']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['fads_price']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['credits'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['credits'];?>
 - <?php echo set_amount($_smarty_tpl->tpl_vars['fads_price']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['price']);?>
</option>
                        <?php
}
}
if ($__section_n_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_n'] = $__section_n_3_saved;
}
?>
                        </select>  
                        <input type="submit" name="send" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['buynow'];?>
">
        </form>
        </div>
    </div>   
    <?php }?>
    
    
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['bannerads_available'] == 'yes') {?>
    <div class="shopcart">
    	<div class="shoptitle"><div class="carticon"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['bannerad'];?>
</div></div>
        <div class="shopcontent">
    	<form method="post" id="bannerform" onsubmit="return prepare_payment('bannerform');" class="formclass">
        	<input type="hidden" id="bannerformproduct" name="bannerformproduct" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['bannerad'];?>
">
        		<input type="hidden" name="buy" value="bannerad_credits">
                        <select name="item" id="bannerformlist">
                        <?php
$__section_n_4_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_n']) ? $_smarty_tpl->tpl_vars['__smarty_section_n'] : false;
$__section_n_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['banner_price']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_n_4_total = $__section_n_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_n'] = new Smarty_Variable(array());
if ($__section_n_4_total != 0) {
for ($__section_n_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] = 0; $__section_n_4_iteration <= $__section_n_4_total; $__section_n_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']++){
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['banner_price']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['banner_price']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['credits'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['credits'];?>
 - <?php echo set_amount($_smarty_tpl->tpl_vars['banner_price']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['price']);?>
</option>
                        <?php
}
}
if ($__section_n_4_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_n'] = $__section_n_4_saved;
}
?>
                        </select> 
                        <input type="submit" name="send" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['buynow'];?>
">
        </form>
        </div>
    </div> 
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['flinks_available'] == 'yes') {?>
    <div class="shopcart">
    	<div class="shoptitle"><div class="carticon"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['featuredlink'];?>
</div></div>
        <div class="shopcontent">
    	<form method="post" id="flinkform" onsubmit="return prepare_payment('flinkform');" class="formclass">
        	<input type="hidden" id="flinkformproduct" name="flinkformproduct" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['featuredlink'];?>
">
        		<input type="hidden" name="buy" value="flink_credits">
                        <select name="item" id="flinkformlist">
                        <?php
$__section_n_5_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_n']) ? $_smarty_tpl->tpl_vars['__smarty_section_n'] : false;
$__section_n_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['flinks_price']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_n_5_total = $__section_n_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_n'] = new Smarty_Variable(array());
if ($__section_n_5_total != 0) {
for ($__section_n_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] = 0; $__section_n_5_iteration <= $__section_n_5_total; $__section_n_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']++){
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['flinks_price']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['flinks_price']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['month'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['months'];?>
 - <?php echo set_amount($_smarty_tpl->tpl_vars['flinks_price']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['price']);?>
</option>
                        <?php
}
}
if ($__section_n_5_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_n'] = $__section_n_5_saved;
}
?>
                        </select> 
                        <input type="submit" name="send" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['buynow'];?>
">
        </form>
        </div>
    </div>
    <?php }?>
    
    
 <?php if ($_smarty_tpl->tpl_vars['settings']->value['special_available'] == 'yes') {?>    
    <div class="shopcart">
    	<div class="shoptitle"><div class="carticon"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['specialpacks'];?>
</div></div>
        <div class="shopcontent">
    	<form method="post" id="spackform" onsubmit="return prepare_payment('spackform');" class="formclass">
        		<input type="hidden" name="spackformproduct" id="spackformproduct" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['specialpacks'];?>
" />
                <input type="hidden" name="buy" value="specialpack">
                        <select class="primary textbox" name="item" id="spackformlist" onchange="updatepack();">
                        <?php
$__section_n_6_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_n']) ? $_smarty_tpl->tpl_vars['__smarty_section_n'] : false;
$__section_n_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['specialpacks']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_n_6_total = $__section_n_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_n'] = new Smarty_Variable(array());
if ($__section_n_6_total != 0) {
for ($__section_n_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] = 0; $__section_n_6_iteration <= $__section_n_6_total; $__section_n_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']++){
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['specialpacks']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['specialpacks']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['name'];?>
 - <?php echo set_amount($_smarty_tpl->tpl_vars['specialpacks']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['price']);?>
</option>
                        <?php
}
}
if ($__section_n_6_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_n'] = $__section_n_6_saved;
}
?>
                        </select> 
                        <input type="submit" name="send" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['buynow'];?>
">
        </form>
        </div>
    </div>
   <?php }?>  	  
 
             	
            	

    
    <div class="clear"></div>
	<?php if ($_smarty_tpl->tpl_vars['settings']->value['special_available'] == 'yes') {?>
    	<div id="specialdescription"><div id="specialpackdescr"></div></div>
    <?php }?>
    </div>
    
    
            <div id="payment_form" style="display:none;">
            <?php if ($_smarty_tpl->tpl_vars['logged']->value == 'yes') {?>
            <form method="post" id="checkoutform" onsubmit="return submitpayment();" class="formclass">
            <input type="hidden" name="action" value="buy" />
            <div id="payment_details"></div>
            <table align="center" class="widget-tbl" width="500">
            	<tr class="titles">
                	<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['confirm_your_order'];?>
</td>
                </tr>
            	<tr>
                	<td align="right"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['product'];?>
:</strong></td>
                    <td><span id="productname"></span></td>
                </tr>
            	<tr>
                	<td align="right"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['item'];?>
:</strong></td>
                    <td><span id="itemname"></span></td>
                </tr>
            	<tr>
                	<td align="right"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['purchasebalance'];?>
:</strong></td>
                    <td><?php echo set_amount($_smarty_tpl->tpl_vars['user_info']->value['purchase_balance']);?>
</td>
                </tr>
                <tr>
                	<td colspan="2" align="center">
                    	<input type="submit" name="send" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['buynow'];?>
">
                        <input type="button" onclick="cancel_payad();" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['cancel'];?>
">
                   </td>
                </tr>
            </table>
            </form>
            <?php } else { ?>
            <div align="center" style="padding:10px;"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['notloggedin'];?>
</strong><br><br>
            <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['cancel'];?>
" onclick="cancel_payad();" />
            </div>
            <?php }?>
            </div>
</div>
</div>
<!-- End Content -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
