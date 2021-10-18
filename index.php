<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>
<body>
    <h1>Borang Permohonan (A)</h1>
    <p>validate guna HTML</p>

    <form action="semak.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required
                minlength="2"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="number" name="umur" min="18"
                max="45" required></td>
            </tr>
        </table>
        <button type="submit">Hantar</button>
    </form>
    <p>
        Hanya pemohon yang berumur antara 18 dan 45 tahun saja yang
        layak memohon.
    </p>

    <hr>
    <h1>Borang Permohonan (B)</h1>
    <p>validate guna JavaScript</p>

    <form action="semak.php" method="post" onsubmit="return semak()";>
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="number" name="umur" id="umur"></td>
            </tr>
        </table>
        <button type="submit">Hantar</button>
    </form>
    <p>
        Hanya pemohon yang berumur antara 18 dan 45 tahun saja yang layak memohon.
    </p>

    <script>
        function semak() {
            let nama = document.getElementById('nama').value;
            let umur = document.getElementById('umur').value;

            if (nama === '') {
                alert('Sila isi nama anda.');
                return false;
            } else if (name.length < 2) {
                alert('Sila isi nama panjang.');
                return false;
            } else if (umur < 18 || umur > 45) {
                alert('Umur anda tidak layak.');
                return false;
        }
    </script>
</body>
</html>