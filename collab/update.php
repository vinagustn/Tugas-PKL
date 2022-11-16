<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Pendataan Kerjasama Page</title>
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
                    <a class="nav-link" href="/collab/index.php" style="color: black">Input</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/collab/view.php" style="color: black">View</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/collab/update.php" style="color: black; background-color: #F0F4C3">Update</a>
                </li>
            </ul>
            <form class="d-flex ms-3 my-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success me-3" type="submit">Search</button>
            </form>
            <button type="button" class="btn btn-danger me-3 position-relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                    <path d="M7.5 1v7h1V1h-1z"/>
                    <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
                </svg> Logout
            </button>
        </div>
    </div>
</nav>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>