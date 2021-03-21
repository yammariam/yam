<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pendaftaran</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body bgcolor="#4ca4e1">
    <div class="box-from">

        <div class="title-from">
            Formulir Pendaftaran Online
        </div>
        <div class="content-from">
            <form action="" method="post">
                Nama Lengkap <br>
                <input type="text" name="nama" /><br>

                Tempat Lahir<br>
                <input type="text" name="tmp_lhr" /><br>
                
                Tanggal Lahir<br>
                <select name="tgl" id="">
                    <option value="">Tgl</option>
                    <?php
                        for($tgl = 1; $tgl<=31; $tgl++){ ?>
                        <option value="<?php echo $tgl ?>"><?php echo $tgl ?></option>
                        <?php }?>
                </select>
                <select name="bln" id="">
                    <option value="">Bln</option>
                    <?php
                    $bln = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
                    "Oktober", "November", "Desember");
                    foreach ($bln as $no => $arry){ ?>
                    <option value="<?php echo $arry ?>"><?php echo $arry ?></option>
                    <?php } ?>
                </select>
                <select name="Thn" id="">
                    <option value="">Thn</option>
                    <?php
                        for($thn = 1980; $thn<=2021; $thn++){ ?>
                        <option value="<?php echo $thn ?>"><?php echo $thn ?></option>
                        <?php }?>
                </select><br>
                
                Telepon / HP<br>
                <input type="text" name="telp" /><br>
                
                E-mail<br>
                <input type="text" name="email" /><br>
                
                Alamat<br>
                <textarea name="alamat"></textarea><br>
                <input type="submit" name="tombol" value="Daftar" />
            </form>
            <?php
            if(isset($_POST['tombol'])){
                include 'DTBS.php';
                if(!is_numeric($_POST['telp'])){
                    echo 'Telepon harus angka';
                }else{
                $daftar = mysqli_query($conn, "INSERT INTO tb_user VALUES (
                    NULL,
                    '".ucwords($_POST['nama'])."',
                    '".ucwords($_POST['tmp_lhr'])."',
                    '".$_POST['tgl']." ".$_POST['bln']." ".$_POST['thn']."',
                    '".$_POST['telp']."',
                    '".$_POST['email']."',
                    '".ucwords($_POST['alamat'])."')");
                if($daftar){
                    echo 'berhasil daftar';
                }else{
                    echo 'gagal daftar';
                }}
            }
        ?>
        </div>
    </div>
</body>
</html>