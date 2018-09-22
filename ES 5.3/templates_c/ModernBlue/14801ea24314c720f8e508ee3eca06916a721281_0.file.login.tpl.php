<?php
/* Smarty version 3.1.31, created on 2017-03-13 04:28:36
  from "C:\xampp\htdocs\evo60\templates\ModernBlue\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c611e43f4612_00300730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14801ea24314c720f8e508ee3eca06916a721281' => 
    array (
      0 => 'C:\\xampp\\htdocs\\evo60\\templates\\ModernBlue\\login.tpl',
      1 => 1393348548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58c611e43f4612_00300730 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="site_title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['loginacc'];?>
</div>
<div class="site_content">
<div style="width:600px; margin:0 auto">
<div class="widget-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['loginacc'];?>
</div>
<form id="loginform" method="post" onsubmit="return submitform(this.id);">
<input type="hidden" name="token" value="<?php echo getToken('login');?>
" />
<input type="hidden" name="a" value="submit" />
	<table width="100%" class="widget-tbl">
    	<tr>
        	<td align="right" width="200"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['username'];?>
:</td>
            <td><input type="text" name="username" size="40" /></td>
		</tr>
        <tr>
            <td align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['password'];?>
:</td>
            <td><input type="password" name="password" size="40" /></td>
        </tr>
        <tr>
            <td colspan="2">
            	<div style="width:360px; margin:0 auto;">
            
            <ul id="keyboard">
                <li class="symbol"><span class="off">`</span><span class="on">~</span></li>
                <li class="symbol"><span class="off">1</span><span class="on">!</span></li>
                <li class="symbol"><span class="off">2</span><span class="on">@</span></li>
                <li class="symbol"><span class="off">3</span><span class="on">#</span></li>
                <li class="symbol"><span class="off">4</span><span class="on">$</span></li>
                <li class="symbol"><span class="off">5</span><span class="on">%</span></li>
                <li class="symbol"><span class="off">6</span><span class="on">^</span></li>
                <li class="symbol"><span class="off">7</span><span class="on">&amp;</span></li>
                <li class="symbol"><span class="off">8</span><span class="on">*</span></li>
                <li class="symbol"><span class="off">9</span><span class="on">(</span></li>
                <li class="symbol"><span class="off">0</span><span class="on">)</span></li>
                <li class="symbol"><span class="off">-</span><span class="on">_</span></li>
                <li class="symbol"><span class="off">=</span><span class="on">+</span></li>
                <li class="delete lastitem">delete</li>
                <li class="tab">tab</li>
                <li class="letter">q</li>
                <li class="letter">w</li>
                <li class="letter">e</li>
                <li class="letter">r</li>
                <li class="letter">t</li>
                <li class="letter">y</li>
                <li class="letter">u</li>
                <li class="letter">i</li>
                <li class="letter">o</li>
                <li class="letter">p</li>
                <li class="symbol"><span class="off">[</span><span class="on">{</span></li>
                <li class="symbol"><span class="off">]</span><span class="on">}</span></li>
                <li class="symbol lastitem"><span class="off">\</span><span class="on">|</span></li>
                <li class="capslock">caps lock</li>
                <li class="letter">a</li>
                <li class="letter">s</li>
                <li class="letter">d</li>
                <li class="letter">f</li>
                <li class="letter">g</li>
                <li class="letter">h</li>
                <li class="letter">j</li>
                <li class="letter">k</li>
                <li class="letter">l</li>
                <li class="symbol"><span class="off">;</span><span class="on">:</span></li>
                <li class="symbol"><span class="off">'</span><span class="on">&quot;</span></li>
                <li class="return lastitem">return</li>
                <li class="left-shift">shift</li>
                <li class="letter">z</li>
                <li class="letter">x</li>
                <li class="letter">c</li>
                <li class="letter">v</li>
                <li class="letter">b</li>
                <li class="letter">n</li>
                <li class="letter">m</li>
                <li class="symbol"><span class="off">,</span><span class="on">&lt;</span></li>
                <li class="symbol"><span class="off">.</span><span class="on">&gt;</span></li>
                <li class="symbol"><span class="off">/</span><span class="on">?</span></li>
                <li class="right-shift lastitem">shift</li>
                <li class="space lastitem">&nbsp;</li>
              </ul>
                            
              </div>
              </td>
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['captcha_login'] == 'yes') {?> 
        	<?php if ($_smarty_tpl->tpl_vars['settings']->value['captcha_type'] == 1) {?>
            <tr>
                <td></td>
                <td><?php echo $_smarty_tpl->tpl_vars['captcha_login']->value;?>
</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="text" name="captcha" id="captcha_login" size="40" /></td>
            </tr>
        	<?php } else { ?>
            <tr>
            	<td colspan="2" align="center"><?php echo $_smarty_tpl->tpl_vars['captcha']->value;?>

                </td>
            </tr>            
            <?php }?>
        <?php }?>
        <tr>
        	<td></td>
            <td><input type="submit" name="login" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['login'];?>
" /></td>
        </tr>
        <tr>
        	<td colspan="2" align="center">
            <a href="./?view=forgot"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['forgotpassword'];?>
</a>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['register_activation'] == 'yes') {?>
            &nbsp;&nbsp;&bull;&nbsp;&nbsp; <a href="./?view=forgot&page=resend_activation"><?php echo $_smarty_tpl->tpl_vars['lang']->value['txt']['resendactivation'];?>
</a>
            <?php }?>
            </td>
        </tr>
    </table>

</form>
 
</div>
       
<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
loginkeyboard();		
});<?php echo '</script'; ?>
>       


</div>
<!-- End Content -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
