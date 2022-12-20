<?php
    include '../config.php';

    if (isset($_POST['input'])){
        if (dataSave($_POST) > 0){
            echo "
				<script>
					alert('Data Tersimpan');
					document.location.href = 'index.php';
				</script>
			";
        }else{
            echo "
				<script>
					alert('Data Gagal Tersimpan');
					document.location.href = 'index.php';
				</script>
			";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Pendaftaran Legalisir Page</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg"  style="background-color: #8BC34A">
    <div class="container-fluid justify-content-md-end">
        <a class="navbar-brand" href="#" style="font-family: 'Goudy Old Style'; font-weight: bold; font-size: x-large">
            <img src="/img/capil.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-center me-2">
            SILEGAL BANYUMAS
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills ms-3 me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/legalisir/index.php" style="color: black; background-color: #F0F4C3">Input</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/legalisir/view.php" style="color: black">View</a>
                </li>
            </ul>
            <button type="submit" class="btn btn-danger me-3 position-relative" onclick="location.href = '../logout.php'">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                    <path d="M7.5 1v7h1V1h-1z"/>
                    <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
                </svg> Logout
            </button>
        </div>
    </div>
</nav>

<form action="" method="post">
  <div class="container-fluid py-5 px-5">
    <h3 class="pb-3">Input Data Legalisir</h3>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
      <input type="date" class="form-control" id="exampleFormControlInput1" name="tanggal">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">No. Registrasi</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="1/09/11/2022" name="no_registrasi">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">NIK Pemohon</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="3333333333333333" name="nik">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nama Pemohon</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Joko Susilo" name="nama_pemohon">
    </div>
    <div>
      <label for="exampleFormControlInput1" class="form-label">Jenis Dokumen dan Jumlah Dokumen</label>
    </div>
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1" style="width: 220px">Kartu Tanda Penduduk (KTP)</span>
          <input type="text" class="form-control" placeholder="1" name="ktp">
      </div>
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1" style="width: 220px">Kartu Keluarga (KK)</span>
          <input type="text" class="form-control" placeholder="1" name="kk">
      </div>
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1" style="width: 220px">Akte Kelahiran</span>
          <input type="text" class="form-control" placeholder="1" name="akel">
      </div>
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1" style="width: 220px">Akte Kematian</span>
          <input type="text" class="form-control" placeholder="1" name="akem">
      </div>
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1" style="width: 220px">Akte Perkawinan</span>
          <input type="text" class="form-control" placeholder="1" name="akawin">
      </div>
      <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
          <textarea type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="Masukkan nomor registrasi akte kelahiran, akte kematian, atau akte perkawinan" name="keterangan" style="height: 100px"></textarea>
      </div>
      <div class="d-grip mb-4 position-relative">
          <input type="submit" name="input" value="Input"  class="btn btn-primary position-absolute end-0">
<!--          <button type="submit" class="btn btn-primary position-absolute end-0" name="input">Input</button>-->
      </div>
    </div>
  </div>
</form>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>