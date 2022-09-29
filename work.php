<!DOCTYPE html>sc
<html>
    <head>
        <style>
        .gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 300px;
        }
        .gallery:hover {
            border: 1px solid #777;
        }
        .gallery img {
            width: 100%;
            height: auto;
        }
        .desc {
            padding: 3px;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }
        h3{
            text-align: left;
            margin: 5px;
            font-family: Arial, Helvetica, sans-serif;
        }
        </style>
    </head>
<body>
<h3>Detail Barang</h3>
<div class="gallery">
    <?php 
        echo "<img src='m1.jpg' width = '200px' />";         
    ?>
    <div class="desc">Macboock m1 2020</div>
    <div class="desc">Harga   : Rp 16.000.000</div>
    <div class="desc">Kode barang : 10012</div>
    <div class="desc">Spesifikasi : 8/256</div>
    <div class="desc">Pengiriman  : Jnt</div>
</div>
<div class="gallery">
    <?php 
        echo "<img src='m2.jpg' width = '200px' />";         
    ?>
    <div class="desc">Macboock m2 </div>
    <div class="desc">Harga   : Rp 20.000.000</div>
    <div class="desc">Kode barang : 14050</div>
    <div class="desc">Spesifikasi : 8/512</div>
    <div class="desc">Pengiriman  : Cod</div>l
</div>

</body>
</html>