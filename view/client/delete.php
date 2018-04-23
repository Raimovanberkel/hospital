<div id="container">
  <h1>Dit is clients/delete</h1>
  <?php
include("controller.php");
//delete the data
 if(isset($_REQUEST['del_id']))
 {
   $del=$_REQUEST['del_id'];

   $obj->delete($del);
   header("location:view.php");
}
?>

<form method="post" >
 <table align="center" border="1">
  <tr>
   <th>Uid</th>
   <th>Uname</th>
   <th>Password</th>
   <th colspan="2">Action</th>
  </tr>
  <?php
  while($r = mysql_fetch_array($s))
  {
  ?>
  <tr>
   <td><?php echo $r['uid']; ?></td>
   <td><?php echo $r['uname']; ?></td>
   <td><?php echo $r['pass']; ?></td>
   <td><a href="view.php?del_id=<?php echo $r['uid']; ?>">delete</td>
  </tr>
  <?php
  }
  ?>
 </table>
</form>

  
</div>
