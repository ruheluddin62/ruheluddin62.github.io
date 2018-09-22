<!-- Content -->

<div class="widget-main-title">{lang('withdrawhistory')}</div>
<div class="widget-content">
<table width="100%" class="widget-tbl">
<tr class="titles">
        <td align="center">{$pagination->sort_link('date', lang('date'))}</td>
        <td align="center">{$pagination->sort_link('account', lang('account'))}</td>
        <td align="center">{$pagination->sort_link('method', lang('method'))}</td>
        <td align="center">{$pagination->sort_link('amount', lang('amount'))}</td>
        <td align="center">{$pagination->sort_link('status', lang('status'))}</td>
    </tr>
    {if $pagination->total_rows() > 0}
	    {foreach $pagination->result() as $item}
            <tr>
                <td align="center">{$item->date|date_format:"%b %e %Y %r"}</td>
                <td align="center">{$item->account}</td>
                <td align="center"><img src="{base_url('assets/evolution/images/gateway_proof/'|cat:$item->method|cat:'.gif')}" /></td>
                <td align="center">{set_amount($item->amount)}</td>
                <td align="center">
				    {if $item->status == 'Completed'}
                        <span class="item_completed">{lang('statuscompleted')}</span>
				    {elseif $item->status == 'Pending'}
                        <span class="item_pending">{lang('statuspending')}</span>
					    {if $settings.cancel_pendingwithdraw == 'yes'}- <a href="{site_url('?view=account&page=withdraw_history&cancel='|cat:$item->id)}">{lang('cancel')}</a>{/if}
				    {else}<span class="item_pending">{$item->status}</span>{/if}
                </td>
            </tr>
	    {/foreach}
    {else}
        <tr>
            <td colspan="5" align="center">{lang('no_withdraw')}</td>
        </tr>
    {/if}
</table>
{$pagination->create_links()}