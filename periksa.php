<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT * FROM periksa";
$pasiens = $dbh->query($query)
?>

<head>

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
<link href="Template/css/styles.css" rel="stylesheet" />

</head>
<style>
    h1{
        font-family: poppins, sans-serif;
        font-weight: 500;
        text-decoration: underline;
    }
</style>

<main>
    <div class="container-fluid px-4">

        <div class= "d-flex mt-4">
        <h3>Hasil Periksa</h3>
        <!-- <a href="#" class="btn btn-primary ms-auto"><strong>+Tambah Pasien</strong></a> -->
        </div>

<table class="table mt-5">
    <tr>
        
        <th>No</th>
        <th>Tanggal</th>
        <th>Bb</th>
        <th>Tinggi</th>
        <th>Tensi</th>
        <th>Keterangan</th>
    </tr>

    <?php 
    $no = 0;
    foreach ($pasiens as $pasien): 
    ?>


    <tr>

        <td><?php echo $no = $no + 1; ?></td>
        <td><?= $pasien['tanggal']?></td>
        <td><?= $pasien['berat']?></td>
        <td><?= $pasien['tinggi']?></td>
        <td><?= $pasien['tensi']?></td>
        <td><?= $pasien['keterangan']?></td>
       
       

        <td>
            <a href="index.php" class="btn btn-primary">
            <i  class="fas fa-edit"></i>
            </a>
            <a href="#" class="btn btn-danger">
            <i  class="fas fa-trash"></i>
            </a>
        </td>

    </tr>



    <?php endforeach; ?>
</table>




    </div>
</main> 



<?php
include_once('bottom.php');
?>