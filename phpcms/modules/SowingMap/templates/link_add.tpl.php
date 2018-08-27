<?php
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header', 'SowingMap');
 pc_base::load_sys_class('form', '', 0);
?>
<script type="text/javascript">
<!--
	$(function(){
	$.formValidator.initConfig({formid:"myform",autotip:true,onerror:function(msg,obj){window.top.art.dialog({content:msg,lock:true,width:'200',height:'50'}, function(){this.close();$(obj).focus();})}});
	$("#link_name").formValidator({onshow:"<?php echo L("input").L('link_name')?>",onfocus:"<?php echo L("input").L('link_name')?>"}).inputValidator({min:1,onerror:"<?php echo L("input").L('link_name')?>"});
 	$("#link_url").formValidator({onshow:"<?php echo L("input").L('url')?>",onfocus:"<?php echo L("input").L('url')?>"}).inputValidator({min:1,onerror:"<?php echo L("input").L('url')?>"}).regexValidator({regexp:"^http:\/\/[A-Za-z0-9]+\.[A-Za-z0-9]+[\/=\?%\-&]*([^<>])*$",onerror:"<?php echo L('link_onerror')?>"})
	 
	})
//-->
</script>

<div class="pad_10">
<form action="?m=SowingMap&c=SowingMap&a=add" method="post" name="myform" id="myform">
<table cellpadding="2" cellspacing="1" class="table_form" width="100%">


	<tr id="logolink">
		<th width="100"><?php echo L('image')?>：</th>
		<td><?php echo form::images('image')?></td>
	</tr>
	
 
	<tr>
		<th><?php echo L('text')?>：</th>
		<td><textarea name="text" id="text" cols="50"
			rows="6"></textarea></td>
	</tr>


	<tr>
		<th width="100"><?php echo L('tag')?>：</th>
		<td><input type="text" name="tag" id="tag"
			size="30" class="input-text"></td>
	</tr>
 

<tr>
		<td><input type="hidden" name="forward" value="?m=SowingMap&c=SowingMap&a=add"> <input
		type="submit" name="dosubmit" id="dosubmit" class="dialog"
		value=" <?php echo L('submit')?> "></td>
	</tr>

</table>
</form>
</div>
</body>
</html> 