<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <table>
        <tr>
            <td>Angka</td>
            <td>:</td>
            <td>
                <input type="number" name="angka" id="">
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="submit">RUN!</button>
            </td>
        </tr>
    </table>
</form>


    <?php
if(isset($_POST['submit'])){
    $angka = $_POST['angka'];
    $n = $angka;

    for($i = 1; $i <= $n; $i++) {
        for($j = $n; $j > $i - $n; $j--) {
            echo "&nbsp;";
        }
        for($j = $n; $j > $i - $n; $j--) {
            echo "&nbsp;";
        }
        for($k = 1; $k <= $i; $k++) {
            echo "*";
        }
        for($m = 1; $m <= $i - 1;$m++) {
            echo "*";
        }

        echo "</br>";
    }

    if($angka % 2 == 0) {
        echo "<script>alert('Bilangan Genap')</script>";
    } else {
        echo "<script>alert('Bilangan Ganjil')</script>";
    }
?>

<?php } ?>
</body>
</html>
