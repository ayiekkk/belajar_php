<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    form {
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




    <h3>Nama    : Mohamad Alief Firmansyah</h3>
    <h3>Absen   : 18 </h3>
    <br>
    <form action="halaman2.php" method="get">
    <table border=1 style="border-collapse : collapse; width : 50%;">
        <tr>
            <td>NISN</td>
            <td>:</td>
            <td>
                <input type="text" name="nisn" id="">
            </td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td>
                <input type="text" name="nama" id="">
            </td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tl" id=""></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tgl" id=""></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <div class="form-check">
                    <input name="kelamin" class="form-check-input" type="radio" id="flexRadioDefault1" value="L">
                    <label class="form-check-label" for="flexRadioDefault1">
                    Laki - laki
                    </label>
                </div>
                <div class="form-check">
                    <input name="kelamin" class="form-check-input" type="radio" id="flexRadioDefault1" value="P">
                    <label class="form-check-label" for="flexRadioDefault1">
                    Perempuan
                    </label>
                </div>
                <div class="form-check">
                    <input name="kelamin" class="form-check-input" type="radio" id="flexRadioDefault1" value="X">
                    <label class="form-check-label" for="flexRadioDefault1">
                    Tidak Diketahui
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>
                <select name="agama" class="form-select form-select-sm" aria-label="Small select example">
                    <option value="">PILIH AGAMA</option>
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="katolik">Katolik</option>
                    <option value="hindu">Hindu</option>
                    <option value="buddha">Buddha</option>
                    <option value="konghucu">Konghucu</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </td>
        </tr>
        <tr>
            <td>Asal Sekolah</td>
            <td>:</td>
            <td><input type="text" name="asalsekolah" id=""></td>
        </tr>
        <tr>
            <td>Pilihan Jurusan 1</td>
            <td>:</td>
            <td>
                <select name="jurusan1" class="form-select form-select-sm" aria-label="Small select example">
                    <option value="">PILIH KEJURUAN</option>
                    <option value="AKL">Akutansi dan Keuangan Lembaga</option>
                    <option value="MPLB">Manajemen Perkantoran & Bisnis</option>
                    <option value="PM">Pemasaran</option>
                    <option value="PPLG">Pengembangan Perangkat Lunak dan Gim</option>
                    <option value="TJKT">Teknik Jaringan Komputer & Telekomunikasi</option>
                    <option value="BCF">BroadCasting dan perFilman</option>
                    <option value="DKV">Desain Komunikasi Visual</option>
                    <option value="SP">Seni Pertunjukan</option>
                    <option value="PH">Perhotelan</option>
                    <option value="KL">Kuliner</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Pilihan Jurusan 2</td>
            <td>:</td>
            <td>
                <select name="jurusan2" class="form-select form-select-sm" aria-label="Small select example">
                    <option value="">PILIH KEJURUAN</option>
                    <option value="AKL">Akutansi dan Keuangan Lembaga</option>
                    <option value="MPLB">Manajemen Perkantoran & Bisnis</option>
                    <option value="PM">Pemasaran</option>
                    <option value="PPLG">Pengembangan Perangkat Lunak dan Gim</option>
                    <option value="TJKT">Teknik Jaringan Komputer & Telekomunikasi</option>
                    <option value="BCF">BroadCasting dan perFilman</option>
                    <option value="DKV">Desain Komunikasi Visual</option>
                    <option value="SP">Seni Pertunjukan</option>
                    <option value="PH">Perhotelan</option>
                    <option value="KL">Kuliner</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Ekstrakulikuler</td>
            <td>:</td>
            <td>
            <div class="form-check">
                    <input name="ekstra[]" class="form-check-input" type="checkbox" value="osis" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    OSIS
                    </label>
                </div>
                <div class="form-check">
                    <input name="ekstra[]" class="form-check-input" type="checkbox" value="DA" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Pramuka
                    </label>
                </div>
                <div class="form-check">
                    <input name="ekstra[]" class="form-check-input" type="checkbox" value="PA" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Pecinta Alam
                    </label>
                </div>
                <div class="form-check">
                    <input name="ekstra[]" class="form-check-input" type="checkbox" value="GDS" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Gerakan Disiplin Siswa
                    </label>
                </div>
                <div class="form-check">
                    <input name="ekstra[]" class="form-check-input" type="checkbox" value="pmr" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Palang Merah Remaja
                    </label>
                </div>
                <div class="form-check">
                    <input name="ekstra[]" class="form-check-input" type="checkbox" value="Encasa" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    English Club Esemkasa
                    </label>
                </div>
                <div class="form-check">
                    <input name="ekstra[]" class="form-check-input" type="checkbox" value="LA" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Laskar Hijau
                    </label>
                </div>
                <div class="form-check">
                    <input name="ekstra[]" class="form-check-input" type="checkbox" value="remas" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Remaja Masjid Al-kautsar
                    </label>
                </div>
                <div class="form-check">
                    <input name="ekstra[]" class="form-check-input" type="checkbox" value="futsal" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Futsal
                    </label>
                </div>
                <div class="form-check">
                    <input name="ekstra[]" class="form-check-input" type="checkbox" value="voli" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Voli
                    </label>
                </div>
                <div class="form-check">
                    <input name="ekstra[]" class="form-check-input" type="checkbox" value="basket" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Basket
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <td> </td>
            <td> </td>
            <td colspan="3" style="text-align: end;">
            <button type="submit" name="submit" class="btn btn-outline-success">Success</button>
            </td>
        </tr>
    </table>
    </form>



</body>
</html>