<?php
defined('IN_ADMIN') or exit('No permission resources.');
$show_dialog = 1;
include $this->admin_tpl('header', 'SowingMap');
?>
<div class="container">
  <p/>
  <table class="table table-striped table-bordered text-center">
    <th>id</th>
    <th>图片</th>
    <th>文本</th>
    <th>说明</th>
    <th>操作</th>
    <?php 
      foreach ($info as $key => $v) {

        ?>
        <?php 
         echo "<tr>
         <td>$v[id]</td>
         <td>$v[image]</td>
         <td>$v[text]</td>
         <td>$v[tag]</td>
         <td>"; ?>
        <a class='label label-success' href="###&id=<?php echo $v['id'] ?>"
      onclick="edit(<?php echo $v['id'];?>, '<?php echo new_addslashes(new_html_special_chars($v['text']))?>');"
      title="<?php echo L('edit'); ?>"><?php echo L('edit'); ?></a> 
       
      <?php 
          echo "
         <a href='?m=SowingMap&c=SowingMap&a=del&pc_hash=XevsUs&id=$v[id]' class='label label-success'>删除</a>
         </td>
         </tr>";  }
       ?>
    
  </table>
</div>
<script type="text/javascript">
  function edit(id, name) {
  window.top.art.dialog({id:'edit'}).close();
  window.top.art.dialog({title:'修改轮播图',id:'edit',iframe:'?m=SowingMap&c=SowingMap&a=edit&id='+id,width:'700',height:'450'}, function(){var d = window.top.art.dialog({id:'edit'}).data.iframe;var form = d.document.getElementById('dosubmit');form.click();return false;}, function(){window.top.art.dialog({id:'edit'}).close()});
}
</script>
</body>
</html>