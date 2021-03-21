<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Form Belanja</title>
  </head>
  <body>
   

    <div class="container">
        <div class="row">
            <div class="col">
                <form method="POST" > 

                    <legend>Form Belanja</legend>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Customer</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="customer" name="customer">
                        </div>
                    </div>
                                
                    <fieldset class="form-group row">
                        <legend class="col-form-label col-sm-2 float-sm-left pt-0" for="produk">Nama Produk</legend>
                        <div class="col-sm-10" id="produk" >
                            <div class="row">
                                <div class="form-check col-sm-2">
                                    <input class="form-check-input" type="radio" id="tv" name="produk" value="TV">
                                    <label class="form-check-label" for="tv">
                                    TV
                                    </label>
                                </div>
                                <div class="form-check col-sm-2">
                                    <input class="form-check-input" type="radio" id="kulkas" name="produk" value="KULKAS">
                                    <label class="form-check-label" for="kulkas">
                                    KULKAS
                                    </label>
                                </div>
                                <div class="form-check col-sm-3">
                                    <input class="form-check-input" type="radio" id="mesin_cuci" name="produk" value="MESIN CUCI">
                                    <label class="form-check-label" for="mesin_cuci">
                                    MESIN CUCI
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="jumlah" name="jumlah">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" id="kirim">KIRIM</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col">

                <table class="table">

                    <thead class="thead">
                        <tr>
                            <th class="table-primary">Daftar Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TV : 4.200.000</td>
                        </tr>
                        <tr>
                            <td>KULKAS : 3.100.000</td>
                        </tr>
                        <tr>
                            <td>MESIN CUCI : 3.800.000</td>
                        </tr>                        
                        <tr>
                            <td class="table-primary">Harga Dapat Berubah Setiap Saat</td>
                        </tr>
                    </tbody>

                </table>

            </div>
        </div>
    </div>

    <?php
        $customer = $_POST['customer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];

        if($produk == 'TV'){
            $total_belanja = 4200000*$jumlah;
        }elseif($produk == 'Kulkas'){
            $total_belanja = 3100000*$jumlah;
        }else{
            $total_belanja = 3800000*$jumlah;
        }
       
        echo '<br/>Nama Customer : '.$customer;
        echo '<br/>Produk Pilihan : '.$produk;
        echo '<br/>Jumlah Produk : '.$jumlah;

        echo '<br/>Total Belanja : '.$total_belanja;
    ?>


    



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>