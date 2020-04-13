<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Tabel</title>
    <style>
        .bgmerah {
            background-color: red;
            color:white;
        }
    </style>
</head>
<?php
        include('koneksi.php');
        $querymenu=mysqli_query($konek, "SELECT * FROM produk ");
?>
<body>
    <h2 class="bg-primary  pr-5 pt-5 rounded-pill position-relative"
        style="color:white; text-align:right; bottom: 36px;">Demo</h2>
    <div class="container border border-primary rounded">
        
        <table class="table table-hover text-center">
            <thead class="">
                <tr>
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Kategori Produk</th>
                    <th>Stok Produk</th>
                    <th>Gambar Produk</th>
                    <th>Modify</th>

                </tr>
            </thead>
           
            <tbody>
            <?php while($data=mysqli_fetch_array($querymenu)){ ?>

                    <tr>
                        <td><?php echo $data['kd_produk']; ?></td>
                        <td><?php echo $data['nama_produk']; ?></td>
                        <td><?php echo $data['kategori']; ?></td>

                        <?php if($data['stok'] < 5){ ?>
                            <td class="bgmerah"><?php echo $data['stok'] ?></td>
                        <?php }else { ?>
                            <td><?php echo $data['stok'] ?></td>
                        <?php } ?>

                        <td><?php echo $data['url_gambar']; ?></td>
                        <td><a href="#"> EDIT</a> | <a href="delete.php?id=<?php echo $data['kd_produk'];?>"> Delete</a> </td>
                        
                    </tr>

                    <?php }  ?>
            </tbody>
                 
        </table>
    </div>
</body>

</html>