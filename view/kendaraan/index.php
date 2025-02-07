<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Kendaraan Baru</h1>
    <a href="tambah.php">Tambah Kendaraan Baru</a>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>ID KENDARAAN</th>
            <th>NO PLAT</th>
            <th>ID PARKIR</th>
            <th>JENIS KENDARAAN</th>
            
        </tr>
        <?php
             include '../../config/koneksi.php';
             $query = mysqli_query($conn, "SELECT * FROM kendaraan");
             $no=1;
             if(mysqli_num_rows($query)){
                echo "Data  ada";
                while($result=mysqli_fetch_assoc($query)){
                ?>   
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $result['id_kendaraan'] ?></td>
                    <td><?php echo $result['no_plat'] ?></td>
                    <td><?php echo $result['id_parkir'] ?></td>
                    <td><?php echo $result['jenis_kendaraan'] ?></td>
                    <td>
                        <a href="">Edit |</a>
                        <a href="">Hapus |</a>
                    </td>
                </tr>
                <?php
                $no++;
             }
            } else {
                echo "Data kosong";
            }
            ?>
    </table>
</body>
</html>