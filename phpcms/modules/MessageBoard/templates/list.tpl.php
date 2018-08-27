<!DOCTYPE html>
<html>
<head>
  <title>留言板</title>
<link rel="stylesheet" type="text/css" href="<?php echo BS_PATH ?>css/bootstrap.min.css">
<script src="<?php echo JS_PATH ?>jquery.min.js" type="text/javascript"></script>
<script src="<?php echo BS_PATH ?>js/bootstrap.min.js" type="text/javascript"></script>
<style type="text/css">
  th{
    text-align: center;
  }
</style>
</head>
<body>
<div class="container">
  <p/>
  <table class="table table-striped table-bordered text-center">
    <th>id</th>
    <th>name</th>
    <th>sex</th>
    <th>qq</th>
    <th>email</th>
    <th>phone</th>
    <th>text</th>
    <th>操作</th>
    <?php 
      foreach ($info as $key => $v) {
         echo "<tr>
         <td>$v[id]</td>
         <td>$v[name]</td>";
         if($v[sex]%2==0){
          echo "<td>女</td>";
         }
         else{
          echo "<td>男</td>";
         }
         echo "<td>$v[qq]</td>";
         echo "<td>$v[email]</td>";
         echo "<td>$v[phone]</td>";
         echo "<td>$v[text]</td>
         <td>
        <a href='?m=MessageBoard&c=MessageBoard&a=del&pc_hash=XevsUs&id=$v[id]' class='label label-success'>删除</a>
         </td>
         </tr>";
      }
     ?>
  </table>
</div>
</body>
</html>