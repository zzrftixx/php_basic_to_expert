<!-- 
                            Constanta dan Variable

    constant adalah variable yang nilai nya tidak dapat di ubah atau bisa disebut
    imutable, constant di PHP dapat di buat dengan menggunakan define() atau 
    const.

    bedanya dengan variable dia dapat di ubah value atau nialai nya, sedangkan 
    constant tidak dapat di ubah value atau nilainya. constant juga dapat di 
    akses di seluruh scope, sedangkan variable hanya dapat di akses di scopenya 
    sendiri.

    biasanya constant di gunakan untuk menyimpan nilai yang tidak akan berubah 
    selama program berjalan, seperti nama aplikasi, versi aplikasi, dan 
    lain-lain.

    Note:
        contoh perintah constanta di PHP selalu diawali dengan define() dengan 
        nama constanta.
        Contoh: define('NAMA_CONSTANT', 'nilai constant');
                                                                                    -->

<?php
    echo " --------------------- Constanta --------------------- \n\n";
    define("version_android", 10.0);
    $verion_android = version_android; // variable menampilkan tipe data dan nilai dari variabel constant version_android

    echo <<<HEREDOC
        Version android kamu saat ini adalah
        $verion_android, dan versi android 
        ini tidak dapat di ubah nilainya.
    HEREDOC;
?>