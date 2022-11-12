<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <main class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="card border-0 shadow">
            <div class="card-body p-5">
                <h1 class="mb-4 fw-bold px-md-5">Formulir Pendaftaran</h1>
                <form action="./process-registration.php" method="POST">
                    <div class="mb-3 row">
                        <label for="name" class="col-md-2 col-form-label">Nama</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="address" class="col-md-2 col-form-label">Alamat</label>
                        <div class="col-md-10">
                            <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-md-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-md-10 d-flex align-items-center">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="gender1" value="Laki-laki">
                                <label class="form-check-label" for="gender1">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="gender2" value="Perempuan">
                                <label class="form-check-label" for="gender2">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label for="inputPassword" class="col-md-2 col-form-label">Agama</label>
                        <div class="col-md-10">
                            <select class="form-select" aria-label="Default select example" name="religion">
                                <option selected>-</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="school" class="col-md-2 col-form-label">Sekolah Asal</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="school" name="school">
                        </div>
                    </div>
                    <input type="submit" name="regist" value="Daftar Baru" href="./registation-form.php" class="btn btn-info text-white fw-semibold"></input>
                </form>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>