# Tugas I: HTML

Buatlah Catatan tentang HTML5, yang terdiri dari:
* [Struktur HTML](#struktur-html)
* [Tag-tag HTML](#tag-tag-html-beserta-penjelasan)
* [Penjelasan Fungsi Tag HTML](#tag-tag-html-beserta-penjelasan)
* [Contoh kode HTML disetiap tag](#contoh-kode-html-disetiap-tag)

<hr>

## Struktur HTML
Struktur dasar HTML : 
```html
<html>
<head>
	<title></title>
</head>
<body>
</body>
</html>
```

Penjelasan : 

```html
<html>
......
</html>
```
Tag ```<html>``` ini digunakan untuk menyatakan bahwa halaman website menggunakan bahasa HTML.

```html
<head>
......
</head>
```
Tag ```<head>``` adalah kepala dari halaman website. Pada tag ini anda bisa menambahkan banyak informasi seperti meta, css, javascript, font dan lain lain.

Contoh, memanggil external file css dan javascript
```html
<head>
	<title></title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<script src="assets/js/bootstrap.min.js"></script>    
</head>
````

```html
<title>
.......
</title>
```
Tag ```<title>``` digunakan untuk menyatakan title website anda. Tag ini disimpan didalam tag ```<head></head>```

```html
<body>
.......
</body>
```
Tag ```<body>``` ini digunakan untuk menampilkan isi dari website anda. Semua yang ingin anda tampilkan, dimasukan dalam tag ```<body>``` ini, bisa image, teks, video, musik dan lain-lain.

## Tag-tag HTML Beserta Penjelasan

| Tag  | Keterangan |
| ---- | ---------- |
| `<!DOCTYPE>`  | Menentukan type dokumen |
| `<html>` | Membuat sebuah dokumen HTML |
| `<title>` | Membuat judul dari sebuah halaman |
| `<body>` | Membuat tubuh dari sebuah halaman |
| `<h1>to<h6>` | Membuat heading |
| `<p>` | Membuat paragraf |
| `<br>` | Memasukkan satu baris putus |
| `<!--..-->` | Membuat komentar |
| `<address>` | Membuat kontak alamat |
| `<center>` | Membuat jajaran teks menjadi di tengah |
| `<font>` | Membuat font, warna, dan ukuran teks |
| `<form>` | Membuat from HTML untuk input pengguna |
| `<input>` | Membuat sebuah kontrol input |
| `<button>` | Membuat sebuah tombol |
| `<img>` | Menampilkan gambar |
| `<figure>` | Menentukan konten mandiri |
| `<a>` | Membuat hyperlink |
| `<link>` | Membuat hubungan antara dokumen dan sumber daya eksternal |
| `<nav>` | Membuat navigasi link |
| `<ul>` | Membuat daftar dengan selain nomor |
| `<li>` | Membuat sebuah item daftar |
| `<table>` | Membuat tabel |
| `<th>` | Membuat sebuah sel header tabel |
| `<thead>` | Mengelompokkan isi header dalam sebuah tabel |
| `<style>` | Membuat informasi style untuk dokumen |
| `<header>` | Membuat sebuah header untuk dokumen |
| `<footer>` | Membuat sebuah footer untuk dokumen |
| `<hgroup>` | Pengelompokan elemen heading |
| `<section>` | Membuat bagian dalam dokumen |
| `<article>` | Membuat sebuah artikel |
| `<aside>` | Membuat konten lain selain dari konten halaman |
| `<head>` | Membuat informasi tentang dokumen |

## Contoh kode HTML disetiap tag

Untuk contoh source code, dapat dilihat pada folder `tugas1`

Preview : ![preview](https://raw.githubusercontent.com/fikriomar16/desainweb/master/tugas1/tugas1/preview.png)

* `<title>`
	contoh : `<title>Tugas Topic 1 by Omar</title>`

* `<link>`
	contoh : `<link rel="icon" href="assets/img/icon.png">`

* `<font>`
	contoh : `<font face="iosevka Nerd font" color="#e7e8eb">`

* `<h1>`
	contoh : `<h1 align="left"> Masochist Desktoper </h1>`

* `<p>`
	contoh : 
	`<p align="left">`
	`OS Ubuntu pada umumnya menggunakan Unity sebagai Desktop Environment.``<br>`
	`Pada Elementary OS, DE yang digunakan adalah Pantheon.``<br>`
	`</p>`

* `<!--..-->`
	contoh : `<!-- Ini adalah contoh comment -->`

* `<address>`
	contoh : 
	`<address>
		<center><p><a href="https://github.com/fikriomar16" title="">@Fikri Omar</a></p></center>
	</address>`

* `<center>`
	contoh : `<center><p><a href="https://github.com/fikriomar16" title="">@Fikri Omar</a></p></center>`

* `<input>`
	contoh : `<input class="form-control mr-sm-2" placeholder="Type Something...." type="text" list="programming">`

* `<button>`
	contoh : `<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>`

* `<img>`
	contoh : `<img src="assets/img/de.png" width="300" height="200">`

* `<a>`
	contoh : `<a href="https://github.com/fikriomar16">Github</a>`

* `<nav>, <ul>, <li>`
	contoh : 
	`<nav>
		<ul>
			<h3> ~ How to modding your linux desktop ~ </h3>
			<li><a href=""> Home </a></li>
			<li><a href=""> Tutorial </a></li>
			<li><a href=""> Dotfiles </a></li>
			<li><a href=""> Help </a></li>
			<li><a href=""> About </a></li>
		</ul>
	</nav>`

* `<style>`
	contoh : 
	`<style>
	body{
		background-image: url("assets/img/wp.jpg");
	}
	h1{
		width: 940px;
		height: 40px;
		margin-left: : 30px;
	}
	nav{
		margin-bottom: 50px;
	}
	aside, nav li{
		display: inline;
		margin-right: 40px;
	}
	nav li a, a{
		color: #e7e8eb;
		text-decoration: none;
	}
	aside{
		float: right;
	}
	img{
		margin-left: 30px;
		margin-right: 20px;
	}
	</style>`

* `<footer>`
	contoh : 
	`<footer>
		<address>
			<center><p><a href="https://github.com/fikriomar16" title="">@Fikri Omar</a></p></center>
		</address>
	</footer>`

* `<aside>`
	contoh :
	`<aside>
		<section>
			<h3> Social Media </h3>
				<a href="https://github.com/fikriomar16"> > Github</a><br><br>
				<a href="https://plus.google.com/+FikriOmar"> > Google+</a><br><br>
				<a href="https://fikriomar16.deviantart.com"> > DeviantArt</a><br><br>
		</section>
	</aside>`