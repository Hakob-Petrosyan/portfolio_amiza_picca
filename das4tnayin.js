

function f1(a) {
   $('.cost').show("slow")
   let fulcost = $('.cost_picca').html() * 1;
   $('.cost_picca').html(fulcost + a);
}
function f2() {
   $('.cost_picca').html('');
   $('.cost').hide("slow");
}
function f3() {

   let chuzby = $('.chuz_by').val()
   let from = $('.from1').val()
   let to = $('.to1').val()
   let fromto = $('.from_to').val()
   $.post("das4tnayinedit.php",
      {
         chuz_by: chuzby,
         from1: from,
         to1: to,
         from_to: fromto,
      },
      function (result) {
         $('.page_block').html(result)
      })
}

function edit_change() {

   let chuzby = $('.chuz_by').val()
   let from = $('.from1').val()
   let to = $('.to1').val()
   let fromto = $('.from_to').val()
   $.post("das4tnayinedit_change.php",
      {
         chuz_by: chuzby,
         from1: from,
         to1: to,
         from_to: fromto,
      },
      function (result) {
         $('.page_block').html(result)
      })
}

function save_change(bd_id) {

   setTimeout(close, 2000)
   let new_id = bd_id
   let new_name = $('.change_name' + bd_id).html()
   let new_qty = $('.change_qty' + bd_id).html()
   let new_info = $('.change_info' + bd_id).html()
   let new_price = $('.change_price' + bd_id).html()

   $.post("das4changesave.php",
      {
         id: new_id,
         changed_name: new_name,
         changed_qty: new_qty,
         changed_info: new_info,
         changed_price: new_price,
      },
      function (result) {
         $('.change_result').html(result)
      })

   $('.change_result').show("slow")
   function close() {
      $('.change_result').hide("slow")
   }
}
