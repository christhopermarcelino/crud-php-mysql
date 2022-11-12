<?php include("./config.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <main class="container vh-100 py-5">
        <h1 class="mb-5 text-center fw-bold">Siswa yang sudah mendaftar</h1>
        <a href="./registration-form.php" class="btn btn-info mb-3 text-white fw-semibold">Daftar Baru</a>

        <div class="table-responsive mb-3">
            <table class="table table-hover table-bordered">
                <thead class="table-info">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM registrations";
                    $query = mysqli_query($db, $sql);

                    while ($student = mysqli_fetch_array($query)) {
                        echo "<tr>";
                        echo "<th scope='row'>" . $student["id"] . "</th>";
                        echo "<td>" . $student["name"] . "</td>";
                        echo "<td>";
                        echo "<a href='./edit-form.php?id=" . $student["id"] . "' class='btn btn-outline-info me-1 me-md-3 fw-semibold'>Edit</a>";
                        echo "<a href='./delete.php?id=" . $student["id"] . "' class='btn btn-outline-danger fw-semibold'>Hapus</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                    <p>Total <?= mysqli_num_rows($query) ?></p>
                </tbody>
            </table>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>