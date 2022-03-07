<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container-fluid">
        <form style="width: 80%; border: 2px aquamarine solid; margin: auto;" method="POST" action="form_belanja.php">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8">
                            Belanja Online
                            <hr>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="col-4 col-form-label" for="customer">Customer</label>
                                        <div class="col-8">
                                            <input id="customer" name="customer" placeholder="Nama Costumer" type="text" required="required" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4">Pilih Produk</label>
                                        <div class="col-8">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv">
                                                <label for="produk_0" class="custom-control-label">TV</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas">
                                                <label for="produk_1" class="custom-control-label">KULKAS</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesincuci" checked>
                                                <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                                        <div class="col-8">
                                            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            <button name="proses" type="submit" class="btn btn-success">Kirim</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="list-group">
                                <div class="list-group-item active">
                                    Daftar Harga
                                </div>
                                <div class="list-group-item">
                                    TV : 4.200.000
                                </div>
                                <div class="list-group-item">
                                    Kulkas : 3.100.000
                                </div>
                                <div class="list-group-item">
                                    MESIN CUCI : 3.800.000
                                </div>
                                <div class="list-group-item active">
                                    Harga Dapat Berubah Setiap Saat
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <?php
                    $customer = $_POST['customer'];
                    $produk = $_POST['produk'];
                    $jumlah = $_POST['jumlah'];
                    $tv = 4200000;
                    $kulkas = 3100000;
                    $mesincuci = 3800000;
                    if ($produk == 'tv') {
                        $produk = 'TV';
                        $jumlah = (int)$jumlah;
                        $total = $tv * $jumlah;
                        echo 'Nama Customer : ' . $customer;
                        echo '<br>';
                        echo 'Produk Pilihan : ' . $produk;
                        echo '<br>';
                        echo 'Jumlah Beli : ' . $jumlah;
                        echo '<br>';
                        echo 'Total Belanja : Rp. ' . number_format($total) . ',-';
                    } else if ($produk == 'kulkas') {
                        $produk = 'Kulkas';
                        $jumlah = (int)$jumlah;
                        $total = $kulkas * $jumlah;
                        echo 'Nama Customer : ' . $customer;
                        echo '<br>';
                        echo 'Produk Pilihan : ' . $produk;
                        echo '<br>';
                        echo 'Jumlah Beli : ' . $jumlah;
                        echo '<br>';
                        echo 'Total Belanja : Rp. ' . number_format($total) . ',-';
                    } else {
                        $produk = 'Mesin Cuci';
                        $jumlah = (int)$jumlah;
                        $total = $mesincuci * $jumlah;
                        echo 'Nama Customer : ' . $customer;
                        echo '<br>';
                        echo 'Produk Pilihan : ' . $produk;
                        echo '<br>';
                        echo 'Jumlah Beli : ' . $jumlah;
                        echo '<br>';
                        echo 'Total Belanja : Rp. ' . number_format($total) . ',-';
                    }
                    ?>
                </div>
            </div>
        </form>
    </div>
</body>

</html>