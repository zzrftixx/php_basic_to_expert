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
    var_dump(1_234_567_89); // integer, underscore di number = menampilkan tipe data dan nilai dari variabel integer
    
    // tipe data float:
    
    echo "contoh tipe data number";
    echo "float point";
    var_dump(1.23456789); // float point = menampilkan tipe data dan nilai dari variabel float

    echo "contoh tipe data number";
    echo "float point, scientific notation plus: ";
    var_dump(1.23456789e2); // float point, scientific notation = menampilkan tipe data dan nilai dari variabel float

    echo "contoh tipe data number";
    echo "float point, scientific notation: minus: ";
    var_dump(1.23456789e-2); // float point, scientific notation: minus = menampilkan tipe data dan nilai dari variabel float

    echo "contoh tipe data number";
    echo "float point underscore di number: ";
    var_dump(1.234_567_89); // float point underscore di number = menampilkan tipe data dan nilai dari variabel float

    // ada yang namanya integer overflow, yaitu ketika nilai integer melebihi batas maksimum yang dapat ditampung oleh tipe data integer. Dalam kasus ini, PHP akan mengubah tipe data menjadi float secara otomatis. Contoh:
    
    echo "contoh tipe data number";
    echo "integer overflow: ";
    var_dump(9223372036854775807); // integer overflow = menampilkan tipe data dan nilai dari variabel integer yang melebihi batas maksimum, sehingga diubah menjadi float
    var_dump(9223372036854775808); // melebihi batas maksimum integer, sehingga diubah menjadi floating point
?>