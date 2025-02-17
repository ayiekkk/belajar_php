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
            <td>Nama</td>
            <td>:</td>
            <td>
                <input type="text" name="username" id="">
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td>
                <input type="password" name="password" id="">
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
                <button type="submit" name="submit">
                    Kirim!!
                </button>
            </td>
        </tr>
    </table>
</form>


<?php
if(isset($_POST['submit'])) {
session_start();

if ($_POST['username'] == 'admin' && $_POST['password'] == '123') {
    $_SESSION['username'] = 'admin';
    $_SESSION['isLoggedIn'] = true;
    header('Location: latihan.php');
} else {
    echo 'Login failed!';
}
?>

<?php 

} 

?>
</body>
</html>