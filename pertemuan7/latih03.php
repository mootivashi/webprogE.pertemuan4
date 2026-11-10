<?php
    // transaksi penjualan produk
    $namaproduk     = "The Sleepy Beagle";
    $harga_satuan   =  "115500";
    $qty            = 5;

    // hitung harga yang harus di bayar
    $total_bayar = $harga_satuan * $qty; 

    echo "<br>Nama Produk           : " . $namaproduk;
    echo "<br>Harga Satuan          : " . $harga_satuan;
    echo "<br>Jumlah Beli           : " . $qty;
    echo "<br>Total Bayar Rp        : " . $total_bayar;

    // terdapat diskon 5% jika Total Bayar lebih dari 500.000
      $diskon = 0;
    if ($total_bayar > 500000) {
        $diskon = 0.05 * $total_bayar;
    }

    $total_akhir = $total_bayar - $diskon;

    echo "<br>Diskon                : " . $diskon;
    echo "<br>Total Bayar Akhir     : " . $total_akhir;

?>