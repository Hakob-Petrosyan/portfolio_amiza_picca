<?php
require "../connect.php";

if (!empty($_POST['from1']) and !empty($_POST['to1'])){
   $chuzby = $_POST['chuz_by'];
   $from = $_POST['from1'];
   $to = $_POST['to1'];
   $fromto = $_POST['from_to'];

   $sql = "SELECT * FROM tnayin4proj WHERE $chuzby BETWEEN $from AND $to ORDER BY $chuzby $fromto";
   $query=mysqli_query($connect, $sql);
   while($syunak_zangvac = mysqli_fetch_assoc($query)){
      echo"
            <div class='img_block_1'>
               <div class='imim'>   
                  <img src='../../../photos/picca/".$syunak_zangvac['image']."'>
                  <br>
                  <div class='tesakani'>
                     ".$syunak_zangvac['name']."
                     <br>
                     ".$syunak_zangvac['qty']."шт.
                     <br>
                     ".$syunak_zangvac['info']."
                     <br> 
                     Price-".$syunak_zangvac['price']."руб.
                     <br> 
                     <button onclick='f1(".$syunak_zangvac['price'].")' class='buy' name='buy'>Buy</button>
                  
                  </div>
               </div>
            </div>
         ";
      }
}
else{
   $chuzby = $_POST['chuz_by'];
   $fromto = $_POST['from_to'];

   $sql = "SELECT * FROM tnayin4proj ORDER BY $chuzby $fromto";
   $query=mysqli_query($connect, $sql);
   while($syunak_zangvac = mysqli_fetch_assoc($query)){
      echo"
            <div class='img_block_1'>
               <div class='imim'>   
                  <img src='../../../photos/picca/".$syunak_zangvac['image']."'>
                  <br>
                  <div class='tesakani'>
                     ".$syunak_zangvac['name']."
                     <br>
                     ".$syunak_zangvac['qty']."шт.
                     <br>
                     ".$syunak_zangvac['info']."
                     <br> 
                     Price-".$syunak_zangvac['price']."руб.
                     <br> 
                     <button onclick='f1(".$syunak_zangvac['price'].")' class='buy' name='buy'>Buy</button>
                  
                  </div>
               </div>
            </div>
         ";
      }
}



?>