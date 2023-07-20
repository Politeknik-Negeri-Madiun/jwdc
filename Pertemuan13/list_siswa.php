<?php
include 'helper/koneksi_db.php';

$q="select * from tbl_pendaftaran";
$hasil=mysqli_query($conn,$q);
//jumlah data pada tabel
$jumlah=mysqli_num_rows($hasil);
?>

<h3>Siswa yang sudah mendaftar</h3>
<a href="form_daftar.php">[+]Tambah baru</a>
<table border="1px">
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Jenis Kelamin</td>
        <td>Agama</td>
        <td>Asal SMK</td>
    </tr>
    <?php
    if($jumlah > 0) {
        while($baris=mysqli_fetch_assoc($hasil)){
            echo("<tr>
        <td>".htmlspecialchars($baris['no_daftar'])."</td>
        <td>".$baris['Nama']."</td>
        <td>".htmlspecialchars($baris['Alamat'])."</td>
        <td>".htmlspecialchars($baris['gender'])."</td>
        <td>".htmlspecialchars($baris['agama'])."</td>
        <td>".htmlspecialchars($baris['sekolah_asal'])."</td>
            </tr>
    ");
        }
    }
    ?>
</table>
Total = <?php echo ($jumlah)?>
