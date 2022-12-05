<table class="table table-bordered sm" border="1" align="center">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">j</th>
      <th scope="col"><sup>j</sup>/<sub>(j <sup>2</sup> - 2)</sub></th>
      <th scope="col"><sup>j</sup>/<sub>(j <sup>2</sup> - 2)</sub></th>
      
    </tr>
  </thead>
  <tbody>
    <?php 
    error_reporting(0);
        $form_j = $_POST['form_j'];
        $form_batas = $_POST['form_batas'];
    $no = 1;
    $sum_j= 0;
    $sum_batas= 0;
    for ($form_j=$form_j; $form_j <= $form_batas ; $form_j++) { 
        
    ?>

   
    <?php 
    $hitung_bawah = pow($form_j,2)-2;
    $hasil_akhir = $form_j/$hitung_bawah;



    $sum_j += $form_j;
    $sum_batas += $hasil_akhir; 
    $sum_bawah += $hitung_bawah;
    
    ?>
    <tr>
      <th scope="row"><?= $no++; ?></th>
      <td><?= $form_j; ?></td>
      <td><sup><?= $form_j ?></sup>/<sub><?= $hitung_bawah ?></sub></td>
      <td><?= round($hasil_akhir,3) ?></td>
     
    </tr>
    <?php } ?>
    <tr>
      <th scope="row">Jumlah</th>
      <th scope="row"><?= $sum_j; ?></th scope="row">
      <th scope="row"><sup><?= $sum_j ?>/</sup><sub><?= $sum_bawah ?></sub></th scope="row">
      <th scope="row"><?= round($sum_batas,3) ?></th>
      
    </tr>
  </tbody>
</table>