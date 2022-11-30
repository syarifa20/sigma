<?php include 'partials/heading.php' ?>


<div class="pengerjaan-card">
<br>
<h3>&ensp;Penyelesaian:</h3>
<img src="img/soal.PNG" alt="soal">
<form class="row g-3" method="post">
  <div class="col-auto">
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Masukkan J : ">
  </div>
  <div class="col-auto">
    <input type="text" class="form-control" name="form_j" id="form_j" placeholder="Masukkan J" autofocus required>
  </div>
  <div class="col-auto">
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Masukkan Batas : ">
  </div>
  <div class="col-auto">
    <input type="text" class="form-control" name="form_batas" id="form_batas" placeholder="Masukkan batas" required>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3" name="hasil" id="hasil">Cari Hasil</button>
  </div>
</form><br>





<h6>Hasil:</h6>
<table class="table table-bordered sm" border="1" align="center">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">J</th>
      <th scope="col"><sup>j</sup>/<sub>(j <sup>2</sup> - 2)</sub></th>
      <th scope="col"><sup>j</sup>/<sub>(j <sup>2</sup> - 2)</sub></th>
      
    </tr>
  </thead>
  <tbody>
    <?php 
    error_reporting(0);
    if (isset($_POST['hasil'])) {
        $form_j = $_POST['form_j'];
        $form_batas = $_POST['form_batas'];
    }
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
<!-- <?= round(abs($form_j / pow($form_j,2)-2),3) ?> -->

</div>
</body>
<?php include 'partials/footer.php' ?>