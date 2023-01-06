<?php

    include '../config.php';

    $cari = null;

    if (isset($_GET['cari'])){
        $cari = $_GET['cari'];
        if($cari == null){
            $show = query("SELECT * FROM legalisir");
        }else
            $show = query("SELECT * FROM legalisir WHERE nik = '$cari'");
    }else{
        $show = query("SELECT * FROM legalisir");
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
                        <a class="nav-link" href="/legalisir/index.php" style="color: black">Input</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/legalisir/view.php" style="color: black; background-color: #F0F4C3">View</a>
                    </li>
                </ul>
                <form class="d-flex ms-3 my-3" role="search" method="get">
                    <input class="form-control me-2" type="search" placeholder="Search  by NIK" aria-label="Search" name="cari" value="<?php echo $cari; ?>">
                    <button class="btn btn-outline-success me-3" type="submit">Search</button>
                </form>
                <button type="button" class="btn btn-danger me-3 position-relative" onclick="location.href = '../logout.php'">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                        <path d="M7.5 1v7h1V1h-1z"/>
                        <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
                    </svg> Logout
                </button>
            </div>
        </div>
    </nav>

  <div class="table-responsive mx-5 my-5" style="table-border-color-dark: black">
    <table class="table table-bordered table-hover">
      <thead style="background-color: #A5D6A7">
        <tr class="text-center">
          <th scope="col" rowspan="2" class="align-middle">No</th>
          <th scope="col" rowspan="2" class="align-middle">Tanggal</th>
          <th scope="col" rowspan="2" class="align-middle">No. Registrasi</th>
          <th scope="col" rowspan="2" class="align-middle">NIK Pemohon</th>
          <th scope="col" rowspan="2" class="align-middle">Nama Pemohon</th>
          <th scope="col" colspan="5">Dokumen</th>
          <th scope="col" rowspan="2" class="align-middle">Keterangan</th>
          <th scope="col" rowspan="2" class="align-middle">Action</th>
        </tr>
        <tr class="text-center">
          <th scope="col">KTP</th>
          <th scope="col">KK</th>
          <th scope="col">A.Kel</th>
          <th scope="col">A.Kem</th>
          <th scope="col">A.Kawin</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <?php $i = 1; ?>
        <?php foreach ($show as $row): ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['tanggal']; ?></td>
            <td><?php echo $row['no_registrasi']; ?></td>
            <td><?php echo $row['nik']; ?></td>
            <td><?php echo $row['nama_pemohon']; ?></td>
            <td><?php echo $row['ktp']; ?></td>
            <td><?php echo $row['kk']; ?></td>
            <td><?php echo $row['akte_kelahiran']; ?></td>
            <td><?php echo $row['akte_kematian']; ?></td>
            <td><?php echo $row['akte_kawin']; ?></td>
            <td><?php echo $row['keterangan']; ?></td>
            <td><a href="update.php?id=<?php echo $row['id']; ?>">Update</a></td>
        </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>