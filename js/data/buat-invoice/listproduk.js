$(document).ready(function () {
    var table = $('#listproduk').DataTable({
        lengthChange: false,
        info: false,
        paging: false,
        language: {
            search: 'Search...',
        },
        ajax: "controller/invoice/daftarproduk.php",
        "columns": [
            { "data": "ID_Produk" },
            { "data": "Nama_Produk" },
            {
                "data": "Harga_Produk"
            },
            {
                "data": "Qty",
                "render": function (data, type, row, meta) {
                    return '<input type="number" class="form-control form-control-sm qty-produk" value="1">';
                }
            },
            {
                "data": "ID_Produk",
                "render": function (data, type, row, meta) {
                    return '<button class="btn btn-sm btn-primary btn-tambah"><i class="fas fa-cart-plus"></i></button>';
                }
            }
        ]
    });
});