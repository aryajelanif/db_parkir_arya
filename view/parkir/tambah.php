<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Parkir Baru</h1>
    <form action="simpan.php" method="POST">
        <label for="">ID PARKIR</label>
        <input type="number" name="id_parkir">
        <br>
        <label for="">TANGGAL PARKIR</label>
        <input type="text" name="tanggal_parkir">
        <br>
        <label for="">HARGA PARKIR</label>
        <input type="text" name="harga_parkir">
        <br>
        <label for="">ALAMAT PARKIR</label>
        <input type="text" name="alamat_parkir">
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>