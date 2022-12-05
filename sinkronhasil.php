<?php 
    error_reporting(0);
        $form_j = $_POST['form_j'];
        $form_batas = $_POST['form_batas'];
    $no = 1;
    $sum_j= 0;
    $sum_batas= 0;
    for ($form_j=$form_j; $form_j <= $form_batas ; $form_j++) { 
        
   
    $hitung_bawah = pow($form_j,2)-2;
    $hasil_akhir = $form_j/$hitung_bawah;



    $sum_j += $form_j;
    $sum_batas += $hasil_akhir; 
    $sum_bawah += $hitung_bawah;

    }

    echo round($sum_batas,3);
    
    ?>