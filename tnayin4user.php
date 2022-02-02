<?php
 require "../connect.php";
   $sql = "SELECT * FROM tnayin4proj";
   $query = mysqli_query($connect, $sql);
   while ($syunak_zangvac = mysqli_fetch_assoc($query)) {
      $content .= "
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="das4tnayin.css">  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<div class='cost'><div class='cost_picca'></div><span  onclick='f2()' class='dell'>Удалить</span></div>

<div class='brend'><a href='das4tnayin.php'>'Am i Za' пицца</a> </div>
   <div class='chuz_params'>
      <select name='chuz_by' class='chuz_by'>
         <option value='price'>price</option>
         <option value='qty'>QTY</option>
      </select>
         <input class='from1' name='from' placeholder='from' value=''></input>   
         <input class='to1' name='to' placeholder='to' value=''></input> 
      <select name='from_to' class='from_to'>
         <option value=''>По возрастанию</option>
         <option value='DESC'>По убыванию</option>
      </select>  
      <button class='from_to1' onclick='f3()' >Сортировать</button>
   </div>
      <div class='page_block'>
         <?= $content ?>
   </div>

   <script src='das4tnayin.js'></script>
</body>
</html>

