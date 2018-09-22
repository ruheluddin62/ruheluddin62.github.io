{include file="header.tpl"}
<div class="site_title">{$lang.txt.viewads}</div>
<div class="site_content">

    <div class="info_box">You have to validate this captcha to have access to view ads page.</div>
    <form method="post" id="validation" onsubmit="return submitform(this.id);">
        <table width="100%">
            <tr>
                <td>{$captcha}</td>
            </tr>
            <tr>
                <td><input type="submit" name="btn" value="Give me access"></td>
            </tr>
        </table>

        <input type="hidden" name="do" value="validate">
    </form>
</div>
<!-- End Content -->
{include file="footer.tpl"}