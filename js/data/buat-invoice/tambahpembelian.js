$(document).ready(function () {
  $('#listproduk').on('click', '.btn-tambah', function () {
    var row = $(this).closest('tr'); // Mendapatkan baris terkait dengan tombol yang diklik
    var id = row.find('td:eq(0)').text(); // Mengambil nilai ID dari sel pertama pada baris
    var nama = row.find('td:eq(1)').text(); // Mengambil nilai nama dari sel kedua pada baris
    var harga = row.find('td:eq(2)').text(); // Mengambil nilai harga dari sel ketiga pada baris
    var qty = row.find('td:eq(3) input').val(); // Mengambil nilai qty dari input pada sel keempat pada baris

    // Menyiapkan data yang akan dikirim melalui AJAX
    var data = {
      'id': id,
      'nama': nama,
      'harga': harga,
      'qty': qty
    };

    console.log(data);

    // Mengirim data melalui AJAX
    $.ajax({
      type: "POST",
      url: "controller/invoice/datapembelian.php",
      data: data,
      success: function (response) {
        updateDataPembelian()
      }
    });
  });
});

$(document).ready(function () {
  // Fungsi untuk memperbarui data pembelian
  function updateDataPembelian() {
    $.ajax({
      type: "GET",
      url: "controller/invoice/datapembelian.php",
      success: function (data) {
        // Menghapus semua baris tabel pembelian
        $('#table-pembelian tbody').empty();

        // Looping untuk menampilkan data pembelian ke dalam tabel
        var totalHarga = 0;
        $.each(data, function (index, produk) {
          var total = produk.harga * produk.qty;
          totalHarga += total;

          var row = '<tr>';
          row += '<td>' + produk.id + '</td>';
          row += '<td>' + produk.nama + '</td>';
          row += '<td>' + produk.harga + '</td>';
          row += '<td>' + produk.qty + '</td>';
          row += '<td>' + total + '</td>';
          row += '</tr>';

          $('#table-pembelian tbody').append(row);
        });

        // Menampilkan total harga pembelian
        $('#total-harga').text(totalHarga);
      }
    });
  }

  // Memanggil fungsi updateDataPembelian() setiap 5 detik
  setInterval(updateDataPembelian, 5000);
});
