<div class="widget-main-title">{lang('loginhistory')}</div>
<div class="widget-content">
    <table width="100%" class="widget-tbl">
        <tr class="titles">
            <td width="20" align="center">{$pagination->sort_link('status', '&nbsp;')}</td>
            <td width="300">{$pagination->sort_link('agent', lang('user_agent'))}</td>
            <td align="center">{$pagination->sort_link('ip', lang('ip_address'))}</td>
            <td align="center">{$pagination->sort_link('date', lang('date'))}</td>
        </tr>
		{if $pagination->total_rows() > 0}
			{foreach $pagination->result() as $item}
                <tr>
                    <td align="center"><img src="{base_url('assets/evolution/images/')}{if $item->status == 'Successful'}accept{else}fail{/if}.png" /></td>
                    <td>
                        <div {if $item->status != 'Successful'}class="fail_td"{/if}>
							{if $item->agent == ''}-{else}{$item->agent}{/if}
                        </div>
                    </td>
                    <td align="center">{$item->ip}</td>
                    <td align="center">{$item->date|date_format:"%b %e %Y %r"}</td>
                </tr>
			{/foreach}
		{else}
            <tr>
                <td colspan="4" align="center">{lang('no_logs')}</td>
            </tr>
		{/if}
    </table>
	{$pagination->create_links()}
</div>