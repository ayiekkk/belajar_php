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
        margin-top: 30px;
    }
    table {
        box-shadow: 10px 10px 10px rgba(7, 94, 86, 0.5);
    }
    td {
        padding: 1em;
    }
    .cv h1{
        text-align: center;
        font-size: 80px;
        color: #A1E3F9;
    }

    .cv h1 span {
        color: #009990;
    }

</style>
<body>

    <div class="cv">
        <h1>Tecno<span>Bangsa</span></h1>
    </div>


    <form action="proses.php" method="post">
        <table border=1 style="border-collapse : collapse; width : 50%;">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"></label>
                    <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Masukan nama anda" required>
                </div>
                </td>
            </tr>
            <tr>
                <td>Devisi</td>
                <td>:</td>
                <td>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"></label>
                    <input type="text" name="divisi" class="form-control" id="exampleFormControlInput1" placeholder="Masukan divisi anda" required>
                </div>
                </td>
            </tr>
            <tr>
                <td>Gaji</td>
                <td>:</td>
                <td>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"></label>
                    <input type="number" name="gaji" class="form-control" id="exampleFormControlInput1" placeholder="Masukan gaji anda" required>
                </div>
                </td>
            </tr>
            <tr>
                <td>NPWP</td>
                <td>:</td>
                <td>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="npwp" id="flexRadioDefault1" value="1" required>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Iya
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="npwp" id="flexRadioDefault1" value="0" required>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Tidak
                    </label>
                </div>
                    
                </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td colspan="3" style="text-align: end;">
                    <button type="submit" name="submit" class="btn btn-outline-primary">Success</button>
                </td>
            </tr>
        </table>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>