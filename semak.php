<?php
$nama =$_POST['nama'];
$umur = $_POST['umur'];

if ($nama == '') {
    ?>
    <script>
        alert('Sila isi nama anda.');
        window.location = 'index.php';
    </script>
    <?php

} elseif (strlen($nama) < 2) {
    ?>
    <script>
        alert('Sila isi nama panjang.');
        window.location = 'index.php';
    </script>
    <?php

} elseif ($umur < 18 or $umur > 45) {
    ?>
    <script>
        alert('Umur anda tidak layak');
        window.location = 'index.php';
    </script>
    <?php

}else {
    echo 'Nama: ' . $nama . '<br>Umur: ' . $umur . ' tahun';
}