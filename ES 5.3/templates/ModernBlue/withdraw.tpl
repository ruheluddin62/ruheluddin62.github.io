<!-- Content -->
<div class="widget-main-title">{lang('withdrawtitle')}</div>

<div class="widget-content">
	{if isset($error_msg)}
		<div class="error_box">
			{$error_msg}
		</div>
	{else}
		<div style="display:none" id="message_sent">{lang('paymentsent')}</div>
		<script>
            function showoption(id){
                $("#paymentgateways").hide();
                $("#gateway-"+id).fadeIn();
            }
            function showgateways(id){
                $("#gateway-"+id).hide();
                $("#paymentgateways").fadeIn();
            }
		</script>
		<div id="paymentgateways" align="center">
			<div class="padding5" align="left">{lang('select_payment_method')}:</div>
			{foreach $gateway as $g}
				<img src="{base_url('assets/evolution/images/gateway_deposit/'|cat:$g->id|cat:'.png')}" class="pointer" onclick="showoption({$g->id});" />
			{/foreach}
		</div>
	{foreach $gateway as $g}
		<div id="gateway-{$g->id}" style="display:none">
			<form class="formclass" id="withdrawform-{$g->id}" onsubmit="return submitform(this.id);">
				<table cellpadding="4" width="100%" class="widget-tbl">
					<tr>
						<td align="right" width="50%">{lang('paymentmethod')}:</td>
						<td>{$g->display_name}</td>
					</tr>
					<tr>
						<td align="right">{$lang.txt.paymentacc}:</td>
						<td>
							{$user_gateway[$g->id]}
						</td>
					</tr>
					{if $mymembership.max_withdraw > 0}
						<tr>
							<td align="right">{$lang.txt.max_witdraw}:</td>
							<td>{set_amount($mymembership.max_withdraw)}</td>
						</tr>
					{/if}
					<tr>
						<td align="right">{$lang.txt.withdrawfee}:</td>
						<td>{$g->withdraw_fee}% + {set_amount($g->withdraw_fee_fixed)}</td>
					</tr>
					<tr id="total">
						<td colspan="2" align="center">{$lang.txt.youwillreceive} <strong>{set_amount($g->user_receive)}</strong></td>
					</tr>
					<tr>
						<td align="center" colspan="2">
							<input type="hidden" name="a" value="submit" />
							<input type="hidden" name="gatewayid" value="{$g->id}" />
							<input type="submit" name="send" value="{$lang.txt.send}" />
							<input type="button" name="btn" value="{$lang.txt.cancel}" class="buttonblue" onclick="showgateways({$g->id});" />
						</td>
					</tr>
				</table>



			</form>

		</div>
	{/foreach}



	{/if}
</div>




<!-- End Content -->