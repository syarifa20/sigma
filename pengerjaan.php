<?php include 'partials/heading.php' ?>
<script>
$(document).ready(function () {
			$("#data").load('sinkron.php');
});

$(document).ready(function () {
			$("#show_hasil").load('sinkronhasil.php');
});
</script>

<div class="pengerjaan-card">
<br>
<h3>&ensp;Penyelesaian:</h3>
<br>
<form class="row g-3 form-data">
  
  <div class="col-auto">
  <label for="j">batas =</label>
  </div>
  <input type="text" id="showbatas" class="form-control" style="width: 10%; "  readonly>
</form>	
<div class="sigma">
<p style="font-size: 90px">&Sigma; <img src="img/soal_3.PNG" alt="">=<i style="font-size: 50px;" id="show_hasil"></i></p>
</div>

<form class="row g-3 form-data" method="post">
  
  <div class="col-auto">
  &emsp;&emsp;<label for="j">j =</label>
  </div>
  <input type="text" id="showj" class="form-control" style="width: 10%;"  readonly>
</form>	

<br>
<!-- <img src="img/soal_3.PNG" alt="soal">=<strong style="font-size: 25px;"> <u><?= round($sum_batas,3) ?></u></strong> -->

<form id="frm_hitung" class="row g-3">
  <div class="col-auto">
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Masukkan J : ">
  </div>
  <div class="col-auto">
    <input type="number" onkeyup="carij();" class="form-control" name="form_j" id="form_j" placeholder="Masukkan J" autofocus required>
  </div><br>
  <div class="col-auto">
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Masukkan Batas : ">
  </div>
  <div class="col-auto">
    <input type="number" onkeyup="caribatas();" class="form-control" name="form_batas" id="form_batas" placeholder="Masukkan batas" required>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3" id="hasil">Cari Hasil</button>
    
  </div>
</form><br>





<h6>Hasil:</h6>
<div id="data"></div>

</div>
<script>
  $("#frm_hitung").submit(function(e) { 
    e.preventDefault();
				 $.ajax({
					 url: 'sinkron.php',
					 type: 'post',
					 data: $(this).serialize(),             
					 success: function(data) {  
					  $('#data').html(data); 
            	 
					 }
        });
  });

  $("#frm_hitung").submit(function(e) { 
    e.preventDefault();
				 $.ajax({
					 url: 'sinkronhasil.php',
					 type: 'post',
					 data: $(this).serialize(),             
					 success: function(data) {  
					  $('#show_hasil').html(data); 	 
					 }
        });
  });



  function carij(){
      //membuat variabel val_cari dan mengisinya dengan nilai pada field cari
      var form_j = $('#form_j').val();
      var showj = $('#showj').val();
      $('#showj').val(form_j);
  }
  function caribatas(){
      //membuat variabel val_cari dan mengisinya dengan nilai pada field cari
      var form_batas = $('#form_batas').val();
      var showbatas = $('#showbatas').val();
      $('#showbatas').val(form_batas);
  }
</script>

<?php include 'partials/footer.php' ?>