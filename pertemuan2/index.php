<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<style>
    form {
        display: flex;
        justify-content : center;
        align-items: center;
    }

    td {
        padding: 1em;
    }
</style>
</head>
<body>
    <form action="">
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
                <input type="radio" name="gender" id="" value="L"> Laki - laki
                <input type="radio" name="gender" id="" value="P"> Perempuan
            </td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>
                <select name="agama" id="">
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
            <td><textarea name="alamat" id="" cols="30" rows="10"></textarea></td>
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
                <select name="jurusan" id="">
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
            <select name="jurusan" id="">
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
                <select name="ekstra" id="">
                    <option value="osis">OSIS</option>
                    <option value="pramuka">Pramuka</option>
                    <option value="PA">Pecinta Alam</option>
                    <option value="remas">Remaja Masjid AL-kautsar</option>
                    <option value="pmr">Palang Merah Remaja</option>
                    <option value="futsal">Futsal</option>
                    <option value="basket">Basket</option>
                    <option value="voli">Voli</option>
                    <option value="teater">Teater Kusuma</option>
                    <option value="LA">Laskar Hijau</option>
                    <option value="GDS">Gerakan Disiplin Siswa</option>
                </select>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>