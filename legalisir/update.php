<?php
    include '../config.php';

    $id = $_GET['id'];

    $data = query("SELECT * FROM legalisir WHERE id = '$id'")[0];

    if (isset($_POST['ubah'])){
        if (edit($_POST) > 0){
            echo "
                    <script>
                        alert('Data berhasil diubah');
                        document.location.href = 'view.php';
                    </script>
                ";
        }else{
            echo "
                    <script>
                        alert('Data Gagal diubah');
                        document.location.href = 'view.php';
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
    <div class="container-fluid justify-content-md-start">
        <a class="navbar-brand" href="#" style="font-family: 'Goudy Old Style'; font-weight: bold; font-size: x-large">
            <img src="/img/capil.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-center me-2">
            SILEGAL BANYUMAS
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<form action="" method="post">
    <div class="container-fluid py-5 px-5">
        <h3 class="pb-3">Edit Data Legalisir</h3>
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" name="tanggal" value="<?php echo $data['tanggal']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">No. Registrasi</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="1/09/11/2022" name="no_registrasi" value="<?php echo $data['no_registrasi']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NIK Pemohon</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="3333333333333333" name="nik" value="<?php echo $data['nik']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Pemohon</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Joko Susilo" name="nama_pemohon" value="<?php echo $data['nama_pemohon']; ?>">
        </div>
        <div>
            <label for="exampleFormControlInput1" class="form-label">Jenis Dokumen dan Jumlah Dokumen</label>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1" style="width: 220px">Kartu Tanda Penduduk (KTP)</span>
            <input type="text" class="form-control" placeholder="1" name="ktp" value="<?php echo $data['ktp']; ?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1" style="width: 220px">Kartu Keluarga (KK)</span>
            <input type="text" class="form-control" placeholder="1" name="kk" value="<?php echo $data['kk']; ?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1" style="width: 220px">Akte Kelahiran</span>
            <input type="text" class="form-control" placeholder="1" name="akte_kelahiran" value="<?php echo $data['akte_kelahiran']; ?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1" style="width: 220px">Akte Kematian</span>
            <input type="text" class="form-control" placeholder="1" name="akte_kematian" value="<?php echo $data['akte_kematian']; ?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1" style="width: 220px">Akte Perkawinan</span>
            <input type="text" class="form-control" placeholder="1" name="akte_kawin" value="<?php echo $data['akte_kawin']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
            <textarea type="text" class="form-control" id="exampleFormControlInput1"
                      placeholder="Masukkan nomor registrasi akte kelahiran, akte kematian, atau akte perkawinan" name="keterangan" style="height: 100px"
            ><?php echo $data['keterangan']; ?></textarea>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input type="submit" name="ubah" value="Ubah"  class="btn btn-primary me-md-2">
            <input type="cancel" name="batal" value="Batal"  class="btn btn-outline-secondary" style="width: 60px" onclick="history.back()">
        </div>
    </div>
    </div>
</form>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>