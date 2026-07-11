<!-- 
                            Tipe Data Bolean

    Tipe data boolean adalah sebuah tipe data yang banyak di gunakan 
    untuk menyimpan nilai true atau false. Tipe data ini dapat di 
    bagi menjadi beberapa jenis, yaitu:

        1. true: Benar (true): 
        Tipe data yang di gunakan untuk menyimpan nilai benar. 
        Contoh true, TRUE, 1.

        2. false: Salah (false):
        Tipe data yang di gunakan untuk menyimpan nilai salah. 
        Contoh false, FALSE, 0.
    
    Note:
        var_dump(); adalah fungsi bawaan PHP yang di gunakan untuk 
        menampilkan informasi tentang tipe data dan nilai dari 
        sebuah variabel. Fungsi ini sangat berguna untuk debugging 
        dan memahami struktur data dalam program PHP.
                                                                    -->

<?php
    echo "contoh tipe data boolean true\n";
    echo "Benar: ";
    var_dump(true); // benar = menampilkan tipe data dan nilai dari variabel boolean true
    var_dump(TRUE); 
    echo "Diwakilkan Angka 1"; // diwakilkan dengan angka 1, menampilkan tipe data dan nilai dari variabel boolean true

    echo "\n";
    echo "\n";
    
    echo "contoh tipe data boolean false\n";
    echo "Salah: ";
    var_dump(false); // salah = menampilkan tipe data dan nilai dari variabel boolean false
    var_dump(FALSE); 
    echo "Diwakilkan Angka 2"; // diwakilkan dengan angka 0, menampilkan tipe data dan nilai dari variabel boolean false
?>