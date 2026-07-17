<!-- 
                                    Tipe Data Array
                                    
    Tipe Data Array adalah tipe data yang bisa menyimpan banyak data di dalam nya/, tipe
    data ini bisa menampung lebih dari satu data sekaligus dalam satu function. array 
    mampu berisikan bermacam macam tipedata sekaligus, seperti integer, string, float dan 
    tidak dibatasi panjang dari isi array tersebut.

    Note:
        Index : 
        adalah penomoran yang di gunakan oleh array dalam mengambil isi value di
        dalam nya nanti.
        
        Cara kerja array: 
        array akan memulai perhitungan dari 0 dimana jika kamu memiliki
        value/data di dalam array sebanyak 10 maka index/indices yang akan di hitung mulai
        dari 0 - 9. tapi tetap panjang data nya adalah 10 atau isinya ada 10.

        Contoh code program:
        bisa langsung melalui array function = array(value,value,value);
        memakai kurung buka-tutup = $variable = [value,value,value];

    list function array:
        $array[index]           = mengakses data array di index keberapa
        $array[index] = value   = mengganti data array di index keberapa
        $array[] = value        = menambah data array di posisi paling belakang
        unset($array[index])    = menghapus data array, dan otomatis hillang dari array
        count($array)           = menggambil total data di array

                                                                                          -->

<?php
    echo " --------------------- Tipe Data Array --------------------- \n\n";
    $arraystraing1 = array("value0","value1","value2");
    var_dump($arraystraing1);
    echo "\n";
    $arraystraing2 = [0,1,2];
    var_dump($arraystraing2);

    // value/nilai yang di isi juga bisa berbeda beda ...

    // $randomvalue1 = array("value0",1,1.5); 
    // $randomvalue2 = ["value0",1,1.5];
    // var_dump($randomvalue1);
    // var_dump($randomvalue2);

    $arraytest = ["Muhammad","Andra","Ariesfi"];
    print_r($arraytest); // menampilkan seluruh isi index dan data array
    var_dump($arraytest[0]); // menampilkan hanya bagian index yang di pilih beserta data array
    $arraytest[0] = "Muh."; // mengganti hanya bagian index yang di pilih beserta data array
    print_r($arraytest); // mencoba menampilkan data yang di ganti
?>