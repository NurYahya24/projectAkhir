<?php
session_start();
require '../../koneksi.php';

$id = $_GET['id'];
$del_komen = mysqli_query($conn, "DELETE FROM tb_komen WHERE id_artikel = $id");
$del_art = mysqli_query($conn, "DELETE FROM tb_artikel WHERE id = $id");





if ($del_komen AND $del_art) {
    echo"
        <script>
            alert('Data berhasil dihapus');
            document.location.href = 'index.php';
        </script>
    ";
}else{  
    echo"
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'index.php';
        </script>
    ";
}





?>