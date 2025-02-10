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
</style>
<body>

<?php 

if(isset($_POST['submit'])) {

?>

<?php 

if(isset($_POST['npwp'])) {
    $npwp = $_POST['npwp'];

    if($npwp == 1){
        // echo "Memiliki NPWP";
        $gajiPokok = $_POST['gaji'];
        $gajiSetahun = $gajiPokok * 12;

        echo "gaji bulanan anda Rp." . number_format($gajiPokok, 0, ',', '.');
        echo "<br>";
        
        echo "gaji 1 tahun anda Rp." . number_format($gajiSetahun, 0, ',', '.');
        echo "<br>";

        if ($gajiSetahun > 54000000) {
            echo "Anda diharuskan Membayar pajak sebesar 15%";

            $gajiBersih = $gajiSetahun - ($gajiSetahun * 15/100);

            echo "<br>";
            
            echo "Jadi gaji bersih anda adalah Rp. ". number_format($gajiBersih, 0, ',', '.');
        } else {
        echo "Anda tidak diharuskan Membayar pajak";
        }
    } else if($npwp == 0) {
        // echo "Tidak ada NPWP";
        $gajiPokok = $_POST['gaji'];
        $gajiSetahun = $gajiPokok * 12;

        echo "gaji bulanan anda Rp." . number_format($gajiPokok, 0, ',', '.');
        echo "<br>";
        
        echo "gaji 1 tahun anda Rp." . number_format($gajiSetahun, 0, ',', '.');
        echo "<br>";

        if ($gajiSetahun > 54000000) {
            echo "Anda diharuskan Membayar pajak sebesar 20%";

            $gajiBersih = $gajiSetahun - ($gajiSetahun * 20/100);

            echo "<br>";
            
            echo "Jadi gaji bersih anda adalah Rp. ". number_format($gajiBersih, 0, ',', '.');
        } else {
        echo "Anda tidak diharuskan Membayar pajak";
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

} else {
    echo "Tidak ada data yang diproses!";
}


?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>