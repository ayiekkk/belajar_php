<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    td{
        padding: 1em;
    }
    tr {
        padding: 1em;
    }
</style>
<body>
    <form action="" method="post" class="form">
        <table>
            <tr>
                <td>baris</td>
                <td>:</td>
                <td>
                    <input type="number" name="baris" id="">
                </td>
            </tr>
            <tr>
                <td>kolom</td>
                <td>:</td>
                <td>
                    <input type="number" name="cell" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit">Run</button>
                </td>
            </tr>
        </table>
    </form>


<?php 
if(isset($_POST['submit'])){
$baris = $_POST['baris'];
$kolom = $_POST['cell'];
?>

    <table border=1 style="width:50%;">
    <?php for($i = 1; $i <= $baris; $i++){ ?>
        <tr>
            <?php for($j = 1; $j <= $kolom; $j++) { ?>
            <td>
                &nbsp;
            </td>
            <?php } ?>
        </tr>
        <?php } ?>
    </table>
<?php } ?>

</body>
</html>