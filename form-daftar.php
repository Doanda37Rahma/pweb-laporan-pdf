<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Akun Baru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<html>
<body>
    <header>
        <h1><a href="index.php">SIPMABA</a></h1>
    </header>
    <div class=" formContainer" style="margin-top: 80px; margin-bottom: 80px">
        <h2 style="margin-bottom: 40px;">Form Pendaftaran Siswa</h2>
        <div class="container">
            <form id="formMahasiswa" autocomplete="off" action="proses-pendaftaran.php" method="POST">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" placeholder=" " class="form-control" minlength="3" maxlength="40">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Domisili</label>
                    <textarea name="alamat" class="form-control" placeholder=" "></textarea>
                </div>
                <div class="form-group">
                    <label for="sekolah_asal">Sekolah Asal</label>
                    <input type="text" name="sekolah_asal" placeholder=" " class="form-control" minlength="1">
                </div>
                <div class="form-group">
                    <label for="agama">Agama</label>
                    <select name="agama" class="form-control">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Katolik</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label><br>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki<br>
                    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
                </div>
                <div>
                <label for="foto">Foto</label><br>
                    <td><input type="file" name="foto"></td>
                </div>
                <button name="daftar" type="submit" class="btn btn-primary" style="margin-top: 20px;">Daftar</button>
            </form>
        </div>
    </div>
</body>
</html>