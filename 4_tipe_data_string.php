<!-- 
                                Tipe Data String

    Seperti yang awal kita lakukan dalam pembuatan aplikasi pertama Hello World
    kita menggunakan tipe data string untuk menampilkan teks "Hello World" ke layar.
    hal tersebu di tandai oleh penggunaan tanda kutip ganda (" ") di awal dan akhir 
    teks. 

    Tipe data string adalah tipe data yang digunakan untuk menyimpan teks atau 
    karakter. String dapat terdiri dari satu atau lebih karakter, termasuk huruf, 
    angka, simbol, dan spasi. Dalam bahasa pemrograman PHP, string dapat 
    didefinisikan menggunakan tanda kutip tunggal (' ') atau tanda kutip ganda (" ").

    Note:
        var_dump(); adalah fungsi bawaan PHP yang di gunakan untuk 
        menampilkan informasi tentang tipe data dan nilai dari sebuah 
        variabel. Fungsi ini sangat berguna untuk debugging dan memahami 
        struktur data dalam program PHP.

        heredoc adalah fitur di PHP untuk membuat string multi-baris dengan lebih 
        mudah. dan dia bisa parsing variabel di dalam string, sehingga kita bisa 
        menggunakan variabel di dalam string. 
        
        nowdoc adalah fitur di PHP untuk membuat string multi-baris dengan lebih
        mudah. dan dia tidak bisa parsing variabel di dalam string, sehingga lebih
        aman untuk digunakan pada string yang tidak perlu parsing variabel.

        parsing variabel adalah proses mengganti nama variabel dengan nilai yang di 
        simpan di dalamnya.

    List escape sequence yang dapat digunakan dalam string:
        1. \n: New line (baris baru atau enter)
        2. \t: Tab (jarak tab)
        3. \\: Backslash (tanda backslash)
        4. \$: Dollar sign (tanda dollar)
        5. \": Double quote (tanda kutip ganda)
        6. \': Single quote (tanda kutip tunggal)
                                                                                    -->
    


<?php
    echo '--- String dengan tanda kutip satu ---';
    echo "\n";
    var_dump('Hello World, text ini menggunakan string kutip satu'); // string dengan tanda kutip satu menampilkan tipe data dan nilai dari variabel string 'Hello World'
    echo "\n";
    echo "--- String dengan tanda kutip ganda ---";
    echo "\n";
    var_dump("Hello World, text ini menggunakan string kutip ganda"); // string dengan tanda kutip ganda menampilkan tipe data dan nilai dari variabel string "Hello World"

    echo "\n";

    echo "--- String dengan Heredoc ---";
    echo "\n";
    echo <<<HEREDOC
    Hello World, text ini menggunakan string heredoc kita bisa 
    menulis string multi-baris dengan lebih mudah dan dia bisa 
    parsing variabel (\$variable) di dalam string, sehingga 
    kita bisa menggunakan variabel di dalam string.

    HEREDOC;

    echo "\n";

    echo "--- String dengan Nowdoc ---";
    echo "\n";
    echo <<<'NOWDOC'
    Hello World, text ini menggunakan string nowdoc kita bisa
    menulis string multi-baris dengan lebih mudah dan dia 
    tidak bisa parsing variabel ($variable) di dalam string,
    sehingga lebih aman untuk digunakan pada string yang 
    tidak perlu parsing variabel.

    NOWDOC;
?>

    

