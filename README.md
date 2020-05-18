<p align="center">
  <a href="">
    <img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/images/logo1.png" alt="Sistem Perpustakaan" width=72 height=80>
  </a>

  <h3 align="center">Sistem Perpustakaan SCB</h3>

  <p align="center">
    SMP Cendekia BAZNAS (SCB) merupakan sekolah tingkat SMP </br>
    yang dikelola oleh Badan Amil Zakat Nasional (BAZNAS).
    <br>
  </p>
</p>

## A. Deskripsi singkat

```text
Aplikasi Perpustakaan SCB merupakan Aplikasi berbasis Web yang bermanfaat untuk membantu staf 
perpustakaan dalam melaksanakan tugasnya, misalnya pencatatan data kunjungan, peminjaman dan 
pengembalian buku, mengelola data anggota, data buku dan pembuatan laporan. Aplikasi ini dapat 
diakses secara offline.
```

## B. Ruang lingkup pengembangan

```text
Isi 
```

## C. Diagram
```text
Dalam merancang suatu sistem, dilakukan pendekatan dengan cara membagi suatu permasalahan yang
besar menjadi sub-masalah yang lebih kecil sehingga permasalahan tersebut mudah untuk diatasi.
Untuk itu kami membuat model diagram untuk membantu proses perancangan sistem. 
```
### 1. Use Case Diagram
<p align="center"><a>
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/Perpustakaan_Use%20Case.png" alt="Use Case", width=400>
</a></p>

### 2. Activity Diagram
<a>
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/Perpustakaan_Class_Diagram.png" alt="Use Case", width=800>
</a>

### 3. Class Diagram
<a>
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/Perpustakaan_Class_Diagram.png" alt="Use Case", width=900>
</a>

## D. Fitur dan Tampilan Aplikasi
```text
Pada aplikasi perpustakaan SCB terdapat beberapa fitur yang dapat digunakan oleh staf perpustakaan
dalam mengelola segala kegiatan yang ada di perpustakaan, berikut ini penjabaran beberapa fitur 
yang terdapat pada aplikasi perpustakaan SCB.
```
### 1. Form Login
```text
Berikut ini merupakan tampilan dari form login, yang mana untuk bisa masuk pada aplikasi terdapat
dua input yang harus diisi yaitu username dan password yang telah terdaftar di dalam database.
```
<a>
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/images/Login.png" alt="Use Case", width=900>
</a>

### 2. Dashboard
```text
Pada dashboard terdapat total dari data secara keseluruhan, serta menampilkan grafik untuk persentase
kunjungan, serta data histogram untuk anggota perpustakaan.
```
<a>
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/images/Dashboard.png" alt="Use Case", width=900>
</a>

### 3. Pencatatan Kunjungan
```text
Pada menu "Isi Buku Tamu" staf perpustakaan dapat melakukan pencatatan kunjungan. sebelumnya tidak ada
pencatatan kunjungan untuk siswa, kini pada aplikasi perpustakaan SCB terdapat pencatatan kunjungan untuk
siswa maupun masyarakat. yang mana untuk masyarakat perlu juga di data beberapa informasi tambahan seperti
Nama lengkap, umur, alamat, Nomor telepon, serta tujuan datang. Sementara untuk siswa SCB cukup memasukkan
Nomor induk siswa saja.
```
<a>
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/images/Isi%20Buku%20Tame.png" alt="Use Case", width=900>
</a>

### 4. Pengelolaan Data Pustaka
```text
Pada menu bahan pustaka terdapat 3 sub menu antara lain buku, modul, dan jurnal. Menu bahan pustaka berfungsi 
untuk mengelola pendataan bahan pustaka yang ada di perpustakaan. "Tambah Buku" berfungsi untuk menambahkan 
buku yang yang baru masuk ke ke perpustakaan. Selain itu pada menu bahan pustaka kita juga dapat mengimpor data
dari luar database menggunakan fitur "Import" dan mengekspor data buku dalam bentuk Excel menggunakan fitur 
"Export". Selain itu juga terdapat fitur untuk menghapus data buku, dan fitur edit buku yang berfungsi untuk 
mengubah data buku apabila terdapat kesalahan input.
```
<a>
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/images/Data%20Buku.png" alt="Use Case", width=900>
</a>

### 5. Pengelolaan Peminjaman dan Pengembalian
```text
Menu peminjaman berfungsi untuk mencatat segala transaksi peminjaman dan pengembalian buku. Pada 
menu peminjaman kita dapat melakukan pencarian menggunakan fitur "search". Untuk mengubah status 
peminjaman buku kita dapat mengubahnya menggunakan fitur yang berada pada kolom "aksi".
```
<a>
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/images/Peminjaman.png" alt="Use Case", width=900>
</a>

```text
untuk menambah transaksi peminjaman kita bisa menekan tombol "tambah peminjaman buku" lalu terdapat 
dua input yang harus diisi antara lain nomor identitas serta kode buku.
```
<a>
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/images/Peminjaman%202.png" alt="Use Case", width=900>
</a>

### 6. Pengelolaan Data Kunjungan
```text
Isi 
```
<a>
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/images/Kunjungan%20Masy.png" alt="Use Case", width=900>
</a>

### 7. Pengelolaan Data Anggota
```text
Isi 
```
<a>
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/images/Data%20Siswa.png" alt="Use Case", width=900>
</a>

### 8. Pengaturan Admin
```text
Isi 
```
<a>
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/images/Pengaturan%20admin.png" alt="Use Case", width=900>
</a>


## E. Konsep OOP yang digunakan
```text
Isi 
```

## F. Tipe Desain Pengembangan
```text
Isi 
```

## Developer

1. Ryvan Arnandha Putra (G64170007) : Front end Developer
2. Fathiya (G64170010) : Project Manager (front end), Front end Developer
3. Zaki Muttaqin (G64170012) : Project Manager (main), Back end Developer
4. Dina Fadila (G64170021) : Front end Developer, Web Designer
5. Siti Nur Hasanah (G64170036) : Front end Developer
6. Ervan Sadhaly (G64170072) : Front end Developer
7. Hedianto Agus Widodo (G64170081) : Back end Developer
8. Nadhir Dhanu Dwinanda (G64170083) : Front end Developer
