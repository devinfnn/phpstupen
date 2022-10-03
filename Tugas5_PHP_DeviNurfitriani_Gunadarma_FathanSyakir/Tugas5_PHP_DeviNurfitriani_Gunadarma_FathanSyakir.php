<?php
require_once 'lingkaran.php';
require_once 'persegipanjang.php';
require_once 'segitigasiku-siku.php';

$lingkrn = new Lingkaran();
$persegiPjg = new PersegiPanjang();
$segitigaSk = new Segitiga();

$bentukBidang = [$lingkrn, $persegiPjg, $segitigaSk];
$ar_judul = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
<br>
<h3 class="text-center">Kumpulan-Kumpulan Bidang</h3><br>
<table class="table table-striped">
<thead class="table-primary">

    <tr>
        <?php
        foreach ($ar_judul as $judul) {
            ?><th class="text-center" scope="col"><?= $judul ?></th><?php
        }?>
    </tr>
</thead>
<tbody>
    <?php
    $no = 1;
    foreach ($bentukBidang as $bidang) {
        ?>
        <tr class="text-center">
            <td class="text-center" scope="col"><?= $no++ ?></td>
            <td ><?= $bidang->namaBidang() ?></td>
            <td ><?= $bidang->keterangan() ?></td>
            <td class="text-center" scope="col"><?= $bidang->luasBidang() ?></td>
            <td class="text-center" scope="col"><?= $bidang->kelilingBidang() ?></td>
        </tr>
    <?php
    }
    ?>
    
</tbody>
</table>
    
</body>
</html>

