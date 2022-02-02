<?php
   if (isset($_POST['go'])) {
      if (!empty($_POST['user_login']) and !empty($_POST['user_password'])) {
         require "../connect.php";
         $user_log=$_POST['user_login'];
         $user_pass=$_POST['user_password'];
         $infonrm='';

         $sql_result="SELECT * FROM tablica4users WHERE login='$user_log' AND password='$user_pass' ";
         $baza_rezult=mysqli_query($connect, $sql_result);
         $user_role = mysqli_fetch_assoc($baza_rezult);
         if ($user_role['role']=='user') {
            $user_page = 'tnayin4user.php';
            header('Location: '.$user_page);
         }
         else if ($user_role['role']=='admin') {
            $admin_page = 'tnayin4admin.php';
            header('Location: '.$admin_page);
         }
         else{
            $infonrm="неправильный логин или пароль";
         }
      }
      else{
         $infonrm="неправильный логин или пароль";
       
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="stylesheet" href="das4tnayin.css">
   </head>
   <body>
   <div class='brend'> 'Am i Za' пицца  </div>
      <div class='login_block'>
         <form method="post" action="#">
            <div class='log'>
               <input id='user_login' name='user_login' type='text'>
               <input id='user_password' name='user_password' type='password'>
            </div>
            <div class='in'>
               <button name='go'>Вход</button>
            </div>
            <div id='info'>
               <?=$infonrm?>
            </div>
         </form>
      </div>
    </body>

</html>

