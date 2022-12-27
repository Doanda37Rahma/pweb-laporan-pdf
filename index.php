<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Siswa</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <header>
        <h1><a href="index.php">Portal Pendaftaran Siswa</a></h1>
    </header>
    <div class=" formContainer" style="margin-top: auto; margin-bottom: auto;">
            <h2> Pendaftaran Siswa Baru </h2>
            <br><br>

            <div class="d-flex justify-content-center">
                <a href="form-daftar.php"><button class="mr-3 btn btn-primary">Daftar Siswa Baru</button></a>
                <a href="list-siswa.php"><button class="btn btn-primary">List Pendaftaran</button></a>
            </div>
            <?php if (isset($_GET['status'])) : ?>
                <br><br><br>
                <p>
                    <?php
                    if ($_GET['status'] == 'sukses') {
                        echo "<h3>Pendaftaran Berhasil!</h3>";
                    } else {
                        echo "<br><br><h3>Pendaftaran gagal!</h3>";
                    }
                    ?>
                </p>
            <?php endif; ?>
    </div>
    <footer>
        <h6>Copyright 2022 | Doanda Dresta Rahma</h6>
    </footer>
</body>

</html>