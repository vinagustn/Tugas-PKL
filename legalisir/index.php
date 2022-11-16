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
        SILEKER BANYUMAS
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav nav-pills ms-3 me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/legalisir/index.php" style="color: black; background-color: #F0F4C3">Input</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/legalisir/view.php" style="color: black">View</a>
          </li>
        </ul>
        <form class="d-flex ms-3 my-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success me-3" type="submit">Search</button>
        </form>
          <button type="button" class="btn btn-danger me-3 position-relative" name="logout">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                  <path d="M7.5 1v7h1V1h-1z"/>
                  <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
              </svg> Logout
          </button>
      </div>
    </div>
  </nav>

  <div class="container-fluid py-5 px-5">
    <h3 class="pb-3">Input Data Legalisir</h3>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
      <input type="date" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">No. Registrasi</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="1/09/11/2022">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nama</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Joko Susilo">
    </div>
    <div>
      <label for="exampleFormControlInput1" class="form-label">Jenis Dokumen dan Jumlah Dokumen</label>
    </div>
    <div class="input-group mb-3">
      <div class="input-group-text" style="width: 250px">
        <input class="form-check-input mt-0 me-2" type="checkbox" value="Kartu Tanda Penduduk (KTP)">Kartu Tanda Penduduk (KTP)
      </div>
      <input type="text" class="form-control" placeholder="0">
    </div>
    <div class="input-group mb-3">
      <div class="input-group-text" style="width: 250px">
        <input class="form-check-input mt-0 me-2" type="checkbox" value="Kartu Keluarga (KK)">Kartu Keluarga (KK)
      </div>
      <input type="text" class="form-control" placeholder="0">
    </div>
    <div class="input-group mb-3">
      <div class="input-group-text" style="width: 250px">
        <input class="form-check-input mt-0 me-2" type="checkbox" value="Akta Kelahiran">Akta Kelahiran    
      </div>
      <input type="text" class="form-control" placeholder="0">
      <input type="text" class="form-control" placeholder="3333-LU-010101-0001">
    </div>
    <div class="input-group mb-3">
      <div class="input-group-text" style="width: 250px">
        <input class="form-check-input mt-0 me-2" type="checkbox" value="Akta Kematian">Akta Kematian
      </div>
      <input type="text" class="form-control" placeholder="0">
      <input type="text" class="form-control" placeholder="3333-KM-010101-0001">
    </div>
    <div class="input-group mb-3">
      <div class="input-group-text" style="width: 250px">
        <input class="form-check-input mt-0 me-2" type="checkbox" value="Akta Perkawinan">Akta Perkawinan
      </div>
      <input type="text" class="form-control" placeholder="0">
      <input type="text" class="form-control" placeholder="3333-KW-010101-0001">
    </div>
    <div class="d-grip mb-4 position-relative">
      <button type="submit" class="btn btn-primary position-absolute end-0" style="width: 150px">Input Data</button>
    </div>
  </div>
  

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>