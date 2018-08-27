<?php
include $this->admin_tpl('header','edithead');
pc_base::load_sys_class('form', '', 0);
?>
<div class="pad_10">
<form action="?m=SowingMap&c=SowingMap&a=update&id=<?php echo $info[0]['id']; ?>&pc_hash=<?php echo $_SESSION['pc_hash'];?>" method="post" name="myform" id="myform">
<table cellpadding="2" cellspacing="1" class="table_form" width="100%">

	
	
	<tr id="logolink">
		<th width="100"><?php echo L('image')?>：</th>
		<td><?php echo form::images('image', 'logo', $info[0]['image'], 'link')?></td>
	</tr>

 
	<tr>
		<th><?php echo L('web_description')?>：</th>
		<td><textarea name="text" id="text" cols="50"
			rows="6"><?php echo $info[0]['text'];?></textarea></td>
	</tr>
	
	<tr>
		<th width="100"><?php echo L('tag')?>：</th>
		<td><input type="text" name="tag" id="tag"
			size="30" class="input-text" value="<?php echo $info[0][tag];?>"></td>
	</tr>


<tr>
		<th></th>
		<td><input type="hidden" name="forward" value="?m=SowingMap&c=SowingMap&a=update"> <input
		type="submit" name="dosubmit" id="dosubmit" class="dialog"
		value=" <?php echo L('submit')?> "></td>
	</tr>

</table>
</form>
</div>
</body>
</html>

