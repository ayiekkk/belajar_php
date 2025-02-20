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
        margin-top: 30px;
    }
    table {
        box-shadow: 0px 0px 10px 10px rgba(7,94,86,0.5);
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
    
<?php 

if(isset($_POST['submit'])) {
    
    $nama=$_POST['nama'];
    $divisi=$_POST['divisi'];
    $gajiPokok=floatval($_POST['gaji']);
    $npwp=$_POST['npwp'];
    $potongan=0;
    
    $gajiSetahun=$gajiPokok*12;
    $batasGaji=54000000;
    
    if($gajiSetahun > $batasGaji){
        $pajak = $npwp == 1 ? 0.15 : 0.20;
        
        $potongan=$gajiSetahun*$pajak;
    }
    
    $gajiBersih = $gajiSetahun - $potongan;
?>

<div class="form">
    <table border=1 style="border-collapse : collapse; width : 50%;">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>
                <?= $nama;?>
            </td>
        </tr>
        <tr>
            <td>Devisi</td>
            <td>:</td>
            <td>
                <?= $divisi;?>
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
            <td>pajak</td>
            <td>:</td>
            <td>
                <?= number_format($potongan, 0, ',', '.'); ?>
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
?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>ERROR!!!</strong> You should check in on some of those fields below.
    <button type="button" class="btn-close" data-bs-danger="alert" aria-label="Close"></button>
</div>

<?php } ?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>