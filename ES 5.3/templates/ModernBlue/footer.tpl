{if $smarty.server.SCRIPT_NAME=='/forum.php'}</div>{/if}

        <div class="processorlist">
            {foreach $gatewaylist as $g}
                <img src="{base_url('assets/evolution/images/gateway_home/'|cat:$g->id|cat:'.gif')}">
            {/foreach}
        </div>
	</div>
	<div id="footer">
    	<div class="copyright">Copyright &copy; 2010 - 2017 {$settings.site_name}. All rights reserved.{$copyright}</div>
        <div class="links">
        <a href="index.php">{$lang.txt.home}</a> &nbsp; &bull; &nbsp; 
        <a href="index.php?view=faq">{$lang.txt.faq}</a> &nbsp; &bull; &nbsp; 
        <a href="index.php?view=contact">{$lang.txt.support}</a>
         &nbsp; &bull; &nbsp;  <a href="index.php?view=terms">{$lang.txt.terms}</a>
        {if $settings.payment_proof == 'yes'}
         &nbsp; &bull; &nbsp;  <a href="index.php?view=payment_proof">{$lang.txt.paymentproof}</a>
        {/if}
         &nbsp; &bull; &nbsp;  <a href="index.php?view=news">{$lang.txt.news}</a>
       
        {if $forum_active == 'yes'}
         &nbsp; &bull; &nbsp;  <a href="forum.php">{$lang.txt.forum}</a>
        {/if}
        </div>
        <div class="clear"></div>
	</div>
</div>
</div>


</body>
</html>    
    
