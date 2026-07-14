<!-- 
                                    Data Null
                                    
    Data null adalah value untuk representasi sebuah variabel yang tidak memiliki value 
    atau nilai. dan jika kita ingin menghapus value dari sebuah variable kita bisa 
    menggunakan data null untuk menghapus value nya. untuk membuat nilai null kita bisa 
    menulis nya NULL atau null karena dia (case insensitive).

    Note:
        Contoh Data:
        (Null, NuLL, NULL ....)

        Contoh Varible:
        $tipe_data = null;
    
    list point:
        var_dump = print out value dengan menampilkan tipedata apa yang sedang di gunakan
        null = tipedata null/kosong
        
        
                                                                                          -->

<?php
    echo " --------------------- Data Null --------------------- \n\n";
    $person_value = 100;
    echo "$person_value"; // disini masih tampil bagaimana penggunaan variable nya
    var_dump($person_value); // akan keluar value dan tipedata nyas

    $person_value = null;
    echo "$person_value"; // namun ketika value null di tambahkan maka nilai dalam variable yang sudah di deklarasikan akan hilang atau tidak memiliki value
    var_dump($person_value); // tampil NULL karena dia tidak memiliki nilai 
?>