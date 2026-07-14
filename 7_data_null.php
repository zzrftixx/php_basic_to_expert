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
    
    list function:
        var_dump()  = print out value dengan menampilkan tipedata apa yang sedang di 
                    gunakan.
        null        = tipedata null/kosong.
        is_null()   = mengechek apakah isi dari variable itu null atau engga, dan dia akan
                    menghasilkan boolean jika hasil nya 1 maka dia true dan jika 0 maka 
                    false atau (0 berarti ada nilai/1 tidak ada nilai).
        unset()     = function ini untuk menghapus variable yang ada.. dan lagi tidak di 
                    gunakan.
        isset()     = namun ada yang lebih baik dari is_null() yaitu isset() dimana kita 
                    akan check apakah didalam kodingan kita ada sebuah variable itu dan
                    nilai nya tidak null
                                                                                          -->

<?php
    echo " --------------------- Data Null --------------------- \n\n";
    $person_value = 100;
    echo "$person_value"; // disini masih tampil bagaimana penggunaan variable nya
    echo "\n";
    var_dump($person_value); // akan keluar value dan tipedata nyas

    $person_value = null;
    echo "$person_value"; // namun ketika value null di tambahkan maka nilai dalam variable yang sudah di deklarasikan akan hilang atau tidak memiliki value
    echo "\n";
    var_dump($person_value); // tampil NULL karena dia tidak memiliki nilai
    
    echo "\n";
    
    echo " --------------------- mengechek apakah data tersebut berisi value memakai is_null() --------------------- \n\n";
    $person_check = "avaible";
    $person_check_null = null;
    echo is_null($person_check); // check apakah apakah value nya null atau tidak: (bool(false))
    echo "\n";
    var_dump(is_null($person_check)); // menampilkan pengecheckan null beserta value tipe data nya: (kosong)
    echo "\n";
    echo is_null($person_check_null); // check apakah apakah value nya null atau: tidak (1/true)
    echo "\n";
    var_dump(is_null($person_check_null)); // menampilkan pengecheckan null beserta value tipe data nya: (bool(true))

    echo "\n";
    
    echo " --------------------- menghapus variable memakai unset() --------------------- \n\n";
    $dellet ="masih ada variable";
    $dellet_variable ="hapus variable";
    
    var_dump($dellet);
    var_dump($dellet_variable);
    
    // kita akan menghapus variable di atas
    // $dellet_variable
    
    unset($dellet_variable);
    // var_dump($dellet_variable); saya komentari karena terjadi error akibat sata menghapus variable nya dan ada peringatan "Undifined variable $dellet_variable" bakan ketika kita check pakai is_null() tetap tidak bisa

    // kita akan check keberadaan value dan variable nya melalui function isset()
    var_dump(isset($dellet_variable)); // akan tampil di promt (bool(false))/0 yang berarti variable dan balue nya tidak ada. 
?>