<?php

require_once 'config.php';

if (isset($_POST['submit'])) {

  $harga = $_POST['harga'];
  $qty = $_POST['qty'];
  $total = $_POST['total'];
	$tgl = date('Y-m-d');

  // id_produk bernilai '' karena kita set auto increment
  $q = $mysqli->query("INSERT INTO tb_booking VALUES ('', '$harga','$qty', '$total','$tgl')");if ($q) {
    // pesan jika data tersimpan
    echo "<script>alert('Data booking berhasil ditambahkan'); window.location.href='index.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data booking gagal ditambahkan'); window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
 header('Location: index.php');
}

