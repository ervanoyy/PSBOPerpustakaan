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

## A. Deskripsi Singkat

```text
Aplikasi Perpustakaan SCB merupakan Aplikasi berbasis Web yang bermanfaat untuk membantu staf 
perpustakaan dalam melaksanakan tugasnya, misalnya pencatatan data kunjungan, peminjaman dan 
pengembalian buku, mengelola data anggota, data buku dan pembuatan laporan. 
```

## B. Ruang Lingkup Pengembangan

```text
Aplikasi yang dirancang adalah sistem aplikasi berbasis Web dengan deskripsi yang dibahas 
pada sub-bahasan sebelumnya.
Sehingga sistem ini memiliki ruang lingkup sebagai berikut :
```
### 1. Sistem Pencatatan Data Kunjungan
Sistem pencatatan data kunjungan disimpan dalam database dengan operasi insert, delete, dan view data yang ditampilkan dalam web. Data yang di input berdasarkan pengunjung yang datang sehingga datanya pun tersimpan secara terpisah di dalam database (siswa dan masyarakat). Dimana, untuk siswa SCB hanya perlu memasukkan Nomor Induk Siswa saja, sementara untuk masyarakat menggunakan beberapa informasi tambahan seperti nama lengkap, umur, alamat, nomor telepon, serta tujuan datang.

### 2. Sistem Pendataan Bahan Pustaka
Jenis bahan pustaka terdiri dari buku, modul dan jurnal. Namun, sistem pendataan bahan pustakanya disimpan menjadi satu dalam database dengan operasi insert, update, delete, dan view data yang ditampilkan dalam web. Data input untuk masing-masing jenis bahan pustaka yaitu berupa kode buku inventaris, kode buku lemari, judul buku, gambar, kategori, jenis pustaka, pengarang, tanggal input, stok, status buku, keterangan (Rusak atau tidak).

### 3. Sistem Peminjaman dan Pengembalian Bahan Pustaka
Sistem peminjaman buku disimpan dalam database dengan operasi insert, update, delete, dan view data yang ditampilkan dalam web. Data input peminjaman berupa nama, kode buku, judul buku, tanggal peminjaman, batas pengembalian, tanggal pengembalian, status pengembalian, dan aksi untuk pengecekkan status peminjaman (sudah dikembalikan atau belum).

### 4. Sistem Pendataan Anggota Perpustakaan
Status keanggotaan di perpustakaan terdiri dari siswa, pegawai, dan santri tahfidz. Sistem pendataan anggota perpustakaan disimpan dalam database dengan operasi insert, update, delete, dan view data yang ditampilkan dalam web. Data kunjungan tersimpan ke dalam database secara terpisah berdasarkan status keanggotaannya sehingga input datanya pun berbeda. Untuk Siswa datanya adalah NIS, nama, dan Kelas. Lalu untuk pegawai adalah NIP, nama, alamat, dan tanggal masuk. Dan untuk santri tahfidz adalah NIST, nama, dan jenis kelamin.

### 5. Sistem Pengaturan Admin
Sistem pengaturan admin disimpan dalam database dengan operasi insert, delete, dan view data yang ditampilkan dalam web. Data input untuk menambahkan admin berupa Username dan email. 


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
<p align="center"><a>
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/Activity%20Diagram%20Kunjungan%20dan%20Peminjaman.png" alt="Activity Diagram Kunjungan dan Peminjaman", width=800>
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/Activity%20Diagram%20Pengembalian.png" alt="Activity Diagram Pengembalian Buku", width=800>
</a></p>

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

Menu bahan pustaka berfungsi untuk mengelola pendataan bahan pustaka yang ada di perpustakaan. "Tambah Buku" berfungsi untuk menambahkan 
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
<img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/images/peminjaman.JPG" alt="Use Case", width=900>
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
### 1. Encapsulation
Encapsulation adalah membungkus class dan menjaga apa apa saja yang ada didalam class tersebut, baik method ataupun atribut, agar tidak dapat di akses oleh class lainnya. Untuk menjaga hal tersebut dalam Encapsulation dikenal nama Hak Akses Modifier yang terdiri dari : Public, Private, dan Protected.

```text
...
class DashboardController extends Controller
{
    public function index() {
        $total_buku = \App\Buku::all()->count();
        $total_kunjungan = \App\KunjunganMasyarakat::all()->count();

        return view('dashboard', compact('total_buku', 'total_kunjungan'));
    }
}
...
```
### 2. Inheritance
Penggunaan inheritance dalam OOP adalah untuk mengklasifikasikan object dalam program sesuai karakteristik umum dan fungsinya yang membuat pekerjaan bersama object lebih mudah dan lebih intuitif.
```text
...
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
...
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

### Project Manager 

| Nama                 | NIM           |
| -------------------- |:-------------:| 
| Zaki Muttaqin        | G64170012     |

### Frontend Developer

| Nama                 | NIM           | Job Desk                     |
| -------------------- |:-------------:| :----------------------------|
| Ryvan Arnandha Putra | G64170007     | Peminjaman, Santri          |
| Fathiya              | G64170010     | Buku, Peminjaman, Pegawai |
| Dina Fadila          | G64170021     | Login, Dashboard, Main Layout, Siswa, Form Buku |
| Siti Nur Hasanah     | G64170036     | Data Kunjungan, Peminjaman |
| Ervan Sadhaly        | G64170072     | Form Peminjaman, Form Kunjungan |
| Nadhir Dhanu Dwinanda| G64170083     | Buku |

### Backend Developer

| Nama                 | NIM           | Job Desk                     |
| -------------------- |:-------------:| :----------------------------|
| Ryvan Arnandha Putra | G64170007     | Santri          |
| Fathiya              | G64170010     | Kunjungan Siswa, Admin, Export dan Import Excel |
| Hedianto Agus Widodo | G64170081     | Peminjaman, Buku, Kunjungan Masyarakat |
| Nadhir Dhanu Dwinanda| G64170083     | Buku |
| Zaki Muttaqin        | G64170012     | Siswa, Pegawai, Santri, Peminjaman, Kunjungan Siswa |

