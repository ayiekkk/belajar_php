<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .form {
        display: flex;
        justify-content : center;
        align-items: center;
    }
    table {
        /* box-shadow: 10px 10px 10px rgba(255, 0, 0, 0.5); */
    }
    td {
        padding: 1em;
    }

    h1 {
        font-size: 70px;
        align-items: center;
    }
</style>
<body>
    <?php if(isset($_POST['submit'])) { ?>

<?php 

$gajiPokok;
$gajiSetahun;
$gajiBersih;

if(isset($_POST['npwp'])) {
    $npwp = $_POST['npwp'];

    if($npwp == 1){
        echo "<script>alert('Anda memliki NPWP');</script>";
        $gajiPokok = $_POST['gaji'];
        $gajiSetahun = $gajiPokok * 12;

        echo "<script>alert('gaji bulanan anda Rp." . number_format($gajiPokok, 0, ',', '.') ."'); </script>";
        echo "<br>";
        
        echo "<script>alert('gaji 1 tahun anda Rp." . number_format($gajiSetahun, 0, ',', '.') ."'); </script>";
        echo "<br>";

        if ($gajiSetahun > 54000000) {
            echo "<script>alert('Anda diharuskan Membayar pajak sebesar 15%');</script>";

            $gajiBersih = $gajiSetahun - ($gajiSetahun * 15/100);

            echo "<br>";
            
            echo "<script>alert('Jadi gaji bersih anda adalah Rp. ". number_format($gajiBersih, 0, ',', '.') ."');</script>";
        } else {
        echo "<script>alert('Anda tidak diharuskan Membayar pajak');</script>";
        }
    } else if($npwp == 0) {
        echo "<script>alert('Anda tidak memliki NPWP');</script>";
        $gajiPokok = $_POST['gaji'];
        $gajiSetahun = $gajiPokok * 12;

        echo "<script>alert('gaji bulanan anda Rp." . number_format($gajiPokok, 0, ',', '.') ."');</script>";
        echo "<br>";
        
        echo "<script>alert('gaji 1 tahun anda Rp." . number_format($gajiSetahun, 0, ',', '.') ."');</script>";
        echo "<br>";

        if ($gajiSetahun > 54000000) {
            echo "<script>alert('Anda diharuskan Membayar pajak sebesar 20%');</script>";

            $gajiBersih = $gajiSetahun - ($gajiSetahun * 20/100);

            echo "<br>";
            
            echo "<script>alert('Jadi gaji bersih anda adalah Rp. ". number_format($gajiBersih, 0, ',', '.') ."');</script>";
        } else {
        echo "<script>alert('Anda tidak diharuskan Membayar pajak');</script>";
        }

    } else {
        echo "Not Found";
    }
}
?>

<div class="form">
    <table border=1 style="border-collapse : collapse; width : 50%;">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>
                <?= $_POST['nama'];?>
            </td>
        </tr>
        <tr>
            <td>Devisi</td>
            <td>:</td>
            <td>
                <?= $_POST['devisi'];?>
            </td>
        </tr>
        <tr>
            <td>Gaji Pokok</td>
            <td>:</td>
            <td>
                <?= number_format($gajiPokok, 0, ',', '.'); ?>
            </td>
        </tr>
        <tr>
            <td>Gaji Setahun</td>
            <td>:</td>
            <td>
                <?= number_format($gajiSetahun, 0, ',', '.'); ?>
            </td>
        </tr>
        <tr>
            <td>Gaji Bersih</td>
            <td>:</td>
            <td>
                <?= number_format($gajiBersih, 0, ',', '.'); ?>
            </td>
        </tr>
    </table>
</div>
<?php
}else {
    echo "<script>alert('Tidak ada data yang diproses!');</script>";
    echo "<h1>Not Found!</h1>";
}
?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>