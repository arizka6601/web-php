
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Arizka Fadhila</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	</head> 
	<body>
		
		<!-- sidebar -->
		<input type="checkbox" id="check">
		<div class="sidebar">
			<ul>
				<li><a href="#Kode PHP Multiple blok">1. Kode PHP Multiple blok</a></li>
				<li><a href="#Variabel">2. Variabel</a></li>
				<li><a href="#Konstanta">3. Konstanta</a></li>
				<li><a href="#Tipe Data Integer">4. Tipe Data Integer</a></li>
				<li><a href="#Tipe Data Array">5. Tipe Data Array</a></li>
				<li><a href="#Fungsi var_dump">6. Fungsi var_dump</a></li>
				<li><a href="#Operator Aritmatika">7. Operator Aritmatika</a></li>
				<li><a href="#Operator String">8. Operator String</a></li>
				<li><a href="#Operator Logika">9. Operator Logika</a></li>
				<li><a href="#Operator Perbandingan">10. Operator Perbandingan</a></li>
			</ul>
		</div>

		<!-- bagian header -->
		<header>
			<div class="container">
				<h1><a href="">Arizka Fadhila Putri</a></h1>

				<!-- menu mobile -->
				<label for="check" class="mobile-menu"><i class="fas fa-bars fa-2x"></i></label>
			</div>
		</header>

		<!-- bagian banner -->
		<section class="banner">
			<div class="container">
				<div class="banner-left">
					<h2>Halo!</h2>
					<p>Selamat datang di website PHP saya!</p>
				</div>
			</div>
		</section>

		<!-- bagian kode blok -->
		<section id="Kode PHP Multiple blok">
			<div class="container">
				<h3>Kode PHP Multiple blok</h3>
				<?php
				$date = "Oktober 21, 2020";
				?>
				<p>Today's date is <?=$date;?></p>
			</div>
		</section>

		<!-- bagian variabel -->
		<section id="Variabel">
			<div class="container">
				<h3>Variabel</h3>
				<?php
				// membuat variabel baru
				$nama_barang = "Laptop";
				$harga = 4500000;
				// menampilkan isi variabel
				echo "Saya membeli $nama_barang seharga Rp $harga";
				?>
			</div>
		</section>

		<!-- bagian Konstanta -->
		<section id="Konstanta">
			<div class="container">
				<h3>Konstanta</h3>
				<?php
				// membuat konstanta
				define('VERSION', '1.0.0');
				const SITE_NAME = "Akademi Komunitas Semen Indonesia";
				const BASE_URL = "https://www.aksi.ac.id";
				// cetak nilai konstanta
				echo "Site name: " . SITE_NAME . "<br/>";
				echo "URL: " . BASE_URL . "<br/>";
				echo "Version: " . VERSION . "<br/>";
				?>
			</div>
		</section>

		<!-- bagian Tipe Data Integer -->
		<section id="Tipe Data Integer">
			<div class="container">
				<h3>Tipe Data Integer</h3>
				<?php
				// tipe data char (karakter)
				$jenis_kelamin = 'P';
				// tipe data string (teks)
				$nama_lengkap = "Arizka Fadhila Putri";
				// tipe data integer
				$umur = 19;
				// tipe data float
				$berat = 51;
				// tipe data float
				$tinggi = 160;
				echo "Nama: $nama_lengkap<br>";
				echo "Jenis Kelamin: $jenis_kelamin<br>";
				echo "Umur: $umur tahun<br>";
				echo "berat badan: $berat kg<br>";
				echo "tinggi badan: $tinggi cm<br>";
				?>
			</div>
		</section>

		<!-- bagian Tipe Data Array -->
		<section id="Tipe Data Array">
			<div class="container">
				<h3>Tipe Data Array</h3>
				<?php
				//pembuatan array
				$nama = array(
				 1=>"Arizka",
				 2=>"Fadhila",
				 3=>"Putri",
				 4=>"Aria",
				 5=>"Zayn");
				//cara akses array
				echo $nama[1]; //Arizka
				echo "<br />";
				echo $nama[2]; //Fadhila
				echo "<br />";
				echo $nama[3]; //Putri
				echo "<br />";
				echo $nama[4]; //Aria
				echo "<br />";
				echo $nama[5]; //Zayn
				?>
			</div>
		</section>

		<!-- bagian Fungsi var_dump -->
		<section id="Fungsi var_dump">
			<div class="container">
				<h3>Fungsi var_dump</h3>
				<?php
				$a= 6; $b=6; $c=1;
				$hasil1=$a+$b;
				$hasil2=$a+$c;
				$hasil3=$a.$b;
				echo "$hasil1:"; var_dump($hasil1); //int(12)
				echo "<br \>"; //
				echo "$hasil2:"; var_dump($hasil2); //float(7)
				echo "<br \>";
				echo "$hasil3:"; var_dump($hasil3); //string(2) "36"
				?>
			</div>
		</section>

		<!-- bagian Operator Aritmatika -->
		<section id="Operator Aritmatika">
			<div class="container">
				<h3>Operator Aritmatika</h3>
				<?php
				$hasil1= -3;
				$hasil2=3+5;
				$hasil3=8-4.5;
				$hasil4=2*5;
				$hasil5=3+8/5-3;
				$hasil6=10 % 4;
				echo "$hasil1:"; var_dump($hasil1); // $hasil1:int(-3)
				echo "<br \>";
				echo "$hasil2:"; var_dump($hasil2); // $hasil2:int(8)
				echo "<br \>";
				echo "$hasil3:"; var_dump($hasil3); // $hasil3:float(3.5)
				echo "<br \>";
				echo "$hasil4:"; var_dump($hasil4); // $hasil4:int(10)
				echo "<br \>";
				echo "$hasil5:"; var_dump($hasil5); // $hasil5:float(1.6)
				echo "<br \>";
				echo "$hasil6:"; var_dump($hasil6); // $hasil6:int(2)
				?>
			</div>
		</section>

		<!-- bagian Operator String -->
		<section id="Operator String">
			<div class="container">
				<h3>Operator String</h3>
				<?php
				$a = "Hi! ";
				$hasil = "{$a}";
				echo $hasil; // Hi!
				echo "<br />";
				$a = "belajar ";
				$b = "PHP ";
				$c = "di Akademi Komunitas Semen Indonesia";
				$hasil= "Saya sedang {$a}{$b}{$c}";
				echo $hasil; // Saya sedang belajar PHP di Akademi Komunitas Semen Indonesia
				?>
			</div>
		</section>

		<!-- bagian Operator Logika -->
		<section id="Operator Logika">
			<div class="container">
				<h3>Operator Logika</h3>
				<?php
				$hasil1 = true and false;
				echo '$hasil1 = ';
				echo var_dump($hasil1)."<br/>"; // $hasil1 = bool(true)
				$hasil2 = (true and false);
				echo '$hasil2 = ';
				echo var_dump($hasil2)."<br/>"; // $hasil2 = bool(false)
				$hasil3 = (true xor false);
				echo '$hasil3 = ';
				echo var_dump($hasil3)."<br/>"; // $hasil3 = bool(true)
				$hasil4 = (false or true && false);
				echo '$hasil4 = ';
				echo var_dump($hasil4)."<br/>"; // $hasil4 = bool(false)
				$a=true;
				$b=false;
				$hasil5 = ($a and $b || $a or b);
				echo '$hasil5 = ';
				echo var_dump($hasil5); // $hasil5 = bool(true)
				?>
			</div>
		</section>

		<!-- bagian Operator Perbandingan -->
		<section id="Operator Perbandingan">
			<div class="container">
				<h3>Operator Perbandingan</h3>
				<?php
				echo "1. 12 < 14 = "; var_dump(12<14); // bool(true)
				echo "<br />";
				echo "2. 14 < 14 = "; var_dump(14<14); // bool(false)
				echo "<br />";
				echo "3. 14 <= 14 = "; var_dump(14<=14); // bool(true)
				echo "<br />";
				echo "4. 10 <> '10' = "; var_dump(10<>'10'); // bool(false)
				echo "<br />";
				echo "5. 10 == '10' = "; var_dump(10=='10'); // bool(true)
				echo "<br />";
				echo "6. 10 === '10' = "; var_dump(10==='10'); // bool(false)
				echo "<br />";
				echo "7. '150' == '1.5e2' = "; var_dump('150'=='1.5e2'); // bool(true)
				echo "<br />";
				echo "8. 'Akademi Komunitas Semen Indonesia' = "; var_dump('Akademi Komunitas Semen Indonesia'==0); // bool(true)
				echo "<br />";
				?>
			</div>
		</section>

		<!-- bagian footer -->
		<footer>
			<div class="container">
				<small>copyright &copy; 2020 - Arizka Fadhila Putri - AKSI Gresik.</small>
			</div>
		</footer>
	</body>
</html>