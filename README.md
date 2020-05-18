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
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/Activity%20Diagram%20Kunjungan%20dan%20Peminjaman-1.png" alt="Activity Diagram Kunjungan dan Peminjaman", width=800>
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/Activity%20Diagram%20Kunjungan%20dan%20Peminjaman-2.png" width=800>
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/Activity%20Diagram%20Pengembalian.png" alt="Activity Diagram Pengembalian Buku", width=800>
</a>

### 3. Class Diagram
<a>
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/Perpustakaan%20Class%20Diagram.png" alt="Use Case", width=900>
</a>

## D. Fitur dan Tampilan Aplikasi
```text
Pada aplikasi perpustakaan SCB terdapat beberapa fitur yang dapat digunakan oleh staf perpustakaan
dalam mengelola segala kegiatan yang ada di perpustakaan, berikut ini penjabaran beberapa fitur 
yang terdapat pada aplikasi perpustakaan SCB.
```
### 1. Form Login

Berikut ini merupakan tampilan dari form login, yang mana untuk bisa masuk pada aplikasi terdapat
dua input yang harus diisi yaitu username dan password yang telah terdaftar di dalam database.

<a>
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/images/Login.png" alt="Use Case", width=900>
</a>

### 2. Dashboard

Pada dashboard terdapat total dari data secara keseluruhan, serta menampilkan grafik untuk persentase
kunjungan, serta data histogram untuk anggota perpustakaan.

<a>
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/images/Dashboard.png" alt="Use Case", width=900>
</a>

### 3. Pencatatan Kunjungan

Pada menu "Isi Buku Tamu" staf perpustakaan dapat melakukan pencatatan kunjungan. sebelumnya tidak ada
pencatatan kunjungan untuk siswa, kini pada aplikasi perpustakaan SCB terdapat pencatatan kunjungan untuk
siswa maupun masyarakat. yang mana untuk masyarakat perlu juga di data beberapa informasi tambahan seperti
Nama lengkap, umur, alamat, Nomor telepon, serta tujuan datang. Sementara untuk siswa SCB cukup memasukkan
Nomor induk siswa saja.

<a>
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/images/Isi%20Buku%20Tame.png" alt="Use Case", width=900>
</a>

### 4. Pengelolaan Data Pustaka

Pada menu bahan pustaka terdapat 3 sub menu antara lain buku, modul, dan jurnal. Menu bahan pustaka berfungsi 
untuk mengelola pendataan bahan pustaka yang ada di perpustakaan. "Tambah Buku" berfungsi untuk menambahkan 
buku yang yang baru masuk ke ke perpustakaan. Selain itu pada menu bahan pustaka kita juga dapat mengimpor data
dari luar database menggunakan fitur "Import" dan mengekspor data buku dalam bentuk Excel menggunakan fitur 
"Export". Selain itu juga terdapat fitur untuk menghapus data buku, dan fitur edit buku yang berfungsi untuk 
mengubah data buku apabila terdapat kesalahan input.

<a>
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/images/Data%20Buku.png" alt="Use Case", width=900>
</a>

### 5. Pengelolaan Peminjaman dan Pengembalian

Menu peminjaman berfungsi untuk mencatat segala transaksi peminjaman dan pengembalian buku. Pada 
menu peminjaman kita dapat melakukan pencarian menggunakan fitur "search". Untuk mengubah status 
peminjaman buku kita dapat mengubahnya menggunakan fitur yang berada pada kolom "aksi".

<a>
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/images/Peminjaman.png" alt="Use Case", width=900>
</a>

untuk menambah transaksi peminjaman kita bisa menekan tombol "tambah peminjaman buku" lalu terdapat 
dua input yang harus diisi antara lain nomor identitas serta kode buku.

<a>
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/images/Peminjaman%202.png" alt="Use Case", width=900>
</a>

### 6. Pengelolaan Data Kunjungan
Pada menu data kunjungan terdapat dua sub-menu yaitu siswa dan masyarakat pada sub-menu siswa berisi 
data kunjungan dari siswa SCB, sedangkan pada sub-menu masyarakat berisi data kunjungan dari masyarakat
luar yang berkunjung ke perpustakaan SCB

<a>
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/images/Kunjungan%20Masy.png" alt="Use Case", width=900>
</a>

### 7. Pengelolaan Data Anggota
Pada menu anggota perpustakaan terdapat 3 submenu yaitu siswa, pegawai, dan santri tahfidz. Pada menu anggota perpustakaan staf perpustakaan dapat melakukan import data dari luar database, Selain itu staf perpustakaan juga bisa melakukan edit data siswa jika terdapat kesalahan input pada waktu memasukkan data.

<a>
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/images/Data%20Siswa.png" alt="Use Case", width=900>
</a>

### 8. Pengaturan Admin
Pada menu pengaturan admin, staff perpustakaan dapat menambahkan admin perpustakaan dengan cara menekan tombol "tambah admin" yang berada pada bagian kiri. Lalu jika staf perpustakaan ingin menghapus akses admin, dapat dilakukan dengan cara menekan tombol delete yang terdapat pada kolom aksi.

<a>
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/images/Pengaturan%20admin.png" alt="Use Case", width=900>
</a>

## E. Konsep OOP yang digunakan
```text
Isi 
```

## F. Tipe Desain Pengembangan
```text
Dalam projek kami, kami menerapkan design pattern MVC (model, view, controller). MVC adalah suatu pola 
arsitektur yang digunakan dalam rekayasa perangkat lunak, prinsipnya bahwa logic suatu aplikasi harus 
dipisahkan dari presentation codenya. Sehingga design pattern ini membagi suatu aplikasi menjadi tiga 
bagian yang saling berhubungan. 
```

<a>
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/Peta%20Arsitektur.png" alt="Use Case", width=900>
</a>

### 1. Model
Model bertanggung jawab untuk mengambil data dan mengubahnya menjadi data yang lebih bermakna yang dapat dikelola oleh lapisan aplikasi yang lain dan mengirimkannya kembali ke lapisan yang sesuai.

Penerapan pada sistem :
1. Model Siswa : Pada model siswa terdapat informasi mengenai nama dan nis siswa sekolah cendekia baznas yang akan dibutuhkan ketika siswa berkunjung ke perpustakaan dan ketika siswa melakukan peminjaman buku di perpustakaan
2. Model Pegawai : Pada model pegawai terdapat informasi mengenai nama dan nip pegawai sekolah cendekia baznas yang akan dibutuhkan ketika pegawai tersebut meminjam buku di perpustakaan
3. Model Buku : Pada model buku terdapat informasi mengenai buku yang ada di perpustakaan yang akan dibutuhkan ketika seseorang melakukan peminjaman buku
4. Model Peminjaman Buku : Pada model ini terdapat informasi mengenai peminjaman buku yang dilakukan oleh siswa dan pegawai sekolah cendekia baznas
5. Model Kunjungan : Pada model ini terdapat informasi mengenai kunjungan perpustakaan yang dilakukan oleh siswa sekolah cendekia baznas dan masyarakat sekitar sekolah 

### 2. View
View mendefinisikan dengan tepat apa yang disajikan kepada pengguna. Biasanya, Controller meneruskan data ke setiap Tampilan. Tampilan juga mengumpulkan data dari pengguna. Di sini kami menggunakan bahasa pemrograman PHP untuk tampilan. Pada framework laravel terdapat fitur Blade. Blade berfungsi untuk menampilkan output pada view. blade juga digunakan untuk membuat layout website.

Penerapan pada sistem :
1. Form login : berisi tampilan awal saat web dijalankan berupa form login yang dapat diisi oleh admin untuk masuk ke dalam sistem
2. Anggota Perpustakaan : berisi tampilan daftar siswa, pegawai, dan santri tahfidz di sekolah cendekia BAZNAS
3. Bahan pustaka : berisi tampilan daftar bahan pustaka yang ada di perpustakaan sekolah cendekia BAZNAS
4. Peminjaman Buku : berisi tampilan daftar peminjaman buku yang dilakukan siswa dan pegawai
5. Kunjungan (Siswa dan Masyarakat): berisi tampilan daftar kunjungan yang dilakukan siswa dan masyarakat. Tampilan siswa dan masyarakat dibuat terpisah untuk memudahkan admin.
6. Isi Buku Tamu (Siswa dan Masyarakat) : berisi input untuk mendata kunjungan yang dilakukan oleh siswa dan masyarakat sekitar. Form dibuat terpisah karena siswa cukup memasukkan nis nya saja, namun masyarakat perlu memasukkan informasi seperti umur, alamat, telepon dan alasan berkunjung.

### 3. Controller
Controller merupakan bagian yang menjembatani model dan view. Controller berisi perintah-perintah yang berfungsi untuk memproses suatu data dan mengirimkannya ke halaman web.

Penerapan pada sistem :
1. Auth Controller
Auth controller digunakan untuk mengatur autentikasi saat login sehingga hanya yang menjadi admin yang bisa mengakses sistem perpustakaan
2. Controller untuk setiap model


## Developer
| Nama                 | NIM           | Job Desk                     |
| -------------------- |:-------------:| :----------------------------|
| Ryvan Arnandha Putra | G64170007     | Front end Developer          |
| Fathiya              | G64170010     | Project Manager (front end), Front end Developer |
| Zaki Muttaqin        | G64170012     | Project Manager (main), Back end Developer |
| Dina Fadila          | G64170021     | Front end Developer, Web Designer |
| Siti Nur Hasanah     | G64170036     | Front end Developer |
| Ervan Sadhaly        | G64170072     | Front end Developer |
| Hedianto Agus Widodo | G64170081     | Back end Developer |
| Nadhir Dhanu Dwinanda| G64170083     | Front end Developer |

