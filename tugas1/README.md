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
Tag <body> ini digunakan untuk menampilkan isi dari website anda. Semua yang ingin anda tampilkan, dimasukan dalam tag <body> ini, bisa image, teks, video, musik dan lain-lain.

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
