<?php
    $dta[0]["NIM"] = "2201010432";
    $dta[0]["NAMA"] = "Ani";
    $dta[0]["JURUSAN"] = "TI-PAR";
    $dta[0]["ALAMAT"] = "panjer";
    $dta[0]["KELAS"] = "J";
    $dta[0]["JKEL"] = "P";

    $dta[1]["NIM"] = "2201010393";
    $dta[1]["NAMA"] = "intan";
    $dta[1]["JURUSAN"] = "TI-PAR";
    $dta[1]["ALAMAT"] = "sesetan";
    $dta[1]["KELAS"] = "J";
    $dta[1]["JKEL"] = "P";

    $dta[2]["NIM"] = "2201010544";
    $dta[2]["NAMA"] = "dela";
    $dta[2]["JURUSAN"] = "TI-PAR";
    $dta[2]["ALAMAT"] = "gianyar";
    $dta[2]["KELAS"] = "J";
    $dta[2]["JKEL"] = "P";

    $dta[3]["NIM"] = "2201010427";
    $dta[3]["NAMA"] = "ica";
    $dta[3]["JURUSAN"] = "TI-PAR";
    $dta[3]["ALAMAT"] = "panjer";
    $dta[3]["KELAS"] = "J";
    $dta[3]["JKEL"] = "P";

    $dta[4]["NIM"] = "2201010506";
    $dta[4]["NAMA"] = "sesetan";
    $dta[4]["JURUSAN"] = "TI-PAR";
    $dta[4]["ALAMAT"] = "sesetan";
    $dta[4]["KELAS"] = "J";
    $dta[4]["JKEL"] = "P";
    
    
    header("content-type: application/json; charset=utf-8");
    echo json_encode($dta);