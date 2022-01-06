<?php
//memasukkan file config.php
include('config.php');
?>
	 <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="admin.css">
    
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">

  </head>
	<div class="container" style="margin-top:20px">
		<hr>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
		<div class="col-md-10 p-5 pt-2">
    <h3><i class="fas fa-tachometer mr-2"></i>DASHBOARD</h3><hr>
    <div class="row text-white">
      <div class="card bg-info ml-5" style="width: 18rem;">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-user-graduate mr-2"></i>
          </div>
          <h5 class="card-title">JUMLAH MAHASISWA</h5>
          <div class="display-4">1.200</div>
          <a href="#" ><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
        </div>
      </div>

      <div class="card bg-success ml-5" style="width: 18rem;">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-chalkboard-teacher mr-2"></i>
          </div>
          <h5 class="card-title">JUMLAH DOSEN</h5>
          <div class="display-4">58</div>
          <a href="#" ><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
        </div>
      </div>

      <div class="card bg-danger ml-5" style="width: 18rem;">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-user-edit mr-2"></i>
          </div>
          <h5 class="card-title">JUMLAH PEGAWAI</h5>
          <div class="display-4">21</div>
          <a href="#" ><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
        </div>
      </div>

    </div>
  </div>
</div>
			</thead>
			<tbody>
				<?php
				//query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
				$sql = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY Nim DESC") or die(mysqli_error($koneksi));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if(mysqli_num_rows($sql) > 0){
					//membuat variabel $no untuk menyimpan nomor urut
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
					while($data = mysqli_fetch_assoc($sql)){
						//menampilkan data perulangan
						echo '
						
						';
						$no++;
					}
				//jika query menghasilkan nilai 0
				}else{
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>

			<tbody>
		</table>
	</div>
	</div>
