<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    form {
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
    <form action="halaman2.php" method="post">
        <table border=1 style="border-collapse : collapse; width : 50%;">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>Devisi</td>
                <td>:</td>
                <td><input type="text" name="devisi" id=""></td>
            </tr>
            <tr>
                <td>Gaji</td>
                <td>:</td>
                <td><input type="number" name="gaji" id=""></td>
            </tr>
            <tr>
                <td>NPWP</td>
                <td>:</td>
                <td>
                    <input type="radio" name="npwp" id="" value="1"> IYA
                    <input type="radio" name="npwp" id="" value="0"> TIDAK
                </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td colspan="3" style="text-align: end;">
                    <button type="submit" name="submit">KIRIM!!!</button>
                </td>
            </tr>
        </table>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>