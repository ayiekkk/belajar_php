<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

    $angka = $_POST['angka'];

    if($angka % 2 == 0){
        echo "<script>alert('Bilangan Genap');</script>";
    }else{
        echo "<script>alert('Bilangan Ganjil');</script>";
    }


    for($i = 1; $i <= $angka; $i++) {
        echo $i;
        echo "</br>";
    }

?>


</body>
</html>