<!-- 
tipedata_number adalah tipe data yang digunakan untuk menyimpan nilai numerik atau angka. Tipe data ini dapat dibagi menjadi beberapa jenis, yaitu:
1. Integer (bilangan bulat): Tipe data ini digunakan untuk menyimpan bilangan bulat, baik positif maupun negatif. Contoh: 1, -5, 100, 0.
2. Float (bilangan pecahan): Tipe data ini digunakan untuk menyimpan bilangan pecahan atau desimal. Contoh: 3.14, -0.5, 2.71828. 

var_dump(); adalah fungsi bawaan PHP yang digunakan untuk menampilkan informasi tentang tipe data dan nilai dari sebuah variabel. 
Fungsi ini sangat berguna untuk debugging dan memahami struktur data dalam program PHP.
-->


<?php
    echo "contoh tipe data number";
    echo "integer, decimal: ";
    var_dump(1234); // integer, decimal = menampilkan tipe data dan nilai dari variabel integer
    
    echo "contoh tipe data number";
    echo "integer, octal: ";
    var_dump(01234); // integer, octal = menampilkan tipe data dan nilai dari variabel integer

    echo "contoh tipe data number";
    echo "integer, hexadecimal: ";
    var_dump(0x1A); // integer, hexadecimal = menampilkan tipe data dan nilai dari variabel integer
    
    echo "contoh tipe data number";
    echo "integer, binary: ";
    var_dump(0b11111111); // integer, binary = menampilkan tipe data dan nilai dari variabel integer
    
    echo "contoh tipe data number";
    echo "integer, underscore di number: ";
    var_dump(1_234_567); // integer, underscore di number = menampilkan tipe data dan nilai dari variabel integer
?>