<?php
/* Smarty version 3.1.31, created on 2017-03-13 16:43:27
  from "C:\xampp\htdocs\evo60\templates\ModernBlue\addfunds.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c6be1f059e81_39132997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a412df019dca3f5aa9f6600e288693991db2d3cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\evo60\\templates\\ModernBlue\\addfunds.tpl',
      1 => 1489356199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c6be1f059e81_39132997 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	<?php if (count($_smarty_tpl->tpl_vars['gateways']->value) > 0) {?>
		gateway = Array;
        <?php
$__section_n_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_n']) ? $_smarty_tpl->tpl_vars['__smarty_section_n'] : false;
$__section_n_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['gateways']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_n_0_total = $__section_n_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_n'] = new Smarty_Variable(array());
if ($__section_n_0_total != 0) {
for ($__section_n_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] = 0; $__section_n_0_iteration <= $__section_n_0_total; $__section_n_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']++){
?>
		gateway[<?php echo $_smarty_tpl->tpl_vars['gateways']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['id'];?>
] = '<?php echo $_smarty_tpl->tpl_vars['gateways']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['min_deposit'];?>
';
        <?php
}
}
if ($__section_n_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_n'] = $__section_n_0_saved;
}
?>
    <?php }?>  
function set_gateway(val){
	if(val != ''){
		if(val == 'balance'){
			$("#min_deposit").html('<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['min_deposit'];?>
: <?php echo set_amount();
echo $_smarty_tpl->tpl_vars['settings']->value['amount_transfer'];?>
');
		}else{
			$("#min_deposit").html('<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['min_deposit'];?>
: <?php echo set_amount();?>
'+gateway[val]);
		}
		$("#min_deposit").show();
	}else{
		$("#min_deposit").hide();
	}
}
function complete_deposit(){
	$("#error_box").hide();
	var gatewayid = $("#gateway_list").val();
	var amount = $("#amount_deposit").val();
	if(isNaN(parseFloat(amount))){
			$("#error_box").html('<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['min_deposit'];?>
: <?php echo set_amount();
echo $_smarty_tpl->tpl_vars['settings']->value['amount_transfer'];?>
');
			$("#error_box").fadeIn();
			return false;
	}
	amount = parseFloat(amount);
	if(gatewayid == ''){
		$("#error_box").html('<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['selectmethod'];?>
');
		$("#error_box").fadeIn();
	}else
	if(gatewayid == 'balance'){
		if(amount < <?php echo $_smarty_tpl->tpl_vars['settings']->value['amount_transfer'];?>
){
			$("#error_box").html('<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['min_deposit'];?>
: <?php echo set_amount();
echo $_smarty_tpl->tpl_vars['settings']->value['amount_transfer'];?>
');
			$("#error_box").fadeIn();
		}else{
			$("#acc_amount").val(amount);
			$("#addfrm").hide();
			$("#acc_balancefrm").fadeIn();
		}
	}else{
		if(amount < gateway[gatewayid]){
			$("#error_box").html('<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['min_deposit'];?>
: <?php echo set_amount();?>
'+gateway[gatewayid]);
			$("#error_box").fadeIn();
		}else{
			$( "#amount"+gatewayid).val(amount);
			$("#addfrm").hide();
			$("#gateway-"+gatewayid).fadeIn();
		}
	}
}
function hide_gateways(){
	$(".gatewayfrm").hide();
	$("#addfrm").fadeIn();
}
<?php echo '</script'; ?>
>
<div class="widget-main-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['addfunds'];?>
</div>
<div class="menu-content">
    <div class="error_box" id="error_box" style="display:none"></div>
	<table width="100%" class="widget-tbl" id="addfrm">
    	<tr>
        	<td align="right" width="200"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['method'];?>
:</td>
            <td>
            <select name="gateway" onchange="set_gateway(this.value);" id="gateway_list">
            <option value=""></option>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['money_transfer'] == 'yes') {?>
            <option value="balance"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['account_balance'];?>
</option>
            <?php }?>
            <?php if (count($_smarty_tpl->tpl_vars['gateways']->value) > 0) {?>
	            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gateways']->value, 'g');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
?>
		            <option value="<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['g']->value['display_name'];?>
</option>
	            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <?php }?>
            </select>
            </td>
        </tr>
        <tr>
        	<td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['amount'];?>
:</td>
            <td><input type="text" name="amount" value="0.00" id="amount_deposit" /> <span style="font-size:10px; color:#0000CC" id="min_deposit"></span>
            </td>
        </tr>
        <tr>
        	<td></td>
            <td><input type="button" name="btn" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['send'];?>
" onclick="complete_deposit();" /></td>
        </tr>
    </table>	
    
    
     <?php if ($_smarty_tpl->tpl_vars['settings']->value['money_transfer'] == 'yes') {?>
     	<div id="acc_balancefrm" style="display:none" class="gatewayfrm">
            <div class="info_box"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['click_complete_order'];?>
</div>
            <div align="center">
            <form class="formclass" onsubmit="return submitpayment();" id="checkoutform">
            <input type="hidden" name="action" value="buy" />
            <input type="hidden" name="buy" value="purchase_balance" />
            <input type="hidden" id="acc_amount" name="item" />
            <input type="image" src="<?php echo base_url('assets/evolution/images/gateway_deposit/ab.png');?>
" width="100" />
            <div><a href="javascript:void(0);" onclick="hide_gateways();">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['return'];?>
]</a></div>
            </form>
            </div>
        </div>
      <?php }?>  
	<?php if (count($_smarty_tpl->tpl_vars['gateways']->value) > 0) {?>
        <?php
$__section_n_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_n']) ? $_smarty_tpl->tpl_vars['__smarty_section_n'] : false;
$__section_n_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['gateways']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_n_1_total = $__section_n_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_n'] = new Smarty_Variable(array());
if ($__section_n_1_total != 0) {
for ($__section_n_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] = 0; $__section_n_1_iteration <= $__section_n_1_total; $__section_n_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']++){
?>
        <div id="gateway-<?php echo $_smarty_tpl->tpl_vars['gateways']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['id'];?>
" style="display:none" class="gatewayfrm">
        	<div class="info_box"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['click_complete_order'];?>
</div>
            <div align="center">
			<img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['gateways']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['id'];
$_prefixVariable1=ob_get_clean();
echo base_url((('assets/evolution/images/gateway_deposit/').($_prefixVariable1)).('.png'));?>
" width="100" class="pointer" onclick="document.forms['checkout<?php echo $_smarty_tpl->tpl_vars['gateways']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['id'];?>
'].submit();" />
            	 <div><a href="javascript:void(0);" onclick="hide_gateways();">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['return'];?>
]</a></div>
		        <span style="display:none"><?php echo $_smarty_tpl->tpl_vars['gateways']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['formvar'];?>
</span>
            </div>
        </div>
        <?php
}
}
if ($__section_n_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_n'] = $__section_n_1_saved;
}
?>
    <?php }?> 
    
       
</div>

           


<!-- End Content --><?php }
}
