<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .form {
        display: flex;
        justify-content : center;
        align-items: center;
    }


    table {
        box-shadow: 10px 10px 10px rgba(255, 0, 0, 0.5);
    }

    td {
        padding: 1em;
    }
    </style>
</head>
<body>

<?php if(isset($_GET['submit'])){ ?>

    <div class="form">
<table border=1 style="border-collapse : collapse; width : 50%;">
        <tr>
            <td>NISN</td>
            <td>:</td>
            <td>
                <!-- <input type="text" name="nisn" id=""> -->
                <?= $_GET['nisn']; ?>
            </td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td>
                <?= $_GET['nama']; ?>
            </td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td>
                <?= $_GET['tl']; ?>
            </td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>
                <?= $_GET['tgl']; ?>
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <?= $_GET['kelamin'];?>
            </td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>
                <?= $_GET['agama']; ?>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>
                <?= $_GET['alamat']; ?>
            </td>
        </tr>
        <tr>
            <td>Asal Sekolah</td>
            <td>:</td>
            <td>
                <?= $_GET['asalsekolah']; ?>
            </td>
        </tr>
        <tr>
            <td>Pilihan Jurusan 1</td>
            <td>:</td>
            <td>
                <?= $_GET['jurusan1']; ?>
            </td>
        </tr>
        <tr>
            <td>Pilihan Jurusan 2</td>
            <td>:</td>
            <td>
                <?= $_GET['jurusan2']; ?>
            </td>
        </tr>
        <tr>
            <td>Ekstrakulikuler</td>
            <td>:</td>
            <td>
                <?php echo implode(", ",$_GET['ekstra']); ?>
            </td>
        </tr>
        <tr>
            
        </tr>
    </table>
    </form>
    </div>
    <?php 

} else{
    echo"Tidak ada data yang diproses";
}

?>

</body>
</html>