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
                  
                  <div>".$syunak_zangvac['id']."</div>
                  
                  <div class='change_name".$syunak_zangvac['id']."'  contenteditable='true'>".$syunak_zangvac['name']."</div>
                  
                  <span class='change_qty".$syunak_zangvac['id']."'  contenteditable='true'>".$syunak_zangvac['qty']."</span> шт.
                  
                  <div class='change_info".$syunak_zangvac['id']."'  contenteditable='true'>".$syunak_zangvac['info']."</div>

                  Price-<span class='change_price".$syunak_zangvac['id']."' contenteditable='true'>".$syunak_zangvac['price']."</span> руб.
                   <br>
                  <button  onclick='save_change(".$syunak_zangvac['id'].")' class='save' name='save'>Save</button>
                  
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

                     <div >".$syunak_zangvac['id']."</div>
                  
                     <div class='change_name".$syunak_zangvac['id']."'  contenteditable='true'>".$syunak_zangvac['name']."</div>
                     
                     <span class='change_qty".$syunak_zangvac['id']."'  contenteditable='true'>".$syunak_zangvac['qty']."</span> шт.
                     
                     <div class='change_info".$syunak_zangvac['id']."'  contenteditable='true'>".$syunak_zangvac['info']."</div>

                     Price-<span class='change_price".$syunak_zangvac['id']."' contenteditable='true'>".$syunak_zangvac['price']."</span> руб.
                      <br>
                     <button  onclick='save_change(".$syunak_zangvac['id'].")' class='save' name='save'>Save</button>
                
                  </div>
               </div>
            </div>
         ";
      }
}



?>