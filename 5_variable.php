<!-- 
                                    Variable

    Variable adalah sebuah tempat untuk menyimpan data atau nilai sementara dalam
    program. Variable dapat menyimpan berbagai jenis tipe data, seperti string,
    integer, float, boolean, array, dan lain-lain. Variable dapat diubah nilainya
    selama program berjalan, sehingga dapat digunakan untuk menyimpan data yang
    bersifat dinamis. 

    Namun ada yang unik di PHP, yaitu variable di PHP tidak perlu di deklarasikan 
    tipe datanya, karena PHP adalah bahasa pemrograman yang bersifat loosely 
    typed. Artinya, kita tidak perlu menentukan tipe data dari sebuah variable 
    saat membuatnya. PHP akan secara otomatis menentukan tipe data dari variable 
    berdasarkan nilai yang diberikan.

    Dan ada juga namnanya variable variables, yaitu sebuah variable yang namanya 
    diambil dari nilai variable lain.

    Note:
        contoh variable di PHP selalu diawali dengan tanda dollar ($) diikuti 
        dengan nama variable.
                                                                                    -->

<?php
    echo "--------------------- Variable --------------------- \n";
    $nama = "John Doe"; // variable string menampilkan tipe data dan nilai dari variabel string $nama
    $umur = 30; // variable integer menampilkan tipe data dan nilai dari variabel integer $umur
    $tinggi = 170.5; // variable float menampilkan tipe data dan nilai dari variabel float $tinggi
    $berat = 70.5; // variable float menampilkan tipe data dan nilai dari variabel float $berat
    $hobi = "Membaca"; // variable string menampilkan tipe data dan nilai dari variabel string $hobi
    $belajar = "php"; // variable string menampilkan tipe data dan nilai dari variabel string $belajar
    $apakah_saya_sedang_belajar = true; // variable boolean menampilkan tipe data dan nilai dari variabel boolean $apakah_saya_sedang_belajar

    var_dump($nama);
    var_dump($umur);
    var_dump($tinggi);
    var_dump($hobi);
    var_dump($belajar);
    
    echo "\n";

    echo <<<HEREDOC
    Nama saya $nama saya tinggal di australia, saya berumur $umur tahun, dan memiliki 
    tinggi badan $tinggi cm, berat badan saya $berat kg, hobi saya adalah $hobi, dan 
    saya sedang belajar bahasa pemrograman $belajar.

    dan apakah saya sedang belajar bahasa pemrograman $belajar? 
    jawabannya adalah ($apakah_saya_sedang_belajar)/benar.

    HEREDOC;

    echo "\n";

    echo "---------------- Variable Variables ---------------- \n";
    $nama_variable = "nama"; // variable string menampilkan tipe data dan nilai dari variabel string $nama_variable
    $$nama_variable = "John Doe"; // variable variable menampilkan tipe data dan nilai dari variabel variable $$nama_variable yang namanya diambil dari nilai variable $nama_variable yaitu "nama"
    
    
    var_dump($nama_variable); // menampilkan tipe data dan nilai dari variabel variable $$nama_variable yang namanya diambil dari nilai variable $nama_variable yaitu "nama"

    var_dump($nama); // menampilkan tipe data dan nilai dari variabel $nama yang namanya diambil dari nilai variable $nama_variable yaitu "nama"
?>