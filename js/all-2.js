function updateCart(id) {
    num = $("#num_" + id).val();
    $.get("cart.php?&id=" + id + "&num=" + num, function(data) {
        location.reload();

    });

}

function checkDelete(id) {
    confirm("bạn có chắc muốn xóa !");
    $.get("cart.php?id=" + id + "&action=del", function(data) {
        location.reload();
    });

}