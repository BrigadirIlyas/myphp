<?php
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump
echo "<h1>Tipe Data</h1>";
echo "<h3>String</h3>";
echo "echo<br>";
print "print<br>";
//mencetak string
print_r("print_r<br>");
//bisa mencetak string dan array
var_dump("var_dump<br>");
//memberikan informasi tipe data dan ukuran nya
echo "<h3>Boolean</h3>";
echo true; // boolean true menghasilkan 1
echo false; // boolean false menghasilkan 0
echo "<br>";
//boolean
echo "<h3>Angka</h3>";
echo 123;
//angka

// Penulisan sintaks PHP

// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data

// variabel 
// menuliskan tanda $
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// mengunakan tanda petik ""
// tidak boleh mengunakan spasi
$name = "Variabel"; // variabel untuk menampung sebuah nilai

// Operator 

// aritmatika
// + - * / %
echo "<h1>Aritmatika</h1>";

$x = 10;
$y = 5;

echo $x + $y;
echo "<br>";
echo $x - $y;
echo "<br>";
echo $x * $y;
echo "<br>";
echo $x / $y;
echo "<br>";
echo $x % $y;
echo "<br>";

// Operator penggabung string / concatenation / concat
// mengunakan titik .

$nama1 = "Operator";
$nama2 = "Penggabung String";

echo $nama1 . " " . $nama2;
echo "<br>";

// Operator Assignment
//=, +=, -=, *=, /=, %=, .=

$nama = "Operator";
$nama .= " ";
$nama .= "Assignment";
echo $nama;
echo "<br>";

$a = 1;
$a += 5;
echo $a;  
echo "<br>";
//variabel yg sama maka value akan ditimpa, 
//dengan mengunakan assignment maka hasil variabel awal tidak akan hilang, 
// melainkan bisa di jumlahkan dan dikurangkan sesuai kebutuhan

//Operator Perbandingan
// <, >, <=, >=, ==
// tidak membedakan tipe data hanya mengecek nilanya
echo "Operator Perbandingan"; 
echo "<br>";
var_dump(1 == "1");
echo "<br>";

//Operator Indentitas
// ===, !==
// bisa membedakan tipe data 
echo "Operator Indentitas";
echo "<br>";
var_dump(1 === "1");
echo "<br>";

//Logika
// &&, ||, !
// digunakan di perkondisian
echo "Operator Logika";
echo "<br>";
$b = 30;
var_dump($b < 20 && $b % 2 == 0);// mengunakan && jika salah satu hasil false maka hasil nya akan false
echo "<br>";
var_dump($b < 20 || $b % 2 == 0);// mengunakan || jika salah satu hasil true maka hasil nya akan true




?>
<!--HTML didalam PHP-->
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>HTML didalam PHP dan <?php echo $name;?></h1>
</body>
</html>
<!-- PHP didalam HTML-->
<?php
    echo "<h1>PHP didalam HTML</h1>"
?>