<!-- 
tipe data string adalah tipe data yang digunakan untuk menyimpan teks atau karakter. 
String dapat terdiri dari satu atau lebih karakter, termasuk huruf, angka, simbol, 
dan spasi. Dalam bahasa pemrograman PHP, string dapat didefinisikan menggunakan 
tanda kutip tunggal (' ') atau tanda kutip ganda (" ").
-->

<?php

echo "contoh tipe data string";
echo "strig petik tunggal: ";
echo 'ini adalah contoh string dengan menggunakan tanda kutip tunggal.'; // string petik tunggal = menampilkan string dengan tanda kutip tunggal
echo " ";
var_dump('ini adalah contoh string dengan menggunakan tanda kutip tunggal.'); // string petik tunggal = menampilkan tipe data dan nilai dari variabel string dengan tanda kutip tunggal

echo "contoh tipe data string";
echo " ";
echo "string petik ganda: ";
echo "ini adalah contoh string dengan menggunakan tanda kutip ganda."; // string petik ganda = menampilkan string dengan tanda kutip ganda  
echo " ";
var_dump("ini adalah contoh string dengan menggunakan tanda kutip ganda."); // string petik ganda = menampilkan tipe data dan nilai dari variabel string dengan tanda kutip ganda

echo "\n"; // ini sytntax untuk enter atau membuat baris baru
echo "dan ini untuk tab\t tab \t tab"; // ini sytntax untuk tab atau membuat jarak tab
echo "\n"; // ini sytntax untuk enter atau membuat baris baru


// dan ini contoh untuk heredoc dan nowdoc, yang merupakan fitur di PHP untuk membuat
// string multi-baris dengan lebih mudah.
echo "contoh tipe data string heredoc: ";
echo <<<EOD
ini adalah contoh string dengan menggunakan heredoc.
dan kita bisa membuat string multi-baris dengan lebih mudah.
dan lebih rapi, karena kita tidak perlu menggunakan tanda kutip tunggal atau ganda.
EOD;

echo "\n";
echo "\n";

echo "contoh tipe data string nowdoc: ";
echo <<<'EOD'
ini adalah contoh string dengan menggunakan heredoc.
dan kita bisa membuat string multi-baris dengan lebih mudah.
dan lebih rapi, karena kita tidak perlu menggunakan tanda kutip tunggal atau ganda.
EOD;

// bedanya heredoc dan nowdoc adalah pada heredoc kita bisa menggunakan variabel di dalam 
// string, sedangkan pada nowdoc kita tidak bisa menggunakan variabel di dalam string.
// dan dia tidak bisa parsing variabel di dalam string, sehingga lebih aman untuk 
// digunakan pada string yang tidak perlu parsing variabel.

// apa itu parsing variabel? parsing variabel adalah proses dimana PHP akan mencari dan 
// mengganti variabel yang ada di dalam string dengan nilai dari variabel tersebut.
?>