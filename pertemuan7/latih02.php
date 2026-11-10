<?php
    // Percabangan if pdada PHP

    $nilai = 70;

    // beri keterangan lulus apabila nilai >65

    $ket = "LULUS";
    if( $nilai <= 65){
        $ket = "TIDAK LULUS";
    }

    echo "Keterangan: " . $ket;



     $ket = "DISKON 5%";
    if( $nilai <= 500000){
        $ket = "TIDAK DAPAT DISKON";
    }

    echo "Keterangan: " . $ket;