<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT * FROM unit_kerja";
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
        <h3>Unit Kerja Puskesmas</h3>
        <!-- <a href="#" class="btn btn-primary ms-auto"><strong>+Tambah Pasien</strong></a> -->
        </div>

<table class="table mt-5">
    <tr>
        
        <th>No</th>
        <th>Ruangan</th>
        <th>Jam operasional</th>
       
    </tr>

    <?php 
    $no = 0;
    foreach ($pasiens as $pasien): 
    ?>


    <tr>

        <td><?php echo $no = $no + 1; ?></td>
        <td><?= $pasien['unit_ruangan']?></td>
        <td><?= $pasien['jam_operasional']?></td>
        
       
       


    </tr>



    <?php endforeach; ?>
</table>




    </div>
</main> 



<?php
include_once('bottom.php');
?>