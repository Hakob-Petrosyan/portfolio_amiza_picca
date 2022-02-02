<?php
  require "../connect.php";
   $id=$_POST['id'];
   $new_name=$_POST['changed_name'];
   $new_qty=$_POST['changed_qty'];
   $new_info=$_POST['changed_info'];
   $new_price=$_POST['changed_price'];

   $sql_chage="UPDATE tnayin4proj SET name = '$new_name', qty=$new_qty, info='$new_info', price = '$new_price' WHERE id='$id'";
   if(mysqli_query($connect, $sql_chage)){
      echo 'saving';
   }else{
      echo mysqli_error($connect);
   }
?>