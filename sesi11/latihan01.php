<?php
    $dta["NIM"] = "2201010432";
    $dta["NAMA"] = "Ani";
    $dta["JURUSAN"] = "TI-PAR";
    $dta["ALAMAT"] = "panjer";
    $dta["KELAS"] = "J";
    $dta["JKEL"] = "P";
    
    header("content-type: application/json; charset=utf-8");
    echo json_encode($dta);