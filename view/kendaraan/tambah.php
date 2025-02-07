<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Kendaraan Baru</h1>
    <form action="simpan.php" method="POST">
        <label for="">ID KENDARAAN</label>
        <input type="number" name="id_kendaraan">
        <br>
        <label for="">NO PLAT</label>
        <input type="text" name="no_plat">
        <br>
        <label for="">ID PARKIR</label>
        <input type="text" name="id_parkir">
        <br>
        <label for="">JENIS KENDARAAN</label>
        <input type="text" name="jenis_kendaraan">
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>