 function addCart(id) {
     num = $("#num").val();
     $.post("../controller/carts/addcart.php", { 'id': id, 'num': num, }, function(data) {
         location.reload();

     });

 }

 //  function addCart(id) {
 //      num = $("#num").val();
 //      console.log("num", num);

 //      $.ajax({
 //          url: '../controller/carts/addcart.php',
 //          type: 'POST',
 //          data: {
 //              'id': id,
 //              'num': num,
 //          },
 //          //  success: function(response) {

 //          //      function getCart() {
 //          //          console.log("id", id);

 //          //          $.ajax({
 //          //              url: '../controller/carts/getcart.php',
 //          //              type: 'GET',
 //          //              success: function(listCarts) {
 //          //                  const parseArray = JSON.parse(listCarts);
 //          //                  const count = parseArray.length;
 //          //                  $('#numCart').text(count);

 //          //              }
 //          //          });
 //          //      }

 //          //      getCart();
 //          //  },
 //          //  error: function(response) {
 //          //      console.log("loi")

 //          //  },

 //      });

 //      // $.post('addcart.php',{'id': id, 'num': num}, function(data){
 //      // });
 //  }  