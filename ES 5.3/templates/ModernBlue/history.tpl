<!-- Content -->
<div class="widget-main-title">{$lang.txt.orderhistory}</div>
<div class="widget-content">
    <table width="100%" class="widget-tbl">
        <tr class="titles">
            <td align="center">{$pagination->sort_link('date', $lang.txt.date)}</td>
            <td>{$pagination->sort_link('type', $lang.txt.product)}</td>
            <td align="center">{$pagination->sort_link('price', $lang.txt.price)}</td>
            <td align="center">{$pagination->sort_link('status', $lang.txt.status)}</td>
        </tr>
		{if $pagination->total_rows() > 0}
			{foreach $pagination->result() as $item}
                <tr>
                    <td align="center">{$item->date|date_format:"%b %e, %Y"}</td>
                    <td>{$item->name}</td>
                    <td align="center">{set_amount($item->price)}</td>
                    <td align="center">
						{if $item->status == 'Completed'}
                            <span class="item_completed">{$item->status}</span>
						{else}
                            <span class="item_pending">{$item->status}</span>
						{/if}
                    </td>
                </tr>
			{/foreach}
		{else}
            <tr>
                <td colspan="4">{$lang.txt.no_order}</td>
            </tr>
		{/if}
    </table>
	{$pagination->create_links()}
</div>