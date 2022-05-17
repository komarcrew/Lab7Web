<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
   <h2>FORM</h2>
    <form method="post" >
            <label>Nama: </label><br>
            <input type="text" name="nama"><br>
            <label>Tanggal Lahir: </label><br>
            <input type="date" name="tgl"><br>
            <label>Pekerjaan: </label><br>
            <select name='pekerjaan'>
                <option value="">~Pilih Pekerjaan~</option>
                <option value="Web Programmer">Web Programmer</option>
                <option value="IT Network">IT Network</option>
                <option value="Data Analyst">Data Analyst</option>
                <option value="Network Engineer">Network Engineer</option>
            </select><br><br>
            <button type="submit">Kirim</button>
    </form>
    <h2>HASIL</h2>

    <?php
        # Nama
        echo 'Nama: ' . $_POST['nama'];

        # Merubah Tanggal Lahir menjadi Umur
        $tgl = $_POST['tgl'];

        $lahir = new DateTime($tgl);
        $hari_ini = new DateTime();

        $diff = $hari_ini->diff($lahir);
        echo "<br> Umur: ". $diff->y ." Tahun";

        # Memanggil pekerjaan
        echo "<br> Pekerjaan: ". $_POST['pekerjaan'];

        # gaji
        $pekerjaan = $_POST['pekerjaan'];

        if($pekerjaan == "Web Programmer"){
            echo '<br> Gaji: Rp. 12 juta';
        }elseif($pekerjaan == "IT Network"){
            echo '<br> Gaji: Rp. 13 juta';
        }elseif($pekerjaan == "Data Analyst"){
            echo '<br> Gaji: Rp. 14 juta';
        }elseif($pekerjaan == "Network Engineer"){
            echo '<br> Gaji: Rp. 15 juta';
        }
    ?>
  </body>
</html>