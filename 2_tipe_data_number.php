<!-- 
                            Tipe Data Number

    tipe data number adalah sebuah tipe data yang banyak di gunakan untuk 
    menyimpan nilai numerik atau angka. Tipe data ini dapat di bagi
    menjadi beberapa jenis, yaitu:

        1. int: Integer (bilangan bulat): 
        Tipe data yang di gunakan untuk menyimpan bilangan bulat, baik
        positif maupun negatif. Contoh 1, -5, 100, 0.

        2. float: Float (bilangan pecahan):
        Tipe data yang di gunakan untuk menyimpan bilangan pecahan, seperti
        positif maupun negatif. Contoh 1.5, -5.70, 100.0, 0. 
    
    Note:
        var_dump(); adalah fungsi bawaan PHP yang di gunakan untuk 
        menampilkan informasi tentang tipe data dan nilai dari sebuah 
        variabel. Fungsi ini sangat berguna untuk debugging dan memahami 
        struktur data dalam program PHP.
                                                                            -->

<?php
    echo "--- Integer --- \n";
    var_dump(1234); // Integer bilangan desimal menampilkan tipe data dan nilai dari variabel integer 1234 dengan basis 10
    var_dump(01234); // Integer bilangan octal menampilkan tipe data dan nilai dari variabel integer 01234 dengan basis 8
    var_dump(0x1A); // Integer bilangan hexadecimal menampilkan tipe data dan nilai dari variabel integer 0x1A dengan basis 16
    var_dump(0b11111111); // Integer bilangan binary menampilkan tipe data dan nilai dari variabel integer 0b11111111 dengan basis 2
    var_dump(1_234_567_89); // Integer bilangan dengan underscore menampilkan tipe data dan nilai dari variabel integer 1_234_567_89) menggunakan garis bawah agar mudah di baca
    
    echo "\n";

    echo "--- Float --- \n";
    var_dump(1.23456789); // Float point menampilkan tipe data dan nilai dari variabel float 1.23456789
    var_dump(1.23456789e2); // Float point, scientific notation plus menampilkan tipe data dan nilai dari variabel float 1.23456789e2
    var_dump(1.23456789e-2); // Float point, scientific notation: minus menampilkan tipe data dan nilai dari variabel float 1.23456789e-2
    var_dump(1.234_567_89); // Float point underscore di number menampilkan tipe data dan nilai dari variabel float 1.234_567_89 menggunakan garis bawah agar mudah di baca

    echo "\n";

    echo "--- Integer Overflow --- \n";
    var_dump(9223372036854775807); // integer overflow = menampilkan tipe data dan nilai dari variabel integer yang melebihi batas maksimum, sehingga diubah menjadi floating point
    var_dump(9223372036854775808); // contoh melebihi batas maksimum integer, sehingga diubah menjadi floating point
?>