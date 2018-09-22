<!-- Content -->
<div class="widget-main-title">{$lang.txt.deposithistory}</div>
<div class="widget-content">
<table width="100%" class="widget-tbl">



<tr class="titles">
        <td align="center">{$pagination->sort_link('date', $lang.txt.date)}</td>
        <td align="center">{$pagination->sort_link('account', $lang.txt.account)}</td>
        <td align="center">{$pagination->sort_link('method', $lang.txt.method)}</td>
        <td align="center">{$pagination->sort_link('amount', $lang.txt.amount)}</td>
    </tr>
    {if $pagination->total_rows() > 0}
	    {foreach $pagination->result() as $item}
            <tr>
                <td align="center">{$item->date|date_format:"%b %e, %Y"}</td>
                <td>{$item->fromacc}</td>
                <td align="center"><img src="{base_url('assets/evolution/images/gateway_proof/'|cat:$item->method|cat:'.gif')}" /></td>
                <td align="center">{set_amount($item->amount)}</td>
            </tr>
	    {/foreach}
    {else}
        <tr>
            <td colspan="4">{$lang.txt.no_deposits}</td>
        </tr>
    {/if}
</table>

    {$pagination->create_links()}


</div>