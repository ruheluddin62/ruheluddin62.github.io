{include file="header.tpl"}
<div class="site_title">{lang('paymentproof')}</div>
<div class="site_content">
    <table width="100%" class="widget-tbl">
        <tr class="titles">
            <td align="center">{$pagination->sort_link('date', $lang.txt.date)}</td>
            <td align="center">{$pagination->sort_link('member', $lang.txt.username)}</td>
            <td align="center">{$pagination->sort_link('method', $lang.txt.method)}</td>
            <td align="center">{$pagination->sort_link('amount', $lang.txt.amount)}</td>
        </tr>
		{if $pagination->total_rows() > 0}
			{foreach $pagination->result() as $item}
                <tr>
                    <td align="center">{$item->date|date_format:"%b %e %Y %r"}</td>
                    <td align="center">{$item->username}</td>
                    <td align="center"><img src="{base_url('assets/evolution/images/gateway_proof/'|cat:$item->method|cat:'.gif')}" /></td>
                    <td align="center">{set_amount($item->amount)}</td>
                </tr>
			{/foreach}
		{else}
            <tr>
                <td colspan="4">{$lang.txt.no_records}</td>
            </tr>
		{/if}
    </table>
	{$pagination->create_links()}
{include file="footer.tpl"}