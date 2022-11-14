<?php
session_start();
require '../../koneksi.php';

$id = $_GET['id'];
$del_komen = mysqli_query($conn, "DELETE FROM tb_komen WHERE id_user = $id");





if ($del_komen) {
    echo"
        <script>
            alert('Ulasan berhasil dihapus');
            document.location.href = 'index.php';
        </script>
    ";
}else{  
    echo"
        <script>
            alert('Gagal menghapus ulasan');
            document.location.href = 'index.php';
        </script>
    ";
}