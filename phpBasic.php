<?php

    echo '<h1>PHP Basic</h1><br>';

	// Echo/print => digunakan untuk menampilkan output dari suatu code atau output dari command yang kita buat
    echo '<h3>Echo/Print</h3>';

    echo 'Command Echo';
    print '<br>';
    print 'Command Print'; 

    echo '<hr>'; // command "hr" ini merupakan code yang digunakan untuk memberikan garis bawah


    // Variabel => digunakan sebagai wadah dari suatu code, bisa juga diisikan dengan angka, tulisan lalu cara menampilkannya dengan cara dipanggil nama variabelnya
    echo '<h3>Variabel</h3>';

    $basic = 'Belajar PHP Basic';
    $x = 5;
    $y = 10;
    $result = $x + $y;

    echo $basic;
    echo '<br>'; // command "br" ini merupakan code untuk memberikan jarak antara output 1 dengan lainnya 
    echo $result;

    echo '<hr>';


    // Tipe Data => merupakan pengelompokan data berdasarkan tipe yang diinputkan
    echo '<h3>Tipe Data</h3>';

    $str = 'Tipe Data String'; // merupakan tipe data yang berjenis string atau tulisan
    $int = 91; // merupakan tipe data yang berjenis integer atau angka utuh
    $flt = 10.183; // merupakan tipe data yang berjenis float atau angka yang memiliki pecahan atau koma dibelakangnya
    $bln = true; // merupakan tipe data yang mempersembahkan dua kemungkinan yaitu true atau false
    $array = array('Rizal, Yuda, Rifan, Ari, Rehan'); // merupakan tipe data yang digunakan sebagai wadah lalu ditampilkan secara keseluruhan
    $nll = 'Hello';
    $nll = null; // merupakan wadah tipe data kosong
    // $nll = 'tst';


    echo $str;
    echo '<br>';
    echo $int;
    echo '<br>';
    echo $flt;
    echo '<br>';
    echo $bln;
    echo '<br>';
    print_r($array);
    echo '<br>';
    echo $nll;

    var_dump($int); // digunakan untuk melihat tipe data dari isi / variabel yang ada

    echo '<hr>';


    // Strings => Biasanya digunakan untuk memanipulasi string yang kita inputkan ex: menghitung panjang string, membalik kata
    echo '<h3>Strings</h3>';

    echo strlen('Holla!'); // menghitung panjang dari kata yang diinputkan
    echo '<br>';
    echo strrev('Holla!'); // membalik kata dari belakang
    echo '<br>';
    echo str_word_count('Hallo Teman Teman'); // menghitung space dari inputan kita
    echo '<br>';
    echo strpos('Hello World', 'orld'); // menghitung suku kata sebelum kalimat "orld"
    echo '<br>';
    echo str_replace('kamu', 'Marc', 'Hallo temanku kamu'); // mengganti kata

    echo '<hr>';


    // Operator => merupakan perintah untuk menghitung aritmatik
    echo '<h3>Operator</h3>';

    $tbh = 5 + 1; // digunakan untuk aritmatik penambahan
    $krg = 10 - 4; // digunakan untuk aritmatik pengurangan
    $kli = 5 * 5; // digunakan untuk aritmatik perkalian
    $div = 10 / 2; // digunakan untuk aritmatik pembagian
    $mod = 10 % 3; // digunakan untuk mencari sisa pembagian

    echo $tbh;
    echo '<br>';
    echo $krg;
    echo '<br>';
    echo $kli;
    echo '<br>';
    echo $div;
    echo '<br>';
    echo $mod;

    echo '<hr>';


    // If Statement => digunakan untuk mengeksekusi code program
    echo '<h3>If Statement</h3>';

    $bil = 21;

    echo $bil;
    echo '<br>';
    if ($bil < 10) {
    	echo "Bilangan lebih kecil dari 10";
    } elseif ($bil == 10) {
    	echo "Bilangan pas di angka 10";
    } elseif ($bil < 20) {
    	echo 'Bilangan lebih kecil dari 20';
    } elseif ($bil == 20) {
    	echo 'Bilangan pas di angka 20';
    } else {
    	echo 'Bilangan melebihi 20';
    }

    echo '<hr>';


    //Switch Case => kegunaannya sama seperti if statement
    echo '<h3>Switch Case</h3>';

    $bil = 4;

    echo $bil;
    echo '<br>';
    switch ($bil) {
    	case 1:
    		echo 'Satu';
    		break;

    	case 2:
    		echo 'Dua';
    		break;

    	case 3:
    		echo 'Tiga';
    		break;

    	case 4:
    		echo 'Empat';
    		break;

    	case 5:
    		echo 'Lima';
    		break;
    	
    	default:
    		echo 'Angka melebihi 5';
    		break;
    }

    echo '<hr>';


    // While Loops => digunakan untuk looping atau pengulangan code kita
    echo '<h3>While</h3>';

    $bil = 1;

    while ($bil <= 5) {
    	echo 'Angka '.$bil.'<br>';
    	$bil++; // tanda ++ digunakan untuk menambah satu setelah command dijalankan lalu diloop sampai hasil yang diinputkan
    }

    echo '<hr>';


    //For Loops => kegunaannya sama dengan while
    echo '<h3>For Loops</h3>';

    for ($bil=0; $bil < 5; $bil++) { 
    	echo 'Angka '.$bil.'<br>';
    }

    echo '<hr>';


    //Function => merupakan wadah yang bisa mencakup lebih banyak data daripada variabel
    echo '<h3>Function</h3>';

    function functionKu() {
    	echo 'Functionku';

    	echo '<br>';

    	$x = 5 + 10;
    	echo $x;
    }

    functionKu();

    echo '<br>';


    function withParameter($namadpn) { //parameter ialah data masukkan yang nantinya diproses lebih lanjut lagi
    	echo $namadpn.' Kinder <br>';
    }

    withParameter('Kive');
    withParameter('Klise');
    withParameter('Mack');

    echo '<br>';

?>
